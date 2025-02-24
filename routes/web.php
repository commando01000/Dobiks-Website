<?php

// use App\Http\Controllers\back\advertisementController;
use App\Http\Controllers\Back\BuilderController;
use App\Http\Controllers\Back\BlogCategoryController;
use App\Http\Controllers\Back\BlogController;
use App\Http\Controllers\Back\GalleryCategoryController;
use App\Http\Controllers\Back\GalleryController;
use App\Http\Controllers\Back\JoinUsController;
use App\Http\Controllers\Back\ProjectCategoryController;
use App\Http\Controllers\Back\ProjectController;
use App\Http\Controllers\Back\FaqController;
use App\Http\Controllers\Back\TestimonialController;
use App\Http\Controllers\Back\PagesController;
use App\Http\Controllers\Back\HomeController;
use App\Http\Controllers\Back\MenuController;
use App\Http\Controllers\Front\JoinController;
use App\Http\Controllers\Front\Testimonial_frontController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\Back\RoleController;
use App\Http\Controllers\Back\LanguageController;
use App\Http\Controllers\Back\ProfileController;
use App\Http\Controllers\Back\BusinessGrowthController;
use App\Http\Controllers\back\clientController;
use App\Http\Controllers\Back\FeatureController;
use App\Http\Controllers\Back\SettingsController;
use App\Http\Controllers\Back\ModuleController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\LandingPageController;

use App\Http\Controllers\Front\Home_frontController;
use App\Http\Controllers\Front\Blog_frontController;
use App\Http\Controllers\Front\Project_frontController;
use App\Http\Controllers\Front\Faqs_frontController;
use App\Http\Controllers\Front\Pages_frontController;
use App\Http\Controllers\Front\Contact_frontController as frontContact;
use App\Http\Controllers\Front\Gallery_frontController;






use App\Http\Controllers\LoginSecurityController;
use App\Http\Controllers\NotificationsSettingController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\SmsTemplateController;
use App\Http\Controllers\FormValueController;
// use App\Http\Controllers\front\advertisementController as FrontAdvertisementController;
use App\Http\Controllers\front\ClientsController;
use App\Http\Controllers\MailTempleteController;
use App\Models\advertisement;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
Route::get("/theme" , function(){
    return view("front.gallery.theme");
});

require_once __DIR__ . '/auth.php';

// Route::get('ads-to-projects' , function(){
// $ads = advertisement::all();
// foreach($ads as $ad){
    
//              Project::create([
//                 'title'                 => $ad->title,
//                 'description'           => $ad->description,
//                 'builder'           => "on",
//                 'body'                  => $ad->description,
//                 'client'                =>  $ad->title,
//                 'project_date'          => "21/5/2025",
//                 'project_timeframe'     => "6",
//                 'project_location'      => "location",
//                 'project_category'          => 2,
//                 'project_status'        =>  1 ,
//                 'embed'        =>  $ad->embed ,
//                 'cover'                => $ad->cover,
//                 'created_by'            => \Auth::user()->id,
//             ]);
        
    
// }
// });

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Route::post("/aplication/store" , [frontContact::class , "joinus_store"]);

Route::group(['middleware' =>  ['auth', 'Upload', 'verified', 'xss', 'verified_phone']], function () {
    Route::resource('mailtemplate', MailTempleteController::class);
});

//
Route::get('storage/app/{path}', 'App\Http\Controllers\FileController@show')->where('path', '.*');
 
//builder
Route::group(['prefix' => 'builder','middleware' => ['auth', 'Upload']], function () {
    Route::post('save', [BuilderController::class, 'save'])->name('builder.save')->middleware(['auth']);
    Route::post('upload', [BuilderController::class, 'upload'])->name('builder.upload');
    Route::get('builder/{id}/{db}', [BuilderController::class, 'index'])->name('builder.index');
    Route::post('builder/remove', [BuilderController::class, 'remove'])->name('builder.remove')->middleware(['auth']);
});
//joinUs
Route::group(['middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
    Route::resource('cp/join', JoinUsController::class)->except(['show','store','create']);

});
//blog

Route::group(['middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
    Route::resource('cp/blog', BlogController::class)->except(['show']);
    Route::resource('cp/blog-category', BlogCategoryController::class);
});
//Gallery
Route::group(['middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
    Route::resource('cp/gallery', GalleryController::class)->except(['show']);
    Route::resource('cp/gallery-category', GalleryCategoryController::class);
});
//projects
Route::group(['middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
    Route::resource('cp/projects', ProjectController::class)->except(['show']);
    Route::resource('cp/project-category', ProjectCategoryController::class);
    Route::post('cp/projectcategory-status/{id}', [ProjectCategoryController::class, 'projectCategoryStatus'])->name('projectcategory.status');

});
//ads
// Route::group(['middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
//     Route::resource('cp/advertisement', advertisementController::class)->except(['show']);
//     Route::resource('cp/advertisement', advertisementController::class);
//     // Route::post('cp/projectcategory-status/{id}', [ProjectCategoryController::class, 'projectCategoryStatus'])->name('projectcategory.status');

// });
//clients
Route::group(['middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
    Route::resource('cp/client', clientController::class)->except(['show']);
    Route::resource('cp/client', clientController::class);
    // Route::post('cp/projectcategory-status/{id}', [ProjectCategoryController::class, 'projectCategoryStatus'])->name('projectcategory.status');

});
//faqs
Route::group(['middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
    Route::resource('cp/faqs', FaqController::class);
});
//Testimonial
Route::group(['middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
    Route::resource('cp/testimonial', TestimonialController::class);
    Route::post('cp/testimonial/status/{id}', [TestimonialController::class, 'status'])->name('testimonial.status');
});
//Pages
Route::group(['middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
    Route::resource('cp/pages', PagesController::class)->middleware(['auth', 'Setting', 'Upload']);
});
//Menu
Route::group(['prefix' => 'cp/','middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
    Route::get('menu/', [MenuController::class, 'index'])->name('main.menu');
    Route::get('menu/sort/{id}/{nextid}', [MenuController::class, 'MenuSort'])->name('menu.sort');
    Route::post('menu/store', [MenuController::class, 'MenuStore'])->name('menu.store');
    Route::get('menu/edit/{id}', [MenuController::class, 'MenuEdit'])->name('menu.edit');
    Route::post('menu/update', [MenuController::class, 'MenuUpdate'])->name('menu.update');
    Route::delete('menu/delete/{id}', [MenuController::class, 'MenuDelete'])->name('menu.delete');
});
// permission & roles
Route::group(['middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
    Route::resource('cp/permission', PermissionController::class);
    Route::resource('cp/roles', RoleController::class);
    Route::post('role-permission/{id}', [RoleController::class, 'assignPermission'])->name('roles.permit');
});
// language
Route::group(['prefix' => 'cp/','middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
    Route::get('change-language/{lang}', [LanguageController::class, 'changeLanquage'])->name('change.language');
    Route::get('manage-language/{lang}', [LanguageController::class, 'manageLanguage'])->name('manage.language');
    Route::post('store-language-data/{lang}', [LanguageController::class, 'storeLanguageData'])->name('store.language.data');
    Route::get('create-language', [LanguageController::class, 'createLanguage'])->name('create.language');
    Route::post('store-language', [LanguageController::class, 'storeLanguage'])->name('store.language');
    Route::delete('lang/{lang}', [LanguageController::class, 'destroyLang'])->name('lang.destroy');
});
// Profile
Route::group(['prefix' => 'cp/','middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
    Route::resource('profile', ProfileController::class);
    Route::post('update-avatar', [ProfileController::class, 'updateAvatar'])->name('update.avatar');
    Route::post('update-login-details', [ProfileController::class, 'LoginDetails'])->name('update.login.details');
    Route::get('profile-status', [ProfileController::class, 'profileStatus'])->name('profile.status');
    Route::any('profile/basicinfo/update/', [ProfileController::class, 'BasicInfoUpdate'])->name('profile.update.basicinfo');
});
//Business Growth
Route::group(['prefix' => 'cp/','middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
    Route::get('business-growth', [BusinessGrowthController::class, 'businessGrowthSetting'])->name('business.growth.index');
    Route::post('business-growth/landing/store', [BusinessGrowthController::class, 'businessGrowthSettingStore'])->name('landing.business.growth.store');

    Route::get('business-growth/create', [BusinessGrowthController::class, 'businessGrowthCreate'])->name('business.growth.create');
    Route::post('business-growth/store', [BusinessGrowthController::class, 'businessGrowthStore'])->name('business.growth.store');
    Route::get('business-growth/{key}/edit', [BusinessGrowthController::class, 'businessGrowthEdit'])->name('business.growth.edit');
    Route::post('business-growth/{key}/update', [BusinessGrowthController::class, 'businessGrowthUpdate'])->name('business.growth.update');
    Route::delete('business-growth/{key}/delete', [BusinessGrowthController::class, 'businessGrowthDelete'])->name('business.growth.delete');

    Route::get('business-growth-view/create', [BusinessGrowthController::class, 'businessGrowthViewCreate'])->name('business.growth.view.create');
    Route::post('business-growth-view/store', [BusinessGrowthController::class, 'businessGrowthViewStore'])->name('business.growth.view.store');
    Route::get('business-growth-view/{key}/edit', [BusinessGrowthController::class, 'businessGrowthViewEdit'])->name('business.growth.view.edit');
    Route::post('business-growth-view/{key}/update', [BusinessGrowthController::class, 'businessGrowthViewUpdate'])->name('business.growth.view.update');
    Route::delete('business-growth-view/{key}/delete', [BusinessGrowthController::class, 'businessGrowthViewDelete'])->name('business.growth.view.delete');
});
// Feature
Route::group(['prefix' => 'cp/','middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {
Route::get('feature', [FeatureController::class, 'FeatureSetting'])->name('feature.index');
Route::post('feature/landing/store', [FeatureController::class, 'featureSettingStore'])->name('landing.feature.store');
Route::get('feature/create', [FeatureController::class, 'featureCreate'])->name('feature.create');
Route::post('feature/store', [FeatureController::class, 'featureStore'])->name('feature.store');
Route::get('feature/{key}/edit', [FeatureController::class, 'featureEdit'])->name('feature.edit');
Route::post('feature/{key}/update', [FeatureController::class, 'featureUpdate'])->name('feature.update');
Route::delete('feature/{key}/delete', [FeatureController::class, 'featureDelete'])->name('feature.delete');
});
// backend- side settings
Route::group(['prefix' => 'cp/','middleware' => ['auth', 'xss', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {

Route::post('settings/email-setting/update', [SettingsController::class, 'emailSettingUpdate'])->name('settings.email-setting.update');
Route::post('settings/auth-settings/update', [SettingsController::class, 'authSettingsUpdate'])->name('settings.auth-settings.update');
Route::post('test-mail', [SettingsController::class, 'testSendMail'])->name('test.send.mail');
Route::post('settings/app-name/update', [SettingsController::class, 'appNameUpdate'])->name('settings.app-name.update');
Route::post('settings/google-calender/update', [SettingsController::class, 'googleCalender'])->name('settings.google-calender.update');
Route::post('settings/google-map/update', [SettingsController::class, 'googleMapUpdate'])->name('settings.googlemap.update')->middleware(['auth', 'Setting', 'xss']);
Route::post('settings/pusher-setting/update', [SettingsController::class, 'pusherSettingUpdate'])->name('settings.pusher-setting.update');
Route::post('settings/wasabi-setting/update', [SettingsController::class, 'wasabiSettingUpdate'])->name('settings.wasabi-setting.update');
Route::post('settings/captcha-setting/update', [SettingsController::class, 'captchaSettingUpdate'])->name('settings.captcha-setting.update');
Route::post('settings/cookie-setting/update', [SettingsController::class, 'cookieSettingUpdate'])->name('settings.cookie-setting.update');
Route::post('settings/seo-setting/update', [SettingsController::class, 'seoSettingUpdate'])->name('settings.seo-setting.update');
Route::get('settings', [SettingsController::class, 'index'])->name('settings');
Route::get('test-mail', [SettingsController::class, 'testMail'])->name('test.mail');
Route::post('settings/social-setting/update', [SettingsController::class, 'socialSettingUpdate'])->name('settings/social-setting/update');
Route::any('cookie/consent', [SettingsController::class, 'CookieConsent'])->name('cookie.consent')->middleware(['xss', 'Upload']);


    Route::any('/config-cache', function () {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('optimize:clear');
        return redirect()->back()->with('success', __('Cache clear successfully.'));
    })->name('config.cache')->middleware(['xss']);

});

Route::group(['prefix' => 'cp/','middleware' => ['auth', 'Setting', 'verified', '2fa', 'verified_phone', 'Upload']], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('users', UserController::class)->except(['show']);
    Route::resource('module', ModuleController::class);

    Route::post('change/theme/mode', [HomeController::class, 'changeThememode'])->name('change.theme.mode');
    Route::post('read/notification', [HomeController::class, 'readNotification'])->name('read.notification');

    // user stauts & grid
    Route::post('user/status/{id}', [UserController::class, 'userStatus'])->name('users.status');
    Route::get('users/grid/{id?}', [UserController::class, 'gridView'])->name('grid.view');

    //profile update
    Route::get('users/verified/{id}', [UserController::class, 'userEmailVerified'])->name('user.verified');
    Route::get('users/phoneverified/{id}', [UserController::class, 'userPhoneVerified'])->name('user.phoneverified');

    //sms-templates
    Route::resource('sms-template', SmsTemplateController::class);
    Route::post('notification/status/{id}', [NotificationsSettingController::class, 'changestatus'])->name('notification.status.change');


    //froentend
    Route::group(['prefix' => 'landingpage'], function () {

        Route::get('/', [LandingPageController::class, 'landingPageSetting'])->name('landing-page.setting');
        Route::post('app-setting/store', [LandingPageController::class, 'appSettingStore'])->name('landing.app.store');
        Route::get('landing-page-section-setting', [LandingPageController::class, 'landingPageSection'])->name('menusetting.index');
        Route::post('landing-page-section1/store', [LandingPageController::class, 'landingPageSection1Store'])->name('landing.section1.store');
        Route::post('landing-page-section2/store', [LandingPageController::class, 'landingPageSection2Store'])->name('landing.section2.store');
        Route::post('landing-page-section3/store', [LandingPageController::class, 'landingPageSection3Store'])->name('landing.section3.store');

        Route::get('slider-setting', [LandingPageController::class, 'sliderSetting'])->name('slidersetting.index');
        Route::post('slider-setting-section1/store', [LandingPageController::class, 'SliderSettingSection1Store'])->name('landing.slidersection1.store');
        Route::post('slider-setting-section2/store', [LandingPageController::class, 'SliderSettingSection2Store'])->name('landing.slidersection2.store');
        Route::post('slider-setting-section3/store', [LandingPageController::class, 'SliderSettingSection3Store'])->name('landing.slidersection3.store');





        Route::get('faq-setting', [LandingPageController::class, 'faqSetting'])->name('landing.faq.index');
        Route::post('faq-setting/store', [LandingPageController::class, 'faqSettingStore'])->name('landing.faq.store');

        Route::get('contactus-setting', [LandingPageController::class, 'contactusSetting'])->name('landing.contactus.index');
        Route::get('joinUs-setting', [LandingPageController::class, 'joinUsSetting'])->name('landing.joinUs.index');
        Route::post('contactus-setting/store', [LandingPageController::class, 'contactusSettingStore'])->name('landing.contactus.store');
        Route::post('joinUs-setting/store', [LandingPageController::class, 'joinUsSettingStore'])->name('landing.joinUs.store');

        Route::get('form-setting', [LandingPageController::class, 'formSetting'])->name('landing.form.index');
        Route::post('form-setting/store', [LandingPageController::class, 'formSettingStore'])->name('landing.form.store');

        Route::get('blog-setting', [LandingPageController::class, 'blogSetting'])->name('landing.blog.index');
        Route::post('blog-setting/store', [LandingPageController::class, 'blogSettingStore'])->name('landing.blog.store');

        Route::get('testimonial-setting', [LandingPageController::class, 'testimonialSetting'])->name('landing.testimonial.index');
        Route::post('testimonial-setting/store', [LandingPageController::class, 'testimonialSettingStore'])->name('landing.testimonial.store');

        Route::get('team-setting', [LandingPageController::class, 'teamSetting'])->name('landing.team.index');
        Route::post('team-setting/store', [LandingPageController::class, 'teamSettingStore'])->name('landing.team.store');

        Route::get('project-setting', [LandingPageController::class, 'projectSetting'])->name('landing.project.index');
        Route::post('project-setting/store', [LandingPageController::class, 'projectSettingStore'])->name('landing.project.store');

        Route::get('footer-setting', [LandingPageController::class, 'footerSetting'])->name('landing.footer.index');
        Route::post('footer-setting/store', [LandingPageController::class, 'footerSettingStore'])->name('landing.footer.store');

        Route::get('login-setting', [LandingPageController::class, 'loginSetting'])->name('landing.login.index');
        Route::post('login-setting/store', [LandingPageController::class, 'loginSettingStore'])->name('landing.login.store');

        Route::get('captcha-setting', [LandingPageController::class, 'captchaSetting'])->name('landing.captcha.index');
        Route::post('captcha/store', [LandingPageController::class, 'captchaSettingStore'])->name('landing.captcha.store');

        Route::get('page-background-setting', [LandingPageController::class, 'pageBackground'])->name('landing.page.background.index');
        Route::post('page-background-setting/store', [LandingPageController::class, 'pageBackgroundstore'])->name('landing.page.background.store');
    });
});

Route::group(['middleware' => ['Upload']], function () {
  Route::post('form-duplicate', [FormController::class, 'duplicate'])->name('forms.duplicate')->middleware(['auth', 'Setting', 'xss']);
    Route::post('ckeditors/upload', [FormController::class, 'ckupload'])->name('ckeditors.upload')->middleware(['auth']);
    Route::post('dropzone/upload/{id}', [FormController::class, 'dropzone'])->name('dropzone.upload')->middleware(['Setting']);
    Route::post('ckeditor/upload', [FormController::class, 'upload'])->name('ckeditor.upload')->middleware(['auth']);
    Route::get('form-values/{id}/download/pdf', [FormValueController::class, 'downloadPdf'])->name('download.form.values.pdf')->middleware(['auth', 'Setting', 'xss']);
    Route::post('files/video/store', [FormValueController::class, 'VideoStore'])->name('videostore')->middleware(['xss']);
    Route::get('download-image/{id}', [FormValueController::class, 'SelfieDownload'])->name('selfie.image.download')->middleware(['xss']);
    Route::post('mass/export/xlsx', [FormValueController::class, 'exportXlsx'])->name('mass.export.xlsx')->middleware(['auth', 'Setting', 'xss']);
    Route::post('mass/export/csv', [FormValueController::class, 'export'])->name('mass.export.csv')->middleware(['auth', 'Setting', 'xss']);
});

// impersonate
Route::impersonate();
Route::get('users/{id}/impersonate', [UserController::class, 'impersonate'])->name('users.impersonate');
Route::get('impersonate/leave', [UserController::class, 'leaveImpersonate'])->name('impersonate.leave');
Route::get('changeLang/{lang?}', [HomeController::class, 'changeLang'])->name('change.lang');

Route::post('/2fa', function () {
    return redirect(URL()->previous());
})->name('2fa')->middleware('2fa');

Route::group(['prefix' => '2fa'], function () {
    Route::get('/', [LoginSecurityController::class, 'show2faForm']);
    Route::delete('/generateSecret', [LoginSecurityController::class, 'generate2faSecret'])->name('generate2faSecret');
    Route::post('/enable2fa', [LoginSecurityController::class, 'enable2fa'])->name('enable2fa');
    Route::post('/disable2fa', [LoginSecurityController::class, 'disable2fa'])->name('disable2fa');
});

Route::group(['middleware' => ['Setting', 'xss', 'Upload']], function () {
    Route::get('blog', [Blog_frontController::class, 'index'])->name('see.all.blogs');
    Route::get('blog/{slug}', [Blog_frontController::class, 'view'])->name('view.blog');
    Route::get('faqs', [\App\Http\Controllers\Front\FaqController::class, 'index'])->name('faqs');
    Route::get('testimonials ', [Testimonial_frontController::class, 'index'])->name('testimonials ');
    Route::get('gallery', [Gallery_frontController::class, 'index'])->name('gallery');
    Route::get('gallery/{id}', [Gallery_frontController::class, 'view'])->name('view.gallery');
    Route::get('contact', [frontContact::class, 'index'])->name('contact');
    Route::get('join', [frontContact::class, 'join'])->name('join');
    Route::post('join/store', [JoinController::class, 'store'])->name('join.store');

    Route::get('pages/{slug}', [Pages_frontController::class, 'index']);
    Route::get('projects/{slug}/', [Project_frontController::class, 'viewProject'])->name('view.project');
    Route::get('projects', [Project_frontController::class, 'seeAllProjects'])->name('see.all.projects');
    // Route::get('advertisements/{slug}/', [FrontAdvertisementController::class, 'viewAdvertisments'])->name('view.advertisment');
    // Route::get('advertisements', [FrontAdvertisementController::class, 'seeAllAdvertisements'])->name('see.all.advertisments');
    // Route::get('clients', [clientsController::class, 'seeAllClients'])->name('see.all.clients');
    // Route::get('clients/{slug}/', [ClientsController::class, 'viewClients'])->name('view.client');

    Route::post('contact/mail', [frontContact::class, 'contactMail'])->name('contact.mail');
});

Route::get('/{lang?}', [Home_frontController::class, 'index'])->name('homepage');
