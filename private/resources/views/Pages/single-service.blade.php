@extends('Includes.layout')
@section('content')
<!-- Page Title-->
<div class="page-title d-flex" aria-label="Page title" style="background-image: url({{url('assets/img/page-title/blog-pattern.jpg')}});">
   <div class="container text-left align-self-center">
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{url('services')}}">Services</a>
            </li>
            <li class="breadcrumb-item">{{$service->title}} {{ $service->subtitle }}</li>
         </ol>
      </nav>
      <h2 class="page-title-heading" style="text-transform: capitalize 10;">{{$service->title}} {{ $service->subtitle }}</h2>
   </div>
</div>

<section class="bg-parallax">
      <div class="container bg-parallax-content pt-3 pb-5">
        <div class="icon-box-icon rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;"><img class="d-block mx-auto" src="{{ asset($service->image) }}" alt="{{$service->title}} image.."></div>
        <h4 class=" block-title text-center">{{$service->title}} {{ $service->subtitle }}</h4>
        <div class="row justify-content-center pt-2">
          <div class="col-xl-8 col-lg-9 col-md-10">
            <p class="opacity-80 text-center">{!! $service->meta_description !!}</p>
            <p class="opacity-80 text-center">{!! $service->description !!}</p>
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
     <div class="text-center pt-5"><a class="btn btn-primary" href="{{ url('services') }}">See All Services</a></div><br>
@endsection