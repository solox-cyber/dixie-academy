@props(['active', 'navigate'])

@php
$classes = ($active ?? false)
            ? 'active'
            : '';
@endphp

<li>
    <a {{ $na }} {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
