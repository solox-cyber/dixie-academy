<x-guest-layout title="Course Details Page">
    
    <style>
        section.heading-course-page {
    background-image: url({{$course->getThumbnailImage()}});
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 230px;
    padding-bottom: 110px;
    text-align: center;
}

section.heading-course-page h2 {
    margin-top: 20px;
    margin-bottom: 20px;
    font-size: 36px;
    text-transform: uppercase;
    font-weight: 800;
    color: #fff;
    letter-spacing: 1px;
}


 #contact input {
    width: 100%;
    height: 40px;
    border-radius: 20px;
    background-color: #f7f7f7;
    outline: none;
    border: none;
    box-shadow: none;
    font-size: 13px;
    font-weight: 500;
    color: #7a7a7a;
    padding: 0px 15px;
    margin-bottom: 30px;
}

#contact textarea {
    width: 100%;
    min-height: 140px;
    max-height: 180px;
    border-radius: 20px;
    background-color: #f7f7f7;
    outline: none;
    border: none;
    box-shadow: none;
    font-size: 13px;
    font-weight: 500;
    color: #7a7a7a;
    padding: 15px;
    margin-bottom: 30px;
}

#contact button {
    font-size: 13px;
    color: #fff;
    background-color: #a12c2f;
    padding: 12px 30px;
    display: inline-block;
    border-radius: 22px;
    font-weight: 500;
    text-transform: uppercase;
    transition: all .3s;
    border: none;
    outline: none;
}
    </style>

    <section class="heading-course-page header-text" id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2>{{$course->title}}</h2>
            </div>
          </div>
        </div>
      </section>

      <section class="course-page" id="meetings">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12">
                  <div class="meeting-single-item">
                    <div class="thumb">
                      <div class="price">
                        <span>${{$course->price}}</span>
                      </div>
                    </div>
                    <div class="down-content">
                      <a><h4>{{$course->title}}</h4></a>
                      <p><i class="fa fa-user"></i> {{$course->instructor}}</p>
                      <hr>
                      <br>
                      <p>
                        {!!$course->description!!}
                      </p>
                      <br>
                      <hr>

                      <div class="row">
                        <div class="col-lg-12">
                            <br>
                            <div id="paymentOptions" style="margin-bottom: 50px!important">
                                <h2 style="font-weight:800">Payment Options</h2>
                                {{-- <input type="radio" id="amazon" name="payment" value="amazon">
                                <label for="amazon">Amazon</label><br> --}}
                                <input type="radio" id="cryptocurrency" name="payment" value="cryptocurrency">
                                <label for="cryptocurrency">Cryptocurrency</label><br>
                                <input type="radio" id="paystack" name="payment" value="paystack">
                                <label for="paystack">Card/Bank Transfer</label><br>
                            </div>
                            <div id="amazonPayment" style="display:none;">
                                <!-- Content for Amazon payment option goes here -->
                                Amazon Payment Option Selected
                            </div>
                            <div id="cryptocurrencyPayment" style="display:none;">
                                <!-- Content for Cryptocurrency payment option goes here -->
                                Cryptocurrency Payment Option Selected
                            </div>
                            <div id="paystackPayment" style="display:none;">
                                <!-- Content for Paystack payment option goes here -->
                                Paystack Payment Option Selected
                            </div>
                        </div>
                    </div>

                    <script>
                        // Function to toggle display of payment option content
                        function togglePaymentOption(paymentOption) {
                            document.getElementById("amazonPayment").style.display = "none";
                            document.getElementById("cryptocurrencyPayment").style.display = "none";
                            document.getElementById("paystackPayment").style.display = "none";

                            document.getElementById(paymentOption + "Payment").style.display = "block";
                        }

                        // Event listener to toggle payment option content based on selected radio button
                        var paymentRadios = document.getElementsByName("payment");
                        for (var i = 0; i < paymentRadios.length; i++) {
                            paymentRadios[i].addEventListener("click", function() {
                                togglePaymentOption(this.value);
                            });
                        }
                    </script>


                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </section>

</x-guest-layout>
