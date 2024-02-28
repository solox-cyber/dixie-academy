@props(['textColor','bgColor'])


<li data-filter=".att" {{$attributes}} style="color:{{$textColor}}!important; background:{{ $bgColor}}!important">{{$slot}}</li>

