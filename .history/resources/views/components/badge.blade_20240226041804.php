@props(['textColor','bgColor', 'dataFilter'])

<li {{$attributes}}  style="color:{{$textColor}}!important; background:{{ $bgColor}}!important">{{$slot}}</li>

