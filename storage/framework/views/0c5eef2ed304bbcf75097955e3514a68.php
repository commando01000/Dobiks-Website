<style>
    .message-container {
        position: fixed;
        /* Use fixed positioning */
        top: 80px;
        /* Distance from the top */
        right: 20px;
        /* Distance from the right */
        z-index: 1000;
        /* Ensure it sits above other content */
    }
</style>
<script>
    setTimeout(function() {
        document.getElementsByClassName("message-container")[0].style.display = "none";
    }, 2000);
</script>

<div class="class-01-home">
    <div class="column_seven overflow-hidden">
        <div class="column_two position-relative overflow-visible">

            <form class="home-form unactive ms-3 p-5" method="post" action="<?php echo e(route('contact_us.store')); ?>">
                <?php echo csrf_field(); ?>
                <main class="container">
                    <div class="row gy-3 justify-content-center align-items-center">
                        <div class="col-md-12 text-center">
                            <div class="form-header d-flex justify-content-between">
                                <img class="w-50" src="<?php echo e(asset('assets/front_assets/images/img_header_logo.png')); ?>"
                                    alt="logo">
                                <i style="color: white; font-size: 30px; text-align: end; cursor: pointer"
                                    class="fa-regular fa-circle-xmark"></i>
                            </div>

                        </div>
                        <div class="col-md-12 text-center">
                            <p class="user-profile__role ui text size-texts">
                                At Dopiks, we see a world where every brand has the power to connect with its audience
                                in a
                                meaningful way. We want to help businesses tell their stories and reach their full
                                potential
                                through innovative digital marketing strategies. Our vision is to be the go-to agency
                                for
                                brands looking to create impactful campaigns and build lasting relationships with their
                                customers.
                            </p>
                        </div>
                    </div>
                    <div class="row pt-2">


                        <div class="col-md-6">
                            <div class="mb-5">
                                <label for="name" class="col-form-label text-white">First Name <span
                                        style="color: #ff5101"> *</span></label>
                                <input type="text" class="form-control text-white" name="firstname" required
                                    id="name" placeholder="First name here" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-5">
                                <label for="l_name" class="col-form-label text-white">Last Name
                                    <span style="color: #ff5101"> *</span></label>
                                <input type="text" class="form-control text-white" name="lastname" required
                                    id="c_name" placeholder="Last name here" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-5">
                                <label for="name" class="col-form-label text-white">Email Address<span
                                        style="color: #ff5101"> *</span></label>
                                <input type="text" class="form-control text-white" name="email" required
                                    id="name" placeholder="First name here" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-5">
                                <label for="c_name" class="col-form-label text-white">Subject
                                    <span style="color: #ff5101"> *</span></label>
                                <input type="text" class="form-control text-white" name="subject" required
                                    id="c_name" placeholder="ٍSubject here" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="comments" class="col-form-label text-white">Comments / Questions
                                    <span style="color: #ff5101"> *</span></label>
                                <textarea class="form-control text-white" id="comments" rows="3" name='comments'></textarea>
                            </div>
                        </div>
                        <br>

                        <button class="submit-button position-relative">
                            <div class="circle position-absolute start-0 z-0"></div>
                            <div class="text z-1">
                                SUBMIT REQUEST
                                <span class="arrow">→</span>
                            </div>
                        </button>

                    </div>
                </main>
            </form>

            <div class="row_three">
                <div class="row_two">
                    <div class="columnheaderlog">
                        <header id="header" class="header">
                            <nav class="navbar w-100 shadow navbar-expand-lg">
                                <div class="container flex-row flex-nowrap align-items-start overflow-hidden">
                                    <a class="navbar-brand" href="#">
                                        <img src="<?php echo e(asset('assets/front_assets/images/img_header_logo.png')); ?>"
                                            alt="header logo" href="#header" style="height: 40px !important" />
                                    </a>
                                    <div>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse"
                                            id="navbarNavDropdown">
                                            <ul class="navbar-nav header__nav-list me-auto mb-2 mb-lg-0">
                                                <li class="nav-item">
                                                    <a class="nav-link nav-list__item--home ui text size-texts <?php echo e(Route::is('homepage') ? 'active' : ''); ?>"
                                                        href="<?php echo e(route('homepage')); ?>">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-list__item--about ui text size-texts <?php echo e(Route::is('about-us') ? 'active' : ''); ?>"
                                                        href="<?php echo e(route('about-us')); ?>">About Dopiks</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-list__item--about ui text size-texts <?php echo e(Route::is('front.leadership.index') ? 'active' : ''); ?>"
                                                        href="<?php echo e(route('front.leadership.index')); ?>">Our Team</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link nav-list__item--services-text ui text size-texts <?php echo e(Route::is('services') ? 'active' : ''); ?>"
                                                        href="<?php echo e(route('services')); ?>">
                                                        Services
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-list__item--services-text ui <?php echo e(Route::is('see.all.projects') ? 'active' : ''); ?> text size-texts"
                                                        href="<?php echo e(route('see.all.projects')); ?>">
                                                        Projects
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?php echo e(route('see.all.clients')); ?>"
                                                        class="nav-link nav-list__item--about ui text size-text <?php echo e(Route::is('see.all.clients') ? 'active' : ''); ?>">Our
                                                        clients</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-list__item--about ui text size-texts <?php echo e(Route::is('see.all.blogs') ? 'active' : ''); ?>"
                                                        href="<?php echo e(route('see.all.blogs')); ?>">Blogs</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-list__item--about ui text size-texts <?php echo e(Route::is('contact') ? 'active' : ''); ?>"
                                                        href="<?php echo e(route('contact')); ?>">Contact Us</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a
                                                        class="dobsik-form nav-link nav-list__item--about ui text size-texts">
                                                        <img src="<?php echo e(asset('assets/front_assets/images/menu_1.png')); ?>"
                                                            alt=""></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </header>
<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/layouts/front/header.blade.php ENDPATH**/ ?>