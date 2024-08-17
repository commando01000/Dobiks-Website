<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />

    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(Utility::getsettings('apps_name')); ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />


    

    

    <link rel="stylesheet" href="<?php echo e(asset('assets/front_assets/assets/css/styles.css')); ?>?v=<?= time() ?>" />
    <?php echo $__env->yieldContent('style'); ?>
</head>

<body>
<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/layouts/front/head.blade.php ENDPATH**/ ?>