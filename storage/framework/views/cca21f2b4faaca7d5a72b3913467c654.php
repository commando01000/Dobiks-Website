<?php $__env->startSection('title', __('Landing Page')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Contact US Settings')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), ['']); ?></li>
            <li class="breadcrumb-item"><?php echo e(__('Join US Settings')); ?></li>
        </ul>
</div><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xl-3">
                    <div class="card sticky-top">
                        <div class="list-group list-group-flush" id="useradd-sidenav">
                            <?php echo $__env->make('back.landing-page.landing-page-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="card">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="apps-setting" role="tabpanel"
                                aria-labelledby="landing-apps-setting">
                                <?php echo Form::open([
                                    'route' => ['landing.joinUs.store'],
                                    'method' => 'Post',
                                    'id' => 'froentend-form',
                                    'data-validate',
                                    'no-validate',
                                ]); ?>

                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0"><?php echo e(__('Join Us Setting')); ?></h5>
                                        </div>
                                        <div class="col-lg-4 d-flex justify-content-end">
                                            <div class="form-switch custom-switch-v1 d-inline-block">
                                                <?php echo Form::checkbox(
                                                    'joinus_setting_enable',
                                                    null,
                                                    Utility::getsettings('joinus_setting_enable') == 'on' ? true : false,
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
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('join Us text', __('join Us text'), ['class' => 'col-form-label'])); ?>

                                                <div class="custom-input-group">
                                                    <?php echo Form::text('joinus_text', Utility::getsettings('joinus_text') ?? "", [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter text'),
                                                    ]); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('join Us feature1', __('join Us feature1'), ['class' => 'col-form-label'])); ?>

                                                <div class="custom-input-group">
                                                    <?php echo Form::text('joinus_feature1', Utility::getsettings('joinus_feature1') ?? "", [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter feature1'),
                                                    ]); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('join Us feature2', __('join Us feature2'), ['class' => 'col-form-label'])); ?>

                                                <div class="custom-input-group">
                                                    <?php echo Form::text('joinus_feature2', Utility::getsettings('joinus_feature2') ?? "", [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter feature2'),
                                                    ]); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('join Us feature3', __('join Us feature3'), ['class' => 'col-form-label'])); ?>

                                                <div class="custom-input-group">
                                                    <?php echo Form::text('joinus_feature3', Utility::getsettings('joinus_feature3') ?? "", [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter feature3'),
                                                    ]); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('join Us feature4', __('join Us feature4'), ['class' => 'col-form-label'])); ?>

                                                <div class="custom-input-group">
                                                    <?php echo Form::text('joinus_feature4', Utility::getsettings('joinus_feature4') ?? "", [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter feature4'),
                                                    ]); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('join Us feature5', __('join Us feature5'), ['class' => 'col-form-label'])); ?>

                                                <div class="custom-input-group">
                                                    <?php echo Form::text('joinus_feature5', Utility::getsettings('joinus_feature5') ?? "", [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter feature5'),
                                                    ]); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('join Us feature6', __('join Us feature6'), ['class' => 'col-form-label'])); ?>

                                                <div class="custom-input-group">
                                                    <?php echo Form::text('joinus_feature6', Utility::getsettings('joinus_feature6') ?? "", [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter feature6'),
                                                    ]); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('join Us feature7', __('join Us feature7'), ['class' => 'col-form-label'])); ?>

                                                <div class="custom-input-group">
                                                    <?php echo Form::text('joinus_feature7', Utility::getsettings('joinus_feature7') ?? "", [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter feature7'),
                                                    ]); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('join Us feature8', __('join Us feature8'), ['class' => 'col-form-label'])); ?>

                                                <div class="custom-input-group">
                                                    <?php echo Form::text('joinus_feature8', Utility::getsettings('joinus_feature8') ?? "", [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter feature8'),
                                                    ]); ?>

                                                </div>
                                            </div>
                                        </div>
                                       
                         
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
                                        <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                                    </div>
                                </div>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/landing-page/joinUs-setting.blade.php ENDPATH**/ ?>