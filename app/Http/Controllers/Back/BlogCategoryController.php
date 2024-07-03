<?php
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use App\DataTables\BlogCategoryDataTable;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BlogCategoryController extends Controller
{
    public function index(BlogCategoryDataTable $dataTable)
    {
        if (\Auth::user()->can('manage-category')) {
            return $dataTable->render('back/blog-category.index');
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function create()
    {
        if (\Auth::user()->can('create-category')) {
            return view('back/blog-category.create');
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function store(Request $request)
    {
        if (\Auth::user()->can('create-category')) {
            request()->validate([
                'name'   => 'required|max:191|unique:blog_categories',
                'status' => 'required',
            ]);
            BlogCategory::create([
                'name'   => $request->name,
                'status' => $request->status
            ]);
            return redirect()->route('blog-category.index')->with('success', __('Category created successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function edit($id)
    {
        if (\Auth::user()->can('edit-category')) {
            $category = BlogCategory::find($id);
            return view('back/blog-category.edit', compact('category'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function update(Request $request,$id)
    {
        if (\Auth::user()->can('edit-category')) {
            request()->validate([
                'name' => 'required|max:191',
                'status' => 'required',
            ]);
            $category = BlogCategory::find($id);
            $category->name = $request->name;
            $category->status = $request->status;
            $category->update();
            return redirect()->route('blog-category.index')->with('success', __('Category updated successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function destroy($id)
    {
        if (Auth::user()->can('delete-category')) {
            $category = BlogCategory::find($id);
            $category->delete();
            return redirect()->route('blog-category.index')->with('success', __('Category deleted successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
}
