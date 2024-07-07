
    <?php if($client->builder == 'on'): ?>
    <a class="btn btn-sm small btn btn-primary" target="_blank" href="<?php echo e(route('builder.index', ['id' => $client->id, 'db' => 'client'])); ?>" data-bs-toggle="tooltip"
       data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Builder')); ?>">
        <i class="ti ti-palette text-white"></i>
    </a>
    <?php endif; ?>
    <a class="btn btn-sm small btn btn-primary" href="client/<?php echo e($client->id); ?>/edit" data-bs-toggle="tooltip"
        data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Edit')); ?>"><i class="ti ti-edit text-white"></i>
    </a>


    <?php echo Form::open([
        'method' => 'DELETE',
        'class' => 'd-inline',
        'route' => ['client.destroy', $client->id],
        'id' => 'delete-form-' . $client->id,
    ]); ?>

    <a href="#" class="btn btn-sm small btn btn-danger show_confirm" data-bs-toggle="tooltip" data-bs-placement="bottom"
        id="delete-form-1" data-bs-original-title="<?php echo e(__('Delete')); ?>"><i class="ti ti-trash text-white"></i>
    </a>
    <?php echo Form::close(); ?>


<?php /**PATH D:\company\backend\resources\views/back/Clients/action.blade.php ENDPATH**/ ?>