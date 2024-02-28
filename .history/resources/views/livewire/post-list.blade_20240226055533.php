<div>
    <div x-data="{
        query: '{{ request('search', '')}}'
    }">


        <div class="row mb-4">
            <div class="col-lg-3" style="color:#f5a425; display: flex; align-items: center;">
                @if ($this->activeCategory || $search)
                <button class="bg-success"
                    style="color:#fff; background: #ff2a2a!important; padding:8px 10px; margin-right: 10px;"
                    wire:click="clearFilters()">X</button>
                @endif

                <template x-if="query">
                    <h4 style="color:#f5a425!important;">Containing: <span x-text="query"></span></h4>
                </template>
                <template x-if="!query">

                </template>

                <style>
                    .custom-badge {
                        padding: 5px 10px;
                        margin: 10px;
                        font-size: 14px !important;
                        border-radius: 12px;
                    }
                </style>

                @if ($this->activeCategory)
                <x-badge wire:navigate href="{{ route('blog', ['category' => $this->activeCategory->slug]) }}"
                    class="custom-badge" :textColor="$this->activeCategory->text_color"
                    :bgColor="$this->activeCategory->bg_color">
                    All Posts From: {{ $this->activeCategory->title }}
                </x-badge>
                @endif
            </div>

            <div class="col-lg-6" style="margin-top:30px">

                {{-- <input wire:model.live.debounce.300ms="search" name="name" type="text" id="name" placeholder="Search..." required=""> --}}
                 <input x-model="query" name="name" type="text" id="name" placeholder="Search..." required="" style="border-radius:20px">

            <x-button x-on:click="$dispatch('search',{
              search: query
            })">Search</x-button></div>



        </div>

    </div>

    @include('posts.partials.categories-box')

    <div class="col-lg-12">
        <div class="row">
            @foreach ($this->posts as $post)
            <div class="col-lg-4 templatemo-item-col all
            @foreach ($post->categories as $category)
                {{$category->title}}
                @endforeach">

                <div class="meeting-item">
                    <div class="thumb">
                        @foreach ($post->categories as $category)
                        <div class="price" wire:navigate href="{{route('blog', ['category' => $category->title])}}"
                            style="font-size: 8px; margin-top:
                        color: {{$category->text_color}} !important;
                        font-weight: 600;
                        background-color: {{$category->bg_color}}!important;
                        padding: 7px 12px;
                        border-radius: 10px;">
                            <span>{{$category->title}} {{$category->text_color}} </span>
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
                {{--
            </ul> --}}
        </div>
    </div>

</div>
