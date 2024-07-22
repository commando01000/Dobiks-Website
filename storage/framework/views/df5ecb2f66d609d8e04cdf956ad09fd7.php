<?php $__env->startSection('title', 'Edit Permission'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Edit Permission')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('permission.index')); ?>"><?php echo e(__('permissions')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Edit Permission')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-6 col-lg-8 col-sm-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <?php echo Form::model($permission, [
                        'route' => ['permission.update', $permission->id],
                        'method' => 'Put',
                    ]); ?>

                </div>
                <div class="card-body">
                    <div class="form-group">

                        <?php echo e(Form::label('name', __('Enter first name'), ['class' => 'form-label'])); ?>

                        <?php echo e(Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Name'])); ?>


                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        <?php echo e(Form::button(__('Cancel'), ['class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal'])); ?>

                        <?php echo Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']); ?>

                    </div>
                </div>
                <?php echo Form::close(); ?>




            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/permission/edit.blade.php ENDPATH**/ ?>