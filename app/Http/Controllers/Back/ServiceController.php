<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\CategoryService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {

        if (\Auth::user()->can('manage-project')) {
            $services = Service::paginate(10);
            return view('back/service.index', compact('services'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Auth::user()->can('create-project')) {
            $categories = CategoryService::where('status', 1)->get();
            return view('back/service.create', compact('categories'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function show(Service $service)
    {
        if (\Auth::user()->can('edit-project')) {
            // dd($project);

            // dd($service);

            return view('back/service.view', compact('service'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
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

        if (\Auth::user()->can('create-project')) {
            request()->validate([
                'title'             => 'required|unique:services',
                'short_description'       => 'required',
                'cover'            => 'image|mimes:jpg,jpeg,png,webp',
            ]);

            if ($request->hasFile('cover')) {
                request()->validate([
                    'cover' => 'mimes:jpg,jpeg,png',
                ]);
                $path = $request->file('cover')->store('services');
            }


            $service =  Service::create([
                'title'                 => $request->title,
                'slug'                 => $request->slug,
                'short_description'     => $request->short_description,
                'description'           => $request->body,
                'service_category'          => $request->category_id,
                'project_status'        => 1,
                'emdlink'        => $request->emdlink,
                'cover'                => $path,

            ]);
            return redirect()->route('services.index')->with('success', __('Project created successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        if (\Auth::user()->can('edit-project')) {
            $categories = CategoryService::where('status', 1)->get();
            return view('back/service.edit', compact('service', 'categories'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (\Auth::user()->can('edit-project')) {
            request()->validate([
                'title'             => 'required|max:191',
                'short_description'       => 'required',
            ]);
            $service = Service::find($id);
            if ($request->hasFile('cover')) {
                request()->validate([
                    'cover' => 'required|image|mimes:jpg,png,jpeg,webp',
                ]);
                $old_cover = $service->cover;
                $path           = $request->file('cover')->store('services');
                $service->cover   = $path;
            }

            $service->title                 = $request->title;
            $service->slug                 = $request->slug;
            $service->short_description     = $request->short_description;
            $service->description           = $request->body;
            $service->service_category          = $request->category_id;
            $service->service_status        = $request->service_status;
            $service->emdlink        = $request->emdlink;
            $service->save();
            if (isset($old_cover))
                Storage::delete($old_cover);

            return redirect()->route('services.index')->with('success', __('Service updated successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (\Auth::user()->can('delete-project')) {
            $post = Service::find($id);
            $post->delete();
            return redirect()->route('services.index')->with('success', __('Service deleted successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
}
