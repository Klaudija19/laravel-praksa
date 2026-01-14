<x-layout>
    <h1 class="text-2xl font-bold mb-4">{{ $job->title }}</h1>

    <p><strong>Employer:</strong> {{ $job->employer->name }}</p>
    <p><strong>Salary:</strong> {{ $job->salary }}</p>

    @can('update', $job)
        <div class="mt-6 flex gap-4">
            <a href="{{ route('jobs.edit', $job) }}"
               class="bg-yellow-500 text-white px-4 py-2 rounded">
                Edit
            </a>

            <form method="POST" action="{{ route('jobs.destroy', $job) }}">
                @csrf
                @method('DELETE')
                <button class="bg-red-600 text-white px-4 py-2 rounded">
                    Delete
                </button>
            </form>
        </div>
    @endcan
</x-layout>












