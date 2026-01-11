<x-layout>
    <h1 class="text-2xl font-bold">{{ $job->title }}</h1>
    <p class="mb-4">Salary: {{ $job->salary }}</p>

    @auth
        <a href="/jobs/{{ $job->id }}/edit" class="text-blue-600">Edit</a>

        <form method="POST" action="/jobs/{{ $job->id }}" class="inline">
            @csrf
            @method('DELETE')
            <button class="text-red-600 ml-2">Delete</button>
        </form>
    @endauth
</x-layout>






