<x-layout>
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">

        <h1 class="text-2xl font-bold mb-6 text-center">
            Edit Job Listing
        </h1>

        <form method="POST" action="{{ route('jobs.update', $job) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- TITLE -->
            <div>
                <label class="block mb-1 font-semibold">
                    Job Title
                </label>
                <input
                    type="text"
                    name="title"
                    value="{{ old('title', $job->title) }}"
                    class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                >
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- SALARY -->
            <div>
                <label class="block mb-1 font-semibold">
                    Salary
                </label>
                <input
                    type="text"
                    name="salary"
                    value="{{ old('salary', $job->salary) }}"
                    class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                >
                @error('salary')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- BUTTONS -->
            <div class="flex justify-between items-center pt-4">
                <a
                    href="{{ route('jobs.index') }}"
                    class="text-gray-600 hover:underline"
                >
                    ← Back
                </a>

                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded"
                >
                    Update Job
                </button>
            </div>
        </form>
    </div>
</x-layout>

