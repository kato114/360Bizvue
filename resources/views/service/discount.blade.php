@extends('layouts.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/image_1.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-12  mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Service </a></span></p>
            <h1 class="mb-0 bread">Payment Processing Cost Sharing</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row pb-4">
          <p class="mb-0 ">Most small and mid-sized businesses face headwinds in today’s economy. Many are struggling, and some might not make it. But there are opportunities for companies like yours to control costs while providing needed services to your community. One way is through a cost sharing program.</a></p>
        </div>
        <div class="row justify-content-center pb-2 mx-2">
          <div class="col-md-10 heading-section text-center ">
            <span class="subheading">Payment Processing Cost Sharing</span>
            <h3>Improve Your Margins and Give Your Customers Freedom of Choice Through Cost Sharing</h3>
          </div>
        </div>
        <div class="row no-gutters pb-4">
          <div class="col-md-12">
            <p class=" ">When local businesses prosper, so do the communities they serve. With plummeting demand for even the most essential goods and services, you must find ways to drive costs off your balance sheet – while helping your customers make the purchases they need.</p>
            <p class=" ">We’re all in this together, and cost sharing is one way to benefit everybody.</p>
            <p class=" ">With cost sharing, you have the chance to attack one of the most difficult cost areas in any business: Interchange fees. These are fees charged by payment card processors to facilitate purchases with credit and debit cards. As receipts increase, so do these costs, creating a drag on growth.</p>
            <p class=" ">Cost sharing frees your business and leaves you with more revenue to reinvest.</p>
            <p class=" ">With cost sharing, you can eliminate up to 99% of interchange fees. Your customers may see only a few pennies of difference in the prices they pay, while your business saves thousands every quarter.</p>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-6"><img src="{{ asset('assets/images/discount1.png')}}" alt="" class="img-fluid service-img"></div>
          <div class="col-md-6"><img src="{{ asset('assets/images/discount2.png')}}" alt="" class="img-fluid service-img"></div>
        </div>
        <div class="row justify-content-center pb-2 mx-2">
          <div class="col-md-10 heading-section text-center ">
            <span class="subheading">Payment Processing Cost Sharing</span>
            <h3>360 BizVue Empowers You with Multiple Ways to Save Money Based on Your Needs</h3>
          </div>
        </div>
        <div class="row no-gutters pb-4">
          <div class="col-md-12">
            <p class=" ">360 BizVue evaluates your business to determine the best cost sharing approach for you–maximizing your returns while minimizing the impact on your customers. With our AI-driven executive decision tools, we offer a wider variety of cost sharing strategies than anyone else in the industry.</p>
            <p class=" ">Some of our cost sharing options include</p>
            <p class=" "><b>1. Cash Discounting</b></p>
            <p class=" ">With cash discounting, you adjust the prices of your products and services to reflect the per-purchase cost of interchange fees. Customers who choose to pay with cash then receive a corresponding discount, while those who use credit or debit cards participate in defraying 30%, 60%, or 99% of the fees.</p>
            <p class=" "><b>2. App-Enabled Cash Discounting with Kassa Me</b></p>
            <p class=" ">Worried that your average customer no longer carries cash? With our convenient touchless payment app, any customer can make an instant “good as cash” payment. Kassa Me links to customers’ bank accounts to pay in seconds. You’ll no longer need to handle cash or wait days for balances to update.</p>
            <p class=" "><b>3. AI-Driven Payment Card Optimization</b></p>
            <p class=" ">360 BizVue’s AI-based business intelligence platform can help you capture preferential interchange rates. Our solution provides a high volume of optional data at each step of the payment process, reducing costs in every transaction—an approach that, until now, was exclusive to Fortune 100 enterprises.</p>
            <p class=" "><b>4. Industry-Based Surcharges and Service Fees</b></p>
            <p class=" ">Depending on your state, industry, and size, you may be eligible to leverage alternative fee structures to recover interchange costs. Most surcharges are only a few cents each. Our turnkey solution ensures you comply with all applicable laws by disclosing charges where necessary.</p>
            <p class=" "><b>5. Other Options Customized to Your Business</b></p>
            <p class=" ">Our executive business advisors have helped business leaders – from the corner store to the corner office – plan cost structures that are sustainable, strategic, and fair. We will partner with you to learn about your business and apply our years of experience and AI-accelerated insights to your unique situation.</p>
          </div>
        </div>
        <div class="row justify-content-center pb-2 mx-2">
          <div class="col-md-10 heading-section text-center ">
            <span class="subheading">Payment Processing Cost Sharing</span>
            <h3>“Help Customers Help Themselves” with Modern, Efficient Cost Sharing</h3>
          </div>
        </div>
        <div class="row no-gutters pb-5">
          <div class="col-md-12">
            <p class=" ">Customers want the chance to spend their hard-earned money with local businesses that help their community thrive. Most would gladly pay a few more cents to make it happen. 360 BizVue has the processes and expertise to make cost sharing work for everybody.</p>
            <p class=" ">To find out more, contact us today.</p>
          </div>
        </div>
        @include('layouts/discount')
        <button id="btn_submit" class="form-control btn-info">Submit</button>
      </div>
    </section>
@endsection