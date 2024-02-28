@props(['textColor','bgColor'])


<li data-filter=".att" class="{{$textColor}} {{ $bgColor}}">{{$slot}}</li>
<p style="color:{{$textColor}}{{$bgColor}}">ddjj</p>
