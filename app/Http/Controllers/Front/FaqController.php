<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\Faq;
use Illuminate\Support\Facades\App;

class FaqController extends Controller
{
    public function index()
    {
        $lang = UtilityFacades::getActiveLanguage();
        App::setLocale($lang);
        $faqs = Faq::orderBy('order')->get();
        return view('front/faqs.index', compact('lang', 'faqs'));
    }
}
