<?php $__env->startComponent('mail::message'); ?>
# Bonjour <?php echo e($candidateName); ?>,

<?php echo e($body); ?>


<!-- **Détails du poste :**
- **Titre :** <?php echo e($job->title); ?>

- **Entreprise :** <?php echo e($job->company_name); ?>

- **Localisation :** <?php echo e($job->location); ?>

- **Type :** <?php echo e($job->type); ?>

- **Description :** <?php echo e($job->description); ?> -->

Pour plus de détails, veuillez [cliquer ici](<?php echo e(route('job.show', $job->id)); ?>).

Cordialement,<br>
L'équipe de <?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/mails/job.blade.php ENDPATH**/ ?>