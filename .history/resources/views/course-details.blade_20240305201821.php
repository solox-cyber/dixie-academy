<x-guest-layout title="Course Details Page">
    <style>
        section.heading-course-page {
    background-image: url({{$course->getThumbnailImage()}});
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 230px;
    padding-bottom: 110px;
    text-align: center;
}

section.heading-course-page h2 {
    margin-top: 20px;
    margin-bottom: 20px;
    font-size: 36px;
    text-transform: uppercase;
    font-weight: 800;
    color: #fff;
    letter-spacing: 1px;
}
    </style>

    <section class="heading-course-page header-text" id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2>{{$course->title}}</h2>
            </div>
          </div>
        </div>
      </section>

      <section class="course-page" id="meetings">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12">
                  <div class="meeting-single-item">
                    <div class="thumb">
                      <div class="price">
                        <span>${{$course->price}}</span>
                      </div>
                    </div>
                    <div class="down-content">
                      <a href="meeting-details.html"><h4>{{$course->title}}</h4></a>
                      <p><i class="fa fa-user"></i> {{$course->instructor}}</p>
                      <p class="description">
                        {{$course->description}}
                      </p>
                    
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </section>

</x-guest-layout>
