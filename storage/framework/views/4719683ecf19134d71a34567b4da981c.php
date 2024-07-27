<?php $__env->startSection('title', 'Privacy & Policy'); ?>


<?php $__env->startSection('content'); ?>
    <section id="privacy-policy" class="w-100 mt-0 p-1">
        <main class="container-fluid ps-0 pe-0">
            <div class="section__header pt-3 pb-1 justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Privacy & Policy
                </h1>
                <small class="content-section__description fs-6">HOME / PRIVACY & POLICY</small>
            </div>
            <div style="background-color: #191919;max-width: 100% !important" id="privacy-policy-content"
                class="privacy-policy w-100 mt-5 pt-5 pb-5 p-1 overflow-hidden text-white" >

                <?php
                $var = html_entity_decode(Utility::getsettings('privacy_description'));

                echo $var;

                ?>

            </div>
        </main>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/front/policy/index.blade.php ENDPATH**/ ?>