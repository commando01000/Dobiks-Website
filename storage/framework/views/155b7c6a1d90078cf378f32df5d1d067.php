<?php $__env->startSection('title', 'Create Category'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Edit Category')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('client-category.index')); ?>"><?php echo e(__('Project Category')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Edit Category')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-6 col-lg-8 col-sm-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h5><?php echo e(__('Edit Category')); ?></h5>
                    <?php echo Form::model($category, [
                        'route' => ['client-category.update', $category->id],
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
                        <?php echo e(Form::label('status', __('Status'), ['class' => 'form-label'])); ?>

                        <?php echo Form::select('status', ['1' => 'Active', '0' => 'Deactive'], $category->status, [
                            'class' => 'form-select',
                            'data-trigger',
                        ]); ?>

                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        <?php echo Html::link(route('project-category.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                        <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/client-category/edit.blade.php ENDPATH**/ ?>