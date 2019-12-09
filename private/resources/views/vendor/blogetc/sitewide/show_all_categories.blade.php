<ul>
    @foreach(\WebDevEtc\BlogEtc\Models\BlogEtcCategory::orderBy("category_name")->limit(200)->get() as $category)
        <li>
            <a href='{{$category->url()}}'>{{$category->category_name}}
            <span>&nbsp;({{count(@$category->posts)}})</span>
            </a>
        </li>
    @endforeach
</ul>