@props(['textColor','bgColor'])


<li data-filter="" {{$attributes}} style="color:{{$textColor}}!important; background:{{ $bgColor}}!important">{{$slot}}</li>


