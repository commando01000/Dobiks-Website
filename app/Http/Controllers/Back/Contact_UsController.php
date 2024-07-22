<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Contact_Us;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class Contact_UsController extends Controller
{
    public function index()
    {

        $contact_us = Contact_Us::paginate(10);;
        return view('back.contact_us.index', compact('contact_us'));
    }

    public function show(Contact_Us $contact)
    {
        // dd($contact);
        return view('back.contact_us.view', compact('contact'));
    }

    public function destroy($id)
    {

        $category = Contact_Us::find($id);
        $category->delete();
        return redirect()->route('contact_us.index')->with('success', __('Message deleted successfully.'));
    }
}
