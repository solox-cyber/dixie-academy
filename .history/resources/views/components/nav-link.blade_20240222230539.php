@props(['active'])

@php
$classes = ($active ?? false)
            ? 'active'
            : '';
@endphp

<li>
    <x-nav-link  href="{{ route('home') }}" :active="request()->routeIs('home')">
        <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
