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
        <div class="row pb-5">
          <div class="col-lg-12 ">
            <div class="row pb-5">
              <div class="col-md-7 col-sm-12">
                <p>Getting through law school is no small feat. It means adapting yourself to one of the most competitive and demanding environments around and coming out on top. In addition to making you a great attorney, it’s your strongest preparation to lead a thriving business.</p>
                <p>You know you need to be proactive and put in the work every day.</p>
                <p>But there are events nothing can prepare you for. The COVID-19 pandemic is one of them. Even the biggest law firms are finding their carefully crafted “four-year plans” in shambles. The upside: Consumers can put off many investments, but legal representation isn’t one of them.</p>
              </div>
              <div class="col-md-5 col-sm-12">
                <img src="{{ asset('assets/images/attorneys.png')}}" alt="" class="img-fluid service-img">
              </div>
              <div class="col-md-12 col-sm-12">
                <p>The key to success is connecting with legal consumers where and when they need you.</p>
                <p>360 BizVue can help you do it.</p>
              </div>
            </div>
            <div class="row justify-content-center pb-2 mx-2">
              <div class="col-md-10 heading-section text-center ">
                <span class="subheading">Digital Market Intelligence for Florida Attorneys</span>
                <h3>For the First Time, World-Class Digital Marketing is Accessible to Small Legal Practices</h3>
              </div>
            </div>
            <div class="row no-gutters pb-4">
              <div class="col-md-12">
                <p>It wasn’t that long ago when you needed to be a million-dollar partner to access today’s top digital marketing tools: Industry-leading artificial intelligence that turns vast quantities of market data into actionable strategies.</p>

                <p>With AI, planning and execution accelerate. That enables you to think months ahead of your peers while taking the right steps every day to reach your long-term goals. Even the most prescient business analyst can’t duplicate machine learning, with its ability to identify key market trends within millions of data points.</p>

                <p>Now, 360 BizVue is making that technology available to legal professionals like you for just $30 a month. Plus, our executive business consultants are with you every step of the way as you put AI-driven insight into practice.</p>

                <p>We start by equipping you with a legal industry roadmap complete with “Suggested Actions” offering the greatest potential to drive growth. These are grouped into weekly action plans that may take as little as a few hours to implement – perfect if you have more time on your hands due to shelter-in-place orders.</p>

                <p>As you complete each week, we map out your results on our state of the art business intelligence dashboard, showing you exactly how your efforts connect to outcomes in the real world.</p>

                <p>At the same time, our AI platform continues to analyze consumer behavior with millions of signals from high-volume platforms like Google search, YouTube, social media, and even legal advice forums. This equips you to zero in on your ideal clients and reach them when they need you most.</p>

                <p>To learn more, contact 360 BizVue today.</p>
              </div>
            </div>
          </div>
        </div>
        @include('layouts/attorney')
        <button id="btn_submit" class="form-control btn-info">Submit</button>
      </div>
    </section>
@endsection