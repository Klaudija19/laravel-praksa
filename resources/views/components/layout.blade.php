<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jobs Board</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

    <nav class="bg-slate-900 text-white p-4">
        <div class="flex gap-4">
            <a href="/" class="hover:underline">Home</a>
            <a href="/jobs" class="hover:underline">Jobs</a>
            <a href="/contact" class="hover:underline">Contact</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-xl shadow">
        <h1 class="text-3xl font-bold mb-6">
            {{ $heading }}
        </h1>

        {{ $slot }}
    </main>

</body>
</html>



