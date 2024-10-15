<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'name' => 'name',
    'class' => '',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'name' => 'name',
    'class' => '',
]); ?>
<?php foreach (array_filter(([
    'name' => 'name',
    'class' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($errors->has($name)): ?>
    <span class="invalid-feedback <?php echo e($class); ?>">
        <?php echo e($errors->first($name)); ?>

    </span>
<?php endif; ?>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/forms/error.blade.php ENDPATH**/ ?>