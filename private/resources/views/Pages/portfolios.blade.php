@extends('Includes.layout')
@section('title',$single->name)
@section('content')

<div class="page-title d-flex" aria-label="Page title" style="background-image: url({{url('assets/img/page-title/portfolio-pattern.png')}});">
      <div class="container text-left align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{url('portfolio')}}">Portfolio</a>
            </li>
            <li class="breadcrumb-item">{{$single->name}}
            </li>
          </ol>
        </nav>
         <h1 class="page-title-heading">{{$single->name}}</h1>
      </div>
    </div>
<!-- Page Content-->
<div class="container pb-5">
   <div class="row">
      <!-- Project Gallery-->
      <div class="col-lg-8 mb-3">
         <div class="post-meta pb-3 text-right"><span class="text-sm ml-0"><i class="fe-icon-clock"></i>{{$single->updated_at}}</span><a class="text-sm" href=""><i class="fe-icon-bookmark"></i>{{$single->name}}</a></div>
         <div class="owl-carousel ip_carousal" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true }">
            <img src="{{url($single->image)}}" alt="Carousel Image"/>
            <img src="{{url($single->subimage1)}}" alt="Carousel Image"/>
            <img src="{{url($single->subimage2)}}" alt="Carousel Image"/>
         </div>
      </div>
      <!-- Project Details-->
      <!-- Project Details-->
      <div class="col-lg-4">
         <div class="widget">
            <h2 class="widget-title">Client</h2>
            <ul class="list-unstyled mb-0">
               <li><span class="text-muted">Name:</span><span class="font-weight-medium">&nbsp;{{$single->cName}}</span></li>
               <li><span class="text-muted">Services:</span><span class="font-weight-medium">&nbsp; {{$single->cService}}</span></li>
               <li><span class="text-muted">Website:</span><a class="navi-link font-weight-medium" target="_blank" href="{{$single->cWebsite}}">&nbsp; {{$single->cWebsite}}</a></li>
            </ul>
         </div>
         <div class="widget">
            <h2 class="widget-title">Objective</h2>
            <p class="text-muted mb-0">{{$single->objective}}</p>
         </div>
         <div class="widget">
            <h2 class="widget-title">Tools &amp; Technologies</h2>
            <p class="text-muted">{{$single->tools}}</p>
         </div>
      </div>
      <div class="widget container">
         <h2 class="widget-title">Challenge</h2>
         <!-- <p class="text-muted mb-0"><?php echo $single->challenge;?></p> -->
      </div>
   </div>
   <!-- Project Share-->
   <div class="d-sm-flex justify-content-between align-items-center border-top border-bottom mb-4 py-2">
      <div class="py-2"><span class="dinline-block align-middle py-2 mr-2"><strong>Share:</strong></span><a class="social-btn sb-style-3 sb-facebook mb-0" href="" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-3 sb-twitter mb-0" href="" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-3 sb-pinterest mb-0" href="" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="socicon-pinterest"></i></a></div>
      <div class="py-2"></div>
      <div class="post-meta"></div>
   </div>
   <!-- Entry Nanigation-->
   <nav class="entry-navigation">
      <div class="prev-btn">
         <a class="label" href="{{url('portfolio/'.urlencode($previous->name))}}"><i class="fe-icon-arrow-left"></i>Prev <span class='d-none d-sm-inline'>project</span></a>
         <div class="post-preview">
            <div class="post-preview-thumb"><img src="{{url($previous->image)}}" alt="Project thumbnail"/>
            </div>
            <div class="post-preview-details"><span class="post-preview-title"></span> <span class="post-preview-meta"><i class=""></i>{{$previous->name}}</span></div>
         </div>
      </div>
      <!-- <a class="back-btn" href=""><i class="fe-icon-grid"></i></a> -->
      <div class="next-btn">
         <a class="label" href="{{url('portfolio/'.urlencode($next->name))}}">Next <span class='d-none d-sm-inline'>project</span><i class="fe-icon-arrow-right"></i></a>
         <div class="post-preview">
            <div class="post-preview-details"><span class="post-preview-title"> </span><span class="post-preview-meta"><i class=""></i>{{$next->name}}</span></div>
            <div class="post-preview-thumb"><img src="{{url($next->image)}}" alt="Project thumbnail"/>
            </div>
         </div>
      </div>
   </nav>
   <!-- Related Projects Carousel-->
</div>
<!-- Footer-->
<h3 class="h4 text-center pt-5 mt-3 pb-4">You May Also Like</h3>
<div class="owl-carousel carousel-flush ymal_wrapper" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true,&quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
   @foreach($portfolios as $portfolio)
   <div class="mb-30 pb-3">
      <div class="card portfolio-card">
         <a class="portfolio-thumb" href="{{url('portfolio/'.urlencode($portfolio->name))}}"><img src="{{url($portfolio->image)}}" alt="Portfolio Thumbnail"/></a>
         <div class="card-body">
            <h5 class="portfolio-title"><a href="{{url('portfolio/'.urlencode($portfolio->name))}}">{{$portfolio->name}}</a></h5>
         </div>
         <div class="card-footer">
            <div>
               <a class="tag-link" href="{{url('portfolio/'.urlencode($portfolio->name))}}">{{$portfolio->name}}  ({{$portfolio->categories->name}})
               </a>
            </div>
         </div>
      </div>
   </div>
   @endforeach
</div>
@endsection