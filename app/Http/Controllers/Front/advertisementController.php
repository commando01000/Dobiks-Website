<?php

namespace App\Http\Controllers\front;

use App\Facades\UtilityFacades;
use App\Http\Controllers\Controller;
use App\Models\advertisement;
use Illuminate\Http\Request;

class advertisementController extends Controller
{
    public function viewAdvertisments($slug)
    {

        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);

        $advertisement       =  advertisement::where('id', $slug)->first();
       
        if (!$advertisement) {
            $newSlug = str_replace(' ', '-', $slug);
            $advertisement       =  advertisement::where('slug', $newSlug)->first();
            if(!$advertisement)
            abort(404);
        }
        $alladvertisements  =  advertisement::all();

        return view('front/advertisement.view-advertisement', compact('advertisement', 'alladvertisements', 'slug', 'lang'));
    }
    public function seeAllAdvertisements(Request $request)
    {
        $lang = UtilityFacades::getActiveLanguage();
        // \App::setLocale($lang);
        // if ($request->category_id != '') {
        //     $alladvertisements = advertisement::where('category_id', $request->category_id)->paginate(3);
        //     $advertisementHtml = '';
        //     foreach ($alladvertisements as $advertisement) {
        //         $imageUrl = $advertisement->images ? Storage::url($advertisement->images) : asset('vendor/landing-page2/image/advertisement-card-img-2.png');
        //         $redirectUrl = route('view.advertisement', $advertisement->slug);
        //         $createdAt = UtilityFacades::date_time_format($advertisement->created_at);
        //         $shortDescription = $advertisement->short_description ? $advertisement->short_description : 'A step-by-step guide on how to configure and implement multi-tenancy in a Laravel application, including tenant isolation and database separation.';
        //         $advertisementHtml .= '<div class="article-card">
        //             <div class="article-card-inner">
        //                 <div class="article-card-image">
        //                     <a href="#">
        //                         <img src="' . $imageUrl . '" alt="advertisement-card-image">
        //                     </a>
        //                 </div>
        //                 <div class="article-card-content">
        //                     <div class="author-info d-flex align-items-center justify-content-between">
        //                         <div class="date d-flex align-items-center">
        //                             <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
        //                                 <!-- SVG path for date icon -->
        //                             </svg>
        //                             <span>' . $createdAt . '</span>
        //                         </div>
        //                     </div>
        //                     <h3>
        //                         <a href="' . $redirectUrl . '">' . $advertisement->title . '</a>
        //                     </h3>
        //                     <p>' . $shortDescription . '</p>
        //                 </div>
        //             </div>
        //         </div>';
        //     }
        //     return response()->json(['appendedContent' => $advertisementHtml]);
        // } else {
        //     $alladvertisements = advertisement::paginate(9);
        // }
        $recentadvertisements    = advertisement::latest()->take(3)->get();
        $lastadvertisement       = advertisement::latest()->first();
        $alladvertisements      = advertisement::all();

        return view('front/advertisement.view-all-advertisements', compact('alladvertisements', 'lastadvertisement', 'recentadvertisements', 'lang'));
    }
}
