@props(['textColor','bgColor'])


<a {{$attributes}} style="color:{{$textColor}}!important; background:{{ $bgColor}}!important">{{$slot}}</a>

