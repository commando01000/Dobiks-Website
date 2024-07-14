<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\Leadership;
use App\Models\Testimonial;

class Testimonial_frontController extends Controller
{
    public function index()
    {
        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);
        $testimonials = Testimonial::get();
        $leaderships = Leadership::get();

        return view('front/about-us.index', compact('lang', 'testimonials','leaderships'));
    }
}
