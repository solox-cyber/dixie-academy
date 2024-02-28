@props(['textColor','bgColor'])

@php
    $text
@endphp
<li data-filter=".att" style="color:{{}}; background:#ff2a2a">{{$slot}}</li>
