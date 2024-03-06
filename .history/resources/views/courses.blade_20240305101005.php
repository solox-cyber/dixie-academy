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
                    @foreach ($courses as $course)
                    <div class="col-lg-4">
                        <div class="meeting-item">
                          <div class="thumb">
                            <div class="price">
                              <span style="color:#fff!important">${{$course->price}}</span>
                            </div>
                            <a href="meeting-details.html"><img src="{{$course->getThumbnailImage()}}" alt="{{$course->title}}"></a>
                          </div>
                          <div class="down-content">
                            <a href="meeting-details.html"><h4>{{$course->title}}</h4> </a>
                            {{-- <p>{{$course->getExcerpt()}}</p> --}}
                            <div class="main-button-red">
                                <a href="{{route('blog')}}">Enroll</a>
                              </div>
                          </div>
                        </div>
                      </div>
                    @endforeach

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

        </div>
        </div>
    </section>
</x-guest-layout>
