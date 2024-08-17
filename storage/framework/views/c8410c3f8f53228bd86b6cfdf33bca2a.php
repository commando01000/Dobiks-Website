    

    <!-- start team section -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="big-head">
                        <span>our team</span>
                        <p>meet our</p>
                        <h2>leadership</h2>
                    </div>
                    <div class="btn main-btn mx-0">
                        <span>view all leadership</span>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row align-items-center">
                        <?php $__currentLoopData = $leaderships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leadership): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-4">
                                <img class="img-fluid w-100 <?php if($loop->index % 2 != 0): ?> pt-4 <?php endif; ?>"
                                    src="<?php echo e(Storage::url($leadership->photo)); ?>" alt="leadership">
                                <div class="text-center mt-3">
                                    <p class="fs-5"><?php echo e($leadership->name); ?></p>
                                    <span class="text-small text-light-gray"><?php echo e($leadership->position); ?></span>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end team section -->
<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/leaderships/section-leadership.blade.php ENDPATH**/ ?>