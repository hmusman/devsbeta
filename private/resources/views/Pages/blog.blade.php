@extends('Includes.layout')
@section('title','Blog')
@section('content')
    <!-- Page Title-->
    <div class="page-title d-flex" aria-label="Page title" style="background-image: url({{url('assets/img/page-title/blog-pattern.jpg')}});">
      <div class="container text-left align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{url('blog')}}">Blog</a>
            </li>
          </ol>
        </nav>
         <h1 class="page-title-heading">@if(@!$search) Blog @else Search result for "{{$query}}" @endif</h1>
      </div>
    </div>
    <div class="container pb-5 mb-3">
      <!-- Blog Grid-->
      <div class="row">
           <div class="col-lg-9">
            <div class="isotope-grid cols-2">
                <div class="gutter-sizer"></div>
                <div class="grid-sizer"></div>
                    @forelse($posts as $post)
                        <div class="grid-item">
                            <div class="card blog-card mb-2"><a class="post-thumb" href="{{$post->url()}}"><?=$post->image_tag("medium", true, ''); ?></a>
                                <div class="card-body">
                                  <h5 class="post-title"><a href="{{$post->url()}}">{{$post->title}}</a></h5>
                                  <p class="text-muted">{!! $post->generate_introduction(100) !!}</p>
                                  <!--<a class="tag-link" href="#">Space</a>-->
                                  <!--<a class="tag-link" href="#">Technology</a>-->
                                </div>
                                <div class="card-footer"><a class="post-author" href="blog-single-carousel.html">
                                    <div class="post-author-avatar"><img src="https://www.gravatar.com/avatar/173545ea40882af31b631f86e8b07ae5.jpg?s=80&d=mm&r=g" alt="Post Author"/>
                                    </div>
                                    <div class="post-author-name">{{$post->author_string()}}</div></a>
                                  <div class="post-meta"><a href="blog-single-carousel.html#comments"><i class="fe-icon-message-square"></i>{{count($post->comments)}}</a><span><i class="fe-icon-clock"></i>{{date('M d Y',strtotime($post->posted_att()))}}</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class='alert alert-danger'>No posts</div>
                    @endforelse
            </div>
            <div class="pt-2">
                <nav class="pagination">
                  {{$posts->appends( [] )->links('Pages.pagination.blogPagination')}}
                </nav>
            </div>
        </div>
        <div class="col-lg-3">
         <aside class="offcanvas-container" id="blog-single-sidebar">
            <div class="offcanvas-scrollable-area px-4 pt-5 px-lg-0 pt-lg-0">
               <!-- Categories-->
               <div class="widget widget-categories">
                  <h4 class="widget-title">Search</h4>
                  @include("blogetc::sitewide.search_form")
               </div>
               <div class="widget widget-categories">
                  <h4 class="widget-title">Categories</h4>
                  @include("blogetc::sitewide.show_all_categories")
               </div>
               <!-- Related Posts-->
               <div class="widget widget-featured-posts">
                  <h4 class="widget-title"> Recent posts</h4>
                  @include("blogetc::sitewide.recent_posts")
               </div>
            </div>
         </aside>
      </div>
      </div>
       
    </div>
    
@endsection