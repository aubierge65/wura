<?php $__env->startSection('description'); ?>
<?php
$data = metaData('jobs');
?>
<?php echo e($data->description); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('og:image'); ?>
<?php echo e(asset($data->image)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
<?php echo e($data->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<form action="<?php echo e(route('website.job')); ?>" method="GET" id="job_search_form">
    

    <div class="job-filter-overlay"></div>

    <div class="joblist-content">
        <div class="container">
            <?php if(!empty($popularTags) && count($popularTags)): ?>
                <?php if (isset($component)) { $__componentOriginal41907c332a730127d0bb1783c7d657b6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal41907c332a730127d0bb1783c7d657b6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.job.job-sorting','data' => ['popularTags' => $popularTags]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.job.job-sorting'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['popular-tags' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($popularTags)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal41907c332a730127d0bb1783c7d657b6)): ?>
<?php $attributes = $__attributesOriginal41907c332a730127d0bb1783c7d657b6; ?>
<?php unset($__attributesOriginal41907c332a730127d0bb1783c7d657b6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal41907c332a730127d0bb1783c7d657b6)): ?>
<?php $component = $__componentOriginal41907c332a730127d0bb1783c7d657b6; ?>
<?php unset($__componentOriginal41907c332a730127d0bb1783c7d657b6); ?>
<?php endif; ?>
            <?php endif; ?>

            <div class="row mt-5">
                <h5><?php echo e(__('latest_jobs')); ?></h5>

                <div class="row">
                    <?php $__empty_1 = true; $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> <!-- Utilisation directe de $jobs -->
                        <div class="col-xl-4 col-md-6 fade-in-bottom rt-mb-24 cat-1 cat-3">
                            <?php if (isset($component)) { $__componentOriginalf097da45b5d9888f27135d369e0b9a19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf097da45b5d9888f27135d369e0b9a19 = $attributes; } ?>
<?php $component = App\View\Components\Website\Job\JobCard::resolve(['job' => $job] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.job.job-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\Job\JobCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf097da45b5d9888f27135d369e0b9a19)): ?>
<?php $attributes = $__attributesOriginalf097da45b5d9888f27135d369e0b9a19; ?>
<?php unset($__attributesOriginalf097da45b5d9888f27135d369e0b9a19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf097da45b5d9888f27135d369e0b9a19)): ?>
<?php $component = $__componentOriginalf097da45b5d9888f27135d369e0b9a19; ?>
<?php unset($__componentOriginalf097da45b5d9888f27135d369e0b9a19); ?>
<?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-12" id="loading-spinner">
                            <div class="card text-center">
                                <?php if (isset($component)) { $__componentOriginal29785112a59eec7800237cc87bc86e3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29785112a59eec7800237cc87bc86e3e = $attributes; } ?>
<?php $component = App\View\Components\NotFound::resolve(['message' => ''.e(__('no_data_found')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\NotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $attributes = $__attributesOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__attributesOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $component = $__componentOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__componentOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div id="mix-job" class="row"></div>
                </div>
            </div>

        </div>
    </div>
</form>

<!-- Google AdSense area -->
<?php if(advertisementCode('home_page_center')): ?>
    <div class="container my-4">
        <?php echo advertisementCode('home_page_center'); ?>

    </div>
<?php endif; ?>
<!-- Google AdSense area end -->

<div class="rt-spacer-100 rt-spacer-md-50"></div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/components/website/job/load-more-jobs.blade.php ENDPATH**/ ?>