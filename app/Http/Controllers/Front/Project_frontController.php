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
        $lang = UtilityFacades::getActiveLanguage();
        // \App::setLocale($lang);
        // if ($request->category_id != '') {
        //     $allProjects = Project::where('category_id', $request->category_id)->paginate(3);
        //     $projectHtml = '';
        //     foreach ($allProjects as $project) {
        //         $imageUrl = $project->images ? Storage::url($project->images) : asset('vendor/landing-page2/image/Project-card-img-2.png');
        //         $redirectUrl = route('view.Project', $project->slug);
        //         $createdAt = UtilityFacades::date_time_format($project->created_at);
        //         $shortDescription = $project->short_description ? $project->short_description : 'A step-by-step guide on how to configure and implement multi-tenancy in a Laravel application, including tenant isolation and database separation.';
        //         $projectHtml .= '<div class="article-card">
        //             <div class="article-card-inner">
        //                 <div class="article-card-image">
        //                     <a href="#">
        //                         <img src="' . $imageUrl . '" alt="Project-card-image">
        //                     </a>
        //                 </div>
        //                 <div class="article-card-content">
        //                     <div class="author-info d-flex align-items-center justify-content-between">
        //                         <div class="date d-flex align-items-center">
        //                             <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
        //                                 <!-- SVG path for date icon -->
        //                             </svg>
        //                             <span>' . $createdAt . '</span>
        //                         </div>
        //                     </div>
        //                     <h3>
        //                         <a href="' . $redirectUrl . '">' . $project->title . '</a>
        //                     </h3>
        //                     <p>' . $shortDescription . '</p>
        //                 </div>
        //             </div>
        //         </div>';
        //     }
        //     return response()->json(['appendedContent' => $projectHtml]);
        // } else {
        //     $allProjects = Project::paginate(9);
        // }
        $recentProjects    = Project::latest()->take(3)->get();
        $lastProject       = Project::latest()->first();
        $allProjects      = Project::with("category")->get();
        $categories     = ProjectCategory::all();
        return view('front/project.view-all-projects', compact('allProjects', 'recentProjects', 'lastProject','allProjects', 'categories', 'lang'));
    }
}
