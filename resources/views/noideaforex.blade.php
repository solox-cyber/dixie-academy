<x-guest-layout>
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
                <h2>NO IDEA OF FOREX</h2>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="owl-courses-item owl-carousel">
                @foreach ($freeresources as $resource)
                <x-freeresources :resource="$resource"  />
                @endforeach
              </div>
            </div>

          </div>
          <div class="main-button-red pt-4 text-center">
            <div class="scroll-to-section"><a wire:navigate href="{{ route('profitable', ['profitable' => 1]) }}">
                I want to be profitable</a></div>
        </div>
        </div>
      </section>


    </x-guest-layout>
