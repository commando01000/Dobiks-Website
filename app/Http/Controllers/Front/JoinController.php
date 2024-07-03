<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Join;
use Illuminate\Http\Request;

class JoinController extends Controller
{
   public function store(Request $request){

       if ($request->hasFile('cv')) {
           request()->validate([
               'cv' => 'mimes:jpg,jpeg,png,pdf',
           ]);
           $path = $request->file('cv')->store('CVs');

       }

           Join::create([
               'name'   => $request->full_name,
               'email' => $request->email,
               'address'=>$request->address,
               'phone'=>$request->phone,
               'cv'=> $path,
               'job_title'=>$request->job_title,
           ]);
           return redirect()->route('join')->with('success', __('CV send successfully.'));
       }

}
