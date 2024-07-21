<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\Blog;
use App\Models\Leadership;
use App\Models\Statistic;
use App\Models\Testimonial;

class About_frontController extends Controller
{
    public function index()
    {
        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);
        $testimonials = Testimonial::get();
        $leaderships = Leadership::get();
        $about = Statistic::where('title', 'about')->first();
        $statistics = Statistic::where('title', 'statistics')->first();

        $allBlogs = Blog::take(3)->get();
        return view('front/about-us.index', compact('lang', 'testimonials', 'leaderships', 'about', 'statistics', 'allBlogs'));
    }
    public function team_detail($id)
    {

        $teamMember = Leadership::where('id', $id)->first();
        return view('front.team-details.index', compact('teamMember'));
    }
}
