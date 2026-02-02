@props(['active' => false])

@php
$classes = $active
            ? 'px-4 h-full bg-orange-600 text-white font-medium text-sm flex items-center transition duration-150 ease-in-out cursor-pointer'
            : 'px-4 h-full text-gray-300 hover:text-white hover:bg-gray-700 font-medium text-sm flex items-center transition duration-150 ease-in-out cursor-pointer';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
