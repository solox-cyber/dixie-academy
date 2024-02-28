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

                                    <img src="{{$post->getThumbnailImage()}}" style="height:70vh!important"
                                        alt="thumbnail">
                                </div>
                                <div class="down-content">
                                    <h4>{{$post->title}}</h4>
                                    <p>{{$post->getReadingTime()}} min read </p>
                                    <livewire:like-button :key="$post->id" :post="$post" />
                                   
                                    <div class="description prose article-content">
                                        {!! $post->body !!}
                                    </div>
                                    <div class="row">

                                        <style>
                                            .btn-cat a {
                                                font-size: 13px;
                                                padding: 12px 30px;
                                                display: inline-block;
                                                border-radius: 22px !important;
                                                font-weight: 500;
                                                text-transform: uppercase;
                                                transition: all .3s;
                                            }
                                        </style>

                                        @foreach($post->categories as $category)
                                            <div class="col-lg-3">
                                                <div  style="color: {{$category->text_color}} !important; background: {{ $category->bg_color }} !important; font-size: 13px;
                                                    padding: 12px 30px;display: inline-block;border-radius: 22px !important;
                                                    font-weight: 500;text-transform: uppercase;transition: all .3s;margin-top:30px">
                                                    <a>{{$category->title}}</a>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-9 align-self-center">
                                          <div class="row">
                                            <div class="col-lg-12">
                                              <form id="contact" action="#" method="post">
                                                <div class="row">
                                                  <div class="col-lg-12">
                                                    <h2>Discussion</h2>
                                                  </div>
                                                  <div class="col-lg-12">
                                                    <fieldset>
                                                      <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                                                    </fieldset>
                                                  </div>
                                                  <div class="col-lg-12">
                                                    <fieldset>
                                                      <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                                                    </fieldset>
                                                  </div>
                                                </div>
                                              </form>
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
                Distibuted By: <a href="https://themewagon.com/" target="_blank"
                    title="Build Better UI, Faster">ThemeWagon</a>
            </p>
        </div>
    </section>



</x-guest-layout>
