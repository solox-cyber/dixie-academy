@props(['textColor','bgColor'])

@php
    $textColor = match ($textColor){
       'gray' => 'text-gray-100',
       default => 'text-gray-100',
    }
@endphp
<li data-filter=".att" style="color:{{}}; background:#ff2a2a">{{$slot}}</li>
