<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JobsBoard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">

    @include('layouts.navigation')

    <main class="max-w-5xl mx-auto mt-10 bg-white p-6 rounded shadow">
        {{ $slot }}
    </main>

</body>
</html>












