<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientCategory;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class Services_frontController extends Controller
{
    public function seeAllServices(Request $request)
    {

        // Supraa this is temporary till we do the model for ServicesCategory
        $categories = ProjectCategory::with('projects')->get();
        $clients = Client::take(9)->get();
        $clientCategory = ClientCategory::with('clients')->take(9)->get();
        return view('front.services.index', compact('categories', 'clients', 'clientCategory'));
    }
}
