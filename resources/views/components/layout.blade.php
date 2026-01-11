<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jobs Board</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

<nav class="bg-slate-900 text-white px-6 py-4">
    <div class="max-w-6xl mx-auto flex justify-between items-center">

        <!-- LEFT -->
        <div class="flex items-center gap-6">
            <a href="/" class="font-bold text-lg">JobsBoard</a>
            <a href="/" class="hover:underline">Home</a>
            <a href="/jobs" class="hover:underline">Jobs</a>
            <a href="/contact" class="hover:underline">Contact</a>
        </div>

        <!-- RIGHT -->
        <div class="flex items-center gap-4">
            @auth
                <span class="text-sm">{{ auth()->user()->email }}</span>

                <form method="POST" action="/logout">
                    @csrf
                    <button
                        type="submit"
                        class="bg-red-600 px-3 py-1 rounded hover:bg-red-700"
                    >
                        Logout
                    </button>
                </form>
            @else
                <a href="/login" class="hover:underline">Log In</a>
                <a href="/register" class="hover:underline">Register</a>
            @endauth
        </div>

    </div>
</nav>

<main class="max-w-6xl mx-auto p-6">
    {{ $slot }}
</main>

</body>
</html>











