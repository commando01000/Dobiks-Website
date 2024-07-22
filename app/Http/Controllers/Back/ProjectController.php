<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\DataTables\ProjectDataTable;
use App\Facades\UtilityFacades;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProjectDataTable $dataTable)
    {

        if (\Auth::user()->can('manage-project')) {
            $projects = Project::paginate(10);
            return view('back/project.index', compact('projects'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function show(Project $project)
    {
        if (\Auth::user()->can('edit-project')) {
            // dd($project);

            return view('back/project.view', compact('project'));
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
            $categories = ProjectCategory::where('status', 1)->get();
            return view('back/project.create', compact('categories'));
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
                'title'             => 'required|unique:projects',
                'cover'            => 'image|mimes:jpg,jpeg,png,webp',
                'description'       => 'required',
            ]);




            if ($request->hasFile('cover')) {
                request()->validate([
                    'cover' => 'mimes:jpg,jpeg,png',
                ]);
                $path = $request->file('cover')->store('projects');
            }
            if ($request->hasFile('images')) {
                request()->validate([
                    'images.*' => 'image|mimes:jpeg,png,jpg', // Adjust max size as needed
                ]);
            }

            $project =  Project::create([
                'title'                 => $request->title,
                'description'           => $request->description,
                'builder'           => request()->builder ?? "off",
                'body'                  => $request->body,
                'client'                => $request->client,
                'project_date'          => $request->project_date,
                'project_timeframe'     => $request->project_timeframe,
                'project_location'      => $request->project_location,
                'project_category'          => $request->category_id,
                'project_status'        => request()->builder == "on" ? 1 : 0,
                'cover'                => $path,
                'embed'                => request()->embed ?? "",
                'created_by'            => \Auth::user()->id,
            ]);


            // store project images
            if ($request->hasFile('images')) {
                foreach (request()->file("images") as $image) {

                    $image_path = $image->store("projects/images");
                    $project->images()->create([
                        "img" => $image_path,
                    ]);
                }
            }
            return redirect()->route('projects.index')->with('success', __('Project created successfully.'));
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
    public function edit(Project $project)
    {
        if (\Auth::user()->can('edit-project')) {
            $categories = ProjectCategory::where('status', 1)->get();
            return view('back/project.edit', compact('project', 'categories'));
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
                'description'       => 'required',
            ]);
            $project = Project::find($id);
            if ($request->hasFile('cover')) {
                request()->validate([
                    'cover' => 'required|image|mimes:jpg,png,jpeg,webp',
                ]);
                $old_cover = $project->cover;
                $path           = $request->file('cover')->store('projects');
                $project->cover   = $path;
            }
            if ($request->hasFile('images')) {
                request()->validate([
                    'images.*' => 'image|mimes:jpeg,png,jpg', // Adjust max size as needed
                ]);

                foreach ($project->images as $img) {
                    Storage::delete($img);
                }
                $project->images()->delete();
                foreach (request()->file("images") as $image) {
                    $image_path = $image->store("projects/images");
                    $project->images()->create([
                        "img" => $image_path,
                    ]);
                }
            }

            $project->builder               = $request->builder;
            $project->title                 = $request->title;
            $project->description           = $request->description;
            $project->body                  = $request->body;
            $project->client                = $request->client;
            $project->project_date          = $request->project_date;
            $project->project_timeframe     = $request->project_timeframe;
            $project->project_location      = $request->project_location;
            $project->project_category          = $request->category_id;
            $project->project_status        = $request->project_status;
            $project->project_status        = $request->project_status;
            $project->embed                = request()->embed ?? "";
            $project->created_by            = \Auth::user()->id;
            $project->save();

            if (isset($old_cover))
                Storage::delete($old_cover);
            return redirect()->route('projects.index')->with('success', __('projects updated successfully.'));
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
            $post = Project::find($id);
            $post->delete();
            return redirect()->route('projects.index')->with('success', __('Posts deleted successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }

    public function viewProject($slug)
    {

        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);

        $project       =  Project::where('slug', $slug)->first();

        if (!$project) {
            abort(404);
        }
        $allProjects  =  Project::all();

        return view('back/project.view-project', compact('project', 'allProjects', 'slug', 'lang'));
    }

    public function seeAllProjects(Request $request)
    {
        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);
        if ($request->category_id != '') {
            $allProjects = Project::where('category_id', $request->category_id)->paginate(3);
            $projectHtml = '';
            foreach ($allProjects as $project) {
                $imageUrl = $project->cover ? Storage::url($project->cover) : asset('vendor/landing-page2/image/Project-card-img-2.png');
                $redirectUrl = route('view.Project', $project->slug);
                $createdAt = UtilityFacades::date_time_format($project->created_at);
                $shortDescription = $project->short_description ? $project->short_description : 'A step-by-step guide on how to configure and implement multi-tenancy in a Laravel application, including tenant isolation and database separation.';
                $projectHtml .= '<div class="article-card">
                    <div class="article-card-inner">
                        <div class="article-card-image">
                            <a href="#">
                                <img src="' . $imageUrl . '" alt="Project-card-image">
                            </a>
                        </div>
                        <div class="article-card-content">
                            <div class="author-info d-flex align-items-center justify-content-between">
                                <div class="date d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                        <!-- SVG path for date icon -->
                                    </svg>
                                    <span>' . $createdAt . '</span>
                                </div>
                            </div>
                            <h3>
                                <a href="' . $redirectUrl . '">' . $project->title . '</a>
                            </h3>
                            <p>' . $shortDescription . '</p>
                        </div>
                    </div>
                </div>';
            }
            return response()->json(['appendedContent' => $projectHtml]);
        } else {
            $allProjects = Project::paginate(9);
        }
        $recentProjects    = Project::latest()->take(3)->get();
        $lastProject       = Project::latest()->first();
        $categories     = ProjectCategory::all();
        return view('back/project.view-all-projects', compact('allProjects', 'recentProjects', 'lastProject', 'categories', 'lang'));
    }
}
