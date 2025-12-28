<nav class="bg-white shadow mb-6">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">

        <div class="space-x-4">
            <a href="{{ route('home') }}" class="font-bold">Home</a>
            <a href="{{ route('jobs.index') }}">Jobs</a>
            <a href="{{ route('contact') }}">Contact</a>

            @auth
                <a href="{{ route('jobs.create') }}">Create Job</a>
            @endauth
        </div>

        <div class="space-x-4">
            @guest
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endguest

            @auth
                <span>{{ auth()->user()->name }}</span>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endauth
        </div>

    </div>
</nav>

