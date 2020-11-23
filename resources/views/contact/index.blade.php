@extends('layouts.app')
@section('content')
    <section class="hero-wrap hero-wrap-2">
      <div class="overlay map" id="map"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
            <h1 class="mb-0 bread">Contact US</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="wrapper px-md-4">
              <div class="row mb-5">
                <div class="col-md-3">
                  <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="text">
                      <p><span>Address:</span> 21218 St. Andrews BLVD Suite 735 Boca Raton, Florida, 33433</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-phone"></span>
                    </div>
                    <div class="text">
                      <p><span>Phone:</span> <a href="tel://1234567920">(866) 337-2644</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-paper-plane"></span>
                    </div>
                    <div class="text">
                      <p><span>Email:</span> <a href="mailto:info@yoursite.com">clientsupport @360bizvue.com</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-globe"></span>
                    </div>
                    <div class="text">
                      <p><span>Website</span> <a href="#">kassameapp.com</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-1 pb-4 pt-5">
                  <p><b>Which of the following would you like to contact us about today? *</b></p>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="radio-inline">
                        <label class="radio radio-solid">
                        <input type="radio" id="item_1" name="item[0]" value="2">
                        <span></span>Digital Market Intelligence</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="radio-inline">
                        <label class="radio radio-solid">
                        <input type="radio" id="item_2" name="item[0]" value="2">
                        <span></span>Payment Processing Cost Sharing</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="radio-inline">
                        <label class="radio radio-solid">
                        <input type="radio" id="item_3" name="item[0]" value="2">
                        <span></span>Competitor Intelligence</label>
                      </div>
                    </div>
                  </div>
                </div>
                @include('layouts/digital')
                @include('layouts/discount')
                @include('layouts/other')
                <button class="form-control btn-info">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('script_total')
<script type="text/javascript">
  $(document).ready(function() {
    $('.form-1-1').hide();
    $('.form-2-1').hide();
    $('.form-3-1').hide();
  });

  $("#item_1").on("click", function() {
    $('.form-1-1').show();
    $('.form-2-1').hide();
    $('.form-3-1').hide();
  });
  $("#item_2").on("click", function() {
    $('.form-1-1').hide();
    $('.form-2-1').show();
    $('.form-3-1').hide();
  });
  $("#item_3").on("click", function() {
    $('.form-1-1').hide();
    $('.form-2-1').hide();
    $('.form-3-1').show();
  });
</script>
@endsection