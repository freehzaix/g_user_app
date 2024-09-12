@props(['active'])

@php
$classes = ($active ?? false)
            ? 'group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5'
            : 'group flex items-center gap-x-4 rounded-md px-3 py-2 text-sm font-medium text-default-800 transition-all hover:bg-default-700/5';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
