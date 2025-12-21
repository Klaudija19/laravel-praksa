<x-layout>
    <x-slot name="heading">
        {{ $job->title }}
    </x-slot>

    <div class="space-y-4">
        <p class="text-sm text-blue-600 font-semibold">
            {{ $job->employer?->name ?? 'No employer' }}
        </p>

        <p class="text-gray-700">
            Pays ${{ number_format($job->salary) }} USD per year.
        </p>

        <a href="/jobs" class="text-blue-600 underline">
            ← Back to jobs
        </a>
    </div>
</x-layout>

