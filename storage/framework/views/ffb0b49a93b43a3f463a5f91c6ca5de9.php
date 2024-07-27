<?php $__env->startSection('title', 'Our Team' ); ?>

<?php $__env->startSection('content'); ?>
    <section class="meet-our-leadership p-5 m-5">
        <div class="container">
            <div class="section__header">
                <div class="section__header-row">
                    <p class="section__title ui text size-btn_text">Our Team</p>
                    <div class="section__divider"></div>
                </div>
                <h2 class="w-100 section-projects__title ui heading size-headinglg">
                    Meet Our
                </h2>
                <h3 class="w-100 section-projects__title ui heading size-headinglg">
                    Leadership
                </h3>
            </div>
            <div class="row mt-5">
                <?php $__currentLoopData = $leaderships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leadership): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <a href="<?php echo e(route('team-details', $leadership->id)); ?>" class="user-profile"
                            style="cursor: pointer;">
                            <img src="<?php echo e(Storage::url($leadership->photo)); ?>" alt="profile image"
                                class="user-profile__image <?php if($loop->index % 2 != 0): ?> pt-4 <?php endif; ?>">
                            <p class="user-profile__name ui text size-textxl">
                                <?php echo e($leadership->name); ?>

                            </p>
                            <p class="user-profile__role ui text size-texts">
                                <?php echo e($leadership->position); ?>

                            </p>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="paginator mt-3">
                    <?php echo e($leaderships->links('front.pagination.custom-pagination')); ?>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/front/leaderships/index.blade.php ENDPATH**/ ?>