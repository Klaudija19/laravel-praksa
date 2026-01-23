<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JobsBoard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<nav class="bg-white shadow mb-8">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex gap-6">
            <a href="{{ route('home') }}" class="font-semibold">Home</a>
            <a href="{{ route('jobs.index') }}">Jobs</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>

        <div class="flex gap-4 items-center">
            @auth
                <span class="text-sm text-gray-600">{{ auth()->user()->email }}</span>

                <a href="{{ route('jobs.create') }}"
                   class="bg-green-600 text-white px-3 py-1 rounded text-sm">
                    + Create Job
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-red-600">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </div>
</nav>

<main class="max-w-6xl mx-auto px-6">
    {{ $slot }}
</main>

</body>
</html>














