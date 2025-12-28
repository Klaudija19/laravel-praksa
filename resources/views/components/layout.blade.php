<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Laravel Jobs' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

        {{-- Left navigation --}}
        <nav class="flex space-x-4">
            <a href="/" class="text-gray-700 hover:text-blue-600">Home</a>
            <a href="/jobs" class="text-gray-700 hover:text-blue-600">Jobs</a>
            <a href="/contact" class="text-gray-700 hover:text-blue-600">Contact</a>
        </nav>

        {{-- Right navigation --}}
        <div class="flex items-center space-x-4">
            @auth
                <a href="{{ route('jobs.create') }}"
                   class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-700">
                    + Create Job
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-sm text-red-600 hover:underline">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:underline">
                    Login
                </a>
                <a href="{{ route('register') }}" class="text-sm text-gray-700 hover:underline">
                    Register
                </a>
            @endauth
        </div>

    </div>
</header>

<main class="max-w-7xl mx-auto px-4 py-8">
    @isset($heading)
        <h1 class="text-2xl font-bold mb-6">
            {{ $heading }}
        </h1>
    @endisset

    {{ $slot }}
</main>

</body>
</html>








