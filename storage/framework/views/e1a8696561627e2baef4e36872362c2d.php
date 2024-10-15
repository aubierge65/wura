<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['storke' => 'var(--primary-500)']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['storke' => 'var(--primary-500)']); ?>
<?php foreach (array_filter((['storke' => 'var(--primary-500)']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M5 12H19" stroke="<?php echo e($storke); ?>" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M12 5L19 12L12 19" stroke="<?php echo e($storke); ?>" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
</svg>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura/resources/views/components/svg/arrow-right-icon.blade.php ENDPATH**/ ?>