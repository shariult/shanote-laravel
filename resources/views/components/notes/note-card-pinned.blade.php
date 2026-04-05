@props(['note'])

<!-- Pinned Note Card -->
<div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-amber-400 hover:shadow-md transition group relative">

  @if ($note->is_completed)
    <div class="flex justify-between items-start mb-4">
      <span class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold uppercase rounded">Completed</span>
      <div class="flex space-x-1 opacity-0 group-hover:opacity-100 transition">
        <button class="p-1 hover:bg-slate-100 rounded text-slate-400">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
            </path>
          </svg>
        </button>
      </div>
    </div>
  @endif

  <h3 class="font-bold text-slate-800 text-lg mb-2">
    <a href="{{ route('notes.show', $note->id) }}">{{ $note->title }}</a>
  </h3>
  <p class="text-slate-600 text-sm line-clamp-3">
    {{ Str::limit($note->description, 100) }}
  </p>
  <div class="mt-6 flex items-center justify-between">
    <div class="flex items-center space-x-2">
      <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path
          d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
        </path>
      </svg>
      <span class="text-xs text-slate-400 font-medium">Strategy.jpg</span>
    </div>
    <span class="text-[11px] text-slate-400">{{ $note->created_at->format('d-m-Y') }}</span>
  </div>
</div>
