
<?php $__env->startSection('title', __('Categories')); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h4 class="m-b-10"><?php echo e(__('Blog Categories')); ?></h4>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <?php echo Html::link(route('home'), __('Dashboard'), ['']); ?>

                        </li>
                        <li class="breadcrumb-item active"><?php echo e(__('Blog Categories')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <?php echo e($dataTable->table(['width' => '100%'])); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <?php echo $__env->make('layouts.includes.datatable-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <?php echo $__env->make('layouts.includes.datatable-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo e($dataTable->scripts()); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/back/blog-category/index.blade.php ENDPATH**/ ?>