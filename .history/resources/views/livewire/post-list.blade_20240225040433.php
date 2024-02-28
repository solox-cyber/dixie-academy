<div>

    <div class="col-lg-12 pt-5">
        <div class="filters">
            <ul>
                {{-- <li data-filter="*" class="active">All</li> --}}
                {{-- <li data-filter=".soon">Featured</li> --}}
                <li class="{{ $sort === 'desc' ? 'active' : '' }}" wire:click="setSort('desc')">Latest</li>
                <li class="{{ $sort === 'asc' ? 'active' : '' }}" wire:click="setSort('asc')">Oldest</li>
                <li data-filter=".att">Attractive</li>
            </ul>
        </div>
    </div>




    <div class="col-lg-12">
        <div class="row">
            @foreach ($this->posts as $post)
            <div class="col-lg-4 templatemo-item-col all soon">
                <div class="meeting-item">
                    <div class="thumb">
                        <div class="price">
                            <span>$14.00</span>
                        </div>
                        <a href="#"><img src="{{ asset$post->image }}" alt=""></a>
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
