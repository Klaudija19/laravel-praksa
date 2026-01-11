<x-layout>
    <h1 class="text-2xl font-bold mb-6">Edit Job</h1>

    <form method="POST" action="{{ route('jobs.update', $job) }}" class="max-w-md space-y-4">
        @csrf
        @method('PATCH')

        <div>
            <label class="block">Title</label>
            <input name="title" value="{{ $job->title }}" class="w-full border p-2">
        </div>

        <div>
            <label class="block">Salary</label>
            <input name="salary" value="{{ $job->salary }}" class="w-full border p-2">
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>
</x-layout>

