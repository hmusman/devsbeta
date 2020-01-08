<?php

namespace App\Http\Controllers\webdevetc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Swis\LaravelFulltext\Search;
use WebDevEtc\BlogEtc\Captcha\UsesCaptcha;
use WebDevEtc\BlogEtc\Models\BlogEtcCategory;
use WebDevEtc\BlogEtc\Models\BlogEtcPost;
use App\Models\Service;


/**
 * Class BlogEtcReaderController
 * All of the main public facing methods for viewing blog content (index, single posts)
 * @package WebDevEtc\BlogEtc\Controllers
 */
class BlogEtcReaderController extends Controller
{
    use UsesCaptcha;

    /**
     * Show blog posts
     * If category_slug is set, then only show from that category
     *
     * @param null $category_slug
     * @return mixed
     */
    public function index($category_slug = null)
    {
        // the published_at + is_published are handled by BlogEtcPublishedScope, and don't take effect if the logged in user can manageb log posts
        $title = 'Viewing blog'; // default title...

        if ($category_slug) {
            $category = BlogEtcCategory::where("slug", $category_slug)->firstOrFail();
            $posts = $category->posts()->where("blog_etc_post_categories.blog_etc_category_id", $category->id);

            // at the moment we handle this special case (viewing a category) by hard coding in the following two lines.
            // You can easily override this in the view files.
            \View::share('blogetc_category', $category); // so the view can say "You are viewing $CATEGORYNAME category posts"
            $title = 'Viewing posts in ' . $category->category_name . " category"; // hardcode title here...
        } else {
            $posts = BlogEtcPost::query();
        }

        $posts = $posts->orderBy("posted_at", "desc")
            ->paginate(config("blogetc.per_page", 10));
        $services = Service::all();

        return view("Pages.blog", [
            'posts' => $posts,
            'title' => $title,
        ], compact('services'));
    }

    /**
     * Show the search results for $_GET['s']
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function search(Request $request)
    {
        if (!config("blogetc.search.search_enabled")) {
            throw new \Exception("Search is disabled");
        }
        $query = $request->get("s");
        // $search = new Search();
        // $search_results = $search->run($query);
        // \View::share("title", "Search results for " . e($query));
        $searchTerms = explode(' ', $query);
        $query = BlogEtcPost::query();
        foreach($searchTerms as $searchTerm){
            $query->where(function($q) use ($searchTerm){
                $q->where('slug', 'like', '%'.$searchTerm.'%')
                ->orWhere('title', 'like', '%'.$searchTerm.'%')
                ->orWhere('meta_desc', 'like', '%'.$searchTerm.'%')
                ->orWhere('post_body', 'like', '%'.$searchTerm.'%')
                ->orWhere('short_description', 'like', '%'.$searchTerm.'%')
                ->orWhere('seo_title', 'like', '%'.$searchTerm.'%')
                ->orWhere('subtitle', 'like', '%'.$searchTerm.'%');
            });
        }
        $posts = $query->paginate(10);
        $services = Service::all();
        return view("Pages.blog", [
            'posts' => $posts,
            "search" => "true",
            "query" => $request->get("s"),
        ],compact('services'));

    }




    /**
     * View all posts in $category_slug category
     *
     * @param Request $request
     * @param $category_slug
     * @return mixed
     */
    public function view_category($category_slug)
    {
        return $this->index($category_slug);
    }

    /**
     * View a single post and (if enabled) it's comments
     *
     * @param Request $request
     * @param $blogPostSlug
     * @return mixed
     */
    public function viewSinglePost(Request $request, $blogPostSlug)
    {
        // the published_at + is_published are handled by BlogEtcPublishedScope, and don't take effect if the logged in user can manage log posts
        $blog_post = BlogEtcPost::where("slug", $blogPostSlug)
            ->firstOrFail();
        $previous = BlogEtcPost::where('id', '<', $blog_post->id)->orderBy('id','desc')->first();
        // get next user id
        $next = BlogEtcPost::where('id', '>', $blog_post->id)->orderBy('id','asc')->first();
        if ($captcha = $this->getCaptchaObject()) {
            $captcha->runCaptchaBeforeShowingPosts($request, $blog_post);
        }
        $services = Service::all();

        return view("Pages.single-blog-post", [
            'post' => $blog_post,
            // the default scope only selects approved comments, ordered by id
            'comments' => $blog_post->comments()
                ->with("user")
                ->get(),
            'captcha' => $captcha,
            'previous' => $previous,
            'next' => $next,
        ], compact('services'));
    }






}
