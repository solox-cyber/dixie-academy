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
                                <a><img src="{{$course->getThumbnailImage()}}"
                                        alt="{{$course->title}}"></a>
                            </div>
                            <div class="down-content">
                                <a>
                                    <h4>{{$course->title}}</h4>
                                </a>
                                <h3 style="margin-bottom:23px"><i class="fa fa-user"></i>
                                    {{$course->instructor}}</h3>
                                {{-- <p>{{$course->getExcerpt()}}</p> --}}
                                <div class="main-button-red">
                                    <a wire:navigate href="{{route('course.show', $course->id)}}">Enroll</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="col-lg-12" style="color:#fff!important">
                    <div class="pagination">
                        {{ $courses->onEachSide(1)->links()}}

                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
</x-guest-layout>
