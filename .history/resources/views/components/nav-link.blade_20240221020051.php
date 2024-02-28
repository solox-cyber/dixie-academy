@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav-items'
            : 'active nav-items';
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
