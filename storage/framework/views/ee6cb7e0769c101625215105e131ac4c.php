
<?php $__env->startSection('title', __('Join Us')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Join Us')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Join Us')); ?></li>
        </ul>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th title="#"><?php echo e(__('DT_RowIndex')); ?></th>
                    <th title="Name"><?php echo e(__('Name')); ?></th>
                    <th title="Email"><?php echo e(__('Email')); ?></th>
                    
                    <th title="Phone"><?php echo e(__('Phone')); ?></th>
                    <th title="Job Title"><?php echo e(__('Job Title')); ?></th>
                    <th title="Created At"><?php echo e(__('Created At')); ?></th>
                    <th><?php echo e(__('Action')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $joins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $join): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr role="row" class="odd">
                        <td class="sorting_1"><?php echo e($join->id); ?></td>

                        <td><?php echo e($join->name); ?></td>
                        <td><?php echo e($join->email); ?></td>
                        
                        <td><?php echo e($join->phone); ?></td>
                        <td><?php echo e($join->job_title); ?></td>
                        <td><?php echo e($join->created_at); ?></td>

                        <td>
                            <div class="text-left">
                                <a href="<?php echo e(route('join.edit', $join->id)); ?>"
                                    class="btn btn-light-primary btn-sm"><?php echo e(__('Edit')); ?></a>

                                <form action="<?php echo e(route('join.destroy', $join->id)); ?>" method="POST"
                                    style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger"><?php echo e(__('Delete')); ?></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($joins->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <?php echo $__env->make('layouts.includes.datatable-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/joinUs/index.blade.php ENDPATH**/ ?>