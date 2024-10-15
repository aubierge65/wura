<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['experiences']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['experiences']); ?>
<?php foreach (array_filter((['experiences']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="tw-flex rt-mb-32 lg:tw-mt-0 tw-items-center tw-justify-between">
    <h3 class="f-size-18 tw-flex-shrink-0 lh-1 m-0"><?php echo e(__('experience')); ?></h3>
    <button id="addExperience" type="button" class="btn btn-primary">
        <?php echo e(__('add_experience')); ?>

    </button>
</div>
<div class="db-job-card-table -tw-mx-2 tw-pb-16">
    <table class="tw-px-2">
        <thead>
            <tr>
                <th class="!tw-text-base !tw-font-medium"><?php echo e(__('company')); ?></th>
                <th class="!tw-text-base !tw-font-medium"><?php echo e(__('department')); ?></th>
                <th class="!tw-text-base !tw-font-medium"><?php echo e(__('designation')); ?></th>
                <th class="!tw-text-base !tw-font-medium"><?php echo e(__('period')); ?></th>
                <th class="!tw-text-base !tw-font-medium tw-text-right"><?php echo e(__('action')); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($experience->company); ?></td>
                    <td><?php echo e($experience->department); ?></td>
                    <td><?php echo e($experience->designation); ?></td>
                    <td>
                        <?php echo e(formatTime($experience->start, 'd M Y')); ?> -
                        <?php echo e($experience->currently_working ?  __('currently_working') :formatTime($experience->end, 'd M Y')); ?>

                    </td>
                    <td>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-icon" id="dropdownMenuButton5"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                    <a href="javascript:void(0)" class="dropdown-item" onclick="experienceDetail(<?php echo e(json_encode($experience)); ?>, '<?php echo e(date('d-m-Y', strtotime($experience->start))); ?>', '<?php echo e(date('d-m-Y', strtotime($experience->end))); ?>')">
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
                                    <form method="POST" action="<?php echo e(route('candidate.experiences.destroy', $experience->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('Delete'); ?>
                                        <button type="submit" class="dropdown-item" onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');">
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
    #addExperienceModal .modal-dialog,
    #editExperienceModal .modal-dialog{
        z-index:999999 !important;
        max-width: 950px !important;
        padding: 20px !important;
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

        $('#addExperience').on('click', function(){
            $('#addExperienceModal').modal('show');
        });

        //  $(".date_picker").attr("autocomplete", "off");

        // //init datepicker
        // $('.date_picker').off('focus').datepicker({
        //     format: 'd-m-yyyy',
        //     isRTL: "<?php echo e(app()->getLocale() == 'ar' ? true : false); ?>",
        //     language: "<?php echo e(app()->getLocale()); ?>",
        // }).on('click',
        //     function() {
        //         $(this).datepicker('show');
        //     }
        // );
        $('.date_picker').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true
        });

        function closeAddExperienceModal(){
            $('#addExperienceModal').find('form')[0].reset();
            $('#addExperienceModal').modal('hide')
        }

        function closeEditExperienceModal(){
            $('#editExperienceModal').find('form')[0].reset();
            $('#editExperienceModal').modal('hide')
        }

        function experienceDetail(experience, start, end) {
            $('#experience-modal-id').val(experience.id);
            $('#experience-modal-company').val(experience.company);
            $('#experience-modal-department').val(experience.department);
            $('#experience-modal-designation').val(experience.designation);
            $('#experience-modal-start').val(start);
            $('#experience-modal-end').val(end);
            $('#experience-responsibilities').val(experience.responsibilities);
            $('#experience-modal-checkbox_edit').prop("checked", experience.currently_working ? true:false);

            $('#editExperienceModal').modal('show');
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\wamp64\www\wura\resources\views/components/website/candidate/tab/candidate-experience-setting-tab.blade.php ENDPATH**/ ?>