<?php $__env->startSection('title', __('Edit Slider')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Edit Slider')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('sliders.index')); ?>"><?php echo e(__('Slider')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Edit Slider')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="section-body">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><?php echo e(__('Edit Slider')); ?></h5>
                    </div>
                    <?php echo Form::model($slider, [
                        'route' => ['sliders.update', $slider->id],
                        'method' => 'PUT',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]); ?>

                    <div class="card-body">
                        <div class="row">


                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('body', __('Title'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::text('title', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter title'),
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('image', __('Image'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::file('image', ['class' => 'form-control', 'required' => 'required']); ?>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            <?php echo Html::link(route('sliders.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                            <?php echo e(Form::button(__('Update'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/slider/edit.blade.php ENDPATH**/ ?>