<?php if($setting->default_layout): ?>
    <?php echo $__env->make('backend.layouts.left-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('backend.layouts.top-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php echo $__env->make('backend.layouts.partials.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<input type="hidden" value="<?php echo e(current_country_code()); ?>" id="current_country_code">
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/layouts/app.blade.php ENDPATH**/ ?>