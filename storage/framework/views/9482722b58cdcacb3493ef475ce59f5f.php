
<?php $__env->startSection('title', __('leaderships')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('leaderships')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('leadership details')); ?></li>
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
                            <h5> <?php echo e(__('Edit leadership')); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('name', __('Name'), ['class' => 'form-label'])); ?> *
                                        <?php echo Form::text('name', $leadership->name, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('position', __('Position'), ['class' => 'form-label'])); ?> *
                                        <?php echo Form::text('position', $leadership->position, [
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
                                                $categoryName = $leadership->category->name ?? 'Default Category';
                                            ?>
                                            <?php echo Form::text('category_name', $categoryName, ['class' => 'form-control', 'disabled']); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php if($leadership->photo): ?>
                                            <div>
                                                <strong>Current Image:</strong><br>
                                                <img src="<?php echo e(Storage::url($leadership->photo)); ?>" alt="leadership Image"
                                                    style="width: auto !important; height: 300px !important;">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('bio', __('bio'), ['class' => 'form-label'])); ?> *
                                        
                                        <?php echo Form::textarea('bio', $leadership->bio, ['class' => 'form-control', 'disabled']); ?>

                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('facebook', __('facebook'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('facebook', $leadership->facebook, [
                                        'class' => 'form-control',
                                        'disabled',
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('twitter', __('twitter'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('twitter', $leadership->twitter, [
                                        'class' => 'form-control',
                                        'disabled',
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('github', __('github'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('github', $leadership->github, [
                                        'class' => 'form-control',
                                        'disabled',
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('linkedin', __('linkedin'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('linkedin', $leadership->linkedin, [
                                        'class' => 'form-control',
                                        'disabled',
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('dribble', __('dribble'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('dribble', $leadership->dribble, [
                                        'class' => 'form-control',
                                        'disabled',
                                    ]); ?>

                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('categories', __('categories'), ['class' => 'form-label'])); ?> *
                                    <?php $__currentLoopData = $leadership->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo Form::text('dribble', $detail->category . ' ' . $detail->number, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>

                            

                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                <?php echo Html::link(route('leadership.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                                
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/leadrship/view.blade.php ENDPATH**/ ?>