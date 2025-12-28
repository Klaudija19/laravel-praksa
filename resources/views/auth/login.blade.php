<x-layout>
    <x-slot name="heading">Login</x-slot>

    <form method="POST" action="/login" class="max-w-md space-y-4">
        @csrf

        <div>
            <x-form-label for="email">Email</x-form-label>
            <x-form-input id="email" name="email" type="email" required />
            <x-form-error name="email" />
        </div>

        <div>
            <x-form-label for="password">Password</x-form-label>
            <x-form-input id="password" name="password" type="password" required />
            <x-form-error name="password" />
        </div>

        <button class="bg-indigo-600 text-white px-4 py-2 rounded">
            Login
        </button>
    </form>
</x-layout>
