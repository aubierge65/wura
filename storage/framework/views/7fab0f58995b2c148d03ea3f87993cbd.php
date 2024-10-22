<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['basic' => 'active', 'profile' => 'inactive', 'social_media' => 'inactive', 'contact' => 'inactive']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['basic' => 'active', 'profile' => 'inactive', 'social_media' => 'inactive', 'contact' => 'inactive']); ?>
<?php foreach (array_filter((['basic' => 'active', 'profile' => 'inactive', 'social_media' => 'inactive', 'contact' => 'inactive']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="tw-py-6 tw-max-w-[654px] tw-mx-auto">
    <ul class="step-wrap tw-list-none tw-relative tw-grid tw-grid-cols-4 tw-gap-0">
        <li class="post-step">
            <div class="tw-flex tw-flex-col tw-gap-3 tw-items-center">
                <p class="rounded-full tw-mb-0">
                    <?php if($basic === 'active'): ?>
                        <?php if (isset($component)) { $__componentOriginalab2a3ecb3f7d377bde674571a21a52f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.step-active','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.step-active'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9)): ?>
<?php $attributes = $__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9; ?>
<?php unset($__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab2a3ecb3f7d377bde674571a21a52f9)): ?>
<?php $component = $__componentOriginalab2a3ecb3f7d377bde674571a21a52f9; ?>
<?php unset($__componentOriginalab2a3ecb3f7d377bde674571a21a52f9); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if($basic === 'inactive'): ?>
                        <?php if (isset($component)) { $__componentOriginalf22f93c60c5297ec05019e888f87ac23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf22f93c60c5297ec05019e888f87ac23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.step-inactive','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.step-inactive'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf22f93c60c5297ec05019e888f87ac23)): ?>
<?php $attributes = $__attributesOriginalf22f93c60c5297ec05019e888f87ac23; ?>
<?php unset($__attributesOriginalf22f93c60c5297ec05019e888f87ac23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf22f93c60c5297ec05019e888f87ac23)): ?>
<?php $component = $__componentOriginalf22f93c60c5297ec05019e888f87ac23; ?>
<?php unset($__componentOriginalf22f93c60c5297ec05019e888f87ac23); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if($basic === 'complete'): ?>
                        <?php if (isset($component)) { $__componentOriginal28f594d636381b27afb57bdfba39eb70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal28f594d636381b27afb57bdfba39eb70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.step-complete','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.step-complete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal28f594d636381b27afb57bdfba39eb70)): ?>
<?php $attributes = $__attributesOriginal28f594d636381b27afb57bdfba39eb70; ?>
<?php unset($__attributesOriginal28f594d636381b27afb57bdfba39eb70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal28f594d636381b27afb57bdfba39eb70)): ?>
<?php $component = $__componentOriginal28f594d636381b27afb57bdfba39eb70; ?>
<?php unset($__componentOriginal28f594d636381b27afb57bdfba39eb70); ?>
<?php endif; ?>
                    <?php endif; ?>
                </p>
                <p class="sm:tw-body-small-600 tw-text-base tw-mb-0 tw-text-gray-900">
                     <?php echo e(__('basic')); ?>

                </p>
            </div>
        </li>
        <li class="post-step <?php echo e($basic === 'complete' ? 'passed':''); ?>">
            <div class="tw-flex tw-flex-col tw-gap-3 tw-items-center">
                <p class="tw-rounded-full tw-mb-0">
                    <?php if($profile === 'active'): ?>
                        <?php if (isset($component)) { $__componentOriginalab2a3ecb3f7d377bde674571a21a52f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.step-active','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.step-active'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9)): ?>
<?php $attributes = $__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9; ?>
<?php unset($__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab2a3ecb3f7d377bde674571a21a52f9)): ?>
<?php $component = $__componentOriginalab2a3ecb3f7d377bde674571a21a52f9; ?>
<?php unset($__componentOriginalab2a3ecb3f7d377bde674571a21a52f9); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if($profile === 'inactive'): ?>
                        <?php if (isset($component)) { $__componentOriginalf22f93c60c5297ec05019e888f87ac23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf22f93c60c5297ec05019e888f87ac23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.step-inactive','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.step-inactive'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf22f93c60c5297ec05019e888f87ac23)): ?>
<?php $attributes = $__attributesOriginalf22f93c60c5297ec05019e888f87ac23; ?>
<?php unset($__attributesOriginalf22f93c60c5297ec05019e888f87ac23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf22f93c60c5297ec05019e888f87ac23)): ?>
<?php $component = $__componentOriginalf22f93c60c5297ec05019e888f87ac23; ?>
<?php unset($__componentOriginalf22f93c60c5297ec05019e888f87ac23); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if($profile === 'complete'): ?>
                        <?php if (isset($component)) { $__componentOriginal28f594d636381b27afb57bdfba39eb70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal28f594d636381b27afb57bdfba39eb70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.step-complete','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.step-complete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal28f594d636381b27afb57bdfba39eb70)): ?>
<?php $attributes = $__attributesOriginal28f594d636381b27afb57bdfba39eb70; ?>
<?php unset($__attributesOriginal28f594d636381b27afb57bdfba39eb70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal28f594d636381b27afb57bdfba39eb70)): ?>
<?php $component = $__componentOriginal28f594d636381b27afb57bdfba39eb70; ?>
<?php unset($__componentOriginal28f594d636381b27afb57bdfba39eb70); ?>
<?php endif; ?>
                    <?php endif; ?>
                </p>
                <p class="sm:tw-body-small-600 tw-text-base tw-mb-0 tw-text-gray-900">
                    <?php echo e(__('profile')); ?>

                </p>
            </div>
        </li>
        <li class="post-step <?php echo e($profile === 'complete' ? 'passed':''); ?>">
            <div class="tw-flex tw-flex-col tw-gap-3 tw-items-center">
                <p class="rounded-full tw-mb-0">
                    <?php if($social_media === 'active'): ?>
                        <?php if (isset($component)) { $__componentOriginalab2a3ecb3f7d377bde674571a21a52f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.step-active','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.step-active'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9)): ?>
<?php $attributes = $__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9; ?>
<?php unset($__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab2a3ecb3f7d377bde674571a21a52f9)): ?>
<?php $component = $__componentOriginalab2a3ecb3f7d377bde674571a21a52f9; ?>
<?php unset($__componentOriginalab2a3ecb3f7d377bde674571a21a52f9); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if($social_media === 'inactive'): ?>
                        <?php if (isset($component)) { $__componentOriginalf22f93c60c5297ec05019e888f87ac23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf22f93c60c5297ec05019e888f87ac23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.step-inactive','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.step-inactive'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf22f93c60c5297ec05019e888f87ac23)): ?>
<?php $attributes = $__attributesOriginalf22f93c60c5297ec05019e888f87ac23; ?>
<?php unset($__attributesOriginalf22f93c60c5297ec05019e888f87ac23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf22f93c60c5297ec05019e888f87ac23)): ?>
<?php $component = $__componentOriginalf22f93c60c5297ec05019e888f87ac23; ?>
<?php unset($__componentOriginalf22f93c60c5297ec05019e888f87ac23); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if($social_media === 'complete'): ?>
                        <?php if (isset($component)) { $__componentOriginal28f594d636381b27afb57bdfba39eb70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal28f594d636381b27afb57bdfba39eb70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.step-complete','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.step-complete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal28f594d636381b27afb57bdfba39eb70)): ?>
<?php $attributes = $__attributesOriginal28f594d636381b27afb57bdfba39eb70; ?>
<?php unset($__attributesOriginal28f594d636381b27afb57bdfba39eb70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal28f594d636381b27afb57bdfba39eb70)): ?>
<?php $component = $__componentOriginal28f594d636381b27afb57bdfba39eb70; ?>
<?php unset($__componentOriginal28f594d636381b27afb57bdfba39eb70); ?>
<?php endif; ?>
                    <?php endif; ?>
                </p>
                <p class="sm:tw-body-small-600 tw-text-base tw-mb-0 tw-text-gray-900">
                    <?php echo e(__('social_media')); ?>

                </p>
            </div>
        </li>
        <li class="post-step <?php echo e($social_media === 'complete' ? 'passed':''); ?>">
            <div class="tw-flex tw-flex-col tw-gap-3 tw-items-center">
                <p class="tw-rounded-full tw-mb-0">
                    <?php if($contact === 'active'): ?>
                        <?php if (isset($component)) { $__componentOriginalab2a3ecb3f7d377bde674571a21a52f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.step-active','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.step-active'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9)): ?>
<?php $attributes = $__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9; ?>
<?php unset($__attributesOriginalab2a3ecb3f7d377bde674571a21a52f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab2a3ecb3f7d377bde674571a21a52f9)): ?>
<?php $component = $__componentOriginalab2a3ecb3f7d377bde674571a21a52f9; ?>
<?php unset($__componentOriginalab2a3ecb3f7d377bde674571a21a52f9); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if($contact === 'inactive'): ?>
                        <?php if (isset($component)) { $__componentOriginalf22f93c60c5297ec05019e888f87ac23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf22f93c60c5297ec05019e888f87ac23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.step-inactive','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.step-inactive'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf22f93c60c5297ec05019e888f87ac23)): ?>
<?php $attributes = $__attributesOriginalf22f93c60c5297ec05019e888f87ac23; ?>
<?php unset($__attributesOriginalf22f93c60c5297ec05019e888f87ac23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf22f93c60c5297ec05019e888f87ac23)): ?>
<?php $component = $__componentOriginalf22f93c60c5297ec05019e888f87ac23; ?>
<?php unset($__componentOriginalf22f93c60c5297ec05019e888f87ac23); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if($contact === 'complete'): ?>
                        <?php if (isset($component)) { $__componentOriginal28f594d636381b27afb57bdfba39eb70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal28f594d636381b27afb57bdfba39eb70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.step-complete','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.step-complete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal28f594d636381b27afb57bdfba39eb70)): ?>
<?php $attributes = $__attributesOriginal28f594d636381b27afb57bdfba39eb70; ?>
<?php unset($__attributesOriginal28f594d636381b27afb57bdfba39eb70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal28f594d636381b27afb57bdfba39eb70)): ?>
<?php $component = $__componentOriginal28f594d636381b27afb57bdfba39eb70; ?>
<?php unset($__componentOriginal28f594d636381b27afb57bdfba39eb70); ?>
<?php endif; ?>
                    <?php endif; ?>
                </p>
                <p class="sm:tw-body-small-600 tw-text-base tw-mb-0 tw-text-gray-900">
                    <?php echo e(__('contact')); ?>

                </p>
            </div>
        </li>
    </ul>
</div>

<style>
    .post-step {
        position: relative;
        z-index: 100;
        text-align: center;
    }

    .post-step::before {
        content: '';
        display: block;
        position: absolute;
        top: 11px;
        right: calc(50% + 12px);
        height: 3px;
        width: calc(100% - 24px);
        background: var(--gray-100);
        z-index: -1;
    }
    body[dir="rtl"] .post-step::before {
        left: calc(50% + 12px) !important;
        right: auto !important;
    }

    .post-step:first-child::before {
        display: none;
    }
    /* body[dir="rtl"] .post-step:first-child::before {
        display: block !important;
    }
    body[dir="rtl"] .post-step:last-child::before {
        display: none;
    } */

    .post-step.passed::before,
    .post-step.active::before {
        background: var(--primary-500);
    }
</style>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/components/website/company/account-progress/steps.blade.php ENDPATH**/ ?>