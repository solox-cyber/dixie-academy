@props(['textColor','bgColor', 'dataFilter'])

<li {{$attributes}} data-filter="" style="color:{{$textColor}}!important; background:{{ $bgColor}}!important">{{$slot}}</li>

