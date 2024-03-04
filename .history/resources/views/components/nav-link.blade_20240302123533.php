@props(['active', 'n'])

@php
$classes = ($active ?? false)
            ? 'active'
            : '';
@endphp

<li>
    <a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
