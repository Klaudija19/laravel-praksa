<x-layout>
    <x-slot name="heading">
        Create Job
    </x-slot>

    <form method="POST" action="/jobs" class="space-y-6">
        @csrf

        <div>
            <label class="block text-sm font-medium mb-1">Job Title</label>
            <input
                name="title"
                type="text"
                required
                placeholder="e.g. Software Engineer"
                class="w-full border rounded-lg p-2"
            >
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Salary</label>
            <input
                name="salary"
                type="number"
                required
                placeholder="e.g. 50000"
                class="w-full border rounded-lg p-2"
            >
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">
            Create Job
        </button>
    </form>
</x-layout>
