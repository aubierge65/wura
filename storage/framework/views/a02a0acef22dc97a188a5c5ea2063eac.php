<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'user' => '',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'user' => '',
]); ?>
<?php foreach (array_filter(([
    'user' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="col-lg-4">
    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'upload_logo','class' => 'pointer body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    <div id="photo-uploadMode" class="<?php echo e($user->company->logo ? 'd-none' : ''); ?>">
        <div class="profile-image-upload-wrap">
            <input name="image" class="profile-file-upload-input"
                type='file' onchange="readURL(this);" accept="image/*" />
            <div class="drag-text">
                <svg width="48" height="49" viewBox="0 0 48 49"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA"
                        stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M24 24.5V42.5" stroke="#ADB2BA" stroke-width="3"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M40.7809 37.2809C42.7316 36.2175 44.2726 34.5347 45.1606 32.4982C46.0487 30.4617 46.2333 28.1874 45.6853 26.0343C45.1373 23.8812 43.8879 21.972 42.1342 20.6078C40.3806 19.2437 38.2226 18.5024 36.0009 18.5009H33.4809C32.8755 16.1594 31.7472 13.9856 30.1808 12.1429C28.6144 10.3002 26.6506 8.83664 24.4371 7.86216C22.2236 6.88767 19.818 6.42766 17.4011 6.51671C14.9843 6.60576 12.619 7.24154 10.4833 8.37628C8.34747 9.51101 6.49672 11.1152 5.07014 13.0681C3.64356 15.0211 2.67828 17.272 2.24686 19.6517C1.81544 22.0314 1.92911 24.478 2.57932 26.8075C3.22954 29.1369 4.39938 31.2887 6.0009 33.1009"
                        stroke="#ADB2BA" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA"
                        stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

                <h3><?php echo e(__('browse_photo_or_drop_here')); ?></h3>
                <p><?php echo e(__('photo_larger_than_pixels_work_best_max_photo_size_mb')); ?>

                </p>
            </div>
        </div>
        <div class="profile-file-upload-content">
            <img class="profile-file-upload-image" src="#"
                alt="your image" />
            <div class="image-title-wrap">
                <button type="button" class="profile-remove-image"><svg
                        width="20" height="20" viewBox="0 0 20 20"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.875 4.375L3.125 4.37501" stroke="#E05151"
                            stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M8.125 8.125V13.125" stroke="#E05151"
                            stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M11.875 8.125V13.125" stroke="#E05151"
                            stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"
                            stroke="#E05151" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"
                            stroke="#E05151" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    </span></button>
            </div>
        </div>
    </div>
    <div id="photo-oldMode" class="<?php echo e($user->company->logo ? '' : 'd-none'); ?>">
        <div class="profile-file-upload-content2">
            <img class="profile-file-upload-image" src="<?php echo e($user->company->logo_url); ?>"
                alt="your image" />
            <div onclick="UploadMode('photo')" class="image-title-wrap">
                <button type="button" class="profile-remove-image"><svg
                        width="20" height="20" viewBox="0 0 20 20"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.875 4.375L3.125 4.37501" stroke="#E05151"
                            stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M8.125 8.125V13.125" stroke="#E05151"
                            stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M11.875 8.125V13.125" stroke="#E05151"
                            stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"
                            stroke="#E05151" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"
                            stroke="#E05151" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    </span></button>
            </div>
        </div>
    </div>
    <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2">Image Size: 68x68</p>
    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-danger">
            <strong><?php echo e(__($message)); ?></strong>
        </span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/website/company/photo-section.blade.php ENDPATH**/ ?>