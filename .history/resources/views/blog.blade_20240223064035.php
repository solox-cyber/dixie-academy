<x-guest-layout>
    <section class="heading-page header-text" id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              {{-- <h6>Here are our upcoming meetings</h6> --}}
              <h2>Blog Spot</h2>
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
                  <div class="filters">
                    <ul>
                      <li data-filter="*"  class="active">All</li>
                      <li data-filter=".soon">Featured</li>
                      <li data-filter=".imp">Latest</li>
                      <li data-filter=".att">Attractive</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-12">



                  <div class="row grid">
                    @foreach ($Posts as $post)
                    <div class="col-lg-4 templatemo-item-col all soon">
                      <x-posts.post-card  :post="$post"/>
                    </div>
                  @endforeach
                  </div>

                     

                </div>

                <div class="col-lg-12">
                    {{ $Posts->links()}}
                  <div class="pagination">
                    <ul>
                      <li class="active"></li>
                      {{-- <li class="active"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li> --}}
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>


</x-guest-layout>
