<x-layout>
    <x-slot name="heading">Job Listings</x-slot>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="{{ route('jobs.show', $job) }}"
               class="block p-6 border rounded-lg hover:bg-gray-50">

                <p class="text-sm text-blue-600 font-semibold">
                    {{ $job->employer?->name ?? 'Unknown employer' }}
                </p>

                <h3 class="text-lg font-bold">
                    {{ $job->title }}
                </h3>

                <p class="text-gray-600">
                    Salary: €{{ $job->salary }}
                </p>
            </a>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $jobs->links() }}
    </div>
</x-layout>








