
<?php $__env->startSection('title', 'Edit Blog'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Edit Blog')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('blog.index')); ?>"><?php echo e(__('Blog')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Edit Blog')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="section-body">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5> <?php echo e(__('Edit Blog')); ?></h5>
                    </div>
                    <?php echo Form::model($blog, [
                        'route' => ['blog.update', $blog->id],
                        'method' => 'Patch',
                        'class' => 'form-horizontal',
                        'data-validate',
                        'enctype' => 'multipart/form-data',
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
                                    <?php echo e(Form::label('category_id', __('Category'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::select('category_id', $categories, $blog->category_id, [
                                        'class' => 'form-select',
                                        'required',
                                        'data-trigger',
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('images', __('Images'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::file('images', ['class' => 'form-control']); ?>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('short_description', __('Short Description'), ['class' => 'form-label'])); ?>

                                    *
                                    <?php echo Form::textarea('short_description', null, [
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
                                    <?php echo Form::textarea('normal_description', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter normal description'),
                                        'required' => 'required',
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('description', __('Description'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::textarea('description', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter description'),
                                        'required' => 'required',
                                    ]); ?>

                                </div>
                            </div>


                        </div>
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

    <script type="text/javascript">
        CKEDITOR.replace('description', {
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

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/back/blog/edit.blade.php ENDPATH**/ ?>