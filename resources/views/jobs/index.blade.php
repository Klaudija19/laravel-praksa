<x-layout>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Job Listings</h1>

        @auth
            <a href="{{ route('jobs.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded">
                Create Job
            </a>
        @endauth
    </div>

    <div class="space-y-4">
        @forelse ($jobs as $job)
            <div class="border p-4 rounded flex justify-between items-center">
                <div>
                    <a href="{{ route('jobs.show', $job) }}"
                       class="text-lg font-semibold">
                        {{ $job->title }}
                    </a>
                    <p class="text-gray-600">Salary: {{ $job->salary }}</p>
                </div>

                @auth
                    <div class="flex gap-2">
                        <a href="{{ route('jobs.edit', $job) }}"
                           class="text-blue-600">Edit</a>

                        <form method="POST"
                              action="{{ route('jobs.destroy', $job) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600"
                                    onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </div>
                @endauth
            </div>
        @empty
            <p>No job listings found.</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $jobs->links() }}
    </div>
</x-layout>








