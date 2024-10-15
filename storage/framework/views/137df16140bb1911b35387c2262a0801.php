
<?php $__env->startSection('title'); ?>
    <?php echo e(__('job_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
        $userr = auth()->user();
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="ll-card">
                    <div class="ll-card-header d-flex justify-content-between align-items-center">
                        <h3 class="ll-card-title line-height-36"><?php echo e($job->title); ?></h3>
                        <div>
                            <a href="<?php echo e(route('job.edit', $job->id)); ?>">
                                <?php if (isset($component)) { $__componentOriginalfbdacdae48d0cffd33965780e1a3c506 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbdacdae48d0cffd33965780e1a3c506 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-edit','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbdacdae48d0cffd33965780e1a3c506)): ?>
<?php $attributes = $__attributesOriginalfbdacdae48d0cffd33965780e1a3c506; ?>
<?php unset($__attributesOriginalfbdacdae48d0cffd33965780e1a3c506); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbdacdae48d0cffd33965780e1a3c506)): ?>
<?php $component = $__componentOriginalfbdacdae48d0cffd33965780e1a3c506; ?>
<?php unset($__componentOriginalfbdacdae48d0cffd33965780e1a3c506); ?>
<?php endif; ?>
                            </a>
                            <form action="<?php echo e(route('job.destroy', $job->id)); ?>" method="POST" class="d-inline">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                    class="border-0 bg-transparent">
                                    <?php if (isset($component)) { $__componentOriginal6c69d63d648b4fe134f027cfc6213af7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6c69d63d648b4fe134f027cfc6213af7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-delete','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6c69d63d648b4fe134f027cfc6213af7)): ?>
<?php $attributes = $__attributesOriginal6c69d63d648b4fe134f027cfc6213af7; ?>
<?php unset($__attributesOriginal6c69d63d648b4fe134f027cfc6213af7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6c69d63d648b4fe134f027cfc6213af7)): ?>
<?php $component = $__componentOriginal6c69d63d648b4fe134f027cfc6213af7; ?>
<?php unset($__componentOriginal6c69d63d648b4fe134f027cfc6213af7); ?>
<?php endif; ?>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="ll-card-body table-responsive">
                        <div class="ll-flex my-2">
                            <div class="ll-flex-item">
                                <div class="candidate-details__left">
                                    <div class="candidate-logo">
                                        <?php if($job->company): ?>
                                            <img src="<?php echo e(asset($job->company->logo_url)); ?>" alt="company logo">
                                        <?php else: ?>
                                            <p>Admin Posted Job</p>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <h3><?php echo e($job->title); ?></h3>
                                        <p>
                                            <span><?php echo e($job->company && $job->company->user ? $job->company->user->name : '-'); ?></span>
                                            <span>·</span>
                                            <span><?php echo e($job->job_type->name ?? ''); ?></span>
                                            <?php if($job->is_remote): ?>
                                                <span>·</span>
                                                <span><?php echo e(__('remote')); ?></span>
                                            <?php endif; ?>
                                        </p>
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

                                                        <?php echo e(currentCurrencyCode()); ?>

                                                    </h3>
                                                <?php else: ?>
                                                    <h3><?php echo e($job->custom_salary); ?></h3>
                                                <?php endif; ?>
                                                <p><?php echo e($job->salary_type->name); ?> </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center" style="gap: 16px;">
                                            <?php if($job->status == 'pending'): ?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <form action="<?php echo e(route('admin.job.status.change', $job->id)); ?>"
                                                        method="POST" id="job_status_pending_form_<?php echo e($job->id); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <input
                                                            onclick="$('#job_status_pending_form_<?php echo e($job->id); ?>').submit()"
                                                            type="radio" id="status_input_pending_<?php echo e($job->id); ?>"
                                                            name="status" class="plan_type_selection custom-control-input"
                                                            value="pending"
                                                            <?php echo e($job->status == 'pending' ? 'checked' : ''); ?>>
                                                        <label class="custom-control-label"
                                                            for="status_input_pending_<?php echo e($job->id); ?>"><?php echo e(__('pending')); ?></label>
                                                    </form>
                                                </div>
                                            <?php endif; ?>
                                            <?php if($job->status == 'active' || $job->status == 'pending'): ?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <form action="<?php echo e(route('admin.job.status.change', $job->id)); ?>"
                                                        method="POST" id="job_status_publish_form_<?php echo e($job->id); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <input
                                                            onclick="$('#job_status_publish_form_<?php echo e($job->id); ?>').submit()"
                                                            type="radio" id="status_input_publish_<?php echo e($job->id); ?>"
                                                            name="status" class="plan_type_selection custom-control-input"
                                                            value="active" <?php echo e($job->status == 'active' ? 'checked' : ''); ?>>
                                                        <label class="custom-control-label"
                                                            for="status_input_publish_<?php echo e($job->id); ?>"><?php echo e(__('publish')); ?></label>
                                                    </form>
                                                </div>
                                            <?php endif; ?>
                                            <?php if($job->status == 'active' || $job->status == 'expired'): ?>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <form action="<?php echo e(route('admin.job.status.change', $job->id)); ?>"
                                                        method="POST" id="job_status_unpublish_form_<?php echo e($job->id); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <input disabled
                                                            onclick="$('#job_status_unpublish_form_<?php echo e($job->id); ?>').submit()"
                                                            type="radio" id="status_input_unpublish_<?php echo e($job->id); ?>"
                                                            name="status" class="plan_type_selection custom-control-input"
                                                            value="expired"
                                                            <?php echo e($job->status == 'expired' ? 'checked' : ''); ?>>
                                                        <label
                                                            class="custom-control-label <?php echo e($job->status == 'expired' ? 'expired_radio' : ''); ?>"
                                                            data-toggle="tooltip"
                                                            title="<?php echo e(__('expired_status_depend_on_deadline')); ?>"
                                                            for="status_input_unpublish_<?php echo e($job->id); ?>"><?php echo e(__('expired')); ?></label>
                                                    </form>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ll-flex-item">
                                <div class="candidate-details__right">
                                    <div class="one">
                                        <div class="mb-4">
                                            <?php if (isset($component)) { $__componentOriginaled138ee7d446f3338798586284778cb7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled138ee7d446f3338798586284778cb7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.details-experience','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.details-experience'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled138ee7d446f3338798586284778cb7)): ?>
<?php $attributes = $__attributesOriginaled138ee7d446f3338798586284778cb7; ?>
<?php unset($__attributesOriginaled138ee7d446f3338798586284778cb7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled138ee7d446f3338798586284778cb7)): ?>
<?php $component = $__componentOriginaled138ee7d446f3338798586284778cb7; ?>
<?php unset($__componentOriginaled138ee7d446f3338798586284778cb7); ?>
<?php endif; ?>
                                            <p><?php echo e(__('category')); ?></p>
                                            <h4><?php echo e($job->category ? $job->category->name : ''); ?></h4>
                                        </div>
                                        <div>
                                            <?php if (isset($component)) { $__componentOriginal1d1f3420c475b52f492c69d048420fb2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1d1f3420c475b52f492c69d048420fb2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.details-profession','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.details-profession'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1d1f3420c475b52f492c69d048420fb2)): ?>
<?php $attributes = $__attributesOriginal1d1f3420c475b52f492c69d048420fb2; ?>
<?php unset($__attributesOriginal1d1f3420c475b52f492c69d048420fb2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d1f3420c475b52f492c69d048420fb2)): ?>
<?php $component = $__componentOriginal1d1f3420c475b52f492c69d048420fb2; ?>
<?php unset($__componentOriginal1d1f3420c475b52f492c69d048420fb2); ?>
<?php endif; ?>
                                            <p><?php echo e(__('job_role')); ?></p>
                                            <h4><?php echo e($job->role ? $job->role->name : ''); ?></h4>
                                        </div>
                                    </div>
                                    <div class="two">
                                        <div class="mb-4">
                                            <?php if (isset($component)) { $__componentOriginale753661e3c9b7ff21e8c235507dfa342 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale753661e3c9b7ff21e8c235507dfa342 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.details-package','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.details-package'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale753661e3c9b7ff21e8c235507dfa342)): ?>
<?php $attributes = $__attributesOriginale753661e3c9b7ff21e8c235507dfa342; ?>
<?php unset($__attributesOriginale753661e3c9b7ff21e8c235507dfa342); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale753661e3c9b7ff21e8c235507dfa342)): ?>
<?php $component = $__componentOriginale753661e3c9b7ff21e8c235507dfa342; ?>
<?php unset($__componentOriginale753661e3c9b7ff21e8c235507dfa342); ?>
<?php endif; ?>
                                            <p><?php echo e(__('experience')); ?></p>
                                            <h4><?php echo e($job->experience ? $job->experience->name : ''); ?></h4>
                                        </div>
                                        <div>
                                            <?php if (isset($component)) { $__componentOriginale376b784cadb861270043d4973968b92 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale376b784cadb861270043d4973968b92 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.details-education','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.details-education'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale376b784cadb861270043d4973968b92)): ?>
<?php $attributes = $__attributesOriginale376b784cadb861270043d4973968b92; ?>
<?php unset($__attributesOriginale376b784cadb861270043d4973968b92); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale376b784cadb861270043d4973968b92)): ?>
<?php $component = $__componentOriginale376b784cadb861270043d4973968b92; ?>
<?php unset($__componentOriginale376b784cadb861270043d4973968b92); ?>
<?php endif; ?>
                                            <p><?php echo e(__('education')); ?></p>
                                            <h4><?php echo e($job->education ? $job->education->name : ''); ?></h4>
                                        </div>
                                    </div>
                                    <div class="three">
                                        <div class="mb-4">
                                            <?php if (isset($component)) { $__componentOriginalf89b62144d9b3d490cac5b1a3812717b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf89b62144d9b3d490cac5b1a3812717b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.details-leyers','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.details-leyers'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf89b62144d9b3d490cac5b1a3812717b)): ?>
<?php $attributes = $__attributesOriginalf89b62144d9b3d490cac5b1a3812717b; ?>
<?php unset($__attributesOriginalf89b62144d9b3d490cac5b1a3812717b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf89b62144d9b3d490cac5b1a3812717b)): ?>
<?php $component = $__componentOriginalf89b62144d9b3d490cac5b1a3812717b; ?>
<?php unset($__componentOriginalf89b62144d9b3d490cac5b1a3812717b); ?>
<?php endif; ?>
                                            <p><?php echo e(__('gender')); ?></p>
                                            <h4><?php echo e(ucfirst($job->gender)); ?></h4>
                                        </div>
                                        <div>
                                            <?php if (isset($component)) { $__componentOriginalfe6106111d567ba693e55c69ee74b643 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfe6106111d567ba693e55c69ee74b643 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.details-calendar-blank','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.details-calendar-blank'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfe6106111d567ba693e55c69ee74b643)): ?>
<?php $attributes = $__attributesOriginalfe6106111d567ba693e55c69ee74b643; ?>
<?php unset($__attributesOriginalfe6106111d567ba693e55c69ee74b643); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe6106111d567ba693e55c69ee74b643)): ?>
<?php $component = $__componentOriginalfe6106111d567ba693e55c69ee74b643; ?>
<?php unset($__componentOriginalfe6106111d567ba693e55c69ee74b643); ?>
<?php endif; ?>
                                            <p><?php echo e(__('deadline')); ?></p>
                                            <h4><?php echo e(date('D, d M Y', strtotime($job->deadline))); ?></h4>
                                        </div>
                                    </div>
                                    <?php if($job->company): ?>
                                        <div class="four">
                                            <div class="mb-4 d-flex">
                                                <?php if (isset($component)) { $__componentOriginalc86d93b641e27ec6ff6fa74e63e7279a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc86d93b641e27ec6ff6fa74e63e7279a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.details-globe-simple','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.details-globe-simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc86d93b641e27ec6ff6fa74e63e7279a)): ?>
<?php $attributes = $__attributesOriginalc86d93b641e27ec6ff6fa74e63e7279a; ?>
<?php unset($__attributesOriginalc86d93b641e27ec6ff6fa74e63e7279a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc86d93b641e27ec6ff6fa74e63e7279a)): ?>
<?php $component = $__componentOriginalc86d93b641e27ec6ff6fa74e63e7279a; ?>
<?php unset($__componentOriginalc86d93b641e27ec6ff6fa74e63e7279a); ?>
<?php endif; ?>

                                                <div>
                                                    <p><?php echo e(__('website')); ?></p>

                                                    <a
                                                        href="<?php echo e($job->company->website); ?>"><?php echo e($job->company->website); ?></a>

                                                </div>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="four">
                                        <div class="mb-4">
                                            <?php if (isset($component)) { $__componentOriginalf89b62144d9b3d490cac5b1a3812717b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf89b62144d9b3d490cac5b1a3812717b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.details-leyers','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.details-leyers'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf89b62144d9b3d490cac5b1a3812717b)): ?>
<?php $attributes = $__attributesOriginalf89b62144d9b3d490cac5b1a3812717b; ?>
<?php unset($__attributesOriginalf89b62144d9b3d490cac5b1a3812717b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf89b62144d9b3d490cac5b1a3812717b)): ?>
<?php $component = $__componentOriginalf89b62144d9b3d490cac5b1a3812717b; ?>
<?php unset($__componentOriginalf89b62144d9b3d490cac5b1a3812717b); ?>
<?php endif; ?>
                                            <p><?php echo e(__('contrat')); ?></p>
                                            <h4><?php echo e($job->contract ? $job->contract->name : ''); ?></h4>
                                        </div>
                                        <div>
                                            <?php if (isset($component)) { $__componentOriginalfe6106111d567ba693e55c69ee74b643 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfe6106111d567ba693e55c69ee74b643 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.details-calendar-blank','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.details-calendar-blank'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfe6106111d567ba693e55c69ee74b643)): ?>
<?php $attributes = $__attributesOriginalfe6106111d567ba693e55c69ee74b643; ?>
<?php unset($__attributesOriginalfe6106111d567ba693e55c69ee74b643); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe6106111d567ba693e55c69ee74b643)): ?>
<?php $component = $__componentOriginalfe6106111d567ba693e55c69ee74b643; ?>
<?php unset($__componentOriginalfe6106111d567ba693e55c69ee74b643); ?>
<?php endif; ?>
                                            <p><?php echo e(__('mode_de_travail')); ?></p>
                                            <h4><?php echo e($job->mode ? $job->mode->name : ''); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc-skills-wrapper">
                        <div class="desc-wrap">
                            <div class="text-bold">
                                <?php echo e(__('description')); ?>

                            </div>
                            <p>
                                <?php echo $job->description; ?>

                            </p>
                        </div>
                        <div class="skills-wrap">
                            <div class="ll-mb-4">
                                <h4 class="text-bold">
                                    <?php echo e(__('tags')); ?>

                                </h4>
                                <p>
                                    <?php $__currentLoopData = $job->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="skill-badge"><?php echo e($skill->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                            </div>
                            <div class="ll-mb-4">
                                <h4 class="text-bold">
                                    <?php echo e(__('benefits')); ?>

                                </h4>
                                <p>
                                    <?php $__currentLoopData = $job->benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="language-badge"><?php echo e($language->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                            </div>
                            <div class="ll-mb-4 mt-2">
                                <h4 class="text-bold">
                                    <?php echo e(__('skills')); ?>

                                </h4>
                                <p>
                                    <?php $__currentLoopData = $job->skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="skill-badge"><?php echo e($skill->name); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                            </div>
                            <div class="ll-mb-4 mt-2">
                                <h4 class="text-bold">
                                    <?php echo e(__('languages')); ?>

                                </h4>
                                <ul>
                                    <?php $__empty_1 = true; $__currentLoopData = $job->languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li>
                                            <?php echo e($language->name); ?> - Niveau :
                                            <?php if($language->pivot->level_id): ?>
                                                <?php echo e(\App\Models\Level::find($language->pivot->level_id)->name); ?>

                                            <?php else: ?>
                                                Niveau non défini
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <li>Aucune langue associée à ce job.</li>
                                    <?php endif; ?>
                                </ul>

                                

                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 p-4">
                            <label for="description"><?php echo e(__('location')); ?></label>
                            <div class="p-half rounded">
                                <?php if (isset($component)) { $__componentOriginale4f5378857e0431db5db83c630fbf8d9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4f5378857e0431db5db83c630fbf8d9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.map.map-warning','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.map.map-warning'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4f5378857e0431db5db83c630fbf8d9)): ?>
<?php $attributes = $__attributesOriginale4f5378857e0431db5db83c630fbf8d9; ?>
<?php unset($__attributesOriginale4f5378857e0431db5db83c630fbf8d9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4f5378857e0431db5db83c630fbf8d9)): ?>
<?php $component = $__componentOriginale4f5378857e0431db5db83c630fbf8d9; ?>
<?php unset($__componentOriginale4f5378857e0431db5db83c630fbf8d9); ?>
<?php endif; ?>
                                <?php
                                    $map = $setting->default_map;
                                ?>

                                <?php if($map == 'google-map'): ?>
                                    <div class="map mymap" id="google-map"></div>
                                <?php else: ?>
                                    <div id="leaflet-map"></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 35px;
            height: 19px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            display: none;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 15px;
            width: 15px;
            left: 3px;
            bottom: 2px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input.success:checked+.slider {
            background-color: #28a745;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(15px);
            -ms-transform: translateX(15px);
            transform: translateX(15px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }

        .select2-results__option[aria-selected=true] {
            display: none;
        }

        .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice {
            color: #fff;
            border: 1px solid #fff;
            background: #007bff;
            border-radius: 30px;
        }

        .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice__remove {
            color: #fff;
        }

        /* Style  radio button */
        .expired_radio::after {
            content: "";
            display: inline-block;
            border-radius: 50%;
            margin-right: 8px;
            background-color: red;
        }
    </style>
    <!-- >=>Leaflet Map<=< -->
    <?php if (isset($component)) { $__componentOriginal3e300f156325fa92f96d8a516b8d8659 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3e300f156325fa92f96d8a516b8d8659 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.map.leaflet.map_links','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('map.leaflet.map_links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3e300f156325fa92f96d8a516b8d8659)): ?>
<?php $attributes = $__attributesOriginal3e300f156325fa92f96d8a516b8d8659; ?>
<?php unset($__attributesOriginal3e300f156325fa92f96d8a516b8d8659); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3e300f156325fa92f96d8a516b8d8659)): ?>
<?php $component = $__componentOriginal3e300f156325fa92f96d8a516b8d8659; ?>
<?php unset($__componentOriginal3e300f156325fa92f96d8a516b8d8659); ?>
<?php endif; ?>
    <?php echo $__env->make('map::links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {
            $('#tags').select2({
                theme: 'bootstrap4',
                tags: true,
                tokenSeparators: [',', ' ']
            });
        });

        ClassicEditor.create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
    
    <?php if (isset($component)) { $__componentOriginale8c9e08de211331e5ea62140e4549a3b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale8c9e08de211331e5ea62140e4549a3b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.map.leaflet.map_scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('map.leaflet.map_scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale8c9e08de211331e5ea62140e4549a3b)): ?>
<?php $attributes = $__attributesOriginale8c9e08de211331e5ea62140e4549a3b; ?>
<?php unset($__attributesOriginale8c9e08de211331e5ea62140e4549a3b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8c9e08de211331e5ea62140e4549a3b)): ?>
<?php $component = $__componentOriginale8c9e08de211331e5ea62140e4549a3b; ?>
<?php unset($__componentOriginale8c9e08de211331e5ea62140e4549a3b); ?>
<?php endif; ?>
    <script>
        var oldlat = <?php echo $job->lat ? $job->lat : $setting->default_lat; ?>;
        var oldlng = <?php echo $job->long ? $job->long : $setting->default_long; ?>;

        // Map preview
        var element = document.getElementById('leaflet-map');

        // Height has to be set. You can do this in CSS too.
        element.style = 'height:300px;';

        // Create Leaflet map on map element.
        var leaflet_map = L.map(element);

        // Add OSM tile layer to the Leaflet map.
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(leaflet_map);

        // Target's GPS coordinates.
        var target = L.latLng(oldlat, oldlng);

        // Set map's center to target with zoom 14.
        const zoom = 14;
        leaflet_map.setView(target, zoom);

        // Place a marker on the same location.
        L.marker(target).addTo(leaflet_map);
    </script>

    <!-- ================ google map ============== -->
    <?php if (isset($component)) { $__componentOriginal8bb4a77cbcdce0dc52116df2fe1539c4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8bb4a77cbcdce0dc52116df2fe1539c4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.map.google-map-check','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.map.google-map-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8bb4a77cbcdce0dc52116df2fe1539c4)): ?>
<?php $attributes = $__attributesOriginal8bb4a77cbcdce0dc52116df2fe1539c4; ?>
<?php unset($__attributesOriginal8bb4a77cbcdce0dc52116df2fe1539c4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8bb4a77cbcdce0dc52116df2fe1539c4)): ?>
<?php $component = $__componentOriginal8bb4a77cbcdce0dc52116df2fe1539c4; ?>
<?php unset($__componentOriginal8bb4a77cbcdce0dc52116df2fe1539c4); ?>
<?php endif; ?>
    <script>
        function initMap() {
            var token = "<?php echo e($setting->google_map_key); ?>";

            var oldlat = <?php echo $job->lat ? $job->lat : $setting->default_lat; ?>;
            var oldlng = <?php echo $job->long ? $job->long : $setting->default_long; ?>;

            const map = new google.maps.Map(document.getElementById("google-map"), {
                zoom: 7,
                center: {
                    lat: oldlat,
                    lng: oldlng
                },
            });

            const image =
                "https://gisgeography.com/wp-content/uploads/2018/01/map-marker-3-116x200.png";
            const beachMarker = new google.maps.Marker({

                draggable: false,
                position: {
                    lat: oldlat,
                    lng: oldlng
                },
                map,
                // icon: image
            });
        }
        window.initMap = initMap;
    </script>
    <script>
        <?php
            $link1 = 'https://maps.googleapis.com/maps/api/js?key=';
            $link2 = $setting->google_map_key;
            $Link3 = '&callback=initMap&libraries=places,geometry';
            $scr = $link1 . $link2 . $Link3;
        ?>;
    </script>
    <script src="<?php echo e($scr); ?>" async defer></script>
    <!-- ================ google map ============== -->
    <script>
        $('.status-switch').on('change', function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '<?php echo e(route('candidate.status.change')); ?>',
                data: {
                    'status': status,
                    'id': id
                },
                success: function(response) {
                    toastr.success(response.message, 'Success');
                }
            });
        });

        $('.email-verification-switch').on('change', function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('userid');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '<?php echo e(route('company.verify.change')); ?>',
                data: {
                    'status': status,
                    'id': id
                },
                success: function(response) {
                    toastr.success(response.message, 'Success');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/backend/Job/show.blade.php ENDPATH**/ ?>