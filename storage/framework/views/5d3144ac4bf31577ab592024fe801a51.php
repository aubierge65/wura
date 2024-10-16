<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['featured' => true]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['featured' => true]); ?>
<?php foreach (array_filter((['featured' => true]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if(!$job->job_provider): ?>
    <div class="tw-relative tw-h-full">
        <a href="<?php echo e(route('website.job.details', $job->slug)); ?>"
            class="tw-h-full card tw-card tw-block jobcardStyle1 <?php echo e($job->highlight ? 'gradient-bg' : ''); ?>">
            <div class="tw-p-6 tw-h-full">
                <div class="tw-mb-5">
                    <div class="tw-mb-1.5">
                        <span class="tw-text-[#18191C] tw-text-lg tw-font-medium">
                            <?php echo e($job->title); ?>

                        </span>
                    </div>
                    <div class="tw-flex tw-flex-wrap tw-gap-2 tw-items-center tw-mb-1.5">
                        <?php if($job->featured && $featured): ?>
                            <span
                                class="tw-text-[#06C] tw-text-[12px] tw-leading-[12px] tw-font-semibold tw-bg-[#E6F0FA] tw-px-2 tw-py-1 tw-rounded-[3px]"><?php echo e(__('featured')); ?></span>
                        <?php endif; ?>
                        <span
                            class="tw-text-[#0BA02C] tw-text-[12px] tw-leading-[12px] tw-font-semibold tw-bg-[#E7F6EA] tw-px-2 tw-py-1 tw-rounded-[3px]">
                            <?php echo e($job->job_type ? $job->job_type->name : ''); ?>

                        </span>
                    </div>
                    <div>
                        <span class="tw-text-sm tw-text-[#767F8C]">
                            <?php echo e(__('salary')); ?>:
                            <?php if($job->salary_mode == 'range'): ?>
                                <?php echo e(currencyAmountShort($job->min_salary)); ?> -
                                <?php echo e(currencyAmountShort($job->max_salary)); ?> <?php echo e(currentCurrencyCode()); ?>

                            <?php else: ?>
                                <?php echo e($job->custom_salary); ?>

                            <?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class="rt-single-icon-box tw-flex-wrap tw-gap-4">
                    <span>
                        <div class="tw-w-[56px] tw-h-[56px]">
                            <?php if($job->company): ?>
                                <img class="tw-rounded-lg tw-w-[56px] tw-h-[56px]" src="<?php echo e($job->company->logo_url); ?>"
                                    alt="logo" draggable="false">
                            <?php else: ?>
                                <svg style="width: 50px ; height: 50px ; color: black"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                                </svg>
                            <?php endif; ?>

                        </div>
                    </span>
                    <div class="iconbox-content">
                        <div class="tw-mb-1 tw-inline-flex">
                            <?php if($job->company): ?>
                                <span
                                    class="tw-text-base tw-font-medium tw-text-[#18191C] tw-card-title"><?php echo e($job->company->user->name); ?></span>
                            <?php else: ?>
                                <span class="tw-text-base tw-font-medium tw-text-[#18191C] tw-card-title">
                                    <?php echo e($job->company_name); ?></span>
                            <?php endif; ?>
                        </div>
                        <span class="tw-flex tw-items-center tw-gap-1">
                            <i class="ph-map-pin"></i>
                            <span class="tw-location"><?php echo e($job->country); ?></span>
                        </span>
                    </div>
                </div>
            </div>
        </a>
        <div class="tw-absolute tw-bottom-6 !tw-right-6">
            <div class="text-primary-500 hoverbg-primary-50 plain-button icon-button">
                <?php if(auth()->guard()->check()): ?>
                    <?php if(auth()->user()->role == 'candidate'): ?>
                        <a href="<?php echo e(route('website.job.bookmark', $job->slug)); ?>" class="tw-text-[#C8CCD1]">
                            <?php if($job->bookmarked): ?>
                                <?php if (isset($component)) { $__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.bookmark-icon','data' => ['width' => '24','height' => '24','fill' => '#0A65CC','stroke' => '#0A65CC']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.bookmark-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '24','height' => '24','fill' => '#0A65CC','stroke' => '#0A65CC']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff)): ?>
<?php $attributes = $__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff; ?>
<?php unset($__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff)): ?>
<?php $component = $__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff; ?>
<?php unset($__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff); ?>
<?php endif; ?>
                            <?php else: ?>
                                <?php if (isset($component)) { $__componentOriginal7a72b9226684e9407985bc93a886d857 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a72b9226684e9407985bc93a886d857 = $attributes; } ?>
<?php $component = App\View\Components\Svg\UnmarkIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.unmark-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\UnmarkIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a72b9226684e9407985bc93a886d857)): ?>
<?php $attributes = $__attributesOriginal7a72b9226684e9407985bc93a886d857; ?>
<?php unset($__attributesOriginal7a72b9226684e9407985bc93a886d857); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a72b9226684e9407985bc93a886d857)): ?>
<?php $component = $__componentOriginal7a72b9226684e9407985bc93a886d857; ?>
<?php unset($__componentOriginal7a72b9226684e9407985bc93a886d857); ?>
<?php endif; ?>
                            <?php endif; ?>
                        </a>
                    <?php else: ?>
                        <button type="button"
                            class="tw-text-[#C8CCD1] hoverbg-primary-50 plain-button icon-button no_permission">
                            <?php if (isset($component)) { $__componentOriginal7a72b9226684e9407985bc93a886d857 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a72b9226684e9407985bc93a886d857 = $attributes; } ?>
<?php $component = App\View\Components\Svg\UnmarkIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.unmark-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\UnmarkIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a72b9226684e9407985bc93a886d857)): ?>
<?php $attributes = $__attributesOriginal7a72b9226684e9407985bc93a886d857; ?>
<?php unset($__attributesOriginal7a72b9226684e9407985bc93a886d857); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a72b9226684e9407985bc93a886d857)): ?>
<?php $component = $__componentOriginal7a72b9226684e9407985bc93a886d857; ?>
<?php unset($__componentOriginal7a72b9226684e9407985bc93a886d857); ?>
<?php endif; ?>
                        </button>
                    <?php endif; ?>
                <?php else: ?>
                    <button type="button"
                        class="tw-text-[#C8CCD1] hover:tw-text-[#0A65CC] hoverbg-primary-50 plain-button icon-button login_required">
                        <?php if (isset($component)) { $__componentOriginal7a72b9226684e9407985bc93a886d857 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a72b9226684e9407985bc93a886d857 = $attributes; } ?>
<?php $component = App\View\Components\Svg\UnmarkIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.unmark-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\UnmarkIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a72b9226684e9407985bc93a886d857)): ?>
<?php $attributes = $__attributesOriginal7a72b9226684e9407985bc93a886d857; ?>
<?php unset($__attributesOriginal7a72b9226684e9407985bc93a886d857); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a72b9226684e9407985bc93a886d857)): ?>
<?php $component = $__componentOriginal7a72b9226684e9407985bc93a886d857; ?>
<?php unset($__componentOriginal7a72b9226684e9407985bc93a886d857); ?>
<?php endif; ?>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php if($job->job_provider && $job->job_provider == 'careerjet'): ?>
    <div class="tw-h-full">
        <a href="<?php echo e($job->url ?? '#'); ?>" target="_blank" class="card tw-card extra-jobs jobcardStyle1">
            <div class="tw-p-6">
                <div class="tw-mb-5">
                    <div class="tw-mb-1.5">
                        <span class="tw-text-[#18191C] tw-text-lg tw-font-medium">
                            <?php echo e($job->title ? \Illuminate\Support\Str::limit($job->title, 30) : 'No Title'); ?>

                        </span>
                    </div>
                    <?php if($job->salary): ?>
                        <div class="tw-flex tw-gap-2 tw-items-center">
                            <span class="tw-text-sm tw-text-[#767F8C]">
                                <?php echo e(__('salary')); ?>: <?php echo e($job->salary); ?>

                            </span>
                        </div>
                        <?php else: ?>
                        <div class="tw-flex tw-gap-2 tw-items-center">
                            <span class="tw-text-sm tw-text-[#767F8C]">
                                <?php echo e(__('salary')); ?>: <?php echo e(__('negotiable')); ?>

                            </span>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="rt-single-icon-box tw-flex-wrap tw-gap-4">
                    <div class="iconbox-content">
                        <div class="tw-mb-1 tw-inline-flex">
                            <span class="tw-text-base tw-font-medium tw-text-[#18191C] tw-card-title">
                                <?php echo e($job->company ?? 'No Company'); ?>

                            </span>
                        </div>
                        <span class="tw-flex tw-items-center tw-gap-1">
                            <i class="ph-map-pin"></i>
                            <span class="tw-location">
                                <?php echo e($job->locations ?? 'No Location'); ?>

                            </span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                </svg>
                            </span>
                        </span>
                    </div>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#767F8C"
                            viewBox="0 0 256 256">
                            <path
                                d="M224,104a8,8,0,0,1-16,0V59.32l-66.33,66.34a8,8,0,0,1-11.32-11.32L196.68,48H152a8,8,0,0,1,0-16h64a8,8,0,0,1,8,8Zm-40,24a8,8,0,0,0-8,8v72H48V80h72a8,8,0,0,0,0-16H48A16,16,0,0,0,32,80V208a16,16,0,0,0,16,16H176a16,16,0,0,0,16-16V136A8,8,0,0,0,184,128Z">
                            </path>
                        </svg>
                    </span>
                </div>
            </div>
        </a>
    </div>
<?php endif; ?>


<?php if($job->job_provider && $job->job_provider == 'indeed'): ?>
    <div class="tw-h-full">
        <a href="<?php echo e($job->url ?? '#'); ?>" target="_blank" class="card tw-card extra-jobs jobcardStyle1">
            <div class="tw-p-6">
                <div class="tw-mb-5">
                    <div class="tw-mb-1.5">
                        <span class="tw-text-[#18191C] tw-text-lg tw-font-medium">
                            <?php echo e($job->jobtitle ?? 'No Title'); ?>

                        </span>
                    </div>
                </div>
                <div class="rt-single-icon-box tw-flex-wrap tw-gap-4">
                    <div class="iconbox-content">
                        <div class="tw-mb-1 tw-inline-flex">
                            <span class="tw-text-base tw-font-medium tw-text-[#18191C] tw-card-title">
                                <?php echo e($job->company ?? 'No Company'); ?>

                            </span>
                        </div>
                        <span class="tw-flex tw-items-center tw-gap-1">
                            <i class="ph-map-pin"></i>
                            <span class="tw-location">
                                <?php echo e($job->formattedLocationFull ?? 'No Location'); ?>

                            </span>
                        </span>
                    </div>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#767F8C"
                            viewBox="0 0 256 256">
                            <path
                                d="M224,104a8,8,0,0,1-16,0V59.32l-66.33,66.34a8,8,0,0,1-11.32-11.32L196.68,48H152a8,8,0,0,1,0-16h64a8,8,0,0,1,8,8Zm-40,24a8,8,0,0,0-8,8v72H48V80h72a8,8,0,0,0,0-16H48A16,16,0,0,0,32,80V208a16,16,0,0,0,16,16H176a16,16,0,0,0,16-16V136A8,8,0,0,0,184,128Z">
                            </path>
                        </svg>
                    </span>
                </div>
            </div>
        </a>
    </div>
<?php endif; ?>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/components/website/job/job-card.blade.php ENDPATH**/ ?>