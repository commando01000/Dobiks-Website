@php
    $user = \Auth::user();

    $role_id = $user->roles->first()->id;
    $user_id = $user->id;
    $currantLang = app()->getLocale();

@endphp

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
    class="@if ($currantLang == 'ar') side-nav-rtl @endif dash-sidebar light-sidebar {{ $user->transprent_layout == 1 ? 'transprent-bg' : '' }} ">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('home') }}" class="text-center b-brand">
                <!-- ========   change your logo hear   ============ -->
                @if ($user->dark_layout == 1)
                    <img src="{{ Utility::getsettings('app_logo') ? Storage::url('app-logo/app-logo.png') : Storage::url('app-logo/78x78.png') }}"
                        class="app-logo" />
                @else
                    <img src="{{ Utility::getsettings('app_dark_logo') ? Storage::url('app-logo/app-dark-logo.png') : Storage::url('app-logo/78x78.png') }}"
                        class="app-logo" />
                @endif
            </a>
        </div>
        <div class="navbar-content">
            <ul class="dash-navbar d-block">
                <li class="dash-item dash-hasmenu {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="dash-link">
                        <span class="dash-micon"><i class="ti ti-home"></i></span>
                        <span class="dash-mtext custom-weight">{{ __('Dashboard') }}</span>
                    </a>
                </li>
                @canany(['manage-landing-page'])
                    <li class="dash-item dash-hasmenu {{ request()->is('landingpage*') ? 'active' : '' }}">
                        <a class="dash-link" href="{{ route('landing-page.setting') }}">
                            <span class="dash-micon">
                                <i class="ti ti-world"></i>
                            </span>
                            <span class="dash-mtext">{{ __('Landing Page') }}</span>
                        </a>
                    </li>
                @endcanany
                @canany(['manage-landing-page'])
                    <li class="dash-item dash-hasmenu {{ request()->is('menu*') ? 'active' : '' }}">
                        <a class="dash-link" href="{{ route('main.menu') }}">
                            <span class="dash-micon">
                                <i class="ti ti-world"></i>
                            </span>
                            <span class="dash-mtext">{{ __('Menu') }}</span>
                        </a>
                    </li>
                @endcanany
                <li class="dash-item dash-hasmenu {{ request()->is('sliders*') ? 'active' : '' }}">
                    <a class="dash-link" href="{{ route('sliders.index') }}">
                        <span class="dash-micon">
                            <i class="ti ti-world"></i>
                        </span>
                        <span class="dash-mtext">{{ __('Sliders') }}</span>
                    </a>
                </li>
                <li class="dash-item dash-hasmenu {{ request()->is('statistics*') ? 'active' : '' }}">
                    <a class="dash-link" href="{{ route('statistics.index') }}">
                        <span class="dash-micon">
                            <i class="ti ti-world"></i>
                        </span>
                        <span class="dash-mtext">{{ __('Statistics') }}</span>
                    </a>
                </li>

                @canany(['manage-blog'])
                    <li class="dash-item dash-hasmenu {{ request()->is('join*') ? 'active' : '' }}">
                        <a class="dash-link" href="{{ route('join.index') }}">
                            <span class="dash-micon">
                                <i class="ti ti-world"></i>
                            </span>
                            <span class="dash-mtext">{{ __('JoinUs') }}</span>
                        </a>
                    </li>
                @endcanany

                <li class="dash-item dash-hasmenu {{ request()->is('contact_us*') ? 'active' : '' }}">
                    <a class="dash-link" href="{{ route('contact_us.index') }}">
                        <span class="dash-micon">
                            <i class="ti ti-world"></i>
                        </span>
                        <span class="dash-mtext">{{ __('Contact_us') }}</span>
                    </a>
                </li>

                @canany(['manage-blog'])
                    <li class="dash-item dash-hasmenu collapsed {{ request()->is('blog*') ? 'dash-trigger' : '' }}">
                        <a href="#!" class="dash-link">
                            <span class="dash-micon">
                                <i class="ti ti-forms"></i>
                            </span>
                            <span class="dash-mtext">{{ __('Blog') }}</span>
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
                                <a class="dash-link" href="{{ route('blog.index') }}">{{ __('Blog') }}</a>
                            </li>
                            <li class="dash-item ">
                                <a class="dash-link"
                                    href="{{ route('blog-category.index') }}">{{ __('Blog Category') }}</a>
                            </li>
                        </ul>
                    </li>
                @endcanany

                @canany(['manage-gallery'])
                    <li class="dash-item dash-hasmenu collapsed {{ request()->is('gallery*') ? 'dash-trigger' : '' }}">
                        <a href="#!" class="dash-link">
                            <span class="dash-micon">
                                <i class="ti ti-images"></i>
                            </span>
                            <span class="dash-mtext">{{ __('Gallery') }}</span>
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
                                <a class="dash-link" href="{{ route('gallery.index') }}">{{ __('Gallery') }}</a>
                            </li>
                            <li class="dash-item ">
                                <a class="dash-link"
                                    href="{{ route('gallery-category.index') }}">{{ __('Gallery Category') }}</a>
                            </li>
                        </ul>
                    </li>
                @endcanany





                <li class="dash-item dash-hasmenu collapsed {{ request()->is('modules*') ? 'dash-trigger' : '' }}">
                    <a href="#!" class="dash-link">
                        <span class="dash-micon">
                            <i class="ti ti-layout-2"></i>
                        </span>
                        <span class="dash-mtext">{{ __('Modules') }}</span>
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
                            <a class="dash-link" href="{{ route('pages.index') }}">{{ __('Pages') }}</a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link" href="{{ route('projects.index') }}">{{ __('projects') }}</a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link"
                                href="{{ route('project-category.index') }}">{{ __('Project Category') }}</a>
                        </li>

                        <li class="dash-item ">
                            <a class="dash-link" href="{{ route('services.index') }}">{{ __('Services') }}</a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link"
                                href="{{ route('service-category.index') }}">{{ __('Service_Category') }}</a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link" href="{{ route('customer.index') }}">{{ __('clients') }}</a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link"
                                href="{{ route('client-category.index') }}">{{ __('Client Category') }}</a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link" href="{{ route('leadership.index') }}">{{ __('Our Team') }}</a>
                        </li>

                        <li class="dash-item ">
                            <a class="dash-link" href="{{ route('faqs.index') }}">{{ __('FAQ') }}</a>
                        </li>

                        <li class="dash-item ">
                            <a class="dash-link" href="{{ route('testimonial.index') }}">{{ __('Testimonial') }}</a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link"
                                href="{{ route('business.growth.index') }}">{{ __('BussinessGrowth') }}</a>
                        </li>
                        <li class="dash-item ">
                            <a class="dash-link" href="{{ route('feature.index') }}">{{ __('Feature') }}</a>
                        </li>
                    </ul>
                </li>





                @canany(['manage-user'])
                    <li class="dash-item dash-hasmenu collapsed {{ request()->is('users*') ? 'dash-trigger' : '' }}">
                        <a href="#!" class="dash-link">
                            <span class="dash-micon">
                                <i class="ti ti-users"></i>
                            </span>
                            <span class="dash-mtext">{{ __('Users') }}</span>
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
                                <a class="dash-link" href="{{ route('users.index') }}">{{ __('Users') }}</a>
                            </li>
                            <li class="dash-item ">
                                <a class="dash-link" href="{{ route('roles.index') }}">{{ __('Roles') }}</a>
                            </li>
                            <li class="dash-item ">
                                <a class="dash-link" href="{{ route('permission.index') }}">{{ __('Permission') }}</a>
                            </li>
                        </ul>
                    </li>
                @endcanany


                @canany(['manage-setting'])
                    <li class="dash-item dash-hasmenu collapsed {{ request()->is('settings*') ? 'dash-trigger' : '' }}">
                        <a href="#!" class="dash-link">
                            <span class="dash-micon">
                                <i class="ti ti-settings"></i>
                            </span>
                            <span class="dash-mtext">{{ __('Settings') }}</span>
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
                                <a class="dash-link" href="{{ route('settings') }}">{{ __('Settings') }}</a>
                            </li>
                            <li class="dash-item ">
                                <a class="dash-link"
                                    href="{{ route('manage.language', ['lang' => 'en']) }}">{{ __('Language') }}</a>
                            </li>
                            <li class="dash-item ">
                                <a class="dash-link" href="{{ route('config.cache') }}">{{ __('Cache') }}</a>
                            </li>
                        </ul>
                    </li>
                @endcanany


                <li class="dash-item dash-hasmenu {{ request()->is('profile*') ? 'active' : '' }}">
                    <a href="{{ route('profile.index') }}" class="dash-link">
                        <span class="dash-micon">
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="dash-mtext">{{ __('Profile') }}</span>
                    </a>
                </li>
                <li class="dash-item dash-hasmenu">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        class="dash-link">
                        <span class="dash-micon">
                            <i class="ti ti-power"></i>
                        </span>
                        <span class="dash-mtext">{{ __('Logout') }}</span>
                    </a>
                    {!! Form::open([
                        'route' => ['logout'],
                        'method' => 'POST',
                        'id' => 'logout-form',
                        'class' => 'd-none',
                    ]) !!}
                    {!! Form::close() !!}
                </li>








            </ul>
        </div>
    </div>
</nav>
