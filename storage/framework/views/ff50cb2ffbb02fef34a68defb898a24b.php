<?php $__env->startSection('title'); ?>
    <?php echo e(__('plan_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">


        <div class="row justify-content-between align-items-center">
            <div class="col-sm-12 col-md-4">
                <?php if(userCan('plan.update') && $plans->count()): ?>
                    <form action="<?php echo e(route('module.plan.recommended')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div>
                            <?php echo e(__('set_recommended_package')); ?>

                        </div>
                        <div class="d-flex">
                            <select name="plan_id" class="form-control" id="">
                                <option value="" hidden><?php echo e(__('select_one')); ?></option>
                                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($plan->recommended ? 'selected' : ''); ?> value="<?php echo e($plan->id); ?>">
                                        <?php echo e($plan->label); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <button type="submit" class="btn btn-primary ml-2"><?php echo e(__('update')); ?></button>
                        </div>
                    </form>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-4">
                <?php if(userCan('plan.update') && $plans->count()): ?>
                    <form action="<?php echo e(route('module.plan.default')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div>
                            <?php echo e(__('set_default_package')); ?>

                        </div>
                        <div class="d-flex">
                            <select name="plan_id" class="form-control" id="inlineFormCustomSelect">
                                <option value="" hidden><?php echo e(__('select_one')); ?></option>
                                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($setting->default_plan == $plan->id ? 'selected' : ''); ?>

                                        value="<?php echo e($plan->id); ?>">
                                        <?php echo e($plan->label); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <button type="submit" class="btn btn-primary ml-2"><?php echo e(__('update')); ?></button>
                        </div>
                    </form>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-4 text-md-right">
                
                <?php if(userCan('plan.create')): ?>
                    <a href="<?php echo e(route('module.plan.create')); ?>" class="btn bg-primary rounded mt-2"><i
                            class="fas fa-plus"></i>&nbsp;
                        <?php echo e(__('create')); ?>

                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="row h-100 mt-4">
            <?php $__empty_1 = true; $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-6 col-lg-4 col-xl-4 mb-3 col-12">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header text-center py-4">
                            <h4><?php echo e($plan->label); ?></h4>
                            <?php if($plan->recommended): ?>
                                <div class="badge badge-info"><?php echo e(__('recommended')); ?></div>
                            <?php endif; ?>
                            <?php if($plan->id == $setting->default_plan): ?>
                                <div class="badge badge-secondary"><?php echo e(__('default')); ?></div>
                            <?php endif; ?>
                            <h1 class="text-dark"><?php echo e(config('templatecookie.currency_symbol')); ?><?php echo e($plan->price); ?></h1>
                            <p class="mb-0">
                                <?php if(isset($plan->descriptions) && isset($plan->descriptions[0])): ?>
                                    <?php echo $plan->descriptions[0]->description; ?>

                                <?php else: ?>
                                    <?php
                                        $default_description = $plan_descriptions->where('plan_id', $plan->id)->first();
                                    ?>

                                    <?php if($default_description && $default_description->description): ?>
                                        <?php echo $default_description->description; ?>

                                    <?php else: ?>
                                        <span class="text-danger"><?php echo __('no_description_has_been_added_to_this_language'); ?></span>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="mb-2 d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <span class="icon mr-2">
                                        <?php if (isset($component)) { $__componentOriginald9f7689281c68d63654bea3fa4f01cc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9f7689281c68d63654bea3fa4f01cc5 = $attributes; } ?>
<?php $component = App\View\Components\CheckIcon::resolve(['width' => '22','height' => '22'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CheckIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9f7689281c68d63654bea3fa4f01cc5)): ?>
<?php $attributes = $__attributesOriginald9f7689281c68d63654bea3fa4f01cc5; ?>
<?php unset($__attributesOriginald9f7689281c68d63654bea3fa4f01cc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9f7689281c68d63654bea3fa4f01cc5)): ?>
<?php $component = $__componentOriginald9f7689281c68d63654bea3fa4f01cc5; ?>
<?php unset($__componentOriginald9f7689281c68d63654bea3fa4f01cc5); ?>
<?php endif; ?>
                                    </span>
                                    <h5 class="mb-0">
                                        <?php echo e(__('job_limit')); ?> :
                                    </h5>
                                </div>
                                <h5 class="mb-0"> <?php echo e($plan->job_limit); ?></h5>
                            </div>
                            <div class="mb-2 d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <span class="icon mr-2">
                                        <?php if (isset($component)) { $__componentOriginald9f7689281c68d63654bea3fa4f01cc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9f7689281c68d63654bea3fa4f01cc5 = $attributes; } ?>
<?php $component = App\View\Components\CheckIcon::resolve(['width' => '22','height' => '22'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CheckIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9f7689281c68d63654bea3fa4f01cc5)): ?>
<?php $attributes = $__attributesOriginald9f7689281c68d63654bea3fa4f01cc5; ?>
<?php unset($__attributesOriginald9f7689281c68d63654bea3fa4f01cc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9f7689281c68d63654bea3fa4f01cc5)): ?>
<?php $component = $__componentOriginald9f7689281c68d63654bea3fa4f01cc5; ?>
<?php unset($__componentOriginald9f7689281c68d63654bea3fa4f01cc5); ?>
<?php endif; ?>
                                    </span>
                                    <h5 class="mb-0">
                                        <?php echo e(__('featured_job_limit')); ?> :
                                    </h5>
                                </div>
                                <h5 class="mb-0"> <?php echo e($plan->featured_job_limit); ?></h5>
                            </div>
                            <div class="mb-2 d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <span class="icon mr-2">
                                        <?php if (isset($component)) { $__componentOriginald9f7689281c68d63654bea3fa4f01cc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9f7689281c68d63654bea3fa4f01cc5 = $attributes; } ?>
<?php $component = App\View\Components\CheckIcon::resolve(['width' => '22','height' => '22'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CheckIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9f7689281c68d63654bea3fa4f01cc5)): ?>
<?php $attributes = $__attributesOriginald9f7689281c68d63654bea3fa4f01cc5; ?>
<?php unset($__attributesOriginald9f7689281c68d63654bea3fa4f01cc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9f7689281c68d63654bea3fa4f01cc5)): ?>
<?php $component = $__componentOriginald9f7689281c68d63654bea3fa4f01cc5; ?>
<?php unset($__componentOriginald9f7689281c68d63654bea3fa4f01cc5); ?>
<?php endif; ?>
                                    </span>
                                    <h5 class="mb-0">
                                        <?php echo e(__('highlight_job_limit')); ?> :
                                    </h5>
                                </div>
                                <h5 class="mb-0"> <?php echo e($plan->highlight_job_limit); ?></h5>
                            </div>
                            <div class="mb-2 d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <span class="icon mr-2">
                                        <?php if (isset($component)) { $__componentOriginald9f7689281c68d63654bea3fa4f01cc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9f7689281c68d63654bea3fa4f01cc5 = $attributes; } ?>
<?php $component = App\View\Components\CheckIcon::resolve(['width' => '22','height' => '22'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CheckIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9f7689281c68d63654bea3fa4f01cc5)): ?>
<?php $attributes = $__attributesOriginald9f7689281c68d63654bea3fa4f01cc5; ?>
<?php unset($__attributesOriginald9f7689281c68d63654bea3fa4f01cc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9f7689281c68d63654bea3fa4f01cc5)): ?>
<?php $component = $__componentOriginald9f7689281c68d63654bea3fa4f01cc5; ?>
<?php unset($__componentOriginald9f7689281c68d63654bea3fa4f01cc5); ?>
<?php endif; ?>
                                    </span>
                                    <h5 class="mb-0">
                                        <?php echo e(__('candidate_cv_preview_limit')); ?> :
                                    </h5>
                                </div>
                                <h5 class="mb-0">
                                    <?php echo e($plan->candidate_cv_view_limitation == 'limited' ? $plan->candidate_cv_view_limit : __('unlimited')); ?>

                                </h5>
                            </div>
                            <div class="mb-2 align-items-center d-flex <?php echo e($plan->frontend_show ? 'active' : ''); ?>">
                                <span class="icon mr-2">
                                    <?php if (isset($component)) { $__componentOriginald9f7689281c68d63654bea3fa4f01cc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9f7689281c68d63654bea3fa4f01cc5 = $attributes; } ?>
<?php $component = App\View\Components\CheckIcon::resolve(['width' => '22','height' => '22'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CheckIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9f7689281c68d63654bea3fa4f01cc5)): ?>
<?php $attributes = $__attributesOriginald9f7689281c68d63654bea3fa4f01cc5; ?>
<?php unset($__attributesOriginald9f7689281c68d63654bea3fa4f01cc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9f7689281c68d63654bea3fa4f01cc5)): ?>
<?php $component = $__componentOriginald9f7689281c68d63654bea3fa4f01cc5; ?>
<?php unset($__componentOriginald9f7689281c68d63654bea3fa4f01cc5); ?>
<?php endif; ?>
                                </span>
                                <h5 class="mb-0">
                                    <?php if($plan->frontend_show): ?>
                                        <?php echo e(__('show_frontend')); ?>

                                    <?php else: ?>
                                        <del><?php echo e(__('show_frontend')); ?></del>
                                    <?php endif; ?>
                                </h5>
                            </div>
                            <div class="mb-2 d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <span class="icon mr-2">
                                        <?php if (isset($component)) { $__componentOriginald9f7689281c68d63654bea3fa4f01cc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9f7689281c68d63654bea3fa4f01cc5 = $attributes; } ?>
<?php $component = App\View\Components\CheckIcon::resolve(['width' => '22','height' => '22'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CheckIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9f7689281c68d63654bea3fa4f01cc5)): ?>
<?php $attributes = $__attributesOriginald9f7689281c68d63654bea3fa4f01cc5; ?>
<?php unset($__attributesOriginald9f7689281c68d63654bea3fa4f01cc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9f7689281c68d63654bea3fa4f01cc5)): ?>
<?php $component = $__componentOriginald9f7689281c68d63654bea3fa4f01cc5; ?>
<?php unset($__componentOriginald9f7689281c68d63654bea3fa4f01cc5); ?>
<?php endif; ?>
                                    </span>
                                    <h5 class="mb-0">
                                        <?php echo e(__('ability_to_profile_verify')); ?> :
                                    </h5>
                                </div>

                                <?php if($plan->profile_verify): ?>
                                    <span class="rounded-full text-white ml-4">

                                        <svg style="margin-right: -10px" width="34" height="34"
                                            xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                <?php else: ?>
                                    <span class="rounded-full text-white ml-4">

                                        <svg style="margin-right: -10px" width="34" height="34"
                                            xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                <?php endif; ?>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class=" d-flex justify-content-between">
                                <?php if(userCan('plan.update') || userCan('plan.delete')): ?>
                                    <?php if(userCan('plan.update')): ?>
                                        <a href="<?php echo e(route('module.plan.edit', $plan->id)); ?>" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                            <?php echo e(__('edit')); ?>

                                        </a>
                                    <?php endif; ?>
                                    <?php if($plan->id !== $setting->default_plan): ?>
                                        <?php if(userCan('plan.delete')): ?>
                                            <form action="<?php echo e(route('module.plan.delete', $plan->id)); ?>" class=""
                                                method="POST"
                                                onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>')">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" class="btn btn-danger w-100-p">
                                                    <i class="fas fa-trash"></i>
                                                    <?php echo e(__('delete')); ?>

                                                </button>
                                            </form>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-md-12">
                    <div class="card text-center">
                        <div class="card-body">
                            <?php if (isset($component)) { $__componentOriginal29785112a59eec7800237cc87bc86e3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29785112a59eec7800237cc87bc86e3e = $attributes; } ?>
<?php $component = App\View\Components\NotFound::resolve(['message' => ''.e(__('no_data_found')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\NotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $attributes = $__attributesOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__attributesOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $component = $__componentOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__componentOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
                            <p class="plan-p"><?php echo e(__('there_is_no_plan_found_in_this_page')); ?>.</p>
                            <?php if(userCan('plan.create')): ?>
                                <a href="<?php echo e(route('module.plan.create')); ?>" class="plan-btn">
                                    <?php echo e(__('add_your_first_plan')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>
        .icon {
            height: 25px;
            width: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #007bff;
            border-radius: 50%;
            color: white;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function MonthlyPrice(plan) {

            if ($('#customSwitch' + plan.id).is(":checked")) {
                $('#price' + plan.id).html("$" + plan.monthly_price);
                $('#monthoryear' + plan.id).html("<?php echo e(__('/monthly')); ?>");
            } else {
                $('#price' + plan.id).html("$" + plan.yearly_price);
                $('#monthoryear' + plan.id).html("<?php echo e(__('/yearly')); ?>");
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/Modules/Plan/Resources/views/index.blade.php ENDPATH**/ ?>