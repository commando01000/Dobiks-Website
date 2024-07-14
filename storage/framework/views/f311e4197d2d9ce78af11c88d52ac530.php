<?php
    $user_theme = \Auth::user();
    $color = $user_theme->theme_color;
    $chatcolor = '#145388';
    if ($color == 'theme-1') {
        $chatcolor = '#0CAF60';
    } elseif ($color == 'theme-2') {
        $chatcolor = '#584ED2';
    } elseif ($color == 'theme-3') {
        $chatcolor = '#6FD943';
    } elseif ($color == 'theme-4') {
        $chatcolor = '#145388';
    } elseif ($color == 'theme-5') {
        $chatcolor = '#B9406B';
    } elseif ($color == 'theme-6') {
        $chatcolor = '#008ECC';
    } elseif ($color == 'theme-7') {
        $chatcolor = '#922C88';
    } elseif ($color == 'theme-8') {
        $chatcolor = '#C0A145';
    } elseif ($color == 'theme-9') {
        $chatcolor = '#48494B';
    } elseif ($color == 'theme-10') {
        $chatcolor = '#0C7785';
    }
?>

<?php $__env->startSection('title', __('Dashboard')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Dashboard')); ?></h4>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/dragdrop/dragula.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/datepicker-bs5.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('vendor/apex-chart/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/dragdrop/dragula.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/choices.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/datepicker-full.min.js')); ?>"></script>


    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).attr('data-url')).select();
            document.execCommand("copy");
            $temp.remove();
            show_toastr('Great!', '<?php echo e(__('Copy Link Successfully.')); ?>', 'success',
                '<?php echo e(asset('assets/images/notification/ok-48.png')); ?>', 4000);
        }
    </script>

    <script>
        $(document).on('click', '#EventCalender', function() {
            var url = $(this).attr('data-url');
            $.ajax({
                type: 'GET',
                url: url,
                data: {},
                success: function(response) {
                    $("#common_modal .modal-title").html('<?php echo e(__('Create Event')); ?>');
                    $("#common_modal .body").html(response);
                    if ($('#user').length) {
                        var multipleCancelButton = new Choices(
                            '#user', {
                                removeItemButton: true,
                            });
                    }
                    const start_date = new Datepicker(document
                        .querySelector(
                            '#start_date'), {
                        buttonClass: 'btn',
                        format: 'dd/mm/yyyy'
                    });
                    const end_date = new Datepicker(document
                        .querySelector(
                            '#end_date'), {
                        buttonClass: 'btn',
                        format: 'dd/mm/yyyy'
                    });
                    $("#common_modal").modal('show');
                },
                error: function(response) {}
            });
        });
    </script>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/back/dashboard/index.blade.php ENDPATH**/ ?>