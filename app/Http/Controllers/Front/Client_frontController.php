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

        $categories = ClientCategory::with('clients')->get();

        return view('front.clients-section.clients', compact('categories'));
    }
    public function getClientsByCategory($categoryId)
    {
        $clients = Client::where('client_category', $categoryId)->get();
        dd($clients);
        return response()->json($clients);
    }
}
