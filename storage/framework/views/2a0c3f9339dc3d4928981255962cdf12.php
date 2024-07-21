

<?php
    use Illuminate\Support\Str;
?>

<?php $__env->startSection('content'); ?>
    <section id="blog-details" class="w-100 mt-0 p-1 overflow-hidden">
        <div class="container-fluid">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    <?php echo e($blog->title); ?>

                </h1>
                <small class="content-section__description fs-6">HOME / BLOG DETAILS / <?php echo e($blog_category->name); ?></small>
            </div>
            <div class="blog-content w-100">
                <div class="row m-auto mt-5 w-75 pt-5">
                    <div class="col-md-8">
                        <h1 class="content-section__title fs-5">
                            <?php echo e(Str::limit($blog->getTranslation('title', app()->getLocale()), 45)); ?><?php echo e(Str::limit($blog->getTranslation('short_description', app()->getLocale()), 45)); ?>

                        </h1>
                        <small class="content-section__description fs-6"><?php echo e($blog->created_at->format('jS F Y')); ?></small>
                        <br>
                        <div class="blog-detail w-100">


                            <?php
                            $var = html_entity_decode($blog->description);
                            
                            echo $var;
                            
                            ?>

                        </div>
                        <div style="width: 100%" class="section__divider"></div>

                        <div class="footer__stack__row__eight__row__link-row">
                            <span style="line-height: 30px" class="content-section__description fs-6">Social Share :</span>
                            <a href="<?php echo e(Utility::getsettings('contact_facebook')); ?>"
                                class="footer__social-button--facebook">
                                <img src="http://127.0.0.1:8000/assets/front_assets/images/img_facebook_app_symbol.svg">
                            </a>
                            <a href="<?php echo e(Utility::getsettings('contact_instagram')); ?>" class="footer__link-button--link">
                                <img src="http://127.0.0.1:8000/assets/front_assets/images/img_link.svg">
                            </a>
                            <a href="<?php echo e(Utility::getsettings('contact_twitter')); ?>" class="footer__link-button--link">
                                <img src="http://127.0.0.1:8000/assets/front_assets/images/img_trash.svg">
                            </a>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <h1 style="line-height: 65px !important" class="content-section__title fs-4">Similar Post</h1>
                        <div class="row gy-5">
                            <?php $__currentLoopData = $allBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-12">
                                    <div style="min-height: 350px; max-height: 350px" class="card p-5">
                                        <div class="card-body">
                                            <p class="w-75 fs-6 content-section__subtitle ui heading size-headingmd">
                                                <?php echo e($blog->category->getTranslation('name', app()->getLocale())); ?>:
                                                <?php echo e(Str::limit($blog->getTranslation('title', app()->getLocale()), 45)); ?>

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
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('front.projects-section.projects', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/blog/view-blog.blade.php ENDPATH**/ ?>