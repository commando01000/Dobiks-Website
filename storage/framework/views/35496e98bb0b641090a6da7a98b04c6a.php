<?php $__env->startSection('title', __('Roles')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Roles')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><?php echo e(__('Roles')); ?></li>
        </ul>
        <div class="float-end">
            <div class="d-flex align-items-center">

                <a class="btn btn-default buttons-create btn-light-primary no-corner me-1 add-role" tabindex="0" aria-controls="users-table" href="#"><span><i class="ti ti-plus"></i><?php echo e(__('Create')); ?></span></a>

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
                    <div id="roles-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="dataTable-container">
                            <div class="col-sm-12">
                                <table class="table dataTable no-footer" id="roles-table" width="100%" role="grid" aria-describedby="roles-table_info" style="width: 100%;">
                                    <thead>
                                    <tr role="row">
                                        <th title="Name">Name</th>
                                        <th title="Created At">Created At</th>
                                        <th title="Action" width="300" class="text-end sorting_disabled">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1"><?php echo e($record['name']); ?></td>
                                        <td><?php echo e($record['created_at']); ?></td>
                                        <td class="text-end">
                                            <a class="btn btn-info btn-sm" href="/cp/roles/<?php echo e($record['id']); ?>" id="edit-role" data-url="roles/<?php echo e($record['id']); ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Permissions')); ?>">
                                                <i class="ti ti-key"></i>
                                            </a>
                                            <a class="btn btn-primary btn-sm edit-role" href="javascript:void(0);" id="edit-role" data-url="roles/<?php echo e($record['id']); ?>/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Edit')); ?>">
                                                <i class="ti ti-edit"></i>
                                            </a>
                                            <form method="POST" action="/cp/roles/<?php echo e($record['id']); ?>" accept-charset="UTF-8" id="delete-form-2" class="d-inline">
                                                <input name="_method" type="hidden" value="DELETE" />
                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                <a href="#" class="btn btn-danger btn-sm show_confirm" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="<?php echo e(_('Delete')); ?>" id="delete-form-2"><i class="ti ti-trash"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                                <div id="roles-table_processing" class="dataTables_processing card" style="display: none;">Processing...</div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php echo e($role->links()); ?>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <?php echo $__env->make('layouts.includes.datatable-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>

    <script>
        $(function() {
            $('.add-role').on('click', function() {
                var modal = $('#common_modal');
                $.ajax({
                    type: "GET",
                    url: '<?php echo e(route('roles.create')); ?>',
                    data: {},
                    success: function(response) {
                        modal.find('.modal-title').html('<?php echo e(__('Create Role')); ?>');
                        modal.find('.body').html(response.html);
                        modal.modal('show');
                    },
                    error: function(error) {
                    }
                });
            });
            $('body').on('click', '.edit-role', function() {
                var action = $(this).attr('data-url');
                var modal = $('#common_modal');
                $.get(action, function(response) {
                    modal.find('.modal-title').html('<?php echo e(__('Edit Role')); ?>');
                    modal.find('.body').html(response.html);
                    modal.modal('show');
                })
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/roles/index.blade.php ENDPATH**/ ?>