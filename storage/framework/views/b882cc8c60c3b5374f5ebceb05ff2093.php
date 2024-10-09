<div class="card">
    <div class="card-header">
        <h3 class="card-title line-height-36">
            <?php echo e($title); ?>

        </h3>
    </div>
    <div class="card-body table-responsive p-0">
        <div class="row">
            <div class="col-sm-12">
                <table class="ll-table table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th><?php echo e(__('job')); ?></th>
                            <th><?php echo e(__('category')); ?>/<?php echo e(__('role')); ?></th>
                            <th><?php echo e(__('salary')); ?></th>
                            <th><?php echo e(__('deadline')); ?></th>
                            <th style="text-align: right"><?php echo e(__('action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($jobs->count() > 0): ?>
                            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td tabindex="0">
                                        <a href="<?php echo e(route('job.show', $job->id)); ?>" class="company">
                                            <img src="<?php echo e(asset($job->company->logo_url)); ?>" alt="image">
                                            <div>
                                                <h2><?php echo e($job->title); ?></h2>
                                                <p>
                                                    <span><?php echo e($job->company ? $job->company->user->name : ''); ?></span>
                                                    <span>·</span>
                                                    <span><?php echo e($job->job_type->name); ?></span>
                                                    <?php if($job->is_remote): ?>
                                                        <span>·</span>
                                                        <span><?php echo e(__('remote')); ?></span>
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                        </a>
                                    </td>
                                    <td tabindex="0">
                                        <div class="category">
                                            <?php if (isset($component)) { $__componentOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-layer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-layer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b)): ?>
<?php $attributes = $__attributesOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b; ?>
<?php unset($__attributesOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b)): ?>
<?php $component = $__componentOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b; ?>
<?php unset($__componentOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b); ?>
<?php endif; ?>
                                            <div>
                                                <h3><?php echo e($job->category->name ?? ''); ?></h3>
                                                <p><?php echo e($job->role->name ?? ''); ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td tabindex="0">
                                        <div class="category">
                                            <?php if (isset($component)) { $__componentOriginal67492ee5892086a780c793b7d96efef6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67492ee5892086a780c793b7d96efef6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-money','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-money'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal67492ee5892086a780c793b7d96efef6)): ?>
<?php $attributes = $__attributesOriginal67492ee5892086a780c793b7d96efef6; ?>
<?php unset($__attributesOriginal67492ee5892086a780c793b7d96efef6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67492ee5892086a780c793b7d96efef6)): ?>
<?php $component = $__componentOriginal67492ee5892086a780c793b7d96efef6; ?>
<?php unset($__componentOriginal67492ee5892086a780c793b7d96efef6); ?>
<?php endif; ?>
                                            <div>
                                                <?php if($job->salary_mode == 'range'): ?>
                                                    <h3><?php echo e(getFormattedNumber($job->min_salary)); ?> -
                                                        <?php echo e(getFormattedNumber($job->max_salary)); ?>

                                                        <?php echo e(currentCurrencyCode()); ?></h3>
                                                <?php else: ?>
                                                    <h3><?php echo e($job->custom_salary); ?></h3>
                                                <?php endif; ?>
                                                <p><?php echo e($job->salary_type->name); ?> </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td tabindex="0">
                                        <?php echo e(date('j F, Y', strtotime($job->deadline))); ?>

                                    </td>
                                    <td style="text-align: right">
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo e(__('details')); ?>"
                                            href="<?php echo e(route('job.show', $job->id)); ?>" style="margin-right: 0px"
                                            class="btn ll-btn ll-border-none"><?php echo e(__('view_details')); ?>

                                            <?php if (isset($component)) { $__componentOriginalda561501dff59ec6eab6d19aa5897b8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda561501dff59ec6eab6d19aa5897b8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-btn-arrow','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-btn-arrow'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda561501dff59ec6eab6d19aa5897b8f)): ?>
<?php $attributes = $__attributesOriginalda561501dff59ec6eab6d19aa5897b8f; ?>
<?php unset($__attributesOriginalda561501dff59ec6eab6d19aa5897b8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda561501dff59ec6eab6d19aa5897b8f)): ?>
<?php $component = $__componentOriginalda561501dff59ec6eab6d19aa5897b8f; ?>
<?php unset($__componentOriginalda561501dff59ec6eab6d19aa5897b8f); ?>
<?php endif; ?>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7"><?php echo e(__('no_data_found')); ?></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/admin/candidate/card-component.blade.php ENDPATH**/ ?>