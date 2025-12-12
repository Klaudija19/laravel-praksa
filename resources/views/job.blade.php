<x-layout>
    <x-slot name="heading">{{ $job->title }}</x-slot>

    <p>This job pays <strong>${{ $job->salary }}</strong> per year.</p>
    <a href="/jobs" class="text-blue-500 hover:underline">Back to jobs list</a>
</x-layout>

