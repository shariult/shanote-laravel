<!-- Navigation -->
<nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <div class="flex items-center space-x-2">
        <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
            </path>
          </svg>
        </div>
        <span class="text-xl font-bold tracking-tight">ShaNote</span>
      </div>

      <div class="hidden md:flex space-x-8 items-center">
        <a href="#problem" class="text-slate-600 hover:text-indigo-600 transition">The Problem</a>
        <a href="#features" class="text-slate-600 hover:text-indigo-600 transition">Features</a>
        <a href="/login" class="text-slate-600 hover:text-indigo-600 transition">Login</a>
        <a href="/signup"
          class="bg-indigo-600 text-white px-5 py-2 rounded-full font-medium hover:bg-indigo-700 transition shadow-lg shadow-indigo-200">Get
          Started Free</a>
      </div>

      <!-- Mobile Toggle -->
      <button @click="mobileMenu = !mobileMenu" class="md:hidden p-2">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path x-show="!mobileMenu" d="M4 6h16M4 12h16m-7 6h7"></path>
          <path x-show="mobileMenu" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
  </div>
  <!-- Mobile Menu -->
  <div x-show="mobileMenu" class="md:hidden bg-white border-b border-slate-200 p-4 space-y-4">
    <a href="#features" class="block text-slate-600">Features</a>
    <a href="/login" class="block text-slate-600">Login</a>
    <a href="/signup" class="block w-full text-center bg-indigo-600 text-white px-5 py-2 rounded-lg">Get
      Started</a>
  </div>
</nav>
