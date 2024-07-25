<?php $__env->startSection('title', __('Create Faq')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Create Faq')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), ['']); ?></li>
            <li class="breadcrumb-item"><?php echo Html::link(route('faqs.index'), __('Faqs'), ['']); ?></li>
            <li class="breadcrumb-item"><?php echo e(__('Create Faq')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="section-body">
            <div class="col-md-6 m-auto">
                <div class="card ">
                    <div class="card-header">
                        <h5> <?php echo e(__('Create Faq')); ?></h5>
                    </div>
                    <?php echo Form::open(['route' => 'faqs.store', 'method' => 'Post', 'data-validate']); ?>

                    <?php $__currentLoopData = $allLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card-body">
                            <div class="row mb-5 p-3  rounded-3" style="background-color: rgb(235, 233, 233) !important">
                                <div class="col-sm-12">
                                    <h4><?php echo e($language); ?></h4>
                                </div>
                                <div class="form-group ">
                                    <?php echo e(Form::label('questions', __('questions'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::text('questions_' . $localeCode, null, [
                                        'class' => 'form-control',
                                        ' required',
                                        'placeholder' => __('Enter questions'),
                                    ]); ?>

                                </div>
                                <div class="form-group">
                                    <?php echo e(Form::label('answer', __('Answer'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::textarea('answer_' . $localeCode, null, [
                                        'class' => 'form-control',
                                        'data-trigger',
                                        'required',
                                        'placeholder' => __('Enter answer Address'),
                                    ]); ?>

                                </div>
                                <?php if($localeCode == 'en'): ?>
                                    <div class="form-group">
                                        <?php echo e(Form::label('order', __('Order'), ['class' => 'form-label'])); ?>

                                        <?php echo Form::number('order', null, ['placeholder' => __('Enter order'), 'class' => 'form-control', 'required']); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/faqs/create.blade.php ENDPATH**/ ?>