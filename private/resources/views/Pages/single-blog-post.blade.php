@extends('Includes.layout')
@section('title')
{{$post->gen_seo_title()}}
@stop
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
            <li class="breadcrumb-item">{{$post->title}}</li>
         </ol>
      </nav>
      <h2 class="page-title-heading" style="text-transform: capitalize;">{{$post->title}}</h2>
   </div>
</div>

<div class="container pb-5 mb-3">
    @include("blogetc::partials.show_errors")
    {!! session('success') !!}
   <div class="row">
      <!-- Post Content-->
      <div class="col-lg-9">
         <!-- Single Post Meta-->
         <div class="d-flex justify-content-between align-items-center pb-3">
            <div>
               <a class="scroll-to post-author" href="#author">
                  <div class="post-author-avatar"><img src="https://www.gravatar.com/avatar/173545ea40882af31b631f86e8b07ae5.jpg?s=80&d=mm&r=g" alt="Post Author"/>
                  </div>
                  <div class="post-author-name">{{$post->author_string()}}</div>
               </a>
            </div>
            <div class="post-meta"><a class="scroll-to text-sm" href="#comments"><i class="fe-icon-message-square"></i>{{count($post->comments)}}</a><span class="text-sm"><i class="fe-icon-clock"></i>{{date('M d Y',strtotime($post->posted_att()))}}</span></div>
         </div>
         <hr class="mb-5">
         <!-- Carousel-->
             <?=$post->image_tag("large", false, 'd-block mx-auto'); ?>
         <p class="pb-1">
          {!! $post->post_body_output() !!}
         </p>
         <!-- Single Post Tags + Share-->
         <div class="d-sm-flex justify-content-between align-items-center border-top border-bottom mb-5 py-2">
             <div class="py-2">
                 <span class="dinline-block align-middle py-2 mr-2">
               <strong>Category:</strong>
               </span>
                 @foreach($post->categories as $category)
                    <a href='{{$category->url()}}' class="tag-link">{{$category->category_name}}</a>
                 @endforeach
                 
            </div>
            <div class="py-2">
               <span class="dinline-block align-middle py-2 mr-2">
               <strong>Share:</strong>
               </span>
               <a class="social-btn sb-style-3 sb-facebook mb-0" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i>
               </a>
               <a class="social-btn sb-style-3 sb-twitter mb-0" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i>
               </a>
               <a class="social-btn sb-style-3 sb-pinterest mb-0" href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="socicon-pinterest"></i>
               </a>
            </div>
         </div>
         <nav class="entry-navigation">
             @if(!is_null($previous))
                <div class="prev-btn">
                   <a class="label" href="{{$previous->url()}}"><i class="fe-icon-arrow-left"></i>Prev <span class='d-none d-sm-inline'>post</span></a>
                   <div class="post-preview">
                      <div class="post-preview-thumb">
                          <?=$previous->image_tag("thumbnail", false, 'd-block mx-auto'); ?>
                      </div>
                      <div class="post-preview-details"><span class="post-preview-title">{{substr($previous->title, 0, 20)}}</span><span class="post-preview-meta"><i class="fe-icon-calendar"></i>{{date('M d Y',strtotime($previous->posted_att()))}}</span></div>
                   </div>
                </div>
            @endif
            
            <a class="back-btn" href="{{url('blog')}}"><i class="fe-icon-grid"></i></a>
            @if(!is_null($next))
                <div class="next-btn">
                   <a class="label" href="{{$next->url()}}">Next <span class='d-none d-sm-inline'>post</span><i class="fe-icon-arrow-right"></i></a>
                   <div class="post-preview">
                      <div class="post-preview-details"><span class="post-preview-title">{{substr($next->title, 0, 20)}}</span><span class="post-preview-meta"><i class="fe-icon-calendar"></i>{{date('M d Y',strtotime($next->posted_att()))}}</span></div>
                      <div class="post-preview-thumb"><?=$next->image_tag("thumbnail", false, 'd-block mx-auto'); ?>
                      </div>
                   </div>
                </div>
            @endif
         </nav>
      </div>
      <div class="col-lg-3">
          
         <!-- Single Post Sidebar-->
         <!-- Off-Canvas Toggle--><a class="offcanvas-toggle" href="#blog-single-sidebar" data-toggle="offcanvas"><i class="fe-icon-sidebar"></i></a>
         <!-- Off-Canvas Container-->
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
<div class="bg-secondary py-5" id="comments">
      <div class="container pb-4">
        <div class="row">
          <div class="col-lg-9">
            <h4 class="text-center pb-3">{{count($post->comments)}} Comments</h4>
            
            @foreach($comments as $comment)
                <div class="blockquote comment mb-4">
              <p>{!! nl2br(e($comment->comment))!!}</p>
              <div class="d-sm-flex justify-content-between align-items-center">
                <div class="testimonial-footer">
                  <div class="testimonial-avatar"><img src="https://www.gravatar.com/avatar/173545ea40882af31b631f86e8b07ae5.jpg?s=80&d=mm&r=g" alt="Comment Author Avatar"/>
                  </div>
                  <div class="d-table-cell align-middle pl-2">
                    <div class="blockquote-footer">{{$comment->author()}}
                    @if(config("blogetc.comments.ask_for_author_website") && $comment->author_website)
                            (<a href='{{$comment->author_website}}' target='_blank' rel='noopener'>website</a>)
                        @endif
                      <cite>{{$comment->created_at->diffForHumans()}}</cite>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @include("blogetc::partials.add_comment_form")
          </div>
        </div>
      </div>
    </div>
@endsection