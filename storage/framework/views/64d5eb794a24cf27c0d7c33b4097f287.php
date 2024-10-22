<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['countries', 'user', 'organizationTypes', 'industryTypes', 'teamSizes']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['countries', 'user', 'organizationTypes', 'industryTypes', 'teamSizes']); ?>
<?php foreach (array_filter((['countries', 'user', 'organizationTypes', 'industryTypes', 'teamSizes']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form action="<?php echo e(route('company.profile.complete', auth()->user()->id)); ?>" method="post">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    <input type="hidden" name="field" value="profile">
    <fieldset>
        <div class="form-card mb-4">
            <div class="dashboard-account-setting-item pb-0">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label class="body-font-4 d-block text-gray-900 rt-mb-8">
                            <?php echo e(__('organization_type')); ?>

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
                        <select name="organization_type_id"
                            class="select2-taggable <?php $__errorArgs = ['organization_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="organization_type_id">
                            <?php $__currentLoopData = $organizationTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                    <?php echo e($type->id == old('organization_type_id', $user->company->organization_type_id) ? 'selected' : ''); ?>

                                    value="<?php echo e($type->id); ?>">
                                    <?php echo e($type->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['organization_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label class="body-font-4 d-block text-gray-900 rt-mb-8"><?php echo e(__('industry_type')); ?>

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
                        <select type="text"
                            class="select2-taggable <?php $__errorArgs = ['industry_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> text-uppercase"
                            name="industry_type_id" id="industry_type">
                            <?php $__currentLoopData = $industryTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                    <?php echo e($type->id == old('industry_type_id', $user->company->industry_type_id) ? 'selected' : ''); ?>

                                    value="<?php echo e($type->id); ?>">
                                    <?php echo e($type->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['industry_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert"><strong><?php echo e(__($message)); ?></strong></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label class="pointer body-font-4 d-block text-gray-900 rt-mb-8">
                            <?php echo e(__('team_size')); ?>

                        </label>
                        <select type="text" name="team_size_id"
                            class="rt-selectactive <?php $__errorArgs = ['team_size_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="team_size">
                            <option value="" ><?php echo e(__('select_one')); ?></option>
                            <?php $__currentLoopData = $teamSizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                    <?php echo e($size->id == old('team_size_id', $user->company->team_size_id) ? 'selected' : ''); ?>

                                    value="<?php echo e($size->id); ?>">
                                    <?php echo e($size->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['team_size_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert"><strong><?php echo e(__($message)); ?></strong></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label class="pointer body-font-4 d-block text-gray-900 rt-mb-8">
                            <?php echo e(__('website')); ?>

                        </label>
                        <div class="fromGroup has-icon2">
                            <div class="form-control-icon">
                                <input name="website" class="form-control <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    type="text" placeholder="<?php echo e(__('website')); ?>"
                                    value="<?php echo e(old('website', $user->company->website)); ?>">
                                <div class="icon-badge-2">
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
                            </div>
                        </div>
                        <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback d-block" role="alert">
                                <strong><?php echo e(__($message)); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label class="pointer body-font-4 d-block text-gray-900 rt-mb-8">
                            <?php echo e(__('year_of_establishment')); ?>

                        </label>
                        <div class="fromGroup">
                            <div class="form-control-icon date datepicker">
                                <input autocomplete="off" name="establishment_date" placeholder="m/d/y" type="text"
                                    class="form-control <?php $__errorArgs = ['establishment_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="date"
                                    value="<?php echo e($user->company->establishment_date ? date('d-m-Y', strtotime($user->company->establishment_date)) : old('establishment_date')); ?>" />
                                <span class="input-group-addon has-badge">
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
                                <?php $__errorArgs = ['establishment_date'];
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
                            <?php echo e(__('company_vision')); ?>

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
                        <textarea id="default" name="vision" class="ckeditor <?php $__errorArgs = ['vision'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            placeholder="<?php echo e(__('company_vision')); ?>"><?php echo e(old('vision', $user->company->vision)); ?></textarea>
                        <?php $__errorArgs = ['vision'];
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
        <a href="<?php echo e(url('company/account-progress')); ?>">
            <button type="button" class="btn previous bg-gray-50 rt-mr-8">
                <?php echo e(__('previous')); ?>

            </button>
        </a>
        <button type="submit" class="btn next btn-primary">
            <span class="button-content-wrapper ">
                <span class="button-icon align-icon-right">
                    <i class="ph-arrow-right"></i>
                </span>
                <span class="button-text">
                    <?php echo e(__('save_next')); ?>

                </span>
            </span>
        </button>
    </fieldset>
</form>

<?php $__env->startPush('frontend_scripts'); ?>
<script src="<?php echo e(asset('frontend/assets/js/bootstrap-datepicker.min.js')); ?>"></script>
<?php if(app()->getLocale() == 'ar'): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ar.min.js
"></script>
<?php endif; ?>
<script>
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
    <script src="<?php echo e(asset('frontend')); ?>/assets/js/ckeditor.min.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#default'))
            .catch(error => {
                console.error(error);
            });
        //init datepicker
        $("#date").attr("autocomplete", "off");
        //init datepicker
        $('#date').datepicker({
            format: 'dd-mm-yyyy',
            isRTL: "<?php echo e(app()->getLocale() == 'ar' ? true : false); ?>",
            language: "<?php echo e(app()->getLocale()); ?>",
            endDate: new Date()
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\wamp64\www\wura\resources\views/components/website/company/account-progress/profile.blade.php ENDPATH**/ ?>