<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['height' => '24', 'width' => '24', 'fill' => 'none', 'stroke' => 'var(--primary-500)', 'fill' => 'var(--primary-50)', 'strokewidth' => '2']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['height' => '24', 'width' => '24', 'fill' => 'none', 'stroke' => 'var(--primary-500)', 'fill' => 'var(--primary-50)', 'strokewidth' => '2']); ?>
<?php foreach (array_filter((['height' => '24', 'width' => '24', 'fill' => 'none', 'stroke' => 'var(--primary-500)', 'fill' => 'var(--primary-50)', 'strokewidth' => '2']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path
        d="M16 28C22.6274 28 28 22.6274 28 16C28 9.37258 22.6274 4 16 4C9.37258 4 4 9.37258 4 16C4 22.6274 9.37258 28 16 28Z"
        fill="<?php echo e($fill); ?>" stroke="<?php echo e($stroke); ?>" stroke-width="<?php echo e($strokewidth); ?>"
        stroke-miterlimit="10" />
    <path d="M4 16H28" stroke="<?php echo e($stroke); ?>" stroke-width="<?php echo e($strokewidth); ?>" stroke-linecap="round"
        stroke-linejoin="round" />
    <path
        d="M16 27.678C18.7614 27.678 21 22.4496 21 16.0001C21 9.55062 18.7614 4.32227 16 4.32227C13.2386 4.32227 11 9.55062 11 16.0001C11 22.4496 13.2386 27.678 16 27.678Z"
        stroke="<?php echo e($stroke); ?>" stroke-width="<?php echo e($strokewidth); ?>" stroke-miterlimit="10" />
</svg>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura/resources/views/components/svg/globe-icon.blade.php ENDPATH**/ ?>