@props(['textColor','bgColor'])


<li data-filter=".att" {{$Attributes}} style="color:{{$textColor}}!important; background:{{ $bgColor}}!important">{{$slot}}</li>

