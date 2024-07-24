<?php $__env->startSection('title', __('Edit Statistics')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Edit Statistics')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('statistics.index')); ?>"><?php echo e(__('Statistics')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Edit Statistics')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="section-body">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><?php echo e(__('Edit Statistics')); ?></h5>
                    </div>
                    <?php echo Form::model($statistic, [
                        'route' => ['statistics.update', $statistic->id],
                        'method' => 'PUT',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]); ?>

                    <div class="container py-4">
                        <div class="row">
                            <div class="col-md-12 form_sec_outer_task border">
                                <div class="row">
                                    <div class="col-md-12 bg-light p-2 mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="frm_section_n">Statistics</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Category</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Number</label>
                                    </div>
                                </div>
                                <div class="col-md-12 p-0">
                                    <div class="col-md-12 form_field_outer p-0">
                                        <?php $__currentLoopData = $statistic->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="row form_field_outer_row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control w_90"
                                                        name="details[<?php echo e($index); ?>][category]"
                                                        id="category_<?php echo e($index); ?>" placeholder="Enter category"
                                                        value="<?php echo e(old('details.' . $index . '.category', $detail->category)); ?>" />
                                                    <?php $__errorArgs = ['details.' . $index . '.category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="text-danger"><?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="text" class="form-control"
                                                        name="details[<?php echo e($index); ?>][number]"
                                                        id="number_<?php echo e($index); ?>" placeholder="Enter number"
                                                        value="<?php echo e(old('details.' . $index . '.number', $detail->number)); ?>" />
                                                    <?php $__errorArgs = ['details.' . $index . '.number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="text-danger"><?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <input type="hidden" name="details[<?php echo e($index); ?>][id]"
                                                    value="<?php echo e($detail->id); ?>" />
                                                <div class="form-group col-md-2 add_del_btn_outer">
                                                    <button class="btn_round add_node_btn_frm_field"
                                                        title="Copy or clone this row">
                                                        <i class="fas fa-copy"></i>
                                                    </button>
                                                    <button class="btn_round remove_node_btn_frm_field">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div class="row ml-0 bg-light mt-3 border py-3">
                                    <div class="col-md-12">
                                        <button class="btn btn-outline-lite py-0 add_new_frm_field_btn"><i
                                                class="fas fa-plus add_icon"></i> Add New field row</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 bg-light p-2 mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="frm_section_n">Optional Fields</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('body', __('short Description'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::textarea('short_description', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter short description'),
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('body', __('Description'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::textarea('description', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter description'),
                                    ]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            <?php echo Html::link(route('statistics.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                            <?php echo e(Form::button(__('Update'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

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
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token()])); ?>",
            filebrowserUploadMethod: 'form'
        });

        $(document).ready(function() {
            // Clone method
            $("body").on("click", ".add_node_btn_frm_field", function(e) {
                e.preventDefault();
                var index = $(e.target).closest(".form_field_outer").find(".form_field_outer_row").length +
                    1;
                var cloned_el = $(e.target).closest(".form_field_outer_row").clone(true);
                cloned_el.find("input").val(''); // Clear the values of cloned elements
                $(e.target).closest(".form_field_outer").append(cloned_el);
                $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled",
                    false);
                $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);
                cloned_el.find("input[type='text']").each(function() {
                    var oldId = $(this).attr('id');
                    var newId = oldId.split('_')[0] + '_' + index;
                    $(this).attr('id', newId);
                });
            });

            // Add new form field row
            $("body").on("click", ".add_new_frm_field_btn", function(e) {
                e.preventDefault();
                var index = $(".form_field_outer").find(".form_field_outer_row").length + 1;
                $(".form_field_outer").append(`
                    <div class="row form_field_outer_row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control w_90" name="details[${index}][category]" id="category_${index}" placeholder="Enter category" />
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="details[${index}][number]" id="number_${index}" placeholder="Enter number" />
                        </div>
                        <input type="hidden" name="details[${index}][id]" />
                        <div class="form-group col-md-2 add_del_btn_outer">
                            <button class="btn_round add_node_btn_frm_field" title="Copy or clone this row">
                                <i class="fas fa-copy"></i>
                            </button>
                            <button class="btn_round remove_node_btn_frm_field" disabled>
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                `);
                $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled",
                    false);
                $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);
            });

            // Remove form field row
            $("body").on("click", ".remove_node_btn_frm_field", function(e) {
                e.preventDefault();
                $(this).closest(".form_field_outer_row").remove();
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/statistics/edit.blade.php ENDPATH**/ ?>