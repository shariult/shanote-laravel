<x-layout-main>

  <!-- Hero Section (The Character) -->
  <header class="pt-32 pb-16 md:pt-48 md:pb-32 px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h1 class="text-5xl md:text-7xl font-bold tracking-tight text-slate-900 mb-6">
        Your brain is for having ideas,
        <span class="text-indigo-600 text-underline">not holding them.</span>
      </h1>
      <p class="text-xl text-slate-600 mb-10 leading-relaxed max-w-2xl mx-auto">
        Stop losing your best ideas to the chaos of daily life.
        ShaNote is the second brain that helps you organize,
        visualize, and execute your thoughts.
      </p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="/signup"
          class="px-8 py-4 bg-indigo-600 text-white rounded-full text-lg font-semibold hover:bg-indigo-700 transition shadow-xl shadow-indigo-100">Start
          Writing For Free</a>
        <a href="#features"
          class="px-8 py-4 bg-white border border-slate-200 text-slate-700 rounded-full text-lg font-semibold hover:bg-slate-50 transition">See
          How It Works</a>
      </div>
    </div>
  </header>

  <!-- Problem Section (The Stakes) -->
  <section id="problem" class="py-20 bg-slate-900 text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-indigo-400 font-semibold uppercase tracking-widest text-sm mb-4">
            The Problem
          </h2>
          <h3 class="text-3xl md:text-4xl font-bold mb-6">
            Traditional note-taking is where ideas go to die.
          </h3>
          <p class="text-slate-400 text-lg mb-6 leading-relaxed">
            Most apps are too complex or too simple. Your
            brilliant ideas get buried under menus or lost in a
            sea of plain text. You feel overwhelmed,
            disorganized, and worried you’ll forget that one
            "million-dollar idea."
          </p>
          <ul class="space-y-4">
            <li class="flex items-center space-x-3 italic text-slate-300">
              <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Scattered sticky notes everywhere.</span>
            </li>
            <li class="flex items-center space-x-3 italic text-slate-300">
              <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>No way to organize images and files with
                text.</span>
            </li>
          </ul>
        </div>
        <div class="relative">
          <div class="absolute -inset-4 bg-indigo-500/20 blur-3xl rounded-full"></div>
          <img src="{{ asset('/img/note-and-pen.jpg') }}" alt="Unorganized desk"
            class="relative rounded-2xl shadow-2xl grayscale hover:grayscale-0 transition duration-700" />
        </div>
      </div>
    </div>
  </section>

  <!-- The Guide/Plan Section -->
  <section id="features" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-5xl font-bold mb-4">
          A simple plan for mental clarity.
        </h2>
        <p class="text-slate-600 text-lg">
          We’ve designed ShaNote to be the guide your creativity
          needs.
        </p>
      </div>

      <div class="grid md:grid-cols-3 gap-12">
        <!-- Step 1 -->
        <div class="text-center group">
          <div
            class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-indigo-600 group-hover:text-white transition duration-300">
            <span class="text-2xl font-bold">1</span>
          </div>
          <h4 class="text-xl font-bold mb-3">
            Capture Instantly
          </h4>
          <p class="text-slate-600">
            Quickly jot down titles and descriptions. Add colors
            to categorize your mood or priority.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="text-center group">
          <div
            class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-indigo-600 group-hover:text-white transition duration-300">
            <span class="text-2xl font-bold">2</span>
          </div>
          <h4 class="text-xl font-bold mb-3">Enrich & Attach</h4>
          <p class="text-slate-600">
            Go deep with long descriptions, upload supporting
            images, and attach essential files.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="text-center group">
          <div
            class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-indigo-600 group-hover:text-white transition duration-300">
            <span class="text-2xl font-bold">3</span>
          </div>
          <h4 class="text-xl font-bold mb-3">Pin & Share</h4>
          <p class="text-slate-600">
            Keep your best work at the top. Make notes public to
            share with the world or keep them private.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Success Section -->
  <section class="py-20 bg-indigo-50">
    <div class="max-w-5xl mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-12 text-slate-800">
        Everything you need to stay organized.
      </h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        <div class="p-6 bg-white rounded-xl shadow-sm">
          <p class="font-bold text-indigo-600 text-lg italic">
            Pinned Notes
          </p>
        </div>
        <div class="p-6 bg-white rounded-xl shadow-sm">
          <p class="font-bold text-indigo-600 text-lg italic">
            File Support
          </p>
        </div>
        <div class="p-6 bg-white rounded-xl shadow-sm">
          <p class="font-bold text-indigo-600 text-lg italic">
            Color Coding
          </p>
        </div>
        <div class="p-6 bg-white rounded-xl shadow-sm">
          <p class="font-bold text-indigo-600 text-lg italic">
            Privacy Control
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Footer (Success/Avoid Failure) -->
  <section class="py-24 bg-indigo-600">
    <div class="max-w-4xl mx-auto px-4 text-center text-white">
      <h2 class="text-4xl md:text-5xl font-bold mb-8">
        Ready to clear the clutter?
      </h2>
      <p class="text-xl text-indigo-100 mb-10">
        Join 10,000+ creators who never let a good idea escape
        again.
      </p>
      <a href="/signup"
        class="px-10 py-5 bg-white text-indigo-600 rounded-full text-xl font-bold hover:bg-slate-100 transition shadow-2xl">Create
        Your First Note — It's Free</a>
      <p class="mt-6 text-sm text-indigo-200">
        No credit card required. Cancel anytime.
      </p>
    </div>
  </section>


</x-layout-main>
