<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title><?php echo e(config('app.name')); ?></title>

    <?php echo $__env->make('frontend.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>
    <style>
        .ck-editor__editable_inline {
            min-height: 250px;
        }
    </style>
</head>

<body class="" dir="<?php echo e(langDirection()); ?>">
    <header class="site-header rt-fixed-top account-setup-header">
        <div class="main-header">
            <div class="navbar">
                <div class="container">
                    <div class="row w-100">
                        <div class="col-md-6">
                            <a href="<?php echo e(route('website.home')); ?>" class="brand-logo"><img
                                    src="<?php echo e($setting->light_logo_url); ?>" alt="jobpilot_logo"></a>
                        </div>
                        <div class="col-md-6 d-md-flex align-items-center justify-content-end">
                            <div class="progress-wrap">
                                <div class="progress-title d-flex align-items-center justify-content-between rt-mb-12">
                                    <p class="text-gray-500 f-size-14 m-0"><?php echo e(__('setup_progress')); ?></p>
                                    <h4 class="text-primary-500 f-size-14 ft-wt-5 lh-1 m-0">
                                        <span class="test">
                                            100%
                                        </span> <?php echo e(__('completed')); ?>

                                    </h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar w-100-p"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.container -->
            </div><!-- /.navbar -->
        </div><!-- /.main-header -->
    </header>


    <div class="dashboard-wrapper account-setup">
        <div class="container">
            <fieldset>
                <div class="account-successfull-wrap">
                    <div class="account-successfull-icon">
                        <?php if (isset($component)) { $__componentOriginal983b6ef0f6dfe29816258846451fc867 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal983b6ef0f6dfe29816258846451fc867 = $attributes; } ?>
<?php $component = App\View\Components\Svg\CheckDoubleIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.check-double-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\CheckDoubleIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal983b6ef0f6dfe29816258846451fc867)): ?>
<?php $attributes = $__attributesOriginal983b6ef0f6dfe29816258846451fc867; ?>
<?php unset($__attributesOriginal983b6ef0f6dfe29816258846451fc867); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal983b6ef0f6dfe29816258846451fc867)): ?>
<?php $component = $__componentOriginal983b6ef0f6dfe29816258846451fc867; ?>
<?php unset($__componentOriginal983b6ef0f6dfe29816258846451fc867); ?>
<?php endif; ?>
                    </div>
                    <div class="account-successfull-data">
                        <h4>🎉 <?php echo e(__('congratulations_you_profile_is_complete')); ?></h4>
                        <p><?php echo e(__('now_you_can_start_using_your_account_you_can_post_job_purchase_plan_for_upcoming_job_and_many_more_enjoy')); ?>!
                        </p>
                    </div>
                    <a href="<?php echo e(route('company.dashboard')); ?>" class="btn bg-gray-50 rt-mr-8">
                        <?php echo e(__('view_dashboard')); ?>

                    </a>
                    <a href="<?php echo e(route('company.job.create')); ?>" class="btn btn-primary">
                        <span class="button-content-wrapper ">
                            <span class="button-icon align-icon-right">
                                <i class="ph-arrow-right"></i>
                            </span>
                            <span class="button-text">
                                <?php echo e(__('post_job')); ?>

                            </span>
                        </span>
                    </a>
                </div>
            </fieldset>
        </div>
    </div>

    <div class="rt-mobile-menu-overlay"></div><!-- /.rt-mobile-menu-overlay -->

    <!-- scripts -->
    <?php echo $__env->make('frontend.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/frontend/pages/company/account-progress/complete.blade.php ENDPATH**/ ?>