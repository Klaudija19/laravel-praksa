<x-layout>
    <x-slot name="heading">Jobs List</x-slot>

    <ul class="space-y-3">
        @foreach ($jobs as $job)
            <li class="p-3 bg-white rounded shadow">
                <a href="/jobs/{{ $job->id }}" class="text-blue-600 hover:underline font-semibold">
                    {{ $job->title }}
                </a>
                : ${{ number_format($job->salary) }}
            </li>
        @endforeach
    </ul>
</x-layout>


