<?php $__env->startSection('title', 'Edit CV'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Edit CV')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('join.index')); ?>"><?php echo e(__('CV')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Edit CV')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-6 col-lg-8 col-sm-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h5><?php echo e(__('Edit CV')); ?></h5>
                    <?php echo Form::model($join, [
                        'route' => ['join.update', $join->id],
                        'method' => 'PUT',
                        'data-validate',
                    ]); ?>

                </div>
                <div class="card-body">
                    <div class="form-group">
                        <?php echo e(Form::label('name', __('Name'), ['class' => 'form-label'])); ?>

                        <?php echo Form::text('name', null, ['placeholder' => __('Enter name'), 'class' => 'form-control', 'required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('email', __('Email'), ['class' => 'form-label'])); ?>

                        <?php echo Form::text('email', null, ['placeholder' => __('Enter Email'), 'class' => 'form-control', 'required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('name', __('Address'), ['class' => 'form-label'])); ?>

                        <?php echo Form::text('address', null, ['placeholder' => __('Enter Address'), 'class' => 'form-control', 'required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('phone', __('Phone'), ['class' => 'form-label'])); ?>

                        <?php echo Form::text('phone', null, ['placeholder' => __('Enter Phone'), 'class' => 'form-control', 'required']); ?>

                    </div>

                </div>
                <div class="card-footer">
                    <div class="text-end">
                        <?php echo Html::link(route('join.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                        <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/joinUs/edit.blade.php ENDPATH**/ ?>