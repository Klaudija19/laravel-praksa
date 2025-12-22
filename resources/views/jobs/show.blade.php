<x-layout>
    <x-slot name="heading">
        {{ $job->title }}
    </x-slot>

    <p class="text-blue-600 font-semibold mb-2">
        Employer: {{ $job->employer?->name ?? 'N/A' }}
    </p>

    <p class="text-lg">
        Salary: ${{ number_format($job->salary) }} USD / year
    </p>

    <a href="/jobs"
       class="inline-block mt-6 text-blue-600 hover:underline">
        ← Back to jobs
    </a>
</x-layout>


