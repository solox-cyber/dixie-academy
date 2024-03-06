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
                @foreach ($resources as $resource)
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
               
                <div class="item">
                  <img src="assets/images/course-02.jpg" alt="">
                  <div class="down-content">
                    <h4>TemplateMo is the best website for Free CSS</h4>
                    <div class="info">
                      <div class="row">
                        <div class="col-8">
                          <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <div class="col-4">
                           <span>$270</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/images/course-03.jpg" alt="">
                  <div class="down-content">
                    <h4>Web Design Templates at your finger tips</h4>
                    <div class="info">
                      <div class="row">
                        <div class="col-8">
                          <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <div class="col-4">
                           <span>$340</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/images/course-04.jpg" alt="">
                  <div class="down-content">
                    <h4>Please visit our website again</h4>
                    <div class="info">
                      <div class="row">
                        <div class="col-8">
                          <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <div class="col-4">
                           <span>$360</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/images/course-01.jpg" alt="">
                  <div class="down-content">
                    <h4>Responsive HTML Templates for you</h4>
                    <div class="info">
                      <div class="row">
                        <div class="col-8">
                          <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <div class="col-4">
                           <span>$400</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/images/course-02.jpg" alt="">
                  <div class="down-content">
                    <h4>Download Free CSS Layouts for your business</h4>
                    <div class="info">
                      <div class="row">
                        <div class="col-8">
                          <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <div class="col-4">
                           <span>$430</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/images/course-03.jpg" alt="">
                  <div class="down-content">
                    <h4>Morbi in libero blandit lectus cursus</h4>
                    <div class="info">
                      <div class="row">
                        <div class="col-8">
                          <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <div class="col-4">
                           <span>$480</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/images/course-04.jpg" alt="">
                  <div class="down-content">
                    <h4>Curabitur molestie dignissim purus</h4>
                    <div class="info">
                      <div class="row">
                        <div class="col-8">
                          <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <div class="col-4">
                           <span>$560</span>
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
