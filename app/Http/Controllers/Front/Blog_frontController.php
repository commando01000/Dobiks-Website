<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Blog_frontController extends Controller
{
    public function index(Request $request)
    {
        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);
        if ($request->category_id != '') {
            $allBlogs = Blog::where('category_id', $request->category_id)->paginate(3);
            $blogHtml = '';
            foreach ($allBlogs as $blog) {
                $imageUrl = $blog->images ? Storage::url($blog->images) : asset('vendor/landing-page2/image/blog-card-img-2.png');
                $redirectUrl = route('view.blog', $blog->slug);
                $createdAt = UtilityFacades::date_time_format($blog->created_at);
                $shortDescription = $blog->short_description ? $blog->short_description : 'A step-by-step guide on how to configure and implement multi-tenancy in a Laravel application, including tenant isolation and database separation.';
                $blogHtml .= '<div class="article-card">
                    <div class="article-card-inner">
                        <div class="article-card-image">
                            <a href="#">
                                <img src="' . $imageUrl . '" alt="blog-card-image">
                            </a>
                        </div>
                        <div class="article-card-content">
                            <div class="author-info d-flex align-items-center justify-content-between">
                                <div class="date d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                        <!-- SVG path for date icon -->
                                    </svg>
                                    <span>' . $createdAt . '</span>
                                </div>
                            </div>
                            <h3>
                                <a href="' . $redirectUrl . '">' . $blog->title . '</a>
                            </h3>
                            <p>' . $shortDescription . '</p>
                        </div>
                    </div>
                </div>';
            }
            return response()->json(['appendedContent' => $blogHtml]);
        } else {
            $allBlogs = Blog::paginate(3);
        }
        $recentBlogs    = Blog::latest()->take(3)->get();
        $lastBlog       = Blog::latest()->first();
        $categories     = BlogCategory::all();
        return view('front.blog.view-all-blogs', compact('allBlogs', 'recentBlogs', 'lastBlog', 'categories', 'lang'));
    }
    public function view($slug)
    {
        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);
        $blog       =  Blog::where('slug', $slug)->first();
        if (!$blog) {
            abort(404);
        }
        $allBlogs  =  Blog::all();
        return view('front.blog.view-blog', compact('blog', 'allBlogs', 'slug', 'lang'));
    }
}
