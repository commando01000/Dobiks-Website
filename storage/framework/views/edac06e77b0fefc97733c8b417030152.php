<?php echo $__env->make('layouts.front.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layouts.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->yieldContent('js'); ?>
</body>
</html>
<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/layouts/front/app.blade.php ENDPATH**/ ?>