<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel Jobs' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- NAVIGATION -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center">
            
            <!-- LEFT LINKS -->
            <nav class="flex gap-6">
                <a href="{{ url('/') }}" class="font-semibold hover:underline">
                    Home
                </a>

                <a href="{{ url('/jobs') }}" class="font-semibold hover:underline">
                    Jobs
                </a>

                <a href="{{ url('/contact') }}" class="font-semibold hover:underline">
                    Contact
                </a>
            </nav>

            <!-- RIGHT AUTH LINKS -->
            <div class="ml-auto flex items-center gap-4">
                @auth
                    <span class="text-sm text-gray-600">
                        {{ auth()->user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button
                            type="submit"
                            class="text-red-600 font-semibold hover:underline"
                        >
                            Logout
                        </button>
                    </form>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="font-semibold hover:underline"
                    >
                        Login
                    </a>

                    <a
                        href="{{ route('register') }}"
                        class="font-semibold hover:underline"
                    >
                        Register
                    </a>
                @endauth
            </div>

        </div>
    </header>

    <!-- PAGE CONTENT -->
    <main class="max-w-7xl mx-auto px-6 py-8">
        {{ $slot }}
    </main>

</body>
</html>







