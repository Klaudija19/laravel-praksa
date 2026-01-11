<x-layout>
    <h1 class="text-2xl font-bold mb-6">Register</h1>

    <form method="POST" action="/register" class="space-y-4 max-w-md">
        @csrf

        <div>
            <label class="block mb-1">Name</label>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                class="w-full border rounded px-3 py-2"
            >
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1">Email</label>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                class="w-full border rounded px-3 py-2"
            >
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1">Password</label>
            <input
                type="password"
                name="password"
                required
                class="w-full border rounded px-3 py-2"
            >
            @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1">Confirm Password</label>
            <input
                type="password"
                name="password_confirmation"
                required
                class="w-full border rounded px-3 py-2"
            >
        </div>

        <button
            type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
        >
            Register
        </button>
    </form>
</x-layout>




