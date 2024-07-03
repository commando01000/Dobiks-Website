<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Facades\UtilityFacades;

use App\Models\settings;


class BusinessGrowthController extends Controller
{
    public function businessGrowthSetting(Request $request)
    {
        $settingData = [
            "business_growth_setting" => UtilityFacades::getsettings('business_growth_setting'),
            "business_growth_view_setting" => UtilityFacades::getsettings('business_growth_view_setting'),
        ];
        $settings = $settingData;
        $businessGrowthSettings = json_decode($settings['business_growth_setting'], true) ?? [];
        $businessGrowthViewSettings = json_decode($settings['business_growth_view_setting'], true);
        return view('back.business-growth.index', compact('businessGrowthSettings', 'businessGrowthViewSettings'));
    }




    public function businessGrowthSettingStore(Request $request)
    {
        if ($request->business_growth_setting_enable == 'on') {
            request()->validate([
                'business_growth_name' => 'required',
                'business_growth_bold_name' => 'required',
                'business_growth_detail' => 'required',
                'business_growth_video' => 'mimes:mp4,avi,wmv,mov,webm',
                'business_growth_front_image' => 'image|mimes:png,jpg,jpeg',
            ]);

            $data = [
                'business_growth_setting_enable' => $request->business_growth_setting_enable == 'on' ? 'on' : 'off',
                'business_growth_name' => $request->business_growth_name,
                'business_growth_bold_name' => $request->business_growth_bold_name,
                'business_growth_detail' => $request->business_growth_detail,
            ];
            if ($request->business_growth_front_image) {
                $imageName = '10.' . $request->business_growth_front_image->extension();
                $request->business_growth_front_image->storeAs('landing-page/businessgrowth/', $imageName);
                $data['business_growth_front_image'] = 'landing-page/businessgrowth/' . $imageName;
            }
            if ($request->business_growth_video) {
                $filename = 'vedio.' . $request->business_growth_video->extension();
                $request->business_growth_video->storeAs('landing-page/businessgrowth/', $filename);
                $data['business_growth_video'] = $request->business_growth_video->storeAs('landing-page/businessgrowth/', $filename);
            }
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Business growth updated successfully.'));
        } else {
            $data = [
                'business_growth_setting_enable' => 'off',
            ];
            $arrEnv = [
                'business_growth_setting_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Business growth disabled.'));
        }
    }
    public function businessGrowthCreate(Request $request)
    {
        return view('back.business-growth.create');
    }

    public function businessGrowthStore(Request $request)
    {
        $settingData = [
            "business_growth_setting" => UtilityFacades::getsettings('business_growth_setting'),
        ];
        $settings = $settingData;
        $data = json_decode($settings['business_growth_setting'], true);

        $datas['business_growth_title'] = $request->business_growth_title;
        $data[] = $datas;
        $data = json_encode($data);
        settings::updateOrCreate(
            ['key' => 'business_growth_setting'],
            ['value' => $data]
        );
        return redirect()->back()->with(['success' => 'Business growth setting created successfully.']);
    }

    public function businessGrowthEdit($key)
    {
        $settingData = [
            "business_growth_setting" => UtilityFacades::getsettings('business_growth_setting'),
        ];
        $settings = $settingData;
        $businessGrowthSettings = json_decode($settings['business_growth_setting'], true);
        $businessGrowthSetting = $businessGrowthSettings[$key];
        return view('back.business-growth.edit', compact('businessGrowthSetting', 'key'));
    }

    public function businessGrowthUpdate(Request $request, $key)
    {
        $settingData = [
            "business_growth_setting" => UtilityFacades::getsettings('business_growth_setting'),
        ];
        $settings = $settingData;
        $data = json_decode($settings['business_growth_setting'], true);

        $data[$key]['business_growth_title'] = $request->business_growth_title;
        $data = json_encode($data);
        settings::updateOrCreate(
            ['key' => 'business_growth_setting'],
            ['value' => $data]
        );
        return redirect()->back()->with(['success' => 'Business growth setting updated successfully.']);
    }

    public function businessGrowthDelete($key)
    {
        $settingData = [
            "business_growth_setting" => UtilityFacades::getsettings('business_growth_setting'),
        ];
        $pages = json_decode($settingData['business_growth_setting'], true);
        unset($pages[$key]);
        settings::updateOrCreate(['key' =>  'business_growth_setting'], ['value' => $pages]);
        return redirect()->back()->with(['success' => 'Business growth setting deleted successfully']);
    }

    public function businessGrowthViewCreate(Request $request)
    {
        return view('back.business-growth.business-growth-view-create');
    }

    public function businessGrowthViewStore(Request $request)
    {
        $settingData = [
            "business_growth_view_setting" => UtilityFacades::getsettings('business_growth_view_setting'),
        ];
        $settings = $settingData;
        $data = json_decode($settings['business_growth_view_setting'], true);

        $datas['business_growth_view_name'] = $request->business_growth_view_name;
        $datas['business_growth_view_amount'] = $request->business_growth_view_amount;
        $data[] = $datas;
        $data = json_encode($data);
        settings::updateOrCreate(
            ['key' => 'business_growth_view_setting'],
            ['value' => $data]
        );
        return redirect()->back()->with(['success' => 'Business growth view setting created successfully.']);
    }

    public function businessGrowthViewEdit($key)
    {
        $setting_data = [
            "business_growth_view_setting" => UtilityFacades::getsettings('business_growth_view_setting'),
        ];
        $settings = $setting_data;
        $businessGrowthViewSettings = json_decode($settings['business_growth_view_setting'], true);
        $businessGrowthViewSetting = $businessGrowthViewSettings[$key];
        return view('back.business-growth.business-growth-view-edit', compact('businessGrowthViewSetting', 'key'));
    }

    public function businessGrowthViewUpdate(Request $request, $key)
    {
        $settingData = [
            "business_growth_view_setting" => UtilityFacades::getsettings('business_growth_view_setting'),
        ];
        $settings = $settingData;
        $data = json_decode($settings['business_growth_view_setting'], true);

        $data[$key]['business_growth_view_name'] = $request->business_growth_view_name;
        $data[$key]['business_growth_view_amount'] = $request->business_growth_view_amount;
        $data = json_encode($data);
        settings::updateOrCreate(
            ['key' => 'business_growth_view_setting'],
            ['value' => $data]
        );
        return redirect()->back()->with(['success' => 'Business growth view setting updated successfully.']);
    }

    public function businessGrowthViewDelete($key)
    {
        $settingData = [
            "business_growth_view_setting" => UtilityFacades::getsettings('business_growth_view_setting'),
        ];
        $pages = json_decode($settingData['business_growth_view_setting'], true);
        unset($pages[$key]);
        settings::updateOrCreate(['key' =>  'business_growth_view_setting'], ['value' => $pages]);
        return redirect()->back()->with(['success' => 'Business growth view setting deleted successfully']);
    }
}
