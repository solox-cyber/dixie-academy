@props(['textColor','bgColor'])


<li data-filter=".att" {{}}style="color:{{$textColor}}!important; background:{{ $bgColor}}!important">{{$slot}}</li>

