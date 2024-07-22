<?php $__env->startSection('title', __('Permissions')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Permissions')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><?php echo Html::link(route('roles.index'), __('Roles'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo $__env->yieldContent('title'); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="mx-auto col-md-12">
                <div class="card responsive-card">
                    <div class="card-header">
                        <h5><?php echo e(__('All Permissions')); ?></h5>
                    </div>
                    <?php echo Form::open([
                        'route' => ['roles.permit', $role->id],
                        'method' => 'Post',
                        'class' => 'form-horizontal',
                        'data-validate',
                    ]); ?>

                    <div class="card-body responive-body">
                        <table class="table table-flush permission-table">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('Module')); ?></th>
                                    <th><?php echo e(__('Permissions')); ?></th>
                                </tr>
                            </thead>
                            <tbody class="mb-2">
                                <?php $__currentLoopData = $allmodules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($module != 'module'): ?>
                                        <tr>
                                            <td> <?php echo e(__(ucfirst($module))); ?></td>
                                            <td>
                                                <div class="row">
                                                    <?php
                                                    $default_permissions = ['manage', 'create', 'edit', 'delete', 'view', 'impersonate', 'fill', 'design', 'show', 'download', 'duplicate','theme-setting', 'integration', 'payment', 'result', 'vote' ,'export' , 'dashboard-qrcode','phoneverified','emailverified','document-generate'];
                                                    ?>
                                                    <?php $__currentLoopData = $default_permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if(in_array($permission . '-' . $module, $allpermissions)): ?>
                                                            <?php ($key = array_search($permission . '-' . $module, $allpermissions)); ?>
                                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 form-check">
                                                                <?php echo e(Form::checkbox('permissions[]', $key, in_array($permission . '-' . $module, $permissions), ['class' => 'form-check-input', 'id' => 'permission_' . $key])); ?>

                                                                <?php echo e(Form::label('permission_' . $key, ucfirst($permission), ['class' => 'form-check-label'])); ?>

                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <?php echo Html::link(route('roles.index'), __('Cancel'), [
                                'class' => 'btn btn-secondary',
                            ]); ?>

                            <?php echo Form::button(__('Save'), ['type' => 'submit','class' => 'btn btn-primary']); ?>

                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/roles/show.blade.php ENDPATH**/ ?>