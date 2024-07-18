<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\MailTemplates\Models\MailTemplate;
use App\Mail\ConatctMail;
use App\Models\Contact_Us;
use App\Models\MenuSetting;
use App\Models\NotificationsSetting;
use App\Models\User;
use App\Notifications\NewEnquiryDetails;

class Contact_frontController extends Controller
{
    public function index()
    {
        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);
        $footerMainMenus = MenuSetting::where('parent_id', 0)->get();
        return view('front.contact.contactus', compact('lang', 'footerMainMenus'));
    }

    public function store(Request $request)
    {

        $validation = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'comments' => 'required'
        ]);
        Contact_Us::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'subject' => $request->subject,
            'comments' => $request->comments
        ]);
        return redirect()->back()->with('message', "Message sent successfully");
    }
}
