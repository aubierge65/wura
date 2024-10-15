<?php $__env->startSection('title'); ?>
    <?php echo e(__('gdpr_cookie_consent')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('gdpr_cookie_consent')); ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('settings')); ?></li>
                <li class="breadcrumb-item active"><?php echo e(__('cookies_settings')); ?></li>
            </ol>
        </div>
    </div>
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
                <li class="breadcrumb-item active"><?php echo e(__('cookies_settings')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('website-settings'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title line-height-36"><?php echo e(__('cookies_settings')); ?></h3>
        </div>
        <div class="row pt-3 pb-4">
            <div class="col-md-8 offset-md-2">
                <form class="form-horizontal" action="<?php echo e(route('settings.cookies.update')); ?>" method="POST">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['for' => 'allow_cookies','name' => 'allow_cookies_consent','required' => false,'class' => 'col-md-4 pt-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <div class="col-md-8">
                            <input type="checkbox" id="allow_cookies" <?php echo e($cookie->allow_cookies ? 'checked' : ''); ?>

                                name="allow_cookies"  data-on-text="<?php echo e(__('yes')); ?>"
                                data-off-color="warning" data-off-text="<?php echo e(__('no')); ?>" data-size="large" value="1">
                            <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'allow_cookies'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <div class="form-group row">
                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['for' => 'cookie_name','name' => 'cookie_name','class' => 'col-md-4'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <div class="col-md-8">
                            <select name="cookie_name" id="cookie_name" class="form-control">
                                <option value="gdpr_cookie" <?php if($cookie->cookie_name == 'gdpr_cookie'): ?> selected <?php endif; ?>>
                                    <?php echo e(__('gdpr_cookie')); ?> </option>
                                <option value="ccpa_cookie" <?php if($cookie->cookie_name == 'ccpa_cookie'): ?> selected <?php endif; ?>>
                                    <?php echo e(__('ccpa_cookie')); ?></option>
                                <option value="lgpd_cookie" <?php if($cookie->cookie_name == 'lgpd_cookie'): ?> selected <?php endif; ?>>
                                    <?php echo e(__('lgpd_cookie')); ?> </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['for' => 'cookie_expiration','name' => 'cookie_expiration_day','class' => 'col-md-4'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <div class="col-md-8">
                            <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'number','id' => 'cookie_expiration','name' => 'cookie_expiration','placeholder' => ''.e(__('enter_cookie_expiration_day')).'','value' => ''.e($cookie->cookie_expiration).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['max' => '365']); ?>
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
                    <div class="form-group row">
                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['for' => 'force_consent','name' => 'force_consent','required' => false,'class' => 'col-md-4 pt-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <div class="col-md-8">
                            <input type="checkbox" id="force_consent" <?php echo e($cookie->force_consent ? 'checked' : ''); ?>

                                name="force_consent"  data-on-text="<?php echo e(__('yes')); ?>"
                                data-off-color="warning" data-off-text="<?php echo e(__('no')); ?>" data-size="large" value="1">
                            <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'force_consent'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <div class="form-group row">
                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['for' => 'darkmode','name' => 'theme','required' => false,'class' => 'col-md-4 pt-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <div class="col-md-8">
                            <input type="checkbox" id="darkmode" <?php echo e($cookie->darkmode ? 'checked' : ''); ?> name="darkmode"
                                data-on-color="dark" data-on-text="<?php echo e(__('dark')); ?>" data-off-color="light"
                                data-off-text="<?php echo e(__('light')); ?>" data-size="large" value="1">
                            <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'darkmode'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <?php if(userCan('setting.update')): ?>
                        <div class="form-group row">
                            <div class="offset-sm-4 col-sm-8">
                                <button type="submit" class="btn btn-success"><i class="fas fa-sync"></i>
                                    <?php echo e(__('update')); ?></button>
                            </div>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet"
        href="<?php echo e(asset('backend/plugins/bootstrap-switch/css/bootstrap4/bootstrap-switch.min.css')); ?>">
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $("#allow_cookies").bootstrapSwitch();
        $("#force_consent").bootstrapSwitch();
        $("#darkmode").bootstrapSwitch();
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/settings/pages/cookies.blade.php ENDPATH**/ ?>