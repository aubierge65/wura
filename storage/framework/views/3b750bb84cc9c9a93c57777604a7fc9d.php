

<?php $__env->startSection('title'); ?>
    <?php echo e(__('cms')); ?> <?php echo e(__('settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('cms')); ?> <?php echo e(__('settings')); ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('settings')); ?></li>
                <li class="breadcrumb-item active"><?php echo e(__('cms')); ?> <?php echo e(__('settings')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('website-settings'); ?>
    <?php
        $tab_part = session('tab_part');
    ?>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-2">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item border rounded mb-1">
                            <a class="nav-link <?php echo e($tab_part == 'home' ? 'active' : ''); ?>" data-toggle="tab"
                                href="#home"><?php echo e(__('home')); ?></a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a class="nav-link <?php echo e($tab_part == 'about' ? 'active' : ''); ?>" data-toggle="tab"
                                href="#about"><?php echo e(__('about')); ?></a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a class="nav-link <?php echo e($tab_part == 'auth' ? 'active' : ''); ?>" data-toggle="tab"
                                href="#authpage"><?php echo e(__('log_in')); ?> & <?php echo e(__('registration')); ?></a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a class="nav-link <?php echo e($tab_part == 'error' ? 'active' : ''); ?>" data-toggle="tab"
                                href="#errorpage"><?php echo e(__('error_pages')); ?></a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a class="nav-link <?php echo e($tab_part == 'terms' ? 'active' : ''); ?>" data-toggle="tab"
                                href="#termsandcondition"><?php echo e(__('terms_condition')); ?></a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a class="nav-link <?php echo e($tab_part == 'privacy' ? 'active' : ''); ?>" data-toggle="tab"
                                href="#privary_policy"><?php echo e(__('privacy_policy')); ?></a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a class="nav-link <?php echo e($tab_part == 'refund' ? 'active' : ''); ?>" data-toggle="tab"
                                href="#refund_policy"><?php echo e(__('refund_policy')); ?></a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a class="nav-link <?php echo e($tab_part == 'coming_soon' ? 'active' : ''); ?>" data-toggle="tab"
                                href="#comingsoon"><?php echo e(__('comingsoon')); ?></a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a class="nav-link <?php echo e($tab_part == 'maintenance' ? 'active' : ''); ?>" data-toggle="tab"
                                href="#maintenance_mode"><?php echo e(__('maintenance_mode')); ?></a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a class="nav-link <?php echo e($tab_part == 'pricing_plan' ? 'active' : ''); ?>" data-toggle="tab"
                                href="#pricing_plan"><?php echo e(__('pricing_plan')); ?></a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a class="nav-link <?php echo e($tab_part == 'others' ? 'active' : ''); ?>" data-toggle="tab"
                                href="#others"><?php echo e(__('others')); ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-10">
                    <div class="tab-content no-padding">
                        
                        <div class="tab-pane <?php echo e($tab_part == 'home' ? 'show active' : ''); ?>" id="home">
                            <form class="form-horizontal" action="<?php echo e(route('settings.home.update', $cms_setting->id)); ?>"
                                method="POST" enctype="multipart/form-data">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label><?php echo e(__('banner_image')); ?>

                                                </label>
                                                <input name="home_page_banner_image"
                                                    data-allowed-file-extensions="jpg png svg jpge"
                                                    data-min-width="250" type="file" class="form-control dropify"
                                                    data-default-file="<?php echo e(asset($cms_setting->home_page_banner_image)); ?>">
                                                <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'home_page_banner_image'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <div class="row mt-3 mx-auto justify-content-center">
                                                <button type="submit" class="btn btn-success"><i class="fas fa-sync"></i>
                                                    <?php echo e(__('update')); ?>

                                                </button>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
                        </div>

                        
                        <div class="tab-pane <?php echo e($tab_part == 'about' ? 'show active' : ''); ?>" id="about">
                            <form class="form-horizontal" action="<?php echo e(route('settings.aboutupdate')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="card">
                                    <div class="card-header"><?php echo e(__('about_brand_logo')); ?></div>
                                    <div class="card-body">
                                        <div class="row row-cols-md-3">
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    
                                                    <input name="about_brand_logo" type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->about_brand_logo)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                        <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 198x45</p>
                                                        <?php if($cms_setting->about_brand_logo): ?>
                                                        <a href="<?php echo e(route('settings.aboutLogo.delete','about_brand_logo')); ?>" onclick="return confirm('<?php echo e(__('are_you_sure')); ?>')" class="tw-underline">
                                                            <small><?php echo e(__('delete_image')); ?></small>
                                                        </a>
                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="about_brand_logo1"
                                                        type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->about_brand_logo1)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                        <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 198x45</p>
                                                        <?php if($cms_setting->about_brand_logo1): ?>
                                                        <a href="<?php echo e(route('settings.aboutLogo.delete','about_brand_logo1')); ?>" onclick="return confirm('<?php echo e(__('are_you_sure')); ?>')" class="tw-underline">
                                                            <small><?php echo e(__('delete_image')); ?></small>
                                                        </a>
                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="about_brand_logo2"
                                                        type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->about_brand_logo2)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                        <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 198x45</p>
                                                        <?php if($cms_setting->about_brand_logo2): ?>
                                                        <a href="<?php echo e(route('settings.aboutLogo.delete','about_brand_logo2')); ?>" onclick="return confirm('<?php echo e(__('are_you_sure')); ?>')" class="tw-underline">
                                                            <small><?php echo e(__('delete_image')); ?></small>
                                                        </a>
                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="about_brand_logo3"
                                                        type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->about_brand_logo3)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                        <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 198x45</p>
                                                        <?php if($cms_setting->about_brand_logo3): ?>
                                                        <a href="<?php echo e(route('settings.aboutLogo.delete','about_brand_logo3')); ?>" onclick="return confirm('<?php echo e(__('are_you_sure')); ?>')" class="tw-underline">
                                                            <small><?php echo e(__('delete_image')); ?></small>
                                                        </a>
                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="about_brand_logo4"
                                                        type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->about_brand_logo4)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                        <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 198x45</p>
                                                        <?php if($cms_setting->about_brand_logo4): ?>
                                                        <a href="<?php echo e(route('settings.aboutLogo.delete','about_brand_logo4')); ?>" onclick="return confirm('<?php echo e(__('are_you_sure')); ?>')" class="tw-underline">
                                                            <small><?php echo e(__('delete_image')); ?></small>
                                                        </a>
                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="about_brand_logo5"
                                                        type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->about_brand_logo5)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                        <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 198x45</p>
                                                        <?php if($cms_setting->about_brand_logo5): ?>
                                                        <a href="<?php echo e(route('settings.aboutLogo.delete','about_brand_logo5')); ?>" onclick="return confirm('<?php echo e(__('are_you_sure')); ?>')" class="tw-underline">
                                                            <small><?php echo e(__('delete_image')); ?></small>
                                                        </a>
                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header"><?php echo e(__('about_banner_image')); ?></div>
                                    <div class="card-body">
                                        <div class="row row-cols-md-3">
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="about_banner_img"
                                                        data-min-width="250" type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->about_banner_img)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="about_banner_img1"
                                                        data-min-width="250" type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->about_banner_img1)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="about_banner_img2"
                                                        data-min-width="250" type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->about_banner_img2)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="about_banner_img3"
                                                        data-min-width="250" type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->about_banner_img3)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header"><?php echo e(__('our_mission')); ?></div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="col-sm-2 col-form-label"><?php echo e(__('mission_image')); ?></label>
                                            <div class="col-sm-12">
                                                <input name="mission_image" type="file"
                                                    class="form-control dropify <?php $__errorArgs = ['mission_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    data-default-file="<?php echo e(asset($cms_setting->mission_image)); ?>"
                                                    data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                <?php if (isset($component)) { $__componentOriginaldadd8e15a92d72355fc41612ab7bc134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldadd8e15a92d72355fc41612ab7bc134 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Error::resolve(['name' => 'mission_image'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <?php if(userCan('setting.update')): ?>
                                    <div class="row mt-3 mx-auto justify-content-center">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-sync"></i>
                                            <?php echo e(__('update')); ?>

                                        </button>
                                    </div>
                                <?php endif; ?>
                            </form>
                        </div>
                        
                        <div class="tab-pane <?php echo e($tab_part == 'auth' ? 'show active' : ''); ?>" id="authpage">
                            <form class="form-horizontal" action="<?php echo e(route('settings.auth.update', $cms_setting->id)); ?>"
                                method="POST" enctype="multipart/form-data">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="card">
                                    <div class="card-header"><?php echo e(__('login_register_page')); ?></div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label><?php echo e(__('login_image')); ?></label>
                                                <input name="login_page_image" type="file"
                                                    class="form-control dropify"
                                                    data-default-file="<?php echo e(asset($cms_setting->login_page_image)); ?>">
                                            </div>
                                            <div class="col-sm-6">
                                                <label><?php echo e(__('register_image')); ?></label>
                                                <input name="register_page_image" type="file"
                                                    class="form-control dropify"
                                                    data-default-file="<?php echo e(asset($cms_setting->register_page_image)); ?>">
                                            </div>
                                            <?php if(userCan('setting.update')): ?>
                                                <div class="row mt-3 mx-auto justify-content-center">
                                                    <button type="submit" class="btn btn-success"><i
                                                            class="fas fa-sync"></i>
                                                        <?php echo e(__('update')); ?>

                                                    </button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                        
                        <div class="tab-pane <?php echo e($tab_part == 'error' ? 'show active' : ''); ?>" id="errorpage">
                            <div class="row">
                                
                                <div class="col-sm-12 col-md-6">
                                    <form class="form-horizontal"
                                        action="<?php echo e(route('settings.errorpage.update', $cms_setting->id)); ?>"
                                        method="POST" enctype="multipart/form-data">
                                        <?php echo method_field('PUT'); ?>
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="type" value="403">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">403 <?php echo e(__('page')); ?></h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label><?php echo e(__('error_image')); ?>:</label>
                                                        <input name="page403_image" type="file"
                                                            class="form-control dropify"
                                                            data-default-file="<?php echo e(asset($cms_setting->page403_image)); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if(userCan('setting.update')): ?>
                                                <div class="row my-3 mx-auto justify-content-center">
                                                    <button type="submit" class="btn btn-success"><i
                                                            class="fas fa-sync"></i>
                                                        <?php echo e(__('update')); ?>

                                                    </button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </form>
                                </div>
                                
                                <div class="col-sm-12 col-md-6">
                                    <form class="form-horizontal"
                                        action="<?php echo e(route('settings.errorpage.update', $cms_setting->id)); ?>"
                                        method="POST" enctype="multipart/form-data">
                                        <?php echo method_field('PUT'); ?>
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="type" value="404">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">404 <?php echo e(__('page')); ?></h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label><?php echo e(__('error_image')); ?>:</label>
                                                        <input name="page404_image" type="file"
                                                            class="form-control dropify"
                                                            data-default-file="<?php echo e(asset($cms_setting->page404_image??'')); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if(userCan('setting.update')): ?>
                                                <div class="row my-3 mx-auto justify-content-center">
                                                    <button type="submit" class="btn btn-success"><i
                                                            class="fas fa-sync"></i>
                                                        <?php echo e(__('update')); ?>

                                                    </button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </form>
                                </div>
                                
                                <div class="col-sm-12 col-md-6">
                                    <form class="form-horizontal"
                                        action="<?php echo e(route('settings.errorpage.update', $cms_setting->id)); ?>"
                                        method="POST" enctype="multipart/form-data">
                                        <?php echo method_field('PUT'); ?>
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="type" value="500">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">500 <?php echo e(__('page')); ?></h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label><?php echo e(__('error_image')); ?>:</label>
                                                        <input name="page500_image" type="file"
                                                            class="form-control dropify"
                                                            data-default-file="<?php echo e(asset($cms_setting->page500_image)); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if(userCan('setting.update')): ?>
                                                <div class="row my-3 mx-auto justify-content-center">
                                                    <button type="submit" class="btn btn-success"><i
                                                            class="fas fa-sync"></i>
                                                        <?php echo e(__('update')); ?>

                                                    </button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </form>
                                </div>
                                
                                <div class="col-sm-12 col-md-6">
                                    <form class="form-horizontal"
                                        action="<?php echo e(route('settings.errorpage.update', $cms_setting->id)); ?>"
                                        method="POST" enctype="multipart/form-data">
                                        <?php echo method_field('PUT'); ?>
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="type" value="503">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">503 <?php echo e(__('page')); ?></h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label><?php echo e(__('error_image')); ?>:</label>
                                                        <input name="page503_image" type="file"
                                                            class="form-control dropify"
                                                            data-default-file="<?php echo e(asset($cms_setting->page503_image)); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if(userCan('setting.update')): ?>
                                                <div class="row my-3 mx-auto justify-content-center">
                                                    <button type="submit" class="btn btn-success"><i
                                                            class="fas fa-sync"></i>
                                                        <?php echo e(__('update')); ?>

                                                    </button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        
                        <div class="tab-pane <?php echo e($tab_part == 'terms' ? 'show active' : ''); ?>" id="termsandcondition">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title"><?php echo e(__('terms_conditons_page_content')); ?></h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <form id="terms-form" action="<?php echo e(route('admin.privacy.terms.update')); ?>"
                                                method="post">
                                                <?php echo method_field('PUT'); ?>
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="type" value="terms">
                                                <div class="form-group">
                                                    <div
                                                        class="row d-flex justify-content-between items-align-center mb-2">
                                                        <div class="col-4">
                                                            <label for="translation_code" class="pt-3">
                                                                <?php echo e(__('select_language')); ?>

                                                            </label>
                                                            <?php
                                                                $current_language = currentLanguage() ? currentLanguage() : loadDefaultLanguage();
                                                            ?>

                                                            <select id="translation_code" name="translation_code"
                                                                class="form-control select2bs4 w-100 <?php $__errorArgs = ['translation_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option
                                                                        <?php echo e(session()->get('terms_condition_page') == $language->code ? 'selected' : ''); ?>

                                                                        value="<?php echo e($language->code); ?>">
                                                                        <?php echo e($language->name); ?>

                                                                    </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <?php $__errorArgs = ['translation_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="invalid-feedback"
                                                                    role="alert"><strong><?php echo e($message); ?></strong></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <textarea id="editor2" class="form-control <?php echo e($errors->has('terms_page') ? 'is-invalid' : ''); ?>" rows="5"
                                                        name="terms_page"><?php echo e(old('terms_page', $terms_page == null ? $cms_setting->terms_page : $terms_page)); ?></textarea>
                                                    <?php $__errorArgs = ['terms_page'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback"
                                                            role="alert"><strong><?php echo e($message); ?></strong></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <?php if(userCan('setting.update')): ?>
                                                    <div class="row mt-3 mx-auto justify-content-center">
                                                        <button type="submit" class="btn btn-success"><i
                                                                class="fas fa-sync"></i>
                                                            <?php echo e(__('update')); ?>

                                                        </button>
                                                    </div>
                                                <?php endif; ?>
                                            </form>
                                        </div>
                                        <div class="col-3">
                                            <div class="card-body border table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th><?php echo e(__('translation_available_in')); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__empty_1 = true; $__currentLoopData = $terms_condition_page_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <tr>
                                                                <td><?php echo e($list->language ? $list->language->name : ''); ?>

                                                                </td>
                                                                <td>
                                                                    <form
                                                                        action="<?php echo e(route('settings.session.update.tems-privacy')); ?>"
                                                                        method="POST" class="d-inline">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="exist_check"
                                                                            value="<?php echo e($list->translation_code); ?>">
                                                                        <input type="hidden" name="session"
                                                                            value="terms">
                                                                        <input type="hidden" name="type"
                                                                            value="terms-page">
                                                                        <button class="btn bg-info">
                                                                            <i class="fas fa-edit"></i>
                                                                        </button>
                                                                    </form>
                                                                    <?php if($list->language && $list->language->code !== 'en'): ?>
                                                                        <form
                                                                            action="<?php echo e(route('settings.cms.content.destroy')); ?>"
                                                                            method="POST" class="d-inline">
                                                                            <?php echo method_field('DELETE'); ?>
                                                                            <?php echo csrf_field(); ?>
                                                                            <input type="hidden" name="content_id"
                                                                                value="<?php echo e($list->id); ?>">
                                                                            <button
                                                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                                                class="btn bg-danger"><i
                                                                                    class="fas fa-trash"></i>
                                                                            </button>
                                                                        </form>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            <tr>
                                                                <td colspan="2" class="text-center">
                                                                    <?php echo e(__('no_data_found')); ?>

                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="tab-pane <?php echo e($tab_part == 'privacy' ? 'show active' : ''); ?>" id="privary_policy">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title"><?php echo e(__('privary_policy_page_content')); ?></h2>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <form action="<?php echo e(route('admin.privacy.terms.update')); ?>" method="post">
                                                <?php echo method_field('PUT'); ?>
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="type" value="privary">
                                                <div class="form-group">
                                                    <div
                                                        class="row d-flex justify-content-between items-align-center mb-2">
                                                        <div class="col-4">
                                                            <label for="privary_policy_page_content" class="pt-3">
                                                                <?php echo e(__('select_language')); ?>

                                                            </label>
                                                            <?php
                                                                $current_language = currentLanguage() ? currentLanguage() : loadDefaultLanguage();
                                                            ?>
                                                            <select id="privary_policy_page_content"
                                                                name="translation_code"
                                                                class="select2bs4 w-100 <?php $__errorArgs = ['translation_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option
                                                                        <?php echo e(session()->get('privacy_page') == $language->code ? 'selected' : ''); ?>

                                                                        value="<?php echo e($language->code); ?>">
                                                                        <?php echo e($language->name); ?>

                                                                    </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <?php $__errorArgs = ['translation_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="invalid-feedback"
                                                                    role="alert"><strong><?php echo e($message); ?></strong></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <textarea id="editor3" class="form-control <?php echo e($errors->has('privary_page') ? 'is-invalid' : ''); ?>" rows="5"
                                                        name="privary_page"><?php echo e(old('privary_page', $privacy_page == null ? $cms_setting->privary_page : $privacy_page)); ?></textarea>
                                                    <?php $__errorArgs = ['privary_page'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback"
                                                            role="alert"><strong><?php echo e($message); ?></strong></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <?php if(userCan('setting.update')): ?>
                                                    <div class="row mt-3 mx-auto justify-content-center">
                                                        <button type="submit" class="btn btn-success"><i
                                                                class="fas fa-sync"></i>
                                                            <?php echo e(__('update')); ?>

                                                        </button>
                                                    </div>
                                                <?php endif; ?>
                                            </form>
                                        </div>
                                        <div class="col-3">
                                            <div class="card-body border table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th><?php echo e(__('translation_available_in')); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__empty_1 = true; $__currentLoopData = $privacy_page_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <tr>
                                                                <td><?php echo e($listt->language ? $listt->language->name : ''); ?>

                                                                </td>
                                                                <td>
                                                                    <form
                                                                        action="<?php echo e(route('settings.session.update.tems-privacy')); ?>"
                                                                        method="POST" class="d-inline">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="exist_check"
                                                                            value="<?php echo e($listt->translation_code); ?>">
                                                                        <input type="hidden" name="session"
                                                                            value="privacy">
                                                                        <input type="hidden" name="type"
                                                                            value="privacy-page">
                                                                        <button class="btn bg-info">
                                                                            <i class="fas fa-edit"></i>
                                                                        </button>
                                                                    </form>
                                                                    <?php if($listt->language && $listt->language->code !== 'en'): ?>
                                                                        <form
                                                                            action="<?php echo e(route('settings.cms.content.destroy')); ?>"
                                                                            method="POST" class="d-inline">
                                                                            <?php echo method_field('DELETE'); ?>
                                                                            <?php echo csrf_field(); ?>
                                                                            <input type="hidden" name="content_id"
                                                                                value="<?php echo e($listt->id); ?>">
                                                                            <button
                                                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                                                class="btn bg-danger"><i
                                                                                    class="fas fa-trash"></i>
                                                                            </button>
                                                                        </form>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            <tr>
                                                                <td colspan="2" class="text-center">
                                                                    <?php echo e(__('no_data_found')); ?>

                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="tab-pane <?php echo e($tab_part == 'refund' ? 'show active' : ''); ?>" id="refund_policy">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title"><?php echo e(__('refund_policy')); ?></h2>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <form action="<?php echo e(route('admin.privacy.terms.update')); ?>" method="post">
                                                <?php echo method_field('PUT'); ?>
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="type" value="refund">
                                                <div class="form-group">
                                                    <div
                                                        class="row d-flex justify-content-between items-align-center mb-2">
                                                        <div class="col-4">
                                                            <label for="refund_policy_page_content" class="pt-3">
                                                                <?php echo e(__('select_language')); ?>

                                                            </label>
                                                            <?php
                                                                $current_language = currentLanguage() ? currentLanguage() : loadDefaultLanguage();
                                                            ?>
                                                            <select id="refund_policy_page_content"
                                                                name="translation_code"
                                                                class="select2bs4 w-100 <?php $__errorArgs = ['translation_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option
                                                                        <?php echo e(session()->get('refund_page') == $language->code ? 'selected' : ''); ?>

                                                                        value="<?php echo e($language->code); ?>">
                                                                        <?php echo e($language->name); ?>

                                                                    </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <?php $__errorArgs = ['translation_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="invalid-feedback"
                                                                    role="alert"><strong><?php echo e($message); ?></strong></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <textarea id="editor4" class="form-control <?php echo e($errors->has('refund_page') ? 'is-invalid' : ''); ?>" rows="5"
                                                        name="refund_page"><?php echo e(old('refund_page', $refund_page == null ? $cms_setting->refund_page : $refund_page)); ?></textarea>
                                                    <?php $__errorArgs = ['refund_page'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback"
                                                            role="alert"><strong><?php echo e($message); ?></strong></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <?php if(userCan('setting.update')): ?>
                                                    <div class="row mt-3 mx-auto justify-content-center">
                                                        <button type="submit" class="btn btn-success"><i
                                                                class="fas fa-sync"></i>
                                                            <?php echo e(__('update')); ?>

                                                        </button>
                                                    </div>
                                                <?php endif; ?>
                                            </form>
                                        </div>
                                        <div class="col-3">
                                            <div class="card-body border table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th><?php echo e(__('translation_available_in')); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__empty_1 = true; $__currentLoopData = $privacy_page_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <tr>
                                                                <td><?php echo e($listt->language ? $listt->language->name : ''); ?>

                                                                </td>
                                                                <td>
                                                                    <form
                                                                        action="<?php echo e(route('settings.session.update.tems-privacy')); ?>"
                                                                        method="POST" class="d-inline">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="exist_check"
                                                                            value="<?php echo e($listt->translation_code); ?>">
                                                                        <input type="hidden" name="session"
                                                                            value="privacy">
                                                                        <input type="hidden" name="type"
                                                                            value="privacy-page">
                                                                        <button class="btn bg-info">
                                                                            <i class="fas fa-edit"></i>
                                                                        </button>
                                                                    </form>
                                                                    <?php if($listt->language && $listt->language->code !== 'en'): ?>
                                                                        <form
                                                                            action="<?php echo e(route('settings.cms.content.destroy')); ?>"
                                                                            method="POST" class="d-inline">
                                                                            <?php echo method_field('DELETE'); ?>
                                                                            <?php echo csrf_field(); ?>
                                                                            <input type="hidden" name="content_id"
                                                                                value="<?php echo e($listt->id); ?>">
                                                                            <button
                                                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                                                class="btn bg-danger"><i
                                                                                    class="fas fa-trash"></i>
                                                                            </button>
                                                                        </form>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            <tr>
                                                                <td colspan="2" class="text-center">
                                                                    <?php echo e(__('no_data_found')); ?>

                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="tab-pane <?php echo e($tab_part == 'coming_soon' ? 'show active' : ''); ?>" id="comingsoon">
                            <form class="form-horizontal"
                                action="<?php echo e(route('settings.comingsoon.update', $cms_setting->id)); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="card">
                                    <div class="card-header"><?php echo e(__('comingsoon_page')); ?></div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label><?php echo e(__('comingsoon_image')); ?>:</label>
                                                <input name="comingsoon_image" type="file"
                                                    class="form-control dropify"
                                                    data-default-file="<?php echo e(asset($cms_setting->comingsoon_image)); ?>">
                                            </div>
                                        </div>
                                        <?php if(userCan('setting.update')): ?>
                                            <div class="row mt-3 mx-auto justify-content-center">
                                                <button type="submit" class="btn btn-success"><i
                                                        class="fas fa-sync"></i>
                                                    <?php echo e(__('update')); ?>

                                                </button>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </form>
                        </div>
                        
                        <div class="tab-pane <?php echo e($tab_part == 'maintenance' ? 'show active' : ''); ?>"
                            id="maintenance_mode">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-horizontal"
                                        action="<?php echo e(route('settings.maintenance.mode.update')); ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="form">
                                            <label><?php echo e(__('maintenance_image')); ?><small
                                                    class="text-danger">*</small></label>
                                            <input name="maintenance_image" type="file" class="form-control dropify"
                                                data-default-file="<?php echo e(asset($cms_setting->maintenance_image)); ?>">
                                        </div>
                                        <div class="row mt-3 mx-auto d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success"><i class="fas fa-sync"></i>
                                                <?php echo e(__('update')); ?>

                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane <?php echo e($tab_part == 'pricing_plan' ? 'show active' : ''); ?>" id="pricing_plan">
                            <form class="form-horizontal" action="<?php echo e(route('settings.paymentupdate')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="card">
                                    <div class="card-header"><?php echo e(__('payment_logo')); ?></div>
                                    <div class="card-body">
                                        <div class="row row-cols-md-3">
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="payment_logo1" type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->payment_logo1)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                        <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 198x45</p>
                                                        <?php if($cms_setting->payment_logo1): ?>
                                                        <a href="<?php echo e(route('settings.paymentLogo.delete','payment_logo1')); ?>" onclick="return confirm('<?php echo e(__('are_you_sure')); ?>')" class="tw-underline">
                                                            <small><?php echo e(__('delete_image')); ?></small>
                                                        </a>
                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="payment_logo2"
                                                        type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->payment_logo2)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                        <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 198x45</p>
                                                        <?php if($cms_setting->payment_logo2): ?>
                                                        <a href="<?php echo e(route('settings.paymentLogo.delete','payment_logo2')); ?>" onclick="return confirm('<?php echo e(__('are_you_sure')); ?>')" class="tw-underline">
                                                            <small><?php echo e(__('delete_image')); ?></small>
                                                        </a>
                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="payment_logo3"
                                                        type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->payment_logo3)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                        <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 198x45</p>
                                                        <?php if($cms_setting->payment_logo3): ?>
                                                        <a href="<?php echo e(route('settings.paymentLogo.delete','payment_logo3')); ?>" onclick="return confirm('<?php echo e(__('are_you_sure')); ?>')" class="tw-underline">
                                                            <small><?php echo e(__('delete_image')); ?></small>
                                                        </a>
                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="payment_logo4"
                                                        type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->payment_logo4)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                        <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 198x45</p>
                                                        <?php if($cms_setting->payment_logo4): ?>
                                                        <a href="<?php echo e(route('settings.paymentLogo.delete','payment_logo4')); ?>" onclick="return confirm('<?php echo e(__('are_you_sure')); ?>')" class="tw-underline">
                                                            <small><?php echo e(__('delete_image')); ?></small>
                                                        </a>
                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="payment_logo5"
                                                        type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->payment_logo5)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                        <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 198x45</p>
                                                        <?php if($cms_setting->payment_logo5): ?>
                                                        <a href="<?php echo e(route('settings.paymentLogo.delete','payment_logo5')); ?>" onclick="return confirm('<?php echo e(__('are_you_sure')); ?>')" class="tw-underline">
                                                            <small><?php echo e(__('delete_image')); ?></small>
                                                        </a>
                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card-body">
                                                    <input name="payment_logo6"
                                                        type="file" class="form-control dropify"
                                                        data-default-file="<?php echo e(asset($cms_setting->payment_logo6)); ?>"
                                                        data-allowed-file-extensions='["jpg", "jpeg","png"]'>
                                                        <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 198x45</p>
                                                        <?php if($cms_setting->payment_logo6): ?>
                                                        <a href="<?php echo e(route('settings.aboutLogo.delete','payment_logo6')); ?>" onclick="return confirm('<?php echo e(__('are_you_sure')); ?>')" class="tw-underline">
                                                            <small><?php echo e(__('delete_image')); ?></small>
                                                        </a>
                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if(userCan('setting.update')): ?>
                                    <div class="row mt-3 mx-auto justify-content-center">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-sync"></i>
                                            <?php echo e(__('update')); ?>

                                        </button>
                                    </div>
                                <?php endif; ?>
                            </form>
                        </div>
                        
                        <div class="tab-pane <?php echo e($tab_part == 'others' ? 'show active' : ''); ?>" id="others">
                            <form class="form-horizontal" action="<?php echo e(route('settings.others.update')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <input type="hidden" class="form-control" name="othersid"
                                    placeholder="Enter Phone No...!!" value="<?php echo e($cms_setting->id); ?>">
                                <div class="card">
                                    <div class="card-header"><?php echo e(__('candidate')); ?></div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label><?php echo e(__('candidate_image')); ?><small
                                                        class="text-danger">*</small></label>
                                                <input name="candidate_image" type="file" class="form-control dropify"
                                                    data-default-file="<?php echo e(asset($cms_setting->candidate_image)); ?>">
                                                    <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 1296x580</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header"><?php echo e(__('employers')); ?></div>
                                    <div class="card-body">
                                        <div class="col-sm-4">
                                            <label class="form-label"><?php echo e(__('employers_image')); ?><small
                                                    class="text-danger">*</small></label>
                                            <input name="employers_image" type="file" class="form-control dropify"
                                                data-default-file="<?php echo e(asset($cms_setting->employers_image)); ?>">
                                                <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 1296x580</p>
                                        </div>
                                    </div>
                                </div>
                                <?php if(userCan('setting.update')): ?>
                                    <div class="row mt-3 mx-auto justify-content-center">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-sync"></i>
                                            <?php echo e(__('update')); ?>

                                        </button>
                                    </div>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <style>
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
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $('.dropify').dropify({
            messages: {
                'default': 'Add a Picture',
                'replace': 'New picture',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })



        // setting tab set local storage
        var tab = localStorage.getItem("setting-tab");
        if (tab) {
            $('#' + tab).addClass('active');
        }
        // terms and condition ajax call
        $('#termsandcondition').on('click', function() {
            $.ajax({
                type: 'POST',
                url: '<?php echo e(route('settings.session.update.tems-privacy')); ?>',
                data: {
                    'session': 'terms',
                },
                success: function(data) {
                    // location.reload();
                }
            });
        })
        // privacy policy ajax call
        $('#privary_policy').on('click', function() {
            $.ajax({
                type: 'POST',
                url: '<?php echo e(route('settings.session.update.tems-privacy')); ?>',
                data: {
                    'session': 'privacy',
                },
                success: function(data) {
                    // location.reload();
                }
            });
        })
        // refund policy ajax call
        $('#refund_policy').on('click', function() {
            $.ajax({
                type: 'POST',
                url: '<?php echo e(route('settings.session.update.tems-privacy')); ?>',
                data: {
                    'session': 'refund',
                },
                success: function(data) {
                    // location.reload();
                }
            });
        })
        // translation code ajax call
        $('select[id^="translation_code"]').on('change', function() {
            var code = $(this).val();
            $.ajax({
                type: 'POST',
                url: '<?php echo e(route('settings.session.update.tems-privacy')); ?>',
                data: {
                    'exist_check': code,
                    'type': 'terms-page',
                },
                success: function(data) {
                    location.reload();
                }
            });
        })
        // select on change ajax call
        $('select[id^="privary_policy_page_content"]').on('change', function() {
            var code = $(this).val();
            $.ajax({
                type: 'POST',
                url: '<?php echo e(route('settings.session.update.tems-privacy')); ?>',
                data: {
                    'exist_check': code,
                    'type': 'privacy-page',
                },
                success: function(data) {
                    location.reload();
                }
            });
        })
        // select on change ajax call
        $('select[id^="refund_policy_page_content"]').on('change', function() {
            var code = $(this).val();
            $.ajax({
                type: 'POST',
                url: '<?php echo e(route('settings.session.update.tems-privacy')); ?>',
                data: {
                    'exist_check': code,
                    'type': 'refund-page',
                },
                success: function(data) {
                    location.reload();
                }
            });
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/backend/settings/pages/website_setting.blade.php ENDPATH**/ ?>