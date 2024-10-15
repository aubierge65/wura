<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title><?php echo e(__('setup_progress')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/assets/css/bootstrap-datepicker.min.css">
    <?php echo $__env->make('frontend.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body dir="<?php echo e(langDirection()); ?>">

    <?php echo $__env->yieldContent('content'); ?>
    <div class="rt-mobile-menu-overlay"></div><!-- /.rt-mobile-menu-overlay -->

    <!-- PWA Button Start -->
    <button class="pwa-install-btn bg-white position-fixed d-none" id="installApp">
        <img src="<?php echo e(asset('pwa-btn.png')); ?>" alt="Install App">
    </button>
    <!-- PWA Button End -->

    <!-- scripts -->
    <?php echo $__env->make('frontend.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap-datepicker.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>

</body>

</html>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/frontend/auth/layouts/progress.blade.php ENDPATH**/ ?>