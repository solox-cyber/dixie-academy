<x-guest-layout>
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
            <div class="scroll-to-section"><a wire:navigate href="{{route('')}}">
                I want to be profitable</a></div>
        </div>
        </div>
      </section>


    </x-guest-layout>
