<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientCategory;
use Illuminate\Http\Request;

class Client_frontController extends Controller
{
    public function seeAllClients(Request $request)
    {

        $clientCategory = ClientCategory::with('clients')->get();

        return view('front.our-clients.index', compact('clientCategory'));
    }
    public function getClientsByCategory($categoryId)
    {
        $client = Client::where('client_category', $categoryId)->get();
        return response()->json($client);
    }
}
