<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\ClientCategory;
use Illuminate\Http\Request;

class ClientCategortController extends Controller
{
    public function index()
    {
        if (\Auth::user()->can('manage-category')) {
            $categories = ClientCategory::paginate(10);
            return view('back/client-category.index', compact('categories'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }


    public function create()
    {
        if (\Auth::user()->can('create-category')) {
            return view('back/client-category.create');
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
            ClientCategory::create([
                'name'   => $request->name,
                'status' => $request->status
            ]);
            return redirect()->route('client-category.index')->with('success', __('Category created successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }



    public function edit($id)
    {
        if (\Auth::user()->can('edit-category')) {
            $category = ClientCategory::find($id);
            return view('back/client-category.edit', compact('category'));
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
            $category = ClientCategory::find($id);
            $category->name = $request->name;
            $category->status = $request->status;
            $category->update();
            return redirect()->route('client-category.index')->with('success', __('Category updated successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function destroy($id)
    {
        if (\Auth::user()->can('delete-category')) {
            $category = ClientCategory::find($id);
            $category->delete();
            return redirect()->route('client-category.index')->with('success', __('Category deleted successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function clientCategoryStatus(Request $request, $id)
    {
        $category = ClientCategory::find($id);
        $input          = ($request->value == "true") ? 1 : 0;
        if ($category) {
            $category->status = $input;
            $category->save();
        }
        return response()->json(['is_success' => true, 'message' => __('Category status changed successfully.')]);
    }
}
