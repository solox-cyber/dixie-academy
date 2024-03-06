<x-guest-layout title="Resource Page">
    <section class="our-courses" id="courses">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>Free</h2>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="owl-courses-item owl-carousel">
                @foreach ($freeresources as $resource)
                <div class="item">
                    <img src="{{ $resource->getThumbnailImage() }}" alt="{{$resource->title}}">
                    <div class="down-content">
                      <h4>{{$resource->title}}</h4>
                      <div class="info">
                        <div class="row">
                          <div class="col-8">
                            <div class="main-button-red">
                                <a href="{{route('resources')}}">Purchase</a>
                              </div>
                          </div>
                          <div class="col-4">
                             <span>@if ($resource->price<=0)
                               Free
                               @else
                               ${{$resource->price}}
                             @endif
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach

              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="our-courses" id="courses" style="margin-top:-160px!important">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>Paid</h2>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="owl-courses-item owl-carousel">
                @foreach ($paidresources as $paidresource)
                <div class="item">
                    <img src="{{ $paidresource->getThumbnailImage() }}" alt="{{$paidresource->title}}">
                    <div class="down-content">
                      <h4>{{$freeresource->title}}</h4>
                      <div class="info">
                        <div class="row">
                          <div class="col-8">
                            <div class="main-button-red">
                                <a href="{{route('resources')}}">Purchase</a>
                              </div>
                          </div>
                          <div class="col-4">
                             <span>@if ($freeresource->price<=0)
                               Free
                               @else
                               ${{$freeresource->price}}
                             @endif
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach

              </div>
            </div>

          </div>
        </div>
      </section>

    </x-guest-layout>
