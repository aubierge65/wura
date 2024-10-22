<?php $__env->startSection('title'); ?>
    <?php echo e(__('post_job')); ?>

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
                        <div class="dashboard-right-header">
                            <span class="sidebar-open-nav">
                                <i class="ph-list"></i>
                            </span>
                        </div>
                        <h2 class="tw-text-2xl tw-font-medium tw-text-[#18191C] tw-mb-8">
                            <?php echo e(__('post_a_job')); ?>

                        </h2>
                        <form action="<?php echo e(route('company.job.store')); ?>" method="POST" class="rt-from">
                            <?php echo csrf_field(); ?>
                            <div class="post-job-item rt-mb-15 tw-w-full tw-overflow-hidden">
                                <div class="row">
                                    <div class="col-lg-8 rt-mb-20">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'job_title','required' => true,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <input value="<?php echo e(old('title')); ?>" name="title"
                                            class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                            placeholder="<?php echo e(__('job_title')); ?>" id="m">
                                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-lg-4 rt-mb-20 col-md-4">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'job_category','required' => true,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <select
                                            class=" select2-taggable select2-search form-control <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="category_id" id="category_id">
                                            <?php $__currentLoopData = $jobCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(old('category_id') == $category->id ? 'selected' : ''); ?>

                                                    value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-lg-8 rt-mb-20 col-md-8">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'tags','required' => false,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                            (<?php echo e(__('saerch_or_write_tag_and_hit_enter')); ?>)
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>

                                        <select
                                            class=" rt-selectactive select2-taggable form-control <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="tags[]" multiple>
                                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    <?php echo e(old('tags') ? (in_array($tag->id, old('tags')) ? 'selected' : '') : ''); ?>

                                                    value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-lg-4 rt-mb-20 col-md-4">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'job_role','required' => true,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <select
                                            class=" select2-taggable select2-search form-control <?php $__errorArgs = ['role_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="role_id" id="role_id">
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(old('role_id') == $role->id ? 'selected' : ''); ?>

                                                    value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['role_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="post-job-item rt-mb-15 tw-w-full tw-overflow-hidden">
                                <h4 class="f-size-18 ft-wt-5 rt-mb-20 lh-1"><?php echo e(__('salary')); ?></h4>
                                <div class="tw-flex tw-gap-5 mb-3">
                                    <div
                                        class="ll-radio tw-flex tw-items-center tw-border tw-border-gray-200 tw-rounded tw-ps-1">
                                        <input checked onclick="salaryModeChange('range')" id="salary_rangee" type="radio"
                                            value="range" name="salary_mode" class="tw-scale-150">
                                        <label for="salary_rangee"
                                            class="tw-w-full tw-py-4 tw-ms-2 tw-text-sm tw-font-medium"><?php echo e(__('salary_range')); ?></label>
                                    </div>
                                    <div
                                        class="ll-radio tw-flex tw-items-center tw-border tw-border-gray-200 tw-rounded tw-ps-1">
                                        <input onclick="salaryModeChange('custom')" id="custom_salary" type="radio"
                                            value="custom" name="salary_mode" class="tw-scale-150">
                                        <label for="custom_salary"
                                            class="tw-w-full tw-py-4 tw-ms-2 tw-text-sm tw-font-medium"><?php echo e(__('custom_salary')); ?></label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="rt-mb-20 col-md-8 d-none" id="custom_salary_part">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'custom_salary','required' => true,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <div class="position-relative">
                                            <input value="<?php echo e(old('custom_salary', 'Competitive')); ?>" name="custom_salary"
                                                class="form-control <?php $__errorArgs = ['custom_salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                type="text" placeholder="<?php echo e(__('job_title')); ?>" id="m">
                                            <?php $__errorArgs = ['custom_salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="rt-mb-20 col-md-4 salary_range_part">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'min_salary','required' => false,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <div class="position-relative">
                                            <input step="0.01" value="<?php echo e(old('min_salary')); ?>"
                                                class="form-control <?php $__errorArgs = ['min_salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="min_salary" type="number" placeholder="<?php echo e(__('min_salary')); ?>"
                                                id="m">
                                            <div class="usd"><?php echo e($currency_symbol); ?></div>
                                            <?php $__errorArgs = ['min_salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="rt-mb-20 col-md-4 salary_range_part">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'max_salary','required' => false,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <div class="position-relative">
                                            <input step="0.01" value="<?php echo e(old('max_salary')); ?>"
                                                class="form-control <?php $__errorArgs = ['max_salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="max_salary" type="number" placeholder="<?php echo e(__('max_salary')); ?>"
                                                id="m">
                                            <div class="usd"><?php echo e($currency_symbol); ?></div>
                                            <?php $__errorArgs = ['max_salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 rt-mb-20 col-md-6">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => ''.e(__('salary_type')).'','required' => true,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <select
                                            class="rt-selectactive form-control <?php $__errorArgs = ['salary_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "
                                            name="salary_type">
                                            <?php $__currentLoopData = $salary_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(old('salary_type') == $type->id ? 'selected' : ''); ?>

                                                    value="<?php echo e($type->id); ?>">
                                                    <?php echo e($type->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['salary_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>


                            <div class="post-job-item rt-mb-15 tw-w-full tw-overflow-hidden">
                                <h4 class="f-size-18 ft-wt-5 rt-mb-20 lh-1"><?php echo e(__('advance_information')); ?></h4>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 rt-mb-20">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'education','required' => true,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <select
                                            class="select2-taggable form-control <?php $__errorArgs = ['education'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "
                                            name="education">
                                            <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(old('education') == $education->id ? 'selected' : ''); ?>

                                                    value="<?php echo e($education->id); ?>">
                                                    <?php echo e($education->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['education'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-lg-4 col-md-6 rt-mb-20">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'experience','required' => true,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <select
                                            class="select2-taggable form-control <?php $__errorArgs = ['experience'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "
                                            name="experience">
                                            <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(old('experience') == $experience->id ? 'selected' : ''); ?>

                                                    value="<?php echo e($experience->id); ?>">
                                                    <?php echo e($experience->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['experience'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-lg-4 col-md-6 rt-mb-20">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'job_type','required' => true,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <select
                                            class="rt-selectactive form-control <?php $__errorArgs = ['job_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "
                                            name="job_type">
                                            <?php $__currentLoopData = $job_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(old('job_type') == $job_type->id ? 'selected' : ''); ?>

                                                    value="<?php echo e($job_type->id); ?>">
                                                    <?php echo e($job_type->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['job_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="col-lg-6 col-md-6 rt-mb-20">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'job_mode_id','required' => true,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <select
                                            class="select2-taggable form-control <?php $__errorArgs = ['job_mode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "
                                            name="job_mode_id">
                                            <?php $__currentLoopData = $modes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_mode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(old('job_mode') == $job_mode->id ? 'selected' : ''); ?>

                                                    value="<?php echo e($job_mode->id); ?>">
                                                    <?php echo e($job_mode->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['job_mode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-lg-6 col-md-6 rt-mb-20">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'job_contracts_id','required' => true,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <select
                                            class="select2-taggable form-control <?php $__errorArgs = ['job_contracts'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "
                                            name="job_contracts_id">
                                            <?php $__currentLoopData = $contrats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_contracts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(old('job_contracts') == $job_contracts->id ? 'selected' : ''); ?>

                                                    value="<?php echo e($job_contracts->id); ?>">
                                                    <?php echo e($job_contracts->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['job_contracts'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="col-lg-6 col-md-6 rt-mb-20">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'vacancies','required' => true,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <input value="<?php echo e(old('vacancies', 1)); ?>" name="vacancies" type="text"
                                            placeholder="<?php echo e(__('vacancies')); ?>"
                                            class="form-control <?php $__errorArgs = ['vacancies'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="vacancies">
                                        <?php $__errorArgs = ['vacancies'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-lg-6 col-md-6 rt-mb-20">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'deadline_expired','required' => true,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <div class="fromGroup">
                                            <div class="form-control-icon date datepicker">
                                                <input value="<?php echo e(old('deadline')); ?>" name="deadline"
                                                    class="form-control <?php $__errorArgs = ['deadline'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    type="text" value="<?php echo e(old('deadline') ? old('deadline') : ''); ?>"
                                                    id="date" placeholder="d/m/y">
                                                <span class="input-group-addon has-badge">
                                                    <span <?php $__errorArgs = ['deadline'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> rt-mr-12 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
                                                        <?php if (isset($component)) { $__componentOriginal658abeed9108d2cfe1f7b59a089b3e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal658abeed9108d2cfe1f7b59a089b3e3a = $attributes; } ?>
<?php $component = App\View\Components\Svg\CalendarIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.calendar-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\CalendarIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal658abeed9108d2cfe1f7b59a089b3e3a)): ?>
<?php $attributes = $__attributesOriginal658abeed9108d2cfe1f7b59a089b3e3a; ?>
<?php unset($__attributesOriginal658abeed9108d2cfe1f7b59a089b3e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal658abeed9108d2cfe1f7b59a089b3e3a)): ?>
<?php $component = $__componentOriginal658abeed9108d2cfe1f7b59a089b3e3a; ?>
<?php unset($__componentOriginal658abeed9108d2cfe1f7b59a089b3e3a); ?>
<?php endif; ?>
                                                    </span>
                                                </span>
                                                <?php $__errorArgs = ['deadline'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="error invalid-feedback d-block"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="tw-text-sm tw-font-medium tw-text-red-500">
                                            <?php echo e(__('maximum_deadline_limit')); ?>:
                                            <?php echo e($setting->job_deadline_expiration_limit); ?> <?php echo e(__('days')); ?>

                                        </div>
                                    </div>
                                </div>
                                <div id="langues-container">
                                    <button type="button" id="addLangue"
                                        class="badge badge-primary border border-none">Ajouter</button>
                                    <div class="row form-group langues-div">
                                        <div class="col-md-6">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'langue','for' => 'job_langue','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                            <select name="langue[]" class="select2-taggable select2-search form-control"
                                                id="job_langue" required>
                                                <?php $__currentLoopData = $langues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($langue->id == old('langue') ? 'selected' : ''); ?>

                                                        value="<?php echo e($langue->id); ?>"><?php echo e($langue->name); ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['langue'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e(__($message)); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'level','for' => 'job_level','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                            <select name="level[]" class="select2-taggable select2-search form-control"
                                                id="job_level" required>
                                                <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($level->id == old('level') ? 'selected' : ''); ?>

                                                        value="<?php echo e($level->id); ?>"><?php echo e($level->name); ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e(__($message)); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <?php if(config('templatecookie.map_show')): ?>
                                    <div class="col-12 rt-mb-15">
                                        <?php
                                            $map = $setting->default_map;
                                        ?>
                                        <div class="location-wrapper">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h2>
                                                        <?php echo e(__('location')); ?> <span class="text-danger">*</span>
                                                        <small class="h6">
                                                            (<?php echo e(__('click_to_add_a_pointer')); ?>)
                                                        </small>
                                                    </h2>
                                                </div>
                                                <div class="col-md-12 col-sm-12 rt-mb-24">
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

                                                    <div id="google-map-div"
                                                        class="<?php echo e($map == 'google-map' ? '' : 'd-none'); ?>">
                                                        <input id="searchInput" class="mapClass" type="text"
                                                            placeholder="<?php echo e(__('enter_location')); ?>">
                                                        <div class="map mymap" id="google-map"></div>
                                                    </div>
                                                    <div class="<?php echo e($map == 'leaflet' ? '' : 'd-none'); ?>">
                                                        <input type="text" autocomplete="off" id="leaflet_search"
                                                            placeholder="<?php echo e(__('enter_city_name')); ?>"
                                                            class="full-width" />
                                                        <br>
                                                        <div id="leaflet-map"></div>
                                                    </div>
                                                    <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="ml-3 text-md text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-12 mt-4 custom-checkbox-wrap">
                                                    <label class="main tw-text-sm"
                                                        for="remoteWork"><?php echo e(__('fully_remote_position')); ?>-<span
                                                            class="tw-font-medium"><?php echo e(__('worldwide')); ?></span>
                                                        <input type="checkbox" name="is_remote" id="remoteWork"
                                                            value="1" <?php echo e(old('is_remote') ? 'checked' : ''); ?>>
                                                        <span class="custom-checkbox"></span>
                                                    </label>
                                                    <input type="checkbox" name="is_remote" id="remoteWork"
                                                        value="1" <?php echo e(old('is_remote') ? 'checked' : ''); ?>>
                                                </div>

                                                <div class="col-12 mt-4">
                                                    <?php
                                                        $session_location = session()->get('location');
                                                        $session_country =
                                                            $session_location &&
                                                            array_key_exists('country', $session_location)
                                                                ? $session_location['country']
                                                                : '-';
                                                        $session_exact_location =
                                                            $session_location &&
                                                            array_key_exists('exact_location', $session_location)
                                                                ? $session_location['exact_location']
                                                                : '-';
                                                    ?>
                                                    <div class="card-footer row mt-4 border-0">
                                                        <span>
                                                            <img src="<?php echo e(asset('frontend/assets/images/loader.gif')); ?>"
                                                                alt="loading" width="50px" height="50px"
                                                                class="loader_position d-none">
                                                        </span>
                                                        <div class="location_secion">
                                                            <?php echo e(__('country')); ?>: <span
                                                                class="location_country"><?php echo e($session_country); ?></span>
                                                            </br>
                                                            <?php echo e(__('full_address')); ?>: <span
                                                                class="location_full_address"><?php echo e($session_exact_location); ?></span>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'location','required' => true,'class' => 'tw-text-sm tw-mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                    <div class="card-body pt-0">
                                        <div>
                                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('country-state-city', ['row' => true])->html();
} elseif ($_instance->childHasBeenRendered('FeZubXu')) {
    $componentId = $_instance->getRenderedChildComponentId('FeZubXu');
    $componentTag = $_instance->getRenderedChildComponentTagName('FeZubXu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FeZubXu');
} else {
    $response = \Livewire\Livewire::mount('country-state-city', ['row' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('FeZubXu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                            <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="ml-3 text-md text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="post-job-item rt-mb-32 tw-w-full tw-overflow-hidden">
                                <h4 class="f-size-18 ft-wt-5 rt-mb-20 lh-1"><?php echo e(__('benefits')); ?></h4>
                                <div class="benefits-tags" id="benefit_list">
                                    <?php $__currentLoopData = $benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label for="benefit_<?php echo e($benefit->id); ?>">
                                            <input
                                                <?php echo e(old('benefits') ? (in_array($benefit->id, old('benefits')) ? 'checked' : '') : ''); ?>

                                                type="checkbox" id="benefit_<?php echo e($benefit->id); ?>" name="benefits[]"
                                                value="<?php echo e($benefit->id); ?>">
                                            <span><?php echo e($benefit->name); ?></span>
                                        </label>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php $__errorArgs = ['benefits'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="error invalid-feedback d-block"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                <div class="mt-3">
                                    <a onclick="showHideCreateBenefit()" href="javascript:void(0)"
                                        class="text-decoration-underline"><?php echo e(__('create_new')); ?>

                                        <?php echo e(__('benefit')); ?></a>

                                    <div class="d-flex tw-justify-between tw-gap-2 mt-3 d-none" id="create_benefit">
                                        <input value="<?php echo e(old('title')); ?>" name="new_benefit"
                                            class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                            placeholder="<?php echo e(__('benefit')); ?>" id="m">

                                        <button onclick="createBenefit()" type="button"
                                            class="btn btn-primary rt-mr-10">
                                            <span class="button-content-wrapper ">
                                                <span class="button-text">
                                                    <?php echo e(__('create')); ?> <?php echo e(__('benefit')); ?>

                                                </span>
                                                <span class="button-icon align-icon-right">
                                                    <i class="ph ph-plus"></i>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 rt-mb-20 ">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'skills','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                <select id="skills" name="skills[]"
                                    class="select2-taggable form-control <?php $__errorArgs = ['skills'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" multiple>
                                    <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            <?php echo e(old('skills') ? (in_array($skill->id, old('skills')) ? 'selected' : '') : ''); ?>

                                            value="<?php echo e($skill->id); ?>"><?php echo e($skill->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['skills'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><?php echo e(__($message)); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="post-job-item rt-mb-32 tw-w-full tw-overflow-hidden">
                                <h4 class="f-size-18 ft-wt-5 tw-mb-3 lh-1">
                                    <?php echo e(__('job_description')); ?>

                                    <span class="form-label-required text-danger">*</span>
                                </h4>
                                <div class="col-md-12">
                                    <textarea id="image_ckeditorx" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description"><?php echo e(old('description')); ?>

                                    </textarea>
                                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            
                            <?php if(currentCompany()->question_feature_enable): ?>
                                <div x-data="appQuestion()" x-init="select2Alpine"
                                    class="post-job-item rt-mb-15 tw-w-full tw-overflow-hidden ">
                                    <h4 class="f-size-18 ft-wt-5 rt-mb-20 lh-1"><?php echo e(__('add_screening_questions')); ?></h4>
                                    <div class="row">
                                        <div class="rt-mb-20">
                                            <div class="col-lg-12">
                                                <div x-show="isAddingNewQuestion" class="tw-flex justify-content-between">
                                                    <label class="tw-text-sm tw-mb-2 mb-2" for="for">
                                                        <?php echo e(__('create_new_screening_question')); ?>

                                                    </label>
                                                    <a x-show="isAddingNewQuestion" href="#"
                                                        @click.prevent="isAddingNewQuestion = false">
                                                        <?php echo e(__('choose_from_existing_question')); ?>

                                                    </a>
                                                </div>
                                                <div x-show="!isAddingNewQuestion"
                                                    class="tw-flex justify-content-between">
                                                    <label class="tw-text-sm tw-mb-2 mb-2" for="for">
                                                        <?php echo e(__('choose_from_existing_question')); ?>

                                                    </label>
                                                    <a href="#" x-show="!isAddingNewQuestion"
                                                        @click.prevent="isAddingNewQuestion = true"
                                                        href="#"><?php echo e(__('create_new_screening_question')); ?></a>
                                                </div>
                                                <input x-show="isAddingNewQuestion" value="" x-model="newQuestion"
                                                    class="form-control " type="text" placeholder="Add Question">
                                            </div>
                                            <div x-show="isAddingNewQuestion"
                                                class="tw-flex tw-gap-5 mb-3 flex justify-content-between tw-mt-4">
                                                <div class="tw-flex justify-between ">
                                                    <div
                                                        class="ll-radio tw-flex tw-items-center tw-border tw-border-gray-200 tw-rounded tw-ps-1 tw-mr-4">
                                                        <label class="mt-2">
                                                            <input x-model="newQuestionSave" class="tw-scale-150"
                                                                type="checkbox" style="margin-right: 10px">
                                                            <?php echo e(__('save_for_letter')); ?>

                                                        </label>
                                                    </div>
                                                    <div
                                                        class="ll-radio tw-flex tw-items-center tw-border tw-border-gray-200 tw-rounded tw-ps-1">
                                                        <label class="mt-2">
                                                            <input x-model="isRequired" class="tw-scale-150"
                                                                type="checkbox" style="margin-right: 10px">
                                                            <?php echo e(__('candidate_must_answer')); ?>

                                                        </label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button @click.prevent="addQuestion" type="button"
                                                        class="btn btn-primary"> <?php echo e(__('save')); ?> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-show="isAddingNewQuestion == false" class="q-select">
                                        <select id="questionSelect" multiple="multiple" x-ref="select"
                                            data-placeholder="Select Questions" name="companyQuestions[]"
                                            class="select2-taggable form-control">
                                            <option></option>
                                            <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($question->id); ?>"> <?php echo e($question->title); ?>

                                                    <?php echo e($question->required ? '(required)' : ''); ?> </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <div x-show="selectedQuestions.length">
                                        <h4 class="f-size-18 ft-wt-5 rt-mb-20 lh-1 mt-4">
                                            <?php echo e(__('selected_screening_questions')); ?></h4>
                                        <ul>
                                            <template x-for="question in selectedQuestions">
                                                <div class="tw-flex justify-content-between my-2">
                                                    <li class="flex-grow-1"
                                                        x-text="question.required  ? question.title+' (required)' : question.title ">
                                                    </li>
                                                    <div class="cursor-pointer f" style="color:red;">
                                                        <svg @click="remove(question.id)" width="20" height="20"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>

                                                    </div>
                                                </div>
                                            </template>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="row tw-mb-8">
                                <div class="col-12">
                                    <div class="applied-job-on">
                                        <div class="row">
                                            <h2><?php echo e(__('apply_job_on')); ?>:</h2>
                                            <!-- apply_on -->
                                            <div id="applied_on_app"
                                                class="radio-check col-lg-4 d-flex <?php echo e(old('apply_on') === 'app' ? 'checked' : ''); ?>"
                                                onclick="RadioChecked('app')">
                                                <input type="radio" <?php echo e(old('apply_on') === 'app' ? 'checked' : ''); ?>

                                                    checked name="apply_on" value="app" id="app-app">
                                                <label for="app-app">
                                                    <h4 class="d-inline-block"><?php echo e(__('onn')); ?>

                                                        <?php echo e(config('app.name')); ?></h4>
                                                    <p class="tw-mb-0"><?php echo e(__('candidate_will_apply_job_using')); ?>

                                                        <?php echo e(config('app.name')); ?> &
                                                        <?php echo e(__('all_application_will_show_on_your_dashboard')); ?>.</p>
                                                </label>
                                            </div>
                                            <div id="applied_on_custom_url"
                                                class="radio-check col-lg-4 d-flex <?php echo e(old('apply_on') === 'custom_url' ? 'checked' : ''); ?>"
                                                onclick="RadioChecked('custom_url')">
                                                <input type="radio"
                                                    <?php echo e(old('apply_on') === 'custom_url' ? 'checked' : ''); ?>

                                                    name="apply_on" value="custom_url" id="app-custom_url">
                                                <label for="app-custom_url">
                                                    <h4 class="d-inline-block"><?php echo e(__('external_platform')); ?></h4>
                                                    <p class="tw-mb-0">
                                                        <?php echo e(__('candidate_apply_job_on_your_website_all_application_on_your_own_website')); ?>.
                                                    </p>
                                                </label>
                                            </div>
                                            <div id="applied_on_email"
                                                class="radio-check col-lg-4 d-flex <?php echo e(old('apply_on') === 'email' ? 'checked' : ''); ?>"
                                                onclick="RadioChecked('email')">
                                                <input type="radio" <?php echo e(old('apply_on') === 'email' ? 'checked' : ''); ?>

                                                    name="apply_on" value="email" id="app-email">
                                                <label for="app-email">
                                                    <h4 class="d-inline-block"><?php echo e(__('on_your_email')); ?></h4>
                                                    <p class="tw-mb-0">
                                                        <?php echo e(__('candidate_apply_job_on_your_email_address_and_all_application_in_your_email')); ?>.
                                                    </p>
                                                </label>
                                            </div>
                                            <!-- apply_on end-->
                                            <div class="col-12 tw-mt-2 d-none" id="apply_on_custom_url">
                                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'website_url','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                                <div class="fromGroup has-icon2">
                                                    <div class="form-control-icon">
                                                        <input value="<?php echo e(old('apply_url')); ?>" name="apply_url"
                                                            class="form-control <?php $__errorArgs = ['apply_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                            type="url" placeholder="<?php echo e(__('website')); ?>">
                                                        <div class="icon-badge-2 <?php $__errorArgs = ['apply_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> mt-n-11 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
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
                                                        </div>
                                                        <?php $__errorArgs = ['apply_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 tw-mt-2 d-none" id="apply_on_email">
                                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'email_address','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                                <div class="fromGroup has-icon2">
                                                    <div class="form-control-icon">
                                                        <input value="<?php echo e(old('apply_email')); ?>" name="apply_email"
                                                            class="form-control <?php $__errorArgs = ['apply_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                            type="email" placeholder="<?php echo e(__('email_address')); ?>">
                                                        <div class="icon-badge-2 <?php $__errorArgs = ['apply_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> mt-n-11 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                            <?php if (isset($component)) { $__componentOriginalfb6c0846e17f2096e6264e518f1c213b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb6c0846e17f2096e6264e518f1c213b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.envelope-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.envelope-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfb6c0846e17f2096e6264e518f1c213b)): ?>
<?php $attributes = $__attributesOriginalfb6c0846e17f2096e6264e518f1c213b; ?>
<?php unset($__attributesOriginalfb6c0846e17f2096e6264e518f1c213b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfb6c0846e17f2096e6264e518f1c213b)): ?>
<?php $component = $__componentOriginalfb6c0846e17f2096e6264e518f1c213b; ?>
<?php unset($__componentOriginalfb6c0846e17f2096e6264e518f1c213b); ?>
<?php endif; ?>
                                                        </div>
                                                        <?php $__errorArgs = ['apply_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-job-item rt-mb-15 tw-w-full tw-overflow-hidden">
                                <button type="submit" class="btn btn-primary rt-mr-10">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right">
                                            <i class="ph-arrow-right"></i>
                                        </span>
                                        <span class="button-text">
                                            <?php echo e(__('post_job')); ?>

                                        </span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('css'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/assets/css/bootstrap-datepicker.min.css">

        
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
        <?php echo $__env->make('map::links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <style>
            .ck-editor__editable_inline {
                min-height: 300px;
            }

            .mymap {
                border-radius: 12px;
            }

            .mt-n-11 {
                margin-top: -11px;
            }

            .custom-checkbox-wrap .main input:checked~.custom-checkbox:after {
                left: 8% !important;
            }
        </style>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('frontend_scripts'); ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

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
        <script src="<?php echo e(asset('frontend/assets/js/bootstrap-datepicker.min.js')); ?>"></script>
        <script defer src="<?php echo e(asset('backend/js/alpine.min.js')); ?>"></script>


        <script>
            function appQuestion() {
                return {
                    allQuestions: <?php echo json_encode($questions, 15, 512) ?>,
                    selectedQuestions: [],
                    selectedQuestionsIds: [],
                    newQuestion: '',
                    isAddingNewQuestion: false,
                    newQuestionSave: true,
                    isRequired: false,
                    addQuestion: function() {

                        if (!this.newQuestion) return;


                        axios.post('/company/questions', {
                            newQuestion: this.newQuestion,
                            newQuestionSave: this.newQuestionSave,
                            isRequired: this.isRequired

                        }).then((response) => {
                            this.selectedQuestions.push(response.data);
                            this.allQuestions.push(response.data);

                            this.selectedQuestionsIds.push(response.data.id);
                            var optionValue = response.data.id;
                            var optionText = response.data.title;
                            if (response.data.required) {

                                optionText += '(required)'
                            }
                            var newOption = new Option(optionText, optionValue, false, true);
                            this.select2 = $(this.$refs.select).select2();

                            this.select2.append(newOption).trigger('change');

                        })


                        this.newQuestion = "";
                        this.newQuestionSave = true;
                        this.isRequired = false;

                    },
                    remove: function(idToRemove) {
                        this.selectedQuestionsIds = this.selectedQuestionsIds.filter((id) => {
                            return id != idToRemove;
                        })
                        this.selectedQuestions = this.selectedQuestions.filter((ques) => {
                            return ques.id != idToRemove;
                        })
                        this.select2 = $(this.$refs.select).select2();
                        this.select2.val(this.selectedQuestionsIds);
                        this.select2.trigger('change');

                    }
                }
            }

            function select2Alpine() {

                this.select2 = $(this.$refs.select).select2();
                this.select2.on("select2:select", (event) => {
                    var values = [];
                    var old_values = [];

                    // copy all option values from selected
                    $(event.currentTarget).find("option:selected").each(function(i, selected) {
                        values[i] = $(selected).val();
                    });

                    this.selectedQuestionsIds = values;
                    console.log(this.allQuestions);
                    var items = [];

                    this.allQuestions.forEach((item) => {
                        if (values.includes(item.id.toString())) {
                            items.push(item);
                        }

                    });

                    this.selectedQuestions = items;



                });
                this.select2.on("select2:unselect", (event) => {
                    var values = [];
                    $(event.currentTarget).find("option:selected").each(function(i, selected) {
                        values[i] = $(selected).val();
                    });

                    this.selectedQuestionsIds = values;
                    console.log(values);
                    var items = [];

                    this.allQuestions.forEach((item) => {
                        console.log(values);
                        console.log(item.id);
                        if (values.includes(item.id.toString())) {

                            items.push(item);
                        }

                    });

                    this.selectedQuestions = items;


                });
            }
        </script>


        <script>
            ClassicEditor
                .create(document.querySelector('#image_ckeditorx'), {
                    ckfinder: {
                        uploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token()])); ?>"
                    },
                })
                .catch(error => {
                    console.error(error);
                });

            // ClassicEditor
            //     .create(document.querySelector('#image_ckeditor_2'), {
            //         ckfinder: {
            //             uploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token()])); ?>"
            //         },
            //     })
            //     .catch(error => {
            //         console.error(error);
            //     });
        </script>
        <?php if(app()->getLocale() == 'ar'): ?>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ar.min.js
                                                            "></script>
        <?php endif; ?>
        <?php echo $__env->make('map::set-leafletmap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <script>
            var max_days = '<?php echo e($setting->job_deadline_expiration_limit); ?>'

            //init datepicker
            $("#date").attr("autocomplete", "off");
            //init datepicker
            $('#date').off('focus').datepicker({
                format: 'dd-mm-yyyy',
                startDate: '0d',
                endDate: `+${max_days}d`,
                isRTL: "<?php echo e(app()->getLocale() == 'ar' ? true : false); ?>",
                language: "<?php echo e(app()->getLocale()); ?>",
            }).on('click',
                function() {
                    $(this).datepicker('show');
                }
            );
        </script>
        <?php echo $__env->make('map::set-googlemap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <script>
            var salary_mode = "<?php echo old('salary_mode'); ?>";

            if (salary_mode) {
                salaryModeChange(salary_mode);
            }

            function salaryModeChange(param) {
                var value = param;

                if (value === 'range') {
                    $('#custom_salary_part').addClass('d-none');
                    $('.salary_range_part').removeClass('d-none');
                    $('#salary_rangee').prop('checked', true)
                    $('#custom_salary').prop('checked', false)
                } else {
                    $('#custom_salary_part').removeClass('d-none');
                    $('.salary_range_part').addClass('d-none');
                    $('#salary_rangee').prop('checked', false)
                    $('#custom_salary').prop('checked', true)
                }
            }

            function RadioChecked(param) {
                var value = param;
                if (value === 'email') {
                    $('#applied_on_email').addClass('checked');
                    $('#apply_on_custom_url').addClass('d-none');
                    $('#apply_on_email').removeClass('d-none');
                    $('#applied_on_app').removeClass('checked');
                    $('#applied_on_custom_url').removeClass('checked');
                }
                if (value === 'custom_url') {
                    $('#applied_on_custom_url').addClass('checked');
                    $('#apply_on_email').addClass('d-none');
                    $('#apply_on_custom_url').removeClass('d-none');
                    $('#applied_on_app').removeClass('checked');
                    $('#applied_on_email').removeClass('checked');
                }
                if (value === 'app') {
                    $('#applied_on_app').addClass('checked');
                    $('#applied_on_email').removeClass('checked');
                    $('#applied_on_custom_url').removeClass('checked');
                    $('#apply_on_email').addClass('d-none');
                    $('#apply_on_custom_url').addClass('d-none');
                }
            }
            $('.radio-check').on('click', function() {
                $('input:radio', this).prop('checked', true);
            });

            if ($('#app-app').is(':checked')) {
                $('#applied_on_app').addClass('checked');
            }
            if ($('#app-custom_url').is(':checked')) {
                $('#apply_on_custom_url').removeClass('d-none');
            }
            if ($('#app-email').is(':checked')) {
                $('#apply_on_email').removeClass('d-none');
            }

            var apply_url = "<?php echo $errors->first('apply_url'); ?>";
            var apply_url1 = "<?php echo old('apply_email'); ?>";
            var apply_email = "<?php echo $errors->first('apply_email'); ?>";
            var apply_email1 = "<?php echo old('apply_email'); ?>";

            if (apply_url) {
                $('#apply_on_custom_url').removeClass('d-none');
            }
            if (apply_url1) {
                $('#apply_on_custom_url').removeClass('d-none');
            }
            if (apply_email) {
                $('#apply_on_email').removeClass('d-none');
            }
            if (apply_email1) {
                $('#apply_on_email').removeClass('d-none');
            }


            function showHideCreateBenefit() {
                $('#create_benefit').toggleClass('d-none');
            }

            function createBenefit() {
                var benefit = $('input[name="new_benefit"]').val();

                if (benefit == '') {
                    alert('Please enter benefit name');
                    return false;
                }

                axios.post("/job/benefits/create", {
                    benefit: benefit
                }).then((response) => {
                    var data = response.data;

                    if (data.length && typeof data == 'string') {
                        return Swal.fire('Error', data, 'error');
                    }

                    $('#benefit_list').append(`<label for="benefit_${data.id}">
                    <input type="checkbox" id="benefit_${data.id}" name="benefits[]" value="${data.id}">
                    <span>${data.name}</span>
                </label>`);

                    $('input[name="new_benefit"]').val('');
                }).catch((err) => {
                    this.errors = err.response.data.errors;
                });
            }
        </script>
        <script>
            $(document).ready(function() {
                $('#category_id').on('change', function() {

                    var categoryId = $(this).val();

                    if (categoryId) {
                        $.ajax({
                            url: 'http://wura.locale/company/create/job/rolebycategorie/' + categoryId,
                            type: 'GET',
                            dataType: 'json',
                            success: function(data) {
                                $('#role_id').empty(); // Vider la liste actuelle des rôles
                                $('#role_id').append(
                                    '<option value="">Sélectionner un rôle</option>');

                                $.each(data, function(key, value) {
                                    $('#role_id').append('<option value="' + value.id +
                                        '">' + value.name + '</option>');
                                });
                            }
                        });
                    } else {
                        // Si aucune catégorie n'est sélectionnée, réafficher tous les rôles
                        $('#role_id').empty();
                        $('#role_id').append('<option value="">Sélectionner un rôle</option>');

                    }
                });
            });
        </script>
        <script>
            let langueCounter = 0;
            document.getElementById('addLangue').addEventListener('click', function() {
                const langueContainer = document.getElementById('langues-container');
                if (!langueContainer) {
                    console.error("Element with id 'langues-container' not found!");
                    return;
                }
                const divLangue = document.createElement('div');
                divLangue.classList.add('langues-div');
                divLangue.innerHTML = `
        <button type="button" class="btn btn-danger remove-langue" style="margin-top: 10px;">Supprimer</button>
   
   <div class='row'>
        <div class="col-md-6">
                                           <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'langue','for' => 'job_langue_${langueCounter}','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                           <select name="langue[]"
                                               class="form-control select2bs4 <?php $__errorArgs = ['langue'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               id="job_langue_${langueCounter}" required>
                                               <?php $__currentLoopData = $langues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <option <?php echo e($langue->id == old('langue') ? 'selected' : ''); ?>

                                                       value="<?php echo e($langue->id); ?>"><?php echo e($langue->name); ?> </option>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           </select>
                                           <?php $__errorArgs = ['langue'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                               <span class="invalid-feedback" role="alert">
                                                   <strong><?php echo e(__($message)); ?></strong>
                                               </span>
                                           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                       </div>
                                       <div class="col-md-6">
                                           <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'level','for' => 'job_level_${langueCounter}','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                           <select name="level[]"
                                               class="form-control select2bs4 <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               id="job_level_${langueCounter}" required>
                                               <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <option <?php echo e($level->id == old('level') ? 'selected' : ''); ?>

                                                       value="<?php echo e($level->id); ?>"><?php echo e($level->name); ?> </option>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           </select>
                                           <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                               <span class="invalid-feedback" role="alert">
                                                   <strong><?php echo e(__($message)); ?></strong>
                                               </span>
                                           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                       </div>
       </div>
   
                                       `;
                langueContainer.appendChild(divLangue);
                divLangue.querySelector('.remove-langue').addEventListener('click', function() {
                    langueContainer.removeChild(divLangue);
                });
            });
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/frontend/pages/company/postjob.blade.php ENDPATH**/ ?>