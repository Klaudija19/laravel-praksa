<x-layout>
    <div class="flex justify-between mb-6">
        <h1 class="text-2xl font-bold">Job Listings</h1>

        @auth
            <a href="{{ route('jobs.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
                Create Job
            </a>
        @endauth
    </div>

    @foreach ($jobs as $job)
        <div class="border p-4 mb-4">
            <a href="{{ route('jobs.show', $job) }}" class="font-bold text-lg">
                {{ $job->title }}
            </a>
            <p>Salary: {{ $job->salary }}</p>
            <p class="text-sm text-gray-500">
                Employer: {{ $job->employer->name }}
            </p>
        </div>
    @endforeach

    {{ $jobs->links() }}
</x-layout>











