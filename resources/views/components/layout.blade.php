<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jobs Board</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-6 py-4 flex justify-between items-center">
        <nav class="flex space-x-6">
            <a href="/" class="hover:underline">Home</a>
            <a href="/jobs" class="hover:underline">Jobs</a>
            <a href="/contact" class="hover:underline">Contact</a>
        </nav>

        <a href="/jobs/create"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Create Job
        </a>
    </div>
</header>

<main class="mx-auto max-w-7xl px-6 py-8">
    <h1 class="text-3xl font-bold mb-6">
        {{ $heading }}
    </h1>

    {{ $slot }}
</main>

</body>
</html>





