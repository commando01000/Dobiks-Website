<?php $__env->startSection('title', 'edit Project'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('edit Project')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('project-category.index')); ?>"><?php echo e(__('Project')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Create Project')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="section-body">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5> <?php echo e(__('Create Project')); ?></h5>
                    </div>
                    <?php echo Form::open([
                        'route' => ['projects.update', 'project' => $project->id],
                        'method' => 'PUT',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]); ?>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">

                                    <div class="col-sm-10">
                                        <strong class="d-block"><?php echo e(__('Page Builder')); ?></strong>
                                    </div>
                                    <div class="col-sm-2 form-check form-switch custom-switch-v1">
                                        <div class="form-switch custom-switch-v1 d-inline-block">
                                            <?php echo Form::checkbox('builder', null, $project->builder == 'on' ? true : false, [
                                                'class' => 'custom-control custom-switch form-check-input input-primary',
                                                'id' => 'startViewSettingEnableBtn',
                                                'data-onstyle' => 'primary',
                                                'data-toggle' => 'switchbutton',
                                            ]); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('title', $project->title, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter title'),
                                        'required' => 'required',
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('client', __('Client Name'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::text('client', $project->client, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Client Name'),
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('project_location', __('Project Location'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::text('project_location', $project->project_location, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Project Location'),
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('project_timeframe', __('Project Timeframe'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::text('project_timeframe', $project->project_timeframe, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Project Timeframe'),
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('project_date', __('Project Date'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::text('project_date', $project->project_date, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Project Date'),
                                    ]); ?>

                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('project_category', __('Project Category'), ['class' => 'form-label'])); ?>

                                    <select name="category_id" id="" class="form-control" required>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>"
                                                <?php if($project->project_category == $category->id): ?> <?php echo e('selected'); ?> <?php endif; ?>>
                                                <?php echo e($category->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('images', __('cover'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::file('cover', ['class' => 'form-control']); ?>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('images', __('Images'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::file('images[]', ['class' => 'form-control', 'multiple' => 'multiple']); ?>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('description', __('Short Description'), ['class' => 'form-label'])); ?>

                                    *
                                    <?php echo Form::textarea('description', $project->description, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter short description'),
                                    ]); ?>

                                </div>
                            </div>
                            
                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                <?php echo Html::link(route('projects.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

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
        
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/project/edit.blade.php ENDPATH**/ ?>