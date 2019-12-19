@extends('Includes.layout')
@section('title','Services')
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
          </ol>
        </nav>
         <h1 class="page-title-heading">@if(@!$search) Services @else Search result for "{{$query}}" @endif</h1>
      </div>
    </div>
	
	<section class="container pt-3 mb-3">
      <h2 class="h3 block-title text-center">What We Do<small>Whatever we do, we do with your end user in mind </small></h2>
      	<div class="row pt-5 mt-30">
      		@forelse($services as $service)
          <div class="col-lg-4 col-sm-6 mb-30 pb-5"><a class="card" href="{{ url('services') }}/{{ $service->slug }}">
            <div  class="icon-box-icon rounded-circle mx-auto" style="width: 90px; height: 90px; margin-top: -45px; "><img class="d-block mx-auto" src="{{ $service->image }}" alt="{{$service->title}} image.."></div>
            <div class="card-body text-center">
              <h3 class="card-title pt-1">{{ $service->title }}</h3>
              <span style="color: #343b43;">{{ $service->subtitle }}</span>
              <p class="card-text text-sm">{{ $service->meta_description }}</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div></a></div>

	        	<!-- <div class="col-lg-4 col-sm-6 mb-30 pb-5">
	        		<a class="card" href="{{ url('services') }}/{{ $service->id }}">
	            		<div class="card blog-card mb-2" 
	            			style="width: 100%; height: 100%; margin-top: -45px;">
	            			<img class="d-block mx-auto" src="{{ $service->image }}" alt="{{$service->title}} image..">
	            		</div>
	            		<div class="card-body text-center">
	              			<h3 class="card-title pt-1">{{ $service->title }}</h3>
	             	 		<p class="card-text text-sm">{{ $service->description }}</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
	            		</div>
	       			 </a>
	    		</div> -->
    		@empty
    		 <div class='alert alert-danger'>No service yet</div>
            @endforelse
 		</div>
	</section>
@endsection