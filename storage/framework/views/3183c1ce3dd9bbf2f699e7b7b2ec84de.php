<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['width' => '32', 'height' => '32', 'stroke' => '#0A65CC']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['width' => '32', 'height' => '32', 'stroke' => '#0A65CC']); ?>
<?php foreach (array_filter((['width' => '32', 'height' => '32', 'stroke' => '#0A65CC']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<svg width="<?php echo e($width); ?>" height="<?php echo e($height); ?>" viewBox="0 0 32 32" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path
        d="M15.9961 28C22.6235 28 27.9961 22.6274 27.9961 16C27.9961 9.37258 22.6235 4 15.9961 4C9.36868 4 3.99609 9.37258 3.99609 16C3.99609 22.6274 9.36868 28 15.9961 28Z"
        stroke="#0A65CC" stroke-width="2" stroke-miterlimit="10" />
    <path d="M11.0039 16H21.0039" stroke="#0A65CC" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round" />
    <path d="M15.9961 11V21" stroke="#0A65CC" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round" />
</svg>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/svg/plus-icon.blade.php ENDPATH**/ ?>