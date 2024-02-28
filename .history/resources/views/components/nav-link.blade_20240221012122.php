@props(['active'])

@php
$classes = ($active ?? false)
            ? 'header-area .main-nav .nav li a'
            : 'active';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
