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
                      <li data-filter=".soon">Soon</li>
                      <li data-filter=".imp">Important</li>
                      <li data-filter=".att">Attractive</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="row grid">
                    @foreach ($featuredPosts as $post )
                    <div class="col-lg-4 templatemo-item-col all soon">
                        <div class="meeting-item">
                          <div class="thumb">
                            <div class="price">
                              <span>$14.00</span>
                            </div>
                            <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg" alt=""></a>
                          </div>
                          <div class="down-content">
                            <div class="date">
                              <h6>Nov <span>12</span></h6>
                            </div>
                            <a href="meeting-details.html"><h4>New Lecturers Meeting</h4></a>
                            <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                          </div>
                        </div>
                      </div>  
                    @endforeach
                   
                    
                    
                   
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="pagination">
                    <ul>
                      <li><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </section>


</x-guest-layout>
