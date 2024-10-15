<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['height' => 21, 'width' => 21]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['height' => 21, 'width' => 21]); ?>
<?php foreach (array_filter((['height' => 21, 'width' => 21]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<svg xmlns="http://www.w3.org/2000/svg" width="<?php echo e($width); ?>" height="<?php echo e($height); ?>" viewBox="0 0 24 24"
    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
    class="feather feather-eye">
    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
    </path>
    <circle cx="12" cy="12" r="3"></circle>
</svg>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/svg/eye.blade.php ENDPATH**/ ?>