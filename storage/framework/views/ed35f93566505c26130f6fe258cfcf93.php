<?php $__env->startSection('title', __('Slider')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Slider')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Slider')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="card-header">
                    <h5><?php echo e(__('Slider')); ?></h5>
                    <a href="<?php echo e(route('sliders.create')); ?>" class="btn btn-primary float-right"><?php echo e(__('Create Image')); ?></a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th><?php echo e(__('Title')); ?></th>
                                <th><?php echo e(__('Image')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($slider->title); ?></td>
                                    <td> <img src="<?php echo e(Storage::url($slider->image)); ?>" width="100px" height="100px" alt="<?php echo e($slider->title); ?>"></td>
                                    <td>
                                        <a href="<?php echo e(route('sliders.edit', $slider->id)); ?>"
                                            class="btn btn-warning btn-sm"><?php echo e(__('Edit')); ?></a>
                                        <form action="<?php echo e(route('sliders.destroy', $slider->id)); ?>" method="POST"
                                            style="display:inline;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit"
                                                class="btn btn-danger btn-sm"><?php echo e(__('Delete')); ?></button>
                                        </form>
                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/slider/index.blade.php ENDPATH**/ ?>