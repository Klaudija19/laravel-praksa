<x-layout>
    <div class="flex justify-between mb-6">
        <h1 class="text-2xl font-bold">Job Listings</h1>

        @auth
            <a href="{{ route('jobs.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded">
                Create Job
            </a>
        @endauth
    </div>

    @foreach ($jobs as $job)
        <div class="border p-4 rounded mb-4 bg-gray-50">
            <h2 class="text-xl font-semibold">
                <a href="{{ route('jobs.show', $job) }}">
                    {{ $job->title }}
                </a>
            </h2>

            <p class="text-gray-600">
                Employer: {{ $job->employer->name }}
            </p>

            <p class="font-bold">Salary: {{ $job->salary }}</p>
        </div>
    @endforeach

    <div class="mt-6">
        {{ $jobs->links() }}
    </div>
</x-layout>













