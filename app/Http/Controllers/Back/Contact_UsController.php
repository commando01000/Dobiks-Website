<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Contact_Us;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class Contact_UsController extends Controller
{
    public function index(){

       $contact_us= Contact_Us::paginate(10);;
        return view('back.contact_us.index',compact('contact_us'));
    }

    public function store(Request $request)
    {
        Contact_Us::create([
            'full_name'=>$request->full_name,
            'company_name'=>$request->company_name,
            'phone'=>$request->phone,
            'service'=>$request->service
        ]);
        return redirect()->route('contact')->with('success', __('Contact us created successfully.'));

    }
}
