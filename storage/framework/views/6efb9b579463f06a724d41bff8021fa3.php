<?php echo Form::open([
    'route' => 'business.growth.store',
    'method' => 'Post',
    'class' => 'form-horizontal',
    'data-validate',
    'no-validate',
]); ?>

<div class="modal-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <?php echo e(Form::label('business_growth_title', __('Business Growth Title'), ['class' => 'form-label'])); ?>

                <?php echo Form::text('business_growth_title', null, [
                    'class' => 'form-control',
                    'placeholder' => __('Enter business growth title'),
                ]); ?>

            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <div class="text-end">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
        <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

    </div>
</div>
<?php echo e(Form::close()); ?>

<?php /**PATH D:\company\backend\resources\views/back/business-growth/create.blade.php ENDPATH**/ ?>