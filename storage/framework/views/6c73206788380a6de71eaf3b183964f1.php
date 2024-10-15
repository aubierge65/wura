<?php $__env->startSection('content'); ?>
    <header class="n-header account-setup-header tw-bg-primary-100">
        <div class="main-header">
            <div class="navbar">
                <div class="container">
                    <div class="row w-100 tw-py-4">
                        <div class="col-sm-12 col-md-6 tw-text-center">
                            <a href="<?php echo e(route('website.home')); ?>"
                                class="brand-logo tw-flex md:tw-justify-start tw-justify-center tw-items-center">
                                <img src="<?php echo e($setting->light_logo_url); ?>" alt="jobpilot_logo">
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 tw-flex tw-items-center tw-justify-center md:tw-justify-end">
                            <div class="progress-wrap !tw-mt-4 md:!tw-mt-0">
                                <div class="progress-title d-flex align-items-center justify-content-between rt-mb-12">
                                    <p class="text-gray-900 f-size-14 m-0">
                                        <?php echo e(__('setup_progress')); ?>

                                    </p>
                                    <h4 class="text-primary-500 f-size-14 ft-wt-5 lh-1 m-0">
                                        <span class="test">
                                            <?php if(!auth()->user()->company->profile_completion): ?>
                                                <?php if(request()->has('profile')): ?>
                                                    25%
                                                <?php elseif(request()->has('social')): ?>
                                                    50%
                                                <?php elseif(request()->has('contact')): ?>
                                                    75%
                                                <?php elseif(request()->has('complete')): ?>
                                                    100%
                                                <?php else: ?>
                                                    0%
                                                <?php endif; ?>
                                            <?php else: ?>
                                                100%
                                            <?php endif; ?>
                                        </span> <?php echo e(__('completed')); ?>

                                    </h4>
                                </div>
                                <?php
                                    $progress = request()->has('profile') ? '25%' : (request()->has('social') ? '50%' : (request()->has('contact') ? '75%' : (request()->has('complete') ? '100%' : '0%')));
                                    if (auth()->user()->company->profile_completion) {
                                        $progress = '100%';
                                    }
                                ?>

                                <div class="progress">
                                    <div class="progress-bar" style="width: <?php echo e($progress); ?> !important;"></div>
                                </div>
                            </div>
                            <div class="tw-ms-[22px]">
                                <a href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#1a0a0a"
                                        viewBox="0 0 256 256">
                                        <rect width="256" height="256" fill="none"></rect>
                                        <polyline points="174 86 216 128 174 170" fill="none" stroke="#1a0a0a"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                        <line x1="104" y1="128" x2="216" y2="128" fill="none"
                                            stroke="#1a0a0a" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="16"></line>
                                        <path d="M104,216H48a8,8,0,0,1-8-8V48a8,8,0,0,1,8-8h56" fill="none"
                                            stroke="#1a0a0a" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="16"></path>
                                    </svg>
                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="dashboard-wrapper account-setup tw-flex tw-flex-col tw-min-h-screen">
        <div class="container tw-flex-grow">
            <div class="account-progress-wrap cadidate-dashboard-tabs company ll-progress pt-2">
                <div id="msform">
                    <?php if(!auth()->user()->company->profile_completion): ?>
                        <?php if(!request()->hasAny('profile', 'social', 'contact', 'complete')): ?>
                            <?php if (isset($component)) { $__componentOriginalcc8f9037b5b659ee389cf60d7b18562c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.account-progress.steps','data' => ['basic' => 'active','profile' => 'inactive','socialMedia' => 'inactive','contact' => 'inactive']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.account-progress.steps'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['basic' => 'active','profile' => 'inactive','social_media' => 'inactive','contact' => 'inactive']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c)): ?>
<?php $attributes = $__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c; ?>
<?php unset($__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc8f9037b5b659ee389cf60d7b18562c)): ?>
<?php $component = $__componentOriginalcc8f9037b5b659ee389cf60d7b18562c; ?>
<?php unset($__componentOriginalcc8f9037b5b659ee389cf60d7b18562c); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginala0dabca71cd651b7cf3b0e478d0753a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0dabca71cd651b7cf3b0e478d0753a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.account-progress.personal','data' => ['user' => $user]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.account-progress.personal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0dabca71cd651b7cf3b0e478d0753a8)): ?>
<?php $attributes = $__attributesOriginala0dabca71cd651b7cf3b0e478d0753a8; ?>
<?php unset($__attributesOriginala0dabca71cd651b7cf3b0e478d0753a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0dabca71cd651b7cf3b0e478d0753a8)): ?>
<?php $component = $__componentOriginala0dabca71cd651b7cf3b0e478d0753a8; ?>
<?php unset($__componentOriginala0dabca71cd651b7cf3b0e478d0753a8); ?>
<?php endif; ?>
                        <?php endif; ?>
                        <?php if(request()->has('profile')): ?>
                            <?php if (isset($component)) { $__componentOriginalcc8f9037b5b659ee389cf60d7b18562c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.account-progress.steps','data' => ['basic' => 'complete','profile' => 'active','socialMedia' => 'inactive','contact' => 'inactive']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.account-progress.steps'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['basic' => 'complete','profile' => 'active','social_media' => 'inactive','contact' => 'inactive']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c)): ?>
<?php $attributes = $__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c; ?>
<?php unset($__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc8f9037b5b659ee389cf60d7b18562c)): ?>
<?php $component = $__componentOriginalcc8f9037b5b659ee389cf60d7b18562c; ?>
<?php unset($__componentOriginalcc8f9037b5b659ee389cf60d7b18562c); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal0da8e705e5861328a28e2cd957263545 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0da8e705e5861328a28e2cd957263545 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.account-progress.profile','data' => ['user' => $user,'countries' => $countries,'organizationTypes' => $organization_types,'industryTypes' => $industry_types,'teamSizes' => $team_sizes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.account-progress.profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'countries' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($countries),'organization-types' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($organization_types),'industry-types' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($industry_types),'team-sizes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($team_sizes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0da8e705e5861328a28e2cd957263545)): ?>
<?php $attributes = $__attributesOriginal0da8e705e5861328a28e2cd957263545; ?>
<?php unset($__attributesOriginal0da8e705e5861328a28e2cd957263545); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0da8e705e5861328a28e2cd957263545)): ?>
<?php $component = $__componentOriginal0da8e705e5861328a28e2cd957263545; ?>
<?php unset($__componentOriginal0da8e705e5861328a28e2cd957263545); ?>
<?php endif; ?>
                        <?php endif; ?>
                        <?php if(request()->has('social')): ?>
                            <?php if (isset($component)) { $__componentOriginalcc8f9037b5b659ee389cf60d7b18562c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.account-progress.steps','data' => ['basic' => 'complete','profile' => 'complete','socialMedia' => 'active','contact' => 'inactive']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.account-progress.steps'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['basic' => 'complete','profile' => 'complete','social_media' => 'active','contact' => 'inactive']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c)): ?>
<?php $attributes = $__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c; ?>
<?php unset($__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc8f9037b5b659ee389cf60d7b18562c)): ?>
<?php $component = $__componentOriginalcc8f9037b5b659ee389cf60d7b18562c; ?>
<?php unset($__componentOriginalcc8f9037b5b659ee389cf60d7b18562c); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalaa015f338bbe8a24b698349319539a16 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa015f338bbe8a24b698349319539a16 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.account-progress.social','data' => ['socials' => $socials]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.account-progress.social'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['socials' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($socials)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa015f338bbe8a24b698349319539a16)): ?>
<?php $attributes = $__attributesOriginalaa015f338bbe8a24b698349319539a16; ?>
<?php unset($__attributesOriginalaa015f338bbe8a24b698349319539a16); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa015f338bbe8a24b698349319539a16)): ?>
<?php $component = $__componentOriginalaa015f338bbe8a24b698349319539a16; ?>
<?php unset($__componentOriginalaa015f338bbe8a24b698349319539a16); ?>
<?php endif; ?>
                        <?php endif; ?>
                        <?php if(request()->has('contact')): ?>
                            <?php if (isset($component)) { $__componentOriginalcc8f9037b5b659ee389cf60d7b18562c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.account-progress.steps','data' => ['basic' => 'complete','profile' => 'complete','socialMedia' => 'complete','contact' => 'active']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.account-progress.steps'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['basic' => 'complete','profile' => 'complete','social_media' => 'complete','contact' => 'active']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c)): ?>
<?php $attributes = $__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c; ?>
<?php unset($__attributesOriginalcc8f9037b5b659ee389cf60d7b18562c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc8f9037b5b659ee389cf60d7b18562c)): ?>
<?php $component = $__componentOriginalcc8f9037b5b659ee389cf60d7b18562c; ?>
<?php unset($__componentOriginalcc8f9037b5b659ee389cf60d7b18562c); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal0b40b31eb51865ca82ac394acbf065c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b40b31eb51865ca82ac394acbf065c2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.account-progress.contact','data' => ['user' => $user]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.account-progress.contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0b40b31eb51865ca82ac394acbf065c2)): ?>
<?php $attributes = $__attributesOriginal0b40b31eb51865ca82ac394acbf065c2; ?>
<?php unset($__attributesOriginal0b40b31eb51865ca82ac394acbf065c2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b40b31eb51865ca82ac394acbf065c2)): ?>
<?php $component = $__componentOriginal0b40b31eb51865ca82ac394acbf065c2; ?>
<?php unset($__componentOriginal0b40b31eb51865ca82ac394acbf065c2); ?>
<?php endif; ?>
                        <?php endif; ?>
                    <?php elseif(auth()->user()->company->profile_completion): ?>
                        <?php if (isset($component)) { $__componentOriginald01cfe7ec4e568034fe6b33b2b9c9a0b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald01cfe7ec4e568034fe6b33b2b9c9a0b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.account-progress.complete','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.account-progress.complete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald01cfe7ec4e568034fe6b33b2b9c9a0b)): ?>
<?php $attributes = $__attributesOriginald01cfe7ec4e568034fe6b33b2b9c9a0b; ?>
<?php unset($__attributesOriginald01cfe7ec4e568034fe6b33b2b9c9a0b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald01cfe7ec4e568034fe6b33b2b9c9a0b)): ?>
<?php $component = $__componentOriginald01cfe7ec4e568034fe6b33b2b9c9a0b; ?>
<?php unset($__componentOriginald01cfe7ec4e568034fe6b33b2b9c9a0b); ?>
<?php endif; ?>
                    <?php else: ?>
                        <?php if(request()->has('complete')): ?>
                            <?php if (isset($component)) { $__componentOriginald01cfe7ec4e568034fe6b33b2b9c9a0b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald01cfe7ec4e568034fe6b33b2b9c9a0b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.account-progress.complete','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.account-progress.complete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald01cfe7ec4e568034fe6b33b2b9c9a0b)): ?>
<?php $attributes = $__attributesOriginald01cfe7ec4e568034fe6b33b2b9c9a0b; ?>
<?php unset($__attributesOriginald01cfe7ec4e568034fe6b33b2b9c9a0b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald01cfe7ec4e568034fe6b33b2b9c9a0b)): ?>
<?php $component = $__componentOriginald01cfe7ec4e568034fe6b33b2b9c9a0b; ?>
<?php unset($__componentOriginald01cfe7ec4e568034fe6b33b2b9c9a0b); ?>
<?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="dashboard-footer text-center body-font-4 text-gray-500">
            <?php if (isset($component)) { $__componentOriginal3d3a2a154c37220f944698284f758b7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d3a2a154c37220f944698284f758b7a = $attributes; } ?>
<?php $component = App\View\Components\Website\FooterCopyright::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.footer-copyright'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\FooterCopyright::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3d3a2a154c37220f944698284f758b7a)): ?>
<?php $attributes = $__attributesOriginal3d3a2a154c37220f944698284f758b7a; ?>
<?php unset($__attributesOriginal3d3a2a154c37220f944698284f758b7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d3a2a154c37220f944698284f758b7a)): ?>
<?php $component = $__componentOriginal3d3a2a154c37220f944698284f758b7a; ?>
<?php unset($__componentOriginal3d3a2a154c37220f944698284f758b7a); ?>
<?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
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
    <?php if (isset($component)) { $__componentOriginalc55f239e5bf30e5997dd7869a18fb76b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc55f239e5bf30e5997dd7869a18fb76b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.map.leaflet.autocomplete_links','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('map.leaflet.autocomplete_links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc55f239e5bf30e5997dd7869a18fb76b)): ?>
<?php $attributes = $__attributesOriginalc55f239e5bf30e5997dd7869a18fb76b; ?>
<?php unset($__attributesOriginalc55f239e5bf30e5997dd7869a18fb76b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc55f239e5bf30e5997dd7869a18fb76b)): ?>
<?php $component = $__componentOriginalc55f239e5bf30e5997dd7869a18fb76b; ?>
<?php unset($__componentOriginalc55f239e5bf30e5997dd7869a18fb76b); ?>
<?php endif; ?>

    <style>
        .mymap {
            border-radius: 12px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php echo \Livewire\Livewire::scripts(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select21').select2();
        });
        window.addEventListener('render-select2', event => {
            console.log('fired');
            $('.select21').select2();
        })
    </script>
    <?php echo $__env->yieldPushContent('js'); ?>
    <script src="<?php echo e(asset('backend/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <?php if(app()->getLocale() == 'ar'): ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ar.min.js
            "></script>
    <?php endif; ?>
    <script>
        $(".datepicker").attr("autocomplete", "off");

        //init datepicker
        $('.datepicker').off('focus').datepicker({
            format: 'dd-mm-yyyy',
            isRTL: "<?php echo e(app()->getLocale() == 'ar' ? true : false); ?>",
            language: "<?php echo e(app()->getLocale()); ?>",
        }).on('click', function() {
            $(this).datepicker('show');
        });

        function UploadMode(param) {
            if (param === 'photo') {
                $('#photo-uploadMode').removeClass('d-none');
                $('#photo-oldMode').addClass('d-none');
            } else {
                $('#banner-uploadMode').removeClass('d-none');
                $('#banner-oldMode').addClass('d-none');
            }
        }
    </script>
    <script type="text/javascript">
        // feature field
        function add_features_field() {
            $("#multiple_feature_part").append(`
            <div class="col-12 custom-select-padding">
                <div class="d-flex">
                    <div class="d-flex mborder">
                        <div class="position-relative">
                            <select
                                class="border-0 rt-selectactive2 form-control" name="social_media[]">
                                <option value="" class="d-none" disabled selected><?php echo e(__('select_one')); ?></option>
                                <option value="facebook"><?php echo e(__('facebook')); ?></option>
                                <option value="twitter"><?php echo e(__('twitter')); ?></option>
                                <option value="instagram"><?php echo e(__('instagram')); ?></option>
                                <option value="youtube"><?php echo e(__('youtube')); ?></option>
                                <option value="linkedin"><?php echo e(__('linkedin')); ?></option>
                                <option value="pinterest"><?php echo e(__('pinterest')); ?></option>
                                <option value="reddit"><?php echo e(__('reddit')); ?></option>
                                <option value="github"><?php echo e(__('github')); ?></option>
                                <option value="other"><?php echo e(__('other')); ?></option>
                            </select>
                        </div>
                        <div class="w-100">
                            <input class="border-0" type="url" name="url[]" id="" placeholder="<?php echo e(__('profile_link_url')); ?>...">
                        </div>
                    </div>
                    <div class="tw-ms-2">
                        <button class="btn btn-primary2-50 cross-btn" type="button" id="remove_item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#18191C" stroke-width="1.5" stroke-miterlimit="10"/>
                                <path d="M15 9L9 15" stroke="#18191C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15 15L9 9" stroke="#18191C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        `);
            $(".rt-selectactive2").select2({ // minimumResultsForSearch: Infinity,
            });
        }
        $(document).on("click", "#remove_item", function() {
            $(this).parent().parent().parent('div').remove();
        });
    </script>

    <?php
        $map = $setting->default_map;
    ?>
    <?php if($map == 'google-map'): ?>
        <?php echo $__env->make('map::set-googlemap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('map::set-leafletmap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.auth.layouts.progress', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/frontend/pages/company/account-progress.blade.php ENDPATH**/ ?>