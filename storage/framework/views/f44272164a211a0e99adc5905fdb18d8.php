<?php if(session()->has('message')): ?>
<div class="alert alert-success">
    <?php echo e(session()->get('message')); ?>

</div>
<?php endif; ?>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/backend/layouts/partials/message.blade.php ENDPATH**/ ?>