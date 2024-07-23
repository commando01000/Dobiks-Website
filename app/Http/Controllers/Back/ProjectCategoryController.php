<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\DataTables\ProjectCategoryDataTable;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectCategoryController extends Controller
{

    public function index(ProjectCategoryDataTable $dataTable)
    {
        if (\Auth::user()->can('manage-category')) {
            $categories = ProjectCategory::paginate(10);
            return view('back/project-category.index', compact('categories'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }


    public function create()
    {
        if (\Auth::user()->can('create-category')) {
            return view('back/project-category.create');
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
            ProjectCategory::create([
                'name'   => $request->name,
                'status' => $request->status
            ]);
            return redirect()->route('project-category.index')->with('success', __('Category created successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }



    public function edit($id)
    {
        if (\Auth::user()->can('edit-category')) {
            $category = ProjectCategory::find($id);
            return view('back/project-category.edit', compact('category'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }


    public function update(Request $request, $id)
    {
        if (\Auth::user()->can('edit-category')) {
            request()->validate([
                'name' => 'required|max:191',
                'status' => 'required',
            ]);
            $category = ProjectCategory::find($id);
            $category->name = $request->name;
            $category->status = $request->status;
            $category->update();
            return redirect()->route('project-category.index')->with('success', __('Category updated successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function destroy($id)
    {
        if (Auth::user()->can('delete-category')) {
            $category = ProjectCategory::find($id);
            $category->delete();
            return redirect()->route('project-category.index')->with('success', __('Category deleted successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function projectCategoryStatus(Request $request, $id)
    {
        $category = ProjectCategory::find($id);
        $input          = ($request->value == "true") ? 1 : 0;
        if ($category) {
            $category->status = $input;
            $category->save();
        }
        return response()->json(['is_success' => true, 'message' => __('Category status changed successfully.')]);
    }
}
