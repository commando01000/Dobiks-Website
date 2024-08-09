

<?php $__env->startSection('title', 'Create Project'); ?>


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
                                        <?php echo Form::text('title', $service->title, [
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
                                                $categoryName = $service->category->name ?? 'Default Category';
                                            ?>
                                            <?php echo Form::text('category_name', $categoryName, ['class' => 'form-control', 'disabled']); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php if($service->images): ?>
                                            <div>
                                                <strong>Current Image:</strong><br>
                                                <img src="<?php echo e(Storage::url($service->cover)); ?>" alt="service Image"
                                                    style="max-width: 100%; height: 300px !important;">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('short_description', __('Short Description'), ['class' => 'form-label'])); ?>

                                        *
                                        <?php echo Form::textarea('short_description', $service->short_description, [
                                            'class' => 'form-control ',
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('body', __('Description'), ['class' => 'form-label'])); ?> *
                                        <?php

                                        $var = html_entity_decode($service->description);

                                        ?>
                                        <?php echo Form::textarea('body', $var, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Enter description'),
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('body', __('emdlink'), ['class' => 'form-label'])); ?> *
                                        <br>
                                        <?php

                                        $var = html_entity_decode($service->emdlink);
                                        echo $var;
                                        ?>
                                    </div>
                                </div>

                               

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                <?php echo Html::link(route('services.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                                
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\al shrouk academy\radwa\furniture project\Dashboard\resources\views/back/service/view.blade.php ENDPATH**/ ?>