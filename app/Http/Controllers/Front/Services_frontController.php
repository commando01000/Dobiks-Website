<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CategoryService;
use App\Models\Client;
use App\Models\ClientCategory;
use App\Models\ProjectCategory;
use App\Models\Service;
use Illuminate\Http\Request;

class Services_frontController extends Controller
{
    public function seeAllServices(Request $request)
    {
        $categories = CategoryService::with('services')->get();
        $clients = Client::take(9)->get();
        $clientCategory = ClientCategory::with('clients')->take(9)->get();
        return view('front.services.index', compact('categories', 'clients', 'clientCategory'));
    }

    public function getServicesByCategory($categoryId)
    {
        $services = Service::where('service_category', $categoryId)->get();
        return response()->json($services);
    }
}
