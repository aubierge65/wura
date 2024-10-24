<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'class' => 'class',
    'name' => 'name',
    'for' => 'for',
    'required' => true,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'class' => 'class',
    'name' => 'name',
    'for' => 'for',
    'required' => true,
]); ?>
<?php foreach (array_filter(([
    'class' => 'class',
    'name' => 'name',
    'for' => 'for',
    'required' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<label class="<?php echo e($class); ?> mb-2" for="<?php echo e($for ? $for : $name); ?>">
    <?php echo e(__($name)); ?>


    <?php if($required): ?>
        <span class="form-label-required text-danger">*</span>
    <?php endif; ?>

    <?php echo e($slot); ?>

</label>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/components/forms/label.blade.php ENDPATH**/ ?>