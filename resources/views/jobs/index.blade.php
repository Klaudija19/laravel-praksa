<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">

        @auth
            <div class="flex justify-end">
                <a href="{{ route('jobs.create') }}"
                   class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                    Create Job
                </a>
            </div>
        @endauth

        @foreach ($jobs as $job)
            <div class="bg-white p-6 rounded-lg shadow flex justify-between items-start">

                <div>
                    <a href="{{ route('jobs.show', $job) }}"
                       class="text-blue-600 font-bold text-lg hover:underline">
                        {{ $job->employer->name }}
                    </a>

                    <p class="mt-2 text-gray-800">
                        <strong>{{ $job->title }}</strong>:
                        Pays ${{ number_format($job->salary) }} per year.
                    </p>
                </div>

                <div class="flex flex-col gap-2 items-end">
                    @can('update', $job)
                        <a href="{{ route('jobs.edit', $job) }}"
                           class="text-sm bg-yellow-400 px-3 py-1 rounded hover:bg-yellow-500">
                            Edit
                        </a>
                    @endcan

                    @can('delete', $job)
                        <form method="POST" action="{{ route('jobs.destroy', $job) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Delete this job?')"
                                    class="text-sm bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                Delete
                            </button>
                        </form>
                    @endcan
                </div>

            </div>
        @endforeach

        <div class="mt-6">
            {{ $jobs->links() }}
        </div>

    </div>
</x-layout>




















