<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['fill' => 'currentColor', 'stroke' => 'currentColor']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['fill' => 'currentColor', 'stroke' => 'currentColor']); ?>
<?php foreach (array_filter((['fill' => 'currentColor', 'stroke' => 'currentColor']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.2" d="M21 5.75L12 14L3 5.75H21Z" fill="<?php echo e($fill); ?>" />
    <path d="M21 5.75L12 14L3 5.75" stroke="<?php echo e($stroke); ?>" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    <path
        d="M3 5.75H21V18.5C21 18.6989 20.921 18.8897 20.7803 19.0303C20.6397 19.171 20.4489 19.25 20.25 19.25H3.75C3.55109 19.25 3.36032 19.171 3.21967 19.0303C3.07902 18.8897 3 18.6989 3 18.5V5.75Z"
        stroke="<?php echo e($stroke); ?>" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M10.3594 12.5L3.23438 19.0344" stroke="<?php echo e($stroke); ?>" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
    <path d="M20.7656 19.0344L13.6406 12.5" stroke="<?php echo e($stroke); ?>" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
</svg>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/svg/details-envelop.blade.php ENDPATH**/ ?>