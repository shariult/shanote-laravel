<style>
  [x-cloak] {
    display: none !important;
  }
</style>

<x-layout-note>

  <x-note-sidebar />

  <!-- Main Content -->
  <main class="flex-1 flex flex-col min-w-0 overflow-hidden">

    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto p-4 md:p-8" x-data="{
        selectedColor: 'bg-indigo-500',
        isPinned: 0,
        isPrivate: 0,
        isCompleted: 0,
        imagePreview: null,
        handleImage(e) {
            const file = e.target.files[0];
            if (file) this.imagePreview = URL.createObjectURL(file);
        }
    }">
      <!-- Top Actions -->
      <header class="h-16 px-6 border-b border-slate-100 flex items-center justify-between">
        <h1 class="text-lg font-bold text-slate-800">New Note</h1>
        <div class="flex items-center space-x-3">
          <button class="px-4 py-2 text-slate-500 hover:text-slate-700 font-medium transition">
            Discard
          </button>
          <button
            class="px-6 py-2 bg-indigo-600 text-white rounded-lg font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-200"
            type="submit" form="noteStore">
            Save Note
          </button>
        </div>
      </header>

      <form action="{{ route('notes.store') }}" method="POST" class="flex-1 flex flex-col md:flex-row overflow-hidden"
        id="noteStore" enctype="multipart/form-data">
        @csrf
        <!-- Content Area -->
        <div class="flex-1 overflow-y-auto p-6 md:p-12 space-y-8">
          <!-- Color Indicator -->
          <div class="flex items-center space-x-2">
            <div :class="selectedColor" class="w-4 h-4 rounded-full transition-all duration-300"></div>
            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Note Theme</span>
          </div>

          <!-- Title Input -->
          <div>
            <input type="text" name="title" placeholder="Note Title"
              class="w-full text-4xl md:text-5xl font-bold border @error('title') border-red-500 @else border-gray-300 @enderror rounded px-4 focus:ring-0 placeholder-slate-200 text-slate-900"
              required />
            @error('title')
              <p class="text-red-500">{{ $message }}</p>
            @enderror
          </div>

          <!-- Short Description -->
          <div class="space-y-2">
            <label class="text-sm font-bold text-slate-400 uppercase">Short Summary</label>
            <textarea name="description" rows="2" placeholder="What's this note about? (Briefly)"
              class="w-full text-xl text-slate-600 border-none focus:ring-0 placeholder-slate-200 resize-none italic border-l-4 border-slate-100 pl-4"></textarea>
            @error('description')
              <p class="text-red-500">{{ $message }}</p>
            @enderror
          </div>

          <!-- Image Preview (Optional) -->
          <template x-if="imagePreview">
            <div class="relative rounded-2xl overflow-hidden group">
              <img :src="imagePreview" class="w-full max-h-96 object-cover shadow-lg" />
              <button x-on:click="imagePreview = null"
                class="absolute top-4 right-4 p-2 bg-white/90 rounded-full text-red-600 shadow hover:bg-white transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
          </template>

          <!-- Long Description (Main Content) -->
          <div class="space-y-2">
            <label class="text-sm font-bold text-slate-400 uppercase">Detailed Content</label>
            <textarea name="description_long" rows="15" placeholder="Start your clear-mind journey here..."
              class="w-full text-lg text-slate-700 border-none focus:ring-0 placeholder-slate-200 leading-relaxed"></textarea>
          </div>
          @error('description_long')
            <p class="text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <!-- Settings Sidebar -->
        <div class="w-full md:w-80 bg-slate-50 border-l border-slate-200 overflow-y-auto p-6 space-y-8">
          <!-- Color Picker -->
          <div>
            <label class="block text-xs font-bold text-slate-500 uppercase mb-4 tracking-wider">Note
              Color</label>
            <div class="flex flex-wrap gap-3">
              <template
                x-for="color in ['bg-indigo-500', 'bg-rose-500', 'bg-amber-500', 'bg-emerald-500', 'bg-sky-500', 'bg-slate-800']">
                <button type="button" x-on:click="selectedColor = color"
                  :class="[color, selectedColor === color ? 'ring-4 ring-white shadow-lg scale-110' :
                      'opacity-70 hover:opacity-100'
                  ]"
                  class="w-8 h-8 rounded-full transition-all duration-200"></button>
              </template>
            </div>
          </div>

          <!-- Toggles -->
          <div class="space-y-4">
            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider">Settings</label>

            <!-- Pinned -->
            <div class="flex items-center justify-between p-3 bg-white rounded-xl border border-slate-200 shadow-sm">
              <div class="flex items-center space-x-3">
                <svg class="w-5 h-5 text-amber-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"></path>
                </svg>
                <span class="text-sm font-semibold text-slate-700">Pin to top</span>
              </div>
              <button type="button" x-on:click="isPinned = !isPinned"
                :class="isPinned ? 'bg-indigo-600' : 'bg-slate-300'"
                class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full transition-colors duration-200">
                <span :class="isPinned ? 'translate-x-6' : 'translate-x-1'"
                  class="inline-block h-4 w-4 transform rounded-full bg-white mt-1 transition duration-200"></span>
              </button>
              <input type="hidden" name="is_pinned" :value="isPinned" />
              @error('is_pinned')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <!-- Private -->
            <div class="flex items-center justify-between p-3 bg-white rounded-xl border border-slate-200 shadow-sm">
              <div class="flex items-center space-x-3">
                <svg class="w-5 h-5 text-slate-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                    clip-rule="evenodd"></path>
                </svg>
                <span class="text-sm font-semibold text-slate-700">Private note</span>
              </div>
              <button type="button" x-on:click="isPrivate = !isPrivate"
                :class="isPrivate ? 'bg-indigo-600' : 'bg-slate-300'"
                class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full transition-colors duration-200">
                <span :class="isPrivate ? 'translate-x-6' : 'translate-x-1'"
                  class="inline-block h-4 w-4 transform rounded-full bg-white mt-1 transition duration-200"></span>
              </button>
              <input type="hidden" name="is_private" :value="isPrivate" />
              @error('is_private')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <!-- Completed -->
            <div class="flex items-center justify-between p-3 bg-white rounded-xl border border-slate-200 shadow-sm">
              <div class="flex items-center space-x-3">
                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
                </svg>
                <span class="text-sm font-semibold text-slate-700">Mark as done</span>
              </div>
              <button type="button" x-on:click="isCompleted = !isCompleted"
                :class="isCompleted ? 'bg-indigo-600' : 'bg-slate-300'"
                class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full transition-colors duration-200">
                <span :class="isCompleted ? 'translate-x-6' : 'translate-x-1'"
                  class="inline-block h-4 w-4 transform rounded-full bg-white mt-1 transition duration-200"></span>
              </button>
              <input type="hidden" name="is_completed" :value="isCompleted" />
              @error('is_completed')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <!-- File Uploads -->
          <div class="space-y-4">
            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider">Attachments</label>

            <!-- Image Input -->
            <div class="relative">
              <input type="file" name="image_path" accept="image/*" @change="handleImage" class="hidden"
                id="image-upload" />
              <label for="image-upload"
                class="flex items-center justify-center w-full px-4 py-3 bg-white border border-dashed border-slate-300 rounded-xl text-sm font-medium text-slate-600 hover:bg-slate-50 cursor-pointer transition">
                <svg class="w-5 h-5 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                  </path>
                </svg>
                Add Cover Image
              </label>
              @error('image_path')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <!-- General File Input -->
            <div class="relative">
              <input type="file" name="file_path" class="hidden" id="file-upload" />
              <label for="file-upload"
                class="flex items-center justify-center w-full px-4 py-3 bg-white border border-dashed border-slate-300 rounded-xl text-sm font-medium text-slate-600 hover:bg-slate-50 cursor-pointer transition">
                <svg class="w-5 h-5 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                  </path>
                </svg>
                Attach PDF or Doc
              </label>
              @error('file_path')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>

          </div>
        </div>
      </form>
    </div>
  </main>

</x-layout-note>
