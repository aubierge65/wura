<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['height' => 21, 'width' => 21, 'fill' => '#2ecc71']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['height' => 21, 'width' => 21, 'fill' => '#2ecc71']); ?>
<?php foreach (array_filter((['height' => 21, 'width' => 21, 'fill' => '#2ecc71']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<svg xmlns="http://www.w3.org/2000/svg" width="<?php echo e($height); ?>" height="<?php echo e($width); ?>" fill="<?php echo e($fill); ?>"
    viewBox="0 0 256 256">
    <rect width="256" height="256" fill="none"></rect>
    <path d="M128,56C48,56,16,128,16,128s32,72,112,72,112-72,112-72S208,56,128,56Z" fill="none"
        stroke="<?php echo e($fill); ?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
    <circle cx="128" cy="128" r="40" fill="none" stroke="<?php echo e($fill); ?>"
        stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></circle>
</svg>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura/resources/views/components/svg/eye-icon.blade.php ENDPATH**/ ?>