
<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content-Section -->
    <?php if(session()->has('message')): ?>
        <div class="message-container">
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

            </div>
        </div>
    <?php endif; ?>


    <!-- start hero section -->
    <section class="hero d-flex flex-column justify-content-center align-items-center pb-0">
        <div class="container d-flex justify-content-between align-items-center gap-4">
            <div class="col-lg-7">
                <div id="heading-carousel" class="carousel slide" data-bs-ride="carousel" data-bsinterval="2500">
                    <div class="carousel-inner">
                        <div class="carousel-item fade-in-text active">
                            <h1 class="fw-bolder">
                                We build immersive digital experiences.
                            </h1>
                        </div>
                        <div class="carousel-item fade-in-text">
                            <h1 class="fw-bolder">
                                We create stunning visual designs.
                            </h1>
                        </div>
                        <div class="carousel-item fade-in-text">
                            <h1 class="fw-bolder">
                                We deliver exceptional user experiences.
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-5 mt-5">
                    <button
                        class="section-circle btn circle-btn position-relative text-white rounded-circle border d-flex flex-column gap-2 align-items-center justify-content-center"
                        data-btn-scroll="true">
                        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                            <circle class="circle" cx="50" cy="50" r="48" stroke="#FF5101" stroke-width="2"
                                fill="none" />
                        </svg>
                        <p class="text-uppercase">Build Now</p>
                        <img class="img-fluid" src="<?php echo e(asset('assets/front_assets/images/down-arrow.svg')); ?>"
                            alt="build now">
                    </button>
                    <div class="hero-desc position-relative">
                        <h2 class="fw-bold pt-4">Let Us Tell Your Story</h2>
                        <p class="text-light-gray">The Creative agency for international and local brands</p>
                    </div>
                </div>
            </div>
            <div class="controls d-flex flex-column gap-4 justify-content-center">
                <button
                    class="btn circle-btn position-relative border rounded-circle d-flex justify-content-center align-items-center"
                    data-btn-scroll="true" data-bs-target="#heading-carousel" data-bs-slide="prev">
                    <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                        <circle class="circle" cx="50" cy="50" r="48" stroke="#FF5101" stroke-width="2"
                            fill="none" />
                    </svg><img class="img-fluid" src="<?php echo e(asset('assets/front_assets/images/prev-left.svg')); ?>">
                </button>
                <button
                    class="btn circle-btn position-relative border rounded-circle d-flex justify-content-center align-items-center"
                    data-btn-scroll="true" data-bs-target="#heading-carousel" data-bs-slide="next">
                    <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                        <circle class="circle" cx="50" cy="50" r="48" stroke="#FF5101" stroke-width="2"
                            fill="none" />
                    </svg><img class="img-fluid" src="<?php echo e(asset('assets/front_assets/images/next-right.svg')); ?>">
                </button>
            </div>
        </div>
        <div><img class="img-fluid" src="<?php echo e(asset('assets/front_assets/images/hero-bg.png')); ?>" alt="bg"></div>
    </section>
    <!-- end hero section -->


    

    <!-- start album section -->
    <section>
        <div data-swiperClass=".album" data-slidesToShow="4" data-spaceBetweenSlides="20"
            class="album swiper position-relative px-1">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide"><img class="img-fluid w-100 h-100" src="<?php echo e(Storage::url($slider->image)); ?>"
                            alt="<?php echo e($slider->title); ?>">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="controls d-flex gap-5 align-items-center justify-content-between my-5">
                <button class="btn swiper-control swiper-prev">
                    <p class="btn circle-btn position-relative border rounded-circle d-inline-flex justify-content-center align-items-center me-4"
                        data-btn-scroll="true">
                        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                            <circle class="circle" cx="50" cy="50" r="48" stroke="#FF5101" stroke-width="2"
                                fill="none" />
                        </svg><img class="img-fluid" src="<?php echo e(asset('assets/front_assets/images/prev-left.svg')); ?>">
                    </p>
                    <span class="text-white">Previous Slide</span>
                </button>
                <button class="btn swiper-control swiper-next">
                    <span>Next Slide</span>
                    <p class="btn circle-btn position-relative border rounded-circle d-inline-flex justify-content-center align-items-center ms-4"
                        data-btn-scroll="true">
                        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                            <circle class="circle" cx="50" cy="50" r="48" stroke="#FF5101" stroke-width="2"
                                fill="none" />
                        </svg>
                        <img class="img-fluid" src="<?php echo e(asset('assets/front_assets/images/next-right.svg')); ?>">
                    </p>
                </button>
            </div>
        </div>
    </section>
    <!-- end album section -->

    <!-- Section-Projects -->
    <?php echo $__env->make('front.projects-section.projects', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Section-Projects -->
    <!-- Section-Clients -->
    <?php echo $__env->make('front.clients-section.clients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Section-Clients -->
    
    <?php echo $__env->make('front.leaderships.section-leadership', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/swiper.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/home/index.blade.php ENDPATH**/ ?>