<x-layout-note>

  <x-note-sidebar />

  <!-- Main Content -->
  <main class="flex-1 flex flex-col min-w-0 overflow-hidden">

    <x-note-header />

    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto p-4 md:p-8">

      <!-- Pinned Section -->
      <div class="mb-10">
        <div class="flex items-center space-x-2 mb-6">
          <svg class="w-5 h-5 text-amber-500" fill="currentColor" viewBox="0 0 20 20">
            <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"></path>
          </svg>
          <h2 class="text-sm font-bold text-slate-500 uppercase tracking-wider">
            Pinned Notes
          </h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          @forelse($pinnedNotes as $note)
            <x-note-card-pinned :note="$note" />
          @empty
            <p class="text-lg text-gray-700 tracking-widest">No Notes Pinned!</p>
          @endforelse
        </div>
      </div>

      <!-- Recent Notes Section -->
      <div>

        <div class="flex items-center justify-between mb-6">
          <h2 class="text-sm font-bold text-slate-500 uppercase tracking-wider">
            All Notes
          </h2>

          <img src="/icons/all-notes-icon.svg" alt="icon">

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
          @forelse($notes as $note)
            <x-note-card :note="$note" />
          @empty
            <p class="text-lg text-center text-gray-700 tracking-widest">No Notes found!</p>
          @endforelse
        </div>
      </div>
    </div>
  </main>

</x-layout-note>
