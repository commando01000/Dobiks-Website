<?php $__env->startSection('title', 'Our clients'); ?>

<?php $__env->startSection('content'); ?>
<section id="our-clients" class="w-100 mt-0 p-1">
    <main class="container-fluid">
        <div class="section__header pt-3 pb-1 justify-content-center align-items-center">
            <h1 class="content-section__title ui heading size-heading_1">
                Our clients
            </h1>
            <small class="content-section__description fs-6">HOME / OURCLIENTS</small>
        </div>
    </main>
</section>
<?php echo $__env->make('front.clients-section.clients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/front/our-clients/index.blade.php ENDPATH**/ ?>