<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-blog')): ?>
    <a class="btn btn-sm small btn btn-primary" href="/cp/blog/<?php echo e($blog->id); ?>/edit" data-bs-toggle="tooltip"
        data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Edit')); ?>"><i class="ti ti-edit text-white"></i>
    </a>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-blog')): ?>
    <?php echo Form::open([
        'method' => 'DELETE',
        'class' => 'd-inline',
        'route' => ['blog.destroy', $blog->id],
        'id' => 'delete-form-' . $blog->id,
    ]); ?>

    <a href="#" class="btn btn-sm small btn btn-danger show_confirm" data-bs-toggle="tooltip" data-bs-placement="bottom"
        id="delete-form-1" data-bs-original-title="<?php echo e(__('Delete')); ?>"><i class="ti ti-trash text-white"></i>
    </a>
    <?php echo Form::close(); ?>

<?php endif; ?>
<?php /**PATH D:\company\backend\resources\views/back/blog/action.blade.php ENDPATH**/ ?>