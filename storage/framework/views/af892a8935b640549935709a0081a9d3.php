<?php if(session()->has('message')): ?>
<div class="alert alert-success">
    <?php echo e(session()->get('message')); ?>

</div>
<?php endif; ?>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/layouts/partials/message.blade.php ENDPATH**/ ?>