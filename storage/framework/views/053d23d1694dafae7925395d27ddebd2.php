<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['candidates']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['candidates']); ?>
<?php foreach (array_filter((['candidates']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="tab-pane " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <?php if($candidates->count() > 0): ?>
        <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card jobcardStyle1 body-24 rt-mb-24 <?php echo e(!auth('user')->check() ? 'login_required' : ''); ?>">
                <div class="card-body">
                    <div class="rt-single-icon-box tw-flex-wrap tw-gap-3">
                        <div class="icon-thumb">
                            <div class="profile-image position-relative">
                                <img src="<?php echo e(asset($candidate->photo)); ?>" alt="<?php echo e(__('candidate_image')); ?>" class="object-fit-contain">

                                <?php if($candidate->status == 'available'): ?>
                                    <span class="available-alert">
                                        <svg class="circle" width="14" height="14" viewBox="0 0 14 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="7" cy="7" r="6" fill="#2ecc71"
                                                stroke="white" stroke-width="2">
                                            </circle>
                                        </svg>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="iconbox-content !tw-m-0">
                            <div class="post-info2">
                                <div class="post-main-title">
                                    <?php if(auth('user')->check()): ?>
                                        <a href="javascript:void(0)" onclick="showCandidateProfileModal('<?php echo e($candidate->user->username); ?>')">
                                            <?php echo e($candidate->user->name); ?>

                                        </a>
                                    <?php else: ?>
                                        <a href="javascript:void(0)" class="login_required">
                                            <?php echo e(maskFullName($candidate->user->name)); ?>

                                        </a>
                                    <?php endif; ?>

                                </div>
                                <span class="loacton text-gray-400 ">
                                    <?php echo e($candidate->profession ? $candidate->profession->name : ''); ?>

                                </span>
                                <div class="body-font-4 text-gray-600 tw-pt-1.5 tw-flex tw-flex-wrap tw-gap-2 tw-items-center">
                                    <span class="info-tools !tw-flex tw-gap-0.5 tw-items-center">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.75 7.5C15.75 12.75 9 17.25 9 17.25C9 17.25 2.25 12.75 2.25 7.5C2.25 5.70979 2.96116 3.9929 4.22703 2.72703C5.4929 1.46116 7.20979 0.75 9 0.75C10.7902 0.75 12.5071 1.46116 13.773 2.72703C15.0388 3.9929 15.75 5.70979 15.75 7.5Z"
                                                stroke="#939AAD" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M9 9.75C10.2426 9.75 11.25 8.74264 11.25 7.5C11.25 6.25736 10.2426 5.25 9 5.25C7.75736 5.25 6.75 6.25736 6.75 7.5C6.75 8.74264 7.75736 9.75 9 9.75Z"
                                                stroke="#939AAD" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <?php echo e($candidate->country); ?>

                                    </span>
                                    <span class="info-tools !tw-flex tw-gap-0.5 tw-items-center">
                                        <i class="ph-suitcase-simple"></i>
                                        <?php if($candidate->experience): ?>
                                            <?php echo e($candidate->experience ? $candidate->experience->name : ''); ?>

                                        <?php else: ?>
                                            0
                                        <?php endif; ?> <?php echo e(__('years_experience')); ?>

                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="iconbox-extra align-self-center">
                            <div>
                                <?php if(auth('user')->check()): ?>
                                    <?php if(auth()->user()->status): ?>
                                        <!-- || -->
                                        <!-- Check auth candidate account is active -->
                                        <a onclick="showCandidateProfileModal('<?php echo e($candidate->user->username); ?>')"
                                            href="javascript:void(0);" class="btn btn-primary2-50">
                                            <span class="button-content-wrapper ">
                                                <span class="button-icon align-icon-right">
                                                    <i class="ph-arrow-right"></i>
                                                </span>
                                                <span class="button-text">
                                                    <?php echo e(__('view_profile')); ?>

                                                </span>
                                            </span>
                                        </a>
                                    <?php else: ?>
                                        <!-- auth candidate account isnot active -->
                                        <a href="javascript:void(0);"
                                            onclick="toastr.warning('<?php echo e(__('your_account_is_not_active_please_wait_until_the_account_is_activated_by_admin')); ?>')"
                                            class="btn btn-primary2-50">
                                            <span class="button-content-wrapper ">
                                                <span class="button-icon align-icon-right">
                                                    <i class="ph-arrow-right"></i>
                                                </span>
                                                <span class="button-text">
                                                    <?php echo e(__('view_profile')); ?>

                                                </span>
                                            </span>
                                        </a>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <a href="javascript:void(0);" class="btn btn-primary2-50 login_required">
                                        <span class="button-content-wrapper ">
                                            <span class="button-icon align-icon-right">
                                                <i class="ph-arrow-right"></i>
                                            </span>
                                            <span class="button-text">
                                                <?php echo e(__('view_profile')); ?>

                                            </span>
                                        </span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <div class="col-md-12">
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
    <?php if(request('perpage') != 'all' && $candidates->total() > $candidates->count()): ?>
        <div class="rt-pt-30">
            <nav>
                <?php echo e($candidates->links('vendor.pagination.frontend')); ?>

            </nav>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\wamp64\www\wura\resources\views/components/website/candidate/candidate-view-list.blade.php ENDPATH**/ ?>