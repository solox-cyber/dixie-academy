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
                <form id="contact" action="#" method="post">
                    <div class="row">
                      <div class="col-lg-6">
                        <fieldset>
                          <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                        </fieldset>
                      </div>
                    </div>
                </form>

                <livewire:post-list/>
                

                <div class="col-lg-12">
                  <div class="pagination">
                    {{ $Posts->onEachSide(1)->links()}}
                    {{-- <ul>
                      <li class="active"></li> --}}
                      {{-- <li class="active"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li> --}}
                    {{-- </ul> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>


</x-guest-layout>
