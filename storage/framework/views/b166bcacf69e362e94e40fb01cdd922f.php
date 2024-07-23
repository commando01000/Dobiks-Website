

<?php $__env->startSection('title', __('Blogs')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Projects')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Projects')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main class="container">
        <div class="row">
            <div class="section-body">
                <div class="m-auto col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5> <?php echo e(__('Edit Project')); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label'])); ?> *
                                        <?php echo Form::text('title', $project->title, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <?php echo e(Form::label('category_id', __('Category'), ['class' => 'form-label'])); ?>

                                            <?php
                                                $categoryName = $project->category->name ?? 'Default Category';
                                            ?>
                                            <?php echo Form::text('category_name', $categoryName, ['class' => 'form-control', 'disabled']); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php if($project->images): ?>
                                            <div>
                                                <strong>Current Image:</strong><br>
                                                <img src="<?php echo e(Storage::url($project->cover)); ?>" alt="project Image"
                                                    style="max-width: 100%; height: 300px !important;">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('client', __('client'), ['class' => 'form-label'])); ?> *
                                        <?php echo Form::text('client', $project->client, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('body', __('Description'), ['class' => 'form-label'])); ?> *
                                        <?php
                                        
                                        $var = html_entity_decode($project->description);
                                        
                                        ?>
                                        <?php echo Form::textarea('body', $var, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Enter description'),
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('project_date', __('Project Date'), ['class' => 'form-label'])); ?> *
                                        <?php echo Form::text('project date', $project->project_date, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('project_timeframe', __('Project time frame'), ['class' => 'form-label'])); ?>

                                        *
                                        <?php echo Form::text('project time frame', $project->project_timeframe, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('project_location', __('Project Location'), ['class' => 'form-label'])); ?>

                                        *
                                        <?php echo Form::text('project project_location', $project->project_location, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>

                                

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                <?php echo Html::link(route('projects.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                                
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/project/view.blade.php ENDPATH**/ ?>