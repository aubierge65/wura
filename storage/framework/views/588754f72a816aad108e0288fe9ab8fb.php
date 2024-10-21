<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['educations']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['educations']); ?>
<?php foreach (array_filter((['educations']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="tw-flex rt-mb-32 lg:tw-mt-0 tw-items-center tw-justify-between">
    <h3 class="f-size-18 lh-1 m-0"><?php echo e(__('educations')); ?></h3>
    <button id="addEducation" type="button" class="btn btn-primary ">
        <?php echo e(__('add_education')); ?>

    </button>
</div>
<div class="db-job-card-table -tw-mx-2">
    <table class="tw-px-2">
        <thead>
            <tr>
                <th class="!tw-text-base !tw-font-medium"><?php echo e(__('education_level')); ?></th>
                <th class="!tw-text-base !tw-font-medium"><?php echo e(__('degree')); ?></th>
                <th class="!tw-text-base !tw-font-medium"><?php echo e(__('year')); ?></th>
                <th class="!tw-text-base !tw-font-medium tw-text-right"><?php echo e(__('action')); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($education->level); ?></td>
                    <td><?php echo e($education->degree); ?></td>
                    <td><?php echo e($education->year); ?></td>
                    <td>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-icon" id="dropdownMenuButton5"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 13.125C12.6213 13.125 13.125 12.6213 13.125 12C13.125 11.3787 12.6213 10.875 12 10.875C11.3787 10.875 10.875 11.3787 10.875 12C10.875 12.6213 11.3787 13.125 12 13.125Z"
                                        fill="#767F8C" stroke="#767F8C" />
                                    <path
                                        d="M12 6.65039C12.6213 6.65039 13.125 6.14671 13.125 5.52539C13.125 4.90407 12.6213 4.40039 12 4.40039C11.3787 4.40039 10.875 4.90407 10.875 5.52539C10.875 6.14671 11.3787 6.65039 12 6.65039Z"
                                        fill="#767F8C" stroke="#767F8C" />
                                    <path
                                        d="M12 19.6094C12.6213 19.6094 13.125 19.1057 13.125 18.4844C13.125 17.8631 12.6213 17.3594 12 17.3594C11.3787 17.3594 10.875 17.8631 10.875 18.4844C10.875 19.1057 11.3787 19.6094 12 19.6094Z"
                                        fill="#767F8C" stroke="#767F8C" />
                                </svg>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end company-dashboard-dropdown"
                                aria-labelledby="dropdownMenuButton5">
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item"
                                        onclick="educationDetail(<?php echo e(json_encode($education)); ?>)">
                                        <?php if (isset($component)) { $__componentOriginal7431f603892fd94140e7c4580df96cfb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7431f603892fd94140e7c4580df96cfb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.edit-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.edit-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7431f603892fd94140e7c4580df96cfb)): ?>
<?php $attributes = $__attributesOriginal7431f603892fd94140e7c4580df96cfb; ?>
<?php unset($__attributesOriginal7431f603892fd94140e7c4580df96cfb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7431f603892fd94140e7c4580df96cfb)): ?>
<?php $component = $__componentOriginal7431f603892fd94140e7c4580df96cfb; ?>
<?php unset($__componentOriginal7431f603892fd94140e7c4580df96cfb); ?>
<?php endif; ?>
                                        <?php echo e(__('edit')); ?>

                                    </a>
                                </li>
                                <li>
                                    <form method="POST"
                                        action="<?php echo e(route('candidate.educations.destroy', $education->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('Delete'); ?>
                                        <button type="submit" class="dropdown-item"
                                            onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');">
                                            <?php if (isset($component)) { $__componentOriginald4cb652b3e1f6eeb66ae501a13aad222 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222 = $attributes; } ?>
<?php $component = App\View\Components\Svg\TrashIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.trash-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\TrashIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222)): ?>
<?php $attributes = $__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222; ?>
<?php unset($__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4cb652b3e1f6eeb66ae501a13aad222)): ?>
<?php $component = $__componentOriginald4cb652b3e1f6eeb66ae501a13aad222; ?>
<?php unset($__componentOriginald4cb652b3e1f6eeb66ae501a13aad222); ?>
<?php endif; ?>
                                            <?php echo e(__('delete')); ?>

                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="text-center">
                        <?php if (isset($component)) { $__componentOriginal8bf6266e7f80e2665df15c5faf71b89a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a = $attributes; } ?>
<?php $component = App\View\Components\Svg\NotFoundIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.not-found-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\NotFoundIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a)): ?>
<?php $attributes = $__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a; ?>
<?php unset($__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8bf6266e7f80e2665df15c5faf71b89a)): ?>
<?php $component = $__componentOriginal8bf6266e7f80e2665df15c5faf71b89a; ?>
<?php unset($__componentOriginal8bf6266e7f80e2665df15c5faf71b89a); ?>
<?php endif; ?>
                        <p class="mt-4"><?php echo e(__('no_data_found')); ?></p>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php $__env->startPush('frontend_links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/assets/css/bootstrap-datepicker.min.css">
    <style>
        #addEducationModal .modal-dialog,
        #editEducationModal .modal-dialog {
            z-index: 999999 !important;
            max-width: 950px !important;
            padding: 20px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('frontend_scripts'); ?>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap-datepicker.min.js')); ?>"></script>
    <?php if(app()->getLocale() == 'ar'): ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ar.min.js
                    "></script>
    <?php endif; ?>
    <script>
        $('#addEducation').on('click', function() {
            $('#addEducationModal').modal('show');
        });

        //  $(".year_picker").attr("autocomplete", "off");

        //init datepicker
        // $('.year_picker').off('focus').datepicker({
        //     format: "yyyy",
        //     viewMode: "years",
        //     minViewMode: "years",
        //     isRTL: "<?php echo e(app()->getLocale() == 'ar' ? true : false); ?>",
        //     language: "<?php echo e(app()->getLocale()); ?>",
        // }).on('click',
        //     function() {
        //         $(this).datepicker('show');
        //     }
        // );

        $('.year_picker').datepicker({
            format: 'yyyy',
            viewMode: "years",
            minViewMode: "years",
            autoclose: true
        });

        function closeAddEducationModal() {
            $('#addEducationModal').find('form')[0].reset();
            $('#addEducationModal').modal('hide')
        }

        function closeEditEducationModal() {
            $('#editEducationModal').find('form')[0].reset();
            $('#editEducationModal').modal('hide')
        }

        function educationDetail(education, start, end) {
            $('#education-modal-id').val(education.id);
            $('#education-modal-level').val(education.level);
            $('#education-modal-degree').val(education.degree);
            $('#education-modal-year').val(education.year);
            $('#education-notes').val(education.notes);

            $('#editEducationModal').modal('show');
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\wamp64\www\wura\resources\views/components/website/candidate/tab/candidate-education-setting-tab.blade.php ENDPATH**/ ?>