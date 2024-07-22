<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-permission')): ?>
    <a class="btn btn-primary btn-sm edit-permission" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="bottom"
        title="" data-bs-original-title="<?php echo e(__('Edit')); ?>" id="edit-permission"
        data-action="permission/<?php echo e($permission->id); ?>/edit"><i class="ti ti-edit"></i></a>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-permission')): ?>
    <?php echo Form::open([
        'method' => 'DELETE',
        'route' => ['permission.destroy', $permission->id],
        'id' => 'delete-form-' . $permission->id,
        'class' => 'd-inline',
    ]); ?>

    <a href="#" class="btn btn-danger btn-sm show_confirm" data-bs-toggle="tooltip" data-bs-placement="bottom"
    data-bs-original-title="<?php echo e(__('Delete')); ?>" id="delete-form-<?php echo e($permission->id); ?>"><i
            class="ti ti-trash"></i></a>
    <?php echo Form::close(); ?>

<?php endif; ?>
<?php /**PATH D:\company\backend\resources\views/back/permission/action.blade.php ENDPATH**/ ?>