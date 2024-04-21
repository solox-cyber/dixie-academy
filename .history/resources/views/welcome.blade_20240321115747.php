<x-guest-layout title="Home Page">
    <style>
        .our-courses .item {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
            /* Smooth transition for scaling */
        }

        .our-courses .item:hover {
            transform: scale(1.1);
            /* Scale up by 10% on hover */
        }


        .our-courses .item .down-content .info a:hover {
            background-color: #d29216;
        }
    </style>


    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/course-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <h6>Hello Students</h6>
                            <h2>Welcome to Dixie Academy</h2>
                            <p>This is an edu meeting HTML CSS template provided by <a rel="nofollow"
                                    href="https://templatemo.com/page/1" target="_blank">TemplateMo website</a>. This is
                                a Bootstrap v5.1.3 layout. The video background is taken from Pexels website, a group of
                                young people by <a rel="nofollow" href="https://www.pexels.com/@pressmaster"
                                    target="_blank">Pressmaster</a>.</p>
                            <div class="main-button-red">
                                <div class="scroll-to-section"><a wire:navigate href="{{route('courses')}}">Join Us
                                        Now!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->
    <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item">
                                <h3>WHO AM I</h3>
                                <p>{!!$about->getExcerpt_who_am_i()!!}</p>
                                <div class="main-button-red">
                                    <div class="scroll-to-section"><a wire:navigate
                                            href="{{ route('about', ['id' => 3]) }}">View
                                            more</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <h3>ABOUT DIXIE ACADEMY </h3>
                                <p>{!!$about->getExcerpt_about_dixie()!!}</p>
                                <div class="main-button-yellow">
                                    <div class="scroll-to-section"><a wire:navigate
                                            href="{{ route('about', ['id' => 3]) }}">View
                                            more</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>About Dixie</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>If you want to get the latest collection of HTML CSS templates for your websites,
                                        you may visit <a rel="nofollow" href="https://www.toocss.com/"
                                            target="_blank">Too CSS website</a>. If you need a working contact form
                                        script, please visit <a href="https://templatemo.com/contact"
                                            target="_parent">our contact page</a> for more info.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>HTML CSS Bootstrap Layout</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna,
                                        maximus at semper sit amet, eleifend eget neque. Nunc facilisis quam purus, sed
                                        vulputate augue interdum vitae. Aliquam a elit massa.<br><br>
                                        Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget
                                        nibh consequat aliquet. Proin fringilla, quam at euismod porttitor, odio odio
                                        tempus ligula, ut feugiat ex erat nec mauris. Donec viverra velit eget lectus
                                        sollicitudin tincidunt.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Please tell your friends</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit,
                                        at ullamcorper justo suscipit sit amet. Quisque at suscipit mi, non efficitur
                                        velit.<br><br>
                                        Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor
                                        sapien et quam volutpat luctus. Nullam sodales ipsum ac neque ultricies varius.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion last-accordion">
                            <div class="accordion-head">
                                <span>Share this to your colleagues</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et
                                        malesuada fames ac ante ipsum primis in faucibus.<br><br>
                                        Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla
                                        pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi
                                        quis, convallis nisi.</p>
                                </div>
                            </div>
                        </article>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>



    <section class="services">
        <div class="container" style="margin-top:50px">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">

                        @foreach ($courses as $course)
                        <img src="{{$course->getThumbnailImage()}}" alt="" style="height:300px;width:720px">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Blog</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories">
                        <h4>Blog Catgories</h4>
                        <ul>
                            @foreach ($categories as $category)
                            <li><a wire:navigate
                                    href="{{route('blog', ['category' => $category->slug])}}">{{$category->title}}</a>
                            </li>
                            <br>
                            @endforeach


                        </ul>
                        <div class="main-button-red">
                            <a wire:navigate href="{{route('blog')}}">All Blog Posts</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">

                                    <a wire:navigate href="{{route('blog.show', $post->slug)}}"><img
                                            src="{{ $post->getThumbnailImage() }}" alt=""></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6> {{ \Carbon\Carbon::parse($post->published_at)->format('M d') }}</h6>
                                    </div>
                                    <a wire:navigate href="{{route('blog.show', $post->slug)}}">
                                        <h4>{{ $post->title }}</h4>
                                    </a>
                                    <p>{{$post->getExcerpt() }}</p>
                                    <livewire:like-button :key="$post->id" :post="$post" />
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>RESOURCES</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        @foreach ($resources as $resource)
                        <div class="item">
                            <img src="{{ $resource->getThumbnailImage() }}" alt="{{$resource->title}}"
                                style="height:220px;width:500px;!important">
                            <div class="down-content">
                                <h4>{{$resource->title}}</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="main-button-red">
                                                <a wire:navigate
                                                    href="{{route('resource.show', $resource->id)}}">Purchase</a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <span>@if ($resource->price<=0) Free @else ${{$resource->price}}
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
                <div class="main-button-red" style="text-align: center; margin-top:23px">
                    <a wire:navigate href="{{route('resources')}}">View More</a>
                </div>
            </div>
        </div>
    </section>


    {{-- <livewire:contact-form /> --}}

    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="{{ route('contact.send') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Let's get in touch</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input wire:model="name" type="text" placeholder="YOUR NAME..." required>
                                            @error('name') <span>{{ $message }}</span> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input wire:model="email" type="email" placeholder="YOUR EMAIL..." required>
                                            @error('email') <span>{{ $message }}</span> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input wire:model="subject" type="text" placeholder="SUBJECT..." required>
                                            @error('subject') <span>{{ $message }}</span> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" placeholder="YOUR MESSAGE..."
                                                required></textarea>
                                            @error('message') <span>{{ $message }}</span> @enderror
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
                <div class="col-lg-4">
                    <div class="right-info">
                        <ul>
                            {{-- <li>
                                <h6>Telegram</h6>
                                <span>010-020-0340</span>
                            </li>
                            <li>
                                <h6>Youtube</h6>
                                <span>010-020-0340</span>
                            </li> --}}
                            <li>
                                <h6>Email Address</h6>
                                <span>support@dixieacademy.com</span>
                            </li>
                            {{-- <li>
                                <h6>Street Address</h6>
                                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
                            </li> --}}
                            <li>
                                <h6>Website URL</h6>
                                <span>www.dixieacademy.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
