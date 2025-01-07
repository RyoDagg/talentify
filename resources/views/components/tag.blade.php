@props(['size' => 'base'])

@php
    $classes =
        'px-4 py-2 text-md font-medium bg-gray-800 border border-white/5 hover:bg-gray-700 transition-colors duration-200 cursor-pointer rounded-3xl';
    if ($size === 'small') {
        $classes =
            'px-2 py-1 text-sm font-medium bg-gray-800 border border-white/5 hover:bg-gray-700 transition-colors duration-200 cursor-pointer rounded-3xl';
    }
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
