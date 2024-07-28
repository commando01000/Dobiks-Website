<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{

    public function index()
    {

        $sliders = Slider::all();
        return view('back.slider.index', compact('sliders'));
    }
    public function create()
    {
        return view('back.slider.create');
    }
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'string|max:255|nullable',
            'image' => 'required|image|mimes:jpg,png,jpeg,webp,svg',

        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('sliders');
        }

        Slider::create([
            'title' => $request->title,
            'image' => $path,
        ]);
        return redirect()->route('sliders.index')->with('success', 'Slider created successfully.');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('back.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'string|max:255|nullable',
            'image' => 'image|mimes:jpg,png,jpeg,webp,svg', // Adjust max size as needed

        ]);
        $slider = Slider::find($id);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('sliders');

            if (Storage::exists($slider->image)) {
                Storage::delete($slider->image);
            }
        }

        $slider->update([
            'title' => $request->title,
            'image' => $path,
        ]);
        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully.');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        if (Storage::exists($slider->image)) {
            Storage::delete($slider->image);
        }
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully.');
    }
}
