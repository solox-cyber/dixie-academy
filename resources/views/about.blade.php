<x-guest-layout title="About Page">
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-6 pb-6" style="padding-bottom:40px!important">
                            <div class="accordions">
                                <article class="accordion">
                                    <div class="accordion-head">
                                        <span>WHO AM I</span>
                                        <span class="icon">
                                            <i class="icon fa fa-chevron-right"></i>
                                        </span>
                                    </div>
                                    <div class="accordion-body">
                                        <div class="content">
                                            <p>
                                                {!! $aboutProfile->who_am_i !!}
                                            </p>
                                        </div>
                                    </div>
                                </article>


                            </div>
                        </div>

                        <div class="col-lg-6  pb-6" style="padding-bottom:40px!important">
                            <div class="accordions">
                                <article class="accordion">
                                    <div class="accordion-head">
                                        <span>ABOUT DIXIE</span>
                                        <span class="icon">
                                            <i class="icon fa fa-chevron-right"></i>
                                        </span>
                                    </div>
                                    <div class="accordion-body">
                                        <div class="content">
                                            <p>
                                                {!!$aboutProfile->about_dixie!!}
                                            </p>
                                        </div>
                                    </div>
                                </article>


                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
        </div>
    </section>

    <section class="services">
        <div class="container" style="margin-top:50px">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">

                        @foreach ($aboutProfile->images as $image)
                            <img src="{{$image->getThumbnailImage()}}" alt="" style="height:300px;width:720px">

                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="upcoming-meetings-about" id="meetings">
    </section>

</x-guest-layout>
