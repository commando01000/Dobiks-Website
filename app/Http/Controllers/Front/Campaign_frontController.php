<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Service;
use Illuminate\Http\Request;

class Campaign_frontController extends Controller
{
    public function index()
    {
        // get a service for testing purposes where id = 14 !
        $service = Service::where('id', 14)->with('category')->first();
        $projects = Project::take(6)->get();
        $categories = ProjectCategory::with('projects')->take(6)->get();
        return view('front.campaign-ad.index', compact('service', 'projects', 'categories'));
    }
}
