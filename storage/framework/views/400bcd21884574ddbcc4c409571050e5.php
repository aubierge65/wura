<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['height' => 20, 'width' => 21, 'fill' => 'currentColor']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['height' => 20, 'width' => 21, 'fill' => 'currentColor']); ?>
<?php foreach (array_filter((['height' => 20, 'width' => 21, 'fill' => 'currentColor']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<svg width="<?php echo e($width); ?>" height="<?php echo e($height); ?>" viewBox="0 0 21 20" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path
        d="M12.1666 20H8.20126V10.1414H5.5V6.9316H8.20116V4.64762C8.20116 1.9411 9.39588 0 13.3505 0C14.1869 0 15.5 0.168134 15.5 0.168134V3.14858H14.1208C12.7155 3.14858 12.1668 3.5749 12.1668 4.75352V6.9316H15.4474L15.1553 10.1414H12.1667L12.1666 20Z"
        fill="<?php echo e($fill); ?>" />
</svg>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura/resources/views/components/svg/facebook-icon.blade.php ENDPATH**/ ?>