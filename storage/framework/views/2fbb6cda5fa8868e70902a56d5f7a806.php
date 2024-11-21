<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title><?php echo e(__('your_job_creation_is_complete')); ?></title>
    <?php echo $__env->make('frontend.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="" dir="<?php echo e(langDirection()); ?>">
    <header class="site-header rt-fixed-top account-setup-header">
        <div class="main-header">
            <div class="navbar">
                <div class="container">
                    <div class="row w-100">
                        <div class="col-md-6">
                            <a href="<?php echo e(route('website.home')); ?>" class="brand-logo"><img
                                    src="<?php echo e($setting->dark_logo_url); ?>" alt="jobpilot_logo"></a>
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
                    <!-- <div class="account-successfull-icon">
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
                    </div> -->
                    <div class="account-successfull-data">
                        <h4>🎉 <?php echo e(__('congratulation')); ?>, <?php echo e(__('your_job_creation_is_complete')); ?></h4>
                        <p class="p-0 m-0"><?php echo e(__('you_can_manage_your_form_my_jobs_section_in_your_dashboard')); ?></p>
                        <a href="<?php echo e(route('company.myjob')); ?>" class="btn btn-outline-primary">
                            <span class="button-content-wrapper ">
                                <span class="button-icon align-icon-right">
                                    <i class="ph-arrow-right"></i>
                                </span>
                                <span class="button-text">
                                    <?php echo e(__('view_jobs')); ?>

                                </span>
                            </span>
                        </a>
                        <hr>
                        <form id="form" action="<?php echo e(route('company.job.promote', $jobCreated->id)); ?>"
                            method="POST">
                            <?php echo csrf_field(); ?>
                            <h4><?php echo e(__('promote_job')); ?>: <?php echo e($jobCreated->title); ?></h4>
                            <p>
                                <?php echo Str::limit($jobCreated->description, 50); ?>

                            </p>
                            <div class="d-flex flex-column flex-md-row m-40 justify-content-between m-0 rt-mb-32">
                                <div class="form-check promote-form from-radio-custom">
                                    <?php if (isset($component)) { $__componentOriginalef163ca089cf868ae27cac8e9c7a8b44 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef163ca089cf868ae27cac8e9c7a8b44 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.featured-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.featured-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef163ca089cf868ae27cac8e9c7a8b44)): ?>
<?php $attributes = $__attributesOriginalef163ca089cf868ae27cac8e9c7a8b44; ?>
<?php unset($__attributesOriginalef163ca089cf868ae27cac8e9c7a8b44); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef163ca089cf868ae27cac8e9c7a8b44)): ?>
<?php $component = $__componentOriginalef163ca089cf868ae27cac8e9c7a8b44; ?>
<?php unset($__componentOriginalef163ca089cf868ae27cac8e9c7a8b44); ?>
<?php endif; ?>
                                    <div class="d-flex align-items-center ms-4 mt-4">
                                        <input <?php echo e($jobCreated->featured ? 'checked' : ''); ?> value="featured"
                                            class="form-check-input" type="radio" name="badge"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label f-size-14 pointer" for="flexRadioDefault1">
                                            <?php echo e(__('featured')); ?> (<?php echo e(__('on_the_top')); ?>)
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check promote-form from-radio-custom">
                                    <?php if (isset($component)) { $__componentOriginalbd74e2d5f3f4c2074fd5b619f7a59055 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd74e2d5f3f4c2074fd5b619f7a59055 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.highlight-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.highlight-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd74e2d5f3f4c2074fd5b619f7a59055)): ?>
<?php $attributes = $__attributesOriginalbd74e2d5f3f4c2074fd5b619f7a59055; ?>
<?php unset($__attributesOriginalbd74e2d5f3f4c2074fd5b619f7a59055); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd74e2d5f3f4c2074fd5b619f7a59055)): ?>
<?php $component = $__componentOriginalbd74e2d5f3f4c2074fd5b619f7a59055; ?>
<?php unset($__componentOriginalbd74e2d5f3f4c2074fd5b619f7a59055); ?>
<?php endif; ?>
                                    <div class="d-flex align-items-center ms-5">
                                        <input <?php echo e($jobCreated->highlight ? 'checked' : ''); ?> value="highlight"
                                            class="form-check-input" type="radio" name="badge"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label f-size-14 pointer" for="flexRadioDefault2">
                                            <?php echo e(__('highlight')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex m-40 justify-content-between m-0 bottom">
                                <a href="<?php echo e(route('company.myjob')); ?>">
                                    <button id="submitButton" type="button" class="btn mer-0 p-0 rt-mb-15">
                                        <span class="button-content-wrapper ">
                                            <span class="button-text">
                                                <?php echo e(__('skip_now')); ?>

                                            </span>
                                        </span>
                                    </button>
                                </a>
                                <button id="submitButton" type="submit" class="btn mer-0 btn-primary rt-mb-15">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right">
                                            <?php if (isset($component)) { $__componentOriginald1d40b39616fb8ccef1d5f081d8de333 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald1d40b39616fb8ccef1d5f081d8de333 = $attributes; } ?>
<?php $component = App\View\Components\Svg\RightarrowIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.rightarrow-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\RightarrowIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald1d40b39616fb8ccef1d5f081d8de333)): ?>
<?php $attributes = $__attributesOriginald1d40b39616fb8ccef1d5f081d8de333; ?>
<?php unset($__attributesOriginald1d40b39616fb8ccef1d5f081d8de333); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald1d40b39616fb8ccef1d5f081d8de333)): ?>
<?php $component = $__componentOriginald1d40b39616fb8ccef1d5f081d8de333; ?>
<?php unset($__componentOriginald1d40b39616fb8ccef1d5f081d8de333); ?>
<?php endif; ?>
                                        </span>
                                        <span class="button-text">
                                            <?php echo e(__('promote_job')); ?>

                                        </span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>

    <?php echo $__env->make('frontend.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script></script>
</body>

</html>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/frontend/pages/company/job-created-success.blade.php ENDPATH**/ ?>