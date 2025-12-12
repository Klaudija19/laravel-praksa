<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading ?? 'Page' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

<!-- NAVIGATION BAR -->
<nav class="bg-gray-900 text-white px-6 py-3 flex items-center justify-between">
    <div class="flex items-center space-x-6">
        <img src="https://laracasts.com/images/logo/icon.svg" class="h-8" alt="Logo">

        <x-navlink href="/" :active="request()->is('/')">Home</x-navlink>
        <x-navlink href="/about" :active="request()->is('about')">About</x-navlink>
        <x-navlink href="/contact" :active="request()->is('contact')">Contact</x-navlink>
        <x-navlink href="/jobs" :active="request()->is('jobs')">Jobs</x-navlink>
    </div>

    <div class="flex items-center space-x-4">
        <span class="text-xl">🔔</span>
        <img src="https://i.pravatar.cc/40" class="h-8 w-8 rounded-full border border-white" alt="avatar">
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


