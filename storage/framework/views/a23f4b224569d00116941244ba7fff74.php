

<?php $__env->startSection('title', __('Blogs')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Blogs')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Blogs')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                <div class="float-left">
                    <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-light-primary"><?php echo e(__('Create Blog')); ?></a>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(__('Title')); ?></th>
                    <th><?php echo e(__('Category')); ?></th>
                    <th><?php echo e(__('Created At')); ?></th>
                    <th><?php echo e(__('Images')); ?></th>
                    <th><?php echo e(__('Action')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($blog->getTranslation('title', app()->getLocale())); ?></td>
                        <td><?php echo e($blog->category->getTranslation('name', app()->getLocale())); ?></td>
                        <td><?php echo e(\App\Facades\UtilityFacades::date_time_format($blog->created_at)); ?></td>
                        <td>
                            <?php if($blog->images && Storage::exists($blog->images)): ?>
                                <img src="<?php echo e(Storage::url($blog->images)); ?>" width="50" />
                            <?php else: ?>
                                <img src="<?php echo e(Storage::url('not-exists-data-images/350x250.png')); ?>" width="50" />
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo e(route('blog.show', $blog->id)); ?>" class="btn btn-success"><?php echo e(__('View')); ?></a>
                            <a href="<?php echo e(route('blog.edit', $blog->id)); ?>" class="btn btn-warning"><?php echo e(__('Edit')); ?></a>
                            <form action="<?php echo e(route('blog.destroy', $blog->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger"><?php echo e(__('Delete')); ?></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($blogs->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <!-- Add your custom styles here -->
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <!-- Add your custom scripts here -->
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/back/blog/index.blade.php ENDPATH**/ ?>