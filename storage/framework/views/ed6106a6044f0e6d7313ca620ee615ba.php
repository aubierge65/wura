<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['countries', 'categories', 'jobRoles', 'min_salary', 'max_salary', 'experiences', 'educations', 'jobTypes', 'totalJobs']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['countries', 'categories', 'jobRoles', 'min_salary', 'max_salary', 'experiences', 'educations', 'jobTypes', 'totalJobs']); ?>
<?php foreach (array_filter((['countries', 'categories', 'jobRoles', 'min_salary', 'max_salary', 'experiences', 'educations', 'jobTypes', 'totalJobs']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="breadcrumbs style-two">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-12 position-relative ">
                <div class="breadcrumb-menu">
                    <h6 class="f-size-18 m-0"><?php echo e(__('find_job')); ?></h6>
                    <ul>
                        <li><a href="<?php echo e(route('website.home')); ?>"><?php echo e(__('home')); ?></a></li>
                        <li>/</li>
                        <li><?php echo e(__('find_job')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container">
        <?php if($setting->app_country_type != 'single_base'): ?>
            <?php
                $selected_country = session('selected_country');
            ?>

            <?php if($selected_country): ?>
                <?php
                    $selected_location = selected_country()->name ?: 'N/A';
                    $current_location = currentLocation() ?: 'N/A';
                ?>
                <?php if($selected_location != $current_location): ?>
                    <div class="ll-findjob-banner current_location_part">
                        <div class="tw-p-3 tw-bg-white tw-rounded-md tw-inline-flex tw-justify-center tw-items-center">
                            <?php if (isset($component)) { $__componentOriginal6a8f659062349fa2c5c656374636ed96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a8f659062349fa2c5c656374636ed96 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.earth-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.earth-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6a8f659062349fa2c5c656374636ed96)): ?>
<?php $attributes = $__attributesOriginal6a8f659062349fa2c5c656374636ed96; ?>
<?php unset($__attributesOriginal6a8f659062349fa2c5c656374636ed96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a8f659062349fa2c5c656374636ed96)): ?>
<?php $component = $__componentOriginal6a8f659062349fa2c5c656374636ed96; ?>
<?php unset($__componentOriginal6a8f659062349fa2c5c656374636ed96); ?>
<?php endif; ?>
                        </div>
                        <div class="tw-flex-grow tw-flex tw-flex-col tw-gap-2">
                            <div>
                                <div class="tw-flex tw-justify-between">
                                    <div>
                                        <p class="tw-text-xs tw-font-medium tw-text-[#0066CC] tw-mb-0.5">
                                            <?php echo e(__('selected_location')); ?></p>
                                        <h4 class="tw-m-0 tw-text-base tw-font-semibold tw-text-[#14181A]">
                                            <?php echo e($selected_location); ?></h4>
                                    </div>
                                    <a href="javascript:void(0)" onclick="hideHeader()">
                                        <?php if (isset($component)) { $__componentOriginal8535c28c95fc85c74277752019685775 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8535c28c95fc85c74277752019685775 = $attributes; } ?>
<?php $component = App\View\Components\Svg\CrossIcon::resolve(['width' => '22px','height' => '22px','stroke' => '#0066CC'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.cross-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\CrossIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8535c28c95fc85c74277752019685775)): ?>
<?php $attributes = $__attributesOriginal8535c28c95fc85c74277752019685775; ?>
<?php unset($__attributesOriginal8535c28c95fc85c74277752019685775); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8535c28c95fc85c74277752019685775)): ?>
<?php $component = $__componentOriginal8535c28c95fc85c74277752019685775; ?>
<?php unset($__componentOriginal8535c28c95fc85c74277752019685775); ?>
<?php endif; ?>
                                    </a>
                                </div>
                            </div>
                            <div class="tw-bg-[#E3E5E6] tw-h-[1px]"></div>
                            <div>
                                <p class="tw-text-sm tw-text-[#293133] tw-font-medium tw-mb-1.5">
                                    <?php echo e(__('current_location')); ?>: <?php echo e($current_location); ?></p>
                                <p class="tw-text-[#546063] tw-text-sm tw-mb-2"><?php echo __(
                                    'You_are_searching_for_jobs_from_current_but_your_selected_location_is_selected_and_we_have_found_results_matching_your_criteria',
                                    ['current' => $current_location, 'selected' => $selected_location, 'total' => $totalJobs],
                                ); ?></p>
                                <div>
                                    <a href="<?php echo e(route('website.set.country')); ?>"
                                        class="tw-text-sm"><?php echo e(__('view_all')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>

        <div class="row tw-filter-box tw-mt-6 tw-mb-2 tw-mx-1.5 sm:tw-mx-0">
            <div class="col-lg-5 tw-p-3 search-col">
                <div class="search-col-4 fromGroup position-relative">
                    <input id="search_jobs" name="keyword" type="text" placeholder="<?php echo e(__('job_title_keyword')); ?>"
                        value="<?php echo e(request('keyword')); ?>" autocomplete="off" class="tw-border-0 tw-pl-12">
                    <div class="tw-absolute tw-top-1/2 -tw-translate-y-1/2 tw-left-3">
                        <?php if (isset($component)) { $__componentOriginalaff82f5e25571a3aa5db317d7fd41a9a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaff82f5e25571a3aa5db317d7fd41a9a = $attributes; } ?>
<?php $component = App\View\Components\Svg\SearchIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.search-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\SearchIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaff82f5e25571a3aa5db317d7fd41a9a)): ?>
<?php $attributes = $__attributesOriginalaff82f5e25571a3aa5db317d7fd41a9a; ?>
<?php unset($__attributesOriginalaff82f5e25571a3aa5db317d7fd41a9a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaff82f5e25571a3aa5db317d7fd41a9a)): ?>
<?php $component = $__componentOriginalaff82f5e25571a3aa5db317d7fd41a9a; ?>
<?php unset($__componentOriginalaff82f5e25571a3aa5db317d7fd41a9a); ?>
<?php endif; ?>
                    </div>
                    <span id="autocomplete_job_results_job_page"></span>
                </div>
            </div>
            <input type="hidden" name="lat" id="lat" class="leaf_lat" value="<?php echo e(request('lat')); ?>">
            <input type="hidden" name="long" id="long" class="leaf_lon" value="<?php echo e(request('long')); ?>">
            <?php
                $oldLocation = request('location');
                $map = $setting->default_map;
            ?>

            <div class="col-lg-7 tw-p-3">
                <div class="tw-flex tw-flex-wrap md:tw-flex-nowrap tw-gap-3">
                    <div class="tw-w-full tw-relative fromGroup">
                        <?php if($map == 'google-map'): ?>
                            <input type="text" id="searchInput" placeholder="<?php echo e(__('enter_location')); ?>"
                                name="location" value="<?php echo e(request('location')); ?>" class="tw-border-0 tw-pl-12" />
                            <div id="google-map" class="d-none"></div>
                        <?php else: ?>
                            <input name="long" class="leaf_lon" type="hidden" value="<?php echo e(request('lat')); ?>">
                            <input name="lat" class="leaf_lat" type="hidden" value="<?php echo e(request('long')); ?>">
                            <input type="text" id="leaflet_search" placeholder="<?php echo e(__('enter_location')); ?>"
                                name="location" value="<?php echo e(request('location')); ?>" class="tw-border-0 tw-pl-12"
                                autocomplete="off" />
                        <?php endif; ?>

                        <div class="tw-absolute tw-top-1/2 -tw-translate-y-1/2 tw-left-3">
                            <?php if (isset($component)) { $__componentOriginal3f359b2694db654dd0bf9b248c38ce64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f359b2694db654dd0bf9b248c38ce64 = $attributes; } ?>
<?php $component = App\View\Components\Svg\LocationIcon::resolve(['width' => '24','height' => '24','stroke' => ''.e($setting->frontend_primary_color).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <div>
                        <button type="button"
                            class="btn tw-inline-flex gap-3 tw-items-center hover:tw-bg-[#F1F2F4] tw-bg-[#F1F2F4] hover:tw-text-[#18191C] tw-text-[#18191C] tw-border-0"
                            data-bs-toggle="modal" data-bs-target="#filtersModal">
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
                    <div>
                        <button type="submit" class="btn btn-primary tw-inline-block">
                            <?php echo e(__('search_job')); ?>

                        </button>
                    </div>
                </div>
                <span id="autocomplete_job_results"></span>
            </div>
        </div>
    </div>
</div>
<?php if (isset($component)) { $__componentOriginal20eb949c981605f7c63f877edf2f7e26 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20eb949c981605f7c63f877edf2f7e26 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.modal.category-filters-modal','data' => ['jobTypes' => $jobTypes,'categories' => $categories,'maxSalary' => $maxSalary]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.modal.category-filters-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['job-types' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($jobTypes),'categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'max-salary' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($maxSalary)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20eb949c981605f7c63f877edf2f7e26)): ?>
<?php $attributes = $__attributesOriginal20eb949c981605f7c63f877edf2f7e26; ?>
<?php unset($__attributesOriginal20eb949c981605f7c63f877edf2f7e26); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20eb949c981605f7c63f877edf2f7e26)): ?>
<?php $component = $__componentOriginal20eb949c981605f7c63f877edf2f7e26; ?>
<?php unset($__componentOriginal20eb949c981605f7c63f877edf2f7e26); ?>
<?php endif; ?>

<?php $__env->startPush('frontend_links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/plugins/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/fontawesome-free/css/all.min.css">
    <?php if($map == 'leaflet'): ?>
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
    <?php endif; ?>
    <style>
        .ll-findjob-banner {
            border-radius: 8px;
            border: 2px solid var(--primary-500);
            background: var(--primary-50);
            box-shadow: 0px 2px 6px 0px rgba(0, 102, 204, 0.12);
            display: flex;
            padding: 15px;
            align-items: flex-start;
            gap: 16px;
        }

        span.select2-container--default .select2-selection--single {
            border: none !important;
        }

        span.select2-selection.select2-selection--single {
            outline: none;
        }

        .noUi-connect {
            background: #0066ff;
        }

        #priceRangeSlider {
            height: 8px;
        }

        .noUi-horizontal .noUi-handle {
            height: 16px;
            width: 16px;
            top: -5px;
            border-radius: 50%;
            background: #0066ff;
            border: 2px solid white;
        }

        .noUi-touch-area {
            background: #0066ff;
            border-radius: 50%;
        }


        .noUi-handle:after,
        .noUi-handle:before {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('frontend_scripts'); ?>
    <script src="<?php echo e(asset('frontend/plugins/nouislider/nouislider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/plugins/nouislider/wNumb.min.js')); ?>"></script>
    <script>
        if (localStorage.getItem('current_location_section') && localStorage.getItem('current_location_section') ==
            'hide') {
            $('.current_location_part').addClass('d-none');
        } else {
            $('.current_location_part').removeClass('d-none');
        }

        function hideHeader() {
            localStorage.setItem('current_location_section', 'hide');
            $('.current_location_part').addClass('d-none');
        }

        // autocomplete
        var path = "<?php echo e(route('website.job.autocomplete')); ?>";

        $('#search_jobs').keyup(function(e) {
            var keyword = $(this).val();

            if (keyword != '') {
                $.ajax({
                    url: path,
                    type: 'GET',
                    dataType: "json",
                    data: {
                        search: keyword
                    },
                    success: function(data) {
                        $('#autocomplete_job_results_job_page').fadeIn();
                        $('#autocomplete_job_results_job_page').html(data);
                    }
                });
            } else {
                $('#autocomplete_job_results_job_page').fadeOut();
            }
        });
    </script>
    <?php if($map == 'leaflet'): ?>
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
    <?php elseif($map == 'google-map'): ?>
        <!-- ============== gooogle map ========== -->
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
                    const text = country;
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
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/website/job/job-category-filtering.blade.php ENDPATH**/ ?>