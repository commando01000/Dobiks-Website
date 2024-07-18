<span>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-faqs')): ?>
        <a class="btn btn-primary btn-sm" href="faqs/<?php echo e($faqs->id); ?>/edit"
            data-url="faqs/<?php echo e($faqs->id); ?>/edit" data-bs-toggle="tooltip" data-bs-placement="bottom"
            data-bs-original-title="<?php echo e(__('Edit')); ?>"><i class="ti ti-edit"></i></a>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-faqs')): ?>
        <?php echo Form::open([
            'method' => 'DELETE',
            'route' => ['faqs.destroy', $faqs->id],
            'id' => 'delete-form-' . $faqs->id,
            'class' => 'd-inline',
        ]); ?>

        <a href="#" class="btn btn-danger btn-sm show_confirm" id="delete-form-<?php echo e($faqs->id); ?>"
            data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Delete')); ?>"><i
                class="ti ti-trash mr-0"></i></a>
        <?php echo Form::close(); ?>

    <?php endif; ?>
</span>
<?php /**PATH D:\company\backend\resources\views/back/faqs/action.blade.php ENDPATH**/ ?>