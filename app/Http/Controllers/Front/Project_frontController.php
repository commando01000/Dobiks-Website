<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Project_frontController extends Controller
{
    public function viewProject($slug)
    {

        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);

        $project       =  Project::findOrFail($slug);

        // if (!$project) {
        //     $newSlug = str_replace(' ', '-', $slug);
        //     $project       =  Project::where('slug', $newSlug)->first();
        //     if(!$project)
        //     abort(404);
        // }
        $allProjects  =  Project::all();

        return view('front/project.view-project', compact('project', 'allProjects', 'slug', 'lang'));
    }
    public function seeAllProjects(Request $request)
    {
           // Get the selected category ID from the request, default to 'all'
        $category_selected = $request->input('category', 'all');

        // Retrieve projects based on selected category
        if ($category_selected == 'all') {
            $projects = Project::with('category')->get();
        } else {
            $projects = Project::with('category')->where('category_id', $category_selected)->get();
        }
        $recentProjects    = Project::latest()->take(3)->get();
        $lastProject       = Project::latest()->first();
        $allProjects      = Project::with("category")->get();
        $categories     = ProjectCategory::all();
        return view('front/project.view-all-projects', compact('projects','category_selected','allProjects', 'recentProjects', 'lastProject' ,'categories'));
    }

}
