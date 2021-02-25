@extends('layouts.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/image_1.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9  mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Service </a></span></p>
            <h1 class="mb-0 bread">Competitor Intelligence</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row pb-5">
          <div class="col-lg-12 ">
            <div class="row">
              <div class="col-md-5 col-sm=12">
                <img src="{{ asset('assets/images/competitor1.png')}}" alt="" class="img-fluid service-img">
              </div>
              <div class="col-md-7 col-sm=12">
                <p>Competitors aren’t simply roadblocks to success. They can also provide valuable lessons.</p>
                <p>Much of what your competitors do is out in plain sight for anyone to see. They update their company blog, make social media posts, and announce new products and services.</p>
                <p>Still: Try to deduce a pattern from all those disparate details and you could be in for a long wait. There are simply too many sources of information. And the quest to determine exactly what rivals are doing depends on one key assumption: That they understand it themselves!</p>
                <p class="mb-0"><b>Enter 360 BizVue Competitor Intelligence.</b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center pb-2 mx-2">
          <div class="col-md-10 heading-section text-center ">
            <span class="subheading">Competitor Intelligence</span>
            <h3>With Competitor Intelligence, You Can Stop Reinventing the Wheel</h3>
          </div>
        </div>
        <div class="row no-gutters pb-5">
          <div class="col-md-12">
            <p>Every player in a given industry faces two key challenges: Figuring out <b>what customers want</b> and <b>how to deliver on it.</b></p>
            <p>Customer needs and preferences are constantly changing. Often, they start to affect the market long before customers can put them into words. Each company scrambles to figure it all out by instituting market research, communication plans, and customer loyalty efforts.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center pb-2">
          <div class="col-md-10 heading-section text-center ">
            <span class="subheading">Competitor Intelligence</span>
            <h3>What if your brand could benefit from the collective intelligence of the entire marketplace?</h3>
          </div>
        </div>
      </div>
      <div class="container px-0">
        <div class="row no-gutters pb-5">
          <div class="col-md-12">
            <div class="services-wrap d-flex">
              <div class="img order-md-last" style="background-image: url({{ asset('assets/images/services-1.jpg')}});"></div>
              <div class="text">
                <p>With 360 BizVue’s Competitor Intelligence, you can.</p>
                <p>Competitor Intelligence extends your <a href="{{route('service.digital')}}">Digital Market Intelligence</a> dashboard so rivals’ efforts can push you further. Our unique machine learning technology monitors, analyzes, synthesizes, and reports on competitor activities – equipping you with actionable insights.</p>
                <p>You’ll have access to fresh, relevant, and accurate information.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="services-wrap d-flex">
              <div class="img" style="background-image: url({{ asset('assets/images/services-2.jpg')}});"></div>
              <div class="text">
                <h5>1. Competitor Actions and Reactions</h5>
                <p>Did emerging customer needs get on your competitors’ radar before your own? With a total view of recent competitor actions in the market, you can highlight precisely where other market players see opportunity – and what they are doing to capitalize on it.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="services-wrap d-flex">
              <div class="img order-md-last" style="background-image: url({{ asset('assets/images/services-3.jpg')}});"></div>
              <div class="text">
                <h5>2. Customer Sentiment Analysis</h5>
                <p>What do customers think of your competitors? Our AI engine uses semantic analysis and deep learning to find references to competitors on social media, the news, and more. Then it provides an overview of perceived areas of strength and weakness compared to your brand.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="services-wrap d-flex">
              <div class="img" style="background-image: url({{ asset('assets/images/services-4.jpg')}});"></div>
              <div class="text">
                <h5>3. Reach, Influencers, and Partners</h5>
                <p>No brand is an island. Your competitors have allies – running the gamut from distributors to social media influencers. Competitor Intelligence identifies each link in the value chain that allows them to get their message out to customers in the real world.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="services-wrap d-flex">
              <div class="img order-md-last" style="background-image: url({{ asset('assets/images/services-5.jpg')}});"></div>
              <div class="text">
                <h5>4. Best-Performing Answers</h5>
                <p>Modern brands need to embrace a role as online publishers. This panel shows key metrics that measure competitors’ ability to win online traffic and convert leads. That includes what customer queries and pain points they’re responding to and how well they are doing it.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="services-wrap d-flex">
              <div class="img" style="background-image: url({{ asset('assets/images/services-6.jpg')}});"></div>
              <div class="text">
                <h5>5. Search Visibility Analysis</h5>
                <p>Google is a resource the whole world relies on. Competitor Intelligence shows you a topic cloud of all subject areas, questions, and problems where Google deems your competitor a trusted resource. This lets you quickly identify areas where you can fight for search traffic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="services-wrap d-flex">
              <div class="img order-md-last" style="background-image: url({{ asset('assets/images/services-7.jpg')}});"></div>
              <div class="text">
                <p>Competitor Analysis is a seamless add-on to your <a href="{{route('service.digital')}}">Digital Market Intelligence</a> dashboard. Like other elements of the dashboard, it independently seeks and processes commercial signals 24 hours a day. You can review up-to-the-minute insights and suggestions at any time.</p>
                <p>Whether you’re new to machine learning or already familiar with our <a href="{{route('service.digital')}}">Digital Market Intelligence</a> suite, getting started with Competitor Intelligence is easy. Just contact us to find out more today. 360 BizVue is here to help you reach the next level.</p>
              </div>
            </div>
          </div>
        </div>
        @include('layouts/digital')
        <button id="btn_submit" class="form-control btn-info">Submit</button>
      </div>
    </section>
@endsection