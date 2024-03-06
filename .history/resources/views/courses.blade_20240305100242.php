<x-guest-layout title="Resource Page">
    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Courses</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($freeresources as $freeresource)
                    <div class="col-lg-4">
                        <div class="meeting-item">
                          <div class="thumb">
                            <div class="price">
                              <span style="color:#fff!important">${{$freeresource->price}}</span>
                            </div>
                            <a href="meeting-details.html"><img src="{{$freeresource->getThumbnailImage()}}" alt="{{$freeresource->title}}"></a>
                          </div>
                          <div class="down-content">
                            <a href="meeting-details.html"><h4>{{$freeresource->title}}</h4> </a>
                            {{-- <p>{{$course->getExcerpt()}}</p> --}}
                            <div class="main-button-red">
                                <a href="{{route('blog')}}">Enroll</a>
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
