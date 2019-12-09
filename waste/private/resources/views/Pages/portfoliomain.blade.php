@extends('Includes.layout')
@section('title','Portfolio')
@section('content')
    <div class="page-title d-flex" aria-label="Page title" style="background-image: url({{url('assets/img/page-title/portfolio-pattern.png')}});">
      <div class="container text-left align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{url('portfolio')}}">Portfolio</a>
            </li>
          </ol>
        </nav>
         <h1 class="page-title-heading">Portfolio</h1>
      </div>
    </div>

    <!-- Page Content-->
     <div class="container pb-5 mb-3">    
          <!-- Filters-->
      <ul class="nav nav-tabs nav-tabs-style-2 mb-4 port_navs">
        <li class="nav-item" style="cursor:pointer" id="all_portfolio_link"><a class="nav-link active"  data-filter="each_portfolio">All&nbsp;<sup></sup></a></li>
        @foreach($categories as $category)
        <li class="nav-item"><a class="nav-link" style="cursor:pointer" data-filter="port{{$category->id}}">{{$category->name}}&nbsp;<sup>{{$category->id}}</sup></a></li>
        @endforeach
      </ul>
      <!-- Grid-->
      <!-- portfolio data -->
      {{ csrf_field() }}
      <div class="row post_data ">
        <div class="gutter-sizer"></div>
        <div class="grid-sizer"></div>

      </div>
    </div>

@endsection
@section('script')
    <script src="{{url('assets/js/porfoliomain.js')}}"></script>
@endsection