<?php $__env->startSection('title', __('Landing Page')); ?>
<?php $__env->startSection('breadcrumb'); ?>
<div class="col-md-12">
    <div class="page-header-title">
        <h4 class="m-b-10"><?php echo e(__('Landing Page Section')); ?></h4>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><?php echo Html::link(route('home'),__('Dashboard'),['']); ?></li>
        <li class="breadcrumb-item"><?php echo e(__('Landing Page Section')); ?></li>
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

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
                            <div class="tab-pane fade show active" id="apps-setting" role="tabpanel" aria-labelledby="landing-apps-setting">
                                <?php echo Form::open([
                                    'route' => ['landing.section1.store'],
                                    'method' => 'Post',
                                    'id' => 'froentend-form',
                                    'enctype' => 'multipart/form-data',
                                    'data-validate',
                                    'no-validate',
                                ]); ?>

                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0"><?php echo e(__('Landing Page Section 1')); ?></h5>
                                        </div>
                                        <div class="col-lg-4 d-flex justify-content-end">
                                            <div class="form-switch custom-switch-v1 d-inline-block">
                                                <?php echo Form::checkbox(
                                                    'menu_setting_section1_enable',
                                                    null,
                                                    Utility::getsettings('menu_setting_section1_enable') == 'on' ? true : false,
                                                    [
                                                        'class' => 'custom-control custom-switch form-check-input input-primary',
                                                        'id' => 'appsSettingEnableBtn',
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
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_image_section1', __('Menu Image'), ['class' => 'form-label'])); ?> *
                                                <?php echo Form::file('menu_image_section1', ['class' => 'form-control', 'id' => 'menu_image_section1']); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_name_section1', __('Section Name'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('menu_name_section1', Utility::getsettings('menu_name_section1'), [
                                                    'class' => 'form-control',
                                                    'rows' => '1',
                                                    'placeholder' => __('Enter menu name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_bold_name_section1', __('Section Bold Name'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('menu_bold_name_section1', Utility::getsettings('menu_bold_name_section1'), [
                                                    'class' => 'form-control',
                                                    'rows' => '1',
                                                    'placeholder' => __('Enter menu bold name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_detail_section1', __('Section Detail'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::textarea('menu_detail_section1', Utility::getsettings('menu_detail_section1'), [
                                                    'class' => 'form-control',
                                                    'rows' => '3',
                                                    'placeholder' => __('Enter menu detail'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_button_title_section1', __('Button Title'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('menu_button_title_section1', Utility::getsettings('menu_button_title_section1'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter Button Title'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_button_url_section1', __('Button URL'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('menu_button_url_section1', Utility::getsettings('menu_button_url_section1'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter Button URL'),
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
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="apps-setting" role="tabpanel"
                                aria-labelledby="landing-apps-setting">
                                <?php echo Form::open([
                                    'route' => ['landing.section2.store'],
                                    'method' => 'Post',
                                    'id' => 'froentend-form',
                                    'enctype' => 'multipart/form-data',
                                    'data-validate',
                                    'no-validate',
                                ]); ?>

                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0"><?php echo e(__('Landing Page Section 2')); ?></h5>
                                        </div>
                                        <div class="col-lg-4 d-flex justify-content-end">
                                            <div class="form-switch custom-switch-v1 d-inline-block">
                                                <?php echo Form::checkbox(
                                                    'menu_setting_section2_enable',
                                                    null,
                                                    Utility::getsettings('menu_setting_section2_enable') == 'on' ? true : false,
                                                    [
                                                        'class' => 'custom-control custom-switch form-check-input input-primary',
                                                        'id' => 'appsSettingEnableBtn',
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
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_image_section2', __('Section Image'), ['class' => 'form-label'])); ?> *
                                                <?php echo Form::file('menu_image_section2', ['class' => 'form-control', 'id' => 'menu_image_section2']); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_name_section2', __('Section Name'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('menu_name_section2', Utility::getsettings('menu_name_section2'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter menu name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_bold_name_section2', __('Section Bold Name'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('menu_bold_name_section2', Utility::getsettings('menu_bold_name_section2'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter menu bold name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_detail_section2', __('Section Detail'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::textarea('menu_detail_section2', Utility::getsettings('menu_detail_section2'), [
                                                    'class' => 'form-control',
                                                    'rows' => '3',
                                                    'placeholder' => __('Enter menu detail'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_button_title_section2', __('Button Title'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('menu_button_title_section2', Utility::getsettings('menu_button_title_section2'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter Button Title'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_button_url_section2', __('Button URL'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('menu_button_url_section2', Utility::getsettings('menu_button_url_section2'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter Button URL'),
                                                ]); ?>

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
                    <div class="card">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="apps-setting" role="tabpanel"
                                aria-labelledby="landing-apps-setting">
                                <?php echo Form::open([
                                    'route' => ['landing.section3.store'],
                                    'method' => 'Post',
                                    'id' => 'froentend-form',
                                    'enctype' => 'multipart/form-data',
                                    'data-validate',
                                    'no-validate',
                                ]); ?>

                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0"><?php echo e(__('Landing Page Section3')); ?></h5>
                                        </div>
                                        <div class="col-lg-4 d-flex justify-content-end">
                                            <div class="form-switch custom-switch-v1 d-inline-block">
                                                <?php echo Form::checkbox(
                                                    'menu_setting_section3_enable',
                                                    null,
                                                    Utility::getsettings('menu_setting_section3_enable') == 'on' ? true : false,
                                                    [
                                                        'class' => 'custom-control custom-switch form-check-input input-primary',
                                                        'id' => 'appsSettingEnableBtn',
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
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_image_section3', __('Section Image'), ['class' => 'form-label'])); ?> *
                                                <?php echo Form::file('menu_image_section3', ['class' => 'form-control', 'id' => 'menu_image_section3']); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_name_section3', __('Section Name'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('menu_name_section3', Utility::getsettings('menu_name_section3'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter menu name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_bold_name_section3', __('Section Bold Name'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('menu_bold_name_section3', Utility::getsettings('menu_bold_name_section3'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter menu bold name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_detail_section3', __('Section Detail'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::textarea('menu_detail_section3', Utility::getsettings('menu_detail_section3'), [
                                                    'class' => 'form-control',
                                                    'rows' => '3',
                                                    'placeholder' => __('Enter menu detail'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_button_title_section3', __('Button Title'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('menu_button_title_section3', Utility::getsettings('menu_button_title_section3'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter Button Title'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('menu_button_url_section3', __('Button URL'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('menu_button_url_section3', Utility::getsettings('menu_button_url_section3'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter Button URL'),
                                                ]); ?>

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

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/landing-page/landing-page-section.blade.php ENDPATH**/ ?>