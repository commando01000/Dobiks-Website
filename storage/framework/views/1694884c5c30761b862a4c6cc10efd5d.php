<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-project')): ?>
    <?php if($project->builder == 'on'): ?>
    <a class="btn btn-sm small btn btn-primary" target="_blank" href="<?php echo e(route('builder.index', ['id' => $project->id, 'db' => 'projects'])); ?>" data-bs-toggle="tooltip"
       data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Builder')); ?>">
        <i class="ti ti-palette text-white"></i>
    </a>
    <?php endif; ?>
    <a class="btn btn-sm small btn btn-primary" href="projects/<?php echo e($project->id); ?>/edit" data-bs-toggle="tooltip"
        data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Edit')); ?>"><i class="ti ti-edit text-white"></i>
    </a>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-project')): ?>
    <?php echo Form::open([
        'method' => 'DELETE',
        'class' => 'd-inline',
        'route' => ['projects.destroy', $project->id],
        'id' => 'delete-form-' . $project->id,
    ]); ?>

    <a href="#" class="btn btn-sm small btn btn-danger show_confirm" data-bs-toggle="tooltip" data-bs-placement="bottom"
        id="delete-form-1" data-bs-original-title="<?php echo e(__('Delete')); ?>"><i class="ti ti-trash text-white"></i>
    </a>
    <?php echo Form::close(); ?>

<?php endif; ?>
<?php /**PATH D:\company\backend\resources\views/back/project/action.blade.php ENDPATH**/ ?>