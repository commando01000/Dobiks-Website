<?php
    $user = \Auth::user();

    $role_id = $user->roles->first()->id;
    $user_id = $user->id;
    $currantLang = app()->getLocale();

?>

<style>
    .navbar-content {
        height: 100%;
        /* Set a specific height for the navbar-content */
        overflow-y: auto;
        /* Enable vertical scrollbar if the content overflows */
    }

    /* Optional: You can customize the scrollbar styles */
    .navbar-content::-webkit-scrollbar {
        width: 12px;
    }

    .navbar-content::-webkit-scrollbar-thumb {
        background-color: #333;
        border-radius: 6px;
    }

    .navbar-content::-webkit-scrollbar-track {
        background-color: #f1f1f1;
    }
</style>
<nav
    class="<?php if($currantLang == 'ar'): ?> side-nav-rtl <?php endif; ?> dash-sidebar light-sidebar <?php echo e($user->transprent_layout == 1 ? 'transprent-bg' : ''); ?> ">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="<?php echo e(route('home')); ?>" class="text-center b-brand">
                <!-- ========   change your logo hear   ============ -->
                <?php if($user->dark_layout == 1): ?>
                    <img src="<?php echo e(Utility::getsettings('app_logo') ? Storage::url('app-logo/app-logo.png') : Storage::url('app-logo/78x78.png')); ?>"
                        class="app-logo" />
                <?php else: ?>
                    <img src="<?php echo e(Utility::getsettings('app_dark_logo') ? Storage::url('app-logo/app-dark-logo.png') : Storage::url('app-logo/78x78.png')); ?>"
                        class="app-logo" />
                <?php endif; ?>
            </a>
        </div>
        <div class="navbar-content">
            <ul class="dash-navbar d-block">
                <li class="dash-item dash-hasmenu <?php echo e(request()->is('/') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('home')); ?>" class="dash-link">
                        <span class="dash-micon"><i class="ti ti-home"></i></span>
                        <span class="dash-mtext custom-weight"><?php echo e(__('Dashboard')); ?></span>
                    </a>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['manage-landing-page'])): ?>
                    <li class="dash-item dash-hasmenu <?php echo e(request()->is('landingpage*') ? 'active' : ''); ?>">
                        <a class="dash-link" href="<?php echo e(route('landing-page.setting')); ?>">
                            <span class="dash-micon">
                                <i class="ti ti-world"></i>
                            </span>
                            <span class="dash-mtext"><?php echo e(__('Landing Page')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['manage-landing-page'])): ?>
                    <li class="dash-item dash-hasmenu <?php echo e(request()->is('menu*') ? 'active' : ''); ?>">
                        <a class="dash-link" href="<?php echo e(route('main.menu')); ?>">
                            <span class="dash-micon">
                                <i class="ti ti-world"></i>
                            </span>
                            <span class="dash-mtext"><?php echo e(__('Menu')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="dash-item dash-hasmenu <?php echo e(request()->is('sliders*') ? 'active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('sliders.index')); ?>">
                        <span class="dash-micon">
                            <i class="ti ti-world"></i>
                        </span>
                        <span class="dash-mtext"><?php echo e(__('Sliders')); ?></span>
                    </a>
                </li>
                <li class="dash-item dash-hasmenu <?php echo e(request()->is('statistics*') ? 'active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('statistics.index')); ?>">
                        <span class="dash-micon">
                            <i class="ti ti-world"></i>
                        </span>
                        <span class="dash-mtext"><?php echo e(__('Statistics')); ?></span>
                    </a>
                </li>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['manage-blog'])): ?>
                    <li class="dash-item dash-hasmenu <?php echo e(request()->is('join*') ? 'active' : ''); ?>">
                        <a class="dash-link" href="<?php echo e(route('join.index')); ?>">
                            <span class="dash-micon">
                                <i class="ti ti-world"></i>
                            </span>
                            <span class="dash-mtext"><?php echo e(__('JoinUs')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <li class="dash-item dash-hasmenu <?php echo e(request()->is('contact_us*') ? 'active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('contact_us.index')); ?>">
                        <span class="dash-micon">
                            <i class="ti ti-world"></i>
                        </span>
                        <span class="dash-mtext"><?php echo e(__('Contact_us')); ?></span>
                    </a>
                </li>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['manage-blog'])): ?>
                    <li class="dash-item dash-hasmenu collapsed <?php echo e(request()->is('blog*') ? 'dash-trigger' : ''); ?>">
                        <a href="#!" class="dash-link">
                            <span class="dash-micon">
                                <i class="ti ti-forms"></i>
                            </span>
                            <span class="dash-mtext"><?php echo e(__('Blog')); ?></span>
                            <span class="dash-arrow " style="margin-top: 0px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </span>
                        </a>
                        <ul class="dash-submenu">
                            <li class="dash-item ">
                                <a class="dash-link" href="<?php echo e(route('blog.index')); ?>"><?php echo e(__('Blog')); ?></a>
                            </li>
                            <li class="dash-item ">
                                <a class="dash-link"
                                    href="<?php echo e(route('blog-category.index')); ?>"><?php echo e(__('Blog Category')); ?></a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['manage-gallery'])): ?>
                    <li class="dash-item dash-hasmenu collapsed <?php echo e(request()->is('gallery*') ? 'dash-trigger' : ''); ?>">
                        <a href="#!" class="dash-link">
                            <span class="dash-micon">
                                <i class="ti ti-images"></i>
                            </span>
                            <span class="dash-mtext"><?php echo e(__('Gallery')); ?></span>
                            <span class="dash-arrow " style="margin-top: 0px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </span>
                        </a>
                        <ul class="dash-submenu">
                            <li class="dash-item ">
                                <a class="dash-link" href="<?php echo e(route('gallery.index')); ?>"><?php echo e(__('Gallery')); ?></a>
                            </li>
                            <li class="dash-item ">
                                <a class="dash-link"
                                    href="<?php echo e(route('gallery-category.index')); ?>"><?php echo e(__('Gallery Category')); ?></a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>





                <li class="dash-item dash-hasmenu collapsed <?php echo e(request()->is('modules*') ? 'dash-trigger' : ''); ?>">
                    <a href="#!" class="dash-link">
                        <span class="dash-micon">
                            <i class="ti ti-layout-2"></i>
                        </span>
                        <span class="dash-mtext"><?php echo e(__('Modules')); ?></span>
                        <span class="dash-arrow " style="margin-top: 0px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </span>
                    </a>
                    <ul class="dash-submenu">
                        <li class="dash-item ">
                            <a class="dash-link" href="<?php echo e(route('pages.index')); ?>"><?php echo e(__('Pages')); ?></a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link" href="<?php echo e(route('projects.index')); ?>"><?php echo e(__('projects')); ?></a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link"
                                href="<?php echo e(route('project-category.index')); ?>"><?php echo e(__('Project Category')); ?></a>
                        </li>

                        <li class="dash-item ">
                            <a class="dash-link" href="<?php echo e(route('services.index')); ?>"><?php echo e(__('Services')); ?></a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link"
                                href="<?php echo e(route('service-category.index')); ?>"><?php echo e(__('Service_Category')); ?></a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link" href="<?php echo e(route('customer.index')); ?>"><?php echo e(__('clients')); ?></a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link"
                                href="<?php echo e(route('client-category.index')); ?>"><?php echo e(__('Client Category')); ?></a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link" href="<?php echo e(route('leadership.index')); ?>"><?php echo e(__('Our Team')); ?></a>
                        </li>

                        <li class="dash-item ">
                            <a class="dash-link" href="<?php echo e(route('faqs.index')); ?>"><?php echo e(__('FAQ')); ?></a>
                        </li>

                        <li class="dash-item ">
                            <a class="dash-link" href="<?php echo e(route('testimonial.index')); ?>"><?php echo e(__('Testimonial')); ?></a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link"
                                href="<?php echo e(route('business.growth.index')); ?>"><?php echo e(__('BussinessGrowth')); ?></a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link" href="<?php echo e(route('feature.index')); ?>"><?php echo e(__('Feature')); ?></a>
                        </li>
                    </ul>
                </li>





                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['manage-user'])): ?>
                    <li class="dash-item dash-hasmenu collapsed <?php echo e(request()->is('users*') ? 'dash-trigger' : ''); ?>">
                        <a href="#!" class="dash-link">
                            <span class="dash-micon">
                                <i class="ti ti-users"></i>
                            </span>
                            <span class="dash-mtext"><?php echo e(__('Users')); ?></span>
                            <span class="dash-arrow " style="margin-top: 0px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </span>
                        </a>
                        <ul class="dash-submenu">
                            <li class="dash-item ">
                                <a class="dash-link" href="<?php echo e(route('users.index')); ?>"><?php echo e(__('Users')); ?></a>
                            </li>
                            <li class="dash-item ">
                                <a class="dash-link" href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('Roles')); ?></a>
                            </li>
                            <li class="dash-item ">
                                <a class="dash-link" href="<?php echo e(route('permission.index')); ?>"><?php echo e(__('Permission')); ?></a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>


                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['manage-setting'])): ?>
                    <li class="dash-item dash-hasmenu collapsed <?php echo e(request()->is('settings*') ? 'dash-trigger' : ''); ?>">
                        <a href="#!" class="dash-link">
                            <span class="dash-micon">
                                <i class="ti ti-settings"></i>
                            </span>
                            <span class="dash-mtext"><?php echo e(__('Settings')); ?></span>
                            <span class="dash-arrow " style="margin-top: 0px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </span>
                        </a>
                        <ul class="dash-submenu">
                            <li class="dash-item ">
                                <a class="dash-link" href="<?php echo e(route('settings')); ?>"><?php echo e(__('Settings')); ?></a>
                            </li>
                            <li class="dash-item ">
                                <a class="dash-link"
                                    href="<?php echo e(route('manage.language', ['lang' => 'en'])); ?>"><?php echo e(__('Language')); ?></a>
                            </li>
                            <li class="dash-item ">
                                <a class="dash-link" href="<?php echo e(route('config.cache')); ?>"><?php echo e(__('Cache')); ?></a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>


                <li class="dash-item dash-hasmenu <?php echo e(request()->is('profile*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('profile.index')); ?>" class="dash-link">
                        <span class="dash-micon">
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="dash-mtext"><?php echo e(__('Profile')); ?></span>
                    </a>
                </li>
                <li class="dash-item dash-hasmenu">
                    <a href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        class="dash-link">
                        <span class="dash-micon">
                            <i class="ti ti-power"></i>
                        </span>
                        <span class="dash-mtext"><?php echo e(__('Logout')); ?></span>
                    </a>
                    <?php echo Form::open([
                        'route' => ['logout'],
                        'method' => 'POST',
                        'id' => 'logout-form',
                        'class' => 'd-none',
                    ]); ?>

                    <?php echo Form::close(); ?>

                </li>








            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\company\backend\resources\views/layouts/back/sidebar.blade.php ENDPATH**/ ?>