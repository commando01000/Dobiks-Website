<?php

namespace App\Http\Controllers\Back;

use App\DataTables\BlogDataTable;
use App\DataTables\JoinUsDataTable;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Join;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JoinUsController extends Controller
{
    public function index(JoinUsDataTable $dataTable)
    {

        if (\Auth::user()->can('manage-blog')) {

            $joins = Join::paginate(10);
            return view('back/joinUs.index', compact('joins'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function edit($id)
    {
        if (\Auth::user()->can('edit-category')) {
            $join = Join::find($id);
            return view('back/joinUs.edit', compact('join'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function update(Request $request, $id)
    {
        if (\Auth::user()->can('edit-category')) {
            request()->validate([
                'name' => 'required|max:191',

            ]);
            $join = Join::find($id);
            $join->name = $request->name;
            $join->email = $request->email;
            $join->address = $request->address;
            $join->phone = $request->phone;
            $join->update();
            return redirect()->route('join.index')->with('success', __('CV updated successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function destroy($id)
    {
        if (Auth::user()->can('delete-category')) {
            $join = Join::find($id);
            $join->delete();
            return redirect()->route('join.index')->with('success', __('CV deleted successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
}
