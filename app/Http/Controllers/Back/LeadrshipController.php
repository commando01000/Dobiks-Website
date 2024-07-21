<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Leadership;
use Illuminate\Http\Request;

class LeadrshipController extends Controller
{
    //
    public function index()
    {
        $leaderships = Leadership::paginate(10);

        return view('back.leadrship.index', compact('leaderships'));
    }
    public function create()
    {

        return view('back.leadrship.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'name'             => 'required',
            'photo'            => 'image|mimes:jpg,jpeg,png',
            'position'       => 'required',
            'bio'       => 'nullable|string',
        ]);
        if ($request->hasFile('photo')) {
            request()->validate([
                'photo' => 'mimes:jpg,jpeg,png',
            ]);


            // Return the file name

            $path = $request->file('photo')->store('leadership');
        }

        Leadership::create([
            "name"                 => $request->name,
            'bio'           => $request->bio,
            'position'           => $request->position,
            'photo'                => $path,
        ]);



        return redirect()->route('leadership.index')->with('success', __('client created successfully.'));
    }

    public function edit(Leadership $leadership)
    {
        return view('back.leadrship.edit', compact('leadership'));
    }
    public function update(Request $request, Leadership $leadership)
    {
        request()->validate([
            'name'             => 'required',
            'photo'            => 'image|mimes:jpg,jpeg,png',
            'position'       => 'required',
            'bio'       => 'nullable|string',
        ]);
        $path = $leadership->photo;
        if ($request->hasFile('photo')) {
            request()->validate([
                'photo' => 'mimes:jpg,jpeg,png',
            ]);
            $path = $request->file('photo')->store('leadership');
        }
        $leadership->update([
            "name"                 => $request->name,
            'bio'           => $request->bio,
            'position'           => $request->position,
            'photo'                => $path,
        ]);
        return redirect()->route('leadership.index')->with('success', __('client updated successfully.'));
    }

    public function destroy(Leadership $leadership)
    {
        $leadership->delete();
        return redirect()->route('leadership.index')->with('success', __('client deleted successfully.'));
    }
}
