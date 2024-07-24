<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Leadership;
use Illuminate\Http\Request;

class LeadershipController extends Controller
{

    public function index()
    {
        $leaderships = Leadership::paginate(8);
        return view('front.leaderships.index', compact('leaderships'));
    }
}
