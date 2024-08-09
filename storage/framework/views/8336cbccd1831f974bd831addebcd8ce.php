<?php $__env->startSection('title', 'Services Details' ); ?>
<?php $__env->startSection('content'); ?>
    <section id="services" class="w-100 mt-0 p-1 overflow-hidden">
        <main class="container-fluid ps-0 pe-0">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    <?php echo e($service->title); ?>

                </h1>
                <small class="content-section__description fs-6">HOME / SERVICES DETAILS</small>
            </div>

            <div class="service-details m-5 p-5">
                <div class="container-fluid">
                    <div style="width: 80% !important" class="row m-auto d-flex justify-content-between">
                        <div class="col-md-6">
                            <div class="title">
                                <h1 class="content-section__title fs-4"><?php echo e($service->category->name); ?></h1>
                            </div>
                            <br>
                            <div class="description">
                                <p class="content-section__description fs-6">
                                    <?php echo e($service->short_description); ?>

                                </p>
                                <br>
                                <div class="service-detail content-section__description fs-6 w-100">
                                    <?php
                                    $var = html_entity_decode($service->description);

                                    echo $var;

                                    ?>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="service-image text-end">
                                <?php if($service->emdlink != null): ?>
                                <?php
                                $var = html_entity_decode($service->emdlink);

                                echo $var;
                                ?>
                                <?php else: ?>
                                <img class="img-fluid" src="<?php echo e(Storage::url($service->cover)); ?>" alt="<?php echo e($service->title); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('front.services.services-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        </main>
    </section>

    <?php echo $__env->make('front.clients-section.clients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section id="section-contact-us" class="section p-1">
        <main class="container-fluid">
            <?php echo $__env->make('front.contact.contact-us-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </main>
    </section>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\al shrouk academy\radwa\furniture project\Dashboard\resources\views/front/services/view-service.blade.php ENDPATH**/ ?>
