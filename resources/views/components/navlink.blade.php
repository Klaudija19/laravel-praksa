@props(['active' => false, 'type' => 'a'])

@if ($type === 'a')
    <a 
        {{ $attributes->merge([
            'class' => $active 
                ? 'bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium' 
                : 'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium',
            'aria-current' => $active ? 'page' : null
        ]) }}
    >
        {{ $slot }}
    </a>
@else
    <button 
        {{ $attributes->merge([
            'class' => $active 
                ? 'bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium' 
                : 'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium'
        ]) }}
    >
        {{ $slot }}
    </button>
@endif


