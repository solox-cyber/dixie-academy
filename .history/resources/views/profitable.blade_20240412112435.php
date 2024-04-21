<x-guest-layout>

    <style>
        /* Style for the accordion image */
.accordion-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100px; /* Adjust width as needed */
    height: auto; /* Maintain aspect ratio */
}

/* Adjust accordion content position to accommodate the image */
.accordion-head {
    padding-left: 120px; /* Ensure sufficient space for the image */
    position: relative; /* Ensure relative positioning for absolute child */
}

    </style>
    <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-10" style="margin-bottom:45px!important">
                            <div class="accordions">
                                <article class="accordion">
                                    <div class="accordion-head">
                                        <span>
                                            <!-- Image here -->
                                            <img src="{{asset('assets/images/join_class.png')}}" alt="Image" class="accordion-image">
                                            <!-- End of Image -->
                                            JOIN {{$profitable->month_of_class}} CLASS
                                        </span>
                                        <span class="icon">
                                            <i class="icon fa fa-chevron-right"></i>
                                        </span>
                                    </div>
                                    <div class="accordion-body">
                                        <div class="content">
                                            <p>
                                                {{$profitable->join_class}}
                                            </p>
                                            <div class="main-button-red" style="margin-top:30px!important">
                                                <div class="scroll-to-section"><a wire:navigate
                                                        href="{{route('join')}}">Apply Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>


                            </div>
                        </div>

                        <div class="col-lg-10" style="margin-bottom: 45px!important">
                            <div class="accordions">
                                <article class="accordion">
                                    <div class="accordion-head">
                                        <span>
                                            <!-- Image here -->
                                            <img src="{{asset('assets/images/oneoneone.jpg')}}" alt="Image" class="accordion-image">
                                            <!-- End of Image -->
                                            ONE ON ONE TRAINING
                                        </span>
                                        <span class="icon">
                                            <i class="icon fa fa-chevron-right"></i>
                                        </span>
                                    </div>
                                    <div class="accordion-body">
                                        <div class="content">
                                            <p>{{$profitable->one_on_one_training}}</p>
                                            <div class="main-button-red" style="margin-top: 30px!important">
                                                <div class="scroll-to-section"><a wire:navigate href="{{route('training')}}">Apply Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="col-lg-10" style="margin-bottom:45px!important">
                            <div class="accordions">
                                <article class="accordion">
                                    <div class="accordion-head">

                                        <span>
                                            <img src="{{asset('assets/images/team.png')}}" alt="Image" class="accordion-image">
                                            TEACH A TEAM</span>
                                        <span class="icon">
                                            <i class="icon fa fa-chevron-right"></i>
                                        </span>
                                    </div>
                                    <div class="accordion-body">
                                        <div class="content">
                                            <p>{{$profitable->teach_a_team}}</p>
                                            <div class="main-button-red" style="margin-top:30px!important">
                                                <div class="scroll-to-section"><a wire:navigate
                                                        href="{{route('team')}}">Apply Now</a></div>
                                            </div>
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



</x-guest-layout>
