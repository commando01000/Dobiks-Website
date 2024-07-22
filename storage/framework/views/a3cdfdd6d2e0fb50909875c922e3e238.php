
<?php $__env->startSection('title', __('Clients')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Clients')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('client details')); ?></li>
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
                            <h5> <?php echo e(__('Edit client')); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('name', __('Name'), ['class' => 'form-label'])); ?> *
                                        <?php echo Form::text('name', $client->name, [
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
                                                $categoryName = $client->category->name ?? 'Default Category';
                                            ?>
                                            <?php echo Form::text('category_name', $categoryName, ['class' => 'form-control', 'disabled']); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php if($client->cover): ?>
                                            <div>
                                                <strong>Current Image:</strong><br>
                                                <img src="<?php echo e(Storage::url($client->cover)); ?>" alt="client Image"
                                                    style="width: 60px !important; height: 300px !important;">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('description', __('Description'), ['class' => 'form-label'])); ?> *
                                        
                                        <?php echo Form::textarea('description', $client->description, ['class' => 'form-control', 'disabled']); ?>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                <?php echo Html::link(route('customer.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                                
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/back/client/view.blade.php ENDPATH**/ ?>