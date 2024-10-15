<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['user']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['user']); ?>
<?php foreach (array_filter((['user']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form action="<?php echo e(route('company.profile.complete', auth()->user()->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    <input type="hidden" name="field" value="personal">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    <fieldset>
        <div class="form-card">
            <div class="personal-profile-picture-wrap">
                <div class="company-logo-banner-info">
                    <h6><?php echo e(__('logo_banner_image')); ?></h6>
                    <div class="row">
                         <?php if (isset($component)) { $__componentOriginal2c8d19cfecf261b8953735f65f7e32bd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2c8d19cfecf261b8953735f65f7e32bd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.photo-section','data' => ['user' => $user]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.photo-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2c8d19cfecf261b8953735f65f7e32bd)): ?>
<?php $attributes = $__attributesOriginal2c8d19cfecf261b8953735f65f7e32bd; ?>
<?php unset($__attributesOriginal2c8d19cfecf261b8953735f65f7e32bd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2c8d19cfecf261b8953735f65f7e32bd)): ?>
<?php $component = $__componentOriginal2c8d19cfecf261b8953735f65f7e32bd; ?>
<?php unset($__componentOriginal2c8d19cfecf261b8953735f65f7e32bd); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal0108c29abd52d831e6720493e3345ebe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0108c29abd52d831e6720493e3345ebe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.banner-section','data' => ['user' => $user]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.banner-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0108c29abd52d831e6720493e3345ebe)): ?>
<?php $attributes = $__attributesOriginal0108c29abd52d831e6720493e3345ebe; ?>
<?php unset($__attributesOriginal0108c29abd52d831e6720493e3345ebe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0108c29abd52d831e6720493e3345ebe)): ?>
<?php $component = $__componentOriginal0108c29abd52d831e6720493e3345ebe; ?>
<?php unset($__componentOriginal0108c29abd52d831e6720493e3345ebe); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="dashboard-account-setting-item">
                <h6><?php echo e(__('company_information')); ?></h6>
                <div class="row">
                    <div class="col-12 mb-3">
                        <label class="pointer body-font-4 d-block text-gray-900 rt-mb-8">
                            <?php echo e(__('company_name')); ?>

                            <?php if (isset($component)) { $__componentOriginal2c5729992783a21c6ac1f548a7f68506 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2c5729992783a21c6ac1f548a7f68506 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.required','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.required'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2c5729992783a21c6ac1f548a7f68506)): ?>
<?php $attributes = $__attributesOriginal2c5729992783a21c6ac1f548a7f68506; ?>
<?php unset($__attributesOriginal2c5729992783a21c6ac1f548a7f68506); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2c5729992783a21c6ac1f548a7f68506)): ?>
<?php $component = $__componentOriginal2c5729992783a21c6ac1f548a7f68506; ?>
<?php unset($__componentOriginal2c5729992783a21c6ac1f548a7f68506); ?>
<?php endif; ?>
                        </label>
                        <div class="fromGroup">
                            <div class="form-control-icon">
                                <input class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                    name="name" value="<?php echo e($user->name ?? old('name')); ?>">

                                <?php $__errorArgs = ['name'];
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
                    <div class="col-12">
                        <label class="body-font-4 d-block text-gray-900 rt-mb-8">
                            <?php echo e(__('biography')); ?>

                            <?php if (isset($component)) { $__componentOriginal2c5729992783a21c6ac1f548a7f68506 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2c5729992783a21c6ac1f548a7f68506 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.required','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.required'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2c5729992783a21c6ac1f548a7f68506)): ?>
<?php $attributes = $__attributesOriginal2c5729992783a21c6ac1f548a7f68506; ?>
<?php unset($__attributesOriginal2c5729992783a21c6ac1f548a7f68506); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2c5729992783a21c6ac1f548a7f68506)): ?>
<?php $component = $__componentOriginal2c5729992783a21c6ac1f548a7f68506; ?>
<?php unset($__componentOriginal2c5729992783a21c6ac1f548a7f68506); ?>
<?php endif; ?>
                        </label>
                        <textarea rows="8" class="form-control <?php $__errorArgs = ['bio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="bio"
                            placeholder="<?php echo e(__('biography')); ?>" id="image_ckeditor"><?php echo e($user->company->bio ?? old('bio')); ?></textarea>
                        <?php $__errorArgs = ['bio'];
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
        <button type="submit" class="btn next btn-primary">
            <?php echo e(__('save_next')); ?>

        </button>
    </fieldset>
</form>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/website/company/account-progress/personal.blade.php ENDPATH**/ ?>