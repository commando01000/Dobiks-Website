<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-testimonial')): ?>
<a class="btn btn-primary btn-sm" href="<?php echo e(route('testimonial.edit', $row->id)); ?>"
    data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="<?php echo e(__('Edit')); ?>"
    aria-label="<?php echo e(__('Edit')); ?>"><i class="ti ti-edit"></i></a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-testimonial')): ?>
<?php echo Form::open([
    'method' => 'DELETE',
    'class' => 'd-inline',
    'route' => ['testimonial.destroy', $row->id],
    'id' => 'delete-form-' . $row->id,
]); ?>

<a href="#" class="btn btn-danger btn-sm show_confirm" data-bs-toggle="tooltip"
    data-bs-placement="bottom" title="" id="delete-form-1" data-bs-original-title="<?php echo e(__('Delete')); ?>"
    aria-label="<?php echo e(__('Delete')); ?>"><i class="ti ti-trash"></i></a>
<?php echo Form::close(); ?>

<?php endif; ?>

<?php /**PATH D:\company\backend\resources\views/back/testimonials/action.blade.php ENDPATH**/ ?>