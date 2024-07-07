<?php $__env->startSection('title', __('Landing Page')); ?>
<?php $__env->startSection('breadcrumb'); ?>
<div class="col-md-12">
    <div class="page-header-title">
        <h4 class="m-b-10"><?php echo e(__('Bussiness Growth')); ?></h4>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><?php echo Html::link(route('home'),__('Dashboard'),['']); ?></li>
        <li class="breadcrumb-item"><?php echo e(__('Bussiness Growth')); ?></li>
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">

                <div class="col-xl-12">
                    <div class="card">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="apps-setting" role="tabpanel"
                                aria-labelledby="landing-apps-setting">
                                <?php echo Form::open([
                                    'route' => ['business.growth.store'],
                                    'method' => 'Post',
                                    'id' => 'froentend-form',
                                    'enctype' => 'multipart/form-data',
                                    'data-validate',
                                    'no-validate',
                                ]); ?>

                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0"><?php echo e(__('Business Growth Setting')); ?></h5>
                                        </div>
                                        <div class="col-lg-4 d-flex justify-content-end">
                                            <div class="form-switch custom-switch-v1 d-inline-block">
                                                <?php echo Form::checkbox(
                                                    'business_growth_setting_enable',
                                                    null,
                                                    Utility::getsettings('business_growth_setting_enable') == 'on' ? true : false,
                                                    [
                                                        'class' => 'custom-control custom-switch form-check-input input-primary',
                                                        'id' => 'startViewSettingEnableBtn',
                                                        'data-onstyle' => 'primary',
                                                        'data-toggle' => 'switchbutton',
                                                    ],
                                                ); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('business_growth_front_image', __('Thumbnail Image'), ['class' => 'form-label'])); ?> *
                                                <?php echo Form::file('business_growth_front_image', ['class' => 'form-control', 'id' => 'business_growth_front_image']); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('business_growth_video', __('Video'), ['class' => 'form-label'])); ?> *
                                                <?php echo Form::file('business_growth_video', ['class' => 'form-control', 'id' => 'video', 'accept' => 'video/*']); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('business_growth_name', __('Business Growth Name'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('business_growth_name', Utility::getsettings('business_growth_name'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter business growth name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('business_growth_bold_name', __('Business Growth Bold Name'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('business_growth_bold_name', Utility::getsettings('business_growth_bold_name'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter business growth bold name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('business_growth_detail', __('Business Growth Detail'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('business_growth_detail', Utility::getsettings('business_growth_detail'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter business growth detail'),
                                                ]); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
                                        <?php echo e(Form::button(__('Save'), ['type' => 'submit',  'class' => 'btn btn-primary'])); ?>

                                    </div>
                                </div>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h5><?php echo e(__('Business Growth View')); ?></h5>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 justify-content-end d-flex">
                                    <a href="javascript:void(0);" data-url="<?php echo e(route('business.growth.view.create')); ?>"
                                        data-ajax-popup="true" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        class="btn btn-sm btn-primary mx-1 business-growth-view-create"
                                        data-bs-original-title="<?php echo e(__('Create')); ?>">
                                        <i class="ti ti-plus text-light"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><?php echo e(__('Name')); ?></th>
                                            <th><?php echo e(__('Amount')); ?></th>
                                            <th><?php echo e(__('Action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($businessGrowthViewSettings) || is_object($businessGrowthViewSettings)): ?>
                                            <?php
                                                $ff_no = 1;
                                            ?>
                                            <?php $__currentLoopData = $businessGrowthViewSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $businessGrowthViewSetting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($ff_no++); ?></td>
                                                    <td><?php echo e($businessGrowthViewSetting['business_growth_view_name']); ?></td>
                                                    <td><?php echo e($businessGrowthViewSetting['business_growth_view_amount']); ?></td>
                                                    <td>
                                                        <span>
                                                            <a href="javascript:void(0);"
                                                                data-url="<?php echo e(route('business.growth.view.edit', $key)); ?>"
                                                                data-ajax-popup="true" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                class="btn btn-sm btn-primary mx-1 business-growth-edit"
                                                                data-bs-original-title="<?php echo e(__('Create')); ?>">
                                                                <i class="ti ti-pencil text-light"></i>
                                                            </a>
                                                            <?php echo Form::open([
                                                                'method' => 'DELETE',
                                                                'class' => 'd-inline',
                                                                'route' => ['business.growth.view.delete', $key],
                                                                'id' => 'delete-form-' . $key,
                                                            ]); ?>

                                                            <a href="javascript:void(0);" class="btn btn-sm small btn btn-danger show_confirm" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" id="delete-form-1" data-bs-original-title="<?php echo e(__('Delete')); ?>">
                                                                <i class="ti ti-trash text-white"></i>
                                                            </a>
                                                            <?php echo Form::close(); ?>

                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h5><?php echo e(__('Business Growth')); ?></h5>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 justify-content-end d-flex">
                                    <a href="javascript:void(0);" data-url="<?php echo e(route('business.growth.create')); ?>"
                                        data-ajax-popup="true" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        class="btn btn-sm btn-primary mx-1 business-growth-create"
                                        data-bs-original-title="<?php echo e(__('Create')); ?>">
                                        <i class="ti ti-plus text-light"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><?php echo e(__('Name')); ?></th>
                                            <th><?php echo e(__('Action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($businessGrowthSettings) || is_object($businessGrowthSettings)): ?>
                                            <?php
                                                $ff_no = 1;
                                            ?>
                                            <?php $__currentLoopData = $businessGrowthSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $businessGrowthSetting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($ff_no++); ?></td>
                                                    <td><?php echo e($businessGrowthSetting['business_growth_title']); ?></td>
                                                    <td>
                                                        <span>
                                                            <a href="javascript:void(0);"
                                                                data-url="<?php echo e(route('business.growth.edit', $key)); ?>"
                                                                data-ajax-popup="true" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                class="btn btn-sm btn-primary mx-1 business_growth_edit"
                                                                data-bs-original-title="<?php echo e(__('Create')); ?>">
                                                                <i class="ti ti-pencil text-light"></i>
                                                            </a>
                                                            <?php echo Form::open([
                                                                'method' => 'DELETE',
                                                                'class' => 'd-inline',
                                                                'route' => ['business.growth.delete', $key],
                                                                'id' => 'delete-form-' . $key,
                                                            ]); ?>

                                                            <a href="javascript:void(0);" class="btn btn-sm small btn btn-danger show_confirm" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" id="delete-form-1" data-bs-original-title="<?php echo e(__('Delete')); ?>">
                                                                <i class="ti ti-trash text-white"></i>
                                                            </a>
                                                            <?php echo Form::close(); ?>

                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/bootstrap-switch-button.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/js/plugins/bootstrap-switch-button.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('body').on('click', '.business-growth-create', function() {
                var action = $(this).data('url');
                var modal = $('#common_modal');
                $.get(action, function(response) {
                    modal.find('.modal-title').html('<?php echo e(__('Create Business Growth')); ?>');
                    modal.find('.body').html(response);
                    modal.modal('show');
                })
            });
        });
        $(document).ready(function() {
            $('body').on('click', '.business-growth-edit', function() {
                var action = $(this).data('url');
                var modal = $('#common_modal');
                $.get(action, function(response) {
                    modal.find('.modal-title').html('<?php echo e(__('Edit Business Growth')); ?>');
                    modal.find('.body').html(response);
                    modal.modal('show');
                })
            });
        });
        $(document).ready(function() {
            $('body').on('click', '.business-growth-view-create', function() {
                var action = $(this).data('url');
                var modal = $('#common_modal');
                $.get(action, function(response) {
                    modal.find('.modal-title').html('<?php echo e(__('Create Business Growth View')); ?>');
                    modal.find('.body').html(response);
                    modal.modal('show');
                })
            });
        });
        $(document).ready(function() {
            $('body').on('click', '.business-growth-edit', function() {
                var action = $(this).data('url');
                var modal = $('#common_modal');
                $.get(action, function(response) {
                    modal.find('.modal-title').html('<?php echo e(__('Edit Business Growth View')); ?>');
                    modal.find('.body').html(response);
                    modal.modal('show');
                })
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/business-growth/index.blade.php ENDPATH**/ ?>