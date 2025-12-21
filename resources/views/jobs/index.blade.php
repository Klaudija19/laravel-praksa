<x-layout>
    <x-slot name="heading">Job Listings</x-slot>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job->id }}"
               class="block p-6 border rounded-lg hover:bg-gray-50 transition">
                
                <p class="text-sm text-blue-600 font-semibold">
                    {{ $job->employer->name }}
                </p>

                <h3 class="text-lg font-bold">
                    {{ $job->title }}
                </h3>

                <p class="text-gray-600">
                    Pays ${{ number_format($job->salary) }} USD per year.
                </p>
            </a>
        @endforeach

        {{ $jobs->links() }}
    </div>
</x-layout>



