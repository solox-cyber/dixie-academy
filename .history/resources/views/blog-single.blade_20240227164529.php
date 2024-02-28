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

                     <img src="{{$post->getThumbnailImage()}}" alt="thumbnail">
                    </div>
                    <div class="down-content">
                    <h4>{{$post->title}}</h4>
                      <p>{{$post->getReadingTime()}} min read </p>
                      <livewire:like-button  :key="$post->id" :post="$post" />
                      <p class="description">
                       {!!!!}
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
