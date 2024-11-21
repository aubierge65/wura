<?php $__env->startSection('title'); ?>
    <?php echo e(__($company->user->name)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="ll-card">
                    <div class="ll-card-header d-flex flex-wrap justify-content-between align-items-center">
                        <h3 class="card-title line-height-36"><?php echo e($company->user->name); ?>'s
                            <?php echo e(__('details')); ?></h3>
                        <div>
                            <a href="<?php echo e(route('company.edit', $company->id)); ?>">
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
                            <form action="<?php echo e(route('company.destroy', $company->id)); ?>"
                                method="POST" class="d-inline">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');" class="border-0 bg-transparent">
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
                        <div class="ll-flex">
                            <div class="ll-flex-item">
                                <div class="company-details__left">
                                    <div class="company-logo">
                                        <img src="<?php echo e(asset($company->logo_url)); ?>" alt="Company Logo">
                                    </div>
                                    <div>
                                        <h3><?php echo e($company->user->name); ?>

                                            <?php if($company->is_profile_verified): ?>
                                                <svg
                                                    style="width: 24px ; height: 24px ; color: green"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            <?php else: ?>
                                                <svg
                                                    style="width: 24px ; height: 24px ; color: red"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>

                                            <?php endif; ?>
                                        </h3>
                                        <p><?php echo e($company->user->email); ?></p>
                                        <?php if($company->user->socialInfo && $company->user->socialInfo->count() > 0): ?>
                                            <div class="d-flex flex-wrap">
                                                <?php $__currentLoopData = $company->user->socialInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <a class="social-media" target="__blank" href="<?php echo e($contact->url); ?>">
                                                        <?php switch($contact):
                                                            case ($contact->social_media === 'facebook'): ?>
                                                                <?php if (isset($component)) { $__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.facebook-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.facebook-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba)): ?>
<?php $attributes = $__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba; ?>
<?php unset($__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba)): ?>
<?php $component = $__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba; ?>
<?php unset($__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'twitter'): ?>
                                                                <?php if (isset($component)) { $__componentOriginal7a593d607f810c5eb722a8da3c669d39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a593d607f810c5eb722a8da3c669d39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.twitter-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.twitter-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a593d607f810c5eb722a8da3c669d39)): ?>
<?php $attributes = $__attributesOriginal7a593d607f810c5eb722a8da3c669d39; ?>
<?php unset($__attributesOriginal7a593d607f810c5eb722a8da3c669d39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a593d607f810c5eb722a8da3c669d39)): ?>
<?php $component = $__componentOriginal7a593d607f810c5eb722a8da3c669d39; ?>
<?php unset($__componentOriginal7a593d607f810c5eb722a8da3c669d39); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'instagram'): ?>
                                                                <?php if (isset($component)) { $__componentOriginale3ad27cac6d0f8f8f830c9e71813c514 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3ad27cac6d0f8f8f830c9e71813c514 = $attributes; } ?>
<?php $component = App\View\Components\Svg\InstagramIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.instagram-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\InstagramIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3ad27cac6d0f8f8f830c9e71813c514)): ?>
<?php $attributes = $__attributesOriginale3ad27cac6d0f8f8f830c9e71813c514; ?>
<?php unset($__attributesOriginale3ad27cac6d0f8f8f830c9e71813c514); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3ad27cac6d0f8f8f830c9e71813c514)): ?>
<?php $component = $__componentOriginale3ad27cac6d0f8f8f830c9e71813c514; ?>
<?php unset($__componentOriginale3ad27cac6d0f8f8f830c9e71813c514); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'youtube'): ?>
                                                                <?php if (isset($component)) { $__componentOriginal29f59dfb998b7a6ff7a890b6d968d175 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29f59dfb998b7a6ff7a890b6d968d175 = $attributes; } ?>
<?php $component = App\View\Components\Svg\YoutubeIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.youtube-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\YoutubeIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29f59dfb998b7a6ff7a890b6d968d175)): ?>
<?php $attributes = $__attributesOriginal29f59dfb998b7a6ff7a890b6d968d175; ?>
<?php unset($__attributesOriginal29f59dfb998b7a6ff7a890b6d968d175); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29f59dfb998b7a6ff7a890b6d968d175)): ?>
<?php $component = $__componentOriginal29f59dfb998b7a6ff7a890b6d968d175; ?>
<?php unset($__componentOriginal29f59dfb998b7a6ff7a890b6d968d175); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'linkedin'): ?>
                                                                <?php if (isset($component)) { $__componentOriginal49dc423527bab5b91da6a32dce69b923 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49dc423527bab5b91da6a32dce69b923 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.linkedin-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.linkedin-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49dc423527bab5b91da6a32dce69b923)): ?>
<?php $attributes = $__attributesOriginal49dc423527bab5b91da6a32dce69b923; ?>
<?php unset($__attributesOriginal49dc423527bab5b91da6a32dce69b923); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49dc423527bab5b91da6a32dce69b923)): ?>
<?php $component = $__componentOriginal49dc423527bab5b91da6a32dce69b923; ?>
<?php unset($__componentOriginal49dc423527bab5b91da6a32dce69b923); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'pinterest'): ?>
                                                                <?php if (isset($component)) { $__componentOriginal2fe53bef5eff6674c05910535397c0e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2fe53bef5eff6674c05910535397c0e3 = $attributes; } ?>
<?php $component = App\View\Components\Svg\PinterestIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.pinterest-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\PinterestIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2fe53bef5eff6674c05910535397c0e3)): ?>
<?php $attributes = $__attributesOriginal2fe53bef5eff6674c05910535397c0e3; ?>
<?php unset($__attributesOriginal2fe53bef5eff6674c05910535397c0e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2fe53bef5eff6674c05910535397c0e3)): ?>
<?php $component = $__componentOriginal2fe53bef5eff6674c05910535397c0e3; ?>
<?php unset($__componentOriginal2fe53bef5eff6674c05910535397c0e3); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'reddit'): ?>
                                                                <?php if (isset($component)) { $__componentOriginal3f6942336d55820dee67142c74cf3d2f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f6942336d55820dee67142c74cf3d2f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.reddit-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.reddit-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f6942336d55820dee67142c74cf3d2f)): ?>
<?php $attributes = $__attributesOriginal3f6942336d55820dee67142c74cf3d2f; ?>
<?php unset($__attributesOriginal3f6942336d55820dee67142c74cf3d2f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f6942336d55820dee67142c74cf3d2f)): ?>
<?php $component = $__componentOriginal3f6942336d55820dee67142c74cf3d2f; ?>
<?php unset($__componentOriginal3f6942336d55820dee67142c74cf3d2f); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'github'): ?>
                                                                <?php if (isset($component)) { $__componentOriginald0ae092b991bdc90154f4744d589635f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0ae092b991bdc90154f4744d589635f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.github-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.github-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0ae092b991bdc90154f4744d589635f)): ?>
<?php $attributes = $__attributesOriginald0ae092b991bdc90154f4744d589635f; ?>
<?php unset($__attributesOriginald0ae092b991bdc90154f4744d589635f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0ae092b991bdc90154f4744d589635f)): ?>
<?php $component = $__componentOriginald0ae092b991bdc90154f4744d589635f; ?>
<?php unset($__componentOriginald0ae092b991bdc90154f4744d589635f); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'other'): ?>
                                                                <?php if (isset($component)) { $__componentOriginal8608d187aa4814bd3a2c16f76807d123 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8608d187aa4814bd3a2c16f76807d123 = $attributes; } ?>
<?php $component = App\View\Components\Svg\LinkIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.link-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\LinkIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8608d187aa4814bd3a2c16f76807d123)): ?>
<?php $attributes = $__attributesOriginal8608d187aa4814bd3a2c16f76807d123; ?>
<?php unset($__attributesOriginal8608d187aa4814bd3a2c16f76807d123); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8608d187aa4814bd3a2c16f76807d123)): ?>
<?php $component = $__componentOriginal8608d187aa4814bd3a2c16f76807d123; ?>
<?php unset($__componentOriginal8608d187aa4814bd3a2c16f76807d123); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php default: ?>
                                                        <?php endswitch; ?>
                                                    </a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="d-flex align-items-center" style="gap: 16px;">
                                        <div>
                                            <a href="javascript:void(0)" class="active-status">
                                                <label class="switch ">
                                                    <input data-id="<?php echo e($company->user_id); ?>" type="checkbox"
                                                        class="success status-switch"
                                                        <?php echo e($company->user->status == 1 ? 'checked' : ''); ?>>
                                                    <span class="slider round"></span>
                                                </label>
                                                <p class="<?php echo e($company->user->status == 1 ? 'active' : ''); ?>" id="status_<?php echo e($company->user_id); ?>">
                                                    <?php echo e($company->user->status == 1 ? __('activated') : __('deactivated')); ?></p>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="active-status">
                                                <label class="switch ">
                                                    <input data-userid="<?php echo e($company->user_id); ?>" type="checkbox"
                                                        class="success email-verification-switch"
                                                        <?php echo e($company->user->email_verified_at ? 'checked' : ''); ?>>
                                                    <span class="slider round"></span>
                                                </label>
                                                <p class="<?php echo e($company->user->email_verified_at ? 'active' : ''); ?>" id="verification_status_<?php echo e($company->user_id); ?>">
                                                    <?php echo e($company->user->email_verified_at ? __('verified') : __('unverified')); ?>

                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ll-flex-item">
                                <div class="company-details__right">
                                    <div class="one">
                                        <div class="d-flex">
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
                                            <div>
                                                <p><?php echo e(__('establishment_date')); ?></p>
                                                <h4><?php echo e($company->establishment_date ? date('j F, Y', strtotime($company->establishment_date)) : ''); ?></h4>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <?php if (isset($component)) { $__componentOriginal392b654cee94294e0a50cf997be89bdf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal392b654cee94294e0a50cf997be89bdf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.details-users','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.details-users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal392b654cee94294e0a50cf997be89bdf)): ?>
<?php $attributes = $__attributesOriginal392b654cee94294e0a50cf997be89bdf; ?>
<?php unset($__attributesOriginal392b654cee94294e0a50cf997be89bdf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal392b654cee94294e0a50cf997be89bdf)): ?>
<?php $component = $__componentOriginal392b654cee94294e0a50cf997be89bdf; ?>
<?php unset($__componentOriginal392b654cee94294e0a50cf997be89bdf); ?>
<?php endif; ?>
                                            <div>
                                                <p><?php echo e(__('team_size')); ?></p>
                                                <h4><?php echo e($company->team_size ? $company->team_size->name : ''); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="two">
                                        <div class="d-flex">
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
                                            <div>
                                                <p><?php echo e(__('industry_type')); ?></p>
                                                <h4><?php echo e($company->industry ? $company->industry->name : ''); ?></h4>
                                            </div>
                                        </div>
                                        <div class="d-flex">
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
                                                <p><?php echo e(__('country')); ?></p>
                                                <h4><?php echo e($company->country ? $company->country : ''); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="three">
                                        <?php if($company->website): ?>
                                        <div class="d-flex">
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
                                            <a href="<?php echo e($company->website); ?>" target="_blank"><?php echo e($company->website ? $company->website : ''); ?></a>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if($company->user->contactInfo->phone): ?>
                                        <div class="d-flex">
                                            <?php if (isset($component)) { $__componentOriginal61c25d86f71be9b295fd9a0f22d7da42 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal61c25d86f71be9b295fd9a0f22d7da42 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.details-phone-call','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.details-phone-call'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal61c25d86f71be9b295fd9a0f22d7da42)): ?>
<?php $attributes = $__attributesOriginal61c25d86f71be9b295fd9a0f22d7da42; ?>
<?php unset($__attributesOriginal61c25d86f71be9b295fd9a0f22d7da42); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal61c25d86f71be9b295fd9a0f22d7da42)): ?>
<?php $component = $__componentOriginal61c25d86f71be9b295fd9a0f22d7da42; ?>
<?php unset($__componentOriginal61c25d86f71be9b295fd9a0f22d7da42); ?>
<?php endif; ?>
                                            <div>
                                                <p><?php echo e(__('phone')); ?></p>
                                                <a href="tel: <?php echo e($company->user->contactInfo->phone); ?>"><?php echo e($company->user->contactInfo->phone); ?></a>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if($company->user->contactInfo->email ): ?>
                                        <div class="d-flex">
                                            <?php if (isset($component)) { $__componentOriginal8a76109f6ff1b43947c4d41d24c4c9c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a76109f6ff1b43947c4d41d24c4c9c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.details-envelop','data' => ['stroke' => '#0A65CC','fill' => '#0A65CC']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.details-envelop'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['stroke' => '#0A65CC','fill' => '#0A65CC']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a76109f6ff1b43947c4d41d24c4c9c5)): ?>
<?php $attributes = $__attributesOriginal8a76109f6ff1b43947c4d41d24c4c9c5; ?>
<?php unset($__attributesOriginal8a76109f6ff1b43947c4d41d24c4c9c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a76109f6ff1b43947c4d41d24c4c9c5)): ?>
<?php $component = $__componentOriginal8a76109f6ff1b43947c4d41d24c4c9c5; ?>
<?php unset($__componentOriginal8a76109f6ff1b43947c4d41d24c4c9c5); ?>
<?php endif; ?>
                                            <div>
                                                <p><?php echo e(__('contact_email')); ?></p>
                                                <a href="mailto: <?php echo e($company->user->contactInfo->email); ?>"><?php echo e($company->user->contactInfo->email); ?></a>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                            <div class="d-flex">
                                                <svg
                                                    width="24" height="25"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0A65CC" fill="#0A65CC" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                </svg>

                                                <div>
                                                    <p><?php echo e(__('documents')); ?></p>
                                                    <a href="<?php echo e(route('admin.company.documents',$company)); ?>"><?php echo e(__('verification_documents')); ?></a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc-bio-wrapper">
                        <div class="desc-wrap">
                            <div class="text-bold">
                                <?php echo e(__('description')); ?>

                            </div>
                            <p>
                                <?php echo nl2br($company->bio); ?>

                            </p>
                        </div>
                        <div class="bio-wrap">
                            <div class="text-bold">
                                <?php echo e(__('vision')); ?>

                            </div>
                            <p>
                                <?php echo nl2br($company->vision); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="ll-card">
                    <div class="ll-card-header">
                        <h3 class="ll-card-title"><?php echo e(__('location')); ?></h3>
                    </div>
                    <div class="ll-card-body">
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
    <?php if($company->jobs->count() > 0): ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36"><?php echo e(__('company_joblist')); ?></h3>
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
                                            <th><?php echo e(__('status')); ?></th>
                                            <?php if(userCan('job.update') || userCan('job.delete')): ?>
                                                <th><?php echo e(__('action')); ?></th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $company->jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td tabindex="0">
                                                    <a href="<?php echo e(route('job.show', $job->id)); ?>"  class="company">
                                                        <img src="<?php echo e(asset($job->company->logo_url)); ?>" alt="image">
                                                        <div>
                                                            <h2><?php echo e($job->title); ?></h2>
                                                            <p>
                                                                <span><?php echo e($job->title); ?></span>
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
                                                            <h3><?php echo e($job->category->name); ?></h3>
                                                            <p><?php echo e($job->role->name); ?></p>
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
                                                            <h3><?php echo e(getFormattedNumber($job->min_salary)); ?> - <?php echo e(getFormattedNumber($job->max_salary)); ?> <?php echo e(currentCurrencyCode()); ?></h3>
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
                                                <?php if(userCan('job.update')): ?>
                                                    <td tabindex="0">
                                                        <div class="d-flex">
                                                            <?php if($job->status == 'pending'): ?>
                                                            <form action="<?php echo e(route('admin.job.status.change', $job->id)); ?>" method="POST" id="job_status_pending_form_<?php echo e($job->id); ?>">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        <input onclick="$('#job_status_pending_form_<?php echo e($job->id); ?>').submit()" type="radio" id="status_input_pending_<?php echo e($job->id); ?>" name="status"
                                                                            class="plan_type_selection custom-control-input" value="pending"
                                                                            <?php echo e($job->status == 'pending' ? 'checked' : ''); ?>>
                                                                        <label class="custom-control-label" for="status_input_pending_<?php echo e($job->id); ?>"><?php echo e(__('pending')); ?></label>
                                                                    </div>
                                                                </form>
                                                            <?php endif; ?>
                                                            <form action="<?php echo e(route('admin.job.status.change', $job->id)); ?>" method="POST" id="job_status_publish_form_<?php echo e($job->id); ?>">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('PUT'); ?>
                                                                    <input onclick="$('#job_status_publish_form_<?php echo e($job->id); ?>').submit()" type="radio" id="status_input_publish_<?php echo e($job->id); ?>" name="status"
                                                                        class="plan_type_selection custom-control-input" value="active"
                                                                        <?php echo e($job->status == 'active' ? 'checked' : ''); ?>>
                                                                    <label class="custom-control-label" for="status_input_publish_<?php echo e($job->id); ?>"><?php echo e(__('publish')); ?></label>
                                                                </div>
                                                            </form>
                                                            <?php if($job->status == 'active' || $job->status == 'expired'): ?>
                                                            <form action="<?php echo e(route('admin.job.status.change', $job->id)); ?>" method="POST" id="job_status_unpublish_form_<?php echo e($job->id); ?>">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        <input onclick="$('#job_status_unpublish_form_<?php echo e($job->id); ?>').submit()" type="radio" id="status_input_unpublish_<?php echo e($job->id); ?>" name="status"
                                                                            class="plan_type_selection custom-control-input" value="expired"
                                                                            <?php echo e($job->status == 'expired' ? 'checked' : ''); ?>>
                                                                        <label class="custom-control-label" for="status_input_unpublish_<?php echo e($job->id); ?>"><?php echo e(__('unpublish')); ?></label>
                                                                    </div>
                                                                </form>
                                                            <?php endif; ?>
                                                        </div>
                                                    </td>
                                                <?php endif; ?>
                                                <td>
                                                    <a data-toggle="tooltip" data-placement="top"
                                                        title="<?php echo e(__('details')); ?>"
                                                        href="<?php echo e(route('job.show', $job->id)); ?>"
                                                        class="btn ll-p-0"><?php echo e(__('view_details')); ?> <?php if (isset($component)) { $__componentOriginalda561501dff59ec6eab6d19aa5897b8f = $component; } ?>
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
                                                    <a data-toggle="tooltip" data-placement="top"
                                                        title="<?php echo e(__('clone')); ?>"
                                                        href="<?php echo e(route('admin.job.clone', $job->slug)); ?>"
                                                        class="btn ll-p-0"><?php if (isset($component)) { $__componentOriginal2899dd2f7e7f7ab7072fa90bfb657013 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2899dd2f7e7f7ab7072fa90bfb657013 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-clone','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-clone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2899dd2f7e7f7ab7072fa90bfb657013)): ?>
<?php $attributes = $__attributesOriginal2899dd2f7e7f7ab7072fa90bfb657013; ?>
<?php unset($__attributesOriginal2899dd2f7e7f7ab7072fa90bfb657013); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2899dd2f7e7f7ab7072fa90bfb657013)): ?>
<?php $component = $__componentOriginal2899dd2f7e7f7ab7072fa90bfb657013; ?>
<?php unset($__componentOriginal2899dd2f7e7f7ab7072fa90bfb657013); ?>
<?php endif; ?> <?php echo e(__('clone')); ?>

                                                    </a>

                                                    <a data-toggle="tooltip" data-placement="top"
                                                        title="<?php echo e(__('view_frontend')); ?>"
                                                        href="<?php echo e(route('website.job.details', $job->slug)); ?>"
                                                        class="btn ll-p-0"><?php if (isset($component)) { $__componentOriginal419a3d7f2a17924d4961438567f97dff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal419a3d7f2a17924d4961438567f97dff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-link','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal419a3d7f2a17924d4961438567f97dff)): ?>
<?php $attributes = $__attributesOriginal419a3d7f2a17924d4961438567f97dff; ?>
<?php unset($__attributesOriginal419a3d7f2a17924d4961438567f97dff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal419a3d7f2a17924d4961438567f97dff)): ?>
<?php $component = $__componentOriginal419a3d7f2a17924d4961438567f97dff; ?>
<?php unset($__componentOriginal419a3d7f2a17924d4961438567f97dff); ?>
<?php endif; ?>
                                                    </a>
                                                    <?php if(userCan('job.update')): ?>
                                                        <a data-toggle="tooltip" data-placement="top"
                                                            title="<?php echo e(__('edit')); ?>"
                                                            href="<?php echo e(route('job.edit', $job->id)); ?>"
                                                            class="btn ll-p-0"><?php if (isset($component)) { $__componentOriginalfbdacdae48d0cffd33965780e1a3c506 = $component; } ?>
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
                                                    <?php endif; ?>
                                                    <?php if(userCan('job.delete')): ?>
                                                        <form action="<?php echo e(route('job.destroy', $job->id)); ?>"
                                                            method="POST" class="d-inline">
                                                            <?php echo method_field('DELETE'); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <button data-toggle="tooltip" data-placement="top"
                                                                title="<?php echo e(__('delete')); ?>"
                                                                onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                                class="btn ll-p-0"><?php if (isset($component)) { $__componentOriginal6c69d63d648b4fe134f027cfc6213af7 = $component; } ?>
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
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
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
            validate();
            $('#title').keyup(validate);
        });

        function validate() {
            if (
                $('#title').val().length > 0) {
                $('#crossB').removeClass('d-none');
            } else {
                $('#crossB').addClass('d-none');
            }
        }

        function RemoveFilter(id) {
            $('#' + id).val('');
            $('#formSubmit').submit();
        }
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
        var oldlat = <?php echo $company->lat ? $company->lat : $setting->default_lat; ?>;
        var oldlng = <?php echo $company->long ? $company->long : $setting->default_long; ?>;

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

            var oldlat = <?php echo $company->lat ? $company->lat : $setting->default_lat; ?>;
            var oldlng = <?php echo $company->long ? $company->long : $setting->default_long; ?>;

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

            if (status == 1) {
                $(`#status_${id}`).text("<?php echo e(__('activated')); ?>")
            }else{
                $(`#status_${id}`).text("<?php echo e(__('deactivated')); ?>")
            }
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

            if (status == 1) {
                $(`#verification_status_${id}`).text("<?php echo e(__('verified')); ?>")
            }else{
                $(`#verification_status_${id}`).text("<?php echo e(__('unverified')); ?>")
            }
        });
    </script>
    <!-- ================ google map ============== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/backend/company/show.blade.php ENDPATH**/ ?>