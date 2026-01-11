<nav class="bg-white shadow mb-6">
    <div class="max-w-4xl mx-auto p-4 flex justify-between">
        <div class="space-x-4">
            <a href="/" class="font-bold">Home</a>
            <a href="/jobs">Jobs</a>
        </div>

        <div class="space-x-4">
            @guest
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            @endguest

            @auth
                <form method="POST" action="/logout" class="inline">
                    @csrf
                    <button>Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>

