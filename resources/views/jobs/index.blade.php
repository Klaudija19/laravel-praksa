<x-layout>
    <x-slot name="heading">
        Job Listings
    </x-slot>

    <div class="flex justify-end mb-6">
        <a href="/jobs/create"
           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            + New Job
        </a>
    </div>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job->id }}"
               class="block p-6 border rounded-lg hover:bg-gray-50 transition">
                
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">
                            {{ $job->title }}
                        </h2>

                        <p class="text-sm text-blue-600">
                            {{ $job->employer?->name ?? 'No employer' }}
                        </p>
                    </div>

                    <div class="text-gray-700 font-medium">
                        ${{ number_format($job->salary) }}
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $jobs->links() }}
    </div>
</x-layout>



