<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Statistic;
use App\Models\StatisticDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StatisticController extends Controller
{

    public function index()
    {
        $statistics = Statistic::with('details')->get();
        return view('back.statistics.index', compact('statistics'));
    }

    public function create()
    {
        return view('back.statistics.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'details.*.category' => 'required|string|max:255',
            'details.*.number' => 'required|numeric'
        ]);

        // Store the main statistic entry
        $statistic = Statistic::create([
            'title' => $request->input('title'),
            'short_description' => $request->input('short_description'),
            'description' => $request->input('description'),
        ]);

        // Retrieve the details array
        $details = $request->input('details', []); // Default to empty array if null

        // Iterate over details to store them
        foreach ($details as $detail) {
            if (!empty($detail['category']) && isset($detail['number'])) {
                // Store each category and number in your database
                $statistic->details()->create([
                    'category' => $detail['category'],
                    'number' => $detail['number'],
                ]);
            }
        }

        // Redirect or return success response
        return redirect()->route('statistics.index')->with('success', 'Statistics created successfully!');
    }

    // In your StatisticsController

    // Show the form for editing a specific statistic
    public function edit($id)
    {
        $statistic = Statistic::with('details')->findOrFail($id);
        return view('back.statistics.edit', compact('statistic'));
    }

    // Update a specific statistic
    public function update(Request $request, $id)
    {
        // Find the statistic or fail if it doesn't exist
        $statistic = Statistic::findOrFail($id);

        // Update the description fields
        $statistic->description = $request->input('description');
        $statistic->short_description = $request->input('short_description');
        $statistic->save();

        // Get existing details IDs
        $existingDetailsIds = $statistic->details->pluck('id')->toArray();

        // Handle updating, creating, or deleting details
        $details = $request->input('details', []);

        $updatedDetailsIds = [];
        foreach ($details as $detail) {
            if (isset($detail['id'])) {
                // Update existing details
                $statisticDetail = StatisticDetail::findOrFail($detail['id']);
                $statisticDetail->category = $detail['category'];
                $statisticDetail->number = $detail['number'];
                $statisticDetail->save();
                $updatedDetailsIds[] = $detail['id'];
            } else {
                // Create new details
                $newDetail = $statistic->details()->create([
                    'category' => $detail['category'],
                    'number' => $detail['number']
                ]);
                $updatedDetailsIds[] = $newDetail->id;
            }
        }

        // Identify details to be deleted
        $detailsToDelete = array_diff($existingDetailsIds, $updatedDetailsIds);
        StatisticDetail::destroy($detailsToDelete);

        return redirect()->route('statistics.index')->with('success', 'Statistics updated successfully');
    }



    // Remove a specific statistic

    // public function destroy($id)
    // {
    //     $statistic = Statistic::findOrFail($id);
    //     $statistic->delete(); // Remove the statistic
    //     $statistic->details()->delete(); // Remove associated details


    //     return redirect()->route('statistics.index')->with('success', 'Statistic deleted successfully.');
    // }
}
