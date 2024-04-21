<x-guest-layout title="Resource Page">

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
                        @foreach ($freeresources as $resource)
                        <x-freeresources :resource="$resource" />
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
                        @foreach ($paidresources as $paidresource)
                        <div class="item">
                            <img src="{{ $paidresource->getThumbnailImage() }}" alt="{{$paidresource->title}}"
                                style="height:220px;width:500px">
                            <div class="down-content">
                                <h4>{{$paidresource->title}}</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="main-button-red">
                                                <a wire:navigate
                                                    href="{{route('resource.show', $paidresource->id)}}">Purchase</a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <span>@if ($paidresource->price<=0) Free @else ${{$paidresource->price}}
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

</x-guest-layout>
