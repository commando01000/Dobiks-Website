<?php $__env->startSection('title', __('Languages')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Languages')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><?php echo e(__('Languages')); ?></li>
        </ul>
        <div class="float-end">
            <div class="d-flex align-items-center">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-language')): ?>
                    <a href="<?php echo e(route('create.language', [$currantLang])); ?>" data-bs-toggle="tooltip"
                        data-bs-original-title="<?php echo e(__('Create')); ?>" id="create" class="btn btn-sm btn-primary"
                        data-bs-placement="bottom">
                        <i class="ti ti-plus"></i>
                    </a>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-language')): ?>
                    <?php echo Form::open([
                        'method' => 'DELETE',
                        'route' => ['lang.destroy', $currantLang],
                        'id' => 'delete-form-' . $currantLang,
                    ]); ?>

                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                        data-bs-original-title="<?php echo e(__('Delete')); ?>"
                        class="btn btn-sm btn-danger float-end btn-lg text-light ms-1 show_confirm">
                        <i class="ti ti-trash"></i>
                    </a>
                    <?php echo Form::close(); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">

                <div class="col-xl-3">
                    <div class="card sticky-top mt-3">
                        <div class="list-group list-group-flush" id="useradd-sidenav">
                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('manage.language', [$lang])); ?>"
                                    class="list-group-item list-group-item-action border-0 <?php echo e($currantLang == $lang ? 'active' : ''); ?>"><?php echo e(Str::upper($lang)); ?>

                                    <div class="float-end"><i class="ti ti-chevron-right"></i></div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9">
                    <div id="useradd-1" class="card">
                        <div class="card-header">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <?php echo Html::link('#account-details', __('Labels'), [
                                        'data-bs-toggle' => 'pill',
                                        'role' => 'tab',
                                        'aria-selected' => 'true',
                                        'aria-controls' => 'account-details',
                                        'class' => 'nav-link active',
                                        'id' => 'account-details-tab',
                                    ]); ?>

                                </li>
                                <li class="nav-item">
                                    <?php echo Html::link('#login-details', __('Message'), [
                                        'data-bs-toggle' => 'pill',
                                        'role' => 'tab',
                                        'aria-selected' => 'false',
                                        'aria-controls' => 'login-details',
                                        'class' => 'nav-link',
                                        'id' => 'login-details-tab',
                                    ]); ?>

                                </li>
                                <li class="nav-item">
                                    <a href="#create" class="nav-link" data-bs-toggle="modal"
                                        data-bs-target="#addContentModal" role="tab" aria-selected="false"
                                        aria-controls="login-details" id="login-details-tab"><?php echo e(__('Create')); ?></a>
                                </li>
                            </ul>
                        </div>

                        <?php echo Form::open([
                            'route' => ['store.language.data', [$currantLang]],
                            'method' => 'POST',
                        ]); ?>

                        <div class="card-footer">
                            <div class="col-lg-12 float-end mb-3">
                                <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary float-end'])); ?>

                            </div>
                        </div>

                        <?php echo Form::close(); ?>


                        <div class="card-body pt-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="account-details" role="tabpanel"
                                    aria-labelledby="account-details-tab">

                                    <div class="row form-group">
                                        <?php $__currentLoopData = $arrLabel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-6">
                                                <div class="mt-3">
                                                    <?php echo e(Form::label('example3cols1Input', $label, ['class' => 'form-label'])); ?>

                                                    <?php echo e(Form::text("label[$label]", $value, ['class' => 'form-control'])); ?>

                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>

                                <div class="tab-pane" id="login-details" role="tabpanel"
                                    aria-labelledby="login-details-tab">
                                    <div class="row form-group">
                                        <?php $__currentLoopData = $arrMessage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fileName => $fileValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-lg-12">
                                                <h4><?php echo e(ucfirst($fileName)); ?></h4>
                                            </div>
                                            <?php $__currentLoopData = $fileValue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(is_array($value)): ?>
                                                    <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label2 => $value2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if(is_array($value2)): ?>
                                                            <?php $__currentLoopData = $value2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label3 => $value3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if(is_array($value3)): ?>
                                                                    <?php $__currentLoopData = $value3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label4 => $value4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if(is_array($value4)): ?>
                                                                            <?php $__currentLoopData = $value4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label5 => $value5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <div class="col-md-6">
                                                                                    <div class="mt-3">
                                                                                        <?php echo e(Form::label('message', $fileName . $label . $label2 . $label3 . $label4 . $label5, ['class' => 'form-label'])); ?>

                                                                                        <?php echo e(Form::text("message[$fileName][$label][$label2][$label3][$label4][$label5]", $value5, ['class' => 'form-control'])); ?>

                                                                                    </div>
                                                                                </div>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php else: ?>
                                                                            <div class="col-lg-6">
                                                                                <div class="mt-3">
                                                                                    <?php echo e(Form::label('message', $fileName . $label . $label2 . $label3 . $label4, ['class' => 'form-label'])); ?>

                                                                                    <?php echo e(Form::text("message[$fileName][$label][$label2][$label3][$label4]", $value4, ['class' => 'form-control'])); ?>

                                                                                </div>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php else: ?>
                                                                    <div class="col-lg-6">
                                                                        <div class="mt-1">
                                                                            <?php echo e(Form::label('message', $fileName . $label . $label2 . $label3, ['class' => 'form-label'])); ?>

                                                                            <?php echo e(Form::text("message[$fileName][$label][$label2][$label3]", $value3, ['class' => 'form-control'])); ?>

                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php else: ?>
                                                            <div class="col-lg-6">
                                                                <div class="mt-1">
                                                                    <?php echo e(Form::label('message', $fileName . $label . $label2, ['class' => 'form-label'])); ?>

                                                                    <?php echo e(Form::text("message[$fileName][$label][$label2]", $value2, ['class' => 'form-control'])); ?>

                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <div class="col-lg-6">
                                                        <div class="mt-1">
                                                            <?php echo e(Form::label('message', $fileName . $label, ['class' => 'form-label'])); ?>

                                                            <?php echo e(Form::text("message[$fileName][$label]", $value, ['class' => 'form-control'])); ?>

                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="col-lg-12 float-end mb-3">
                                <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary float-end'])); ?>

                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addContentModal" tabindex="-1" aria-labelledby="addContentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addContentModalLabel">Add Content to JSON File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addContentForm" method="post" action="<?php echo e(route('language.add')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label for="key" class="form-label">Key:</label>
                            <input type="text" class="form-control" id="key" name="key" required>
                        </div>

                        <?php $__currentLoopData = $allLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mb-3">
                                <label for="value_<?php echo e($localeCode); ?>" class="form-label"><?php echo e($language); ?>

                                    Value:</label>
                                <input type="text" class="form-control" id="value_<?php echo e($localeCode); ?>"
                                    name="values[<?php echo e($localeCode); ?>]" required>
                                <input type="hidden" name="languageFiles[]" value="<?php echo e($localeCode); ?>">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <input type="submit" class="btn btn-primary" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <link href="<?php echo e(asset('vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/js/plugins/choices.min.js')); ?>"></script>
    <script>
        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#useradd-sidenav',
            offset: 300
        })
    </script>
    <script>
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
    </script>
    <script src="<?php echo e(asset('vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')); ?>"></script>
    <script>
        $(".inputtags").tagsinput('items');
    </script>
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/lang/index.blade.php ENDPATH**/ ?>