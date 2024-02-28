@props(['textColor','bgColor'])


<li data-filter="{{route('blog',['category' => $category->title])}}"" {{$attributes}} style="color:{{$textColor}}!important; background:{{ $bgColor}}!important">{{$slot}}</li>


