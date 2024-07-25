<?php $__env->startSection('title', __('Edit Faq')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <div class="previous-next-btn">
                <div class="page-header-title">
                    <h4 class="m-b-10"><?php echo e(__('Edit Faq')); ?></h4>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), ['']); ?></li>
                    <li class="breadcrumb-item"><?php echo Html::link(route('faqs.index'), __('Faqs'), ['']); ?></li>
                    <li class="breadcrumb-item"><?php echo e(__('Edit Faq')); ?></li>
                </ul>
            </div>
            <div class="float-end">
                <div class="d-flex align-items-center">
                    <a href="<?php if(!empty($previous)): ?> <?php echo e(route('faqs.edit', [$previous->id])); ?><?php else: ?> javascript:void(0) <?php endif; ?>"
                        type="button" class="btn btn-outline-primary"><i class="me-2"
                            data-feather="chevrons-left"></i>Previous</a>
                    <a href="<?php if(!empty($next)): ?> <?php echo e(route('faqs.edit', [$next->id])); ?><?php else: ?> javascript:void(0) <?php endif; ?>"
                        class="btn btn-outline-primary ms-1"><i class="me-2" data-feather="chevrons-right"></i>Next</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="section-body">
            <div class="col-md-6 m-auto">
                <div class="card ">
                    <div class="card-header">
                        <h5> <?php echo e(__('Edit Faq')); ?></h5>
                    </div>
                    <?php echo Form::model($faq, [
                        'route' => ['faqs.update', $faq->id],
                        'method' => 'Put',
                        'data-validate',
                    ]); ?>

                    <div class="card-body">
                        <div class="form-group">
                            <?php echo e(Form::label('questions', __('questions'), ['class' => 'form-label'])); ?>

                            <?php echo Form::text('questions', null, ['class' => 'form-control', ' required', 'placeholder' => __('Enter questions')]); ?>

                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label('answer', __('Answer'), ['class' => 'form-label'])); ?>

                            <?php echo Form::textarea('answer', null, [
                                'class' => 'form-control',
                                'data-trigger',
                                'required',
                                'placeholder' => __('Enter answer Address'),
                            ]); ?>

                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label('order', __('Order'), ['class' => 'form-label'])); ?>

                            <?php echo Form::number('order', null, ['placeholder' => __('Enter order'), 'class' => 'form-control', 'required']); ?>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-flt float-end mb-3">
                            <?php echo Html::link(route('faqs.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                            <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/faqs/edit.blade.php ENDPATH**/ ?>