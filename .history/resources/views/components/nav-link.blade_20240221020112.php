@props(['active'])

@php
$classes = ($active ?? false)
            ? 'active'
            : 'active nav-items';
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
