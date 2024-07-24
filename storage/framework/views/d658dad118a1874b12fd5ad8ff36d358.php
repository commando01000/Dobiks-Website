<?php $__env->startSection('title', 'Create Blog'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Create Blog')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('blog-category.index')); ?>"><?php echo e(__('Blog')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Create Blog')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="section-body">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5><?php echo e(__('Create Blog')); ?></h5>
                    </div>
                    <?php echo Form::open([
                        'route' => 'blog.store',
                        'method' => 'Post',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]); ?>

                    <div class="card-body">
                        <?php $__currentLoopData = $allLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row mb-5 p-3 rounded-3" style="background-color: rgb(235, 233, 233) !important">
                                <div class="col-sm-12">
                                    <h4><?php echo e($language); ?></h4>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label'])); ?> *
                                        <?php echo Form::text('title_' . $localeCode, null, [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter title'),
                                            'required' => 'required',
                                        ]); ?>

                                    </div>
                                </div>
                                <?php if($localeCode == 'en'): ?>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <?php echo e(Form::label('category_id', __('Category'), ['class' => 'form-label'])); ?>

                                            <?php echo Form::select('category_id', $categories, null, ['class' => 'form-control', 'required', 'data-trigger']); ?>

                                        </div>
                                    </div>

                                    
                                <?php endif; ?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('short_description', __('Short Description'), ['class' => 'form-label'])); ?>

                                        *
                                        <?php echo Form::textarea('short_description_' . $localeCode, null, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Enter short description'),
                                            'required' => 'required',
                                        ]); ?>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('normal_description', __('Normal Description'), ['class' => 'form-label'])); ?>

                                        *
                                        <?php echo Form::textarea('normal_description_' . $localeCode, null, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Enter normal description'),
                                            'required' => 'required',
                                        ]); ?>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('body_' . $localeCode, __('Description (' . $language . ')'), ['class' => 'form-label'])); ?>

                                        *
                                        <?php echo Form::textarea('description_' . $localeCode, null, [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter description (' . $language . ')'),
                                        ]); ?>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            <?php echo Html::link(route('blog.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

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
        document.addEventListener('DOMContentLoaded', function() {
            var genericExamples = document.querySelectorAll('[data-trigger]');
            for (i = 0; i < genericExamples.length; ++i) {
                var element = genericExamples[i];
                new Choices(element, {
                    placeholderValue: 'This is a placeholder set in the config',
                    searchPlaceholderValue: 'This is a search placeholder',
                });
            }

            <?php $__currentLoopData = $allLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                CKEDITOR.replace('description_<?php echo e($localeCode); ?>', {
                    filebrowserUploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token()])); ?>",
                    filebrowserUploadMethod: 'form'
                });
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/blog/create.blade.php ENDPATH**/ ?>