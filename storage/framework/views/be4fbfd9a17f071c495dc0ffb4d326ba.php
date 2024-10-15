<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['type', 'name' => 'name', 'id' => 'id', 'class' => 'class', 'placeholder' => 'placeholder', 'value']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['type', 'name' => 'name', 'id' => 'id', 'class' => 'class', 'placeholder' => 'placeholder', 'value']); ?>
<?php foreach (array_filter((['type', 'name' => 'name', 'id' => 'id', 'class' => 'class', 'placeholder' => 'placeholder', 'value']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<input type="<?php echo e($type); ?>" name="<?php echo e($name); ?>" id="<?php echo e($id ? $id : $name); ?>"
    class="form-control <?php echo e($class); ?> <?php echo e(error($name)); ?>" value="<?php echo e($value ?? old($name)); ?>"
    placeholder="<?php echo e(__($placeholder)); ?>">
<?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => ''.e($name).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Error::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldadd8e15a92d72355fc41612ab7bc134)): ?>
<?php $attributes = $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134; ?>
<?php unset($__attributesOriginaldadd8e15a92d72355fc41612ab7bc134); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldadd8e15a92d72355fc41612ab7bc134)): ?>
<?php $component = $__componentOriginaldadd8e15a92d72355fc41612ab7bc134; ?>
<?php unset($__componentOriginaldadd8e15a92d72355fc41612ab7bc134); ?>
<?php endif; ?>
<?php /**PATH C:\wamp64\www\wura\resources\views/components/forms/input.blade.php ENDPATH**/ ?>