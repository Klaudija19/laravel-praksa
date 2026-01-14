<nav class="bg-white shadow">
    <div class="max-w-5xl mx-auto px-4 py-4 flex justify-between">
        <div class="space-x-4">
            <a href="{{ route('home') }}" class="font-bold text-lg">JobsBoard</a>
            <a href="{{ route('jobs.index') }}">Jobs</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>

        <div class="space-x-4">
            @auth
                <span>{{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button class="text-red-500">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </div>
</nav>



