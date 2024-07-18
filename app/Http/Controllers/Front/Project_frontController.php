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

        $categories = ProjectCategory::with('projects')->get();

        return view('front/project.view-all-projects', compact('categories'));
    }
    public function getProjectsByCategory($categoryId)
    {
        $projects = Project::where('project_category', $categoryId)->get();
        return response()->json($projects);
    }
}
