<x-layout>
    <h1 class="text-2xl font-bold mb-4">Create Job</h1>

    <form method="POST" action="{{ route('jobs.store') }}" class="space-y-4">
        @csrf

        <input name="title"
               placeholder="Job title"
               class="w-full border p-2 rounded">

        <input name="salary"
               placeholder="Salary"
               class="w-full border p-2 rounded">

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Save
        </button>
    </form>
</x-layout>




