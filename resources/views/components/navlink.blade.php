@props(['active' => false, 'type' => 'a'])

@if ($type === 'a')
    <a {{ $attributes->merge([
        'class' => $active
            ? 'bg-gray-900 text-white px-3 py-1 rounded'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-1 rounded'
    ]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge([
        'class' => $active
            ? 'bg-gray-900 text-white px-3 py-1 rounded'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-1 rounded'
    ]) }}>
        {{ $slot }}
    </button>
@endif


