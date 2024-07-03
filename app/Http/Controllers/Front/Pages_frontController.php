<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Facades\UtilityFacades;
use App\Models\MenuSetting;
use App\Models\PageSetting;


class Pages_frontController extends Controller
{
    public function index($slug)
    {
        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);
        $page = PageSetting::where('slug', $slug)->first();
        $pageFooter = MenuSetting::where('slug', $slug)->first();
        return view('front.pages.index', compact('pageFooter', 'page', 'lang', 'slug'));
    }
}
