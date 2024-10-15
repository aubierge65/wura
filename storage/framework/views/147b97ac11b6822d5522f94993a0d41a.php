<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'user' => $user,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'user' => $user,
]); ?>
<?php foreach (array_filter(([
    'user' => $user,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="sidebar-widget">
    <div class="contact">
        <h2 class="title">
            <?php echo e(__('contact_information')); ?>

        </h2>
        <?php if($user->company->website): ?>
            <div class="contact-icon-box">
                <div class="icon-img">
                    <?php if (isset($component)) { $__componentOriginal3789cf0e8d3eb7cdce2b747d09a3225e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3789cf0e8d3eb7cdce2b747d09a3225e = $attributes; } ?>
<?php $component = App\View\Components\Svg\GlobeIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.globe-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\GlobeIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3789cf0e8d3eb7cdce2b747d09a3225e)): ?>
<?php $attributes = $__attributesOriginal3789cf0e8d3eb7cdce2b747d09a3225e; ?>
<?php unset($__attributesOriginal3789cf0e8d3eb7cdce2b747d09a3225e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3789cf0e8d3eb7cdce2b747d09a3225e)): ?>
<?php $component = $__componentOriginal3789cf0e8d3eb7cdce2b747d09a3225e; ?>
<?php unset($__componentOriginal3789cf0e8d3eb7cdce2b747d09a3225e); ?>
<?php endif; ?>
                </div>
                <div class="info">
                    <h3 class="subtitle"><?php echo e(__('website')); ?></h3>
                    <a href="<?php echo e($user->company->website); ?>" target="_blank" class="title"><?php echo e($user->company->website); ?></a>
                </div>
            </div>
            <div class="devider">
                <hr>
            </div>
        <?php endif; ?>
        <div class="contact-icon-box">
            <div class="icon-img">
                <?php if (isset($component)) { $__componentOriginald077a677b9aa0746dfcbe2c20c2fb7e2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald077a677b9aa0746dfcbe2c20c2fb7e2 = $attributes; } ?>
<?php $component = App\View\Components\Svg\Location2Icon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.location2-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\Location2Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald077a677b9aa0746dfcbe2c20c2fb7e2)): ?>
<?php $attributes = $__attributesOriginald077a677b9aa0746dfcbe2c20c2fb7e2; ?>
<?php unset($__attributesOriginald077a677b9aa0746dfcbe2c20c2fb7e2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald077a677b9aa0746dfcbe2c20c2fb7e2)): ?>
<?php $component = $__componentOriginald077a677b9aa0746dfcbe2c20c2fb7e2; ?>
<?php unset($__componentOriginald077a677b9aa0746dfcbe2c20c2fb7e2); ?>
<?php endif; ?>
            </div>
            <div class="info">
                <h3 class="subtitle"><?php echo e(__('location')); ?></h3>
                <h2 class="title">
                    <?php echo e($user->company->exact_location ? $user->company->exact_location: $user->company->full_address); ?>

                </h2>
            </div>
        </div>

        <?php if(auth()->guard()->check()): ?>
            <div class="collapse" id="contact-more-collapse">
                <?php if($user->contactInfo->phone): ?>
                    <div class="devider">
                        <hr>
                    </div>
                    <div class="contact-icon-box">
                        <div class="icon-img">
                            <?php if (isset($component)) { $__componentOriginal837e7c9839424fcbb8e695213b71ec25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal837e7c9839424fcbb8e695213b71ec25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.telephone-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.telephone-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal837e7c9839424fcbb8e695213b71ec25)): ?>
<?php $attributes = $__attributesOriginal837e7c9839424fcbb8e695213b71ec25; ?>
<?php unset($__attributesOriginal837e7c9839424fcbb8e695213b71ec25); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal837e7c9839424fcbb8e695213b71ec25)): ?>
<?php $component = $__componentOriginal837e7c9839424fcbb8e695213b71ec25; ?>
<?php unset($__componentOriginal837e7c9839424fcbb8e695213b71ec25); ?>
<?php endif; ?>
                        </div>
                        <div class="info">
                            <h3 class="subtitle"><?php echo e(__('phone')); ?></h3>
                            <h2 class="title"><?php echo e($user->contactInfo->phone); ?></h2>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($user->contactInfo->email): ?>
                    <div class="devider">
                        <hr>
                    </div>
                    <div class="contact-icon-box">
                        <div class="icon-img">
                            <?php if (isset($component)) { $__componentOriginalfb6c0846e17f2096e6264e518f1c213b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb6c0846e17f2096e6264e518f1c213b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.envelope-icon','data' => ['height' => '32','width' => '32']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.envelope-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['height' => '32','width' => '32']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfb6c0846e17f2096e6264e518f1c213b)): ?>
<?php $attributes = $__attributesOriginalfb6c0846e17f2096e6264e518f1c213b; ?>
<?php unset($__attributesOriginalfb6c0846e17f2096e6264e518f1c213b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfb6c0846e17f2096e6264e518f1c213b)): ?>
<?php $component = $__componentOriginalfb6c0846e17f2096e6264e518f1c213b; ?>
<?php unset($__componentOriginalfb6c0846e17f2096e6264e518f1c213b); ?>
<?php endif; ?>
                        </div>
                        <div class="info">
                            <h3 class="subtitle"><?php echo e(__('email_address')); ?></h3>
                            <h2 class="title"><?php echo e($user->contactInfo->email); ?></h2>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    <div id="show-more" data-bs-toggle="collapse" data-bs-target="#contact-more-collapse" aria-expanded="false"
        aria-controls="contact-more-collapse" class="<?php if(auth()->guard()->guest()): ?> login_required <?php endif; ?> mt-2 rounded show-more">
        <?php echo e(__('show_contact_information')); ?>

    </div>
</div>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/website/company/contact-information.blade.php ENDPATH**/ ?>