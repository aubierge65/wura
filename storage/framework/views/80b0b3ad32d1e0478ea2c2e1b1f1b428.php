<?php $__env->startSection('title'); ?>
    <?php echo e(__('update')); ?> <?php echo e(__('employer')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <form class="form-horizontal" action="<?php echo e(route('company.update', $company->id)); ?>" method="POST"
            enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title line-height-36"><?php echo e(__('update')); ?> <?php echo e(__('employer')); ?></h4>
                    <button type="submit"
                        class="btn bg-success float-right d-flex align-items-center justify-content-center">
                        <i class="fas fa-sync mr-1"></i>
                        <?php echo e(__('save')); ?>

                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <?php echo e(__('account_details')); ?>

                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'employer_name','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'text','name' => 'name','placeholder' => 'name','value' => ''.e(old('name', $user->name)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-show-errors' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'username','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'text','name' => 'username','placeholder' => 'username','value' => ''.e(old('username', $user->username)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                                </div>
                                <div class="form-group col-sm-6">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'email','name' => 'email','placeholder' => 'email','value' => ''.e(old('email', $user->email)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                                </div>

                            </div>
                            <div class="form-group">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'change_password'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'password','name' => 'password','placeholder' => 'password'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <?php if(config('templatecookie.map_show')): ?>
                            <div class="card-header">
                                <?php echo e(__('location')); ?>

                                <span class="text-red font-weight-bold">*</span>
                                <small class="h6">
                                    (<?php echo e(__('click_to_add_a_pointer')); ?>)
                                </small>
                            </div>
                            <div class="card-body">
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
                                <div id="google-map-div" class="<?php echo e($map == 'google-map' ? '' : 'd-none'); ?>">
                                    <input id="searchInput" class="mapClass" type="text" placeholder="Enter a location">
                                    <div class="map mymap" id="google-map"></div>
                                </div>
                                <div class="<?php echo e($map == 'leaflet' ? '' : 'd-none'); ?>">
                                    <input type="text" autocomplete="off" id="leaflet_search"
                                        placeholder="<?php echo e(__('enter_city_name')); ?>" class="form-control" /> <br>
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
                            <?php
                                $location = session()->get('location');

                            ?>
                            <div class="card-footer location_footer d-none">
                                <span>
                                    <img src="<?php echo e(asset('frontend/assets/images/loader.gif')); ?>" alt="loading"
                                        width="50px" height="50px" class="loader_position d-none">
                                </span>
                                <div class="location_secion">
                                    <?php echo e(__('country')); ?>: <span
                                        class="location_country"><?php echo e($location && array_key_exists('country', $location) ? $location['country'] : '-'); ?></span>
                                    <br>
                                    <?php echo e(__('full_address')); ?>: <span
                                        class="location_full_address"><?php echo e($location && array_key_exists('exact_location', $location) ? $location['exact_location'] : '-'); ?></span>
                                </div>
                            </div>
                        <?php else: ?>
                            <?php
                                session([
                                    'selectedCountryId' => null,
                                    'selectedStateId' => null,
                                    'selectedCityId' => null,
                                ]);
                                session([
                                    'selectedCountryId' => $company->country,
                                    'selectedStateId' => $company->region,
                                    'selectedCityId' => $company->district,
                                ]);
                            ?>
                            <div class="card-header border-0">
                                <?php echo e(__('location')); ?>

                            </div>
                            <div class="card-body pt-0 row">
                                <div class="col-12">
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('country-state-city')->html();
} elseif ($_instance->childHasBeenRendered('gWJOgie')) {
    $componentId = $_instance->getRenderedChildComponentId('gWJOgie');
    $componentTag = $_instance->getRenderedChildComponentTagName('gWJOgie');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gWJOgie');
} else {
    $response = \Livewire\Livewire::mount('country-state-city');
    $html = $response->html();
    $_instance->logRenderedChild('gWJOgie', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                    <div class="card">
                        <div class="card-header">
                            <?php echo e(__('contact')); ?>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'phone'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'text','name' => 'contact_phone','placeholder' => 'phone','value' => ''.e(old('contact_phone', $user->contactInfo->phone)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                                </div>
                                <div class="form-group col-sm-6">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'email','name' => 'contact_email','placeholder' => 'email','value' => ''.e(old('contact_email', $user->contactInfo->email)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <?php echo e(__('images')); ?>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-xl-4">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'logo','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input name="logo" type="file" data-show-errors="true" data-width="50%"
                                        class="dropify" data-default-file="<?php echo e($company->logo_url); ?>">
                                    <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">
                                        Recommended Image Size: 68x68</p>
                                </div>
                                <div class="form-group col-xl-8">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'banner','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input name="image" type="file" data-show-errors="true" data-width="100%"
                                        data-default-file="<?php echo e($company->banner_url); ?>" class="dropify">
                                    <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">
                                        Recommended Image Size: 1920x312</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <?php echo e(__('social_details')); ?>

                        </div>
                        <div class="card-body">
                            <div id="multiple_feature_part">
                                <div class="row justify-content-center">
                                    <div class="form-group col-md-4">
                                        <select
                                            class="form-control select2bs4 <?php $__errorArgs = ['social_media'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="social_media[]">
                                            <option value="" class="d-none" disabled><?php echo e(__('select_one')); ?>

                                            </option>
                                            <option <?php echo e(old('social_media') == 'facebook' ? 'selected' : ''); ?>

                                                value="facebook"><?php echo e(__('facebook')); ?></option>
                                            <option <?php echo e(old('social_media') == 'twitter' ? 'selected' : ''); ?>

                                                value="twitter"><?php echo e(__('twitter')); ?></option>
                                            <option <?php echo e(old('social_media') == 'instagram' ? 'selected' : ''); ?>

                                                value="instagram"><?php echo e(__('instagram')); ?>

                                            </option>
                                            <option <?php echo e(old('social_media') == 'youtube' ? 'selected' : ''); ?>

                                                value="youtube"><?php echo e(__('youtube')); ?></option>
                                            <option <?php echo e(old('social_media') == 'linkedin' ? 'selected' : ''); ?>

                                                value="linkedin"><?php echo e(__('linkedin')); ?></option>
                                            <option <?php echo e(old('social_media') == 'pinterest' ? 'selected' : ''); ?>

                                                value="pinterest"><?php echo e(__('pinterest')); ?>

                                            </option>
                                            <option <?php echo e(old('social_media') == 'reddit' ? 'selected' : ''); ?>

                                                value="reddit"><?php echo e(__('reddit')); ?></option>
                                            <option <?php echo e(old('social_media') == 'github' ? 'selected' : ''); ?>

                                                value="github"><?php echo e(__('github')); ?></option>
                                            <option <?php echo e(old('social_media') == 'other' ? 'selected' : ''); ?> value="other">
                                                <?php echo e(__('other')); ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="url" name="url[]" class="form-control">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <a role="button" onclick="add_features_field()"
                                            class="btn bg-primary text-light"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                                <?php $__empty_1 = true; $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="row justify-content-center">
                                        <div class="form-group col-md-4">
                                            <select class="form-control <?php $__errorArgs = ['social_media'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="social_media[]">
                                                <option value="" class="d-none" disabled><?php echo e(__('select_one')); ?>

                                                </option>
                                                <option <?php echo e($social->social_media == 'facebook' ? 'selected' : ''); ?>

                                                    value="facebook"><?php echo e(__('facebook')); ?></option>
                                                <option <?php echo e($social->social_media == 'twitter' ? 'selected' : ''); ?>

                                                    value="twitter"><?php echo e(__('twitter')); ?></option>
                                                <option <?php echo e($social->social_media == 'instagram' ? 'selected' : ''); ?>

                                                    value="instagram"><?php echo e(__('instagram')); ?>

                                                </option>
                                                <option <?php echo e($social->social_media == 'youtube' ? 'selected' : ''); ?>

                                                    value="youtube"><?php echo e(__('youtube')); ?></option>
                                                <option <?php echo e($social->social_media == 'linkedin' ? 'selected' : ''); ?>

                                                    value="linkedin"><?php echo e(__('linkedin')); ?></option>
                                                <option <?php echo e($social->social_media == 'pinterest' ? 'selected' : ''); ?>

                                                    value="pinterest"><?php echo e(__('pinterest')); ?>

                                                </option>
                                                <option <?php echo e($social->social_media == 'reddit' ? 'selected' : ''); ?>

                                                    value="reddit"><?php echo e(__('reddit')); ?></option>
                                                <option <?php echo e($social->social_media == 'github' ? 'selected' : ''); ?>

                                                    value="github"><?php echo e(__('github')); ?></option>
                                                <option <?php echo e($social->social_media == 'other' ? 'selected' : ''); ?>

                                                    value="other">
                                                    <?php echo e(__('other')); ?></option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="url" name="url[]" class="form-control"
                                                value="<?php echo e($social->url); ?>" placeholder="<?php echo e(__('url')); ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <a role="button" id="remove_item" class="btn bg-danger text-light"><i
                                                    class="fas fa-times"></i></a>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <?php echo e(__('profile_details')); ?>

                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'organization_type'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <select name="organization_type_id"
                                        class="form-control select2bs4 <?php echo e(error('organization_type_id')); ?>"
                                        id="organization_type_id">
                                        <?php $__currentLoopData = $organization_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                <?php echo e($type->id == old('organization_type_id', $company->organization_type_id) ? 'selected' : ''); ?>

                                                value="<?php echo e($type->id); ?>">
                                                <?php echo e($type->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'organization_type_id'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Error::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldadd8e15a92d72355fc41612ab7bc134)): ?>
<?php $attributes = $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134; ?>
<?php unset($__attributesOriginaldadd8e15a92d72355fc41612ab7bc134); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldadd8e15a92d72355fc41612ab7bc134)): ?>
<?php $component = $__componentOriginaldadd8e15a92d72355fc41612ab7bc134; ?>
<?php unset($__componentOriginaldadd8e15a92d72355fc41612ab7bc134); ?>
<?php endif; ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'industry_type'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <select name="industry_type_id"
                                        class="form-control select2bs4 <?php echo e(error('industry_type_id')); ?>"
                                        id="organization_type_id">
                                        <option value="" class="d-none">
                                            <?php echo e(__('select_one')); ?>

                                        </option>
                                        <?php $__currentLoopData = $industry_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                <?php echo e($type->id == old('industry_type_id', $company->industry_type_id) ? 'selected' : ''); ?>

                                                value="<?php echo e($type->id); ?>">
                                                <?php echo e($type->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'industry_type_id'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Error::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldadd8e15a92d72355fc41612ab7bc134)): ?>
<?php $attributes = $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134; ?>
<?php unset($__attributesOriginaldadd8e15a92d72355fc41612ab7bc134); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldadd8e15a92d72355fc41612ab7bc134)): ?>
<?php $component = $__componentOriginaldadd8e15a92d72355fc41612ab7bc134; ?>
<?php unset($__componentOriginaldadd8e15a92d72355fc41612ab7bc134); ?>
<?php endif; ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'team_size','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <select name="team_size_id" class="form-control <?php echo e(error('team_size_id')); ?>"
                                        id="organization_type_id">
                                        <option value="" class="d-none">
                                            <?php echo e(__('select_one')); ?>

                                        </option>
                                        <?php $__currentLoopData = $team_sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                <?php echo e($size->id == old('team_size_id', $company->team_size_id) ? 'selected' : ''); ?>

                                                value="<?php echo e($size->id); ?>">
                                                <?php echo e($size->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'team_size_id'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Error::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldadd8e15a92d72355fc41612ab7bc134)): ?>
<?php $attributes = $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134; ?>
<?php unset($__attributesOriginaldadd8e15a92d72355fc41612ab7bc134); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldadd8e15a92d72355fc41612ab7bc134)): ?>
<?php $component = $__componentOriginaldadd8e15a92d72355fc41612ab7bc134; ?>
<?php unset($__componentOriginaldadd8e15a92d72355fc41612ab7bc134); ?>
<?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group datepicker col-md-6">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'website','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'text','name' => 'website','placeholder' => 'website','value' => ''.e(old('website', $company->website)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'establishment_date'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Error::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldadd8e15a92d72355fc41612ab7bc134)): ?>
<?php $attributes = $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134; ?>
<?php unset($__attributesOriginaldadd8e15a92d72355fc41612ab7bc134); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldadd8e15a92d72355fc41612ab7bc134)): ?>
<?php $component = $__componentOriginaldadd8e15a92d72355fc41612ab7bc134; ?>
<?php unset($__componentOriginaldadd8e15a92d72355fc41612ab7bc134); ?>
<?php endif; ?>
                                </div>
                                <div class="form-group datepicker col-md-6">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'establishment_date','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'text','name' => 'establishment_date','placeholder' => 'select_one','id' => 'establishment_date','value' => ''.e(old('establishment_date', formatTime($company->establishment_date, 'd-m-Y'))).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'establishment_date'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Error::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldadd8e15a92d72355fc41612ab7bc134)): ?>
<?php $attributes = $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134; ?>
<?php unset($__attributesOriginaldadd8e15a92d72355fc41612ab7bc134); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldadd8e15a92d72355fc41612ab7bc134)): ?>
<?php $component = $__componentOriginaldadd8e15a92d72355fc41612ab7bc134; ?>
<?php unset($__componentOriginaldadd8e15a92d72355fc41612ab7bc134); ?>
<?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'bio','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <textarea id="image_ckeditor" rows="8" name="bio" placeholder="<?php echo e(__('bio')); ?>"
                                        class="form-control"><?php echo e(old('bio', $company->bio)); ?></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'vision','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <textarea id="image_ckeditor_2" rows="8" name="vision" placeholder="<?php echo e(__('vision')); ?>"
                                        class="form-control"><?php echo e(old('vision', $company->vision)); ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/assets/css/bootstrap-datepicker.min.css">

    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
    <!-- >=>Leaflet Map<=< -->
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
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
    <script src="<?php echo e(asset('backend/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap-datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/dropify/js/dropify.min.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/assets/js/axios.min.js"></script>
    <?php if(app()->getLocale() == 'ar'): ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ar.min.js
                    "></script>
    <?php endif; ?>
    <script>
        $('.dropify').dropify();

        //init datepicker
        $(document).ready(function() {
            $('#establishment_date').datepicker({
                format: 'dd-mm-yyyy',
                isRTL: "<?php echo e(app()->getLocale() == 'ar' ? true : false); ?>",
                language: "<?php echo e(app()->getLocale()); ?>",
            });
        });

        $(document).on("click", "#remove_item", function() {
            $(this).parent().parent('div').remove();
        });

        function add_features_field() {
            $("#multiple_feature_part").append(`
            <div class="row justify-content-center">
                <div class="form-group col-md-4">
                    <select class="form-control <?php $__errorArgs = ['social_media'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        name="social_media[]">
                        <option value="" class="d-none" disabled><?php echo e(__('select_one')); ?>

                        </option>
                        <option <?php echo e(old('social_media') == 'facebook' ? 'selected' : ''); ?>

                            value="facebook"><?php echo e(__('facebook')); ?></option>
                        <option <?php echo e(old('social_media') == 'twitter' ? 'selected' : ''); ?>

                            value="twitter"><?php echo e(__('twitter')); ?></option>
                        <option <?php echo e(old('social_media') == 'instagram' ? 'selected' : ''); ?>

                            value="instagram"><?php echo e(__('instagram')); ?>

                        </option>
                        <option <?php echo e(old('social_media') == 'youtube' ? 'selected' : ''); ?>

                            value="youtube"><?php echo e(__('youtube')); ?></option>
                        <option <?php echo e(old('social_media') == 'linkedin' ? 'selected' : ''); ?>

                            value="linkedin"><?php echo e(__('linkedin')); ?></option>
                        <option <?php echo e(old('social_media') == 'pinterest' ? 'selected' : ''); ?>

                            value="pinterest"><?php echo e(__('pinterest')); ?>

                        </option>
                        <option <?php echo e(old('social_media') == 'reddit' ? 'selected' : ''); ?>

                            value="reddit"><?php echo e(__('reddit')); ?></option>
                        <option <?php echo e(old('social_media') == 'github' ? 'selected' : ''); ?>

                            value="github"><?php echo e(__('github')); ?></option>
                        <option <?php echo e(old('social_media') == 'other' ? 'selected' : ''); ?> value="other">
                            <?php echo e(__('other')); ?></option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <input type="url" name="url[]" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <a role="button" id="remove_item"
                        class="btn bg-danger text-light"><i class="fas fa-times"></i></a>
                </div>
            </div>
            `);
        }
    </script>

    
    <?php echo $__env->make('map::set-edit-leafletmap', ['lat' => $company->lat, 'long' => $company->long], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ============== google map ========= -->
    <?php if (isset($component)) { $__componentOriginal8bb4a77cbcdce0dc52116df2fe1539c4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8bb4a77cbcdce0dc52116df2fe1539c4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.map.google-map-check','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.map.google-map-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8bb4a77cbcdce0dc52116df2fe1539c4)): ?>
<?php $attributes = $__attributesOriginal8bb4a77cbcdce0dc52116df2fe1539c4; ?>
<?php unset($__attributesOriginal8bb4a77cbcdce0dc52116df2fe1539c4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8bb4a77cbcdce0dc52116df2fe1539c4)): ?>
<?php $component = $__componentOriginal8bb4a77cbcdce0dc52116df2fe1539c4; ?>
<?php unset($__componentOriginal8bb4a77cbcdce0dc52116df2fe1539c4); ?>
<?php endif; ?>
    <script>
        function initMap() {
            var token = "<?php echo e($setting->google_map_key); ?>";
            var oldlat = <?php echo $company->lat ? $company->lat : $setting->default_lat; ?>;
            var oldlng = <?php echo $company->long ? $company->long : $setting->default_long; ?>;

            // Create a Google Map instance

            const map = new google.maps.Map(document.getElementById("google-map"), {
                zoom: 5,
                center: {
                    lat: oldlat,
                    lng: oldlng
                },
            });

            const image = "https://gisgeography.com/wp-content/uploads/2018/01/map-marker-3-116x200.png";

            // Create a marker on the map
            const beachMarker = new google.maps.Marker({

                draggable: true,
                position: {
                    lat: oldlat,
                    lng: oldlng
                },
                map,
                // icon: image
            });

            // Function to handle updating the map marker and fetching location data
            function handleMapUpdate(lat, lng) {
                // Update the position of the existing marker with the new latitude and longitude
                beachMarker.setPosition({
                    lat: lat,
                    lng: lng
                });

                // Fetch location information using Google Maps Geocoding API
                axios.post(
                    `https://maps.googleapis.com/maps/api/geocode/json?latlng=${lat},${lng}&key=${token}`
                ).then((data) => {
                    // Check if there's an error message in the API response
                    if (data.data.error_message) {
                        toastr.error(data.data.error_message, 'Error!');
                        toastr.error('Your location is not set due to an incorrect API key.', 'Error!');
                    }

                    // Extract relevant location data from the API response
                    const total = data.data.results.length;
                    let amount = '';
                    if (total > 4) {
                        amount = total - 3;
                    }
                    const result = data.data.results.slice(amount);
                    let country = '';
                    let region = '';
                    let district = '';

                    // Iterate through the results to extract country, region, and district
                    for (let index = 0; index < result.length; index++) {
                        const element = result[index];

                        if (element.types[0] == 'country') {
                            country = element.formatted_address;
                        }
                        if (element.types[0] == 'administrative_area_level_1') {
                            const str = element.formatted_address;
                            const first = str.split(' ').shift();
                            region = first;
                        }
                        if (element.types[0] == 'administrative_area_level_2') {
                            const str = element.formatted_address;
                            const first = str.split(' ').shift();
                            district = first;
                        }
                    }

                    // Create a form and populate it with location data
                    var form = new FormData();
                    form.append('lat', lat);
                    form.append('lng', lng);
                    form.append('country', country);
                    form.append('region', region);
                    form.append('exact_location', district + "," + region + "," + country);

                    // Store location data in session
                    setLocationSession(form);

                    // Update the UI with the fetched location information
                    $('.location_country').text(country);
                    $('.location_full_address').text(district + "," + region);
                    $('.loader_position').addClass('d-none');
                    $('.location_secion').removeClass('d-none');
                    $('.location_footer').removeClass('d-none');
                }).catch((error) => {
                    // Handle errors and display an error message
                    toastr.error('Something Went Wrong', 'Error!');
                    console.log(error);
                });
            }

            // Listen for a click event on the map
            google.maps.event.addListener(map, 'click',
                function(event) {
                    // Show loader and hide location section
                    $('.loader_position').removeClass('d-none');
                    $('.location_secion').addClass('d-none');

                    // Get latitude and longitude from the event
                    pos = event.latLng;
                    beachMarker.setPosition(pos);
                    let lat = beachMarker.position.lat();
                    let lng = beachMarker.position.lng();

                    // Make a request to Google Geocoding API
                    axios.post(
                        `https://maps.googleapis.com/maps/api/geocode/json?latlng=${lat},${lng}&key=${token}`
                    ).then((data) => {
                        // Check for API error message
                        if (data.data.error_message) {
                            toastr.error(data.data.error_message, 'Error!');
                            toastr.error('Your location is not set because of a wrong API key.', 'Error!');
                        }

                        // Process geocoding results
                        const total = data.data.results.length;
                        let amount = '';
                        if (total > 4) {
                            amount = total - 3;
                        }
                        const result = data.data.results.slice(amount);
                        let country = '';
                        let region = '';
                        let district = '';

                        // Extract relevant location information from results
                        for (let index = 0; index < result.length; index++) {
                            const element = result[index];

                            if (element.types[0] == 'country') {
                                country = element.formatted_address;
                            }
                            if (element.types[0] == 'administrative_area_level_1') {
                                const str = element.formatted_address;
                                const first = str.split(' ').shift();
                                region = first;
                            }
                            if (element.types[0] == 'administrative_area_level_2') {
                                const str = element.formatted_address;
                                const first = str.split(' ').shift();
                                district = first;
                            }
                        }

                        // Create a FormData object with location details
                        var form = new FormData();
                        form.append('lat', lat);
                        form.append('lng', lng);
                        form.append('country', country);
                        form.append('region', region);
                        form.append('exact_location', district + "," + region + "," + country);

                        // Set location session data
                        setLocationSession(form);

                        // Update UI elements with location information
                        $('.location_country').text(country);
                        $('.location_full_address').text(district + "," + region);
                        $('.loader_position').addClass('d-none');
                        $('.location_secion').removeClass('d-none');
                    });
                });


            // Listen for a dragend event on the marker
            google.maps.event.addListener(beachMarker, 'dragend',
                function() {
                    // Show loader and hide location section
                    $('.loader_position').removeClass('d-none');
                    $('.location_secion').addClass('d-none');

                    // Get latitude and longitude from the beachMarker
                    let lat = beachMarker.position.lat();
                    let lng = beachMarker.position.lng();

                    // Send a geocoding request to Google Maps API
                    axios.post(
                        `https://maps.googleapis.com/maps/api/geocode/json?latlng=${lat},${lng}&key=${token}`
                    ).then((data) => {
                        // Check if there's an error message in the response
                        if (data.data.error_message) {
                            // Display error messages using toastr library
                            toastr.error(data.data.error_message, 'Error!');
                            toastr.error('Your location is not set because of a wrong API key.', 'Error!');
                        }

                        // Calculate how many results to skip
                        const total = data.data.results.length;
                        let amount = '';
                        if (total > 4) {
                            amount = total - 3;
                        }

                        // Slice the results array based on the calculated amount
                        const result = data.data.results.slice(amount);

                        let country = '';
                        let region = '';
                        let district = '';

                        // Loop through the results to extract location information
                        for (let index = 0; index < result.length; index++) {
                            const element = result[index];

                            // Check the type of location and extract relevant information
                            if (element.types[0] == 'country') {
                                country = element.formatted_address;
                            }
                            if (element.types[0] == 'administrative_area_level_1') {
                                const str = element.formatted_address;
                                const first = str.split(',').shift();
                                region = first;
                            }
                            if (element.types[0] == 'administrative_area_level_2') {
                                const str = element.formatted_address;
                                const first = str.split(' ').shift();
                                district = first;
                            }
                        }

                        // Create a FormData object to send the location information
                        var form = new FormData();
                        form.append('lat', lat);
                        form.append('lng', lng);
                        form.append('country', country);
                        form.append('region', region);
                        form.append('exact_location', district + "," + region + "," + country);

                        // Set the location session using the FormData
                        setLocationSession(form);

                        // Update UI with location information
                        $('.location_country').text(country);
                        $('.location_full_address').text(district + "," + region);

                        // Hide loader and show location section
                        $('.loader_position').addClass('d-none');
                        $('.location_secion').removeClass('d-none');
                    });
                });


            // Get the input element with the ID 'searchInput'
            var input = document.getElementById('searchInput');

            // Attach the search input to the top-left corner of the map
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            // Create an autocomplete object using the Google Maps Autocomplete service
            var autocomplete = new google.maps.places.Autocomplete(input);

            // Limit the autocomplete suggestions to the current map bounds
            autocomplete.bindTo('bounds', map);

            // Create an info window to display information about the selected place
            var infowindow = new google.maps.InfoWindow();

            // Create a marker to indicate the selected place
            var marker = new google.maps.Marker({
                map: map,
                anchorPoint: new google.maps.Point(0, -29) // Offset for marker position
            });

            // Listen for the 'place_changed' event on the autocomplete input
            autocomplete.addListener('place_changed', function() {
                // Close the info window and hide the marker
                infowindow.close();
                marker.setVisible(false);

                // Get the selected place details from the autocomplete object
                var place = autocomplete.getPlace();

                // Extract and parse the coordinates from the place's geometry
                const coordinates = String(place.geometry.location);
                const regex = /(-?\d+\.\d+)/g;
                const matches = coordinates.match(regex);

                // If coordinates are successfully extracted
                if (matches && matches.length >= 2) {
                    const lat = parseFloat(matches[0]);
                    const lng = parseFloat(matches[1]);

                    // Call the handleMapUpdate function with the extracted coordinates
                    handleMapUpdate(lat, lng);
                } else {
                    console.log("Invalid coordinate format.");
                }

                // Adjust the map view based on the selected place's geometry
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport); // Fit map to the place's viewport
                } else {
                    map.setCenter(place.geometry.location); // Center map on the selected place
                    map.setZoom(17); // Set zoom level
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
    <!-- =============== google map ========= -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("[data-toggle=tooltip]").tooltip()
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/company/edit.blade.php ENDPATH**/ ?>