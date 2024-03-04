<x-guest-layout :title="$post->title">
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                 
                    <h2>$</h2>
                </div>
            </div>
        </div>
    </section>

 
    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="meeting-single-item">
                                <div class="thumb">

                                    <div class="date">
                                        <h6> {{ \Carbon\Carbon::parse($post->published_at)->format('M d') }}</h6>
                                    </div>

                                    <img src="{{$post->getThumbnailImage()}}" style="height:70vh!important"
                                        alt="thumbnail">
                                </div>
                                <div class="down-content">
                                    <h4>{{$post->title}}</h4>
                                    <p>Written by <strong>{{$post->author->name}}</strong> ||
                                        {{$post->getReadingTime()}} min read </p>
                                    <livewire:like-button :key="'likebutton-'. $post->id" :post="$post" />
                                    <div class="description prose article-content">
                                        {!! $post->body !!}
                                    </div>
                                    <div class="row">

                                       

                                        @foreach($post->categories as $category)
                                        <div class="col-lg-3">
                                            <div
                                                style="color: {{$category->text_color}} !important; background: {{ $category->bg_color }} !important; font-size: 13px;
                                                    padding: 12px 30px;display: inline-block;border-radius: 22px !important;
                                                    font-weight: 500;text-transform: uppercase;transition: all .3s;margin-top:30px">
                                                <a>{{$category->title}}</a>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>

                                  <livewire:post-comments :key="'comments'. $post->id" :$post/>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
                            <br>
                            Design: <a href="https://templatemo.com/" target="_parent"
                                title="free css templates">TemplateMo</a>
                            <br>
                            Distibuted By: <a href="https://themewagon.com/" target="_blank"
                                title="Build Better UI, Faster">ThemeWagon</a>
                        </p>
                    </div>
    </section>



</x-guest-layout>