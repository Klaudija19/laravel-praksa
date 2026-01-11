<x-layout>
    <h1 class="text-2xl font-bold mb-6">Create Job</h1>

    <form method="POST" action="{{ route('jobs.store') }}" class="max-w-md space-y-4">
        @csrf

        <div>
            <label class="block">Title</label>
            <input name="title" class="w-full border p-2" required>
            @error('title') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">Salary</label>
            <input name="salary" class="w-full border p-2" required>
            @error('salary') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Save
        </button>
    </form>
</x-layout>

