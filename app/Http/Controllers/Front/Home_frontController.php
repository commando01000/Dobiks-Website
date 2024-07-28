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
use App\Models\Slider;
use App\Models\Testimonial;



class Home_frontController extends Controller
{
    public function index()
    {
        $projects = Project::take(6)->get();
        $categories = ProjectCategory::with('projects')->take(6)->get();
        $leaderships = Leadership::orderBy('created_at', 'desc')->take(3)->get();
        $clients = Client::take(6)->get();
        $clientCategory = ClientCategory::with('clients')->take(6)->get();
        $sliders = Slider::all();
        return view('front.home.index', compact('projects', 'leaderships', 'categories', 'clients', 'clientCategory', 'sliders'));
    }
    public function getProjectsByCategory($categoryId)
    {
        $projects = Project::where('project_category', $categoryId)->latest()->take(6)->get();
        return response()->json($projects);
    }
    public function PrivacyPolicy()
    {
        return view('front.policy.index');
    }
}
