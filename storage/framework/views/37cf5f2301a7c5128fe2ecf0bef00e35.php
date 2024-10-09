
<?php $__env->startSection('title'); ?>
    <?php echo e(__('website_settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('settings')); ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('home')); ?></a></li>
                <li class="breadcrumb-item active"><?php echo e(__('settings')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->yieldContent('website-settings'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/backend/settings/setting-layout.blade.php ENDPATH**/ ?>