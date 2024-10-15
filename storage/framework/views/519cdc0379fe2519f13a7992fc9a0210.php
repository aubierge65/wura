<div class="col-lg-3">
    <div class="d-sidebar">
        <div class="tw-flex tw-justify-between tw-items-center tw-mb-3">
            <h3 class="tw-mb-3"><?php echo app('translator')->get('employer_dashboard'); ?></h3>
            <span class="close-sidebar">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2321_30321)">
                        <path d="M19.0713 4.92896L4.92915 19.0711" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4.92871 4.92896L19.0708 19.0711" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2321_30321">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </span>
        </div>
        <ul class="sidebar-menu menu-active-classes">
            <li>
                <a href="<?php echo e(route('company.dashboard')); ?>" class="<?php echo e(linkActive('company.dashboard')); ?>">
                    <span class="button-content-wrapper tw-items-center">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <i class="ph-stack"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('overview')); ?>

                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('website.employe.details', auth()->user()->username)); ?>"
                    class="<?php echo e(linkActive('company.verify.documents.index')); ?>">
                    <span class="button-content-wrapper tw-items-center">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <i class="ph-user-circle"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('my_profile')); ?>

                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('company.myjob')); ?>" class="<?php echo e(linkActive('company.myjob')); ?>">
                    <span class="button-content-wrapper tw-items-center">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <i class="ph-suitcase-simple"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('my_jobs')); ?>

                        </span>
                    </span>
                </a>
            </li>
            <?php if(!$setting->edited_job_auto_approved): ?>
                <li>
                    <a href="<?php echo e(route('company.pending.edited.jobs')); ?>"
                        class="<?php echo e(linkActive('company.pending.edited.jobs')); ?>">
                        <span class="button-content-wrapper tw-items-center">
                            <span class="button-icon align-icon-left tw-flex tw-items-center">
                                <i class="ph-hourglass"></i>
                            </span>
                            <span class="button-text">
                                <?php echo e(__('pending_edited_jobs')); ?>

                            </span>
                        </span>
                    </a>
                </li>
            <?php endif; ?>
            <li>
                <a href="<?php echo e(route('company.job.create')); ?>" class="<?php echo e(linkActive('company.job.create')); ?>">
                    <span class="button-content-wrapper tw-items-center">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <i class="ph-plus-circle"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('post_a_job')); ?>

                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('company.bookmark')); ?>"
                    class="<?php echo e(request()->routeIs('company.bookmark') || request()->routeIs('company.bookmark.category.index') ? 'active' : ''); ?> ">
                    <span class="button-content-wrapper tw-items-center">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <i class="ph-bookmark-simple"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('saved_candidate')); ?>

                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('company.questions.manage')); ?>"
                    class="<?php echo e(linkActive('company.questions.manage')); ?>">
                    <span class="button-content-wrapper tw-items-center">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <i class="ph-question"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('custom_questions')); ?>

                        </span>
                    </span>
                </a>
            </li>
			  <li>
                <a href="<?php echo e(route('company.blog.liste')); ?>" class="<?php echo e(linkActive('company.blog.liste')); ?>">
                    <span class="button-content-wrapper tw-items-center">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <i class="ph-notebook"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('post_list')); ?>

                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('company.plan')); ?>" class="<?php echo e(linkActive('company.plan')); ?>">
                    <span class="button-content-wrapper tw-items-center">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <i class="ph-notebook"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('plans_billing')); ?>

                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('company.messages')); ?>" class="<?php echo e(linkActive('company.messages')); ?>">
                    <span class="button-content-wrapper tw-items-center">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <i class="ph-chat"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('Message')); ?>

                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('company.verify.documents.index')); ?>" class="<?php echo e(linkActive('company.verify.documents.index')); ?>">
                    <span class="button-content-wrapper tw-items-center">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <?php if (isset($component)) { $__componentOriginalbd7fb25e28b2d4e9e24c0c9b476160d4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd7fb25e28b2d4e9e24c0c9b476160d4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.user-check-icon','data' => ['width' => '24','height' => '24','stroke' => 'currentColor']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.user-check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '24','height' => '24','stroke' => 'currentColor']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd7fb25e28b2d4e9e24c0c9b476160d4)): ?>
<?php $attributes = $__attributesOriginalbd7fb25e28b2d4e9e24c0c9b476160d4; ?>
<?php unset($__attributesOriginalbd7fb25e28b2d4e9e24c0c9b476160d4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd7fb25e28b2d4e9e24c0c9b476160d4)): ?>
<?php $component = $__componentOriginalbd7fb25e28b2d4e9e24c0c9b476160d4; ?>
<?php unset($__componentOriginalbd7fb25e28b2d4e9e24c0c9b476160d4); ?>
<?php endif; ?>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('verify_account')); ?>

                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('company.setting')); ?>" class="<?php echo e(linkActive('company.setting')); ?>">
                    <span class="button-content-wrapper tw-items-center">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <i class="ph-gear"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('settings')); ?>

                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <span class="button-content-wrapper ">
                        <span class="button-icon align-icon-left">
                            <i class="ph-sign-out"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('log_out')); ?>

                        </span>
                    </span>
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </li>
        </ul>
    </div>
</div>

<style>
    .custom-dropdown-toggle::after {
        border: none;
        content: "";
        font-family: "flaticon";
        font-size: 14px;
        vertical-align: middle;
        margin-left: auto;
    }

    .active.custom-dropdown-toggle::after {
        transform: rotate(180deg) !important;
    }
</style>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/website/company/sidebar.blade.php ENDPATH**/ ?>