<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jobs Board</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<nav class="bg-white shadow p-4 flex justify-between">
    <div class="space-x-4">
        <a href="/" class="font-bold">Home</a>
        <a href="/jobs">Jobs</a>
        <a href="/contact">Contact</a>
    </div>

    <a href="/jobs/create"
       class="bg-blue-600 text-white px-4 py-2 rounded">
        New Job
    </a>
</nav>

<main class="max-w-4xl mx-auto mt-8 bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-6">
        {{ $heading ?? '' }}
    </h1>

    {{ $slot }}
</main>

</body>
</html>






