@props(['textColor','bgColor'])

@php
    $textColor = match ($textColor){
       '' => ''
    }
@endphp
<li data-filter=".att" style="color:{{}}; background:#ff2a2a">{{$slot}}</li>
