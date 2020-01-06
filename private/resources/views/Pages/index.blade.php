@extends('Includes.layout')

 @section('title','Home')

   @section('content')

 <section class="position-relative bg-center-top bg-no-repeat py-5" style="background-color: #2d3238;">
      <div class="img-cover bg-auto" style="background-image: url(/assets/img/logo/bg-bner.jpg);"></div>
      <div class="container bg-content pt-4 py-md-5 py-lg-5 banner_text_wrapper">
        <div class="row py-lg-5">
          <div class="col-xl-5 col-lg-6 col-md-8 py-lg-5 my-lg-4 text-center text-md-left">
            <h2 class="h1 text-white pb-4">Get started <br> with us</h2><a class="video-player-button my-3 mr-2" href="https://player.vimeo.com/video/93641234?color=ac32e4&amp;title=0&amp;byline=0&amp;portrait=0" data-fancybox data-width="1000" data-height="563"><i class="fe-icon-play"></i></a><span class="video-player-label text-white opacity-80 mr-4">Watch video!</span><a class="btn btn-style-4 btn-primary ep_btn" href="{{url('portfolio')}}">Explore Portfolio</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Services-->
   <!-- Categories-->
    <section class="container py-4">
      <h2 class="h3 block-title text-center">We Are Serving</h2>
      <div class="row py-3">
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="icon-box text-center mx-auto">
            <div id="imb" class="icon-box-icon"><img src="assets/img/Web.png"></div>
            <h3 class="icon-box-title">Web</h3>
            <span>DESIGN & DEVELOPMENT</span>
            <p class="icon-box-text text-sm">Need website or web application that meets your business goals ? We can create responsive designs & develop professional websites</p>
            <a href="{{ url('services/web-design-and-development') }}" class="icon-box-link">More Detail <i class="fe-icon-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="icon-box text-center mx-auto">
            <div id="imb" class="icon-box-icon"><img src="assets/img/Design.png"></div>
            <h3 class="icon-box-title">DESIGN</h3>
            <span>BRANDING & IDENTITY</span>
            <p class="icon-box-text text-sm">We do branding for your social media, email templates, stationary, logos, cards, letter heads to build your identity and much more</p>
            <a href="{{ url('services/design-brandeing-&-identity') }}" class="icon-box-link">More Detail <i class="fe-icon-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="icon-box text-center mx-auto">
            <div id="imb" class="icon-box-icon"><img src="assets/img/Optimize.png"></div>
            <h3 class="icon-box-title">OPTIMIZE</h3>
            <span>DESIGN, DEVELOPMENT & SEO</span>
            <p class="icon-box-text text-sm">Facing performance or optimization issues in your website? We can optimize your website as per your needs with latest functionalities.</p>
            <a href="{{url('services/optimize-design-development-&-seo')}}" class="icon-box-link">More Detail <i class="fe-icon-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="icon-box text-center mx-auto">
            <div id="imb" class="icon-box-icon"><img src="assets/img/Android.png"></div>
            <h3 class="icon-box-title">Android</h3>
            <span>Develop, Upgrade & Modify App</span>
            <p class="icon-box-text text-sm">Looking to start a new venture? Our quality android application promises 99.9% uptime with unbeatable features pack can help you get there.</p>
            <a href="{{url('services/android-develop-upgrade-modify-app')}}" class="icon-box-link">More Detail <i class="fe-icon-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="icon-box text-center mx-auto">
            <div id="imb" class="icon-box-icon"><img src="assets/img/Customization.png"></div>
            <h3 class="icon-box-title">Customization</h3>
            <span>Plugin & Theme Development</span>
            <p class="icon-box-text text-sm">your business have some custom flow and you want to fullfil with custom wordpress plugin & theme then we can develop custom wordpress plugin & theme.</p>
            <a href="{{ url('services/customization-plugins-theme-development') }}" class="icon-box-link">More Detail <i class="fe-icon-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="icon-box text-center mx-auto">
            <div id="imb" class="icon-box-icon"><img src="assets/img/Support.png"></div>
            <h3 class="icon-box-title">SUPPORT</h3>
            <span>SALES, BILLING & TICKETING</span>
            <p class="icon-box-text text-sm">Don’t hesitate to ask if you are facing any issue. We provide 24 hours support for your Website, Hosting, Content or Social Media related issues.</p>
            <a href="{{ url('services/support-sales-billing-ticketing') }}" class="icon-box-link">More Detail <i class="fe-icon-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="icon-box text-center mx-auto">
            <div id="imb" class="icon-box-icon"><img src="assets/img/Social.png"></div>
            <h3 class="icon-box-title">SOCIAL</h3>
            <span>MANAGEMENT & MARKETING</span>
            <p class="icon-box-text text-sm">Want to promote your site in the social world? We provide social media marketing, management, and keep an eye on latest trends and techniques.</p>
            <a href="{{ url('services/social-management-&-marketing') }}" class="icon-box-link">More Detail <i class="fe-icon-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="icon-box text-center mx-auto">
            <div id="imb" class="icon-box-icon"><img src="assets/img/Management.png"></div>
            <h3 class="icon-box-title">MANAGEMENT</h3>
            <span>MONTHLY SERVICES</span>
            <p class="icon-box-text text-sm">We also manage sites for a full month. This management includes all services mentioned above. So you don’t need to do any work.</p>
            <a href="{{ url('services/management-monthly-services') }}" class="icon-box-link">More Detail <i class="fe-icon-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>




    <!-- CTA #1-->
    <section class="bg-center bg-repeat-y pt-3" style="background: #1aa687;">
      <div class="container-fluid pt-4">
        <div class="row align-items-center">
          <div class="col-xl-5 col-md-6 offset-xl-1"><img class="d-block mx-auto" src="assets/img/homepages/marketing-seo/cta01.png" alt="CreateX Marketing"></div>
          <div class="col-xl-5 col-md-6 text-center text-md-left py-5">
            <h2 class="h3 block-title text-white">We offer a full range of Business Application</h2>
            <p class="text-lg text-white py-3">business functionality that you can use internally, externally, or with other business applications. You can create business applications of individual components, which are related to each other.For example Customer Relationship Management,Custom Multi vendor Ecommerce Stores,Custom Ecommerce Development etc</p><a class="scroll-to btn btn-light mb-3 em_btn" href="{{url('portfolio')}}">Explore More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Process-->
    <section class="bg-secondary pt-5 pb-4">
      <div class="container pt-2 pt-md-4">
        <h2 class="h3 block-title text-center">The Process. How it all works</h2>
        <div class="row pt-3">
          <div class="col-lg-3 col-sm-6">
            <!-- Step-->
            <div class="step">
              <div class="step-number">1</div>
              <h3 class="step-title">Share Requirements</h3>
              <p class="step-text text-sm">Before starting we encourage our client to share the requirements and lock the scope of project.</p><a class="step-link" href="{{url('contactus')}}">Drop Your Requirements<i class="fe-icon-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <!-- Step-->
            <div class="step">
              <div class="step-number">2</div>
              <h3 class="step-title">Expert Development</h3>
              <p class="step-text text-sm">Our Expert Developers join the project after requirements finalize.</p><a class="step-link" href="{{url('about')}}">See Our Team<i class="fe-icon-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <!-- Step-->
            <div class="step">
              <div class="step-number">3</div>
              <h3 class="step-title">Testing Before Go Live</h3>
              <p class="step-text text-sm">Testing is most important part before go live our testing team checks the project and find out the bugs if have and report bag to expert developers.</p><a class="step-link" href="{{url('about')}}">See Our Team<i class="fe-icon-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <!-- Step-->
            <div class="step">
              <div class="step-number">4</div>
              <h3 class="step-title">Deployed</h3>
              <p class="step-text text-sm">We will deploy the project on client hosting and project is in mature form but if instead of testing client also identify any bug we guys appreciate to fix that.</p><a class="step-link" href="{{url('portfolio')}}">Explore Portfolio<i class="fe-icon-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team-->
    <!-- CTA #2-->
    <section class="bg-center bg-repeat-y pt-3">
      <div class="container-fluid pt-4" style="background: #1aa687;">
        <div class="container px-4">
          <div class="row align-items-center">
            <div class="col-md-7 py-3">
              <h2 class="h3 text-white pb-3">LETS BEGIN</h2>
              <p class="text-lg text-white font-weight-medium">1 Trial Service</p>
              <p class="text-white pb-3">Not sure what to do next? Send us your project requirements and test us with little work so that we can proceed further and get the ball rolling. Our agent will be in touch with you shortly describing services, outcomes and other related questions. We usually reply all queries within one business day. Lets get started now!</p><a class="btn btn-light cun_btn" href="{{url('contactus')}}">Contact us now</a>
            </div>
            <div class="col-md-5"><img class="d-block mx-auto" src="assets/img/homepages/marketing-seo/cta01.png" alt="CreateX Marketing"></div>
          </div>
        </div>
      </div>
    </section>
@endsection 