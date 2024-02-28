<x-guest-layout>
    <section class="heading-page header-text" id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h6>Get all details</h6>
              <h2>Online Teaching and Learning Tools</h2>
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
                      <div class="price">
                        <span>$14.00</span>
                      </div>
                      <div class="date">
                        <h6> {{ \Carbon\Carbon::parse($post->published_at)->format('M d') }}</h6>
                      </div>

                     <img src="{{$post->getThumbnailImage()}}" style="height:50vh!important" alt="thumbnail">
                    </div>
                    <div class="down-content">
                    <h4>{{$post->title}}</h4>
                      <p>{{$post->getReadingTime()}} min read </p>
                      <livewire:like-button  :key="$post->id" :post="$post" />
                      <p class="description">
                       {!! $post->body !!}
                      </p>
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="hours mt-5" style="">
                            @foreach($post->categories as $category)
                            <div class="col-lg-1">
                                <div class="main-button-red">
                                  <a href="meetings.html">Back To Meetings List</a>
                                </div>
                              </div>
                            <x-badge wire:navigate href="{{route('blog', ['category' => $category->slug])}}"
                                :textColor="$category->text_color" :bgColor="$category->bg_color">
                                {{ $category->title }}
                            </x-badge>

                            @endforeach
                          </div>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="main-button-red">
                    <a href="meetings.html">Back To Meetings List</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer">
          <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
              <br>
              Design: <a href="https://templatemo.com/" target="_parent" title="free css templates">TemplateMo</a>
              <br>
              Distibuted By: <a href="https://themewagon.com/" target="_blank" title="Build Better UI, Faster">ThemeWagon</a>
            </p>
        </div>
      </section>



</x-guest-layout>
