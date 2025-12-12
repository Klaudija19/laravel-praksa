<x-layout>
    <x-slot name="heading">{{ $job->title }}</x-slot>

    <p class="text-gray-700 text-lg">Salary: ${{ number_format($job->salary) }}</p>
    <a href="/jobs" class="text-blue-500 hover:underline">Back to Jobs</a>
</x-layout>


