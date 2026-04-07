<!-- Header -->
<header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 md:px-8">
  <div class="flex items-center space-x-4">
    <button x-on:click="sidebarOpen = true" class="md:hidden p-2 text-slate-600">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
    <div class="relative max-w-md hidden sm:block">
      <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
      </span>
      <input type="text" placeholder="Search your notes..."
        class="pl-10 pr-4 py-2 bg-slate-100 border-transparent focus:bg-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-lg text-sm transition" />
    </div>
  </div>

  <div class="flex items-center space-x-4">
    <a href="/notes/create"
      class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition flex items-center space-x-2">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
      </svg>
      <span class="hidden sm:inline">New Note</span>
    </a>
    <div
      class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold border border-indigo-200">
      JD
    </div>
  </div>
</header>
