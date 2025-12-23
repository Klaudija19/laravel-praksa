<x-layout>
    <x-slot name="heading">{{ $job->title }}</x-slot>

    <p class="mb-4">
        Employer: <strong>{{ $job->employer?->name ?? 'No employer' }}</strong>
    </p>

    <p class="mb-6">
        Salary: ${{ number_format($job->salary) }}
    </p>

    <div class="flex gap-3">
        <a href="/jobs/{{ $job->id }}/edit"
           class="bg-yellow-500 text-white px-4 py-2 rounded">
            Edit
        </a>

        <form method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('DELETE')
            <button class="bg-red-600 text-white px-4 py-2 rounded">
                Delete
            </button>
        </form>
    </div>
</x-layout>



