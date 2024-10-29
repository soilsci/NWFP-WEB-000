@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-t-4 border-nw-blue-600 bg-nw-blue-600 text-lg font-semibold leading-5 text-nw-blue-50 hover:bg-nw-blue-900 hover:text-nw-blue-50 focus:outline-none focus:text-nw-blue-50  transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-1 border-transparent text-lg font-medium   leading-5 text-nw-blue-600 hover:bg-nw-blue-900 hover:text-nw-blue-50  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
