<x-layout>
    <x-slot name="heading">{{ $job->title }}</x-slot>

    <p class="text-sm text-blue-600 font-semibold">
        {{ $job->employer->name }}
    </p>

    <p class="mt-4 text-gray-700">
        Salary: ${{ number_format($job->salary) }} USD per year
    </p>

    <a href="/jobs" class="mt-6 inline-block text-blue-500">
        ← Back to jobs
    </a>
</x-layout>

