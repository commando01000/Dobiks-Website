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

            return $dataTable->render('back/blog.index');
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
    public function store(Request $request)
    {
        if (\Auth::user()->can('create-blog')) {
            request()->validate([
                'title'             => 'required|max:191|unique:blogs',
                'images'            => 'required|image|mimes:jpg,jpeg,png',
                'description'       => 'required',
                'short_description' => 'required',
                'category_id'       => 'required',
            ]);
            if ($request->hasFile('images')) {
                request()->validate([
                    'images' => 'mimes:jpg,jpeg,png',
                ]);
                $path = $request->file('images')->store('blogs');
            }
              Blog::create([
                'title'             => $request->title,
                'description'       => $request->description,
                'category_id'       => $request->category_id,
                'images'            => $path,
                'short_description' => $request->short_description,
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
