<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['height' => 24, 'width' => 24, 'stroke' => '#9199A3']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['height' => 24, 'width' => 24, 'stroke' => '#9199A3']); ?>
<?php foreach (array_filter((['height' => 24, 'width' => 24, 'stroke' => '#9199A3']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<svg width="<?php echo e($width); ?>" height="<?php echo e($height); ?>" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M8.0625 10.3145L12 14.2509L15.9375 10.3145" stroke="<?php echo e($stroke); ?>" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round"></path>
    <path d="M12 3.75V14.2472" stroke="<?php echo e($stroke); ?>" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
    </path>
    <path
        d="M20.25 14.25V19.5C20.25 19.6989 20.171 19.8897 20.0303 20.0303C19.8897 20.171 19.6989 20.25 19.5 20.25H4.5C4.30109 20.25 4.11032 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V14.25"
        stroke="<?php echo e($stroke); ?>" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
<?php /**PATH C:\wamp64\www\wura\resources\views/components/svg/download-icon.blade.php ENDPATH**/ ?>