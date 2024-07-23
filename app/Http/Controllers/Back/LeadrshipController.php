<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Leadership;
use App\Models\LeadershipDetail;
use Illuminate\Http\Request;

class LeadrshipController extends Controller
{
    //
    public function index()
    {
        $leaderships = Leadership::with('details')->paginate(10);

        return view('back.leadrship.index', compact('leaderships'));
    }
    public function create()
    {
        return view('back.leadrship.create');
    }
    public function show(Leadership $leadership)
    {
        // if (\Auth::user()->can('edit-project')) {
        //     // dd($project);

        //     return view('back/project.view', compact('project'));
        // } else {
        //     return redirect()->back()->with('failed', __('Permission denied.'));
        // }
        // dd($leadership);
        $leadership_details = $leadership->details()->get();
        // dd($leadership_details);
        return view('back.leadrship.view', compact('leadership', 'leadership_details'));
    }
    public function store(Request $request)
    {
        request()->validate([
            'name'             => 'required',
            'photo'            => 'image|mimes:jpg,jpeg,png',
            'position'       => 'required',
            'bio'       => 'nullable|string',
            'facebook'       => 'nullable|string',
            'twitter'       => 'nullable|string',
            'linkedin'       => 'nullable|string',
            'github'       => 'nullable|string',
            'dribble'       => 'nullable|string',
            'details.*.category' => 'required|string|max:255',
            'details.*.number' => 'required|numeric'

        ]);
        if ($request->hasFile('photo')) {
            request()->validate([
                'photo' => 'mimes:jpg,jpeg,png',
            ]);


            // Return the file name

            $path = $request->file('photo')->store('leadership');
        }

        $leadership = Leadership::create([
            "name"                 => $request->name,
            'bio'           => $request->bio,
            'position'           => $request->position,
            'facebook'           => $request->facebook,
            'twitter'           => $request->twitter,
            'linkedin'           => $request->linkedin,
            'github'           => $request->github,
            'dribble'           => $request->dribble,
            'photo'                => $path,
        ]);
        $details = $request->input('details', []); // Default to empty array if null
        // Iterate over details to store them
        foreach ($details as $detail) {
            if (!empty($detail['category']) && isset($detail['number'])) {
                // Store each category and number in your database
                $leadership->details()->create([
                    'category' => $detail['category'],
                    'number' => $detail['number'],
                ]);
            }
        }



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
        $leadership->name = $request->name;
        $leadership->bio = $request->bio;
        $leadership->position = $request->position;
        $leadership->photo = $path;
        $leadership->save();
        $existingDetailsIds = $leadership->details->pluck('id')->toArray();
        $details = $request->input('details', []);
        $updatedDetailsIds = [];
        foreach ($details as $detail) {
            if (isset($detail['id'])) {
                // Update existing details
                $statisticDetail = LeadershipDetail::findOrFail($detail['id']);
                $statisticDetail->category = $detail['category'];
                $statisticDetail->number = $detail['number'];
                $statisticDetail->save();
                $updatedDetailsIds[] = $detail['id'];
            } else {
                // Create new details
                $newDetail = $leadership->details()->create([
                    'category' => $detail['category'],
                    'number' => $detail['number']
                ]);
                $updatedDetailsIds[] = $newDetail->id;
            }
        }
        $detailsToDelete = array_diff($existingDetailsIds, $updatedDetailsIds);
        LeadershipDetail::destroy($detailsToDelete);

        return redirect()->route('leadership.index')->with('success', __('client updated successfully.'));
    }

    public function destroy(Leadership $leadership)
    {
        $leadership->delete();
        return redirect()->route('leadership.index')->with('success', __('client deleted successfully.'));
    }
}
