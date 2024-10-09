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

<svg width="<?php echo e($height); ?>" height="<?php echo e($width); ?>" fill="none"
                                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76">
                                                                        </path>
                                                                    </svg>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/svg/mail-icon.blade.php ENDPATH**/ ?>