@props(['textColor','bgColor', 'dataFilter'])

<li {{$attributes}} data-filter="all" style="color:{{$textColor}}!important; background:{{ $bgColor}}!important">{{$slot}}</li>

