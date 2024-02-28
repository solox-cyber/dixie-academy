@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav-items'
            : 'active nav-items';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
