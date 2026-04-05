@props(['note'])

<div
  class="bg-white rounded-3xl border border-slate-200 overflow-hidden flex flex-col group hover:shadow-2xl hover:border-indigo-100 transition-all duration-500">

  <!-- Thumbnail (Conditional) -->
  <div class="h-48 overflow-hidden relative">
    @if ($note->image_path)
      <img src="{{ $note->image_path }}" alt="{{ $note->title }}"
        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
    @endif

    <a href="{{ route('notes.show', $note->id) }}">
      <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
    </a>
  </div>

  <div class="p-8 flex-1 flex flex-col">

    <!-- Author Header -->
    <div class="flex items-center justify-between mb-6">
      <div class="flex items-center space-x-3">
        @if ($note->user->profile_image)
          <img src="{{ $note->user->profile_image }}" alt="{{ $note->user->name }}"
            class="w-10 h-10 rounded-full ring-2 ring-slate-50" />
        @endif
        <div>
          <p class="text-sm font-bold text-slate-900">{{ $note->user->name }}</p>
          <p class="text-[11px] text-slate-400 font-medium">&commat;{{ $note->user->username }}</p>
        </div>
      </div>

      <button class="text-slate-300 hover:text-indigo-600 transition" title="Save to my notes">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
        </svg>
      </button>
    </div>

    <!-- Note Body -->
    <div class="border-l-4 pl-4 mb-4 border-purple-400">
      <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-indigo-600 transition"><a
          href="{{ route('notes.show', $note->id) }}">{{ $note->title }}</a></h3>
      <p class="text-slate-500 text-sm leading-relaxed line-clamp-3">{{ Str::limit($note->description, 100) }}</p>
    </div>

    <!-- Action Footer -->
    <div class="mt-auto pt-6 flex items-center justify-between border-t border-slate-50">

      <a href="{{ route('notes.show', $note->id) }}"
        class="text-sm font-bold text-indigo-600 hover:text-indigo-800 transition">Read Full
        Note &rarr;</a>

      <div class="flex items-center space-x-1 text-slate-400">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
          <path fill-rule="evenodd"
            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
            clip-rule="evenodd"></path>
        </svg>
        <span class="text-xs font-medium">1.2k</span>
      </div>

    </div>

  </div>
</div>
