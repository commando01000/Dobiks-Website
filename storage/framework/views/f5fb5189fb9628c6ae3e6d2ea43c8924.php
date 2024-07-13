<?php $__env->startSection('title', __('Users')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Users')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Users')); ?></li>
        </ul>
        <div class="float-end">
            <div class="d-flex align-items-center">

                <a class="btn btn-default buttons-create btn-light-primary no-corner me-1 add-user" tabindex="0" aria-controls="users-table" href="#"><span><i class="ti ti-plus"></i><?php echo e(__('Create')); ?></span></a>
                <a class="btn btn-default btn-light-primary no-corner me-1" href="<?php echo e(route('grid.view','view')); ?>" data-bs-toggle="tooltip" title="<?php echo e(__('Grid View')); ?>"
                   class="btn btn-sm btn-primary" data-bs-placement="bottom">
                    <i class="ti ti-layout-grid"></i>
                </a>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <div id="users-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="dataTable-container">
                            <div class="col-sm-12">
                                <table class="table dataTable no-footer" id="users-table" width="100%" role="grid" aria-describedby="users-table_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th title="Name" ><?php echo e(__('Name')); ?></th>
                                            <th title="Email"><?php echo e(__('Email')); ?></th>
                                            <th title="Role"><?php echo e(__('Role')); ?></th>
                                            <th title="Action" width="120" class="text-end sorting_disabled"><?php echo e(__('Action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?php echo e($user->name); ?></td>
                                            <td><?php echo e($user->email); ?></td>
                                            <td><span class="p-2 px-3 badge rounded-pill bg-primary"><?php echo e($user->type); ?></span></td>
                                            <td class="text-end">
                                                <span>
                                                    <a class="btn btn-secondary btn-sm" href="/users/<?php echo e($user->id); ?>/impersonate" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Impersonate')); ?>" aria-label="<?php echo e(__('Impersonate')); ?>">
                                                        <i class="ti ti-new-section"></i>
                                                    </a>
                                                    <a class="btn btn-primary btn-sm" href="javascript:void(0);" id="edit-user" data-url="/users/<?php echo e($user->id); ?>/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Edit')); ?>">
                                                        <i class="ti ti-edit"></i>
                                                    </a>
                                                    <form method="POST" action="/users/<?php echo e($user->id); ?>" accept-charset="UTF-8" id="delete-form-7" class="d-inline">
                                                        <input name="_method" type="hidden" value="DELETE" />
                                                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                        <a href="#" class="btn btn-danger btn-sm show_confirm" id="delete-form-7" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Delete')); ?>"><i class="ti ti-trash"></i></a>
                                                    </form>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>

                    </div>
                </div>
                <?php echo e($users->links()); ?>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <?php echo $__env->make('layouts.includes.datatable-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>

    <script src="<?php echo e(asset('assets/js/plugins/choices.min.js')); ?>"></script>
    <script>
        $(function() {
            $('body').on('click', '.add-user', function() {
                var modal = $('#common_modal');
                $.ajax({
                    type: "GET",
                    url: '<?php echo e(route('users.create')); ?>',
                    data: {},
                    success: function(response) {
                        modal.find('.modal-title').html('<?php echo e(__('Create User')); ?>');
                        modal.find('.body').html(response.html);
                        var multipleCancelButton = new Choices('#roles', {
                            removeItemButton: true,
                        });
                        var multipleCancelButton = new Choices('#country_code', {
                            removeItemButton: true,
                        });
                        modal.modal('show');
                    },
                    error: function(error) {}
                });
            });
            $('body').on('click', '#edit-user', function() {
                var action = $(this).attr('data-url');
                var modal = $('#common_modal');
                $.get(action, function(response) {

                    modal.find('.modal-title').html('<?php echo e(__('Edit User')); ?>');
                    modal.find('.body').html(response.html);
                    var multipleCancelButton = new Choices('#roles', {
                        removeItemButton: true,
                    });
                    var multipleCancelButton = new Choices('#country_code', {
                        removeItemButton: true,
                    });
                    modal.modal('show');
                })
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/users/index.blade.php ENDPATH**/ ?>