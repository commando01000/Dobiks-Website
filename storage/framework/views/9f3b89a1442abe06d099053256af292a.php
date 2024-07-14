

<?php $__env->startSection('title', 'Services'); ?>
<?php $__env->startSection('content'); ?>
    <section id="services" class="w-100 mt-0 p-1">
        <main class="container-fluid">
            <div class="section__header pt-3 pb-1 justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Services
                </h1>
                <small class="content-section__description fs-6">HOME / SERVICES</small>
            </div>
            <?php echo $__env->make('front.projects-section.projects', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </main>
    </section>
    <?php echo $__env->make('front.clients-section.clients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/front/services/index.blade.php ENDPATH**/ ?>