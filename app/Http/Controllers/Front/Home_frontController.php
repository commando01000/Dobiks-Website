<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\advertisement;
use App\Models\Blog;
use App\Models\client;
use App\Models\Project;
use App\Models\Faq;
use App\Models\MenuSetting;
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
        $blogs = Blog::take(3)->orderby('id','desc')->get();
        $projects = Project::take(2)->orderby('id','desc')->get();
        $currentDate = now()->toDateString();
        $cover_project = Project::first();
        $cover_ad = Project::where("project_category" , 2)->first();
        $clients  = client::where("builder","on")->get();
        if (UtilityFacades::getsettings('landing_page') == 1) {
            return view('front.home.index', compact(
                'appsMultipleImageSettings',
                'faqs',
                'testimonials',
                'features',
                'footerMainMenus',
                'businessGrowthsViewSettings',
                'businessGrowthsSettings',
                'blogs',
                'projects',
                'lang',
                "clients",
                "cover_project",
                "cover_ad"
            ));
        } else {
            return redirect()->route('login');
        }
    }

    // public function contact_us(){
    //     return view("front.contact.contactus")
    // }
}
