<?php $__env->startSection('title'); ?>
    <?php echo e(__('create')); ?> <?php echo e(__('job')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title line-height-36"><?php echo e(__('create')); ?> <?php echo e(__('job')); ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <form class="form-horizontal" id="myForm" action="<?php echo e(route('job.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="section pt-3" id="job-details">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <div class="card-title"><?php echo e(__('job_details')); ?></div>
                                </div>
                                <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <label for="title">
                                                <?php echo e(__('title')); ?>

                                                <span class="text-red font-weight-bold">*</span></label>
                                            <input id="title" type="text" name="title"
                                                placeholder="<?php echo e(__('title')); ?>"
                                                class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('title')); ?>" required>
                                            <?php $__errorArgs = ['title'];
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

                                    <div class="row" id="company-input-container">
                                        <div class="col-sm-12 form-group" id="company-input-select">
                                            <label for="company_id" id="company_label">
                                                <?php echo e(__('select')); ?> <?php echo e(__('company')); ?>

                                                <span class="text-red font-weight-bold">*</span></label>
                                            <select name="company_id"
                                                class="form-control select2bs4 <?php $__errorArgs = ['company_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="company_id" required>
                                                <option value=""> <?php echo e(__('Choose a company')); ?></option>
                                                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e(old('company_id') == $company->id ? 'selected' : ''); ?>

                                                        value="<?php echo e($company->id); ?>"> <?php echo e($company->user->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['company_id'];
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

                                        <div class="col-sm-12 col-md-12 d-none mt-2" id="apply_email_div">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'apply_email','for' => 'apply_email','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <input id="apply_email" type="email" name="apply_email"
                                                placeholder="<?php echo e(__('apply_email')); ?>"
                                                class="form-control <?php $__errorArgs = ['apply_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <?php $__errorArgs = ['apply_email'];
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


                                        <div class="col-sm-12 form-group hidden" id="company_name_container">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'company_name','for' => 'company_name','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                                <?php echo e(__('company_name')); ?>

                                                <span class="text-red font-weight-bold hidden">*</span> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                            <input id="company_name" type="text" name="company_name"
                                                placeholder="<?php echo e(__('company_name')); ?>"
                                                class="form-control  <?php $__errorArgs = ['company_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('company_name')); ?>">
                                            <?php $__errorArgs = ['company_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" style="display: block" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <div class="form-check">
                                                <div class="icheck-success d-inline">
                                                    <input value="range" name="is_just_name" type="checkbox"
                                                        class="form-check-input"  id="just_name">
                                                    <label class="form-check-label mr-5"
                                                        for="just_name"><?php echo e(__('create_a_job_without_comapany_account')); ?></label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label for="category_id">
                                                <?php echo e(__('category')); ?>

                                                <span class="text-red font-weight-bold">*</span></label>
                                            <select name="category_id"
                                                class="form-control select2bs4 <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="category_id" required>
                                                <option value=""> <?php echo e(__('category')); ?></option>
                                                <?php $__currentLoopData = $job_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e(old('category_id') == $category->id ? 'selected' : ''); ?>

                                                        value="<?php echo e($category->id); ?>"> <?php echo e($category->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['category_id'];
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
                                    <div class="row form-group">
                                        <div class="col-sm-12 col-md-6">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'vacancies','for' => 'vacancies','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <input id="vacancies" type="text" name="vacancies"
                                                placeholder="<?php echo e(__('vacancies')); ?>"
                                                class="form-control <?php $__errorArgs = ['vacancies'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('vacancies')); ?>" required>
                                            <?php $__errorArgs = ['vacancies'];
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
                                        <div class="col-sm-12 col-md-6">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'deadline','for' => 'deadline','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <input id="deadline" type="text" name="deadline"
                                                placeholder="MM/DD/YYYY"
                                                class="form-control <?php $__errorArgs = ['deadline'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('deadline')); ?>" required>
                                            <?php $__errorArgs = ['deadline'];
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
                        </div>
                        <div class="section pt-3" id="location">
                            <div class="card mb-0">
                                
                                <?php if(config('templatecookie.map_show')): ?>
                                <div class="card-header">
                                    <div class="card-title">
                                        <?php echo e(__('location')); ?>

                                        <span class="text-red font-weight-bold">*</span>
                                        <small class="h6">
                                            (<?php echo e(__('click_to_add_a_pointer')); ?>)
                                        </small>
                                    </div>
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
                                        <input id="searchInput" class="mapClass" type="text"
                                            placeholder="Enter a location">
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
                                        <img src="<?php echo e(asset('frontend/assets/images/loader.gif')); ?>" alt="loader"
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
                                <div class="card-header border-0">
                                    <?php echo e(__('location')); ?>

                                    <span class="text-red font-weight-bold">*</span>
                                </div>
                                <div class="card-body pt-0 row">
                                    <div class="col-12">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('country-state-city')->html();
} elseif ($_instance->childHasBeenRendered('EWu3p6B')) {
    $componentId = $_instance->getRenderedChildComponentId('EWu3p6B');
    $componentTag = $_instance->getRenderedChildComponentTagName('EWu3p6B');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('EWu3p6B');
} else {
    $response = \Livewire\Livewire::mount('country-state-city');
    $html = $response->html();
    $_instance->logRenderedChild('EWu3p6B', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                        </div>
                        <div class="section pt-3" id="salary-details">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <div class="card-title"><?php echo e(__('salary_details')); ?></div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-sm-6 form-check" style="padding-left: 26px;">
                                            <div class="icheck-success d-inline">
                                                <input checked onclick="salaryModeChange('range')" value="range"
                                                    name="salary_mode" type="radio" class="form-check-input"
                                                    id="salary_rangee">
                                                <label class="form-check-label mr-5"
                                                    for="salary_rangee"><?php echo e(__('salary_range')); ?></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-check" style="padding-left: 26px;">
                                            <input onclick="salaryModeChange('custom')" value="custom" name="salary_mode"
                                                type="radio" class="form-check-input" id="custom_salary">
                                            <label class="form-check-label mr-5"
                                                for="custom_salary"><?php echo e(__('custom_salary')); ?></label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 form-group salary_range_part">
                                            <label for="min_salary">
                                                <?php echo e(__('min_salary')); ?> (<?php echo e($currency_symbol); ?>)
                                            </label>
                                            <input id="min_salary" type="number" name="min_salary"
                                                placeholder="<?php echo e(__('min_salary')); ?>"
                                                class="form-control <?php $__errorArgs = ['min_salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('min_salary')); ?>">
                                            <?php $__errorArgs = ['min_salary'];
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
                                        <div class="col-sm-6 form-group salary_range_part">
                                            <label for="max_salary">
                                                <?php echo e(__('max_salary')); ?> (<?php echo e($currency_symbol); ?>)
                                            </label>
                                            <input id="max_salary" type="number" name="max_salary"
                                                placeholder="<?php echo e(__('max_salary')); ?>"
                                                class="form-control <?php $__errorArgs = ['max_salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('max_salary')); ?>">
                                            <?php $__errorArgs = ['max_salary'];
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
                                        <div class="col-sm-6 form-group d-none" id="custom_salary_part">
                                            <label for="custom_salary">
                                                <?php echo e(__('custom_salary')); ?>

                                            </label>
                                            <input id="custom_salary" type="text" name="custom_salary"
                                                class="form-control <?php $__errorArgs = ['custom_salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('custom_salary', 'Competitive')); ?>">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="salary_type">
                                                <?php echo e(__('salary_type')); ?>

                                                <span class="text-red font-weight-bold">*</span>
                                            </label>
                                            <select name="salary_type"
                                                class="form-control select2bs4 <?php $__errorArgs = ['salary_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="salary_type" required>
                                                <?php $__currentLoopData = $salary_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($salary_type->id == old('salary_type') ? 'selected' : ''); ?>

                                                        value="<?php echo e($salary_type->id); ?>"> <?php echo e($salary_type->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['salary_type'];
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
                        </div>
                        <div class="section pt-3" id="attributes">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <div class="card-title"><?php echo e(__('attributes')); ?></div>
                                </div>
                                <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'experience','for' => 'experience','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <select name="experience"
                                                class="form-control select2bs4 <?php $__errorArgs = ['experience'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="experience" required>
                                                <option value=""> <?php echo e(__('experience')); ?></option>
                                                <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($experience->id == old('experience') ? 'selected' : ''); ?>

                                                        value="<?php echo e($experience->id); ?>"> <?php echo e($experience->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['experience'];
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
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'job_role','for' => 'role_id','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <select name="role_id"
                                                class="form-control select2bs4 <?php $__errorArgs = ['role_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="role_id" required>
                                                <option value=""> <?php echo e(__('job_role')); ?></option>
                                                <?php $__currentLoopData = $job_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($role->id == old('role_id') ? 'selected' : ''); ?>

                                                        value="<?php echo e($role->id); ?>">
                                                        <?php echo e($role->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['role_id'];
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

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'education','for' => 'education','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <select id="education" name="education"
                                                class="form-control select2bs4 <?php $__errorArgs = ['education'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                required>
                                                <option value=""> <?php echo e(__('education')); ?></option>
                                                <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($education->id == old('education') ? 'selected' : ''); ?>

                                                        value="<?php echo e($education->id); ?>"><?php echo e($education->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['education'];
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
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'job_type','for' => 'job_type','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <select name="job_type"
                                                class="form-control select2bs4 <?php $__errorArgs = ['job_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="job_type" required>
                                                <?php $__currentLoopData = $job_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($job_type->id == old('job_type') ? 'selected' : ''); ?>

                                                        value="<?php echo e($job_type->id); ?>"><?php echo e($job_type->name); ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['job_type'];
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
                                    <div class="row form-group">
                                        <div class="col-md-12 mb-2">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'tags','for' => 'tags','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <select name="tags[]"
                                                class="form-control select2tags <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                multiple id="tags">
                                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        <?php echo e(old('tags') ? (in_array($tag->id, old('tags')) ? 'selected' : '') : ''); ?>

                                                        value="<?php echo e($tag->id); ?>">
                                                        <?php echo e($tag->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['tags'];
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
                                        <div class="col-md-12 mb-2">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'benefits','for' => 'benefits','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <select name="benefits[]"
                                                class="form-control <?php $__errorArgs = ['benefits'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="benefits" multiple>
                                                <?php $__currentLoopData = $benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        <?php echo e(old('benefits') ? (in_array($benefit->id, old('benefits')) ? 'selected' : '') : ''); ?>

                                                        value="<?php echo e($benefit->id); ?>">
                                                        <?php echo e($benefit->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['benefits'];
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
                                        <div class="col-md-12 mb-2">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'skills','for' => 'skill','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <select name="skills[]"
                                                class="form-control <?php $__errorArgs = ['skills'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="skills"
                                                multiple>
                                                <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        <?php echo e(old('skills') ? (in_array($skill->id, old('skills')) ? 'selected' : '') : ''); ?>

                                                        value="<?php echo e($skill->id); ?>">
                                                        <?php echo e($skill->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['skills'];
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
                        </div>
                        <div class="section pt-3" id="applicant-options">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <div class="card-title"><?php echo e(__('applicant_options')); ?></div>
                                </div>
                                <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col-sm-12 col-md-12">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'receive_applications','for' => 'apply_on','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <select name="apply_on"
                                                class="form-control <?php $__errorArgs = ['apply_on'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="apply_on" required>
                                                <option <?php echo e(old('apply_on') ? '' : 'selected'); ?> value=""
                                                    class="d-none">
                                                    <?php echo e(__('select_one')); ?></option>
                                                <option <?php echo e(old('apply_on') == 'app' ? 'selected' : ''); ?> value="app"
                                                    selected>
                                                    <?php echo e(__('on_our_platform')); ?></option>
                                                <option <?php echo e(old('apply_on') == 'email' ? 'selected' : ''); ?>

                                                    value="email">
                                                    <?php echo e(__('on_your_email_address')); ?></option>
                                                <option <?php echo e(old('apply_on') == 'custom_url' ? 'selected' : ''); ?>

                                                    value="custom_url">
                                                    <?php echo e(__('on_a_custom_url')); ?></option>
                                            </select>
                                            <?php $__errorArgs = ['apply_on'];
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
                                        <div class="col-sm-12 col-md-12 d-none mt-2" id="apply_email_div">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'apply_email','for' => 'apply_email','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <input id="apply_email" type="email" name="apply_email"
                                                placeholder="<?php echo e(__('apply_email')); ?>"
                                                class="form-control <?php $__errorArgs = ['apply_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <?php $__errorArgs = ['apply_email'];
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
                                        <div class="col-sm-12 col-md-12 d-none mt-2" id="apply_url_div">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'apply_url','for' => 'apply_url','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <input id="apply_url" type="url" name="apply_url"
                                                placeholder="<?php echo e(__('apply_url')); ?>"
                                                class="form-control <?php $__errorArgs = ['apply_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <?php $__errorArgs = ['apply_url'];
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
                        </div>
                        <div class="section pt-3" id="promote">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <div class="card-title"><?php echo e(__('promote')); ?></div>
                                </div>
                                <div class="card-body">
                                    <div class="row p-md-4">
                                        <div class="col-md-4 form-check">
                                            <div class="icheck-success d-inline">
                                                <input value="featured" name="badge" type="checkbox"
                                                    class="form-check-input" id="featured"
                                                    <?php echo e(old('badge') == 'featured' ? 'checked' : ''); ?>>
                                                <label class="form-check-label mr-5"
                                                    for="featured"><?php echo e(__('featured')); ?></label>
                                            </div>
                                            <?php $__errorArgs = ['featured'];
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
                                        <div class="col-md-4 form-check">
                                            <div class="icheck-success d-inline">
                                                <input value="highlight" name="badge" type="checkbox"
                                                    class="form-check-input" id="highlight"
                                                    <?php echo e(old('badge') == 'highlight' ? 'checked' : ''); ?>>
                                                <label class="form-check-label mr-5"
                                                    for="highlight"><?php echo e(__('highlight')); ?></label>
                                            </div>
                                            <?php $__errorArgs = ['highlight'];
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
                                        <div class="col-md-4 form-check">
                                            <div class="icheck-success d-inline">
                                                <input value="1" name="is_remote" type="checkbox"
                                                    class="form-check-input" id="is_remote"
                                                    <?php echo e(old('is_remote') ? 'checked' : ''); ?>>
                                                <label class="form-check-label mr-5"
                                                    for="is_remote"><?php echo e(__('remote')); ?></label>
                                            </div>
                                            <?php $__errorArgs = ['is_remote'];
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
                        </div>

                        <div class="section pt-3" id="description">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <div class="card-title"><?php echo e(__('description')); ?></div>
                                </div>
                                <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <label for="image_ckeditor" class="pt-2"><?php echo e(__('description')); ?><span
                                                    class="text-red font-weight-bold">*</span></label>
                                            <textarea name="description" id="image_ckeditor" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                cols="30" rows="10"><?php echo e(old('description')); ?></textarea>
                                            <div id="error-message" style="color: red;"></div>
                                            <?php $__errorArgs = ['description'];
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
                        </div>
                        <div class="section pt-3">
                            <button type="submit" class="btn btn-block bg-success">
                                <i class="fas fa-plus mr-1"></i>
                                <?php echo e(__('save')); ?>

                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 pt-3">
                    <div class="card tc-sticky-sidebar">
                        <div class="card-body">
                            <h5 class="mb-4">Job Information</h5>
                            <div class="tc-vertical-step">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#job-details" class="step-menu active">Job Details</a>
                                    </li>
                                    <li>
                                        <a href="#location" class="step-menu">Location</a>
                                    </li>
                                    <li>
                                        <a href="#salary-details" class="step-menu">Salary Details</a>
                                    </li>
                                    <li>
                                        <a href="#attributes" class="step-menu">Attributes</a>
                                    </li>
                                    <li>
                                        <a href="#applicant-options" class="step-menu">Applicant Options</a>
                                    </li>
                                    <li>
                                        <a href="#promote" class="step-menu">Promote</a>
                                    </li>
                                    <li>
                                        <a href="#description" class="step-menu">Description</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/assets/css/bootstrap-datepicker.min.css">

    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }

        .select2-results__option[aria-selected=true] {
            display: none;
        }

        .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice {
            color: #fff;
            border: 1px solid #fff;
            background: #007bff;
            border-radius: 30px;
        }

        .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice__remove {
            color: #fff;
        }

        .tc-vertical-step,
        .tc-vertical-step-link {
            position: relative;
        }

        .tc-vertical-step ul:before,
        .tc-vertical-step-link ul:before {
            content: "";
            position: absolute;
            left: 5px;
            top: 10px;
            width: 2px;
            height: 100%;
            background: #dfe3e8;
        }

        .tc-vertical-step ul li:not(:last-child),
        .tc-vertical-step-link ul li:not(:last-child) {
            padding-bottom: 1rem;
        }

        .tc-vertical-step ul li a,
        .tc-vertical-step-link ul li a {
            position: relative;
            display: block;
            color: #454f5b;
            padding-left: 26px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .tc-vertical-step ul li a:before,
        .tc-vertical-step-link ul li a:before {
            content: "";
            position: absolute;
            left: 1px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 10px;
            height: 10px;
            background: #dfe3e8;
            border-radius: 50%;
            z-index: 2;
        }

        .tc-vertical-step ul li a:after,
        .tc-vertical-step-link ul li a:after {
            content: "";
            position: absolute;
            left: -3px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 1px solid var(--main-color);
            z-index: 1;
            opacity: 0;
        }

        .step-menu.active:before,
        .step-menu.active:before {
            background-color: var(--main-color) !important;
        }

        .step-menu.active:after,
        .step-menu.active:after {
            opacity: 1;
        }

        .tc-sticky-sidebar {
            position: sticky !important;
            top: 1rem;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            z-index: 8;
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
    <script>
        const stepMenus = document.querySelectorAll('.step-menu');
        const sections = document.querySelectorAll('.section');


        function isElementInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
            );
        }

        function updateActiveStepMenuItem() {
            let activeSection = null;

            for (let i = 0; i < sections.length; i++) {
                if (isElementInViewport(sections[i])) {
                    activeSection = sections[i];
                    break;
                }
            }

            stepMenus.forEach(menu => menu.classList.remove('active'));

            if (activeSection) {
                const targetId = activeSection.id;
                const activeMenuItem = document.querySelector(`.step-menu[href="#${targetId}"]`);
                if (activeMenuItem) {
                    activeMenuItem.classList.add('active');
                }
            }
        }

        function handleStepMenuItemClick(event) {
            event.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }

        stepMenus.forEach(menuItem => {
            menuItem.addEventListener('click', handleStepMenuItemClick);
        });

        window.addEventListener('scroll', updateActiveStepMenuItem);

        updateActiveStepMenuItem();
    </script>
    <script type="text/javascript"
        src="<?php echo e(asset('backend')); ?>/plugins/flagicon/dist/js/bootstrap-iconpicker.bundle.min.js"></script>
    <!-- Custom Script -->
    <?php if(app()->getLocale() == 'ar'): ?>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ar.min.js
                                                                                                                                                                                                            ">
        </script>
    <?php endif; ?>
    <script>
        $('#benefits').select2({
            theme: 'bootstrap4',
            tags: true,
            placeholder: 'Select Benefits'
        });

        $('#skills').select2({
            theme: 'bootstrap4',
            tags: true,
            placeholder: 'Select Skill'
        });

        $('#tags').select2({
            theme: 'bootstrap4',
            tags: true,
            placeholder: 'Select Tag',
        });

        //init datepicker
        $(document).ready(function() {
            var dateToday = new Date();
            $('#deadline').datepicker({
                format: "yyyy-mm-dd",
                minDate: dateToday,
                startDate: dateToday,
                todayHighlight: true,
                isRTL: "<?php echo e(app()->getLocale() == 'ar' ? true : false); ?>",
                language: "<?php echo e(app()->getLocale()); ?>",
            });
        });
    </script>

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

        // condidtion based apply on show hide
        $('#apply_on').on('change', function() {
            var applyOn = $('#apply_on').val();
            var applyEmail = $('#apply_email_div');
            var applyUrl = $('#apply_url_div');
            applyOn == 'email' ? applyEmail.removeClass("d-none") : applyEmail.addClass("d-none");
            applyOn == 'custom_url' ? applyUrl.removeClass("d-none") : applyUrl.addClass("d-none");
        });
    </script>
    <script>
        $("#just_name").change(function() {
            if (this.checked) {
                $('#company_name_container').show();
                $('#company_label').find('span').hide();
                $('#company-input-select').hide();
                $('#company_name_container').find('span').show();
                // Set the company_name field as required and remove required from company_id
                $('#company_name').prop('required', true);
                $('#company_id').prop('required', false);
                $('#company_id').val(null);
            } else {
                $('#company_name_container').hide();
                $('#company-input-select').show();
                $('#company_label').find('span').show();
                $('#company-input-container').show();

                // Set the company_id field as required and remove required from company_name
                $('#company_name').prop('required', false);
                $('#company_id').prop('required', true);
            }
        });
    </script>
    
    <script>
        document.getElementById("myForm").addEventListener("submit", function(event) {
            var descriptionInput = document.getElementById("image_ckeditor");
            var errorMessage = document.getElementById("error-message");

            if (descriptionInput.value.trim() === "") {
                errorMessage.textContent = "Description is required.";
                event.preventDefault();
            } else {
                errorMessage.textContent = ""; // Clear any previous error message
            }
        });
    </script>
<script>
    $(document).ready(function() {
        $('#category_id').on('change', function() {
            var categoryId = $(this).val();

            if (categoryId) {
                $.ajax({
                    url: 'https://wura.africa/admin/jobs/roles-by-category/' + categoryId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#role_id').empty(); // Vider la liste actuelle des rôles
                        $('#role_id').append('<option value="">Sélectionner un rôle</option>');

                        $.each(data, function(key, value) {
                            $('#role_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                // Si aucune catégorie n'est sélectionnée, réafficher tous les rôles
                $('#role_id').empty(); 
                $('#role_id').append('<option value="">Sélectionner un rôle</option>');
                <?php $__currentLoopData = $job_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    $('#role_id').append('<option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>');
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            }
        });
    });
</script>

    <?php echo $__env->make('map::set-leafletmap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('map::set-googlemap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/Job/create.blade.php ENDPATH**/ ?>