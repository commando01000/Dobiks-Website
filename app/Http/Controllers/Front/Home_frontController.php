<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\advertisement;
use App\Models\Blog;
use App\Models\Client;
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

        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);
        $faqs = Faq::orderBy('order')->get();
        $features = json_decode(UtilityFacades::getsettings('feature_setting'));
        $testimonials = Testimonial::where('status', 1)->get();
        $appsMultipleImageSettings = json_decode(UtilityFacades::getsettings('apps_multiple_image_setting'));
        $footerMainMenus = MenuSetting::where('parent_id', 0)->get();
        $businessGrowthsViewSettings = json_decode(UtilityFacades::getsettings('business_growth_view_setting'));
        $businessGrowthsSettings = json_decode(UtilityFacades::getsettings('business_growth_setting'));
        $blogs = Blog::take(3)->orderby('id', 'desc')->get();
        $projects = Project::take(2)->orderby('id', 'desc')->get();
        $currentDate = now()->toDateString();
        $cover_project = Project::first();
        $clients = Client::all();
        $leaderships = Leadership::latest()->take(3)->get();
        $recentProjects    = Project::latest()->take(3)->get();
        $lastProject       = Project::latest()->first();
        $allProjects      = Project::with("category")->get();
        $categories = ProjectCategory::with('projects')->get();
        if (UtilityFacades::getsettings('landing_page') == 1) {
            return view('front.home.index', compact(
                'clients',
                'leaderships',
                'categories',
                'appsMultipleImageSettings',
                'faqs',
                'testimonials',
                'features',
                'footerMainMenus',
                'businessGrowthsViewSettings',
                'businessGrowthsSettings',
                'blogs',
                'lang',
                "cover_project",

            ));
        } else {
            return redirect()->route('login');
        }
    }

    // public function contact_us(){
    //     return view("front.contact.contactus")
    // }
}
