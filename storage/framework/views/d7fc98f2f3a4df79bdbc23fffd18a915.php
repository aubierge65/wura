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

<form action="<?php echo e(route('company.profile.complete', auth()->user()->id)); ?>" method="post">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    <input type="hidden" name="field" value="contact">
    <fieldset>
        <div class="form-card mb-4">
            <div class="dashboard-account-setting-item pb-0">
                <?php if(config('templatecookie.map_show')): ?>
                    <h6><?php echo e(__('company_location')); ?>

                        <span class="text-danger">*</span>
                        <small class="h6">
                            (<?php echo e(__('click_to_add_a_pointer')); ?>)
                        </small>
                    </h6>
                    <div class="row">
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
                        <?php
                            $map = $setting->default_map;
                        ?>
                        <div class="<?php echo e($map == 'leaflet' ? '' : 'd-none'); ?>">
                            <input type="text" autocomplete="off" id="leaflet_search"
                                placeholder="<?php echo e(__('enter_city_name')); ?>" class="form-control"
                                value="<?php echo e($user->company->exact_location ? $user->company->exact_location : $user->company->full_address); ?>" />
                            <br>
                            <div id="leaflet-map"></div>
                        </div>
                        <div id="google-map-div" class="<?php echo e($map == 'google-map' ? '' : 'd-none'); ?>">
                            <input id="searchInput" class="mapClass" type="text" placeholder="Enter a location">
                            <div class="map mymap" id="google-map"></div>
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
                    <?php
                        $session_location = session()->get('location');
                        $session_country = $session_location && array_key_exists('country', $session_location) ? $session_location['country'] : '-';
                        $session_exact_location = $session_location && array_key_exists('exact_location', $session_location) ? $session_location['exact_location'] : '-';

                        $company_country = $user->company->country;
                        $company_exact_location = $user->company->exact_location;
                    ?>
                    <div class="card-footer row mt-4 border-0">
                        <span>
                            <img src="<?php echo e(asset('frontend/assets/images/loader.gif')); ?>" alt="loading" width="50px"
                                height="50px" class="loader_position d-none">
                        </span>
                        <div class="location_secion">
                            <?php echo e(__('country')); ?>: <span
                                class="location_country"><?php echo e($company_country ?: $session_country); ?></span> <br>
                            <?php echo e(__('full_address')); ?>: <span
                                class="location_full_address"><?php echo e($company_exact_location ?: $session_exact_location); ?></span>
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
                    <div class="card-body pt-0 row">
                        <div class="col-12">
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('country-state-city')->html();
} elseif ($_instance->childHasBeenRendered('FFqkgqD')) {
    $componentId = $_instance->getRenderedChildComponentId('FFqkgqD');
    $componentTag = $_instance->getRenderedChildComponentTagName('FFqkgqD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FFqkgqD');
} else {
    $response = \Livewire\Livewire::mount('country-state-city');
    $html = $response->html();
    $_instance->logRenderedChild('FFqkgqD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
            <div class="dashboard-account-setting-item">
                <h6><?php echo e(__('phone_email')); ?></h6>
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label class="pointer body-font-4 d-block text-gray-900 rt-mb-8">
                            <?php echo e(__('phone')); ?>

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
                        <input class="phonecode <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone"
                            type="text" value="<?php echo e(old('phone', $user->contactInfo->phone)); ?>"
                            placeholder="<?php echo e(__('phone')); ?>" />
                        <?php $__errorArgs = ['phone'];
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
                    <div class="col-lg-6 mb-3">
                        <label class="pointer body-font-4 d-block text-gray-900 rt-mb-8">
                            <?php echo e(__('email')); ?>

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
                        <div class="fromGroup has-icon2">
                            <div class="form-control-icon">
                                <input class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                    type="text" placeholder="<?php echo e(__('email_address')); ?>"
                                    value="<?php echo e(old('email', $user->contactInfo->email)); ?>">
                                <div class="icon-badge-2">
                                    <?php if (isset($component)) { $__componentOriginalfb6c0846e17f2096e6264e518f1c213b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb6c0846e17f2096e6264e518f1c213b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.envelope-icon','data' => ['width' => '24','height' => '24']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.envelope-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '24','height' => '24']); ?>
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
                            </div>
                        </div>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback  d-block" role="alert">
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
        <a href="<?php echo e(url('company/account-progress?social')); ?>">
            <button type="button" class="btn previous bg-gray-50 rt-mr-8">
                <?php echo e(__('previous')); ?>

            </button>
        </a>
        <button type="submit" class="btn next btn-primary hide-menu-btn">
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
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/components/website/company/account-progress/contact.blade.php ENDPATH**/ ?>