@extends('layouts.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('public/assets/images/image_1.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Service </a></span></p>
            <h1 class="mb-0 bread">Digital Market Intelligence</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row pb-5">
          <div class="col-lg-12 ftco-animate">
            <div class="row pb-5">
              <div class="col-md-7 col-sm=12">
                <p>At this very moment, the digital marketplace holds an inexhaustible demand for your expertise.</p>
                <p>Even website visitors who aren’t ready to buy your products and services need your insights. By recognizing precisely what they want and where they stand in the research process, you have the opportunity to become a trusted adviser whose input frames their future purchase decisions.</p>
                <p>This is a tall order – but with the right tools and techniques, it has never been easier.</p>
              </div>
              <div class="col-md-5 col-sm=12">
                <img src="{{ asset('public/assets/images/digital1.png')}}" alt="" class="img-fluid service-img">
              </div>
            </div>
            <div class="row justify-content-center pb-2 mx-2">
              <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">Digital Market Intelligence</span>
                <h3>What Is Digital Market Intelligence and How Does It Transform Your Business?</h3>
              </div>
            </div>
            <div class="row no-gutters pb-4">
              <div class="col-md-12">
                <p>Today’s best digital market intelligence derives from the never-ending drumbeat of online search queries and business transactions.</p>
                <p>Google processes more than 5.4 billion searches every single day. Within that sea of data lies thousands of unmet user needs that can unlock your path to exponential growth.</p>
                <p><b>Sound digital market intelligence does all the following for you:</b></p>
                <p><b>- Equips you with knowledge of customer needs as they change on a week-to-week basis.</b></p>
                <p><b>- Clarifies customer buying habits and connects those patterns with smart business moves.</b></p>
                <p><b>- Transforms data into actionable insights in traditional search, voice, and other channels.</b></p>
                <p><b>- Expands your Web traffic and lead generation efforts while facilitating cost reductions.</b></p>
                <p>With market intelligence at your fingertips, your business becomes more versatile than ever. You can turn on a dime to capture the full value of emerging trends without diverting crucial assets from your core business. You’ll stand out even in crowded fields by meeting unmet needs first.</p>
              </div>
            </div>
            <div class="row justify-content-center pb-2 mx-2">
              <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">Digital Market Intelligence</span>
                <h3>360 BizVue Offers You an Unprecedented Digital Market Intelligence Solution</h3>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="col-md-12">
                <p>At 360 BizVue, we go beyond tools to empower you with processes and strategies that work. No matter your industry or size, you can realize value from digital market intelligence on day one.</p>
                <p>360 BizVue supports our clients’ success with a truly groundbreaking digital market intelligence solution. Built on research by Gartner, the world’s leading advisory company, it uses hybrid transactional/analytic processing to make sense of a tremendous volume and velocity of data.</p>
                <p>Early digital market intelligence platforms have limited ability to process simultaneous customer transactions and cannot derive insights from many common sources, including natural language search. Our platform evaluates data more quickly and accurately than any other.</p>
                <p>In a nutshell, our system combines transactions – what is happening – with analytics, what it all means. Analytic processing is performed on transactions as they occur. From the combined data set, our system then derives a variety of helpful and informative reports you can use right away.</p>
              </div>
            </div>
            <div class="row pb-4">
              <div class="col-md-5 col-sm=12">
                <img src="{{ asset('public/assets/images/digital2.png')}}" alt="" class="img-fluid service-img">
              </div>
              <div class="col-md-7 col-sm=12">
                <p>For example, you can learn:</p>
                <span>- What “<b>never before seen</b>” search queries are likely to become business-altering trends.</span><br>
                <span>- Which <b>seasonal variations in buyer behavior</b> you should begin preparing for right now.</span><br>
                <span>- Where you could capture additional online leads and <b>challenge rivals for market share</b>.</span><br>
                <span>- How you can <b>adjust your products, services, and marketing to deepen or broaden appeal</b>.</span><br>
              </div>
            </div>
            <div class="row justify-content-center pb-2 mx-2">
              <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">Digital Market Intelligence</span>
                <h3>360 BizVue Supports You With Planning and Implementation You Need to Succeed</h3>
              </div>
            </div>
            <div class="row no-gutters pb-4">
              <div class="col-md-12">
                <p>Crystallizing intelligence is just the beginning. We help you go to the next level.</p>
                <p>Expert strategic consultants from 360 BizVue will help you develop action plans allowing you to make the most from our platform’s discoveries. Our decades of expertise in business process optimization mean you never need to miss out on a strategic opportunity.</p>
                <p>Our one-on-one advice will ensure you never miss the forest for the trees. We will work with you to gain deep knowledge of your enterprise and your goals. Digital market intelligence is your North Star, but we can help you steer the ship – no matter how far you need to go.</p>
              </div>
            </div>
          </div>
        </div>
        @include('layouts/digital')
        <button class="form-control btn-info">Submit</button>
      </div>
    </section>
@endsection