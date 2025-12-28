<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel App') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

    @include('layouts.navigation')

    <main class="container mx-auto mt-6 px-4">
        @yield('content')
    </main>

</body>
</html>
