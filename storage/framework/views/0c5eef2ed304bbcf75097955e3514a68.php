<div class="class-01-home">
    <div class="column_seven">
        <div class="column_two">
            <div class="row_three">
                <div class="row_two">
                    <div class="columnheaderlog">
                        <header id="header" class="header">
                            <nav class="navbar w-100 shadow navbar-expand-lg">
                                <div class="container">
                                    <a class="navbar-brand" href="#">
                                        <img src="<?php echo e(asset('assets/front_assets/images/img_header_logo.png')); ?>"
                                            alt="header logo" href="#header" style="height: 40px" />
                                    </a>
                                    <div>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                            <ul class="navbar-nav header__nav-list me-auto mb-2 mb-lg-0">
                                                <li class="nav-item">
                                                    <a class="nav-link nav-list__item--home ui text size-texts"
                                                        href="<?php echo e(route('homepage')); ?>">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-list__item--about ui text size-texts <?php echo e(Route::is('about-us') ? 'active' : ''); ?>"
                                                        href="<?php echo e(route('about-us')); ?>">About Dopiks</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link nav-list__item--services-text ui text size-texts <?php echo e(Route::is('services') ? 'active' : ''); ?>"
                                                        href="<?php echo e(route('services')); ?>">
                                                        Services
                                                    </a>
                                                    
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-list__item--services-text ui text size-texts"
                                                        href="#section-projects">
                                                        Projects
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-list__item--about ui text size-text"
                                                        href="#section-clients">Our clients</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-list__item--about ui text size-texts"
                                                        href="#">Blogs</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-list__item--about ui text size-texts <?php echo e(Route::is('contact') ? 'active' : ''); ?>"
                                                        href="<?php echo e(route('contact')); ?>">Contact Us</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </header>
<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/layouts/front/header.blade.php ENDPATH**/ ?>