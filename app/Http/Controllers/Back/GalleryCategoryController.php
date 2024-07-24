<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\DataTables\GalleryCategoryDataTable;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryCategoryController extends Controller
{
    public function index(GalleryCategoryDataTable $dataTable)
    {
        if (\Auth::user()->can('manage-category')) {
            return $dataTable->render('back/gallery-category.index');
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function create()
    {
        if (\Auth::user()->can('create-category')) {
            return view('back/gallery-category.create');
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function store(Request $request)
    {
        if (\Auth::user()->can('create-category')) {
            request()->validate([
                // 'name_ar'   => 'required|max:191',
                'name_en'   => 'required|max:191',
                'name' =>  'unique:gallery_categories',
                'status' => 'required',
            ]);
            GalleryCategory::create([
                'name'   => ['en' => $request->name_en, 'ar' => $request->name_ar],
                'status' => $request->status
            ]);
            return redirect()->route('gallery-category.index')->with('success', __('Category created successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function edit($id)
    {
        if (\Auth::user()->can('edit-category')) {
            $category = GalleryCategory::find($id);
            return view('back/gallery-category.edit', compact('category'));
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
            $category = GalleryCategory::find($id);
            $category->name = $request->name;
            $category->status = $request->status;
            $category->update();
            return redirect()->route('gallery-category.index')->with('success', __('Category updated successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function destroy($id)
    {
        if (Auth::user()->can('delete-category')) {
            $category = GalleryCategory::find($id);
            $category->delete();
            return redirect()->route('gallery-category.index')->with('success', __('Category deleted successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
}
