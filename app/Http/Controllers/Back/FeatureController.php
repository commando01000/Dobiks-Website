<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Facades\UtilityFacades;
use App\Models\settings;

class FeatureController extends Controller
{


    public function FeatureSetting(Request $request)
    {
        $settingData = [
            "feature_setting" => UtilityFacades::getsettings('feature_setting'),
        ];
        $settings = $settingData;
        $featureSettings = json_decode($settings['feature_setting'], true) ?? [];
        return view('back.feature.index', compact('featureSettings'));
    }

    public function featureSettingStore(Request $request)
    {
        if ($request->feature_setting_enable == 'on') {
            request()->validate([
                'feature_name' => 'required|max:50',
                'feature_bold_name' => 'required|max:50',
                'feature_detail' => 'required',
            ]);

            $data = [
                'feature_setting_enable' => $request->feature_setting_enable == 'on' ? 'on' : 'off',
                'feature_name' => $request->feature_name,
                'feature_bold_name' => $request->feature_bold_name,
                'feature_detail' => $request->feature_detail,
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Feature setting updated successfully.'));
        } else {
            $data = [
                'feature_setting_enable' => 'off',
            ];
            $arrEnv = [
                'feature_setting_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Feature setting disabled.'));
        }
    }

    public function featureCreate(Request $request)
    {
        return view('back.feature.create');
    }

    public function featureStore(Request $request)
    {

        request()->validate([
            'feature_name'      => 'required|max:50|regex:/(^[A-Za-z ]+$)+/|string',
            'feature_bold_name' => 'required|max:50|regex:/(^[A-Za-z ]+$)+/|string',
            'feature_detail'   => 'required',
            'feature_image'     => 'required|mimes:svg',

        ]);
        $settingData = [
            "feature_setting" => UtilityFacades::getsettings('feature_setting'),
        ];
        $settings = $settingData;
        $data = json_decode($settings['feature_setting'], true);
        if ($request->feature_image) {
            $allowedfileExtension = ['svg'];
            $featureImage = time() . "-feature_image." . $request->feature_image->getClientOriginalExtension();
            $extension =  $request->feature_image->extension();
            $check = in_array($extension, $allowedfileExtension);
            if ($check) {
                $image_name = $featureImage;
                $request->feature_image->storeAs('landing-page/feature', $image_name);
                $datas['feature_image'] = 'landing-page/feature/' . $image_name;
            } else {
                return redirect()->back()->with('failed', __('File Type Not Valid. Please Upload Svg File'));
            }
        }
        $datas['feature_name'] = $request->feature_name;
        $datas['feature_bold_name'] = $request->feature_bold_name;
        $datas['feature_detail'] = $request->feature_detail;
        $data[] = $datas;
        $data = json_encode($data);
        settings::updateOrCreate(
            ['key' => 'feature_setting'],
            ['value' => $data]
        );
        return redirect()->back()->with(['success' => 'Feature setting created successfully.']);
    }

    public function featureEdit($key)
    {
        $settingData = [
            "feature_setting" => UtilityFacades::getsettings('feature_setting'),
        ];
        $settings = $settingData;
        $features = json_decode($settings['feature_setting'], true);
        $feature = $features[$key];
        return view('back.feature.edit', compact('feature', 'key'));
    }

    public function featureUpdate(Request $request, $key)
    {


        request()->validate([
            'feature_name'      => 'required|max:50|regex:/(^[A-Za-z ]+$)+/|string',
            'feature_bold_name' => 'required|max:50|regex:/(^[A-Za-z ]+$)+/|string',
            'feature_detail'   => 'required',
            'feature_image'     => 'required|mimes:svg',

        ]);

        $settingData = [
            "feature_setting" => UtilityFacades::getsettings('feature_setting'),
        ];
        $settings = $settingData;
        $data = json_decode($settings['feature_setting'], true);
        if ($request->feature_image) {
            $allowedfileExtension = ['svg'];
            $featureImage = time() . "-feature_image." . $request->feature_image->getClientOriginalExtension();
            $extension =  $request->feature_image->extension();
            $check = in_array($extension, $allowedfileExtension);
            if ($check) {
                $image_name = $featureImage;
                $request->feature_image->storeAs('landing-page/feature', $image_name);
                $data[$key]['feature_image'] = 'landing-page/feature/' . $image_name;
            } else {
                return redirect()->back()->with('failed', __('File type not valid.'));
            }
        }
        $data[$key]['feature_name'] = $request->feature_name;
        $data[$key]['feature_bold_name'] = $request->feature_bold_name;
        $data[$key]['feature_detail'] = $request->feature_detail;
        $data = json_encode($data);
        settings::updateOrCreate(
            ['key' => 'feature_setting'],
            ['value' => $data]
        );
        return redirect()->back()->with(['success' => 'Feature setting updated successfully.']);
    }

    public function featureDelete($key)
    {
        $settingData = [
            "feature_setting" => UtilityFacades::getsettings('feature_setting'),
        ];
        $pages = json_decode($settingData['feature_setting'], true);
        unset($pages[$key]);
        settings::updateOrCreate(['key' =>  'feature_setting'], ['value' => $pages]);
        return redirect()->back()->with(['success' => 'Feature setting deleted successfully']);
    }
}
