<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\MailTemplates\Models\MailTemplate;
use App\Mail\ConatctMail;
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
    public function join()
    {
        $lang = UtilityFacades::getActiveLanguage();
        \App::setLocale($lang);
        $footerMainMenus = MenuSetting::where('parent_id', 0)->get();
        return view('front.join.joinus', compact('lang', 'footerMainMenus'));
    }



    public function contactMail(Request $request)
    {
        $user = User::where('type', '=', 'Admin')->first();
        $notify = NotificationsSetting::where('title', 'new enquiry details')->first();
        if (UtilityFacades::getsettings('email_setting_enable') == 'on') {
            if (isset($notify)) {
                if ($notify->notify = '1') {
                    $user->notify(new NewEnquiryDetails($request));
                }
            }
        }

        if (UtilityFacades::getsettings('contact_us_recaptcha_status') == '1') {
            $validator = \Validator::make($request->all(), [
                'g-recaptcha-response' => 'required',
            ]);
            if ($validator->fails()) {
                $messages = $validator->errors();
                return redirect()->back()->with('errors', $messages->first());
            }
        }

        if (UtilityFacades::getsettings('email_setting_enable') == 'on' && UtilityFacades::getsettings('contact_email') != '') {
            if (MailTemplate::where('mailable', ConatctMail::class)->first()) {
                try {
                    if ($request) {
                        $details = $request->all();
                        Mail::to(UtilityFacades::getsettings('contact_email'))->send(new ConatctMail($request->all()));
                    } else {
                        return redirect()->back()->with('failed', __('Please check Recaptch.'));
                    }
                } catch (\Exception $e) {
                    return redirect()->back()->with('errors', $e->getMessage());
                }

                return redirect()->back()->with('success', 'Email sent successfully.');
            }
        } else {
            return redirect()->back()->with('status', __('please turn on email enable button'));
        }

        return redirect()->back()->with('success', __('enquiry details send successfully'));
    }
}
