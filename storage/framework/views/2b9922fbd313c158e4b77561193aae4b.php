

<?php $__env->startSection('content'); ?>
    <!-- Content-Section -->
    <?php if(session()->has('message')): ?>
        <div class="message-container">
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

            </div>
        </div>
    <?php endif; ?>
    <section class="content-section m-5 p-5 pb-0 mb-0">
        <div class="container">
            <div style="z-index: 99999" class="row flex-wrap gy-2 align-items-center">
                <div class="col-md-6 col-sm-12">
                    <div class="content-section__column--primary w-100">
                        <h1 class="content-section__title ui heading size-heading_1">
                            We build immersive digital experiences.
                        </h1>
                        <div class="content-section__sub-section">
                            <a class="text-decoration-none text-white" href="#section-projects">
                                <div class="content-section__column--secondary">
                                    <p class="content-section__button ui text size-btn_text">
                                        Build Now
                                    </p>
                                    <img src="<?php echo e(asset('assets/front_assets/images/img_right_arrow_2.svg')); ?>"
                                        alt="right arrow image" class="column__image--right-arrow" />
                                </div>
                            </a>
                            <div class="content-section__column--tertiary">
                                <div class="content-section__divider"></div>
                                <div class="content-section__column--quaternary">
                                    <h2 class="content-section__subtitle ui heading size-headingmd">
                                        Let Us Tell Your Story
                                    </h2>
                                    <p class="content-section__description ui text size-textmd">
                                        The Creative agency for international and
                                        local brands
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="navigation align-items-lg-end align-items-sm-center w-100">
                        <div class="navigation__column--left">
                            <img src="<?php echo e(asset('assets/front_assets/images/img_arrow_left.svg')); ?>" alt="left arrow"
                                class="navigation__arrow--left" />
                        </div>
                        <div class="navigation__column--right">
                            <img src="<?php echo e(asset('assets/front_assets/images/img_arrow_left.svg')); ?>" alt="left arrow"
                                class="navigation__arrow--left" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
    </div>
    <div class="column_one pt-5 mt-5">
        <div class="column_seven">
            <img src="<?php echo e(asset('assets/front_assets/images/img_mask_group.png')); ?>" alt="image" class="image" />
        </div>
        <div class="row_five">
            <div class="row-four">
                
                
            </div>
        </div>
    </div>
    </div>
    <div class="slider-navigation">
        <div class="slider-navigation__controls--prev">
            <button class="slider-navigation__icon--prev">
                <img src="<?php echo e(asset('assets/front_assets/images/img_arrow_left.svg')); ?>" />
            </button>
            <p class="slider-navigation__text--prev ui text size-textlg">
                prev Slide
            </p>
        </div>
        <div class="slider-navigation__controls--next">
            <p class="slider-navigation__text--prev ui text size-textlg">
                Next Slide
            </p>
            <button class="slider-navigation__icon--next">
                <img src="<?php echo e(asset('assets/front_assets/images/img_arrow_right_blue_gray_100.svg')); ?>" />
            </button>
        </div>
    </div>
    <!-- Section-Projects -->
    <?php echo $__env->make('front.projects-section.projects', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Section-Projects -->
    <!-- Section-Clients -->
    <?php echo $__env->make('front.clients-section.clients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Section-Clients -->
    
    <?php echo $__env->make('front.leaderships.section-leadership', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/front/home/index.blade.php ENDPATH**/ ?>