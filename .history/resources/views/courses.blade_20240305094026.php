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
                            <a href="meeting-details.html"><h4>{{$course->title}}</h4> /{{$course->instructor}}</a>
                            <p>{{$course->instructor}}</p>
                            <p>{{$course->getExcerpt()}}</p>

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
