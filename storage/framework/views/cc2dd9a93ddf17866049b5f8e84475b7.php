<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['message' => 'Tooltip']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['message' => 'Tooltip']); ?>
<?php foreach (array_filter((['message' => 'Tooltip']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<span data-toggle="tooltip" title="<?php echo e($message); ?>">
    <?php if (isset($component)) { $__componentOriginal179199c24976241c80d64c95e0c3c75f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179199c24976241c80d64c95e0c3c75f = $attributes; } ?>
<?php $component = App\View\Components\Svg\InfoIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.info-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\InfoIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal179199c24976241c80d64c95e0c3c75f)): ?>
<?php $attributes = $__attributesOriginal179199c24976241c80d64c95e0c3c75f; ?>
<?php unset($__attributesOriginal179199c24976241c80d64c95e0c3c75f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal179199c24976241c80d64c95e0c3c75f)): ?>
<?php $component = $__componentOriginal179199c24976241c80d64c95e0c3c75f; ?>
<?php unset($__componentOriginal179199c24976241c80d64c95e0c3c75f); ?>
<?php endif; ?>
</span>
<?php /**PATH C:\wamp64\www\wura\resources\views/components/info-tip.blade.php ENDPATH**/ ?>