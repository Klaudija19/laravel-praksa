<x-layout>
    <h1 class="text-2xl font-bold">{{ $job->title }}</h1>
    <p>Salary: {{ $job->salary }}</p>
    <p>Employer: {{ $job->employer->name }}</p>

    @auth
        @if ($job->employer->user_id === auth()->id())
            <a href="{{ route('jobs.edit', $job) }}">Edit</a>

            <form method="POST" action="{{ route('jobs.destroy', $job) }}">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        @endif
    @endauth
</x-layout>










