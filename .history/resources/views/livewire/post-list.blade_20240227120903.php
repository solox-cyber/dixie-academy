<div>
    <div x-data="{
        query: '{{ request('search', '')}}'
    }">


        <div class="row mb-4">
            <div class="col-lg-6" style="color:#f5a425; display: flex; align-items: center; margin-bottom:30px">
                @if ($this->activeCategory || $search)
                <button class="bg-success"
                    style="color:#fff; background: #ff2a2a!important; padding:8px 10px; margin-right: 10px;"
                    wire:click="clearFilters()">X</button>
                @endif

                <template x-if="query">
                    <h4 style="color:#f5a425!important;">Containing: <strong><span x-text="query"></span></strong></h4>
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

            <div class="col-lg-6">

                {{-- <input wire:model.live.debounce.300ms="search" name="name" type="text" id="name"
                    placeholder="Search..." required=""> --}}
                <input x-model="query" name="name" type="text" id="name" placeholder="Search..." required=""
                    style="border-radius:20px">

                <x-button x-on:click="$dispatch('search',{
              search: query
            })">Search</x-button>
            </div>



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
                            style="font-size: 2px; margin:
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
                        {{-- <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </a> --}}

                        <livewire:like-button  :key="$post->id" :post="$post" />
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
