<nav class="bg-white border-b shadow-sm">
    <div class="max-w-5xl mx-auto px-6 py-4 flex justify-between items-center">

        <div class="flex items-center space-x-6">
            <a href="/" class="text-lg font-bold text-blue-600">
                JobsBoard
            </a>

            <a href="/jobs" class="text-gray-700 hover:text-blue-600">
                Jobs
            </a>

            <a href="/contact" class="text-gray-700 hover:text-blue-600">
                Contact
            </a>
        </div>

        <div class="flex items-center space-x-4">
            @auth
                <a href="/jobs/create"
                   class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Create Job
                </a>

                <form method="POST" action="/logout">
                    @csrf
                    <button class="text-gray-600 hover:text-red-600">
                        Logout
                    </button>
                </form>
            @endauth

            @guest
                <a href="/login" class="text-gray-700 hover:text-blue-600">
                    Login
                </a>

                <a href="/register"
                   class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Register
                </a>
            @endguest
        </div>

    </div>
</nav>


