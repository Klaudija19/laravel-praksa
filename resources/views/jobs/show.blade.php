<x-layout>
    <x-slot name="heading">
        {{ $job->title }}
    </x-slot>

    <p class="text-sm text-blue-600 font-semibold mb-2">
        Employer: {{ $job->employer?->name ?? 'Unknown' }}
    </p>

    <p class="mb-4 text-gray-700">
        Salary: €{{ $job->salary }}
    </p>

    @auth
        <div class="flex gap-4">
            <a href="{{ route('jobs.edit', $job) }}"
               class="px-4 py-2 bg-blue-600 text-white rounded">
                Edit
            </a>

            <form method="POST" action="{{ route('jobs.destroy', $job) }}">
                @csrf
                @method('DELETE')

                <button
                    onclick="return confirm('Are you sure?')"
                    class="px-4 py-2 bg-red-600 text-white rounded">
                    Delete
                </button>
            </form>
        </div>
    @endauth
</x-layout>








