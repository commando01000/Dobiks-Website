<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\settings;

class LandingPageController extends Controller
{
    private function updateSettings($input)
    {
        foreach ($input as $key => $value) {
            settings::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
    public function landingPageSetting(Request $request)
    {
        if (\Auth::user()->can('manage-landing-page')) {
            return view('back.landing-page.app-setting');
        } else {
            return redirect()->back()->with('failed', __('Permission denied'));
        }
    }
    public function appSettingStore(Request $request)
    {
        if ($request->apps_setting_enable == 'on') {
            request()->validate([
                'apps_name' => 'required|max:250',
                'apps_bold_name' => 'required|max:250',
                'app_detail' => 'required',
                'who_we_are_link' => 'required',
                'apps_image' => 'image|mimes:png,jpg,jpeg',
            ]);

            if ($request->apps_multiple_image != '') {
                $data = [];
                if ($request->hasFile('apps_multiple_image')) {
                    $images = $request->file('apps_multiple_image');
                    foreach ($images as $image) {
                        $imageName = time() . '_' . $image->getClientOriginalName();
                        $image->storeAs('landing-page/app/', $imageName);
                        $data[] = ['apps_multiple_image' => 'landing-page/app/' . $imageName];
                    }
                }
                $data = json_encode($data);
                settings::updateOrCreate(
                    ['key' => 'apps_multiple_image_setting'],
                    ['value' => $data]
                );
            }
            $data = [
                'apps_setting_enable' => $request->apps_setting_enable == 'on' ? 'on' : 'off',
                'apps_name' => $request->apps_name,
                'who_we_are_link' => $request->who_we_are_link,
                'apps_bold_name' => $request->apps_bold_name,
                'app_detail' => $request->app_detail,
            ];
            if ($request->apps_image) {
                $imageName = 'app.' . $request->apps_image->extension();
                $request->apps_image->storeAs('landing-page/app/', $imageName);
                $data['apps_image'] = 'landing-page/app/' . $imageName;
            }
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('App setting updated successfully.'));
        } else {
            $data = [
                'apps_setting_enable' => 'off',
            ];
            $arrEnv = [
                'apps_setting_enable' => 'off',
            ];

            $this->updateSettings($data);
            return redirect()->back()->with('success', __('App setting disabled.'));
        }
    }
    public function landingPageSection(Request $request)
    {
        return view('back.landing-page.landing-page-section');
    }
    public function landingPageSection1Store(Request $request)
    {
        if ($request->menu_setting_section1_enable == 'on') {
            request()->validate([
                'menu_name_section1' => 'required|max:100',
                'menu_bold_name_section1' => 'required|max:100',
                'menu_detail_section1' => 'required',
                'menu_image_section1' => 'image|mimes:png,jpg,jpeg',
            ]);

            $data = [
                'menu_setting_section1_enable' => $request->menu_setting_section1_enable == 'on' ? 'on' : 'off',
                'menu_name_section1' => $request->menu_name_section1,
                'menu_bold_name_section1' => $request->menu_bold_name_section1,
                'menu_detail_section1' => $request->menu_detail_section1,
                'menu_button_title_section1' => $request->menu_button_title_section1,
                'menu_button_url_section1' => $request->menu_button_url_section1,
            ];
            if ($request->menu_image_section1) {
                $imageName = 'menusection1.' . $request->menu_image_section1->extension();
                $request->menu_image_section1->storeAs('landing-page/menu/', $imageName);
                $data['menu_image_section1'] = 'landing-page/menu/' . $imageName;
            }
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Menu setting updated successfully.'));
        } else {
            $data = [
                'menu_setting_section1_enable' => 'off',
            ];
            $arrEnv = [
                'menu_setting_section1_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('App setting disabled.'));
        }
    }
    public function landingPageSection2Store(Request $request)
    {
        if ($request->menu_setting_section2_enable == 'on') {
            request()->validate([
                'menu_name_section2' => 'required|max:100',
                'menu_bold_name_section2' => 'required|max:100',
                'menu_detail_section2' => 'required',
                'menu_image_section2' => 'image|mimes:png,jpg,jpeg',
            ]);

            $data = [
                'menu_setting_section2_enable' => $request->menu_setting_section2_enable == 'on' ? 'on' : 'off',
                'menu_name_section2' => $request->menu_name_section2,
                'menu_bold_name_section2' => $request->menu_bold_name_section2,
                'menu_detail_section2' => $request->menu_detail_section2,
                'menu_button_title_section2' => $request->menu_button_title_section2,
                'menu_button_url_section2' => $request->menu_button_url_section2,
            ];
            if ($request->menu_image_section2) {
                $imageName = 'menusection12.' . $request->menu_image_section2->extension();
                $request->menu_image_section2->storeAs('landing-page/menu/', $imageName);
                $data['menu_image_section2'] = 'landing-page/menu/' . $imageName;
            }
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Menu setting updated successfully.'));
        } else {
            $data = [
                'menu_setting_section2_enable' => 'off',
            ];
            $arrEnv = [
                'menu_setting_section2_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('App setting disabled.'));
        }
    }
    public function landingPageSection3Store(Request $request)
    {
        if ($request->menu_setting_section3_enable == 'on') {
            request()->validate([
                'menu_name_section3' => 'required|max:100',
                'menu_bold_name_section3' => 'required|max:100',
                'menu_detail_section3' => 'required',
                'menu_image_section3' => 'image|mimes:png,jpg,jpeg',
            ]);
            $data = [
                'menu_setting_section3_enable' => $request->menu_setting_section3_enable == 'on' ? 'on' : 'off',
                'menu_name_section3' => $request->menu_name_section3,
                'menu_bold_name_section3' => $request->menu_bold_name_section3,
                'menu_detail_section3' => $request->menu_detail_section3,
                'menu_button_title_section3' => $request->menu_button_title_section3,
                'menu_button_url_section3' => $request->menu_button_url_section3,
            ];
            if ($request->menu_image_section3) {
                $imageName = 'menusection13.' . $request->menu_image_section3->extension();
                $request->menu_image_section3->storeAs('landing-page/menu/', $imageName);
                $data['menu_image_section3'] = 'landing-page/menu/' . $imageName;
            }
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Menu setting updated successfully.'));
        } else {
            $data = [
                'menu_setting_section3_enable' => 'off',
            ];
            $arrEnv = [
                'menu_setting_section3_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('App setting disabled.'));
        }
    }
    public function sliderSetting(Request $request)
    {
        return view('back.landing-page.slider-setting');
    }
    public function SliderSettingSection1Store(Request $request)
    {
        if ($request->slider_setting_section1_enable == 'on') {
            request()->validate([
                'slider_name_section1' => 'required|max:100',
                'slider_bold_name_section1' => 'required|max:100',
                'slider_detail_section1' => 'required',
                'slider_image_section1' => 'image|mimes:png,jpg,jpeg',
            ]);

            $data = [
                'slider_setting_section1_enable' => $request->slider_setting_section1_enable == 'on' ? 'on' : 'off',
                'slider_name_section1' => $request->slider_name_section1,
                'slider_bold_name_section1' => $request->slider_bold_name_section1,
                'slider_detail_section1' => $request->slider_detail_section1,
                'slider_button_title_section1' => $request->slider_button_title_section1,
                'slider_button_url_section1' => $request->slider_button_url_section1,
            ];
            if ($request->slider_image_section1) {
                $imageName = 'slidersection1.' . $request->slider_image_section1->extension();
                $request->slider_image_section1->storeAs('landing-page/slider/', $imageName);
                $data['slider_image_section1'] = 'landing-page/slider/' . $imageName;
            }
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Slider setting updated successfully.'));
        } else {
            $data = [
                'slider_setting_section1_enable' => 'off',
            ];
            $arrEnv = [
                'slider_setting_section1_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('App setting disabled.'));
        }
    }
    public function SliderSettingSection2Store(Request $request)
    {
        if ($request->slider_setting_section2_enable == 'on') {
            request()->validate([
                'slider_name_section2' => 'required|max:100',
                'slider_bold_name_section2' => 'required|max:100',
                'slider_detail_section2' => 'required',
                'slider_image_section2' => 'image|mimes:png,jpg,jpeg',
            ]);

            $data = [
                'slider_setting_section2_enable' => $request->slider_setting_section2_enable == 'on' ? 'on' : 'off',
                'slider_name_section2' => $request->slider_name_section2,
                'slider_bold_name_section2' => $request->slider_bold_name_section2,
                'slider_detail_section2' => $request->slider_detail_section2,
                'slider_button_title_section2' => $request->slider_button_title_section2,
                'slider_button_url_section2' => $request->slider_button_url_section2,
            ];
            if ($request->slider_image_section2) {
                $imageName = 'slidersection12.' . $request->slider_image_section2->extension();
                $request->slider_image_section2->storeAs('landing-page/slider/', $imageName);
                $data['slider_image_section2'] = 'landing-page/slider/' . $imageName;
            }
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Slider setting updated successfully.'));
        } else {
            $data = [
                'slider_setting_section2_enable' => 'off',
            ];
            $arrEnv = [
                'slider_setting_section2_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('App setting disabled.'));
        }
    }
    public function SliderSettingSection3Store(Request $request)
    {
        if ($request->slider_setting_section3_enable == 'on') {
            request()->validate([
                'slider_name_section3' => 'required|max:100',
                'slider_bold_name_section3' => 'required|max:100',
                'slider_detail_section3' => 'required',
                'slider_image_section3' => 'image|mimes:png,jpg,jpeg',
            ]);
            $data = [
                'slider_setting_section3_enable' => $request->slider_setting_section3_enable == 'on' ? 'on' : 'off',
                'slider_name_section3' => $request->slider_name_section3,
                'slider_bold_name_section3' => $request->slider_bold_name_section3,
                'slider_detail_section3' => $request->slider_detail_section3,
                'slider_button_title_section3' => $request->slider_button_title_section3,
                'slider_button_url_section3' => $request->slider_button_url_section3,
            ];
            if ($request->slider_image_section3) {
                $imageName = 'slidersection13.' . $request->slider_image_section3->extension();
                $request->slider_image_section3->storeAs('landing-page/slider/', $imageName);
                $data['slider_image_section3'] = 'landing-page/slider/' . $imageName;
            }
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Slider setting updated successfully.'));
        } else {
            $data = [
                'slider_setting_section3_enable' => 'off',
            ];
            $arrEnv = [
                'slider_setting_section3_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('App setting disabled.'));
        }
    }
    public function faqSetting(Request $request)
    {
        return view('back.landing-page.faq-setting');
    }
    public function faqSettingStore(Request $request)
    {
        if ($request->faq_setting_enable == 'on') {
            request()->validate([
                'faq_name' => 'required|max:100',
            ]);

            $data = [
                'faq_setting_enable' => $request->faq_setting_enable == 'on' ? 'on' : 'off',
                'faq_name' => $request->faq_name,
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Faq setting updated successfully.'));
        } else {
            $data = [
                'faq_setting_enable' => 'off',
            ];
            $arrEnv = [
                'faq_setting_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Faq setting disabled.'));
        }
    }
    public function contactusSetting(Request $request)
    {
        return view('back.landing-page.contactus-setting');
    }
    public function joinUsSetting(Request $request)
    {
        return view('back.landing-page.joinUs-setting');
    }
    public function contactusSettingStore(Request $request)
    {
        if ($request->contactus_setting_enable == 'on') {
            request()->validate([
                'contact_email' => 'email'
            ]);

            $data = [
                'contactus_setting_enable' => $request->contactus_setting_enable == 'on' ? 'on' : 'off',
                'contact_email' => $request->contact_email,
                'contact_text' => $request->contact_text,
                'contact_address' => $request->contact_address,
                'contact_address2' => $request->contact_address2,
                'contact_addrees4' => $request->contact_addrees4,
                'contact_addrees3' => $request->contact_addrees3,
                'contact_phone1' => $request->contact_phone1,
                'contact_phone2' => $request->contact_phone2,
                'contact_city1' => $request->contact_city1,
                'contact_city2' => $request->contact_city2,
                'contact_facebook' => $request->contact_facebook,
                'snapchat' => $request->snapchat,
                'contact_twitter' => $request->contact_twitter,
                'contact_instagram' => $request->contact_instagram,
                'contact_youtube' => $request->contact_youtube,
                'contact_linkedin' => $request->contact_linkedin,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Contactus setting updated successfully.'));
        } else {
            $data = [
                'contactus_setting_enable' => 'off',
            ];
            $arrEnv = [
                'contactus_setting_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Contactus setting disabled.'));
        }
    }
    public function joinUsSettingStore(Request $request)
    {


        if ($request->joinus_setting_enable == 'on') {
            request()->validate([
                'joinus_text' => 'required'
            ]);

            $data = [
                'joinus_setting_enable' => $request->joinus_setting_enable == 'on' ? 'on' : 'off',
                'joinus_text' => $request->joinus_text,
                'joinus_feature1' => $request->joinus_feature1,
                'joinus_feature2' => $request->joinus_feature2,
                'joinus_feature3' => $request->joinus_feature3,
                'joinus_feature4' => $request->joinus_feature4,
                'joinus_feature5' => $request->joinus_feature5,
                'joinus_feature6' => $request->joinus_feature6,
                'joinus_feature7' => $request->joinus_feature7,
                'joinus_feature8' => $request->joinus_feature8,
            ];
            // return $data;
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('joinus setting updated successfully.'));
        } else {
            $data = [
                'joinus_setting_enable' => 'off',
            ];
            $arrEnv = [
                'joinus_setting_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('joinus setting disabled.'));
        }
    }
    public function blogsetting(Request $request)
    {
        return view('back.landing-page.blog-setting');
    }
    public function blogSettingStore(Request $request)
    {
        if ($request->blog_setting_enable == 'on') {
            request()->validate([
                'blog_name' => 'required'
            ]);

            $data = [
                'blog_setting_enable' => $request->blog_setting_enable == 'on' ? 'on' : 'off',
                'blog_name' => $request->blog_name,
                'blog_detail' => $request->blog_detail,
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('blog setting updated successfully.'));
        } else {
            $data = [
                'blog_setting_enable' => 'off',
            ];
            $arrEnv = [
                'blog_setting_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('failed', __('blog setting disabled.'));
        }
    }
    public function teamsetting(Request $request)
    {
        return view('back.landing-page.team-setting');
    }
    public function teamSettingStore(Request $request)
    {
        if ($request->team_setting_enable == 'on') {
            request()->validate([
                'team_name' => 'required',
            ]);

            $data = [
                'team_setting_enable' => $request->team_setting_enable == 'on' ? 'on' : 'off',
                'team_name' => $request->team_name,
                'team_detail' => $request->team_detail,
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('team setting updated successfully.'));
        } else {
            $data = [
                'team_setting_enable' => 'off',
            ];
            $arrEnv = [
                'team_setting_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('failed', __('team setting disabled.'));
        }
    }
    public function projectsetting(Request $request)
    {
        return view('back.landing-page.project-setting');
    }
    public function projectSettingStore(Request $request)
    {
        if ($request->project_setting_enable == 'on') {
            request()->validate([
                'project_name' => 'required',
                'project_detail' => 'required',
            ]);

            $data = [
                'project_setting_enable' => $request->project_setting_enable == 'on' ? 'on' : 'off',
                'project_name' => $request->project_name,
                'project_detail' => $request->project_detail,
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('project setting updated successfully.'));
        } else {
            $data = [
                'project_setting_enable' => 'off',
            ];
            $arrEnv = [
                'project_setting_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('failed', __('project setting disabled.'));
        }
    }
    public function footerSetting(Request $request)
    {
        return view('back.landing-page.footer-setting');
    }

    public function footerSettingStore(Request $request)
    {
        if ($request->footer_setting_enable == 'on') {
            request()->validate([
                'footer_description' => 'required',
            ]);

            $data = [
                'footer_setting_enable' => $request->footer_setting_enable == 'on' ? 'on' : 'off',
                'footer_description' => $request->footer_description,
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Footer setting updated successfully.'));
        } else {
            $data = [
                'footer_setting_enable' => 'off',
            ];
            $arrEnv = [
                'footer_setting_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('Footer setting disabled.'));
        }
    }

    public function privacySetting(Request $request)
    {
        return view('back.landing-page.privacy-setting');
    }

    public function privacySettingStore(Request $request)
    {
        if ($request->privacy_setting_enable == 'on') {
            request()->validate([
                'privacy_description' => 'required',
            ]);

            $data = [
                'privacy_setting_enable' => $request->privacy_setting_enable == 'on' ? 'on' : 'off',
                'privacy_description' => $request->privacy_description,
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('privacy setting updated successfully.'));
        } else {
            $data = [
                'privacy_setting_enable' => 'off',
            ];
            $arrEnv = [
                'privacy_setting_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('privacy setting disabled.'));
        }
    }

    public function testimonialsetting(Request $request)
    {
        return view('back.landing-page.testimonial-setting');
    }
    public function testimonialSettingStore(Request $request)
    {
        if ($request->testimonial_setting_enable == 'on') {
            request()->validate([
                'testimonial_name' => 'required',
            ]);

            $data = [
                'testimonial_setting_enable' => $request->testimonial_setting_enable == 'on' ? 'on' : 'off',
                'testimonial_name' => $request->testimonial_name,
                'testimonial_detail' => $request->testimonial_detail,
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('success', __('blog setting updated successfully.'));
        } else {
            $data = [
                'testimonial_setting_enable' => 'off',
            ];
            $arrEnv = [
                'testimonial_setting_enable' => 'off',
            ];
            $this->updateSettings($data);
            return redirect()->back()->with('failed', __('testimonial setting disabled.'));
        }
    }


    public function loginSetting()
    {
        return view('back.landing-page.login-page-setting');
    }
    public function loginSettingStore(Request $request)
    {
        request()->validate([
            'login_title' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/|max:191',
            'login_subtitle' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/|max:191',
            'login_image' => 'image|mimes:svg',
        ]);

        $data = [
            'login_title' => $request->login_title,
            'login_subtitle' => $request->login_subtitle,
        ];
        if ($request->login_image) {
            $loginImageName = 'login-page.' . $request->login_image->extension();
            $request->login_image->storeAs('landing-page', $loginImageName);
            $data['login_image'] = 'landing-page/' . $loginImageName;
        }
        $this->updateSettings($data);
        return redirect()->back()->with('success', __('Login page setting updated successfully.'));
    }
    public function captchaSetting()
    {
        return view('back.landing-page.captcha-setting');
    }
    public function captchaSettingStore(Request $request)
    {
        if ($request->contact_us_recaptcha_status == 'on' || $request->login_recaptcha_status == 'on') {
            request()->validate([
                'recaptcha_key' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/',
                'recaptcha_secret' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/',
            ]);
        }
        $data = [
            'contact_us_recaptcha_status' => ($request->contact_us_recaptcha_status == 'on') ? '1' : '0',
            'login_recaptcha_status' => ($request->login_recaptcha_status == 'on') ? '1' : '0',
            'recaptcha_key' => $request->recaptcha_key,
            'recaptcha_secret' => $request->recaptcha_secret,
        ];
        $this->updateSettings($data);
        return redirect()->back()->with('success', __('Recaptcha setting updated successfully.'));
    }
    public function pageBackground(Request $request)
    {
        return view('back.landing-page.background-image');
    }
    public function pageBackgroundstore(Request $request)
    {
        request()->validate([
            'background_image' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        if ($request->background_image) {
            $imageName = 'background.' . $request->background_image->extension();
            $request->background_image->storeAs('landing-page/', $imageName);
            $data['background_image'] = 'landing-page/' . $imageName;
        }
        $this->updateSettings($data);
        return redirect()->back()->with('success', __('Background setting updated successfully.'));
    }
}
