<x-layout>
    <x-slot name="heading">Jobs List</x-slot>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job->id }}" class="text-blue-500 hover:underline">
                    {{ $job->title }}
                </a>: <strong>${{ $job->salary }}</strong> per year
            </li>
        @endforeach
    </ul>
</x-layout>

