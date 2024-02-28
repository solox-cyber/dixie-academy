@props(['textColor','bgColor', 'dataFilter'])

<li {{$attributes}} data-filter="{{$dataFilter}}" style="color:{{$textColor}}!important; background:{{ $bgColor}}!important">{{$slot}}</li>

