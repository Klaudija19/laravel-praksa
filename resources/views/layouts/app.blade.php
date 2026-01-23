<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

    <nav class="bg-white shadow p-4">
        <div class="container mx-auto">
            <a href="/" class="font-bold text-xl">Job Board</a>
        </div>
    </nav>

    <main class="container mx-auto p-6">
        @yield('content')
    </main>

</body>
</html>
