@extends('layouts.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/image_1.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9  mb-5 text-center">
            <h1 class="mb-0 bread">Transaction Data + AI Analytics = Our Differentiation</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-degree-bg">
      <div class="container">
        <div class="row pb-5">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('assets/images/about-2') }}.jpg);"> </div>
            <div class="col-md-6 wrap-about px-md-5  pt-5 bg-light">
                <div class="heading-section">
                    <p>Never before has it been possible to pinpoint the needs of your market with the precision we have today.</p>
                    <p>Your customers, leads, and prospects frequently express their needs in the digital world. Through search behavior, current buying, and social media, they tell you what they need, what benefits they hope to gain, and how much they are prepared to pay. In this way, each person in your neighborhood and all around the country provides their very own blueprint for a successful sale and a long-term relationship.</p>
                    <p><b>The key: Zooming in on the right message in that mountain of data. With 360 BizVue, it’s all needle, no haystack.</b></p>
                    <p>We use predictive market intelligence to help you respond to the most pressing and lucrative customer needs before the market recognizes them. Our analytics engine correlates signals across thousands of terabytes of data on dozens of platforms to produce clear insights and actionable business plans.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center pb-2">
          <div class="col-md-8 heading-section text-center ">
            <span class="subheading">About US</span>
            <h3>360 BizVue Means the Shortest Path Ever from “Customer Desire” to “Customer Delight.”</h3>
          </div>
        </div>
        <div class="row no-gutters pb-4">
          <div class="col-md-12">
            <p>Eugene Schwartz, the most excellent advertising writer of all time, put it best when he spoke of the overwhelming urge that drives people to buy products and services: “[It] comes from the market itself. [We] can only take the hopes, dreams, fears, and desires that already exist ... and focus [them].”</p>
            <p>Until now, businesses have only had an unclear, imperfect, fleeting picture of those “hopes, dreams, fears, and desires” and what products will answer them. 360 BizVue’s AI-driven analytics engine gives you the whole story, whether you’re crafting a strategy for the month, the quarter, or the year.</p>
            <p>Coupled with our Kassa Me touchless payment platform, our market intelligence creates a frictionless, world-class buyer experience that improves margins, cuts costs, and enhances Lifetime Customer Value.</p>
          </div>
        </div>
      </div>
    </section>    
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ">
            <span class="subheading">Services</span>
            <h2>Here’s how it works</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0">
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="services-wrap d-flex">
              <div class="img" style="background-image: url({{ asset('assets/images/about-6.jpg') }})"></div>
              <div class="text">
                <h5>Attract Your Ideal Customers (First-Time Buyers)</h5>
                <p>Using your existing user data and other information about your business, our predictive AI engine learns about your market position, strengths, and capabilities. It applies this in a tireless, 24-hour search for key market movers, such as changes in search or buyer behavior, that create opportunities for you.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="services-wrap d-flex">
              <div class="img" style="background-image: url({{ asset('assets/images/about-7.jpg') }})"></div>
              <div class="text">
                <h5>Delight Your Ideal Customers (First-Time Buyers)</h5>
                <p>Using the stream of vetted, actionable data from our platform, your digital brand comes alive through targeted messaging on your website, app, and social media. A user experience built around touchless transfer turns your leads into first-time buyers who feel heard and understood by your company.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="services-wrap d-flex">
              <div class="img order-md-last" style="background-image: url({{ asset('assets/images/about-4.jpg') }})"></div>
              <div class="text">
                <h5>Retain Your Ideal Customers (Repeat Buyers)</h5>
                <p>Competitive intelligence is the next unbeatable advantage in the 360 BizVue arsenal. Through our curated storehouse of accurate, timely data on thousands of competitors, we find areas where your performance falls below the industry average and tell you exactly how to improve to retain your customers.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="services-wrap d-flex">
              <div class="img order-md-last" style="background-image: url({{ asset('assets/images/about-5.jpg') }})"></div>
              <div class="text">
                <h5>Optimize Processes and Repeat</h5>
                <p>Our system can use your data to determine how key market changes may impact every aspect of your business. You’ll be equipped with intelligent insights to optimize product development, operations, R&D, supply chain, and more. You can extend your use of the platform to any of these areas as desired.</p>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt abbr-section">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-12 text-center">
            <h5>AI makes it possible for you to drive continuous improvement through every element of your business. By defining and moving on attainable goals in a constant, seamless process, your enterprise will be better next month than it was last month – and better next year than you could’ve dreamed possible.</h5>
            <h5>It’s not a magic genie: It’s the real, measurable, attainable <b>benefits of AI you can realize right now.</b></h5>
            <h5>The sooner you get started, the sooner you’ll see the positive transformation for yourself.</h5>
            <h5>To find out more or get started, contact our executive business advisors at 360 BizVue.</h5>
          </div>
        </div>
      </div>
    </section>
@endsection