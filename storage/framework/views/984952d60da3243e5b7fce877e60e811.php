<?php $__env->startSection('title', 'About Us'); ?>
<?php $__env->startSection('content'); ?>
    <section id="section-services" class="p-1">
        <main class="container-fluid overflow-hidden">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    About Us
                </h1>
                <small class="content-section__description fs-6">Home / About Us</small>
            </div>
            <section class="about-us-section w-75 m-auto pb-5">
                <div class="row flex-row gx-5">
                    <div class="col-md-6">
                        <div class="image_1 position-relative">
                            <img src="<?php echo e(asset('assets/front_assets/images/placeholder.png')); ?>" alt="image">
                            <div class="image_2 position-absolute bottom-0 start-50">
                                <img src="<?php echo e(asset('assets/front_assets/images/placeholder_1.png')); ?>" alt="image">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mt-5">
                        <div class="inline-container d-flex align-items-center flex-row">
                            <span class="d-inline-block content-section__description ui text size-textmd">
                                <?php echo e(ucfirst($about->title)); ?></span>
                            <div class="ms-3 content-section__divider"></div>
                        </div>
                        <div class="services-section__content pt-1">
                            <h2 class="content-section__subtitle ui heading size-headingmd">
                                <?php echo e($about->short_description); ?>

                            </h2>
                            <p class="content-section__description fs-6 pt-2">
                                <?php echo e($about->description); ?>

                            </p>
                        </div>
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-9">
                                <div class="progress-bars-section overflow-visible pt-2">
                                    <?php $__currentLoopData = $about->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p class="content-section__description ui text size-textmd"><?php echo e($detail->category); ?>

                                        </p>
                                        <div style="height: 5px;" class="progress overflow-visible mb-2" role="progressbar"
                                            aria-label="<?php echo e($detail->category); ?> example"
                                            aria-valuenow="<?php echo e($detail->number); ?>" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: <?php echo e($detail->number); ?>%">
                                                <span style="top: -15px"
                                                    class="mb-2 position-absolute"><?php echo e($detail->number); ?>%</span>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <a href="<?php echo e(route('contact')); ?>" style="text-decoration: none;">
                                    <div style="cursor: pointer;" class="content-section__column--secondary">
                                        <p style="margin-top: 50px"
                                            class="content-section__button pt-2 ui text size-btn_text">
                                            <span class="text-decoration-none text-white">CONTACT US</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="carousel-section mt-5 pt-5 pb-5 position-relative">

                <div class="container">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="carousel-item <?php if($loop->first): ?> active <?php endif; ?>">
                                    <div class="row gx-5 align-items-center w-100">
                                        <div class="col-md-4">
                                            
                                            <img src="<?php echo e(Illuminate\Support\Facades\Storage::url($testimonial->image)); ?>"
                                                class="w-100 object-fit-cover" style="min-height: 400px;" alt="so3ody">
                                        </div>
                                        <div class="col-md-8 mt-5 pt-5">
                                            <div
                                                class="carousel-header w-100 pb-5 d-flex flex-row align-items-center justify-content-between">
                                                <div>
                                                    <div class="quote-container">
                                                        <span class="quote"></span>
                                                        
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <div class="pe-5">
                                                        <button style="width: 80px; height: 80px"
                                                            class="slider-navigation__icon--prev carousel-control-prev"
                                                            type="button" data-bs-slide="prev"
                                                            data-bs-target="#carouselExampleAutoplaying">
                                                            <img
                                                                src="<?php echo e(asset('assets/front_assets/images/img_arrow_left.svg')); ?>">
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button style="width: 80px; height: 80px"
                                                            class="slider-navigation__icon--next carousel-control-next"
                                                            type="button" data-bs-slide="next"
                                                            data-bs-target="#carouselExampleAutoplaying">
                                                            <img
                                                                src="<?php echo e(asset('assets/front_assets/images/img_arrow_right_blue_gray_100.svg')); ?>">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                            <p class="content-section__description">
                                                <?php echo e($testimonial->getTranslation('desc', app()->getLocale())); ?>

                                            </p>
                                            <div style="width: 40px" class="mb-3 content-section__divider"></div>
                                            <span 
                                                class="d-inline-block content-section__description ui text size-textmd fs-5"><?php echo e($testimonial->name); ?></span>
                                            <br>
                                            
                                            <p style="font-size: 15px"
                                                class="d-inline-block content-section__description ui text size-textmd">
                                                <?php echo e($testimonial->title); ?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="our-trusted-clients p-5 m-5">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-2">
                            <p class="fs-6 content-section__subtitle ui heading size-headingmd">700+ Our Trusted Client</p>
                        </div>
                        <div class="col-md-10">
                            <div class="row gy-3 justify-content-center">
                                <div class="col-md-3 text-center">
                                    <img src="<?php echo e(asset('assets/front_assets/images/client_1.png')); ?>" alt="">
                                </div>
                                <div class="col-md-3 text-center">
                                    <img src="<?php echo e(asset('assets/front_assets/images/client_2.png')); ?>" alt="">
                                </div>
                                <div class="col-md-3 text-center">
                                    <img src="<?php echo e(asset('assets/front_assets/images/client_3.png')); ?>" alt="">
                                </div>
                                <div class="col-md-3 text-center">
                                    <img src="<?php echo e(asset('assets/front_assets/images/client_1.png')); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="meet-our-leadership p-5 m-5">
                <div class="container">
                    <div class="section__header">
                        <div class="section__header-row">
                            <p class="section__title ui text size-btn_text">Our Team</p>
                            <div class="section__divider"></div>
                        </div>
                        <h2 class="section__subtitle ui heading size-headings">
                            Meet Our
                        </h2>
                        <h3 class="section__highlight ui heading size-headinglg">
                            Leadership
                        </h3>
                    </div>
                    <div class="row mt-5">
                        <?php $__currentLoopData = $leaderships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leadership): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3">
                                <div class="user-profile"
                                    onclick="location.href='<?php echo e(route('team-details', $leadership->id)); ?>';">
                                    <img src="<?php echo e(Storage::url($leadership->photo)); ?>" alt="profile image"
                                        class="user-profile__image <?php if($loop->index % 2 != 0): ?> pt-4 <?php endif; ?>">
                                    <p class="user-profile__name ui text size-textxl">
                                        <?php echo e($leadership->name); ?>

                                    </p>
                                    <p class="user-profile__role ui text size-texts">
                                        <?php echo e($leadership->position); ?>

                                    </p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </section>

            <section id="milestones-achieved" class="w-100 pt-5 mt-5 pb-5 mb-5">
                <div class="container pt-5 pb-5">
                    <div class="row pt-5">
                        <div class="col-md-6">
                            <p class="content-section__subtitle ui heading size-headingmd">
                                <?php echo e($statistics->short_description); ?></p>
                        </div>
                        <div class="col-md-6">
                            <p class="content-section__description"><?php echo e($statistics->description); ?></p>
                        </div>
                    </div>
                    <div class="row pt-5 pb-5 text-center justify-content-center">
                        <?php $__currentLoopData = $statistics->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <p class="fs-1 content-section__subtitle ui heading size-headingmd">
                                    <?php echo e($detail->number); ?> +
                                </p>
                                <br>
                                <p class="user-profile__name ui text size-textxl">
                                    <?php echo e($detail->category); ?>

                                </p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </section>

            <section id="blog" class="w-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="content-section__subtitle ui heading size-headingmd">Sharing Our Knowledge and
                                Passion for Interiors</p>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                    
                    <div class="row gy-5">
                        <?php if(isset($allBlogs)): ?>
                            <?php $__currentLoopData = $allBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4">
                                    <div style="min-height: 350px; max-height: 350px" class="card p-5">
                                        <div class="card-body">
                                            <p class="w-75 fs-6 content-section__subtitle ui heading size-headingmd">
                                                <?php echo e(Str::limit($blog->getTranslation('title', app()->getLocale()), 45)); ?>

                                                <?php echo e(Str::limit($blog->getTranslation('short_description', app()->getLocale()), 45)); ?>

                                            </p>
                                            <br>
                                            <div style="height: 3px" class="section__divider"></div>
                                            <br>
                                            <p class="w-100 fs-6 content-section__description">
                                                <?php echo e(Str::limit($blog->getTranslation('normal_description', app()->getLocale()), 60)); ?>

                                            </p>
                                            <br>
                                            <p>Learn more <a class="arrow text-white text-decoration-none"
                                                    href="<?php echo e(route('view.blog', $blog->slug)); ?>">→</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    
                </div>
            </section>
        </main>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/front/about-us/index.blade.php ENDPATH**/ ?>