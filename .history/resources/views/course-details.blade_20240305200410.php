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

      <section class="meetings-page" id="meetings">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12">
                  <div class="meeting-single-item">
                    <div class="thumb">
                      <div class="price" style="margin-bottom:20px">
                        <span>${{$course->price}}</span>
                      </div>
                    </div>
                    <div class="down-content">
                      <a href="meeting-details.html"><h4>{{$course->title}}</h4></a>
                      <p>{{$course->instructor}}</p>
                      <p class="description">
                        {{$course->description}}
                      </p>
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="hours">
                            <h5>Hours</h5>
                            <p>Monday - Friday: 07:00 AM - 13:00 PM<br>Saturday- Sunday: 09:00 AM - 15:00 PM</p>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="location">
                            <h5>Location</h5>
                            <p>Recreio dos Bandeirantes,
                            <br>Rio de Janeiro - RJ, 22795-008, Brazil</p>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="book now">
                            <h5>Book Now</h5>
                            <p>010-020-0340<br>090-080-0760</p>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="share">
                            <h5>Share:</h5>
                            <ul>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#">Twitter</a>,</li>
                              <li><a href="#">Linkedin</a>,</li>
                              <li><a href="#">Behance</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </section>

</x-guest-layout>
