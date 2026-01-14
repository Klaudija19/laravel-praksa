<x-layout>
    <h1 class="text-2xl font-bold mb-4">Edit Job</h1>

    <form method="POST" action="{{ route('jobs.update', $job) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <input name="title"
               value="{{ $job->title }}"
               class="w-full border p-2 rounded">

        <input name="salary"
               value="{{ $job->salary }}"
               class="w-full border p-2 rounded">

        <button class="bg-green-600 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>
</x-layout>



