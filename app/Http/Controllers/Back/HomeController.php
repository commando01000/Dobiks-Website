<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Project;
use App\Models\Faq;
use App\Models\MenuSetting;
use App\Models\Form;
use App\Models\FormValue;
use App\Models\Leadership;
use App\Models\Poll;
use App\Models\ProjectCategory;
use App\Models\Role;
use App\Models\Testimonial;
use App\Models\User;
use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth', '2fa']);
    }

    public function changeLang($lang = '')
    {
        if ($lang == '') {
            $lang = UtilityFacades::getActiveLanguage();
        }
        Cookie::queue('lang', $lang, 120);
        return redirect()->back()->with('success', __('Language successfully changed.'));
    }
    public function index()
    {
        $this->middleware(['auth', '2fa']);
        $usr = \Auth::user();
        $userId = $usr->id;
        $roles = Role::where('name', $usr->type)->first();
        $roleId = $usr->roles->first()->id;
        $user = User::count();

        return view('back.dashboard.index', compact('user'));
    }
    public function changeThememode(Request $request)
    {
        $user = \Auth::user();
        if ($user->dark_layout == 1) {
            $user->dark_layout = 0;
        } else {
            $user->dark_layout = 1;
        }
        $user->save();
        return response()->json(['mode' => $user->dark_layout]);
    }
    public function storeDashboard(Request $request)
    {
        if (\Auth::user()->can('create-dashboardwidget') && Auth::user()->type == 'Admin') {
            $validator = \Validator::make($request->all(), [
                'title'      => 'required|max:191',
                'size'       => 'required',
                'type'       => 'required',
                'chart_type' => 'required',
            ]);
            if ($validator->fails()) {
                $messages = $validator->errors();
                return redirect()->back()->with('errors', $messages->first());
            }
            if ($request->type == 'form') {
                $wid                   = DashboardWidget::orderBy('id', 'DESC')->first();
                $widget                = new DashboardWidget();
                $widget->title         = $request->title;
                $widget->size          = $request->size;
                $widget->type          = $request->type;
                $widget->form_id       = $request->form_title;
                $widget->field_name    = $request->field_name;
                $widget->chart_type    = $request->chart_type;
                $widget->created_by    = Auth::user()->id;
                $widget->position      = (!empty($wid) ? ($wid->position + 1) : 0);
                $widget->save();
            } else {
                $wid                   = DashboardWidget::orderBy('id', 'DESC')->first();
                $widget                = new DashboardWidget();
                $widget->title         = $request->title;
                $widget->size          = $request->size;
                $widget->type          = $request->type;
                $widget->poll_id       = $request->poll_title;
                $widget->chart_type    = $request->chart_type;
                $widget->created_by    = Auth::user()->id;
                $widget->position      = (!empty($wid) ? ($wid->position + 1) : 0);
                $widget->save();
            }
            return redirect()->route('index.dashboard')
                ->with('success', __('Dashboard created successfully.'));
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function updatePosition(Request $request)
    {
        if (\Auth::user()->can('manage-dashboardwidget')) {
            $widgets = $request->all();
            foreach ($widgets['position'] as $key => $item) {
                $dash = DashboardWidget::where('id', '=', $item)->first();
                $dash->position = $key;
                $dash->save();
            }
        } else {
            return redirect()->back()->with('failed', __('Permission denied.'));
        }
    }
    public function readNotification()
    {
        auth()->user()->notifications->markAsRead();
        return response()->json(['is_success' => true], 200);
    }
}
