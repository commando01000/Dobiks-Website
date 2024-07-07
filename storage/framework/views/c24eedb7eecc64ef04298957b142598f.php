<?php $__env->startSection('title', __('Landing Page')); ?>
<?php $__env->startSection('breadcrumb'); ?>
<div class="col-md-12">
    <div class="page-header-title">
        <h4 class="m-b-10"><?php echo e(__('Page Settings')); ?></h4>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), ['']); ?></li>
        <li class="breadcrumb-item"><?php echo e(__('Edit Page')); ?></li>
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xl-7 col-lg-7 mx-auto">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="card">
                            <div class="tab-pane fade show active" id="apps-setting" role="tabpanel"
                                aria-labelledby="landing-apps-setting">
                                <?php echo Form::model($pageSettings, [
                                    'route' => ['pages.update', $pageSettings->id],
                                    'method' => 'patch',
                                    'id' => 'froentend-form',
                                ]); ?>

                                <?php echo method_field('put'); ?>
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0"><?php echo e(__('Page Setting')); ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('title', __('Page Title'), ['class' => 'form-label'])); ?>

                                                *
                                                <?php echo Form::text('title', $pageSettings->title, [
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Enter Page Title',
                                                    'id' => 'title',
                                                ]); ?>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('description', __('Footer Sub menu Detail'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::textarea('descriptions', $pageSettings->description, [
                                                    'class' => 'form-control',
                                                    'rows' => '2',
                                                    'placeholder' => __('Enter Sub Menu detail'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('body', __('Footer Sub menu Detail'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::textarea('body', $pageSettings->body, [
                                                    'class' => 'form-control',
                                                    'rows' => '2',
                                                    'placeholder' => __('Enter Sub Menu detail'),
                                                ]); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
                                        <a href="<?php echo e(route('pages.index')); ?>" class="btn btn-secondary"><?php echo e(__('Cancel')); ?></a>
                                        <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'id' => 'save-btn', 'class' => 'btn btn-primary'])); ?>

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
<?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('assets/js/plugins/choices.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/ckeditor/ckeditor.js')); ?>"></script>

    <script>
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token()])); ?>",
            filebrowserUploadMethod: 'form'
        });


    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/pages/edit.blade.php ENDPATH**/ ?>