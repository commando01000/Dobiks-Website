

<?php $__env->startSection('title', __('Blog Categories')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Blog Categories')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Blog Categories')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                <?php if(Auth::user()->can('create-category')): ?>
                    <div class="float-left">
                        <a href="<?php echo e(route('blog-category.create')); ?>" class="btn btn-light-primary"><?php echo e(__('Create Category')); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(__('Name')); ?></th>
                    <th><?php echo e(__('Created At')); ?></th>
                    <th><?php echo e(__('Action')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($category->getTranslation('name', app()->getLocale())); ?></td>
                        <td><?php echo e(\App\Facades\UtilityFacades::date_time_format($category->created_at)); ?></td>
                        <td>
                            <a href="<?php echo e(route('blog-category.edit', $category->id)); ?>" class="btn btn-warning"><?php echo e(__('Edit')); ?></a>
                            <form action="<?php echo e(route('blog-category.destroy', $category->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger"><?php echo e(__('Delete')); ?></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($categories->links()); ?>

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/back/blog-category/index.blade.php ENDPATH**/ ?>