<div class="rt-site-footer bg-gray-900 dark-footer">
    <div class="footer-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <form action="<?php echo e(route('newsletter.subscribe')); ?>" class="rt-from" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="subscribe-inputbox-1 row smallgap">
                            <div class="col-md-8">
                                <div class="fromGroup has-icon2 group">
                                    <input type="text" name="email" placeholder="<?php echo e(__('email_address')); ?>"
                                        class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <span class="icon-badge-2 tw-text-gray-500">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M22 6L12 13L2 6" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"
                                        role="alert"><?php echo e(__($message)); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="newsButton btn btn-primary col-lg-4 p-0">
                                    <span class="p-4"><?php echo e(__('subscribe')); ?></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-7 rt-pt-md-30">
                    <div class="row">
                        <div class="col-md-4 col-sm-4   text-center rt-mb-20">
                            <div class="f-size-24 ft-wt-5 text-gray-10"><span
                                    class="counter"><?php echo e(livejob()); ?></span></div>
                            <span class="text-gray-500 f-size-16"><?php echo e(__('live_job')); ?></span>
                        </div>
                        <div class="col-md-4 col-sm-4   text-center rt-mb-20">
                            <div class="f-size-24 ft-wt-5 text-gray-10"><span
                                    class="counter"><?php echo e(companies()); ?></span></div>
                            <span class="text-gray-500 f-size-16"><?php echo e(__('companies')); ?></span>
                        </div>
                        <div class="col-md-4 col-sm-4  text-center rt-mb-20">
                            <div class="f-size-24 ft-wt-5 text-gray-10"><span
                                    class="counter"><?php echo e(candidate()); ?></span></div>
                            <span class="text-gray-500 f-size-16"><?php echo e(__('candidates')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startSection('frontend_scripts'); ?>
    <?php if (isset($component)) { $__componentOriginal4a3b1c15c84ef01c3beee056cddaba39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a3b1c15c84ef01c3beee056cddaba39 = $attributes; } ?>
<?php $component = App\View\Components\Website\ToastErrors::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.toast-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\ToastErrors::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4a3b1c15c84ef01c3beee056cddaba39)): ?>
<?php $attributes = $__attributesOriginal4a3b1c15c84ef01c3beee056cddaba39; ?>
<?php unset($__attributesOriginal4a3b1c15c84ef01c3beee056cddaba39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a3b1c15c84ef01c3beee056cddaba39)): ?>
<?php $component = $__componentOriginal4a3b1c15c84ef01c3beee056cddaba39; ?>
<?php unset($__componentOriginal4a3b1c15c84ef01c3beee056cddaba39); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\wamp64\www\wura\resources\views/components/website/subscribe-newsletter.blade.php ENDPATH**/ ?>