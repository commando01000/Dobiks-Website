<?php
$users = \Auth::user();
$currantLang = $users->currentLanguage();
?>

<?php $__env->startSection('title', 'Create Language'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Create Language')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><?php echo Html::link(route('manage.language', [$currantLang]),__('Languages'),[]); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Create Language')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php echo Form::open([
            'route' => ['store.language'],
            'method' => 'POST',
            'class' => 'form-horizontal',
            'data-validate',
        ]); ?>

        <div class="row">
            <div class="mx-auto col-xl-4 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <h5><?php echo e(__('Create Language')); ?></h5>
                    </div>
                    <div class="card-body">
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('code', __('Language Code'), ['class' => 'form-label'])); ?>

                                        <?php echo e(Form::text('code', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter language code'])); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-end">
                            <?php echo Html::link(route('manage.language', [$currantLang]),__('Cancel'),['class'=>'btn btn-secondary mr-1']); ?>

                            <?php echo Form::button(__('Save'), ['type' => 'submit','class' => 'btn btn-primary']); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/lang/create.blade.php ENDPATH**/ ?>