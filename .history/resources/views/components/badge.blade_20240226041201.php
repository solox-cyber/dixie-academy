@props(['textColor','bgColor', 'data-filter'])


<li {{$attributes}} style="color:{{$textColor}}!important; background:{{ $bgColor}}!important">{{$slot}}</li>

