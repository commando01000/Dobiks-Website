<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Leadership;
use Illuminate\Http\Request;

class LeadershipController extends Controller
{

    public function index()
    {
        $leadership = Leadership::paginate(12);
        return view('front.leadership.index', compact('leadership'));
    }
}
