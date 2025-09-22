@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center gap-3 w-full px-4 py-2 rounded-lg bg-blue-100 text-oceanBlue font-semibold border-l-4 border-oceanBlue transition-colors duration-200'
            : 'flex items-center gap-3 w-full px-4 py-2 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-oceanBlue border-l-4 border-transparent transition-colors duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>