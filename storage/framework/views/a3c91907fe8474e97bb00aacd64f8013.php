<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['height' => 24, 'width' => 24, 'fill' => 'currentColor']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['height' => 24, 'width' => 24, 'fill' => 'currentColor']); ?>
<?php foreach (array_filter((['height' => 24, 'width' => 24, 'fill' => 'currentColor']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<svg width="<?php echo e($width); ?>" height="<?php echo e($height); ?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1">
    <path
        d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"
        fill="<?php echo e($fill); ?>"></path>
</svg>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/svg/new-twitter-icon.blade.php ENDPATH**/ ?>