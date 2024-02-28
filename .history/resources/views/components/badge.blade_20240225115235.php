@props(['textColor','bgColor'])


<li data-filter=".att" style="{{$textColor}} {{ $bgColor}}">{{$slot}}</li>
<p style="color:{{$textColor}}; background:{{$bgColor}}">ddjj</p>
