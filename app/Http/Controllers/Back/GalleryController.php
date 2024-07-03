<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use App\DataTables\GalleryDataTable;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(GalleryDataTable $dataTable)
    {

        if (\Auth::user()->can('manage-gallery')) {

            return $dataTable->render('back/gallery.index');
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function create()
    {
        if (\Auth::user()->can('create-gallery')) {
            $categories = GalleryCategory::where('status', 1)->pluck('name', 'id');
            return view('back/gallery.create', compact('categories'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function store(Request $request)
    {
        if (\Auth::user()->can('create-gallery')) {
            request()->validate([
                'title'             => 'required',
                'images'            => 'image|mimes:jpg,jpeg,png',
                'category_id'       => 'required',
            ]);



            $uploadedFiles = [];
            if ($request->hasFile('files')) {
                $files = $request->file('files');
                foreach ($files as $file) {
                    $uploadedFiles[] = $file->store('gallery');
                }
            }

            if ($request->hasFile('images')) {
                request()->validate([
                    'images' => 'mimes:jpg,jpeg,png',
                ]);
                $path = $request->file('images')->store('gallery');
            }else{
                $path = null;
            }


            Gallery::create([
                'title'             => $request->title,
                'files'             => json_encode($uploadedFiles),
                'embed'             => $request->embed,
                'category_id'       => $request->category_id,
                'images'            => $path,
            ]);
            return redirect()->route('gallery.index')->with('success', __('Gallery created successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function edit(Gallery $gallery)
    {
        if (\Auth::user()->can('edit-gallery')) {
            $categories = GalleryCategory::where('status', 1)->pluck('name', 'id');
            return view('back/gallery.edit', compact('gallery', 'categories'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function update(Request $request, $id)
    {
        if (\Auth::user()->can('edit-gallery')) {
            request()->validate([
                'title'             => 'required',
                'category_id'       => 'required',
            ]);
            $gallery = Gallery::find($id);
            if ($request->hasFile('images')) {
                request()->validate([
                    'images' => 'required|image|mimes:jpg,png,jpeg',
                ]);
                $path           = $request->file('images')->store('gallery');
                $gallery->images   = $path;
            }
            $uploadedFiles = [];
            if ($request->hasFile('files')) {
                $files = $request->file('files');
                foreach ($files as $file) {
                    $uploadedFiles[] = $file->store('gallery');
                }
                $gallery->files          =  json_encode($uploadedFiles);
            }
            $gallery->title                = $request->title;
            $gallery->embed          = $request->embed;
            $gallery->category_id          = $request->category_id;
            $gallery->save();
            return redirect()->route('gallery.index')->with('success', __('Gallery updated successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function destroy($id)
    {
        if (\Auth::user()->can('delete-gallery')) {
            $post = Gallery::find($id);
            $post->delete();
            return redirect()->route('gallery.index')->with('success', __('Gallery deleted successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
}
