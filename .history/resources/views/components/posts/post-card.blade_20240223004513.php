@props(['post'])
<div class="meeting-item">
    <div class="thumb">
        <div class="price">
            <span>$14.00</span>
        </div>
        <a href="#"><img src="{{ $post->image }}" alt=""></a>
    </div>
    <div class="down-content">
        <div class="date">
            <h6> {{ \Carbon\Carbon::parse($post->published_at)->format('M d') }}</h6>
        </div>
        <a href="#">
            <h4>{{ $post->title }}</h4>
        </a>
        <p>{{$post}}</p>
    </div>
</div>
