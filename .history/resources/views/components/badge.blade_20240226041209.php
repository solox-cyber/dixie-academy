@props(['textColor','bgColor', 'data-filter'])


<li {{$attributes}} data-filter="" style="color:{{$textColor}}!important; background:{{ $bgColor}}!important">{{$slot}}</li>

