@props(['textColor','bgColor'])


<li data-filter="{{route('blog',['category' => $category->title])}}" :textColor="$category->text_color" " {{$attributes}} style="color:{{$textColor}}!important; background:{{ $bgColor}}!important">{{$slot}}</li>

