<?php $__env->startSection('title'); ?>
    <?php echo e($user->name); ?> <?php echo e(__('details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="ll-card">
                <div class="ll-card-header d-flex justify-content-between align-items-center">
                    <h3 class="ll-card-title line-height-36"><?php echo e($candidate->user->name); ?>'s
                        <?php echo e(__('details')); ?></h3>
                    <div>
                        <a href="<?php echo e(route('candidate.edit', $candidate->id)); ?>">
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
                        <form action="<?php echo e(route('candidate.destroy', $candidate->id)); ?>" method="POST" class="d-inline">
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
                                    <img src="<?php echo e($candidate->photo); ?>" alt="candidate_profile">
                                </div>
                                <div>
                                    <h3><?php echo e($candidate->user->name); ?></h3>
                                    <p><?php echo e($candidate->user->email); ?></p>
                                    <?php if($user->socialInfo && $candidate->user->socialInfo->count() > 0): ?>
                                        <div class="d-flex">
                                            <?php $__currentLoopData = $user->socialInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                    <input data-id="<?php echo e($user->id); ?>" type="checkbox"
                                                        class="success status-switch"
                                                        <?php echo e($user->status == 1 ? 'checked' : ''); ?>>
                                                    <span class="slider round"></span>
                                                </label>
                                                <p class="<?php echo e($user->status == 1 ? 'active' : ''); ?>"
                                                    id="status_<?php echo e($candidate->user_id); ?>">
                                                    <?php echo e($user->status == 1 ? __('activated') : __('deactivated')); ?></p>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="active-status">
                                                <label class="switch ">
                                                    <input data-userid="<?php echo e($user->id); ?>" type="checkbox"
                                                        class="success email-verification-switch"
                                                        <?php echo e($user->email_verified_at ? 'checked' : ''); ?>>
                                                    <span class="slider round"></span>
                                                </label>
                                                <p class="<?php echo e($user->email_verified_at ? 'active' : ''); ?>"
                                                    id="verification_status_<?php echo e($candidate->user_id); ?>">
                                                    <?php echo e($user->email_verified_at ? __('verified') : __('unverified')); ?>

                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ll-flex-item">
                            <div class="candidate-details__right">
                                <div class="one">
                                    <div class="mb-4 d-flex">
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
                                        <div>
                                            <p><?php echo e(__('profession')); ?></p>
                                            <h4><?php echo e($candidate->profession ? $candidate->profession->name : '-'); ?></h4>
                                        </div>
                                    </div>
                                    <div class="d-flex">
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
                                        <div>
                                            <p><?php echo e(__('experience')); ?></p>
                                            <h4><?php echo e($candidate->experience ? $candidate->experience->name : ''); ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="two">
                                    <div class="mb-4 d-flex">
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
                                        <div>
                                            <p><?php echo e(__('marital_status')); ?></p>
                                            <h4><?php echo e(__($candidate->marital_status)); ?></h4>
                                        </div>
                                    </div>
                                    <div class="d-flex">
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
                                        <div>
                                            <p><?php echo e(__('education')); ?></p>
                                            <h4><?php echo e($candidate->education ? $candidate->education->name : ''); ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="three">
                                    <div class="mb-4 d-flex">
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
                                            <p><?php echo e(__('gender')); ?></p>
                                            <h4><?php echo e(ucfirst($candidate->gender)); ?></h4>
                                        </div>
                                    </div>
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
                                            <p><?php echo e(__('birth_date')); ?></p>
                                            <h4><?php echo e(date('D, d M Y', strtotime($candidate->birth_date))); ?></h4>
                                        </div>
                                    </div>
                                </div>
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
                                            <a href="<?php echo e($candidate->website); ?>"><?php echo e($candidate->website); ?></a>
                                        </div>
                                    </div>
                                    <?php if($user->contactInfo && $user->contactInfo->phone): ?>
                                        <div class="mb-4 d-flex">
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
                                                <a
                                                    href="tel: <?php echo e($user->contactInfo->phone); ?>"><?php echo e($user->contactInfo->phone); ?></a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($user->contactInfo && $user->contactInfo->email): ?>
                                        <div class="d-flex">
                                            <?php if (isset($component)) { $__componentOriginal8a76109f6ff1b43947c4d41d24c4c9c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a76109f6ff1b43947c4d41d24c4c9c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.details-envelop','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.details-envelop'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                                                <a
                                                    href="mailto: <?php echo e($user->contactInfo->email); ?>"><?php echo e($user->contactInfo->email); ?></a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
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
                            <?php echo nl2br($candidate->bio); ?>

                        </p>
                    </div>
                    <div class="skills-wrap">
                        <div class="ll-mb-6">
                            <h4 class="text-bold">
                                <?php echo e(__('skills')); ?>

                            </h4>
                            <p>
                                <?php $__currentLoopData = $candidate->skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="skill-badge"><?php echo e($skill->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                        </div>
                        <div class="ll-mb-6">
                            <h4 class="text-bold">
                                <?php echo e(__('languages')); ?>

                            </h4>
                            <p>
                                <?php $__currentLoopData = $candidate->languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="language-badge"><?php echo e($language->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                        </div>
                        <div>
                            <h4 class="text-bold"> <?php echo e(__('location')); ?> </h4>
                            <p><?php echo e($candidate->exact_location ? $candidate->exact_location: $candidate->full_address); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (isset($component)) { $__componentOriginald8239153a36e835f82b71926f0f6d807 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8239153a36e835f82b71926f0f6d807 = $attributes; } ?>
<?php $component = App\View\Components\Admin\Candidate\CardComponent::resolve(['title' => ''.e(__('applied_jobs')).'','jobs' => $appliedJobs,'link' => 'website.job.apply'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.candidate.card-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Candidate\CardComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8239153a36e835f82b71926f0f6d807)): ?>
<?php $attributes = $__attributesOriginald8239153a36e835f82b71926f0f6d807; ?>
<?php unset($__attributesOriginald8239153a36e835f82b71926f0f6d807); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8239153a36e835f82b71926f0f6d807)): ?>
<?php $component = $__componentOriginald8239153a36e835f82b71926f0f6d807; ?>
<?php unset($__componentOriginald8239153a36e835f82b71926f0f6d807); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginald8239153a36e835f82b71926f0f6d807 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8239153a36e835f82b71926f0f6d807 = $attributes; } ?>
<?php $component = App\View\Components\Admin\Candidate\CardComponent::resolve(['title' => ''.e(__('bookmark_jobs')).'','jobs' => $bookmarkJobs,'link' => 'website.job.bookmark'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.candidate.card-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Candidate\CardComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8239153a36e835f82b71926f0f6d807)): ?>
<?php $attributes = $__attributesOriginald8239153a36e835f82b71926f0f6d807; ?>
<?php unset($__attributesOriginald8239153a36e835f82b71926f0f6d807); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8239153a36e835f82b71926f0f6d807)): ?>
<?php $component = $__componentOriginald8239153a36e835f82b71926f0f6d807; ?>
<?php unset($__componentOriginald8239153a36e835f82b71926f0f6d807); ?>
<?php endif; ?>
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
    
    <script src="<?php echo e(asset('frontend')); ?>/assets/js/axios.min.js"></script>
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
        var oldlat = <?php echo $candidate->lat ? $candidate->lat : $setting->default_lat; ?>;
        var oldlng = <?php echo $candidate->long ? $candidate->long : $setting->default_long; ?>;

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

            var oldlat = <?php echo $candidate->lat ? $candidate->lat : $setting->default_lat; ?>;
            var oldlng = <?php echo $candidate->long ? $candidate->long : $setting->default_long; ?>;

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/backend/candidate/show.blade.php ENDPATH**/ ?>