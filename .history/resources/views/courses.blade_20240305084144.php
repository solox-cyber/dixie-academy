<x-guest-layout title="Resource Page">
    <section class="our-courses" id="courses">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>Our Courses</h2>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="owl-courses-item owl-carousel">
                @foreach ($courses as $course)

                @endforeach




              </div>
            </div>

          </div>
        </div>
      </section>
    </x-guest-layout>
