<x-layout>
    <x-slot name="heading">Register</x-slot>

    <form method="POST" action="/register" class="max-w-md space-y-4">
        @csrf

        <div>
            <x-form-label for="name">Name</x-form-label>
            <x-form-input id="name" name="name" required />
            <x-form-error name="name" />
        </div>

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

        <div>
            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
            <x-form-input id="password_confirmation" name="password_confirmation" type="password" required />
        </div>

        <button class="bg-indigo-600 text-white px-4 py-2 rounded">
            Register
        </button>
    </form>
</x-layout>

