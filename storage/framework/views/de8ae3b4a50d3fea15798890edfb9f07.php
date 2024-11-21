<?php $__env->startSection('description'); ?>
Service
<?php $__env->stopSection(); ?>
<?php $__env->startSection('og:image'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
Services
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<!-- About banner area  start -->

<div class="tw-w-full tw-bg-primary breadcrumbs-custom breadcrumbs-height">
    <div class="container">
        <div class="row align-items-center breadcrumbs-height">
            <div class="col-12 justify-content-center text-center">
                <div class="breadcrumb-title rt-mb-10">Nos services</div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('website.home')); ?>"><?php echo e(__('home')); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nos services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/frontend/pages/all-service.blade.php ENDPATH**/ ?>