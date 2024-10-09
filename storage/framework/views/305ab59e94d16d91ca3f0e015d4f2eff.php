<div class="col-lg-3">
    <div class="d-sidebar">
        <h3 class="tw-mb-3"><?php echo e(__('candidate_dashboard')); ?></h3>
        <ul class="sidebar-menu">
            <li>
                <a class="<?php echo e(request()->routeIs('candidate.dashboard') ? 'active' : ''); ?>"
                    href="<?php echo e(route('candidate.dashboard')); ?>">
                    <span class="button-content-wrapper ">
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
                <a class="<?php echo e(request()->routeIs('candidate.appliedjob') ? 'active' : ''); ?>"
                    href="<?php echo e(route('candidate.appliedjob')); ?>">
                    <span class="button-content-wrapper ">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <i class="ph-suitcase-simple"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('applied_jobs')); ?>

                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a class="<?php echo e(request()->routeIs('candidate.bookmark') ? 'active' : ''); ?>"
                    href="<?php echo e(route('candidate.bookmark')); ?>">
                    <span class="button-content-wrapper ">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <i class="ph-bookmark-simple"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('favorite_jobs')); ?>

                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a class="<?php echo e(request()->routeIs('candidate.job.alerts') ? 'active' : ''); ?>"
                    href="<?php echo e(route('candidate.job.alerts')); ?>">
                    <span class="button-content-wrapper ">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                            <i class="ph-bell-ringing"></i>
                        </span>
                        <span class="button-text">
                            <?php echo e(__('job_alert')); ?>

                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('candidate.messages')); ?>" class="<?php echo e(linkActive('candidate.messages')); ?>">
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
                <a class="<?php echo e(request()->routeIs('candidate.setting') ? 'active' : ''); ?>"
                    href="<?php echo e(route('candidate.setting')); ?>">
                    <span class="button-content-wrapper ">
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
                <a class="<?php echo e(request()->routeIs('logout') ? 'active' : ''); ?>" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="button-content-wrapper ">
                        <span class="button-icon align-icon-left tw-flex tw-items-center">
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
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/website/candidate/sidebar.blade.php ENDPATH**/ ?>