<x-app-layout>
    <div class="max-w-xl mx-auto py-6">
        <h1 class="text-xl font-bold mb-4">Create Job</h1>

        <form method="POST" action="{{ route('jobs.store') }}">
            @csrf

            <div class="mb-4">
                <label>Title</label>
                <input name="title" class="w-full border p-2" required>
            </div>

            <div class="mb-4">
                <label>Salary</label>
                <input name="salary" type="number" class="w-full border p-2" required>
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded">
                Save
            </button>
        </form>
    </div>
</x-app-layout>


