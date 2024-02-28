<div>

    @include('posts.partials.categories-box')

    <div class="col-lg-12">
        <div class="row">
            @foreach ($this->posts as $post)
            <div class="col-lg-4 templatemo-item-col all soon">
                <div class="meeting-item">
                    <div class="thumb">
                        @foreach ($post->categories as $category)
                        <div style="font-size: 16px;
                        color: {{$category->text_color}};
                        font-weight: 600;
                        background-color: {{$category->bg_color}};
                        padding: 7px 12px;
                        border-radius: 10px;" >
                            <span>{{$category->title}}</span>
                        </div>
                        @endforeach

                        <a href="#"><img src="{{ $post->getThumbnailImage() }}" alt=""></a>
                    </div>
                    <div class="down-content">
                        <div class="date">
                            <h6> {{ \Carbon\Carbon::parse($post->published_at)->format('M d') }}</h6>
                        </div>
                        <a href="#">
                            <h4>{{ $post->title }}</h4>
                        </a>
                        <p>{{$post->getExcerpt() }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>



    </div>

    <div class="col-lg-12">
        <div class="pagination">
          {{ $this->posts->onEachSide(1)->links()}}
          {{-- <ul>
            <li class="active"></li> --}}
            {{-- <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i></a></li> --}}
          {{-- </ul> --}}
        </div>
      </div>

</div>
