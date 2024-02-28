@props(['textColor','bgColor'])

@php
    $textColor = match ($textColor){
       'gray' => 'text-gray-100',
       'blue' => 'text-blue-100',
       'red' => 'text-red-100',
       'yellow' => 'text-yellow-100',
       default => 'text-gray-100',
    };

    $bgColor = match ($bgColor){
       'gray' => 'text-gray-100',
       'blue' => 'bg-blue-100',
       'red' => 'bg-red-100',
       'yellow' => 'bg-yellow-100',
       default => 'bg-gray-100',
    }
@endphp
<li data-filter=".att" class="text-{text_color}-800">{{$slot}}</li>
