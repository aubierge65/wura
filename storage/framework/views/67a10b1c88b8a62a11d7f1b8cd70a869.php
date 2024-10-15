<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['title', 'filter']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['title', 'filter']); ?>
<?php foreach (array_filter((['title', 'filter']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="icon-badge">
    <div class="filtertags">
        <div class="single-tag" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e($title); ?>">
            <?php echo e($filter); ?>

            <span onclick="FilterClose('<?php echo e(Str::lower($title)); ?>')" class="close-tag pointer">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20Z"
                        fill="white"></path>
                    <path d="M12.9995 7L6.99951 13" stroke="#636A80" stroke-width="1.2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M6.99951 7L12.9995 13" stroke="#636A80" stroke-width="1.2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </span>
        </div>
    </div>
</div>
<?php /**PATH C:\wamp64\www\wura\resources\views/components/website/candidate/filter-data-component.blade.php ENDPATH**/ ?>