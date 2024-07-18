<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\Leadership;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class Project_frontController extends Controller
{
    public function viewProject($slug)
    {
        $lang = UtilityFacades::getActiveLanguage();
        App::setLocale($lang);

        // $project = Project::findOrFail($slug);
        // find the project with the slug that matches the slug parameter
        $project = Project::where('slug', $slug)->first();
        // if (!$project) {
        //     $newSlug = str_replace(' ', '-', $slug);
        //     $project       =  Project::where('slug', $newSlug)->first();
        //     if(!$project)
        //     abort(404);
        // }
        $allProjects  =  Project::all();
        $categories = ProjectCategory::with('projects')->get();
        $leaderships = Leadership::paginate(10);
        return view('front/project.view-project', compact('project', 'allProjects', 'slug', 'lang', 'categories', 'leaderships'));
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
