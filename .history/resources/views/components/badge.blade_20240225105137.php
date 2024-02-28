@props(['textColor','bgColor'])

@php
    $textColor = match ($textColor){
       'gray' => 'text-gray-100',
       'gray' => 'text-gray-100',
       'gray' => 'text-gray-100',
       'gray' => 'text-gray-100',
       default => 'text-gray-100',
    }
@endphp
<li data-filter=".att" class="text-{text_color}-800">{{$slot}}</li>
