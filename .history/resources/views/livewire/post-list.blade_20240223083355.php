<div>
    <div class="col-lg-12">
        <div class="filters">
          <ul>
            <li data-filter="*"  class="active">All</li>
            {{-- <li data-filter=".soon">Featured</li> --}}
             <li class="{{ $sort === 'desc' ? '' }}" wire:click="setSort('desc')">Latest</li>
            <li wire:click="setSort('asc')">Oldest</li>
            <li data-filter=".att">Attractive</li>
          </ul>
        </div>
      </div>
    
      <div class="col-lg-12">
        <div class="row grid">
          @foreach ($this->posts as $post)
          <div class="col-lg-4 templatemo-item-col all soon">
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
                    <p>{{$post->getExcerpt()   }}</p>
                </div>
            </div>
          </div>
        @endforeach
        </div>
    
           
    
      </div>
</div>