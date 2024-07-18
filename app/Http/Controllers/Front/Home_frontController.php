<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\advertisement;
use App\Models\Blog;
use App\Models\Client;
use App\Models\ClientCategory;
use App\Models\Project;
use App\Models\Faq;
use App\Models\Leadership;
use App\Models\MenuSetting;
use App\Models\ProjectCategory;
use App\Models\Testimonial;



class Home_frontController extends Controller
{
    public function index()
    {
        $projects = Project::take(9)->get();
        $categories = ProjectCategory::with('projects')->get();
        $leaderships = Leadership::take(3)->get();
        $clients = Client::take(9)->get();
        $clientCategory = ClientCategory::with('clients')->take(9)->get();
        return view('front.home.index', compact('projects', 'leaderships', 'categories', 'clients', 'clientCategory'));
    }
}
