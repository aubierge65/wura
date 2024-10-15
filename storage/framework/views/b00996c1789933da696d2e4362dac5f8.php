<?php $__env->startSection('title'); ?>
    <?php echo e(__('dashboard')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="row">
                <?php if (isset($component)) { $__componentOriginal87ee4229ecd0f7ecec9ad386f90b7310 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal87ee4229ecd0f7ecec9ad386f90b7310 = $attributes; } ?>
<?php $component = App\View\Components\Website\Candidate\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\Candidate\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal87ee4229ecd0f7ecec9ad386f90b7310)): ?>
<?php $attributes = $__attributesOriginal87ee4229ecd0f7ecec9ad386f90b7310; ?>
<?php unset($__attributesOriginal87ee4229ecd0f7ecec9ad386f90b7310); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal87ee4229ecd0f7ecec9ad386f90b7310)): ?>
<?php $component = $__componentOriginal87ee4229ecd0f7ecec9ad386f90b7310; ?>
<?php unset($__componentOriginal87ee4229ecd0f7ecec9ad386f90b7310); ?>
<?php endif; ?>
                <div class="col-lg-9">
                    <div class="dashboard-right">
                        <div class="dashboard-right-header">
                            <div class="left-text">
                                <h5><?php echo e(__('hello')); ?>, <?php echo e(auth()->user()->name); ?></h5>
                                <p class="m-0 r-c"><?php echo e(__('here_is_your_daily_activities_career_opportunities')); ?>

                                </p>
                            </div>
                            <span class="sidebar-open-nav">
                                <i class="ph-list"></i>
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="single-feature-box">
                                    <div class="single-feature-data">
                                        <h6 class="tw-text-[#18191C] tw-text-2xl tw-font-semibold"><?php echo e($appliedJobs); ?></h6>
                                        <p><?php echo e(__('job_applied')); ?></p>
                                    </div>
                                    <div class="single-feature-icon">
                                        <i class="ph-suitcase-simple"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="single-feature-box">
                                    <div class="single-feature-data">
                                        <h6 class="tw-text-[#18191C] tw-text-2xl tw-font-semibold"><?php echo e($favoriteJobs); ?></h6>
                                        <p><?php echo e(__('favorite_jobs')); ?></p>
                                    </div>
                                    <div class="single-feature-icon">
                                        <i class="ph-bookmark-simple"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="single-feature-box">
                                    <div class="single-feature-data">
                                        <h6 class="tw-text-[#18191C] tw-text-2xl tw-font-semibold"><?php echo e($notifications); ?></h6>
                                        <p><?php echo e(__('job_alert')); ?></p>
                                    </div>
                                    <div class="single-feature-icon">
                                        <i class="ph-bell-ringing"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if($candidate->profile_complete != 0): ?>
                            <div class="dashboaed-profile-wrap">
                                <div class="dashboaed-profile-left">
                                    <div class="dashboaed-profile-thumb">
                                        <img src="<?php echo e(asset($candidate->photo)); ?>" alt="photo">
                                    </div>
                                    <div class="dashboaed-profile-data">
                                        <h6><?php echo e(__('profile_in_title')); ?></h6>
                                        <p><?php echo e(__('profile_in_description')); ?></p>
                                    </div>
                                </div>
                                <div class="dashboaed-profile-right">
                                    <a href="<?php echo e(route('candidate.setting')); ?>" class="btn bg-white text-danger-500">
                                        <div class="button-content-wrapper ">
                                            <span class="button-icon align-icon-right">
                                                <i class="ph-arrow-right"></i>
                                            </span>
                                            <span class="button-text">
                                                <?php echo e(__('edit_profile')); ?>

                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="recently-applied-wrap d-flex justify-content-between align-items-center rt-mb-15">
                            <h3 class="f-size-16 lh-1 m-0"><?php echo e(__('recently_applied')); ?></h3>
                            <a class="view-all text-gray-500 f-size-16 d-flex align-items-center hover:text-primary-500"
                                href="<?php echo e(route('candidate.appliedjob')); ?>">
                                <?php echo e(__('view_all')); ?>

                                <i class="ph-arrow-right f-size-20 rt-ml-8"></i>
                            </a>
                        </div>
                        <div class="db-job-card-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('job')); ?></th>
                                        <th><?php echo e(__('date_applied')); ?></th>
                                        <th><?php echo e(__('status')); ?></th>
                                        <th><?php echo e(__('action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($jobs->count() > 0): ?>
                                        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <div class="rt-single-icon-box tw-gap-5">
                                                        <div class="tw-w-[68px] tw-h-[68px]">
                                                            <img class="tw-w-[68px] tw-h-[68px] tw-rounded-md" src="<?php echo e(asset($job->company->logo_url)); ?>" alt="logo"
                                                                draggable="false">
                                                        </div>
                                                        <div class="iconbox-content">
                                                            <div class="post-info2">
                                                                <div class="post-main-title">
                                                                    <a href="<?php echo e(route('website.job.details', $job->slug)); ?>"
                                                                        class="text-gray-900 f-size-16  ft-wt-5">
                                                                        <?php echo e(Str::limit($job->title, 40, '...')); ?>

                                                                    </a>
                                                                    <span
                                                                        class="badge rounded-pill bg-primary-50 text-primary-500">
                                                                        <?php echo e(ucfirst($job->job_type ? $job->job_type->name : '')); ?>

                                                                    </span>
                                                                </div>
                                                                <div class="body-font-4 text-gray-600 pt-2">
                                                                    <span class="info-tools rt-mr-8">
                                                                        <svg width="18" height="18"
                                                                            viewBox="0 0 18 18" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.75 7.5C15.75 12.75 9 17.25 9 17.25C9 17.25 2.25 12.75 2.25 7.5C2.25 5.70979 2.96116 3.9929 4.22703 2.72703C5.4929 1.46116 7.20979 0.75 9 0.75C10.7902 0.75 12.5071 1.46116 13.773 2.72703C15.0388 3.9929 15.75 5.70979 15.75 7.5Z"
                                                                                stroke="#939AAD" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                            </path>
                                                                            <path
                                                                                d="M9 9.75C10.2426 9.75 11.25 8.74264 11.25 7.5C11.25 6.25736 10.2426 5.25 9 5.25C7.75736 5.25 6.75 6.25736 6.75 7.5C6.75 8.74264 7.75736 9.75 9 9.75Z"
                                                                                stroke="#939AAD" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                            </path>
                                                                        </svg>
                                                                        <?php echo e($job->country); ?>

                                                                    </span>
                                                                    <span class="info-tools">
                                                                        <svg width="14" height="16"
                                                                        viewBox="0 0 14 16" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M11.8125 4.5625C11.8125 4.11108 11.7236 3.66408 11.5508 3.24703C11.3781 2.82997 11.1249 2.45102 10.8057 2.13182C10.4865 1.81262 10.1075 1.55941 9.69047 1.38666C9.27342 1.21391 8.82642 1.125 8.375 1.125H5.28125C4.36957 1.125 3.49523 1.48716 2.85057 2.13182C2.20591 2.77648 1.84375 3.65082 1.84375 4.5625C1.84375 5.47418 2.20591 6.34852 2.85057 6.99318C3.49523 7.63784 4.36957 8 5.28125 8H9.0625C9.97418 8 10.8485 8.36216 11.4932 9.00682C12.1378 9.65148 12.5 10.5258 12.5 11.4375C12.5 12.3492 12.1378 13.2235 11.4932 13.8682C10.8485 14.5128 9.97418 14.875 9.0625 14.875H4.9375C4.02582 14.875 3.15148 14.5128 2.50682 13.8682C1.86216 13.2235 1.5 12.3492 1.5 11.4375"
                                                                                stroke="#C5C9D6" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                            </path>
                                                                        </svg>

                                                                        <?php if($job->salary_mode == 'range'): ?>
                                                                        <?php echo e(currencyAmountShort($job->min_salary)); ?> -
                                                                        <?php echo e(currencyAmountShort($job->max_salary)); ?> <?php echo e(currentCurrencyCode()); ?>

                                                                        <?php else: ?>
                                                                        <?php echo e($job->custom_salary); ?>

                                                                        <?php endif; ?>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?php echo e(date('M d, Y s:m', strtotime($job->pivot->created_at))); ?></td>
                                                <td class="text-<?php echo e($job->deadline_active ? 'success' : 'danger'); ?>-500">
                                                    <?php if($job->deadline_active): ?>
                                                        <div class="tw-flex tw-gap-1.5 tw-items-center">
                                                            <?php if (isset($component)) { $__componentOriginalc08be88693aa8d8008bbbfa1d495c2cb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc08be88693aa8d8008bbbfa1d495c2cb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.active-check-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.active-check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc08be88693aa8d8008bbbfa1d495c2cb)): ?>
<?php $attributes = $__attributesOriginalc08be88693aa8d8008bbbfa1d495c2cb; ?>
<?php unset($__attributesOriginalc08be88693aa8d8008bbbfa1d495c2cb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc08be88693aa8d8008bbbfa1d495c2cb)): ?>
<?php $component = $__componentOriginalc08be88693aa8d8008bbbfa1d495c2cb; ?>
<?php unset($__componentOriginalc08be88693aa8d8008bbbfa1d495c2cb); ?>
<?php endif; ?>
                                                        <?php echo e(__('active')); ?>

                                                        </div>
                                                    <?php else: ?>
                                                        <div class="tw-flex tw-gap-1.5 tw-items-center">
                                                            <?php if (isset($component)) { $__componentOriginal202fb889c39c7d834e99ede635eb794f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal202fb889c39c7d834e99ede635eb794f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.expire-cross-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.expire-cross-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal202fb889c39c7d834e99ede635eb794f)): ?>
<?php $attributes = $__attributesOriginal202fb889c39c7d834e99ede635eb794f; ?>
<?php unset($__attributesOriginal202fb889c39c7d834e99ede635eb794f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal202fb889c39c7d834e99ede635eb794f)): ?>
<?php $component = $__componentOriginal202fb889c39c7d834e99ede635eb794f; ?>
<?php unset($__componentOriginal202fb889c39c7d834e99ede635eb794f); ?>
<?php endif; ?>
                                                        <?php echo e(__('expired')); ?>

                                                        </div>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <div class="db-job-btn-wrap d-flex justify-content-end">
                                                        <a href="<?php echo e(route('website.job.details', $job->slug)); ?>"
                                                            class="btn bg-gray-50 text-primary-500 rt-mr-8">
                                                            <span class="button-text">
                                                                <?php echo e(__('view_details')); ?>

                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <?php if (isset($component)) { $__componentOriginaldfe0928edd886f3f2e52f8fdd142276f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldfe0928edd886f3f2e52f8fdd142276f = $attributes; } ?>
<?php $component = App\View\Components\Website\NotFound::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\NotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                            <a href="<?php echo e(route('website.job')); ?>" class="btn btn-primary btn-sm">
                                                <?php echo e(__('browse_job')); ?>

                                            </a>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldfe0928edd886f3f2e52f8fdd142276f)): ?>
<?php $attributes = $__attributesOriginaldfe0928edd886f3f2e52f8fdd142276f; ?>
<?php unset($__attributesOriginaldfe0928edd886f3f2e52f8fdd142276f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldfe0928edd886f3f2e52f8fdd142276f)): ?>
<?php $component = $__componentOriginaldfe0928edd886f3f2e52f8fdd142276f; ?>
<?php unset($__componentOriginaldfe0928edd886f3f2e52f8fdd142276f); ?>
<?php endif; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-footer text-center body-font-4 text-gray-500">
        <?php if (isset($component)) { $__componentOriginal3d3a2a154c37220f944698284f758b7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d3a2a154c37220f944698284f758b7a = $attributes; } ?>
<?php $component = App\View\Components\Website\FooterCopyright::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.footer-copyright'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\FooterCopyright::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3d3a2a154c37220f944698284f758b7a)): ?>
<?php $attributes = $__attributesOriginal3d3a2a154c37220f944698284f758b7a; ?>
<?php unset($__attributesOriginal3d3a2a154c37220f944698284f758b7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d3a2a154c37220f944698284f758b7a)): ?>
<?php $component = $__componentOriginal3d3a2a154c37220f944698284f758b7a; ?>
<?php unset($__componentOriginal3d3a2a154c37220f944698284f758b7a); ?>
<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/frontend/pages/candidate/dashboard.blade.php ENDPATH**/ ?>