<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\DataTables\BlogDataTable;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(BlogDataTable $dataTable)
    {

        if (\Auth::user()->can('manage-blog')) {


            $blogs = Blog::with('category')->orderBy('id', 'asc')->paginate(10);
            return view('back.blog.index', compact('blogs'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function create()
    {
        if (\Auth::user()->can('create-blog')) {
            $categories = BlogCategory::where('status', 1)->pluck('name', 'id');
            return view('back/blog.create', compact('categories'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function show(Blog $blog)
    {
        if (\Auth::user()->can('edit-blog')) {
            // dd($blog);

            return view('back/blog.view', compact('blog'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function store(Request $request)
    {

        if (\Auth::user()->can('create-blog')) {
            request()->validate([
                //'title'             => 'required|max:191|unique:blogs',

                //'description'       => 'required',
                //'short_description' => 'required',
                'category_id'       => 'required',
            ]);

            Blog::create([
                'title'             => ['en' => $request->title_en, 'ar' => $request->title_ar],
                'description'       => ['en' => $request->description_en, 'ar' => $request->description_ar],
                'category_id'       => $request->category_id,

                'short_description' => ['en' => $request->short_description_en, 'ar' => $request->short_description_ar],
                'normal_description' => ['en' => $request->normal_description_en, 'ar' => $request->normal_description_ar],
                'created_by'        => \Auth::user()->id,
            ]);
            return redirect()->route('blog.index')->with('success', __('Blog created successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function edit(Blog $blog)
    {
        if (\Auth::user()->can('edit-blog')) {
            $categories = BlogCategory::where('status', 1)->pluck('name', 'id');
            return view('back/blog.edit', compact('blog', 'categories'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function update(Request $request, $id)
    {
        if (\Auth::user()->can('edit-blog')) {
            request()->validate([
                'title'             => 'required|max:191',
                'description'       => 'required',
                'short_description' => 'required',
                'category_id'       => 'required',
            ]);
            $blog = Blog::find($id);
            if ($request->hasFile('images')) {
                request()->validate([
                    'images' => 'required|image|mimes:jpg,png,jpeg',
                ]);
                $path           = $request->file('images')->store('blogs');
                $blog->images   = $path;
            }
            $blog->title                = $request->title;
            $blog->description          = $request->description;
            $blog->category_id          = $request->category_id;
            $blog->short_description    = $request->short_description;
            $blog->created_by           = \Auth::user()->id;
            $blog->save();
            return redirect()->route('blog.index')->with('success', __('blogs updated successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function destroy($id)
    {
        if (\Auth::user()->can('delete-blog')) {
            $post = Blog::find($id);
            $post->delete();
            return redirect()->route('blog.index')->with('success', __('Posts deleted successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
}
