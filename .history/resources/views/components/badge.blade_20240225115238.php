@props(['textColor','bgColor'])


<li data-filter=".att" style="color:{{$textColor}} {{ $bgColor}}">{{$slot}}</li>
<p style="color:{{$textColor}}; background:{{$bgColor}}">ddjj</p>
