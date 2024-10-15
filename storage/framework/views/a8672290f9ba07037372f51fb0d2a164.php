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
    <?php echo e($data->title . ' | ' . ucfirst(strtolower(Route::current()->parameter('category')))); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <form action="<?php echo e(route('website.job')); ?>" method="GET" id="job_search_form">
        
        <?php if (isset($component)) { $__componentOriginal59f5eea9ad8d04b750eb56cf9319785d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal59f5eea9ad8d04b750eb56cf9319785d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.job.job-category-filtering','data' => ['countries' => $countries,'categories' => $categories,'jobRoles' => $job_roles,'minSalary' => $min_salary,'maxSalary' => $max_salary,'experiences' => $experiences,'educations' => $educations,'jobTypes' => $job_types,'totalJobs' => $jobs->total()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.job.job-category-filtering'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['countries' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($countries),'categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'job-roles' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($job_roles),'min-salary' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($min_salary),'max-salary' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($max_salary),'experiences' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($experiences),'educations' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($educations),'job-types' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($job_types),'total-jobs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($jobs->total())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal59f5eea9ad8d04b750eb56cf9319785d)): ?>
<?php $attributes = $__attributesOriginal59f5eea9ad8d04b750eb56cf9319785d; ?>
<?php unset($__attributesOriginal59f5eea9ad8d04b750eb56cf9319785d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59f5eea9ad8d04b750eb56cf9319785d)): ?>
<?php $component = $__componentOriginal59f5eea9ad8d04b750eb56cf9319785d; ?>
<?php unset($__componentOriginal59f5eea9ad8d04b750eb56cf9319785d); ?>
<?php endif; ?>

        <div class="job-filter-overlay"></div>

        <div class="joblist-content">
            <div class="container">
                <?php if($popularTags && count($popularTags)): ?>
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

                <div class="tw-flex tw-gap-2 tw-items-center tw-py-4 tw-mb-6"
                    style="border-top: 1px solid #E4E5E8; border-bottom: 1px solid #E4E5E8;">
                    <?php if(request('keyword') || Route::current()->parameter('category') || request('job_type') || is_string(request('price_min')) || is_string(request('price_max')) || request('is_remote') ): ?>
                    <h2 class="tw-text-sm tw-text-[#767F8C] tw-mb-0"><?php echo e(__('active_filter')); ?>:</h2>
                    <?php endif; ?>
                    <h2 class="tw-text-sm tw-text-[#767F8C] tw-mb-0"><?php echo e(__('active_filter')); ?>:</h2>
                    <div class="tw-flex tw-gap-2 tw-flex-wrap">

                        <?php if(request('keyword')): ?>
                            <span
                                class="tw-py-1 tw-pl-3 tw-pr-[28px] tw-bg-[#E7F0FA] tw-text-sm tw-text-[#474C54] tw-relative tw-rounded-[30px]"><?php echo e(__('search')); ?>:
                                <?php echo e(request('keyword')); ?>

                                <span class="tw-absolute tw-right-[5px] tw-top-[3px] cursor-pointer"
                                    onclick="keywordClose()">
                                    <?php if (isset($component)) { $__componentOriginal625e4241ab6c4d1f48b73271a10fef58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal625e4241ab6c4d1f48b73271a10fef58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.tw-close-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.tw-close-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal625e4241ab6c4d1f48b73271a10fef58)): ?>
<?php $attributes = $__attributesOriginal625e4241ab6c4d1f48b73271a10fef58; ?>
<?php unset($__attributesOriginal625e4241ab6c4d1f48b73271a10fef58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal625e4241ab6c4d1f48b73271a10fef58)): ?>
<?php $component = $__componentOriginal625e4241ab6c4d1f48b73271a10fef58; ?>
<?php unset($__componentOriginal625e4241ab6c4d1f48b73271a10fef58); ?>
<?php endif; ?>
                                </span>
                            </span>
                        <?php endif; ?>
                        <?php if(Route::current()->parameter('category')): ?>
                            <span
                                class="tw-py-1 tw-pl-3 tw-pr-[28px] tw-bg-[#E7F0FA] tw-text-sm tw-text-[#474C54] tw-relative tw-rounded-[30px]"><?php echo e(__('category')); ?>:
                                <?php echo e($categories->where('slug', Route::current()->parameter('category'))->first()->name ?? '-'); ?>

                                <span class="tw-absolute tw-right-[5px] tw-top-[3px] cursor-pointer"
                                    onclick="categoryClose()">
                                    <?php if (isset($component)) { $__componentOriginal625e4241ab6c4d1f48b73271a10fef58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal625e4241ab6c4d1f48b73271a10fef58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.tw-close-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.tw-close-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal625e4241ab6c4d1f48b73271a10fef58)): ?>
<?php $attributes = $__attributesOriginal625e4241ab6c4d1f48b73271a10fef58; ?>
<?php unset($__attributesOriginal625e4241ab6c4d1f48b73271a10fef58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal625e4241ab6c4d1f48b73271a10fef58)): ?>
<?php $component = $__componentOriginal625e4241ab6c4d1f48b73271a10fef58; ?>
<?php unset($__componentOriginal625e4241ab6c4d1f48b73271a10fef58); ?>
<?php endif; ?>
                                </span>
                            </span>
                        <?php endif; ?>
                        <?php if(request('job_type')): ?>
                            <span
                                class="tw-py-1 tw-pl-3 tw-pr-[28px] tw-bg-[#E7F0FA] tw-text-sm tw-text-[#474C54] tw-relative tw-rounded-[30px]"><?php echo e(request('job_type')); ?><span
                                    class="tw-absolute tw-right-[5px] tw-top-[3px] cursor-pointer" onclick="jobTypeClose()">
                                    <?php if (isset($component)) { $__componentOriginal625e4241ab6c4d1f48b73271a10fef58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal625e4241ab6c4d1f48b73271a10fef58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.tw-close-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.tw-close-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal625e4241ab6c4d1f48b73271a10fef58)): ?>
<?php $attributes = $__attributesOriginal625e4241ab6c4d1f48b73271a10fef58; ?>
<?php unset($__attributesOriginal625e4241ab6c4d1f48b73271a10fef58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal625e4241ab6c4d1f48b73271a10fef58)): ?>
<?php $component = $__componentOriginal625e4241ab6c4d1f48b73271a10fef58; ?>
<?php unset($__componentOriginal625e4241ab6c4d1f48b73271a10fef58); ?>
<?php endif; ?>
                                </span>
                            </span>
                        <?php endif; ?>
                        <?php if(is_string(request('price_min')) || is_string(request('price_max'))): ?>
                            <span
                                class="tw-py-1 tw-pl-3 tw-pr-[28px] tw-bg-[#E7F0FA] tw-text-sm tw-text-[#474C54] tw-relative tw-rounded-[30px]"><?php echo e(__('salary')); ?>

                                <?php echo e(request('price_min')); ?> - <?php echo e(request('price_max')); ?>

                                <span class="tw-absolute tw-right-[5px] tw-top-[3px] cursor-pointer"
                                    onclick="jobSalaryClose()">
                                    <?php if (isset($component)) { $__componentOriginal625e4241ab6c4d1f48b73271a10fef58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal625e4241ab6c4d1f48b73271a10fef58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.tw-close-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.tw-close-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal625e4241ab6c4d1f48b73271a10fef58)): ?>
<?php $attributes = $__attributesOriginal625e4241ab6c4d1f48b73271a10fef58; ?>
<?php unset($__attributesOriginal625e4241ab6c4d1f48b73271a10fef58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal625e4241ab6c4d1f48b73271a10fef58)): ?>
<?php $component = $__componentOriginal625e4241ab6c4d1f48b73271a10fef58; ?>
<?php unset($__componentOriginal625e4241ab6c4d1f48b73271a10fef58); ?>
<?php endif; ?>
                                </span>
                            </span>
                        <?php endif; ?>
                        <?php if(request('is_remote')): ?>
                        <span
                            class="tw-py-1 tw-pl-3 tw-pr-[28px] tw-bg-[#E7F0FA] tw-text-sm tw-text-[#474C54] tw-relative tw-rounded-[30px]"><?php echo e(__('remote_job')); ?>

                            <span class="tw-absolute tw-right-[5px] tw-top-[3px] cursor-pointer"
                                onclick="remotelyClose()">
                                <?php if (isset($component)) { $__componentOriginal625e4241ab6c4d1f48b73271a10fef58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal625e4241ab6c4d1f48b73271a10fef58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.tw-close-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.tw-close-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal625e4241ab6c4d1f48b73271a10fef58)): ?>
<?php $attributes = $__attributesOriginal625e4241ab6c4d1f48b73271a10fef58; ?>
<?php unset($__attributesOriginal625e4241ab6c4d1f48b73271a10fef58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal625e4241ab6c4d1f48b73271a10fef58)): ?>
<?php $component = $__componentOriginal625e4241ab6c4d1f48b73271a10fef58; ?>
<?php unset($__componentOriginal625e4241ab6c4d1f48b73271a10fef58); ?>
<?php endif; ?>
                            </span>
                        </span>
                    <?php endif; ?>
                    </div>
                </div>

                <?php if($featured_jobs && count($featured_jobs)): ?>
                    <div>
                        <h5><?php echo e(__('featured_jobs')); ?></h5>
                        <div class="testimonail_active feature-job !-tw-mx-3 ll-feature-job slick-bullet deafult_style_dot">
                            <?php $__currentLoopData = $featured_jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row mt-5">
                    <h5><?php echo e(__('latest_jobs')); ?></h5>

                    <?php
                        $mix_jobs = $all_jobs && count($all_jobs) ? $all_jobs : $jobs;
                    ?>

                    <?php $__empty_1 = true; $__currentLoopData = $mix_jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-xl-4 col-md-6 fade-in-bottom rt-mb-24 cat-1 cat-3 ">
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
                        <div class="col-12">
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

                    <?php if($jobs->total() > $jobs->count()): ?>
                        <div class="rt-pt-30">
                            <nav>
                                <?php echo e($jobs->onEachSide(0)->links('vendor.pagination.frontend')); ?>

                            </nav>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </form>
    <div class="rt-spacer-100 rt-spacer-md-50"></div>

    
    <?php if (isset($component)) { $__componentOriginalf832c0f0b551a3ae4f576bd7e1fda30a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf832c0f0b551a3ae4f576bd7e1fda30a = $attributes; } ?>
<?php $component = App\View\Components\Website\SubscribeNewsletter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.subscribe-newsletter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\SubscribeNewsletter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf832c0f0b551a3ae4f576bd7e1fda30a)): ?>
<?php $attributes = $__attributesOriginalf832c0f0b551a3ae4f576bd7e1fda30a; ?>
<?php unset($__attributesOriginalf832c0f0b551a3ae4f576bd7e1fda30a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf832c0f0b551a3ae4f576bd7e1fda30a)): ?>
<?php $component = $__componentOriginalf832c0f0b551a3ae4f576bd7e1fda30a; ?>
<?php unset($__componentOriginalf832c0f0b551a3ae4f576bd7e1fda30a); ?>
<?php endif; ?>

    
    <div class="modal fade" id="cvModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-transparent">
                    <h5 class="modal-title" id="cvModalLabel"><?php echo e(__('apply_job')); ?>: <span
                            id="apply_job_title"><?php echo e(__('job_title')); ?></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="<?php echo e(route('website.job.apply')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body mt-3">
                        <input type="hidden" id="apply_job_id" name="id">
                        <div class="from-group">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'choose_resume','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                            <select class="rt-selectactive form-control w-100-p" name="resume_id" required>
                                <option value=""><?php echo e(__('select_one')); ?></option>
                                <?php $__currentLoopData = $resumes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resume): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e(old('resume_id') == $resume->id ? 'selected' : ''); ?>

                                        value="<?php echo e($resume->id); ?>"><?php echo e($resume->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'cover_letter','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                            <textarea id="default" class="form-control <?php $__errorArgs = ['cover_letter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cover_letter"
                                rows="7" required></textarea>
                            <?php $__errorArgs = ['cover_letter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error invalid-feedback"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                    </div>
                    <div class="modal-footer border-transparent">
                        <button type="button" class="bg-priamry-50 btn btn-outline-primary" data-bs-dismiss="modal"
                            aria-label="Close"><?php echo e(__('cancel')); ?></button>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <span class="button-content-wrapper ">
                                <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                <span class="button-text">
                                    <?php echo e(__('apply_now')); ?>

                                </span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <style>
        .feature-job .slick-slide {
            margin-left: 0px !important;
            margin: 0px 12px !important;
        }

        .feature-job.testimonail_active .prev-arrow {
            left: -60px;
        }

        .feature-job.testimonail_active .next-arrow {
            right: -60px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura/resources/views/frontend/pages/jobsCategory.blade.php ENDPATH**/ ?>