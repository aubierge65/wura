<?php $__env->startSection('title'); ?>
    <?php echo e(__('job_alert')); ?>

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
                        <div class="row d-flex justify-content-between p-2">
                            <div class="col-sm-12 col-md-6">
                                <h5 class="rt-mb-32"><?php echo e(__('job_alert')); ?></h5>
                            </div>
                            <div class="col-sm-12 col-md-6 d-flex justify-content-end">
                                <div class="sidebar-open-nav ml-3">
                                    <i class="ph-list"></i>
                                </div>
                            </div>
                        </div>
                        <div class="db-job-card-table">
                            <?php if($notifications->count() > 0): ?>
                                <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card jobcardStyle1 rt-mb-12">
                                        <div class="card-body">
                                            <div class="rt-single-icon-box">
                                                <div class="iconbox-content">
                                                    <a href="<?php echo e($noti->data['url']); ?>">
                                                        <li class="d-block">
                                                            <div class="rt-single-icon-box">
                                                                <div class="icon-thumb rt-mr-16 text-primary-500">
                                                                    <svg width="40" height="40" fill="none"
                                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="iconbox-content">
                                                                    <div class="body-font-4 text-gray-700 rt-mb-4">
                                                                        <?php echo e($noti->data['title']); ?>

                                                                    </div>
                                                                    <?php if(isset($noti->data['company_name']) && isset($noti->data['role_name'])): ?>
                                                                        <div class="body-font-2 text-gray-700 rt-mb-4">
                                                                            at <strong><?php echo e($noti->data['company_name']); ?></strong> as <strong><?php echo e($noti->data['role_name']); ?></strong>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                    <div class="body-font-4 text-gray-400">
                                                                        <?php echo e($noti->created_at->diffForHumans()); ?>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
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
                            <?php endif; ?>
                        </div>
                        <div class="rt-pt-12">
                            <?php if($notifications->total() > $notifications->count()): ?>
                                <nav>
                                    <?php echo e($notifications->links('vendor.pagination.frontend')); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/frontend/pages/candidate/job-alerts.blade.php ENDPATH**/ ?>