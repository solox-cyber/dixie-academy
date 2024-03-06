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

 #contact {
    background-color: #fff;
    border-radius: 20px;
    padding: 40px;
}

 #contact input {
    width: 100%;
    height: 40px;
    border-radius: 20px;
    background-color: #f7f7f7;
    outline: none;
    border: none;
    box-shadow: none;
    font-size: 13px;
    font-weight: 500;
    color: #7a7a7a;
    padding: 0px 15px;
    margin-bottom: 30px;
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
                      <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Let's get in touch</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="YOURNAME...*"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                                placeholder="YOUR EMAIL..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject" placeholder="SUBJECT...*"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message"
                                                placeholder="YOUR MESSAGE..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">SEND MESSAGE
                                                NOW</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
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
