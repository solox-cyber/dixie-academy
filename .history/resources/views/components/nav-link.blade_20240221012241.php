@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav-items'
            : 'active header-area .main-nav .nav li a';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
