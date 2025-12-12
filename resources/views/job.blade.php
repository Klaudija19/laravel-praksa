<x-layout>
    <x-slot name="heading">Job Details</x-slot>

    <h2 class="text-lg font-bold">{{ $job['title'] }}</h2>
    <p class="mt-2">This job pays ${{ $job['salary'] }} per year.</p>

    <a href="/jobs" class="mt-4 inline-block text-blue-500 hover:underline">Back to Jobs List</a>
</x-layout>
