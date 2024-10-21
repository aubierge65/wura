<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['professions', 'experiences', 'educations', 'skills']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['professions', 'experiences', 'educations', 'skills']); ?>
<?php foreach (array_filter((['professions', 'experiences', 'educations', 'skills']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form id="candidate_search_form" action="<?php echo e(route('website.candidate')); ?>" method="GET">
    <div class="breadcrumbs style-two">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-12 position-relative">
                    <div class="breadcrumb-menu">
                        <h6 class="f-size-18 m-0"><?php echo e(__('find_candidates')); ?></h6>
                        <ul>
                            <li><a href="<?php echo e(route('website.home')); ?>"><?php echo e(__('home')); ?></a></li>
                            <li>/</li>
                            <li><?php echo e(__('candidates')); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="jobsearchBox tw-my-6 bg-gray-10 input-transparent height-auto-lg">
                <div class="top-content d-flex flex-column flex-lg-row align-items-center leaflet-map-results">
                    <div class="flex-grow-1 flex-grow-1 fromGroup has-icon banner-select">
                        <select class="rt-selectactive candidate-profession" name="profession">
                            <option value="" class="d-none"><?php echo e(__('select_profession')); ?></option>
                            <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e($profession->id == request('profession') ? 'selected' : ''); ?>

                                    value="<?php echo e($profession->id); ?>">
                                    <?php echo e($profession->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="icon-badge category-icon">
                            <?php if (isset($component)) { $__componentOriginalee447edf0b28c84b8e8994a60823e5c8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee447edf0b28c84b8e8994a60823e5c8 = $attributes; } ?>
<?php $component = App\View\Components\Svg\LayerIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.layer-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\LayerIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['stroke' => 'var(--primary-500)','width' => '24','height' => '24']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee447edf0b28c84b8e8994a60823e5c8)): ?>
<?php $attributes = $__attributesOriginalee447edf0b28c84b8e8994a60823e5c8; ?>
<?php unset($__attributesOriginalee447edf0b28c84b8e8994a60823e5c8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee447edf0b28c84b8e8994a60823e5c8)): ?>
<?php $component = $__componentOriginalee447edf0b28c84b8e8994a60823e5c8; ?>
<?php unset($__componentOriginalee447edf0b28c84b8e8994a60823e5c8); ?>
<?php endif; ?>
                        </div>
                    </div>

                    <input type="hidden" name="lat" id="lat" value="">
                    <input type="hidden" name="long" id="long" value="">
                    <?php
                        $oldLocation = request('location');
                        $map = $setting->default_map;
                    ?>

                    <?php if($map == 'google-map'): ?>
                        <div class="inputbox_2 flex-grow-1 fromGroup has-icon">
                            <input type="text" id="searchInput" placeholder="Enter a location..." name="location"
                                value="<?php echo e($oldLocation); ?>" />
                            <div id="google-map" class="d-none"></div>
                            <div class="icon-badge">
                                <?php if (isset($component)) { $__componentOriginal3f359b2694db654dd0bf9b248c38ce64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f359b2694db654dd0bf9b248c38ce64 = $attributes; } ?>
<?php $component = App\View\Components\Svg\LocationIcon::resolve(['stroke' => ''.e($setting->frontend_primary_color).'','width' => '24','height' => '24'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.location-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\LocationIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f359b2694db654dd0bf9b248c38ce64)): ?>
<?php $attributes = $__attributesOriginal3f359b2694db654dd0bf9b248c38ce64; ?>
<?php unset($__attributesOriginal3f359b2694db654dd0bf9b248c38ce64); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f359b2694db654dd0bf9b248c38ce64)): ?>
<?php $component = $__componentOriginal3f359b2694db654dd0bf9b248c38ce64; ?>
<?php unset($__componentOriginal3f359b2694db654dd0bf9b248c38ce64); ?>
<?php endif; ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="inputbox_2 flex-grow-1 fromGroup has-icon">
                            <input name="long" class="leaf_lon" type="hidden">
                            <input name="lat" class="leaf_lat" type="hidden">
                            <input type="text" id="leaflet_search" placeholder="<?php echo e(__('enter_location')); ?>"
                                name="location" value="<?php echo e(request('location')); ?>" class="tw-border-0"
                                autocomplete="off" />

                            <div class="icon-badge">
                                <?php if (isset($component)) { $__componentOriginal3f359b2694db654dd0bf9b248c38ce64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f359b2694db654dd0bf9b248c38ce64 = $attributes; } ?>
<?php $component = App\View\Components\Svg\LocationIcon::resolve(['stroke' => ''.e($setting->frontend_primary_color).'','width' => '24','height' => '24'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.location-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\LocationIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f359b2694db654dd0bf9b248c38ce64)): ?>
<?php $attributes = $__attributesOriginal3f359b2694db654dd0bf9b248c38ce64; ?>
<?php unset($__attributesOriginal3f359b2694db654dd0bf9b248c38ce64); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f359b2694db654dd0bf9b248c38ce64)): ?>
<?php $component = $__componentOriginal3f359b2694db654dd0bf9b248c38ce64; ?>
<?php unset($__componentOriginal3f359b2694db654dd0bf9b248c38ce64); ?>
<?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="tw-flex tw-flex-wrap tw-gap-3 tw-items-center">
                        <div>
                            <button type="button"
                                class="btn tw-inline-flex gap-3 tw-items-center hover:tw-bg-[#F1F2F4] tw-bg-[#F1F2F4] hover:tw-text-[#18191C] tw-text-[#18191C] tw-border-0"
                                data-bs-toggle="modal" data-bs-target="#candidateFiltersModal">
                                <span class="">
                                    <?php if (isset($component)) { $__componentOriginal6ab4b7ef7811ee5c350ec14de5252656 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6ab4b7ef7811ee5c350ec14de5252656 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.filters-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.filters-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6ab4b7ef7811ee5c350ec14de5252656)): ?>
<?php $attributes = $__attributesOriginal6ab4b7ef7811ee5c350ec14de5252656; ?>
<?php unset($__attributesOriginal6ab4b7ef7811ee5c350ec14de5252656); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ab4b7ef7811ee5c350ec14de5252656)): ?>
<?php $component = $__componentOriginal6ab4b7ef7811ee5c350ec14de5252656; ?>
<?php unset($__componentOriginal6ab4b7ef7811ee5c350ec14de5252656); ?>
<?php endif; ?>
                                </span>
                                <span><?php echo e(__('filter')); ?></span>
                            </button>
                        </div>
                        <div class="flex-grow-0">
                            <button
                                class="btn btn-primary d-block d-md-inline-block "><?php echo e(__('search_candidates')); ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tw-flex tw-flex-wrap tw-items-center tw-gap-2 tw-mb-6 tw-mx-1.5 sm:tw-mx-0">
                        <p class="tw-text-[#767F8C] tw-text-sm tw-mb-0"><?php echo e(__('Popular Profession')); ?>:</p>
                        <ul class="tw-popular-search tw-flex-wrap">
                            <?php if(is_string(request('profession'))): ?>
                                <input type="hidden" value="<?php echo e(request('profession')); ?>" name="profession">
                            <?php endif; ?>
                            <?php $__currentLoopData = $professions->take(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li onclick="professionFilter('<?php echo e($profession->name); ?>')" class="tw-text-bold">
                                    <a href="#"><?php echo e($profession->name); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-12">

                    <div class="tw-flex tw-justify-between tw-items-center tw-py-3 tw-mb-6"
                        style="border-top: 1px solid #E4E5E8; border-bottom: 1px solid #E4E5E8;">
                        <div class="tw-flex tw-gap-2 tw-items-center">
                            <?php if(request('keyword') ||
                                    request('country') ||
                                    request('sortby') ||
                                    request('profession') ||
                                    request('experience') ||
                                    request('skills.0') ||
                                    request('education') | request('gender')): ?>
                                <h2 class="tw-text-sm tw-text-[#767F8C] tw-whitespace-nowrap tw-mb-0">
                                    <?php echo e(__('active_filter')); ?>:</h2>
                                <div class="d-flex w-100-p">
                                    <?php if(Request::get('keyword')): ?>
                                        <div class="rt-mr-2 icon-badge">
                                            <?php if (isset($component)) { $__componentOriginalda80fd03a9c58602c6326f277f897225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda80fd03a9c58602c6326f277f897225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.filter-data-component','data' => ['title' => ''.e(__('keyword')).'','filter' => ''.e(request('keyword')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.filter-data-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('keyword')).'','filter' => ''.e(request('keyword')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $attributes = $__attributesOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__attributesOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $component = $__componentOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__componentOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(Request::get('country')): ?>
                                        <div class="rt-mr-2 icon-badge">
                                            <?php if (isset($component)) { $__componentOriginalda80fd03a9c58602c6326f277f897225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda80fd03a9c58602c6326f277f897225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.filter-data-component','data' => ['title' => ''.e(__('country')).'','filter' => ''.e(request('country')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.filter-data-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('country')).'','filter' => ''.e(request('country')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $attributes = $__attributesOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__attributesOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $component = $__componentOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__componentOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(Request::get('sortby') && Request::get('sortby') != 'latest'): ?>
                                        <div class="rt-mr-2 icon-badge">
                                            <?php if (isset($component)) { $__componentOriginalda80fd03a9c58602c6326f277f897225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda80fd03a9c58602c6326f277f897225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.filter-data-component','data' => ['title' => ''.e(__('sortby')).'','filter' => ''.e(request('sortby')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.filter-data-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('sortby')).'','filter' => ''.e(request('sortby')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $attributes = $__attributesOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__attributesOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $component = $__componentOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__componentOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(Request::get('profession') && Request::get('profession') != null): ?>
                                        <div class="rt-mr-2 icon-badge">
                                            <?php if (isset($component)) { $__componentOriginalda80fd03a9c58602c6326f277f897225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda80fd03a9c58602c6326f277f897225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.filter-data-component','data' => ['title' => ''.e(__('profession')).'','filter' => ''.e($professions->where('id', request('profession'))->first()->name ?? '-').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.filter-data-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('profession')).'','filter' => ''.e($professions->where('id', request('profession'))->first()->name ?? '-').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $attributes = $__attributesOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__attributesOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $component = $__componentOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__componentOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(Request::get('experience') && Request::get('experience') != 'all'): ?>
                                        <div class="rt-mr-2 icon-badge">
                                            <?php if (isset($component)) { $__componentOriginalda80fd03a9c58602c6326f277f897225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda80fd03a9c58602c6326f277f897225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.filter-data-component','data' => ['title' => ''.e(__('experience')).'','filter' => ''.e(request('experience')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.filter-data-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('experience')).'','filter' => ''.e(request('experience')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $attributes = $__attributesOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__attributesOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $component = $__componentOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__componentOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(Request::has('skills') && Request::input('skills') != 'all'): ?>
                                        <div class="rt-mr-2 icon-badge">
                                            <?php if (isset($component)) { $__componentOriginalda80fd03a9c58602c6326f277f897225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda80fd03a9c58602c6326f277f897225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.filter-data-component','data' => ['title' => ''.e(__('skills')).'','filter' => ''.e(implode(', ', Request::input('skills'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.filter-data-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('skills')).'','filter' => ''.e(implode(', ', Request::input('skills'))).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $attributes = $__attributesOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__attributesOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $component = $__componentOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__componentOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
                                        </div>
                                        aaa
                                    <?php endif; ?>
                                    <?php if(Request::get('gender') && Request::get('gender') != 'all'): ?>
                                        <div class="rt-mr-2 icon-badge">
                                            <?php if (isset($component)) { $__componentOriginalda80fd03a9c58602c6326f277f897225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda80fd03a9c58602c6326f277f897225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.filter-data-component','data' => ['title' => ''.e(__('gender')).'','filter' => ''.e(request('gender')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.filter-data-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('gender')).'','filter' => ''.e(request('gender')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $attributes = $__attributesOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__attributesOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $component = $__componentOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__componentOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(Request::get('education') && Request::get('education') != 'all'): ?>
                                        <div class="rt-mr-2 icon-badge">
                                            <?php if (isset($component)) { $__componentOriginalda80fd03a9c58602c6326f277f897225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda80fd03a9c58602c6326f277f897225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.filter-data-component','data' => ['title' => ''.e(__('education')).'','filter' => ''.e(request('education')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.filter-data-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('education')).'','filter' => ''.e(request('education')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $attributes = $__attributesOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__attributesOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda80fd03a9c58602c6326f277f897225)): ?>
<?php $component = $__componentOriginalda80fd03a9c58602c6326f277f897225; ?>
<?php unset($__componentOriginalda80fd03a9c58602c6326f277f897225); ?>
<?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="tw-flex tw-justify-end tw-items-center">
                            <div class="joblist-fliter-gorup !tw-min-w-max">
                                <div class="right-content !tw-mt-0">
                                    <nav>
                                        <div class="nav" id="nav-tab" role="tablist">
                                            <button onclick="styleSwitch('box')" class="nav-link active "
                                                id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                                                type="button" role="tab" aria-controls="nav-home"
                                                aria-selected="true">
                                                <?php if (isset($component)) { $__componentOriginal0f44b3ebe4e0d39319660ef7ea9bcb6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f44b3ebe4e0d39319660ef7ea9bcb6b = $attributes; } ?>
<?php $component = App\View\Components\Svg\BoxIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.box-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\BoxIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f44b3ebe4e0d39319660ef7ea9bcb6b)): ?>
<?php $attributes = $__attributesOriginal0f44b3ebe4e0d39319660ef7ea9bcb6b; ?>
<?php unset($__attributesOriginal0f44b3ebe4e0d39319660ef7ea9bcb6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f44b3ebe4e0d39319660ef7ea9bcb6b)): ?>
<?php $component = $__componentOriginal0f44b3ebe4e0d39319660ef7ea9bcb6b; ?>
<?php unset($__componentOriginal0f44b3ebe4e0d39319660ef7ea9bcb6b); ?>
<?php endif; ?>
                                            </button>
                                            <button onclick="styleSwitch('list')" class="nav-link"
                                                id="nav-profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-profile" type="button" role="tab"
                                                aria-controls="nav-profile" aria-selected="false">
                                                <?php if (isset($component)) { $__componentOriginaldd7125669283e5aa74538dfdb1d654d2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldd7125669283e5aa74538dfdb1d654d2 = $attributes; } ?>
<?php $component = App\View\Components\Svg\ListIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.list-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\ListIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldd7125669283e5aa74538dfdb1d654d2)): ?>
<?php $attributes = $__attributesOriginaldd7125669283e5aa74538dfdb1d654d2; ?>
<?php unset($__attributesOriginaldd7125669283e5aa74538dfdb1d654d2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd7125669283e5aa74538dfdb1d654d2)): ?>
<?php $component = $__componentOriginaldd7125669283e5aa74538dfdb1d654d2; ?>
<?php unset($__componentOriginaldd7125669283e5aa74538dfdb1d654d2); ?>
<?php endif; ?>
                                            </button>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="candidate-content">
        <div class="container">
            <!-- ============ Filter Old Data ==========  -->
            
            <!-- ============ Filter Old Data End ==========  -->
            

            <div class="row">
                
</form>

<?php $__env->startSection('frontend_links'); ?>
    <?php echo $__env->make('map::links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        .candidate-profession+.select2-container--default .select2-selection--single {
            border: none !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_scripts'); ?>
    <?php if (isset($component)) { $__componentOriginal513663b5c5fac5e7b3365170a423e764 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal513663b5c5fac5e7b3365170a423e764 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.map.leaflet.autocomplete_scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('map.leaflet.autocomplete_scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal513663b5c5fac5e7b3365170a423e764)): ?>
<?php $attributes = $__attributesOriginal513663b5c5fac5e7b3365170a423e764; ?>
<?php unset($__attributesOriginal513663b5c5fac5e7b3365170a423e764); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal513663b5c5fac5e7b3365170a423e764)): ?>
<?php $component = $__componentOriginal513663b5c5fac5e7b3365170a423e764; ?>
<?php unset($__componentOriginal513663b5c5fac5e7b3365170a423e764); ?>
<?php endif; ?>

    <script>
        function professionFilter(profession) {
            console.log(profession);
            $('input[name=profession]').val(profession)
            $('#candidate_search_form').submit();
        }
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        // $('input[type=radio]').on('change', function() {
        //     $('#form').submit();
        // });
    </script>
    <!-- ============== gooogle map ========== -->
    <?php if($map == 'google-map'): ?>
        <script>
            function initMap() {
                var token = "<?php echo e($setting->google_map_key); ?>";
                var oldlat = <?php echo e(Session::has('location') ? Session::get('location')['lat'] : $setting->default_lat); ?>;
                var oldlng = <?php echo e(Session::has('location') ? Session::get('location')['lng'] : $setting->default_long); ?>;
                const map = new google.maps.Map(document.getElementById("google-map"), {
                    zoom: 7,
                    center: {
                        lat: oldlat,
                        lng: oldlng
                    },
                });
                // Search
                var input = document.getElementById('searchInput');
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                let country_code = '<?php echo e(current_country_code()); ?>';
                if (country_code) {
                    var options = {
                        componentRestrictions: {
                            country: country_code
                        }
                    };
                    var autocomplete = new google.maps.places.Autocomplete(input, options);
                } else {
                    var autocomplete = new google.maps.places.Autocomplete(input);
                }

                autocomplete.bindTo('bounds', map);
                var infowindow = new google.maps.InfoWindow();
                var marker = new google.maps.Marker({
                    map: map,
                    anchorPoint: new google.maps.Point(0, -29)
                });
                autocomplete.addListener('place_changed', function() {
                    infowindow.close();
                    marker.setVisible(false);
                    var place = autocomplete.getPlace();
                    const total = place.address_components.length;
                    let amount = '';
                    if (total > 1) {
                        amount = total - 2;
                    }
                    const result = place.address_components.slice(amount);
                    let country = '';
                    let region = '';
                    for (let index = 0; index < result.length; index++) {
                        const element = result[index];
                        if (element.types[0] == 'country') {
                            country = element.long_name;
                        }
                        if (element.types[0] == 'administrative_area_level_1') {
                            const str = element.long_name;
                            const first = str.split(',').shift()
                            region = first;
                        }
                    }
                    const text = region + ',' + country;
                    $('#insertlocation').val(text);
                    $('#lat').val(place.geometry.location.lat());
                    $('#long').val(place.geometry.location.lng());
                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17);
                    }
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
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/components/website/candidate/candidate-filter.blade.php ENDPATH**/ ?>