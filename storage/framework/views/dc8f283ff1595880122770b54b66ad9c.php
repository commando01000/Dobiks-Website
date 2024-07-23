
<?php $__env->startSection('title', __('Clients')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Clients')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Clients')); ?></li>
        </ul>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                
                <div class="float-left">
                    <a href="<?php echo e(route('customer.create')); ?>" class="btn btn-light-primary"><?php echo e(__('Create client')); ?></a>
                </div>
                
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th title="Name"><?php echo e(__('name')); ?></th>
                    <th title="Role"><?php echo e(__('cover')); ?></th>
                    
                    <th><?php echo e(__('Action')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr role="row" class="odd">
                        <td class="sorting_1"><?php echo e($client->name); ?></td>

                        <td>
                            <?php if($client->cover): ?>
                                <img src="<?php echo e(Storage::url($client->cover)); ?>" style="width:60px;">
                            <?php else: ?>
                                <img src="<?php echo e(Storage::url('not-exists-data-images/350x250.png')); ?>" style="width:60px;">
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($client->category->name); ?></td>

                        <td>
                            <div class="text-left">
                                <a href="<?php echo e(route('customer.show', $client->id)); ?>"
                                    class="btn btn-light-success btn-sm"><?php echo e(__('View')); ?></a>
                                <a href="<?php echo e(route('customer.edit', $client->id)); ?>"
                                    class="btn btn-light-primary btn-sm"><?php echo e(__('Edit')); ?></a>
                                <a href="<?php echo e(route('customer.destroy', $client->id)); ?>"
                                    class="btn btn-light-danger btn-sm"><?php echo e(__('Delete')); ?></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($clients->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <?php echo $__env->make('layouts.includes.datatable-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/client/index.blade.php ENDPATH**/ ?>