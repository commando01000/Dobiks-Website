<?php $__env->startSection('title', __('Create Testimonials')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Create Testimonials')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), ['']); ?></li>
            <li class="breadcrumb-item"><?php echo Html::link(route('testimonial.index'), __('Testimonial'), ['']); ?></li>
            <li class="breadcrumb-item"><?php echo e(__('Create Testimonials')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="section-body">
            <div class="m-auto col-md-6">
                <div class="card ">
                    <div class="card-header">
                        <h5> <?php echo e(__('Create Testimonial')); ?></h5>
                    </div>
                    <?php echo Form::open([
                        'route' => 'testimonial.store',
                        'method' => 'Post',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]); ?>

                    <div class="card-body">
                        <div class="form-group ">
                            <?php echo e(Form::label('name', __('Name'), ['class' => 'form-label'])); ?>

                            <?php echo Form::text('name', null, ['class' => 'form-control', ' required', 'placeholder' => __('Enter name')]); ?>

                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label'])); ?>

                            <?php echo Form::text('title', null, ['class' => 'form-control', ' required', 'placeholder' => __('Enter title')]); ?>

                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label('image', __('Image'), ['class' => 'form-label'])); ?>

                            <?php echo Form::file('image', ['class' => 'form-control', 'id' => 'image']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label('designation', __('Designation'), ['class' => 'form-label'])); ?>

                            <?php echo Form::text('designation', null, [
                                'class' => 'form-control',
                                ' required',
                                'placeholder' => __('Enter designation'),
                            ]); ?>

                        </div>
                        <?php $__currentLoopData = $allLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row mb-5 p-3  rounded-3" style="background-color: rgb(235, 233, 233) !important">
                                <div class="col-sm-12">
                                    <h4><?php echo e($language); ?></h4>
                                </div>


                                <div class="form-group">
                                    <?php echo e(Form::label('desc', __('Description'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::textarea('desc_' . $localeCode, null, [
                                        'class' => 'form-control',
                                        ' required',
                                        'rows' => 3,
                                        'placeholder' => __('Enter description'),
                                    ]); ?>

                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group">
                            <?php echo e(Form::label('rating', __('Star Rating'), ['class' => 'form-label'])); ?>

                            <div id="rating" class="starRating jq-ry-container" data-value="0" data-num_of_star="5">
                            </div>
                            <?php echo Form::hidden('rating', 0, ['class' => 'calculate', 'data-star' => 5]); ?>

                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            <?php echo Html::link(route('testimonial.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

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
<?php $__env->startPush('style'); ?>
    <link href="<?php echo e(asset('vendor/jqueryform/css/jquery.rateyo.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('vendor/jqueryform/js/jquery.rateyo.min.js')); ?>"></script>
    <script>
        var $starRating = $('.starRating');
        if ($starRating.length) {
            $starRating.each(function() {
                var val = $(this).attr('data-value');
                var num_of_star = $(this).attr('data-num_of_star');
                $(this).rateYo({
                    rating: val,
                    halfStar: true,
                    numStars: num_of_star,
                    precision: 2,
                    onSet: function(rating, rateYoInstance) {
                        num_of_star = $(rateYoInstance.node).attr('data-num_of_star');
                        var input = ($(rateYoInstance.node).attr('id'));
                        if (num_of_star == 10) {
                            rating = rating * 2;
                        }
                        $('input[name="' + input + '"]').val(rating);
                    }
                })
            });
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/testimonials/create.blade.php ENDPATH**/ ?>