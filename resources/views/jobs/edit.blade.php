<x-layout>
    <x-slot name="heading">Edit Job</x-slot>

    <form method="POST" action="/jobs/{{ $job->id }}" class="space-y-4">
        @csrf
        @method('PATCH')

        <input name="title" value="{{ $job->title }}"
               class="w-full border p-2 rounded">

        <input name="salary" value="{{ $job->salary }}"
               class="w-full border p-2 rounded">

        <button class="bg-green-600 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>
</x-layout>
