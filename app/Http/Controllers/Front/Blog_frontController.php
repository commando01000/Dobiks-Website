<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class Blog_frontController extends Controller
{
    public function index(Request $request)
    {
        $allBlogs = Blog::paginate(9);
        // dd($allBlogs);
        return view('front.blog.view-all-blogs', compact('allBlogs'));
    }
    public function view($slug)
    {
        $lang = UtilityFacades::getActiveLanguage();
        App::setLocale($lang);

        $blog = Blog::where('slug', $slug)->first();

        if (!$blog) {
            abort(404);
        }

        $allBlogs = Blog::where('id', '!=', $blog->id)->get();

        $blog_category = BlogCategory::find($blog->category_id);
        $categories = ProjectCategory::with('projects')->get();
        // dd($blog_category);

        return view('front.blog.view-blog', compact('blog', 'allBlogs', 'slug', 'lang', 'blog_category', 'categories'));
    }
}
