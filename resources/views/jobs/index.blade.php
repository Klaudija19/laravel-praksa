<x-layout>
    <x-slot name="heading">
        Job Listings
    </x-slot>

    <div class="space-y-4">
        @forelse ($jobs as $job)
            <a href="/jobs/{{ $job->id }}"
               class="block p-6 border rounded-lg bg-white hover:bg-gray-50">

                <p class="text-sm text-blue-600 font-semibold">
                    {{ $job->employer?->name ?? 'No employer' }}
                </p>

                <h3 class="text-lg font-bold">
                    {{ $job->title }}
                </h3>

                <p class="text-gray-600">
                    Pays ${{ number_format($job->salary) }} USD per year
                </p>
            </a>
        @empty
            <p class="text-gray-600">No jobs found.</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $jobs->links() }}
    </div>
</x-layout>






