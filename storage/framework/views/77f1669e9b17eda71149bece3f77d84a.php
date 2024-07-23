<?php $__env->startSection('title', __('Projects')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Projects')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Projects')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                
                <div class="float-left">
                    <a href="<?php echo e(route('projects.create')); ?>" class="btn btn-light-primary"><?php echo e(__('Create Project')); ?></a>
                </div>
                
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(__('Title')); ?></th>
                    <th><?php echo e(__('Created At')); ?></th>
                    <th><?php echo e(__('Images')); ?></th>
                    <th><?php echo e(__('Action')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($project->title); ?></td>

                        <td><?php echo e(\App\Facades\UtilityFacades::date_time_format($project->created_at)); ?></td>
                        <td>
                            <?php if($project->images && Storage::exists($project->images)): ?>
                                <img src="<?php echo e(Storage::url($project->images)); ?>" width="50" />
                            <?php else: ?>
                                <img src="<?php echo e(Storage::url('not-exists-data-images/350x250.png')); ?>" width="50" />
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo e(route('projects.show', $project->id)); ?>"
                                class="btn btn-success"><?php echo e(__('View')); ?></a>
                            <a href="<?php echo e(route('projects.edit', $project->id)); ?>"
                                class="btn btn-warning"><?php echo e(__('Edit')); ?></a>
                            <form action="<?php echo e(route('projects.destroy', $project->id)); ?>" method="POST"
                                style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger"><?php echo e(__('Delete')); ?></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($projects->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <?php echo $__env->make('layouts.includes.datatable-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <?php echo $__env->make('layouts.includes.datatable-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/project/index.blade.php ENDPATH**/ ?>