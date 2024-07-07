<?php
    $users = \Auth::user();
    $currantLang = app()->getLocale();
    $languages = Utility::languages();

?>
<header
    class="<?php if($currantLang == 'ar'): ?> header-right <?php endif; ?> dash-header <?php echo e($user->transprent_layout == 1 ? 'transprent-bg' : ''); ?>">
    <div class="header-wrapper">
        <div class="me-auto dash-mob-drp">
            <ul class="list-unstyled">
                <li class="dash-h-item mob-hamburger">
                    <a href="#!" class="dash-head-link" id="mobile-collapse">
                        <div class="hamburger hamburger--arrowturn">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
        <div class="ms-auto">
            <ul class="list-unstyled">
                <?php if (is_impersonating($guard = null)) : ?>
                    <li class="dropdown dash-h-item drp-company">
                        <a class="btn btn-primary btn-active-color-primary btn-outline-secondary me-3"
                            href="<?php echo e(route('impersonate.leave')); ?>"><i class="ti ti-ban"></i>
                            <?php echo e(__('Exit Impersonation')); ?>

                        </a>
                    </li>
                <?php endif; ?>

                <li class="dash-h-item theme_mode">
                    <a class="dash-head-link add_dark_mode me-0" role="button">
                        <i class="ti <?php echo e(Utility::getsettings('dark_mode') == 'off' ? 'ti-sun' : 'ti-moon'); ?>"></i>
                    </a>
                </li>
                <li class="dropdown dash-h-item drp-notification">
                    <a class="dash-head-link dropdown-toggle arrow-none me-0" id="kt_activities_toggle"
                        data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                        aria-expanded="false">
                        <i class="ti ti-bell"></i>
                        <span
                            class="bg-danger dash-h-badge
                        <?php if(auth()->user()->unreadnotifications->count()): ?> dots <?php endif; ?>"><span
                                class="sr-only"></span></span>
                    </a>
                    <div class="dropdown-menu dash-h-dropdown dropdown-menu-end">

                        <div class="noti-header">
                            <h5 class="m-0"><?php echo e(__('Notification')); ?></h5>
                        </div>
                        <div class="noti-body">
                            <?php $__currentLoopData = auth()->user()->notifications->where('read_at', '=', ''); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($notification->type == 'App\Notifications\TestingPurpose'): ?>
                                    <div class="my-4 d-flex align-items-start">
                                        <div class="theme-avtar bg-danger">
                                            <i class="ti ti-mail"></i>
                                        </div>
                                        <div class="ms-3 flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between">
                                                <a href="javascript:void(0);">
                                                    <h6><?php echo e(__('Testing Mail Send')); ?></h6>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between">
                                                <p class="mb-0 text-muted">
                                                    <?php echo e(__('you have send mail')); ?>

                                                    <?php echo e(isset($notification->data['data']['email']) ? $notification->data['data']['email'] : ''); ?>

                                                </p>
                                                <span
                                                    class="text-sm ms-2 text-nowrap"><?php echo e(Utility::date_time_format($notification->created_at)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if($notification->type == 'App\Notifications\RegisterMail'): ?>
                                    <div class="d-flex align-items-start my-4">
                                        <div class="theme-avtar bg-danger">
                                            <i class="ti ti-mail"></i>
                                        </div>
                                        <div class="ms-3 flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between">
                                                <a href="javascript:void(0);">
                                                    <h6><?php echo e(__('New User Create')); ?></h6>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between">
                                                <p class="mb-0 text-muted">
                                                    <?php echo e(__('New')); ?>

                                                    <?php echo e(isset($notification->data['data']['email']) ? $notification->data['data']['email'] : ''); ?><?php echo e(__(' User Create')); ?>

                                                </p>
                                                <span
                                                    class="text-sm ms-2 text-nowrap"><?php echo e(Utility::date_time_format($notification->created_at)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if($notification->type == 'App\Notifications\CreateForm'): ?>
                                    <div class="my-4 d-flex align-items-start">
                                        <div class="theme-avtar bg-primary">
                                            <i class="ti ti-device-desktop"></i>
                                        </div>
                                        <div class="ms-3 flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between">
                                                <a href="#">
                                                    <h6><?php echo e(__('New Form create')); ?></h6>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between">
                                                <?php
                                                    $notify = json_decode($notification);
                                                    $email = $notify->data->data->form->email;
                                                ?>
                                                <p class="mb-0 text-muted">
                                                    <?php echo e($email); ?>

                                                </p>
                                                <span
                                                    class="text-sm ms-2 text-nowrap"><?php echo e(Utility::date_time_format($notification->created_at)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if($notification->type == 'App\Notifications\NewSurveyDetails'): ?>
                                    <div class="my-4 d-flex align-items-start">
                                        <div class="theme-avtar bg-primary">
                                            <i class="ti ti-clipboard-list"></i>
                                        </div>
                                        <div class="ms-3 flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between">
                                                <a href="#">
                                                    <h6><?php echo e(__('New Form Submit')); ?></h6>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between">
                                                <p class="mb-0 text-muted">
                                                    <?php echo e(__('New')); ?>

                                                    <?php echo e(isset($notification->data['data']['title']) ? $notification->data['data']['title'] : ''); ?><?php echo e(__(' Form Submit')); ?>

                                                </p>
                                                <span
                                                    class="text-sm ms-2 text-nowrap"><?php echo e(Utility::date_time_format($notification->created_at)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if($notification->type == 'App\Notifications\NewEnquiryDetails'): ?>
                                    <div class="d-flex align-items-start my-4">
                                        <div class="theme-avtar bg-danger">
                                            <i class="ti ti-mail"></i>
                                        </div>
                                        <div class="ms-3 flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between">
                                                <a href="javascript:void(0);">
                                                    <h6><?php echo e(__('New Enquiry Details')); ?></h6>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between">
                                                <p class="mb-0 text-muted">
                                                    <?php echo e(__('New')); ?>

                                                    <?php echo e(isset($notification->data['data']['email']) ? $notification->data['data']['email'] : ''); ?><?php echo e(__(' Enquiry Details')); ?>

                                                </p>
                                                <span
                                                    class="text-sm ms-2 text-nowrap"><?php echo e(Utility::date_time_format($notification->created_at)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if($notification->type == 'App\Notifications\NewBookingSurveyDetails'): ?>
                                    <div class="d-flex align-items-start my-4">
                                        <div class="theme-avtar bg-danger">
                                            <i class="ti ti-mail"></i>
                                        </div>
                                        <div class="ms-3 flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between">
                                                <a href="javascript:void(0);">
                                                    <h6><?php echo e(__('New Booking Details')); ?></h6>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between">
                                                <p class="mb-0 text-muted">
                                                    <?php echo e(__('New')); ?>

                                                    <?php echo e(isset($notification->data['data']['title']) ? $notification->data['data']['title'] : ''); ?><?php echo e(__(' Booking Details')); ?>

                                                </p>
                                                <span
                                                    class="text-sm ms-2 text-nowrap"><?php echo e(Utility::date_time_format($notification->created_at)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </li>
                <li class="dropdown dash-h-item drp-language">
                    <a class="dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="pr-1 ti ti-world nocolor"></i>
                        <span class="pr-1 drp-text hide-mob"><?php echo e(Str::upper($currantLang)); ?></span>
                        <i class="ti ti-chevron-down drp-arrow nocolor"></i>
                    </a>
                    <div class=" dash-lang-width dropdown-menu dash-h-dropdown dropdown-menu-end">
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a rel="alternate" class="dropdown-item" hreflang="<?php echo e($localeCode); ?>"
                                href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                <?php echo e($properties['native']); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<?php /**PATH D:\company\backend\resources\views/layouts/back/header.blade.php ENDPATH**/ ?>