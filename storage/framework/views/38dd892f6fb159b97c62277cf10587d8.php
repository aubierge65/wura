<?php $__env->startComponent('mail::message'); ?>
# Hello, <?php echo e($candidate_name); ?>


<?php echo $body; ?>

<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/mails/candidate-email.blade.php ENDPATH**/ ?>