<x-layout>
    <h1 class="text-2xl font-bold mb-4">{{ $job->title }}</h1>

    <p class="mb-2">Salary: {{ $job->salary }}</p>
    <p class="mb-6">Employer: {{ $job->employer->name }}</p>

    @auth
        <div class="flex gap-4">
            <a href="{{ route('jobs.edit', $job) }}"
               class="bg-yellow-500 text-white px-4 py-2 rounded">
                Edit
            </a>

            <form method="POST" action="{{ route('jobs.destroy', $job) }}">
                @csrf
                @method('DELETE')
                <button class="bg-red-600 text-white px-4 py-2 rounded">
                    Delete
                </button>
            </form>
        </div>
    @endauth
</x-layout>









