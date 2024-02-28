@props(['post'])
<div class="meeting-item">
    <div class="thumb">
        <div class="price">
            <span>$14.00</span>
        </div>
        <a href="meeting-details.html"><img src="{{ $post->image }}" alt=""></a>
    </div>
    <div class="down-content">
        <div class="date">
            <h6>Nov <span>12</span></h6>
            {{ \Carbon\Carbon::parse($post->published_at)->format('M d') }}


        </div>
        <a href="meeting-details.html">
            <h4>{{ $post->title }}</h4>
        </a>
        <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
    </div>
</div>