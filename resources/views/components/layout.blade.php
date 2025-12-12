<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading ?? 'Page' }}</title>

    <!--TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

<!-- NAVIGATION BAR -->
<nav class="bg-gray-900 text-white px-6 py-3 flex items-center justify-between">

    <!-- LEFT SECTION -->
    <div class="flex items-center space-x-6">
        <!-- LOGO -->
        <img src="https://laracasts.com/images/logo/icon.svg"
             class="h-8" alt="Logo">

        <!-- LINKS -->
        <x-navlink href="/" class="{{ request()->is('/') ? 'bg-gray-800 px-3 py-1 rounded' : '' }}">Home</x-navlink>
        <x-navlink href="/about" class="{{ request()->is('about') ? 'bg-gray-800 px-3 py-1 rounded' : '' }}">About</x-navlink>
        <x-navlink href="/contact" class="{{ request()->is('contact') ? 'bg-gray-800 px-3 py-1 rounded' : '' }}">Contact</x-navlink>
    </div>

    <!-- RIGHT SECTION -->
    <div class="flex items-center space-x-4">
        <!-- Notification Icon -->
        <span class="text-xl">🔔</span>

        <!-- Avatar -->
        <img src="https://i.pravatar.cc/40"
             class="h-8 w-8 rounded-full border border-white" alt="avatar">
    </div>
</nav>

<!-- PAGE HEADER -->
<header class="bg-white border-b p-6">
    <h1 class="text-2xl font-semibold">{{ $heading }}</h1>
</header>

<!-- MAIN CONTENT -->
<main class="p-6">
    {{ $slot }}
</main>

</body>
</html>

