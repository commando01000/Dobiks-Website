<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\DataTables\PageSettingDataTable;
use App\Models\PageSetting;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PageSettingDataTable $dataTable)
    {


        if (\Auth::user()->can('manage-page-setting')) {
            return $dataTable->render('back/pages.index');
        } else {
            return redirect()->back()->with('failed', __('Permission denied'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Auth::user()->can('create-page-setting')) {
            return view('back/pages.create');
        } else {
            return redirect()->back()->with('failed', __('Permission denied'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (\Auth::user()->can('create-page-setting')) {
            // request()->validate([
            //     'title' => 'required|max:191',
            //     'descriptions' => 'required',
            //     'body' => 'required',
            // ]);
            $pageSetting           =  new  PageSetting();
            $pageSetting->title    = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $pageSetting->description  = ['en' => $request->descriptions_en, 'ar' => $request->descriptions_ar];
            $pageSetting->body  = ['en' => $request->body_en, 'ar' => $request->body_ar];
            $pageSetting->save();
            return redirect()->route('pages.index')->with('success',  __('Page Setting Created successfully'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (\Auth::user()->can('edit-page-setting')) {
            $pageSettings = PageSetting::find($id);
            return view('back/pages.edit', compact('pageSettings'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (\Auth::user()->can('edit-page-setting')) {
            request()->validate([
                'title' => 'required|max:191',
                'descriptions' => 'required',
                'body' => 'required',
            ]);
            $pageSettingUpdate        = PageSetting::where('id', $id)->first();
            $pageSettingUpdate->title = $request->title;
            $pageSettingUpdate->description  = $request->descriptions;
            $pageSettingUpdate->body  = $request->body;

            $pageSettingUpdate->save();
            return redirect()->route('pages.index')->with('success',  __('Page Setting Updated successfully'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (\Auth::user()->can('delete-page-setting')) {
            $pageSettingDelete = PageSetting::where('id', $id)->first();
            $pageSettingDelete->delete();
            return redirect()->back()->with('success', __('Page Setting Deleted Successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied'));
        }
    }
}
