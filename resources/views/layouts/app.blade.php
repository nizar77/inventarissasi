<!DOCTYPE html>

<html class="dark" lang="id">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="web_dashboard" name="shell-type" />
  <title>InventaEdu - Dashboard Admin Sarpras</title>
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link
    href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&amp;family=Manrope:wght@600;700;800&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    rel="stylesheet" />
  {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <x-partials.head />
</head>

<body class="bg-background font-body-md text-on-surface antialiased overflow-x-hidden">
  <!-- Mobile Backdrop Overlay -->
  <div
    class="fixed inset-0 bg-black/60 backdrop-blur-sm z-40 hidden transition-opacity duration-300 opacity-0 lg:hidden"
    id="sidebar-backdrop"></div>
  <!-- Sidebar Component -->
  <x-partials.sidebar />
  <!-- Main Content Wrapper (Adapts with sidebar state) -->
  <div class="min-h-screen flex flex-col transition-all duration-300 lg:pl-72" id="content-wrapper">
    <!-- Top Header Navigation -->
    <x-partials.header />
    <!-- Main Content Area -->
    <main class="flex-1 w-full p-4 sm:p-6 lg:p-8 flex flex-col gap-6">
      <!-- Top Header Welcome & Quick Action Buttons -->
      <h1>hallo</h1>
      <!-- Main Content Slot -->
      {{ $slot }}
    </main>
  </div>
  <!-- Interactive JavaScript for Responsive Sidebar & Drawer Behavior -->
  <x-partials.script />
</body>

</html>