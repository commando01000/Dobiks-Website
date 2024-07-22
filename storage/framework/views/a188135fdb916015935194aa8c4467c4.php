<?php $__env->startSection('title', 'Create Leadership'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Create Member')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('leadership.index')); ?>"><?php echo e(__('Our Team')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Create Member')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="section-body">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5> <?php echo e(__('Create Member')); ?></h5>
                    </div>
                    <?php echo Form::open([
                        'route' => 'leadership.store',
                        'method' => 'Post',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]); ?>

                    <div class="card-body">
                        <div class="row">



                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('name', __('Name'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('name', null, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Name'),
                                        'required' => 'required',
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('position', __('position'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('position', null, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Position'),
                                        'required' => 'required',
                                    ]); ?>

                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('photo', __('Photo'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::file('photo', ['class' => 'form-control', 'required' => 'required']); ?>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('facebook', __('Facebook'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => __('Enter Facebook Link')]); ?>


                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('twitter', __('Twitter'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => __('Enter Twitter Link')]); ?>


                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('linkedin', __('Linkedin'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::text('linkedin', null, ['class' => 'form-control', 'placeholder' => __('Enter Linkedin Link')]); ?>


                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('github', __('Github'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::text('github', null, ['class' => 'form-control', 'placeholder' => __('Enter Github Link')]); ?>


                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('dribble', __('Dribble'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::text('dribble', null, ['class' => 'form-control', 'placeholder' => __('Enter Dribble Link')]); ?>


                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('bio', __('Bio'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::textarea('bio', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter Bio'),
                                    ]); ?>

                                </div>
                            </div>

                            <div class="container py-4">
                                <div class="row">
                                    <div class="col-md-12 form_sec_outer_task border">
                                        <div class="row">
                                            <div class="col-md-12 bg-light p-2 mb-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h4 class="frm_section_n"><?php echo e(__('Statistics')); ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label><?php echo e(__('Category')); ?></label>
                                            </div>
                                            <div class="col-md-4">
                                                <label><?php echo e(__('Number')); ?></label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <div class="col-md-12 form_field_outer p-0">
                                                <div class="row form_field_outer_row">
                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control w_90"
                                                            name="details[0][category]" id="category_1"
                                                            placeholder="Enter category" />
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <input type="text" class="form-control" name="details[0][number]"
                                                            id="number_1" placeholder="Enter number" />
                                                    </div>
                                                    <div class="form-group col-md-2 add_del_btn_outer">
                                                        <button type="button" class="btn_round add_node_btn_frm_field"
                                                            title="Copy or clone this row">
                                                            <i class="fas fa-copy"></i>
                                                        </button>
                                                        <button type="button" class="btn_round remove_node_btn_frm_field"
                                                            disabled>
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ml-0 bg-light mt-3 border py-3">
                                            <div class="col-md-12">
                                                <button type="button"
                                                    class="btn btn-outline-lite py-0 add_new_frm_field_btn"><i
                                                        class="fas fa-plus add_icon"></i>
                                                    <?php echo e(__('Add New field row')); ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            <?php echo Html::link(route('leadership.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

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
    <script>
        CKEDITOR.replace('bio', {
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
                            <button type="button" class="btn_round add_node_btn_frm_field" title="Copy or clone this row">
                                <i class="fas fa-copy"></i>
                            </button>
                            <button type="button" class="btn_round remove_node_btn_frm_field">
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

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/leadrship/create.blade.php ENDPATH**/ ?>