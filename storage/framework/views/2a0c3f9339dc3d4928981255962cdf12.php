


<?php $__env->startSection('content'); ?>
    <section id="blog-details" class="w-100 mt-0 p-1 overflow-hidden">
        <div class="container-fluid">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Creating a Relaxing Oasis
                </h1>
                <small class="content-section__description fs-6">HOME / BLOG DETAILS</small>
            </div>
            <div class="blog-content w-100">
                <div class="row m-auto mt-5 w-75 pt-5">
                    <div class="col-md-8">
                        <h1 class="content-section__title fs-5">
                            Creating a Relaxing Oasis: Tips for…
                        </h1>
                        <small class="content-section__description fs-6">Admin 18 Feb, 2023</small>
                        <br>
                        <div class="blog-detail w-100">
                            <img class="w-100 pt-5" src="<?php echo e(asset('assets/front_assets/images/oasis.png')); ?>"
                                alt="blog image">
                            <div class="blog-text">
                                <br>
                                <p class="fs-6 content-section__description">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work.

                                </p>
                                <p class="fs-6 content-section__description">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work.
                                </p>
                                <br>
                            </div>
                        </div>
                        <div class="blog-detail w-100">
                            <div class="block-images d-flex flex-row flex-nowrap">
                                <img class="w-50 pt-3" src="<?php echo e(asset('assets/front_assets/images/img_rectangle_4.png')); ?>"
                                    alt="blog image">
                                <img class="w-50 pt-3" src="<?php echo e(asset('assets/front_assets/images/img_rectangle_6.png')); ?>"
                                    alt="blog image">
                            </div>
                            <br>
                            <div class="blog-text">
                                <p class="fs-6 content-section__description">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work.

                                </p>
                                <p class="fs-6 content-section__description">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work.
                                </p>
                                <br>
                            </div>
                        </div>
                        <div class="blog-detail w-100">
                            <br>
                            <div class="w-100">
                                <div class="text-center quote-container">
                                    <span class="quote"></span>
                                    
                                </div>
                            </div>
                            <div class="blog-text">
                                <p class="fs-4 content-section__subtitle ui heading size-headingmd text-white">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work

                                </p>
                                <img class="w-100 pt-3" src="<?php echo e(asset('assets/front_assets/images/oasis_width.png')); ?>"
                                    alt="blog image">
                                <br>
                                <br>
                                <p class="fs-6 content-section__description">
                                    An interior design agency can create content that showcases its work, highlights design
                                    trends, and provides educational resources for clients and followers. Some potential
                                    content ideas for an interior design agency. An interior design agency can create
                                    content that showcases its work.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h1 style="line-height: 65px !important" class="content-section__title fs-4">Similar Post</h1>
                        <div class="row gy-5">
                            <?php $__currentLoopData = $allBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-12">
                                    <div style="min-height: 345px" class="card p-5">
                                        <div class="card-body">
                                            <p class="w-75 fs-6 content-section__subtitle ui heading size-headingmd">
                                                <?php echo e($blog->category->getTranslation('name', app()->getLocale())); ?>:
                                                <?php echo e($blog->getTranslation('title', app()->getLocale())); ?>

                                            </p>
                                            <br>
                                            <div style="height: 3px" class="section__divider"></div>
                                            <br>
                                            <p class="w-100 fs-6 content-section__description">
                                                <?php echo e($blog->getTranslation('short_description', app()->getLocale())); ?></p>
                                            </p>
                                            <br>
                                            <p>Learn more <a class="arrow"
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
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/blog/view-blog.blade.php ENDPATH**/ ?>