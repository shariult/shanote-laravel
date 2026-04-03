<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title ?? 'Your Note Dashboard' }}</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet" />
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif
</head>

<body class="bg-slate-50">

  <div class="flex h-screen overflow-hidden" x-data="{ sidebarOpen: false }">
    {{ $slot }}
  </div>

  {{-- Footer --}}
  <footer class="py-12 border-t border-slate-200 bg-white text-slate-500 text-center">
    <p>&copy; 2026 <a href="https://shariul.com" target="_blank" class="underline hover:text-blue-600">Shariul</a>.
      All
      rights reserved.</p>
  </footer>
</body>

</html>
