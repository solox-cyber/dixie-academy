@props(['active', 'navigate'])

@php
$classes = ($active ?? false)
            ? 'active'
            : '';
@endphp

<li>
    <a {{ $navigate ?? true ? 'wire:navigate' : '' }} {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
