@extends('layouts.app')
@section('content')
    <div class="hero-wrap bg_back" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-md-6  d-flex align-items-end">
                    <div class="text w-100">
                        <h1 class="mb-4">{{__('home.A new way to see')}}</h1>
                        <h2 class="mb-4">{{__('home.unmet customer needs')}}</h2>
                        <p>
                            <a href="{{route('contact')}}" class="btn btn-primary py-3 px-4">{{__('home.Contact us')}}</a> 
                            <a href="{{route('about')}}" class="btn btn-white py-3 px-4">{{__('home.Read more')}}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-intro">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex">
                    <div class="intro aside-stretch d-lg-flex w-100">
                        <div class="icon"> <img src="{{ asset('assets/images/mark1.webp') }}" width="50"> </div>
                        <div class="text">
                            <h2>{{__('home.Digital Market Intelligence')}}</h2>
                            <p>{{__('home.We uncover not only what customers are doing, but why.')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-1 d-lg-flex w-100">
                        <div class="icon"> <img src="{{ asset('assets/images/mark2.webp') }}" width="55"> </div>
                        <div class="text">
                            <h2>{{__('home.Competitor Intelligence')}}</h2>
                            <p>{{__('home.We can stop reinventing with competitor intelligence.')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-2 d-lg-flex w-100">
                        <div class="icon"> <img src="{{ asset('assets/images/mark3.webp') }}" width="45"> </div>
                        <div class="text">
                            <h2>{{__('home.Payment Processing Cost Sharing')}}</h2>
                            <p>{{__('home.We can optimize every step in the value chain.')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center ">
                    <span class="subheading">Services</span>
                    <h2>Digital Market Intelligence and Cost Sharing</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex align-items-stretch ">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
                            <div class="icon d-flex align-items-center justify-content-center"> <img src="{{ asset('assets/images/market_ai.webp') }}" width="100"> </div> 
                        </div>
                        <h2>Digital Market Intelligence</h2>
                        <p>Our business intelligence experts partner with you every step of the way to design and implement data-driven programs in lead generation, lifetime value, and customer loyalty.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch ">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
                            <div class="icon d-flex align-items-center justify-content-center"> <img src="{{ asset('assets/images/com_ai.png') }}" width="100"> </div> 
                        </div>
                        <h2>Competitor Intelligence</h2>
                        <p>Competitors aren’t simply roadblocks to success. They can also provide valuable lessons. And the quest to determine exactly what rivals are doing depends on one key assumption: That they understand it themselves!</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch ">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
                            <div class="icon d-flex align-items-center justify-content-center"> <img src="{{ asset('assets/images/cost_share.png') }}" width="100"> </div> 
                        </div>
                        <h2>Save Money by Cost Sharing</h2>
                        <p>Our cost reduction strategy starts by optimizing your transactions to maximize savings whenever you accept a credit or debit card associated with a business. Through our Cost Sharing Program, you can go a step beyond, cutting interchange fees to zero.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('assets/images/about-1.webp') }});"> </div>
                <div class="col-md-6 wrap-about px-md-5  py-5 bg-light">
                    <div class="heading-section">
                        <span class="subheading">Welcome to 360 BIZVUE</span>
                        <h2 class="mb-4"><small>Transaction Data + AI Analytics = Our Differentiation</small></h2>
                        <p>Most of your future customers' issues are crystallized in the form of keywords and key phrases typed into search engines. The most valuable application of digital market intelligence is to equip businesses to respond to the most pressing and lucrative of these queries before the market realigns around them.</p>
                        <p>The best market intelligence is predictive, using today’s data and AI-driven methods to pinpoint the most likely business outcomes throughout the month, quarter, and year. 360 BizVue has pioneered both the data collection and analysis techniques to make this possible for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ">
                    <span class="subheading">Our Services</span>
                    <h2 class="mb-3">We Can Help You With This Situation</h2>
                </div>
            </div>
            <div class="row tabulation mt-4 ">
                <div class="col-md-5">
                    <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                        <li class="nav-item active text-left"> <a class="nav-link py-4" data-toggle="tab" href="#services-1">1. Search Query and Customer Trend Analysis</a> </li>
                        <li class="nav-item text-left"> <a class="nav-link py-4" data-toggle="tab" href="#services-2">2. Client Best-Fit Opportunity Analysis</a> </li>
                        <li class="nav-item text-left"> <a class="nav-link py-4" data-toggle="tab" href="#services-3">3. Competitor Weakness Analysis</a> </li>
                        <li class="nav-item text-left"> <a class="nav-link py-4" data-toggle="tab" href="#services-4">4. Step-By-Step Action Blueprint</a> </li>
                        <li class="nav-item text-left"> <a class="nav-link py-4" data-toggle="tab" href="#services-5">5. Digital Market Intelligence Dashboard</a> </li>
                        <li class="nav-item text-left"> <a class="nav-link py-4" data-toggle="tab" href="#services-6">6. Insight-Driven Marketing Campaigns</a> </li>
                    </ul>
                </div>
                <div class="col-md-7 ">
                    <div class="tab-content">
                        <div class="tab-pane container p-0 active" id="services-1">
                            <div class="img" style="background-image: url({{ asset('assets/images/home1.jpg') }});"></div>
                            <h3><a href="javascript:;">Search Query and Customer Trend Analysis</a></h3>
                            <h5>Through real-time transaction data collected from payment processors around the U.S., we link keyword activity with actual outcomes including first-time and high-value buys. We synthesize trend data from more than a dozen search engines, online storefronts, and social platforms.</h5>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-2">
                            <div class="img" style="background-image: url({{ asset('assets/images/home2.png') }});"></div>
                            <h3><a href="javascript:;">Client Best-Fit Opportunity Analysis</a></h3>
                            <h5>Your existing products and services are the starting points for best-fit opportunities. We evaluate the untapped market potential of your current portfolio, then rank available options in potential growth order. That gives you a full spread of short- and long-term growth keys to choose from.</h5>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-3">
                            <div class="img" style="background-image: url({{ asset('assets/images/home3.png') }});"></div>
                            <h3><a href="javascript:;">Competitor Weakness Analysis</a></h3>
                            <h5>We score the top ten URLs that currently rank in search engines for the desired opportunities. Many high-ranking pages are not strong, customer-focused resources. Generating a resourceful alternative using digital marketing best practices leads to rapid growth in online visibility.</h5>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-4">
                            <div class="img" style="background-image: url({{ asset('assets/images/home4.png') }});"></div>
                            <h3><a href="javascript:;">Step-By-Step Action Blueprint</a></h3>
                            <h5>Our customers receive a Digital Market Intelligence Snapshot on a regular basis. Using it, we build a step-by-step Action Blueprint that allows you to develop growth plans at the intersection of your strengths and your competitors’ weaknesses while addressing unmet consumer needs.</h5>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-5">
                            <div class="img" style="background-image: url({{ asset('assets/images/home5.png') }});"></div>
                            <h3><a href="javascript:;">Digital Market Intelligence Dashboard</a></h3>
                            <h5>As new data is collected and analyzed, our data scientists update you on a weekly basis through our digital market intelligence dashboard. You can access the dashboard and ask questions or request further information 24 hours a day, on any device, anywhere in the world.</h5>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-6">
                            <div class="img" style="background-image: url({{ asset('assets/images/home6.png') }});"></div>
                            <h3><a href="javascript:;">Insight-Driven Marketing Campaigns</a></h3>
                            <h5>With our support, you build, launch, expand, improve, and learn from your efforts. In addition to powerful marketing campaigns, the lessons generated by our process can strengthen your sales, R&D, and operations – empowering you to deliver an unparalleled customer experience.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section abbr-section ftco-no-pt ftco-no-pb">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-10 heading-section text-center ">
                    <h5>360 BizVue translates data into insights that form the bedrock of your market advantages. No matter how crowded or competitive your industry, you can differentiate with data.</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img bg-light" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ">
                    <div class="block-18 py-4 mb-4">
                        <div class="text align-items-center">
                            <strong class="number" data-number="3000">3000</strong>
                            <strong style="color: #007bff; font-size: 40px">+</strong>
                            <span>Our Satisfied  &amp; Happy Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ">
                    <div class="block-18 py-4 mb-4">
                        <div class="text align-items-center">
                            <strong class="number" data-number="30">30</strong>
                            <span>Years of Experience In Business</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ">
                    <div class="block-18 py-4 mb-4">
                        <div class="text align-items-center">
                            <strong class="number" data-number="200">200</strong>
                            <span>Our Qualified Data Experts</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ">
                    <div class="block-18 py-4 mb-4">
                        <div class="text align-items-center">
                            <strong class="number" data-number="40">40</strong>
                            <span>Process Categories Analyzed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection