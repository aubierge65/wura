<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title><?php echo e(__('job_promote')); ?></title>
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
                    <div class="account-successfull-data">
                        <form id="form" action="<?php echo e(route('company.job.promote', $jobCreated->id)); ?>"
                            method="POST">
                            <?php echo csrf_field(); ?>
                            <h4><?php echo e(__('promote_job')); ?>: <?php echo e($jobCreated->title); ?></h4>
                            <p>
                                <?php echo Str::limit($jobCreated->description, 147); ?>

                            </p>
                            <div class="d-flex flex-column flex-md-row m-40 justify-content-between m-0 rt-mb-32">
                                <label class="form-check promote-form from-radio-custom">
                                    <img src="<?php echo e(asset('frontend/assets/images/all-img/always-on-top.png')); ?>"
                                        alt="top">
                                    <div class="tw-flex tw-items-center ms-4 tw-mt-6">
                                        <input <?php echo e($jobCreated->featured ? 'checked' : ''); ?> value="featured"
                                            class="form-check-input" type="radio" name="badge"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label f-size-14 pointer tw-mt-1"
                                            for="flexRadioDefault1">
                                            <?php echo e(__('featured')); ?> (<?php echo e(__('on_the_top')); ?>)
                                        </label>
                                    </div>
                                </label>
                                <label class="form-check promote-form from-radio-custom">
                                    <img src="<?php echo e(asset('frontend/assets/images/all-img/highlight-job.png')); ?>"
                                        alt="job image">
                                    <div class="tw-flex tw-items-center ms-4 tw-mt-6">
                                        <input <?php echo e($jobCreated->highlight ? 'checked' : ''); ?> value="highlight"
                                            class="form-check-input" type="radio" name="badge"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label f-size-14 pointer" for="flexRadioDefault2">
                                            <?php echo e(__('highlight')); ?>

                                        </label>
                                    </div>
                                </label>
                            </div>
                            <div class="tw-flex m-40 tw-items-center tw-justify-between m-0 bottom">
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
    <script>
        $('.form-check').on('click', function() {
            $('input:radio', this).prop('checked', true);
        });
    </script>
</body>

</html>
<?php /**PATH C:\wamp64\www\wura\resources\views/frontend/pages/company/promote-job.blade.php ENDPATH**/ ?>