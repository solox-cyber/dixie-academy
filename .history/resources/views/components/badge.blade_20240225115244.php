@props(['textColor','bgColor'])


<li data-filter=".att" style="color:{{$textColor}}!important; {{ $bgColor}}">{{$slot}}</li>
<p style="color:{{$textColor}}; background:{{$bgColor}}">ddjj</p>
