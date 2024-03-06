<x-guest-layout title="Course Details Page">
    <style>
        section.heading-page {
    background-image: url(../images/heading-bg.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 230px;
    padding-bottom: 110px;
    text-align: center;
}
    </style>

    <section class="heading-page header-text" id="top">
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
                      <div class="price">
                        <span>$14.00</span>
                      </div>
                      <div class="date">
                        <h6>Nov <span>12</span></h6>
                      </div>
                      <a href="meeting-details.html"><img src="assets/images/single-meeting.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <a href="meeting-details.html"><h4>Online Teaching and Learning Tools</h4></a>
                      <p>Recreio dos Bandeirantes, Rio de Janeiro - RJ, 22795-008, Brazil</p>
                      <p class="description">
                        This is an edu meeting HTML CSS template provided by <a href="https://templatemo.com/" target="_blank" rel="nofollow">TemplateMo website</a>. This is a Bootstrap v5.1.3 layout. If you need more free website templates like this one, please visit our website TemplateMo. Please tell your friends about our website. Thank you. If you want to get the latest collection of HTML CSS templates for your websites, you may visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">Too CSS website</a>. If you need a working contact form script, please visit <a href="https://templatemo.com/contact" target="_parent">our contact page</a> for more info.

                        <br><br>You are allowed to use this edu meeting CSS template for your school or university or business. You can feel free to modify or edit this layout. You are not allowed to redistribute the template ZIP file on any other template website. Please contact us for more information.
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
