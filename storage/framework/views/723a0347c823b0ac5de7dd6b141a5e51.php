<?php $__env->startSection('title', 'Create Service'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Create Service')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('project-category.index')); ?>"><?php echo e(__('Services')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Create Service')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="section-body">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5> <?php echo e(__('Create Service')); ?></h5>
                    </div>
                    <?php echo Form::open([
                        'route' => 'services.store',
                        'method' => 'Post',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]); ?>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('title', null, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter title'),
                                        'required' => 'required',
                                    ]); ?>

                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('slug', __('Slug'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('slug', null, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter slug'),
                                        'required' => 'required',
                                    ]); ?>

                                </div>
                            </div>




                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('service_category', __('Service Category'), ['class' => 'form-label'])); ?>

                                    <select name="category_id" id="" class="form-control" required>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>">
                                                <?php echo e($category->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('emdlink', __('Embed Link'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('emdlink', null, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Embed Link'),
                                    ]); ?>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('description', __('Short Description'), ['class' => 'form-label'])); ?>

                                    *
                                    <?php echo Form::textarea('short_description', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter short description'),
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('body', __('Description'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::textarea('body', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter description'),
                                    ]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            <?php echo Html::link(route('services.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                            <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                        </div>
                    </div>
                    <?php echo Form::close(); ?>

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
        document.addEventListener('DOMContentLoaded', function() {
            var genericExamples = document.querySelectorAll('[data-trigger]');
            for (i = 0; i < genericExamples.length; ++i) {
                var element = genericExamples[i];
                new Choices(element, {
                    placeholderValue: 'This is a placeholder set in the config',
                    searchPlaceholderValue: 'This is a search placeholder',
                });
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/service/create.blade.php ENDPATH**/ ?>