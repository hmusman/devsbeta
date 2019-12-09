
@foreach(\WebDevEtc\BlogEtc\Models\BlogEtcPost::orderBy("posted_at","desc")->limit(5)->get() as $post)
    <a class="featured-post" href="{{$post->url()}}">
     <div class="featured-post-thumb">
         <?=$post->image_tag("thumbnail", false, 'd-block mx-auto'); ?>
     </div>
     <div class="featured-post-info">
        <div class="featured-post-meta"><span class="text-primary opacity-70"><i class="fe-icon-clock"></i>{{date('M d Y',strtotime($post->posted_att()))}}</span><span class="ml-3"><i class="fe-icon-message-square"></i>{{count($post->comments)}}</span>
        </div>
        <div class="featured-post-title">{{$post->title}}
        </div>
     </div>
    </a>
@endforeach