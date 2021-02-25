@extends('layouts.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/image_1.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9  mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Service </a></span></p>
            <h1 class="mb-0 bread">Digital Market Intelligence for Florida Attorneys</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <h5 class="text-center">360 BIZVUE is an approved member benefit provider for The Florida Bar.</h5>
        <div class="row">
          <div class="col-lg-12 ">
            <div class="row pb-5">
              <div class="col-md-7 col-sm=12">
                <p>Many of your future clients are first-time legal consumers. They have never been faced with the need to work with an attorney. They may not know how to start looking for legal advice – or even how to express the precise situation they are in.</p>
                <p>In traditional digital marketing, queries from prospective customers that aren’t couched in the right jargon are, in a word, invisible. Without this sophisticated terminology, search marketing fails to surface queries from Floridians who urgently need counsel.</p>
              </div>
              <div class="col-md-5 col-sm=12">
                <img src="{{ asset('assets/images/florida.png')}}" alt="" class="img-fluid service-img">
              </div>
              <div class="col-md-12">
                <p>This inhibits law firm growth in two ways:</p>
                <p>
                  - Difficulty in crafting the right strategy to attract, nurture, and convert leads.<br>
                  - Seeing the actual size of their potential legal market or other firms’ activities in it.</p>
              </div>
            </div>
            <div class="row justify-content-center pb-2 mx-2">
              <div class="col-md-10 heading-section text-center ">
                <span class="subheading">Digital Market Intelligence for Florida Attorneys</span>
                <h3>360 BizVue digital market intelligence changes all that.</h3>
              </div>
            </div>
            <div class="row no-gutters pb-4">
              <div class="col-md-12">
                <p>Our intelligence platform combines data from search engines, social media platforms, and a wide-ranging network of commercial partners reporting real transaction data. With this unique storehouse of data, we pinpoint opportunities in your legal market as they emerge.</p>
                <p>As our client, you get a weekly digital intelligence digest presented on your custom online dashboard. Raw data is converted into actionable insights our business strategists can help you implement.</p>
                <p><b>Our key services include:</b></p>
              </div>
              <div class="col-md-6 px-3">
                <h4>Digital Market Intelligence by City and Practice Area</h4>
                <p>Attorneys who work with 360 BizVue are equipped to see what topics have driven leads to visit law firm websites over the last four weeks—divided according to the region and legal specialty.</p>
                <p>Our clients can also see at a glance who the leaders in digital visibility and lead generation are in their area. We clarify what the competition is doing right and how you can perform even better.</p>
              </div>
              <div class="col-md-6 px-3">
                <h4>Digital Market Intelligence on Leading Law Firms</h4>
                <p>At 360 BizVue, we surface opportunities for growth that match our clients’ strengths with their competitors’ weaknesses. Our digital market intelligence enables us to see unmet needs like no other firm—so you can leverage what others missed into profitable, sustainable growth.</p>
                <p>You will be able to see how your legal practice compares with market leaders in your area. You’ll also receive a complete guide to questions and problems of interest to your future clients. We help you develop these into digital marketing strategies that raise your visibility fast. Weekly updates mean your enterprise will always be on the cutting edge in the legal field.</p>
              </div>
            </div>
          </div>
        </div>
        <hr class="w-100">
        @include('layouts/florida')
        <button id="btn_submit" class="form-control btn-info">Submit</button>
      </div>
    </section>
@endsection