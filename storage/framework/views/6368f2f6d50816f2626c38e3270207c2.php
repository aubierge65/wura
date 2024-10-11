<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['linkActive', 'subLinkActive', 'icon']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['linkActive', 'subLinkActive', 'icon']); ?>
<?php foreach (array_filter((['linkActive', 'subLinkActive', 'icon']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li class="nav-item has-treeview <?php echo e($linkActive ? 'menu-open' : ''); ?>">
    <a href="javascript:void(0)" class="nav-link <?php echo e($subLinkActive ? 'active' : ''); ?>">
        <i class="nav-icon <?php echo e($icon); ?>"></i>
        <p><?php echo e($title); ?> <i class="right fas fa-angle-left"></i></p>
    </a>
    <?php echo e($slot); ?>

</li>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/admin/sidebar-dropdown.blade.php ENDPATH**/ ?>