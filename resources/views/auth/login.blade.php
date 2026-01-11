<x-layout>
    <h1>Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required>
            @error('email') <p>{{ $message }}</p> @enderror
        </div>

        <div>
            <label>Password</label><br>
            <input type="password" name="password" required>
            @error('password') <p>{{ $message }}</p> @enderror
        </div>

        <button type="submit">Login</button>
    </form>
</x-layout>

