<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\CategoryService;
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
        $categories_projects = ProjectCategory::with('projects')->get();
        $leaderships = Leadership::orderBy('created_at', 'desc')->take(3)->get();
        $categories = ProjectCategory::with('projects')->get();
        // dd($categories_projects);
        // dd($categories);
        return view('front/project.view-project', compact('project', 'allProjects', 'slug', 'lang', 'categories_projects', 'leaderships', 'categories'));
    }
    public function seeAllProjects(Request $request)
    {
        // // Get the selected category ID from the request, default to 'all'
        // $category_selected = $request->input('category', 'all');

        // // Retrieve projects based on selected category
        // if ($category_selected == 'all') {
        //     $projects = Project::with('category')->get();
        // } else {
        //     $projects = Project::with('category')->where('category_id', $category_selected)->get();
        // }

        $categories = ProjectCategory::with('projects')->get();

        return view('front/project.view-all-projects', compact('categories'));
    }

    public function getProjectsByCategory($categoryId)
    {
        $projects = Project::where('project_category', $categoryId)->paginate(9);

        return response()->json($projects);
    }
}
