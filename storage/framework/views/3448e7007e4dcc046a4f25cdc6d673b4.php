<?php $__env->startSection('title'); ?>
    <?php echo e(__('favorite_jobs')); ?>

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
                        <div class="dashboard-right-header md:tw-mb-8 tw-mb-4">
                            <div class="left-text m-0">
                                <h3 class="f-size-18 lh-1 m-0">
                                    <?php echo e(__('favorite_jobs')); ?>

                                    <span class="text-gray-400">(<?php echo e($jobs->total()); ?>)</span>
                                </h3>
                            </div>
                            <span class="sidebar-open-nav">
                                <i class="ph-list"></i>
                            </span>
                        </div>
                        <div>
                            <?php if($jobs->count() > 0): ?>
                                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="f-jobs-card tw-overflow-x-auto md:tw-px-5 md:tw-py-5 tw-px-0 tw-py-5 tw-transition-all tw-duration-500">
                                        <div class="rt-single-icon-box tw-flex-wrap md:tw-gap-5 tw-gap-3">
                                            <div class="icon-thumb">
                                                <img src="<?php echo e(asset($job->company->logo_url)); ?>" alt="logo"
                                                    draggable="false">
                                            </div>
                                            <div class="iconbox-content">
                                                <div class="post-info2">
                                                    <div class="post-main-title">
                                                        <a href="<?php echo e(route('website.job.details', $job->slug)); ?>">
                                                            <?php echo e($job->title); ?>

                                                        </a>
                                                        <span class="badge rounded-pill bg-primary-50 text-primary-500">
                                                            <?php echo e($job->job_type ? $job->job_type->name : ''); ?>

                                                        </span>
                                                    </div>
                                                    <div class="body-font-4 tw-flex tw-flex-wrap tw-items-center tw-gap-4 text-gray-600 pt-2">
                                                        <span class="info-tools tw-flex tw-items-center tw-gap-1.5">
                                                            <svg width="22" height="22" viewBox="0 0 22 22"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M19.25 9.16602C19.25 15.5827 11 21.0827 11 21.0827C11 21.0827 2.75 15.5827 2.75 9.16602C2.75 6.97798 3.61919 4.87956 5.16637 3.33238C6.71354 1.78521 8.81196 0.916016 11 0.916016C13.188 0.916016 15.2865 1.78521 16.8336 3.33238C18.3808 4.87956 19.25 6.97798 19.25 9.16602Z"
                                                                    stroke="#C5C9D6" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M11 11.916C12.5188 11.916 13.75 10.6848 13.75 9.16602C13.75 7.64723 12.5188 6.41602 11 6.41602C9.48122 6.41602 8.25 7.64723 8.25 9.16602C8.25 10.6848 9.48122 11.916 11 11.916Z"
                                                                    stroke="#C5C9D6" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <?php echo e($job->country); ?>

                                                        </span>
                                                        <span class="info-tools tw-flex tw-items-center tw-gap-1.5">
                                                            <svg width="22" height="22" viewBox="0 0 22 22"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 2.0625V19.9375" stroke="#C5C9D6"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M15.8125 7.5625C15.8125 7.11108 15.7236 6.66408 15.5508 6.24703C15.3781 5.82997 15.1249 5.45102 14.8057 5.13182C14.4865 4.81262 14.1075 4.55941 13.6905 4.38666C13.2734 4.21391 12.8264 4.125 12.375 4.125H9.28125C8.36957 4.125 7.49523 4.48716 6.85057 5.13182C6.20591 5.77648 5.84375 6.65082 5.84375 7.5625C5.84375 8.47418 6.20591 9.34852 6.85057 9.99318C7.49523 10.6378 8.36957 11 9.28125 11H13.0625C13.9742 11 14.8485 11.3622 15.4932 12.0068C16.1378 12.6515 16.5 13.5258 16.5 14.4375C16.5 15.3492 16.1378 16.2235 15.4932 16.8682C14.8485 17.5128 13.9742 17.875 13.0625 17.875H8.9375C8.02582 17.875 7.15148 17.5128 6.50682 16.8682C5.86216 16.2235 5.5 15.3492 5.5 14.4375"
                                                                    stroke="#C5C9D6" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <?php if($job->salary_mode == 'range'): ?>
                                                            <?php echo e(currencyAmountShort($job->min_salary)); ?> - <?php echo e(currencyAmountShort($job->max_salary)); ?> <?php echo e(currentCurrencyCode()); ?>

                                                            <?php else: ?>
                                                            <?php echo e($job->custom_salary); ?>

                                                            <?php endif; ?>
                                                        </span>
                                                        <?php if($job->deadline_active): ?>
                                                            <span class="info-tools tw-flex tw-items-center tw-gap-1.5 text-success-500">
                                                                <svg width="22" height="22" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                    </path>
                                                                </svg>
                                                                <?php echo e($job->days_remaining); ?> <?php echo e(__('remaining')); ?>

                                                            </span>
                                                        <?php else: ?>
                                                            <span class="info-tools text-danger-500">
                                                                <i class="ph-x-circle text-danger-500"></i>
                                                                <?php echo e(__('job_expire')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="iconbox-extra align-self-center">
                                                <div>
                                                    <a href="<?php echo e(route('website.job.bookmark', $job->slug)); ?>"
                                                        class="text-primary-500 hoverbg-primary-50 plain-button icon-button">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.735 21.424C17.8892 21.5203 18.0834 21.5254 18.2424 21.4373C18.4014 21.3492 18.5 21.1818 18.5 21V4.5C18.5 4.16848 18.3683 3.85054 18.1339 3.61612C17.8995 3.3817 17.5815 3.25 17.25 3.25H6.75C6.41848 3.25 6.10054 3.3817 5.86612 3.61612C5.6317 3.85054 5.5 4.16848 5.5 4.5V21C5.5 21.1818 5.59864 21.3492 5.75763 21.4373C5.91661 21.5254 6.11089 21.5203 6.26502 21.424L11.9993 17.8396L17.735 21.424Z"
                                                                fill="#18191C" stroke="#18191C" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <?php if($job->can_apply): ?>
                                                    <div>
                                                        <?php if($job->deadline_active): ?>
                                                            <?php if(!$job->applied): ?>
                                                                <button type="button"
                                                                    onclick="applyJobb(<?php echo e($job->id); ?>, '<?php echo e($job->title); ?>')"
                                                                    class="btn btn-primary2-50">
                                                                    <span class="button-content-wrapper ">
                                                                        <span class="button-icon align-icon-right"><i
                                                                                class="ph-arrow-right"></i></span>
                                                                        <span
                                                                            class="button-text"><?php echo e(__('apply_now')); ?></span>
                                                                    </span>
                                                                </button>
                                                            <?php else: ?>
                                                                <button type="button" class="btn btn-success">
                                                                    <span class="button-content-wrapper ">
                                                                        <span class="button-text">
                                                                            <?php echo e(__('already_applied')); ?>

                                                                        </span>
                                                                    </span>
                                                                </button>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <button type="button" class="btn bg-gray-50 text-gray-400"
                                                                disabled>
                                                                <span class="button-text">
                                                                    <?php echo e(__('deadline_expired')); ?>

                                                                </span>
                                                            </button>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php else: ?>
                                                    <?php if($job->apply_on == 'custom_url'): ?>
                                                        <a href="<?php echo e($job->apply_url); ?>" target="_blank"
                                                            class="btn btn-primary2-50">
                                                            <span class="button-content-wrapper ">
                                                                <span class="button-icon align-icon-right"><i
                                                                        class="ph-arrow-right"></i></span>
                                                                <span class="button-text">
                                                                    <?php echo e(__('apply_now')); ?>

                                                                </span>

                                                            </span>
                                                        </a>
                                                    <?php else: ?>
                                                        <a href="mailto:<?php echo e($job->apply_email); ?>"
                                                            class="btn btn-primary2-50">
                                                            <span class="button-content-wrapper ">
                                                                <span class="button-icon align-icon-right"><i
                                                                        class="ph-arrow-right"></i></span>
                                                                <span class="button-text">
                                                                    <?php echo e(__('apply_now')); ?>

                                                                </span>

                                                            </span>
                                                        </a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <?php if (isset($component)) { $__componentOriginal29785112a59eec7800237cc87bc86e3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29785112a59eec7800237cc87bc86e3e = $attributes; } ?>
<?php $component = App\View\Components\NotFound::resolve(['message' => 'no_data_found'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <?php endif; ?>
                        </div>

                        <div class="rt-pt-30">
                            <?php if($jobs->total() > $jobs->count()): ?>
                                <nav>
                                    <?php echo e($jobs->links('vendor.pagination.frontend')); ?>

                                </nav>
                            <?php endif; ?>
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
    </div>

    
    <div class="modal fade" id="cvModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-transparent">
                    <h5 class="modal-title" id="cvModalLabel"><?php echo e(__('apply_job')); ?>: <span id="apply_job_title"><?php echo e(__('job_title')); ?></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo e(route('website.job.apply')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body mt-3">
                        <input type="hidden" id="apply_job_id" name="id">
                        <div class="from-group">
                            <div class="tw-flex tw-justify-between tw-items-center">
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
                                <div class="tw-m-2">
                                    <button onclick="resumeAddModal()" type="button"
                                        class=" tw-bg-white tw-tracking-wide tw-text-gray-800 tw-font-bold tw-rounded tw-border-b-2 tw-border-blue-500 hover:tw-border-blue-600 hover:tw-bg-blue-500 hover:tw-text-white tw-shadow-md tw-py-1.5 tw-px-6 tw-inline-flex tw-items-center">
                                        <span class="tw-mx-auto">Add Resume</span>
                                    </button>
                                </div>
                            </div>
                            <select id="resume_id" class="rt-selectactive form-control w-100-p" name="resume_id">
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
                                rows="7"></textarea>
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
        <!-- Add resume modal -->
        <?php if (isset($component)) { $__componentOriginal80e68af8a47d2fb115a943142c547971 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal80e68af8a47d2fb115a943142c547971 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.add-resume-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.add-resume-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal80e68af8a47d2fb115a943142c547971)): ?>
<?php $attributes = $__attributesOriginal80e68af8a47d2fb115a943142c547971; ?>
<?php unset($__attributesOriginal80e68af8a47d2fb115a943142c547971); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal80e68af8a47d2fb115a943142c547971)): ?>
<?php $component = $__componentOriginal80e68af8a47d2fb115a943142c547971; ?>
<?php unset($__componentOriginal80e68af8a47d2fb115a943142c547971); ?>
<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function applyJobb(id, name) {
            $('#cvModal').modal('show');
            $('#apply_job_id').val(id);
            $('#apply_job_title').text(name);
        }

        function keywordClose() {
            $('#keyword').val('');
            $('#form').submit();
        }

        function LoactionClear() {
            $('#country').val('');
            $('#form').submit();
        }

        function CategoryClear() {
            $('#category').val('');
            $('#form').submit();
        }
        $('#form').on('change', function() {
            this.submit();
        })
    </script>
    <!-- for resume modal -->
    <?php if (isset($component)) { $__componentOriginaleef48d4803328796549419f5f769129d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleef48d4803328796549419f5f769129d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.add-resume-modal-script','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.add-resume-modal-script'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleef48d4803328796549419f5f769129d)): ?>
<?php $attributes = $__attributesOriginaleef48d4803328796549419f5f769129d; ?>
<?php unset($__attributesOriginaleef48d4803328796549419f5f769129d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleef48d4803328796549419f5f769129d)): ?>
<?php $component = $__componentOriginaleef48d4803328796549419f5f769129d; ?>
<?php unset($__componentOriginaleef48d4803328796549419f5f769129d); ?>
<?php endif; ?>
    <?php echo $__env->yieldContent('child_js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/frontend/pages/candidate/bookmark.blade.php ENDPATH**/ ?>