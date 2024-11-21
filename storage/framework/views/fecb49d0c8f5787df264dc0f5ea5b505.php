<div class="modal fade" id="candidateFiltersModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
    role="dialog">
    <form id="form" action="<?php echo e(route('website.candidate')); ?>" method="GET">
        <div
            class="modal-dialog modal-wrapper tw-mx-0 md:tw-max-w-[352px] tw-w-[90%] tw-my-0 tw-absolute tw-top-0 tw-bootom-0 tw-left-0">
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
                        <h2 class="tw-text-sm tw-text-[#0A65CC] tw-mb-2 tw-font-medium"><?php echo e(__('Skills')); ?></h2>
                        <div class="">
                            
                            <select name="skills[]" class="form-control <?php $__errorArgs = ['skills'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="skills" multiple>
                                <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        <?php echo e(request('skills') ? (in_array($skill->name, request('skills')) ? 'selected' : '') : ''); ?>

                                        value="<?php echo e($skill->name); ?>">
                                        <?php echo e($skill->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <hr class="tw-bg-[#E4E5E8] tw-m-0">
                    <div class="tw-p-5">
                        <h2 class="tw-text-sm tw-text-[#0A65CC] tw-mb-2 tw-font-medium"><?php echo e(__('Experiences')); ?></h2>
                        <div class="tw-flex tw-gap-2 tw-items-center tw-py-2">
                            <input type="radio" name="experience" value="" id="allEx" class="tw-scale-125">
                            <label for="allEx" class="tw-text-sm tw-text-[#18191C] tw-mt-[2px]">All</label>
                        </div>
                        <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tw-flex tw-gap-2 tw-items-center tw-py-2">
                                <input <?php echo e($experience->name == request('experience') ? 'checked' : ''); ?>

                                    data-id="<?php echo e(Route::current()->parameter('experience')); ?>" aria-data-id="category"
                                    type="radio" id="<?php echo e($experience->name); ?>_<?php echo e($experience->id); ?>"
                                    class="tw-scale-125" name="experience" value="<?php echo e($experience->name); ?>">
                                <label for="<?php echo e($experience->name); ?>_<?php echo e($experience->id); ?>"
                                    class="tw-text-sm tw-text-[#18191C] tw-mt-[2px]"><?php echo e($experience->name); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <hr class="tw-bg-[#E4E5E8] tw-m-0">
                    <div class="tw-p-5">
                        <h2 class="tw-text-sm tw-text-[#0A65CC] tw-mb-2 tw-font-medium"><?php echo e(__('Education')); ?></h2>
                        <div class="tw-flex tw-gap-2 tw-items-center tw-py-2">
                            <input type="radio" value="" name="education" id="allEdu" class="tw-scale-125">
                            <label for="allEdu" class="tw-text-sm tw-text-[#18191C] tw-mt-[2px]">All</label>
                        </div>
                        <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tw-flex tw-gap-2 tw-items-center tw-py-2">
                                <input <?php echo e($education->name == request('education') ? 'checked' : ''); ?>

                                    data-id="<?php echo e(Route::current()->parameter('education')); ?>" aria-data-id="category"
                                    type="radio" id="<?php echo e($education->name); ?>_<?php echo e($education->id); ?>"
                                    class="tw-scale-125" name="education" value="<?php echo e($education->name); ?>">
                                <label for="<?php echo e($education->name); ?>_<?php echo e($education->id); ?>"
                                    class="tw-text-sm tw-text-[#18191C] tw-mt-[2px]"><?php echo e($education->name); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div
                    class="tw-absolute tw-bottom-0 tw-left-0 tw-right-0 tw-p-5 tw-bg-white tw-z-50 tw-flex tw-flex-wrap tw-gap-3 tw-justify-between tw-items-center tw-mt-3">
                    <div class="tw-flex tw-flex-wrap tw-items-center tw-w-full ">

                        <label for="remote" class="!tw-flex !tw-items-center tw-cursor-pointer">
                            <!-- toggle -->
                            <div class="tw-relative !tw-inline-block remote-toggle">
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
                        <button type="submit"
                            class="btn btn-primary tw-inline-block"><?php echo e(__('apply_filter')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/components/website/modal/candidate-filters-modal.blade.php ENDPATH**/ ?>