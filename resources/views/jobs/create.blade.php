<x-layout>
    <x-slot name="heading">
        Create Job
    </x-slot>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded mb-6">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/jobs" class="space-y-6 max-w-lg">
        @csrf

        <div>
            <label class="block font-medium">Job Title</label>
            <input
                name="title"
                value="{{ old('title') }}"
                required
                class="mt-1 w-full border rounded px-3 py-2"
            >
            @error('title')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-medium">Salary</label>
            <input
                type="number"
                name="salary"
                value="{{ old('salary') }}"
                required
                class="mt-1 w-full border rounded px-3 py-2"
            >
            @error('salary')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <button
            class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
            Save Job
        </button>
    </form>
</x-layout>

