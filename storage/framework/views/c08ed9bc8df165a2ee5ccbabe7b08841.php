

<?php
    use Illuminate\Support\Str;
?>

<?php $__env->startSection('content'); ?>
    <section id="blog" class="w-100 mt-0 p-1 overflow-hidden">
        <div class="container-fluid">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Blog
                </h1>
                <small class="content-section__description fs-6">HOME / BLOG</small>
            </div>
            <div style="background-color: #191919" class="blog-content m-5 p-5 ms-0 ps-0 me-0 pe-0">
                <div class="container">
                    <div class="row gy-4">
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
                    <div class="mt-4">
                        <?php echo e($allBlogs->links()); ?> <!-- Pagination links -->
                    </div>
                </div>
            </div>
        </div>
        
        
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/blog/view-all-blogs.blade.php ENDPATH**/ ?>