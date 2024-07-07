<?php $__env->startSection('title', __('Landing Page')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Page Settings')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), ['']); ?></li>
            <li class="breadcrumb-item"><?php echo e(__('Create Page')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <div id="editor" contenteditable="true"></div>
    <button id="saveButton">حفظ التغييرات</button>


    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xl-7 col-lg-7 mx-auto">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="card">
                            <div class="tab-pane fade show active" id="apps-setting" role="tabpanel"
                                aria-labelledby="landing-apps-setting">
                                <?php echo Form::open([
                                    'route' => ['pages.store'],
                                    'method' => 'Post',
                                    'id' => 'froentend-form',
                                ]); ?>

                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0"><?php echo e(__('Page Setting')); ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php $__currentLoopData = $allLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row mb-5 p-3  rounded-3"
                                            style="background-color: rgb(235, 233, 233) !important">
                                            <div class="col-sm-12">
                                                <h4><?php echo e($language); ?></h4>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label'])); ?>

                                                    *
                                                    <?php echo Form::text('title_' . $localeCode, null, [
                                                        'class' => 'form-control',
                                                        'placeholder' => 'Enter Page Title',
                                                        'id' => 'title',
                                                    ]); ?>

                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <?php echo e(Form::label('description', __('Page Description'), ['class' => 'form-label'])); ?>

                                                    <?php echo Form::textarea('descriptions_' . $localeCode, null, [
                                                        'class' => 'form-control',
                                                        'rows' => '2',
                                                        'placeholder' => __('Enter Page Description'),
                                                    ]); ?>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <?php echo e(Form::label('body', __('Page Detail'), ['class' => 'form-label'])); ?>

                                                    <?php echo Form::textarea('body_' . $localeCode, null, [
                                                        'class' => 'form-control',
                                                        'rows' => '1',
                                                        'placeholder' => __('Enter Page body'),
                                                    ]); ?>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
                                        <a href="<?php echo e(route('pages.index')); ?>"
                                            class="btn btn-secondary"><?php echo e(__('Cancel')); ?></a>
                                        <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'id' => 'save-btn', 'class' => 'btn btn-primary'])); ?>

                                    </div>
                                </div>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('vendor/ckeditor/ckeditor.js')); ?>"></script>
    <script>
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token()])); ?>",
            filebrowserUploadMethod: 'form'
        });
    </script>

    <script>
        $(document).ready(function() {
            $.get("/public/html/about.html", function(data) {
                $("#editor").html(data);
                //                var bodyContent = $(data).find("body").html();
                //                $("#editor").html(bodyContent);
            });
            $("#saveButton").click(function() {
                var editedContent = $("#editor").html();

                console.log(editedContent);
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/pages/create.blade.php ENDPATH**/ ?>