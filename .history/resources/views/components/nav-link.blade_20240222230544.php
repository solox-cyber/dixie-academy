@props(['active'])

@php
$classes = ($active ?? false)
            ? 'active'
            : '';
@endphp

<li>
    <a wi{{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
