<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\DataTables\TestimonialsDataTable;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(TestimonialsDataTable $dataTable)
    {
        if (\Auth::user()->can('manage-testimonial')) {
            $testimonials = Testimonial::orderBy('id', 'desc')->get();
            return view('back/testimonials.index', compact('testimonials'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function create()
    {
        if (\Auth::user()->can('create-testimonial')) {
            return view('back/testimonials.create');
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function store(Request $request)
    {
        if (\Auth::user()->can('create-testimonial')) {
            request()->validate([
                'name'          => 'required|max:191',
                'title'         => 'required|max:191',
                'desc_en'          => 'required',
                // 'desc_ar'          => 'required',
                'designation'   => 'required|max:100',
                'image'         => 'required',
                'rating'        => 'required',

            ]);

            if ($request->hasFile('image')) {

                // Return the file name
                $path = $request->file('image')->store('testimonials');
            }
            Testimonial::create([
                'name'          => $request->name,
                'title'         => $request->title,
                'desc'          => ['en' => $request->desc_en, 'ar' => $request->desc_ar],
                'designation'   => $request->designation,
                'image'         => $path,
                'rating'        => $request->rating,
            ]);

            return redirect()->route('testimonial.index')->with('success', 'Testimonial created succesfully..!');
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function edit($id)
    {
        if (\Auth::user()->can('edit-testimonial')) {
            $testimonial = Testimonial::find($id);
            return view('back/testimonials.edit', compact('testimonial'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function update(Request $request, $id)
    {
        if (\Auth::user()->can('edit-testimonial')) {
            $updateTestimonial = Testimonial::find($id);
            if ($request->hasfile('image')) {
                $allowedFileExtension = ['jpeg', 'jpg', 'png'];
                $file                   = $request->file('image');
                $extension              = $file->getClientOriginalExtension();
                $imageName             = $file->getClientOriginalName();
                $check                  = in_array($extension, $allowedFileExtension);
                if ($check) {
                    $fileName  =  $file->store('testimonials');
                } else {
                    return redirect()->route('testimonial.index')->with('failed', __('File type not valid.'));
                }
                $updateTestimonial->image = $fileName;
            }
            $updateTestimonial->name          = $request->name;
            $updateTestimonial->title         = $request->title;
            $updateTestimonial->desc          = $request->desc;
            $updateTestimonial->rating        = $request->rating;
            $updateTestimonial->designation   = $request->designation;
            $updateTestimonial->save();

            return redirect()->route('testimonial.index')->with('success', __('Testimonial updated successfully'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function destroy($id)
    {
        if (\Auth::user()->can('delete-testimonial')) {
            $deleteTestimonial = Testimonial::find($id);
            $deleteTestimonial->delete();
            return back()->with('success', 'Tetimonials Deleted succesfully');
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function status(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);
        $input       = ($request->value == "true") ? 1 : 0;
        if ($testimonial) {
            $testimonial->status = $input;
            $testimonial->save();
        }
        return response()->json(['is_success' => true, 'message' => __('Testimonial status changed successfully.')]);
    }
}
