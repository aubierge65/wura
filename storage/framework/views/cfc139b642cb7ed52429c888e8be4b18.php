

<?php $__env->startSection('title'); ?>
    <?php echo e(__('plan')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="row">
                
                <?php if (isset($component)) { $__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c = $attributes; } ?>
<?php $component = App\View\Components\Website\Company\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\Company\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c)): ?>
<?php $attributes = $__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c; ?>
<?php unset($__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c)): ?>
<?php $component = $__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c; ?>
<?php unset($__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c); ?>
<?php endif; ?>
                <div class="col-lg-9">
                    <div class="dashboard-right tw-ps-0 lg:tw-ps-5">
                        <div class="row tw-my-5">
                            <div class="col-lg-5">
                                <div class="plan-card">
                                    <h2 class="title"><?php echo e($userplan->plan->label); ?></h2>
                                    <p class="short-desc">
                                        <?php if(isset($userplan->plan->descriptions) && isset($userplan->plan->descriptions[0])): ?>
                                            <?php echo $userplan->plan->descriptions[0]->description; ?>

                                        <?php else: ?>
                                            <span class="text-danger"><?php echo __('no_description_has_been_added_to_this_language', ['current' => $current_language_code]); ?></span>
                                        <?php endif; ?>
                                    </p>
                                    <div class="">
                                        <a href="<?php echo e(route('website.plan')); ?>" class="btn btn-primary">
                                            <?php echo e(__('upgrade_plan')); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="benefits-card">
                                    <h4 class="title"><?php echo e(__('create_plan_benefits')); ?></h4>
                                    <ul class="benefit-list">
                                        <li>
                                            <?php if (isset($component)) { $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.double-check-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.double-check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $attributes = $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $component = $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
                                            <span><?php echo e($userplan->plan->job_limit); ?> <?php echo e(__('active_jobs')); ?></span>
                                        </li>
                                        <li>
                                            <?php if (isset($component)) { $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.double-check-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.double-check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $attributes = $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $component = $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
                                            <span><?php echo e($userplan->plan->highlight_job_limit); ?>

                                                <?php echo e(__('highlight_jobs')); ?></span>
                                        </li>
                                        <li>
                                            <?php if (isset($component)) { $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.double-check-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.double-check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $attributes = $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $component = $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
                                            <span><?php echo e($userplan->plan->featured_job_limit); ?>

                                                <?php echo e(__('featured_jobs')); ?></span>
                                        </li>
                                        <li>
                                            <?php if (isset($component)) { $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.double-check-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.double-check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $attributes = $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $component = $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
                                            <span><?php echo e($userplan->plan->candidate_cv_view_limitation == 'limited' ? $userplan->plan->candidate_cv_view_limit : __('unlimited')); ?>

                                                <?php echo e(__('candidate_profile_view')); ?></span>
                                        </li>
                                    </ul>
                                    <div class="remaining">
                                        <h4 class="title"><?php echo e(__('remaining')); ?></h4>
                                        <ul class="remaining-list">
                                            <li>
                                                <?php if(!$userplan->job_limit): ?>
                                                    <?php if (isset($component)) { $__componentOriginal51b1d420a88ab34586e8b1edbc26b115 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal51b1d420a88ab34586e8b1edbc26b115 = $attributes; } ?>
<?php $component = App\View\Components\Svg\CrossRound2Icon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.cross-round2-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\CrossRound2Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal51b1d420a88ab34586e8b1edbc26b115)): ?>
<?php $attributes = $__attributesOriginal51b1d420a88ab34586e8b1edbc26b115; ?>
<?php unset($__attributesOriginal51b1d420a88ab34586e8b1edbc26b115); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal51b1d420a88ab34586e8b1edbc26b115)): ?>
<?php $component = $__componentOriginal51b1d420a88ab34586e8b1edbc26b115; ?>
<?php unset($__componentOriginal51b1d420a88ab34586e8b1edbc26b115); ?>
<?php endif; ?>
                                                <?php else: ?>
                                                    <?php if (isset($component)) { $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.double-check-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.double-check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $attributes = $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $component = $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
                                                <?php endif; ?>
                                                <span><?php echo e($userplan->job_limit); ?> <?php echo e(__('active_jobs')); ?></span>
                                            </li>
                                            <li>
                                                <?php if(!$userplan->highlight_job_limit): ?>
                                                    <?php if (isset($component)) { $__componentOriginal51b1d420a88ab34586e8b1edbc26b115 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal51b1d420a88ab34586e8b1edbc26b115 = $attributes; } ?>
<?php $component = App\View\Components\Svg\CrossRound2Icon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.cross-round2-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\CrossRound2Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal51b1d420a88ab34586e8b1edbc26b115)): ?>
<?php $attributes = $__attributesOriginal51b1d420a88ab34586e8b1edbc26b115; ?>
<?php unset($__attributesOriginal51b1d420a88ab34586e8b1edbc26b115); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal51b1d420a88ab34586e8b1edbc26b115)): ?>
<?php $component = $__componentOriginal51b1d420a88ab34586e8b1edbc26b115; ?>
<?php unset($__componentOriginal51b1d420a88ab34586e8b1edbc26b115); ?>
<?php endif; ?>
                                                <?php else: ?>
                                                    <?php if (isset($component)) { $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.double-check-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.double-check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $attributes = $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $component = $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
                                                <?php endif; ?>
                                                <span><?php echo e($userplan->highlight_job_limit); ?>

                                                    <?php echo e(__('highlight_jobs')); ?></span>
                                            </li>
                                            <li>
                                                <?php if(!$userplan->featured_job_limit): ?>
                                                    <?php if (isset($component)) { $__componentOriginal51b1d420a88ab34586e8b1edbc26b115 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal51b1d420a88ab34586e8b1edbc26b115 = $attributes; } ?>
<?php $component = App\View\Components\Svg\CrossRound2Icon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.cross-round2-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\CrossRound2Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal51b1d420a88ab34586e8b1edbc26b115)): ?>
<?php $attributes = $__attributesOriginal51b1d420a88ab34586e8b1edbc26b115; ?>
<?php unset($__attributesOriginal51b1d420a88ab34586e8b1edbc26b115); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal51b1d420a88ab34586e8b1edbc26b115)): ?>
<?php $component = $__componentOriginal51b1d420a88ab34586e8b1edbc26b115; ?>
<?php unset($__componentOriginal51b1d420a88ab34586e8b1edbc26b115); ?>
<?php endif; ?>
                                                <?php else: ?>
                                                    <?php if (isset($component)) { $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.double-check-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.double-check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $attributes = $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $component = $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
                                                <?php endif; ?>
                                                <span><?php echo e($userplan->featured_job_limit); ?>

                                                    <?php echo e(__('featured_jobs')); ?></span>
                                            </li>
                                            <li>
                                                <?php if($userplan->candidate_cv_view_limitation == 'unlimited'): ?>
                                                    <?php if (isset($component)) { $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.double-check-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.double-check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $attributes = $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $component = $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
                                                    <span>
                                                        <?php echo e(__('unlimited')); ?> <?php echo e(__('candidate_profile_view')); ?>

                                                    </span>
                                                <?php else: ?>
                                                    <?php if(!$userplan->candidate_cv_view_limit): ?>
                                                        <?php if (isset($component)) { $__componentOriginal51b1d420a88ab34586e8b1edbc26b115 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal51b1d420a88ab34586e8b1edbc26b115 = $attributes; } ?>
<?php $component = App\View\Components\Svg\CrossRound2Icon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.cross-round2-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\CrossRound2Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal51b1d420a88ab34586e8b1edbc26b115)): ?>
<?php $attributes = $__attributesOriginal51b1d420a88ab34586e8b1edbc26b115; ?>
<?php unset($__attributesOriginal51b1d420a88ab34586e8b1edbc26b115); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal51b1d420a88ab34586e8b1edbc26b115)): ?>
<?php $component = $__componentOriginal51b1d420a88ab34586e8b1edbc26b115; ?>
<?php unset($__componentOriginal51b1d420a88ab34586e8b1edbc26b115); ?>
<?php endif; ?>
                                                    <?php else: ?>
                                                        <?php if (isset($component)) { $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.double-check-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.double-check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $attributes = $__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__attributesOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f)): ?>
<?php $component = $__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f; ?>
<?php unset($__componentOriginalc9cf1a5b827dcec6afef6e8acfc3c98f); ?>
<?php endif; ?>
                                                    <?php endif; ?>
                                                    <span>
                                                        <?php echo e($userplan->candidate_cv_view_limit); ?>

                                                        <?php echo e(__('candidate_profile_view')); ?>

                                                    </span>
                                                <?php endif; ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoices-table ">
                            <h2 class="title"><?php echo e(__('latest_invoice')); ?></h2>
                            <div class="table-wrapper pb-1">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><?php echo e(__('date')); ?></th>
                                            <th><?php echo e(__('plan')); ?></th>
                                            <th><?php echo e(__('amount')); ?></th>
                                            <th><?php echo e(__('payment_provider')); ?></th>
                                            <th><?php echo e(__('payment_status')); ?></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($transactions->count() > 0): ?>
                                            <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td>#<?php echo e($transaction->order_id); ?></td>
                                                    <td><?php echo e(formatTime($transaction->created_at, 'M, d Y')); ?></td>
                                                    <td>
                                                        <?php if($transaction->payment_type == 'per_job_based'): ?>
                                                            <span
                                                                class="badge bg-secondary"><?php echo e(ucfirst(Str::replace('_', ' ', $transaction->payment_type))); ?></span>
                                                        <?php else: ?>
                                                            <span
                                                                class="badge bg-primary"><?php echo e($transaction->plan->label); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo e(currencyConversion($transaction->usd_amount, 'USD')); ?>

                                                        <?php echo e(currentCurrencyCode()); ?>

                                                    </td>
                                                    <td>
                                                        <?php if($transaction->payment_provider == 'offline'): ?>
                                                            <?php echo e(__('offline')); ?>

                                                            <?php if(isset($transaction->manualPayment) && isset($transaction->manualPayment->name)): ?>
                                                                (<b><?php echo e($transaction->manualPayment->name); ?></b>)
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <?php echo e(ucfirst($transaction->payment_provider)); ?>

                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php if($transaction->payment_status == 'paid'): ?>
                                                            <span
                                                                class="badge badge-pill bg-success"><?php echo e(__('paid')); ?></span>
                                                        <?php else: ?>
                                                            <span
                                                                class="badge badge-pill bg-warning"><?php echo e(__('unpaid')); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <div class="tw-inline-flex tw-gap-2 tw-items-center">
                                                            <form
                                                            action="<?php echo e(route('company.transaction.invoice.download', $transaction->id)); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <button type="submit" class="btn tw-p-0">
                                                                <?php if (isset($component)) { $__componentOriginaldf04ad1af7e6964abc2a0f71c19e4e90 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf04ad1af7e6964abc2a0f71c19e4e90 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.download-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.download-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf04ad1af7e6964abc2a0f71c19e4e90)): ?>
<?php $attributes = $__attributesOriginaldf04ad1af7e6964abc2a0f71c19e4e90; ?>
<?php unset($__attributesOriginaldf04ad1af7e6964abc2a0f71c19e4e90); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf04ad1af7e6964abc2a0f71c19e4e90)): ?>
<?php $component = $__componentOriginaldf04ad1af7e6964abc2a0f71c19e4e90; ?>
<?php unset($__componentOriginaldf04ad1af7e6964abc2a0f71c19e4e90); ?>
<?php endif; ?>
                                                            </button>
                                                        </form>
                                                        <a
                                                            href="<?php echo e(route('company.transaction.invoice.view', $transaction->order_id)); ?>">
                                                            <?php echo e(__('view_invoice')); ?>

                                                        </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <?php if (isset($component)) { $__componentOriginaldfe0928edd886f3f2e52f8fdd142276f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldfe0928edd886f3f2e52f8fdd142276f = $attributes; } ?>
<?php $component = App\View\Components\Website\NotFound::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\NotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldfe0928edd886f3f2e52f8fdd142276f)): ?>
<?php $attributes = $__attributesOriginaldfe0928edd886f3f2e52f8fdd142276f; ?>
<?php unset($__attributesOriginaldfe0928edd886f3f2e52f8fdd142276f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldfe0928edd886f3f2e52f8fdd142276f)): ?>
<?php $component = $__componentOriginaldfe0928edd886f3f2e52f8fdd142276f; ?>
<?php unset($__componentOriginaldfe0928edd886f3f2e52f8fdd142276f); ?>
<?php endif; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                                <?php if(request('perpage') != 'all' && $transactions->total() > $transactions->count()): ?>
                                    <div class="rt-pt-30 mb-3">
                                        <nav>
                                            <?php echo e($transactions->onEachSide(0)->links('vendor.pagination.frontend')); ?>

                                        </nav>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/frontend/pages/company/plan.blade.php ENDPATH**/ ?>