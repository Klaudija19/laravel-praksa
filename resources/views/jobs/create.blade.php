<x-layout>
    <x-slot name="heading">Create Job</x-slot>

    <form method="POST" action="/jobs" class="space-y-4">
        @csrf

        <div>
            <input name="title" placeholder="Job title"
                   class="w-full border p-2 rounded">
            @error('title')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <input name="salary" placeholder="Salary"
                   class="w-full border p-2 rounded">
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Save
        </button>
    </form>
</x-layout>
