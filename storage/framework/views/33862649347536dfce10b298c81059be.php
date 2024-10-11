<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['linkActive', 'route', 'icon', 'path', 'plus_icon']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['linkActive', 'route', 'icon', 'path', 'plus_icon']); ?>
<?php foreach (array_filter((['linkActive', 'route', 'icon', 'path', 'plus_icon']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li class="nav-item hover-icon">
    <a href="<?php echo e(route($route)); ?>" class="nav-link <?php echo e($linkActive ? 'active' : ''); ?>">
        <i class="nav-icon <?php echo e($icon); ?>"></i>
        <p><?php echo e($slot); ?></p>
    </a>
    <a href="<?php echo e(route($path)); ?>">
        <i class="<?php echo e($plus_icon); ?> right ico" aria-hidden="true"></i>
    </a>
</li>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/admin/sidebar-list.blade.php ENDPATH**/ ?>