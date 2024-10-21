<tr>
    <td colspan="10" class="text-center">
        <?php if (isset($component)) { $__componentOriginal8bf6266e7f80e2665df15c5faf71b89a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a = $attributes; } ?>
<?php $component = App\View\Components\Svg\NotFoundIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.not-found-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\NotFoundIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a)): ?>
<?php $attributes = $__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a; ?>
<?php unset($__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8bf6266e7f80e2665df15c5faf71b89a)): ?>
<?php $component = $__componentOriginal8bf6266e7f80e2665df15c5faf71b89a; ?>
<?php unset($__componentOriginal8bf6266e7f80e2665df15c5faf71b89a); ?>
<?php endif; ?>
        <p class="mt-4"><?php echo e(__('no_data_found')); ?></p>
        <?php echo e($slot); ?>

    </td>
</tr>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/components/website/not-found.blade.php ENDPATH**/ ?>