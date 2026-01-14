<x-layout>
    <div class="flex justify-between mb-6">
        <h1 class="text-2xl font-bold">Job Listings</h1>

        @auth
            <a href="{{ route('jobs.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded">
                + Create Job
            </a>
        @endauth
    </div>

    @foreach ($jobs as $job)
        <div class="border p-4 mb-4 rounded">
            <h2 class="text-xl font-semibold">
                <a href="{{ route('jobs.show', $job) }}">
                    {{ $job->title }}
                </a>
            </h2>

            <p>Salary: {{ $job->salary }}</p>
            <p class="text-sm text-gray-600">
                Employer: {{ $job->employer->name ?? 'Unknown employer' }}
            </p>
        </div>
    @endforeach

    {{ $jobs->links() }}
</x-layout>










