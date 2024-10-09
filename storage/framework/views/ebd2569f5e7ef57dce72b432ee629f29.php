
<?php $__env->startSection('title'); ?>
    <?php echo e(__('website_settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('settings')); ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('settings')); ?></li>
                <li class="breadcrumb-item active"><?php echo e(__('website_settings')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('website-settings'); ?>
    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="card mb-3">
                <div class="card-header">
                    <?php echo e(__('basic_setting')); ?>

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('settings.general.update')); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="site_name"> <?php echo e(__('app_name')); ?> </label>
                                    <input value="<?php echo e(config('app.name')); ?>" name="name" type="text"
                                        class="form-control " placeholder="<?php echo e(__('app_name')); ?>" id="site_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="site_email"> <?php echo e(__('email')); ?> </label>
                                    <input value="<?php echo e($setting->email); ?>" name="email" type="text"
                                        class="form-control " placeholder="<?php echo e(__('email')); ?>" id="site_email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'dark_logo'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php if (isset($component)) { $__componentOriginal10660d445c8cc41f903c590848e68067 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10660d445c8cc41f903c590848e68067 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-tip','data' => ['message' => 'Recommended: 150x50']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-tip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => 'Recommended: 150x50']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10660d445c8cc41f903c590848e68067)): ?>
<?php $attributes = $__attributesOriginal10660d445c8cc41f903c590848e68067; ?>
<?php unset($__attributesOriginal10660d445c8cc41f903c590848e68067); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10660d445c8cc41f903c590848e68067)): ?>
<?php $component = $__componentOriginal10660d445c8cc41f903c590848e68067; ?>
<?php unset($__componentOriginal10660d445c8cc41f903c590848e68067); ?>
<?php endif; ?>
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
                                <input type="file" class="form-control dropify"
                                    data-default-file="<?php echo e($setting->dark_logo_url); ?>" name="dark_logo"
                                    data-allowed-file-extensions='["jpg", "jpeg","png","svg"]'
                                    accept="image/png, image/jpg,image/svg image/jpeg" data-max-file-size="3M">
                                <?php $__errorArgs = ['dark_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback d-block" role="alert"><?php echo e(__($message)); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'light_logo'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php if (isset($component)) { $__componentOriginal10660d445c8cc41f903c590848e68067 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10660d445c8cc41f903c590848e68067 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-tip','data' => ['message' => ''.e(__('recommended')).': 150x50']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-tip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => ''.e(__('recommended')).': 150x50']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10660d445c8cc41f903c590848e68067)): ?>
<?php $attributes = $__attributesOriginal10660d445c8cc41f903c590848e68067; ?>
<?php unset($__attributesOriginal10660d445c8cc41f903c590848e68067); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10660d445c8cc41f903c590848e68067)): ?>
<?php $component = $__componentOriginal10660d445c8cc41f903c590848e68067; ?>
<?php unset($__componentOriginal10660d445c8cc41f903c590848e68067); ?>
<?php endif; ?>
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
                                <input type="file" class="form-control dropify"
                                    data-default-file="<?php echo e($setting->light_logo_url); ?>" name="light_logo"
                                    data-allowed-file-extensions='["jpg", "jpeg","png","svg"]'
                                    accept="image/png, image/jpg,image/svg image/jpeg" data-max-file-size="3M">
                                <?php $__errorArgs = ['light_logo_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback d-block" role="alert"><?php echo e(__($message)); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'favicon'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php if (isset($component)) { $__componentOriginal10660d445c8cc41f903c590848e68067 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10660d445c8cc41f903c590848e68067 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-tip','data' => ['message' => ''.e(__('recommended')).': 32x32']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-tip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => ''.e(__('recommended')).': 32x32']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10660d445c8cc41f903c590848e68067)): ?>
<?php $attributes = $__attributesOriginal10660d445c8cc41f903c590848e68067; ?>
<?php unset($__attributesOriginal10660d445c8cc41f903c590848e68067); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10660d445c8cc41f903c590848e68067)): ?>
<?php $component = $__componentOriginal10660d445c8cc41f903c590848e68067; ?>
<?php unset($__componentOriginal10660d445c8cc41f903c590848e68067); ?>
<?php endif; ?>
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
                                <input type="file" class="form-control dropify"
                                    data-default-file="<?php echo e($setting->favicon_image_url); ?>" name="favicon_image"
                                    data-allowed-file-extensions='["jpg", "jpeg","png","svg"]'
                                    accept="image/png, image/jpg,image/svg image/jpeg" data-max-file-size="1M">
                                <?php $__errorArgs = ['favicon_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback d-block" role="alert"><?php echo e(__($message)); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        
                        <div class="row mt-3 mx-auto">
                            <?php if(userCan('setting.update')): ?>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-sync"></i>
                                    <?php echo e(__('update')); ?>

                                </button>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>

            <!-- PWA Setting Start -->
            <div class="card mb-3">
                <div class="card-header">
                    <?php echo e(__('pwa_settings')); ?>

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('settings.pwa.update')); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-sm-5">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'app_pwa_icon'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php if (isset($component)) { $__componentOriginal10660d445c8cc41f903c590848e68067 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10660d445c8cc41f903c590848e68067 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-tip','data' => ['message' => ''.e(__('recommended')).': 512x512']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-tip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => ''.e(__('recommended')).': 512x512']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10660d445c8cc41f903c590848e68067)): ?>
<?php $attributes = $__attributesOriginal10660d445c8cc41f903c590848e68067; ?>
<?php unset($__attributesOriginal10660d445c8cc41f903c590848e68067); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10660d445c8cc41f903c590848e68067)): ?>
<?php $component = $__componentOriginal10660d445c8cc41f903c590848e68067; ?>
<?php unset($__componentOriginal10660d445c8cc41f903c590848e68067); ?>
<?php endif; ?>
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
                                <input type="file" class="form-control dropify"
                                    data-default-file="<?php echo e($setting->app_pwa_icon_url); ?>" name="app_pwa_icon"
                                    data-allowed-file-extensions='["jpg", "jpeg","png"]'
                                    accept="image/png, image/jpg, image/jpeg">

                                <p class="img-size-note text-danger mt-2"><?php echo e(__('app_pwa_icon_size_note')); ?></p>

                                <?php $__errorArgs = ['app_pwa_icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback d-block" role="alert"><?php echo e(__($message)); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'pwa_enable'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div>
                                        <input type="hidden" name="pwa_enable" value="0" />
                                        <input type="checkbox" id="pwa_enable"
                                            <?php echo e($setting->pwa_enable ? 'checked' : ''); ?> name="pwa_enable"
                                            data-bootstrap-switch data-on-color="success"
                                            data-on-text="<?php echo e(__('on')); ?>" data-off-color="default"
                                            data-off-text="<?php echo e(__('off')); ?>" data-size="small" value="1">
                                        <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'pwa_enable'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            </div>
                        </div>

                        <div class="row mt-3 mx-auto text-center">
                            <div class="col-sm-12">
                                <?php if(userCan('setting.update')): ?>
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-sync"></i>
                                        <?php echo e(__('update')); ?>

                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- PWA Setting End -->

            <!-- Google recaptcha Setting -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title line-height-36">
                            <?php echo e(__('recaptcha_configuration')); ?>

                            (<small><a href="https://support.google.com/recaptcha"
                                    target="_blank"><?php echo e(__('get_help')); ?></a></small>)
                        </h3>
                    </div>
                </div>
                <form class="form-horizontal" action="<?php echo e(route('settings.recaptcha.update')); ?>" method="POST"
                    id="recaptch_form">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'nocaptcha_sitekey','class' => 'col-sm-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-7">
                                <input value="<?php echo e(old('nocaptcha_key', config('captcha.sitekey'))); ?>" name="nocaptcha_key"
                                    type="text" class="form-control <?php $__errorArgs = ['nocaptcha_key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    autocomplete="off">
                                <?php $__errorArgs = ['nocaptcha_key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><span><?php echo e($message); ?></span></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'nocaptcha_secret','class' => 'col-sm-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-7">
                                <input value="<?php echo e(old('nocaptcha_secret', config('captcha.secret'))); ?>"
                                    name="nocaptcha_secret" type="text" placeholder=""
                                    class="form-control <?php $__errorArgs = ['nocaptcha_secret'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    autocomplete="off">
                                <?php $__errorArgs = ['nocaptcha_secret'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><span><?php echo e($message); ?></span></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'status','class' => 'col-sm-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-7">
                                <input <?php echo e(config('captcha.active') ? 'checked' : ''); ?> type="checkbox" name="status"
                                    data-bootstrap-switch value="1" data-on-text="<?php echo e(__('on')); ?>"
                                    data-off-color="default" data-on-color="success"
                                    data-off-text="<?php echo e(__('off')); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-7 offset-sm-5">
                                <div class="input-group text-center">
                                    <?php echo NoCaptcha::display(); ?>

                                    <?php if($errors->has('g-recaptcha-response')): ?>
                                        <span class="text-danger text-sm">
                                            <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <?php if(userCan('setting.update')): ?>
                            <div class="form-group row">
                                <div class="offset-sm-5 col-sm-7">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-sync"></i>
                                        <?php echo e(__('update')); ?></button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </form>
            </div>

            <!-- Pusher Setting -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title line-height-36">
                            <?php echo e(__('pusher_configuration')); ?>

                        </h3>
                    </div>
                </div>
                <form class="form-horizontal" action="<?php echo e(route('settings.pusher.update')); ?>" method="POST"
                    id="pusher_form">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'pusher_app_id','class' => 'col-sm-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-7">
                                <input value="<?php echo e(old('pusher_app_id', config('templatecookie.pusher_app_id'))); ?>"
                                    name="pusher_app_id" type="text"
                                    class="form-control <?php $__errorArgs = ['pusher_app_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="off">
                                <?php $__errorArgs = ['pusher_app_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><span><?php echo e($message); ?></span></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'pusher_app_key','class' => 'col-sm-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-7">
                                <input value="<?php echo e(old('pusher_app_key', config('templatecookie.pusher_app_key'))); ?>"
                                    name="pusher_app_key" type="text"
                                    class="form-control <?php $__errorArgs = ['pusher_app_key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="off">
                                <?php $__errorArgs = ['pusher_app_key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><span><?php echo e($message); ?></span></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'pusher_app_secret','class' => 'col-sm-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-7">
                                <input value="<?php echo e(old('pusher_app_secret', config('templatecookie.pusher_app_secret'))); ?>"
                                    name="pusher_app_secret" type="text"
                                    class="form-control <?php $__errorArgs = ['pusher_app_secret'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    autocomplete="off">
                                <?php $__errorArgs = ['pusher_app_secret'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><span><?php echo e($message); ?></span></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'pusher_host','class' => 'col-sm-5','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-7">
                                <input value="<?php echo e(old('pusher_host', config('templatecookie.pusher_host'))); ?>"
                                    name="pusher_host" type="text"
                                    class="form-control <?php $__errorArgs = ['pusher_host'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="off">
                                <?php $__errorArgs = ['pusher_host'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><span><?php echo e($message); ?></span></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'pusher_port','class' => 'col-sm-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-7">
                                <input value="<?php echo e(old('pusher_port', config('templatecookie.pusher_port'))); ?>"
                                    name="pusher_port" type="text"
                                    class="form-control <?php $__errorArgs = ['pusher_port'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="off">
                                <?php $__errorArgs = ['pusher_port'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><span><?php echo e($message); ?></span></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'pusher_schema','class' => 'col-sm-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-7">
                                <input value="<?php echo e(old('pusher_schema', config('templatecookie.pusher_schema'))); ?>"
                                    name="pusher_schema" type="text"
                                    class="form-control <?php $__errorArgs = ['pusher_schema'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="off">
                                <?php $__errorArgs = ['pusher_schema'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><span><?php echo e($message); ?></span></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'pusher_app_cluster','class' => 'col-sm-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-7">
                                <input
                                    value="<?php echo e(old('pusher_app_cluster', config('templatecookie.pusher_app_cluster'))); ?>"
                                    name="pusher_app_cluster" type="text"
                                    class="form-control <?php $__errorArgs = ['pusher_app_cluster'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    autocomplete="off">
                                <?php $__errorArgs = ['pusher_app_cluster'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><span><?php echo e($message); ?></span></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <?php if(userCan('setting.update')): ?>
                            <div class="form-group row">
                                <div class="offset-sm-5 col-sm-7">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-sync"></i>
                                        <?php echo e(__('update')); ?></button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </form>
            </div>


            

            

            <!-- Google analytics Setting -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title line-height-36">
                            <?php echo e(__('Google Analytics Configuration')); ?>

                            (<small><a href="https://analytics.google.com/analytics/web/provision/#/provision"
                                    target="_blank"><?php echo e(__('get_help')); ?></a></small>)
                        </h3>
                    </div>
                </div>
                <form class="form-horizontal" action="<?php echo e(route('settings.analytics.update')); ?>" method="POST"
                    id="analytics_form">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'Google Analytics ID','class' => 'col-sm-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-7">
                                <input value="<?php echo e(old('analytics_id') ?? config('templatecookie.google_analytics')); ?>"
                                    name="analytics_id" type="text"
                                    class="form-control <?php $__errorArgs = ['analytics_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="off">
                                <?php $__errorArgs = ['analytics_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><span><?php echo e($message); ?></span></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'Google Analytics Status','class' => 'col-sm-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-7">
                                <input
                                    <?php echo e(old('is_analytics_active') ?? config('templatecookie.google_analytics_status') ? 'checked' : ''); ?>

                                    type="checkbox" name="is_analytics_active" data-bootstrap-switch value="1"
                                    data-on-text="<?php echo e(__('on')); ?>" data-off-color="default" data-on-color="success"
                                    data-off-text="<?php echo e(__('off')); ?>">
                            </div>
                        </div>
                        <?php if(userCan('setting.update')): ?>
                            <div class="form-group row">
                                <div class="offset-sm-5 col-sm-7">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-sync"></i>
                                        <?php echo e(__('update')); ?></button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <?php echo e(__('app_configuration')); ?>

                    </h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('settings.system.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'time_zone'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <select name="timezone"
                                        class="<?php $__errorArgs = ['timezone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> select2bs4 form-control">
                                        <?php $__currentLoopData = $timezones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timezone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e(env('APP_TIMEZONE') == $timezone->value ? 'selected' : ''); ?>

                                                value="<?php echo e($timezone->value); ?>">
                                                <?php echo e($timezone->value); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__errorArgs = ['timezone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback"
                                                role="alert"><span><?php echo e($message); ?></span></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'set_default_language'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <select class="form-control select2bs4 <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="code" id="default_language">
                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                <?php echo e($language->code == config('templatecookie.default_language') ? 'selected' : ''); ?>

                                                value="<?php echo e($language->code); ?>">
                                                <?php echo e($language->name); ?>(<?php echo e($language->code); ?>)
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback"
                                                role="alert"><span><?php echo e($message); ?></span></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'set_default_currency','for' => 'inlineFormCustomSelect'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <select name="currency" class="custom-select select2bs4 mr-sm-2"
                                        id="inlineFormCustomSelect">
                                        <option value="" disabled selected><?php echo e(__('currency')); ?>

                                        </option>
                                        <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                <?php echo e(config('templatecookie.currency') == $currency->code ? 'selected' : ''); ?>

                                                value="<?php echo e($currency->id); ?>">
                                                <?php echo e($currency->name); ?> ( <?php echo e($currency->code); ?> )
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'email_verification','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div>
                                        <input type="hidden" name="email_verification" value="0" />
                                        <input type="checkbox" id="email_verification"
                                            <?php echo e($setting->email_verification ? 'checked' : ''); ?> name="email_verification"
                                            data-on-color="success" data-bootstrap-switch
                                            data-on-text="<?php echo e(__('on')); ?>" data-off-color="default"
                                            data-off-text="<?php echo e(__('off')); ?>" data-size="small" value="1">
                                        <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'email_verification'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'job_approval','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div>
                                        <input type="hidden" name="job_approval" value="0" />
                                        <input type="checkbox" id="job_approval"
                                            <?php echo e($setting->job_auto_approved ? 'checked' : ''); ?> name="job_approval"
                                            data-on-color="success" data-bootstrap-switch
                                            data-on-text="<?php echo e(__('auto')); ?>" data-off-color="default"
                                            data-off-text="<?php echo e(__('manual')); ?>" data-size="small" value="1">
                                        <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'job_approval'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'app_debug'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div>
                                        <input type="hidden" name="app_debug" value="0" />
                                        <input type="checkbox" id="app_debug" <?php echo e(config('app.debug') ? 'checked' : ''); ?>

                                            name="app_debug" data-bootstrap-switch data-on-color="success"
                                            data-on-text="<?php echo e(__('on')); ?>" data-off-color="default"
                                            data-off-text="<?php echo e(__('off')); ?>" data-size="small" value="1">
                                        <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'app_debug'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['class' => 'mt-1','name' => 'website_language_switcher','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div>
                                        <input type="hidden" name="language_changing" value="0" />
                                        <input type="checkbox" id="language_changing"
                                            <?php echo e($setting->language_changing ? 'checked' : ''); ?> name="language_changing"
                                            data-on-color="success" data-bootstrap-switch
                                            data-on-text="<?php echo e(__('on')); ?>" data-off-color="default"
                                            data-off-text="<?php echo e(__('off')); ?>" data-size="small" value="1">
                                        <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'language_changing'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['class' => 'mt-2','name' => 'frontend_currency_switcher','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div>
                                        <input type="hidden" name="currency_switcher" value="0" />
                                        <input type="checkbox" id="currency_switcher"
                                            <?php echo e($setting->currency_switcher ? 'checked' : ''); ?> name="currency_switcher"
                                            data-on-color="success" data-bootstrap-switch
                                            data-on-text="<?php echo e(__('on')); ?>" data-off-color="default"
                                            data-off-text="<?php echo e(__('off')); ?>" data-size="small" value="1">
                                        <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'currency_switcher'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['class' => 'mt-2','name' => 'employer_account_auto_activation','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div>
                                        <input type="hidden" name="employer_auto_activation" value="0" />
                                        <input type="checkbox" id="employer_auto_activation"
                                            <?php echo e($setting->employer_auto_activation ? 'checked' : ''); ?>

                                            name="employer_auto_activation" data-on-color="success" data-bootstrap-switch
                                            data-on-text="<?php echo e(__('on')); ?>" data-off-color="default"
                                            data-off-text="<?php echo e(__('off')); ?>" data-size="small" value="1">
                                        <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'employer_auto_activation'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['class' => 'mt-1','name' => 'candidate_account_auto_activation','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div>
                                        <input type="hidden" name="candidate_account_auto_activation" value="0" />
                                        <input type="checkbox" id="candidate_account_auto_activation"
                                            <?php echo e($setting->candidate_account_auto_activation ? 'checked' : ''); ?>

                                            name="candidate_account_auto_activation" data-on-color="success"
                                            data-bootstrap-switch data-on-text="<?php echo e(__('on')); ?>"
                                            data-off-color="default" data-off-text="<?php echo e(__('off')); ?>"
                                            data-size="small" value="1">
                                        <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'candidate_account_auto_activation'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['class' => 'mt-1','name' => 'edited_job_approval','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div>
                                        <input type="hidden" name="edited_job_approval" value="0" />
                                        <input type="checkbox" id="edited_job_approval"
                                            <?php echo e($setting->edited_job_auto_approved ? 'checked' : ''); ?>

                                            name="edited_job_approval" data-on-color="success" data-bootstrap-switch
                                            data-on-text="<?php echo e(__('auto')); ?>" data-off-color="default"
                                            data-off-text="<?php echo e(__('manual')); ?>" data-size="small" value="1">
                                        <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'edited_job_approval'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            </div>
                        </div>
                        <div class="w-full mt-4 mb-2 ml-2 d-flex justify-content-center items-center">
                            <button type="submit" class="btn btn-success" id="setting_button">
                                <span><i class="fas fa-sync"></i> <?php echo e(__('update')); ?></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <form id="" class="form-horizontal" action="<?php echo e(route('module.map.update')); ?>" method="POST">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('location_configuration')); ?>

                        </h3>
                    </div>
                    <!-- ============== for text =============== -->
                    <div id="text-card" class="card-body">
                        <div class="form-group row">
                            <div class="col-12 d-flex">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'map_show','required' => 'true','class' => 'd-block'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <?php if (isset($component)) { $__componentOriginal10660d445c8cc41f903c590848e68067 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10660d445c8cc41f903c590848e68067 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-tip','data' => ['message' => ''.e(__('Toggle between map and dropdown effortlessly in settings for convenience.')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-tip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => ''.e(__('Toggle between map and dropdown effortlessly in settings for convenience.')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10660d445c8cc41f903c590848e68067)): ?>
<?php $attributes = $__attributesOriginal10660d445c8cc41f903c590848e68067; ?>
<?php unset($__attributesOriginal10660d445c8cc41f903c590848e68067); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10660d445c8cc41f903c590848e68067)): ?>
<?php $component = $__componentOriginal10660d445c8cc41f903c590848e68067; ?>
<?php unset($__componentOriginal10660d445c8cc41f903c590848e68067); ?>
<?php endif; ?>
                                <div class="col-sm-8">
                                    <input type="hidden" name="map_show" value="0" />
                                    <input type="checkbox" id="map_show"
                                        <?php echo e(config('templatecookie.map_show') ? 'checked' : ''); ?> name="map_show"
                                        data-bootstrap-switch data-on-color="success" data-on-text="<?php echo e(__('show')); ?>"
                                        data-off-color="default" data-off-text="<?php echo e(__('hide')); ?>" data-size="small"
                                        value="1">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'set_country_language_currency','class' => 'col-sm-4'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php if (isset($component)) { $__componentOriginal10660d445c8cc41f903c590848e68067 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10660d445c8cc41f903c590848e68067 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-tip','data' => ['message' => ''.e(__('set_automatically_ip_based_country_language_currency')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-tip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => ''.e(__('set_automatically_ip_based_country_language_currency')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10660d445c8cc41f903c590848e68067)): ?>
<?php $attributes = $__attributesOriginal10660d445c8cc41f903c590848e68067; ?>
<?php unset($__attributesOriginal10660d445c8cc41f903c590848e68067); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10660d445c8cc41f903c590848e68067)): ?>
<?php $component = $__componentOriginal10660d445c8cc41f903c590848e68067; ?>
<?php unset($__componentOriginal10660d445c8cc41f903c590848e68067); ?>
<?php endif; ?>
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

                            <div class="col-sm-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input onclick="changeIpLocationoType()" type="radio" id="ip_enable"
                                        name="ip_based_location" class="custom-control-input" value="1"
                                        <?php echo e(config('templatecookie.set_ip_based_location') ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for="ip_enable"><?php echo e(__('enable')); ?></label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input onclick="changeIpLocationoType()" type="radio" id="ip_disable"
                                        name="ip_based_location" class="custom-control-input" value="0"
                                        <?php echo e(config('templatecookie.set_ip_based_location') ? '' : 'checked'); ?>>
                                    <label class="custom-control-label" for="ip_disable"><?php echo e(__('disable')); ?></label>
                                </div>
                                <?php $__errorArgs = ['ip_based_location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><span><?php echo e($message); ?></span></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'map_type','class' => 'col-sm-4'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input onclick="changeMapType()" type="radio" id="leaflet-map" name="map_type"
                                        class="custom-control-input" value="leaflet"
                                        <?php echo e($setting->default_map == 'leaflet' ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for="leaflet-map"><?php echo e(__('leaflet')); ?></label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input onclick="changeMapType()" type="radio" id="google-mapp" name="map_type"
                                        class="custom-control-input" value="google-map"
                                        <?php echo e($setting->default_map == 'google-map' ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for="google-mapp">
                                        <?php echo e(__('google_map')); ?>

                                    </label>
                                </div>
                                <?php $__errorArgs = ['map_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><span><?php echo e($message); ?></span></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div id="googlemap_key"
                            class="<?php echo e($setting->default_map == 'google-map' ? '' : 'd-none'); ?> form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'your_google_map_key','class' => 'col-sm-4'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-8">
                                <input value="<?php echo e($setting->google_map_key); ?>" name="google_map_key" type="text"
                                    class="form-control <?php $__errorArgs = ['google_map_key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="off"
                                    placeholder="<?php echo e(__('your_google_map_key')); ?>">
                                <?php $__errorArgs = ['google_map_key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-left invalid-feedback"
                                        role="alert"><span><?php echo e($message); ?></span></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <!-- default lat & long -->
                        <div class="form-group row align-items-center">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'default_latitude_longitude','class' => 'col-sm-4 mt-3'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-8">
                                <div>
                                    <input value="<?php echo e($setting->default_lat); ?>" name="default_latitude" type="text"
                                        class="form-control <?php $__errorArgs = ['default_latitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        autocomplete="off" placeholder="<?php echo e(__('latitude')); ?>">
                                    <?php $__errorArgs = ['default_latitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-left invalid-feedback"
                                            role="alert"><span><?php echo e($message); ?></span></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="mt-2">
                                    <input value="<?php echo e($setting->default_long); ?>" name="default_longitude" type="text"
                                        class="form-control <?php $__errorArgs = ['default_longitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        autocomplete="off" placeholder="<?php echo e(__('longitude')); ?>">
                                    <?php $__errorArgs = ['default_longitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-left invalid-feedback"
                                            role="alert"><span><?php echo e($message); ?></span></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <!-- default lat & long end -->
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'app_country_type','required' => true,'class' => 'col-sm-4'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-sm-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input onclick="changeCountryType()" type="radio" id="single-country-base"
                                        name="app_country_type" class="custom-control-input" value="single_base"
                                        <?php echo e($setting->app_country_type == 'single_base' ? 'checked' : ''); ?>>
                                    <label class="custom-control-label"
                                        for="single-country-base"><?php echo e(__('single_base')); ?></label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input onclick="changeCountryType()" type="radio" id="multiple-country-base"
                                        name="app_country_type" class="custom-control-input" value="multiple_base"
                                        <?php echo e($setting->app_country_type == 'multiple_base' ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for="multiple-country-base">
                                        <?php echo e(__('multiple_base')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'select_country','required' => true,'class' => 'col-sm-4'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                            <div class="<?php echo e($setting->app_country_type == 'single_base' ? '' : 'd-none'); ?> col-sm-8"
                                id="app_countries">
                                <select name="app_country" class="custom-select select2bs4 mr-sm-2" id="">
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e($setting->app_country == $country->id ? 'selected' : ''); ?>

                                            value="<?php echo e($country->id); ?>">
                                            <?php echo e($country->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col-sm-8 <?php echo e($setting->app_country_type == 'multiple_base' ? '' : 'd-none'); ?>"
                                id="app_countries_multiple">
                                <?php
                                    $active_countries = $countries
                                        ->where('status', 1)
                                        ->pluck('id')
                                        ->toArray();
                                ?>
                                <select name="multiple_country[]" class="custom-select mr-sm-2 multiple_country"
                                    id="" multiple>
                                    <option value=""><?php echo e(__('select_one')); ?></option>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e(in_array($country->id, $active_countries) ? 'selected' : ''); ?>

                                            value="<?php echo e($country->id); ?>">
                                            <?php echo e($country->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row pb-3 mt-5">
                            <div class="offset-sm-4 col-sm-8">
                                <button type="submit" class="btn btn-success"><i class="fas fa-sync"></i>
                                    <?php echo e(__('update')); ?></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
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

        .image-container {
            height: 300px;
            overflow: hidden;
            position: relative;
            border: 2px solid #ced4da;
            cursor: pointer;
        }
        .image-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 0;
            border-top: 0px solid transparent;
            border-left: 56px solid var(--main-color);
            border-bottom: 32px solid transparent;
            display: none;
        }
        .image-container input {
            display: none;
        }

        .image-container:has(input:checked) {
            border: 2px solid var(--main-color);
        }
        .image-container:has(input:checked)::after {
            display: block;
        }

        .full-image {
            width: 100%;
            height: auto;
            transition: transform 2s ease;
        }

        .image-container:hover .full-image {
            transform: translateY(calc(-100% + 300px));
        }


    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));

        });
    </script>
    <script>
        function changeCountryType(value) {
            var value = $("[name='app_country_type']:checked").val();

            if (value == 'single_base') {
                $('#app_countries').removeClass('d-none');
                $('#app_countries_multiple').addClass('d-none');
            } else {
                $('#app_countries').addClass('d-none');
                $('#app_countries_multiple').removeClass('d-none');
            }
        }

        function changeMapType(value) {
            var value = $("[name='map_type']:checked").val();

            if (value == 'google-map') {
                $('#googlemap_key').removeClass('d-none');
            } else {
                $('#googlemap_key').addClass('d-none');
            }
        }
        $('.multiple_country').select2({
            theme: 'bootstrap4',
            multiple: true,
            placeholder: 'Select Your Country'
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/backend/settings/pages/general.blade.php ENDPATH**/ ?>