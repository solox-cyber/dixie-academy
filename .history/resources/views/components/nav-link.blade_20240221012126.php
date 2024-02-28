@props(['active'])

@php
$classes = ($active ?? false)
            ? 'header-area .main-nav .nav li a'
            : 'active header-area .main-nav .nav li a';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
