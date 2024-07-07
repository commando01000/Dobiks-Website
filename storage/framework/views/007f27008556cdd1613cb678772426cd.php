<?php echo e(Form::model(null, array('route' => array('feature.update', $key), 'method' => 'POST','enctype' => "multipart/form-data" , 'data-validate', 'no-validate'))); ?>

<div class="modal-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <?php echo e(Form::label('feature_name', __('Feature Name'), ['class' => 'form-label'])); ?>

                <?php echo Form::text('feature_name', $feature['feature_name'], [
                    'class' => 'form-control',
                    'rows' => '1',
                    'placeholder' => __('Enter Feature name'),
                ]); ?>

            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <?php echo e(Form::label('feature_bold_name', __('Feature Bold Name'), ['class' => 'form-label'])); ?>

                <?php echo Form::text('feature_bold_name', $feature['feature_bold_name'], [
                    'class' => 'form-control',
                    'rows' => '1',
                    'placeholder' => __('Enter Feature Bold name'),
                ]); ?>

            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <?php echo e(Form::label('feature_detail', __('Feature Detail'), ['class' => 'form-label'])); ?>

                <?php echo Form::textarea('feature_detail', $feature['feature_detail'], [
                    'class' => 'form-control',
                    'rows' => '3',
                    'placeholder' => __('Enter feature detail'),
                ]); ?>

            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <?php echo e(Form::label('feature_image', __('Image'), ['class' => 'form-label'])); ?>

                <?php echo e(__('* (svg)')); ?>

                <?php echo Form::file('feature_image', ['class' => 'form-control', 'id' => 'feature_image']); ?>

            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <div class="text-end">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
        <?php echo e(Form::button(__('Save'), ['type' => 'submit','class' => 'btn btn-primary'])); ?>

    </div>
</div>
<?php echo e(Form::close()); ?>

<?php /**PATH D:\company\backend\resources\views/back/feature/edit.blade.php ENDPATH**/ ?>