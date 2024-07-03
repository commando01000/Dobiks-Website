<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\Testimonial;

class Testimonial_frontController extends Controller
{
    public function index()
    {
        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);
        $testimonials =Testimonial::get();

        return view('front/testimonials.index', compact('lang', 'testimonials'));
    }
}
