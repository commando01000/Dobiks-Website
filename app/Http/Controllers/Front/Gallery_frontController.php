<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Facades\UtilityFacades;
use App\Models\Gallery;
use App\Models\GalleryCategory;
class Gallery_frontController extends Controller
{
    public function index()
    {
        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);
        $gallery = GalleryCategory::get();
        foreach ($gallery as $key=>$record){
            $gallery[$key]['data'] = Gallery::where('category_id',$record['id'])->get();
        }
        return view('front.gallery.index', compact('lang', 'gallery'));
    }
    public function view($id)
    {
        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);
        $gallery = Gallery::where('id',$id)->first();

        return view('front.gallery.view', compact('lang', 'gallery'));
    }
}
