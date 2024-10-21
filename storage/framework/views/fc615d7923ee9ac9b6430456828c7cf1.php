<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['jobTypes', 'categories', 'maxSalary', 'currentCurrency']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['jobTypes', 'categories', 'maxSalary', 'currentCurrency']); ?>
<?php foreach (array_filter((['jobTypes', 'categories', 'maxSalary', 'currentCurrency']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="modal fade" id="filtersModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div
        class="modal-dialog  modal-wrapper md:tw-max-w-[352px] tw-mx-0 tw-w-[90%] tw-my-0 tw-absolute tw-top-0 tw-bootom-0 tw-left-0">
        <div class="modal-content tw-rounded-none tw-relative tw-min-h-screen tw-max-h-screen">
            <div class="tw-h-screen tw-overflow-x-hidden tw-overflow-y-auto tw-pb-24">

                <div class="tw-px-5 tw-pt-5">
                    <div class="tw-flex tw-justify-between items-center">
                        <h2 class="tw-text-[#18191C] tw-text-xl tw-font-medium tw-mb-0"><?php echo e(__('filter')); ?></h2>
                        <button type="button" class="tw-p-0 tw-border-0 tw-bg-transparent" data-bs-dismiss="modal"
                            aria-label="Close">
                            <?php if (isset($component)) { $__componentOriginalea0db84d645537b1ca75c6d9a16af7ce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalea0db84d645537b1ca75c6d9a16af7ce = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.close-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.close-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalea0db84d645537b1ca75c6d9a16af7ce)): ?>
<?php $attributes = $__attributesOriginalea0db84d645537b1ca75c6d9a16af7ce; ?>
<?php unset($__attributesOriginalea0db84d645537b1ca75c6d9a16af7ce); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalea0db84d645537b1ca75c6d9a16af7ce)): ?>
<?php $component = $__componentOriginalea0db84d645537b1ca75c6d9a16af7ce; ?>
<?php unset($__componentOriginalea0db84d645537b1ca75c6d9a16af7ce); ?>
<?php endif; ?>
                        </button>
                    </div>
                </div>
                <div class="tw-p-5">
                    <h2 class="tw-text-sm tw-text-[#0A65CC] tw-mb-2 tw-font-medium"><?php echo e(__('job_type')); ?></h2>
                    <?php $__currentLoopData = $jobTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tw-flex tw-gap-2 tw-items-center tw-py-2">
                            <input <?php echo e($type->name == request('job_type') ? 'checked' : ''); ?>

                                data-id="<?php echo e(Route::current()->parameter('category')); ?>" aria-data-id="category"
                                type="radio" id="<?php echo e($type->name); ?>_<?php echo e($type->id); ?>" class="tw-scale-125"
                                name="job_type" value="<?php echo e($type->name); ?>">
                            <label for="<?php echo e($type->name); ?>_<?php echo e($type->id); ?>"
                                class="tw-text-sm tw-text-[#18191C] tw-mt-[2px]"><?php echo e($type->name); ?></label>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <hr class="tw-bg-[#E4E5E8] tw-m-0">
                <div class="tw-p-5">
                    <h2 class="tw-text-sm tw-text-[#0A65CC] tw-mb-8 tw-font-medium"><?php echo e(__('salary')); ?></h2>
                    <div>
                        <input type="hidden" name="price_min" id="price_min"
                            data-id="<?php echo e(Route::current()->parameter('category')); ?>" aria-data-id="category"
                            value="<?php echo e(is_string(request('price_min')) ? request('price_min') : ''); ?>">
                        <input type="hidden" name="price_max" id="price_max"
                            data-id="<?php echo e(Route::current()->parameter('category')); ?>" aria-data-id="category"
                            value="<?php echo e(is_string(request('price_max')) ? request('price_max') : ''); ?>">
                        <div id="priceCollapse" class="accordion-collapse collapse show mt-2" aria-labelledby="priceTag"
                            data-bs-parent="#accordionGroup">
                            <div class="accordion-body list-sidebar__accordion-body">
                                <div class="price-range-slider">
                                    <div id="priceRangeSlider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tw-flex tw-justify-between tw-items-center tw-mb-4">
                        <p class="tw-text-sm tw-text-[#767F8C] tw-mb-0">Min:
                            <?php echo e($currentCurrency->symbol); ?><span>0</span></p>
                        <p class="tw-text-sm tw-text-[#767F8C] tw-mb-0">Max:
                            <?php echo e($currentCurrency->symbol); ?><span><?php echo e(round($maxSalary, 0)); ?></span></p>
                    </div>
                    <div class="tw-flex tw-gap-2 tw-items-center tw-py-2">
                        <input <?php echo e(request('price_min') == 10 && request('price_max') == 100 ? 'checked' : ''); ?>

                            onclick="changeSalary(10, 100)" type="radio" id="10" class="tw-scale-125"
                            name="salleryRange">
                        <label for="10"
                            class="tw-text-sm tw-text-[#18191C] tw-mt-[2px]"><?php echo e($currentCurrency->symbol); ?>10 -
                            <?php echo e($currentCurrency->symbol); ?>100</label>
                    </div>
                    <div class="tw-flex tw-gap-2 tw-items-center tw-py-2">
                        <input <?php echo e(request('price_min') == 100 && request('price_max') == 1000 ? 'checked' : ''); ?>

                            onclick="changeSalary(100, 1000)" type="radio" id="100" class="tw-scale-125"
                            name="salleryRange">
                        <label for="100"
                            class="tw-text-sm tw-text-[#18191C] tw-mt-[2px]"><?php echo e($currentCurrency->symbol); ?>100
                            -
                            <?php echo e($currentCurrency->symbol); ?>1,000</label>
                    </div>
                    <div class="tw-flex tw-gap-2 tw-items-center tw-py-2">
                        <input <?php echo e(request('price_min') == 1000 && request('price_max') == 10000 ? 'checked' : ''); ?>

                            onclick="changeSalary(1000, 10000)" type="radio" id="1000" class="tw-scale-125"
                            name="salleryRange">
                        <label for="1000"
                            class="tw-text-sm tw-text-[#18191C] tw-mt-[2px]"><?php echo e($currentCurrency->symbol); ?>1,000 -
                            <?php echo e($currentCurrency->symbol); ?>10,000</label>
                    </div>
                    <div class="tw-flex tw-gap-2 tw-items-center tw-py-2">
                        <input <?php echo e(request('price_min') == 10000 && request('price_max') == 100000 ? 'checked' : ''); ?>

                            onclick="changeSalary(10000, 100000)" type="radio" id="10000" class="tw-scale-125"
                            name="salleryRange">
                        <label for="10000"
                            class="tw-text-sm tw-text-[#18191C] tw-mt-[2px]"><?php echo e($currentCurrency->symbol); ?>10,000 -
                            <?php echo e($currentCurrency->symbol); ?>100,000</label>
                    </div>
                    <div class="tw-flex tw-gap-2 tw-items-center tw-py-2">
                        <input <?php echo e(request('price_min') >= 1000000 && !request('price_max') ? 'checked' : ''); ?>

                            onclick="changeSalary(1000000)" type="radio" id="100000Up" class="tw-scale-125"
                            name="salleryRange">
                        <label for="100000Up"
                            class="tw-text-sm tw-text-[#18191C] tw-mt-[2px]"><?php echo e($currentCurrency->symbol); ?>100,000
                            Up</label>
                    </div>
                </div>
                <hr class="tw-bg-[#E4E5E8] tw-m-0">
                <div class="tw-px-5 tw-pt-5">
                    <h2 class="tw-text-sm tw-text-[#0A65CC] tw-mb-2 tw-font-medium"><?php echo e(__('category')); ?></h2>
                    <label class="tw-block ll-filter-category__item" for="allcategory">
                        <input <?php echo e(Route::current()->parameter('category') ? '' : 'checked'); ?> type="radio"
                            id="allcategory" class="category-radio tw-hidden" aria-data-id="category" value="">
                        <div
                            class="tw-text-sm tw-text-[#18191C] tw-font-medium hover:tw-text-[#0A65CC] tw-flex tw-cursor-pointer hover:tw-bg-[#E7F0FA] tw-px-3 tw-py-2 tw-mt-[2px]">
                            <?php echo e(__('all_category')); ?></div>
                    </label>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label class="tw-block ll-filter-category__item"
                            for="<?php echo e($category->name); ?>_<?php echo e($category->id); ?>">
                            <input <?php echo e($category->slug == Route::current()->parameter('category') ? 'checked' : ''); ?>

                                type="radio" aria-data-id="category" data-id="<?php echo e($category->slug); ?>"
                                id="<?php echo e($category->name); ?>_<?php echo e($category->id); ?>" class="category-radio tw-hidden"
                                value="<?php echo e($category->slug); ?>">
                            <div
                                class="tw-text-sm tw-text-[#18191C] tw-font-medium hover:tw-text-[#0A65CC] tw-flex tw-cursor-pointer hover:tw-bg-[#E7F0FA] tw-px-3 tw-py-2 tw-mt-[2px]">
                                <?php echo e($category->name); ?>

                            </div>
                        </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div
                class="tw-absolute tw-bottom-0 tw-left-0 tw-right-0 tw-p-5 tw-bg-white tw-z-50 tw-flex sm:tw-flex-row tw-flex-col tw-gap-3 sm:tw-justify-between sm:tw-items-center tw-mt-3">
                <div class="tw-flex tw-items-center tw-w-full ">

                    <label for="remote" class="!tw-flex tw-items-center tw-cursor-pointer">
                        <!-- toggle -->
                        <div class="tw-relative remote-toggle">
                            <!-- input -->
                            <input type="checkbox" id="remote" class="tw-sr-only" value="1"
                                data-id="<?php echo e(Route::current()->parameter('category')); ?>" aria-data-id="category"
                                name="is_remote" <?php echo e(request('is_remote') ? 'checked' : ''); ?>>
                            <!-- line -->
                            <div class="tw-block tw-bg-[#E4E5E8] tw-w-10 tw-h-[22px] tw-rounded-full"></div>
                            <!-- dot -->
                            <div
                                class="dot tw-absolute tw-left-1 tw-top-1 tw-bg-white tw-w-3.5 tw-h-3.5 tw-rounded-full tw-transition">
                            </div>
                        </div>
                        <!-- label -->
                        <div class="tw-ml-3 tw-text-gray-700 tw-font-medium">
                            <?php echo e(__('remote_job')); ?>

                        </div>
                    </label>

                </div>
                <div>
                    <button type="submit" class="btn btn-primary tw-inline-block"><?php echo e(__('apply_filter')); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('frontend_scripts'); ?>
    <script>
        function keywordClose() {
            $('input[name="keyword"]').val('');
            $('#job_search_form').submit();
        }

        function remotelyClose() {
            $('input[name="is_remote"]').val('');
            $('#job_search_form').submit();
        }
        function categoryClose() {
            console.log("categoryClose function called");
            $('input[aria-data-id="category"]').prop('checked', false);
            $('#job_search_form').submit();
        }


        function jobTypeClose() {
            $('input[name="job_type"]').val('');
            $('#job_search_form').submit();
        }

        function jobSalaryClose() {
            $('input[name="price_min"]').val('');
            $('input[name="price_max"]').val('');
            $('#job_search_form').submit();
        }

        function changeSalary(minsalary, maxsalary) {
            if (minsalary && maxsalary) {
                $('#price_min').val(minsalary)
                $('#price_max').val(maxsalary)
            } else if (minsalary && !maxsalary) {
                $('#price_min').val(minsalary)
                $('#price_max').val('')
            }
        }

        function changeFilter() {
            const slider = document.getElementById('priceRangeSlider')
            const value = slider.noUiSlider.get(true);
            document.getElementById('price_min').value = value[0]
            document.getElementById('price_max').value = value[1]
            const form = $('#job_search_form')
            const data = form.serializeArray();
            // $('#job_search_form').submit()
        }

        function setDefaultPriceRangeValue() {
            const slider = document.getElementById('priceRangeSlider')
            slider.noUiSlider.set([<?php echo e(request('price_min')); ?>, <?php echo e(request('price_max')); ?>]);
        }

        $(document).ready(function() {
            const slider = document.getElementById('priceRangeSlider')
            let maxRange = Number.parseInt("<?php echo e($maxSalary ?? 500); ?>")
            let minPrice = 0;
            let maxPrice = maxRange;
            <?php if(request()->has('price_min') && request()->has('price_max')): ?>
                minPrice = Number.parseInt("<?php echo e(request('price_min', 0)); ?>")
                maxPrice = Number.parseInt("<?php echo e(request('price_max', $maxSalary)); ?>")
            <?php endif; ?>
            noUiSlider.create(slider, {
                start: [minPrice, maxPrice],
                connect: true,
                range: {
                    min: [0],
                    max: [maxRange],
                },
                format: wNumb({
                    decimals: 0,
                    thousand: ',',
                    suffix: ' (<?php echo e($currentCurrency->symbol); ?>)',
                }),
                tooltips: true,
                orientation: 'horizontal',
            });

            slider.noUiSlider.on('change', function() {
                changeFilter();
            });

        });
    </script>
    <script>
        const checkboxes = document.querySelectorAll('.category-radio');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('click', (event) => {
                checkboxes.forEach(cb => {
                    if (cb !== event.target) {
                        cb.checked = false; // Uncheck other checkboxes
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/components/website/modal/filters-modal.blade.php ENDPATH**/ ?>