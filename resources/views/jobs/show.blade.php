<x-layout>
    <h1 class="text-2xl font-bold mb-4">{{ $job->title }}</h1>
    <p class="mb-2">Salary: ${{ $job->salary }}</p>
    <p class="mb-4">
        Employer: {{ $job->employer->name ?? 'Unknown' }}
    </p>

    @can('update', $job)
        <a href="{{ route('jobs.edit', $job) }}" class="bg-yellow-500 text-white px-4 py-2 rounded mr-2">Edit</a>
    @endcan

    @can('delete', $job)
        <form action="{{ route('jobs.destroy', $job) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button class="bg-red-600 text-white px-4 py-2 rounded">Delete</button>
        </form>
    @endcan
</x-layout>














