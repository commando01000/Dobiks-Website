<a class="btn btn-sm small btn btn-primary" href="<?php echo e(route('join.edit', $join->id)); ?>" data-bs-toggle="tooltip"
   data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Edit')); ?>">
    <i class="ti ti-edit text-white"></i>
</a>

    <?php echo Form::open([
        'method' => 'DELETE',
        'class' => 'd-inline',
        'route' => ['join.destroy', $join->id],
        'id' => 'delete-form-' . $join->id,
    ]); ?>

    <a href="#" class="btn btn-sm small btn btn-danger show_confirm" data-bs-toggle="tooltip" data-bs-placement="bottom"
       id="delete-form-1" data-bs-original-title="<?php echo e(__('Delete')); ?>">
        <i class="ti ti-trash text-white"></i>
    </a>
    <?php echo Form::close(); ?>

<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/back/joinUs/action.blade.php ENDPATH**/ ?>