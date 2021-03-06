@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-4 py-4 bg-green-500 text-sm font-bold leading-5 text-white focus:outline-none focus:border-green-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-4 py-4 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:bg-gray-200 hover:border-green-500 focus:outline-none focus:text-gray-700 focus:border-green-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
