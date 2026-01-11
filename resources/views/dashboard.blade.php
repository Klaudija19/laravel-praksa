<x-layout>
    <x-slot name="heading">
        Dashboard
    </x-slot>

    <p class="text-lg">
        Welcome {{ auth()->user()->name ?? auth()->user()->email }} 👋
    </p>
</x-layout>

