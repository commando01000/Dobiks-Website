<?php echo $__env->make('layouts.front.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layouts.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('js'); ?>
<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_assets/assets/js/home.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>

</html>
<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/layouts/front/app.blade.php ENDPATH**/ ?>