@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-4 py-4 bg-green-400 text-sm font-bold leading-5 text-white focus:outline-none focus:border-green-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-4 py-4 border-transparent text-sm font-medium leading-5 text-white hover:text-white hover:bg-green-400 focus:outline-none focus:text-gray-700 focus:border-green-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
