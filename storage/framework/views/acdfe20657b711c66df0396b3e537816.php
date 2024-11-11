<aside id="sidebar" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="brand-link">
        <img src="<?php echo e($setting->favicon_image_url); ?>" alt="<?php echo e(__('logo')); ?>" class="elevation-3">
        <span class="brand-text font-weight-light"><?php echo e(config('app.name')); ?></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-nav-wrapper">
            <!-- Sidebar Menu -->
            <nav class="sidebar-main-nav mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('admin.dashboard') ? true : false,'route' => 'admin.dashboard','parameter' => '','path' => 'admin.dashboard','plusIcon' => '','icon' => 'fas fa-tachometer-alt']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('admin.dashboard') ? true : false),'route' => 'admin.dashboard','parameter' => '','path' => 'admin.dashboard','plus_icon' => '','icon' => 'fas fa-tachometer-alt']); ?>
                        <?php echo e(__('dashboard')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <li class="nav-header text-uppercase"><?php echo e(__('website_settings')); ?></li>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.system') ? true : false,'route' => 'settings.system','parameter' => '','path' => 'settings.system','plusIcon' => '','icon' => 'fas fa-hashtag']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.system') ? true : false),'route' => 'settings.system','parameter' => '','path' => 'settings.system','plus_icon' => '','icon' => 'fas fa-hashtag']); ?>
                        <?php echo e(__('preferences')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>

                    <?php if(userCan('menu-setting.index')): ?>
                        <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('menu-settings.*') ? true : false,'route' => 'menu-settings.index','path' => 'menu-settings.index','plusIcon' => '','icon' => 'fas fa-bars']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('menu-settings.*') ? true : false),'route' => 'menu-settings.index','path' => 'menu-settings.index','plus_icon' => '','icon' => 'fas fa-bars']); ?>
                            <?php echo e(__('menu_settings')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.social.login') ? true : false,'route' => 'settings.social.login','path' => 'settings.social.login','plusIcon' => '','icon' => 'fab fa-facebook']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.social.login') ? true : false),'route' => 'settings.social.login','path' => 'settings.social.login','plus_icon' => '','icon' => 'fab fa-facebook']); ?>
                        <?php echo e(__('social_login')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.cookies') ? true : false,'route' => 'settings.cookies','path' => 'settings.cookies','plusIcon' => '','icon' => 'fas fa-cookie-bite']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.cookies') ? true : false),'route' => 'settings.cookies','path' => 'settings.cookies','plus_icon' => '','icon' => 'fas fa-cookie-bite']); ?>
                        <?php echo e(__('cookies_alert')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.seo.*') ? true : false,'route' => 'settings.seo.index','parameter' => '','path' => 'settings.seo.index','plusIcon' => '','icon' => 'fas fa-award']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.seo.*') ? true : false),'route' => 'settings.seo.index','parameter' => '','path' => 'settings.seo.index','plus_icon' => '','icon' => 'fas fa-award']); ?>
                        <?php echo e(__('seo')); ?> <?php echo e(__('settings')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.pages.*') ? true : false,'route' => 'settings.pages.index','parameter' => '','path' => 'settings.pages.index','plusIcon' => '','icon' => 'fas fa-desktop']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.pages.*') ? true : false),'route' => 'settings.pages.index','parameter' => '','path' => 'settings.pages.index','plus_icon' => '','icon' => 'fas fa-desktop']); ?>
                    <?php echo e(__('pages')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.custom') ? true : false,'route' => 'settings.custom','path' => 'settings.custom','plusIcon' => '','parameter' => '','icon' => 'fas fa-tools']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.custom') ? true : false),'route' => 'settings.custom','path' => 'settings.custom','plus_icon' => '','parameter' => '','icon' => 'fas fa-tools']); ?>
                        <?php echo e(__('custom_css_and_js')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.websitesetting') ? true : false,'route' => 'settings.websitesetting','parameter' => '','path' => 'settings.websitesetting','plusIcon' => '','icon' => 'fas fa-tasks']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.websitesetting') ? true : false),'route' => 'settings.websitesetting','parameter' => '','path' => 'settings.websitesetting','plus_icon' => '','icon' => 'fas fa-tasks']); ?>
                        <?php echo e(__('cms')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.affiliate.index') ? true : false,'route' => 'settings.affiliate.index','path' => 'settings.affiliate.index','plusIcon' => '','icon' => 'fab fa-affiliatetheme']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.affiliate.index') ? true : false),'route' => 'settings.affiliate.index','path' => 'settings.affiliate.index','plus_icon' => '','icon' => 'fab fa-affiliatetheme']); ?>
                        <?php echo e(__('affiliate')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.email-templates.list') ? true : false,'route' => 'settings.email-templates.list','path' => 'settings.email-templates.list','plusIcon' => '','icon' => 'fas fa-mail-bulk']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.email-templates.list') ? true : false),'route' => 'settings.email-templates.list','path' => 'settings.email-templates.list','plus_icon' => '','icon' => 'fas fa-mail-bulk']); ?>
                        <?php echo e(__('email_templates')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>

                    
                    <li class="nav-header text-uppercase"><?php echo e(__('system_settings')); ?></li>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.general') ? true : false,'route' => 'settings.general','path' => 'settings.general','plusIcon' => '','parameter' => '','icon' => 'fas fa-cog']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.general') ? true : false),'route' => 'settings.general','path' => 'settings.general','plus_icon' => '','parameter' => '','icon' => 'fas fa-cog']); ?>
                        <?php echo e(__('general')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php if(auth()->user()->can('setting.view') ||
                            auth()->user()->can('setting.update')): ?>
                        <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('languages.*') ? true : false,'route' => 'languages.index','parameter' => '','path' => 'languages.index','plusIcon' => '','icon' => 'fas fa-globe-asia']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('languages.*') ? true : false),'route' => 'languages.index','parameter' => '','path' => 'languages.index','plus_icon' => '','icon' => 'fas fa-globe-asia']); ?>
                            <?php echo e(__('language')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal1ec1143df31c70ac0673c8a3095ec97b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dropdown','data' => ['linkActive' => Route::is('settings.payment') || Route::is('settings.payment.manual') ? true : false,'subLinkActive' => Route::is('settings.payment') || Route::is('settings.payment.manual') ? true : false,'icon' => 'fas fa-globe']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.payment') || Route::is('settings.payment.manual') ? true : false),'subLinkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.payment') || Route::is('settings.payment.manual') ? true : false),'icon' => 'fas fa-globe']); ?>
                        <?php $__env->slot('title'); ?>
                            <?php echo e(__('location')); ?>

                        <?php $__env->endSlot(); ?>
                        <?php if(userCan('country.view')): ?>
                            <ul class="nav nav-treeview">
                                <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('location.country.country') ? true : false,'route' => 'location.country.country','path' => 'location.country.country','plusIcon' => '','icon' => 'fas fa-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('location.country.country') ? true : false),'route' => 'location.country.country','path' => 'location.country.country','plus_icon' => '','icon' => 'fas fa-circle']); ?>
                                    <?php echo e(__('country')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                            </ul>
                            <ul class="nav nav-treeview">
                                <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('location.state.state') ? true : false,'route' => 'location.state.state','path' => 'location.state.state','plusIcon' => '','icon' => 'fas fa-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('location.state.state') ? true : false),'route' => 'location.state.state','path' => 'location.state.state','plus_icon' => '','icon' => 'fas fa-circle']); ?>
                                    <?php echo e(__('state')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                            </ul>
                            <ul class="nav nav-treeview">
                                <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('location.city.city') ? true : false,'route' => 'location.city.city','path' => 'location.city.city','plusIcon' => '','icon' => 'fas fa-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('location.city.city') ? true : false),'route' => 'location.city.city','path' => 'location.city.city','plus_icon' => '','icon' => 'fas fa-circle']); ?>
                                    <?php echo e(__('city')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                            </ul>
                        <?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b)): ?>
<?php $attributes = $__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b; ?>
<?php unset($__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1ec1143df31c70ac0673c8a3095ec97b)): ?>
<?php $component = $__componentOriginal1ec1143df31c70ac0673c8a3095ec97b; ?>
<?php unset($__componentOriginal1ec1143df31c70ac0673c8a3095ec97b); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.theme') ? true : false,'route' => 'settings.theme','path' => 'settings.theme','plusIcon' => '','icon' => 'fas fa-swatchbook']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.theme') ? true : false),'route' => 'settings.theme','path' => 'settings.theme','plus_icon' => '','icon' => 'fas fa-swatchbook']); ?>
                        <?php echo e(__('theme')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.email') ? true : false,'route' => 'settings.email','parameter' => '','path' => 'settings.email','plusIcon' => '','icon' => 'fas fa-envelope']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.email') ? true : false),'route' => 'settings.email','parameter' => '','path' => 'settings.email','plus_icon' => '','icon' => 'fas fa-envelope']); ?>
                        <?php echo e(__('smtp')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('module.currency.*') ? true : false,'route' => 'module.currency.index','path' => 'module.currency.index','plusIcon' => '','icon' => 'fas fa-dollar-sign']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('module.currency.*') ? true : false),'route' => 'module.currency.index','path' => 'module.currency.index','plus_icon' => '','icon' => 'fas fa-dollar-sign']); ?>
                        <?php echo e(__('currency')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal1ec1143df31c70ac0673c8a3095ec97b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dropdown','data' => ['linkActive' => Route::is('settings.payment') || Route::is('settings.payment.manual') ? true : false,'subLinkActive' => Route::is('settings.payment') || Route::is('settings.payment.manual') ? true : false,'icon' => 'fas fa-credit-card']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.payment') || Route::is('settings.payment.manual') ? true : false),'subLinkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.payment') || Route::is('settings.payment.manual') ? true : false),'icon' => 'fas fa-credit-card']); ?>
                        <?php $__env->slot('title'); ?>
                            <?php echo e(__('payment_gateway')); ?>

                        <?php $__env->endSlot(); ?>
                        <?php if(userCan('country.view')): ?>
                            <ul class="nav nav-treeview">
                                <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.payment') ? true : false,'route' => 'settings.payment','path' => 'settings.payment','plusIcon' => '','icon' => 'fas fa-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.payment') ? true : false),'route' => 'settings.payment','path' => 'settings.payment','plus_icon' => '','icon' => 'fas fa-circle']); ?>
                                    <?php echo e(__('auto_payment')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if(userCan('map.view')): ?>
                            <ul class="nav nav-treeview">
                                <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.payment.manual') ? true : false,'route' => 'settings.payment.manual','path' => 'settings.payment.manual','plusIcon' => '','parameter' => '','icon' => 'fas fa-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.payment.manual') ? true : false),'route' => 'settings.payment.manual','path' => 'settings.payment.manual','plus_icon' => '','parameter' => '','icon' => 'fas fa-circle']); ?>
                                    <?php echo e(__('manual_payment')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                            </ul>
                        <?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b)): ?>
<?php $attributes = $__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b; ?>
<?php unset($__attributesOriginal1ec1143df31c70ac0673c8a3095ec97b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1ec1143df31c70ac0673c8a3095ec97b)): ?>
<?php $component = $__componentOriginal1ec1143df31c70ac0673c8a3095ec97b; ?>
<?php unset($__componentOriginal1ec1143df31c70ac0673c8a3095ec97b); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.upgrade') ? true : false,'path' => 'settings.upgrade','plusIcon' => '','route' => 'settings.upgrade','icon' => 'fas fa-upload']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.upgrade') ? true : false),'path' => 'settings.upgrade','plus_icon' => '','route' => 'settings.upgrade','icon' => 'fas fa-upload']); ?>
                        <?php echo e(__('upgrade_guide')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.ad_setting') ?   true : false,'path' => 'settings.ad_setting','plusIcon' => '','route' => 'settings.ad_setting','icon' => 'fas fa-ad']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.ad_setting') ?   true : false),'path' => 'settings.ad_setting','plus_icon' => '','route' => 'settings.ad_setting','icon' => 'fas fa-ad']); ?>
                        <?php echo e(__('Place listing')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                    <li class="nav-item">
                        <a href="/log-viewer" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>Log Viewer</p>
                        </a>
                    </li>
                    <?php if (isset($component)) { $__componentOriginaledf1b81ada946ad8641eae7399a23a93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledf1b81ada946ad8641eae7399a23a93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-list','data' => ['linkActive' => Route::is('settings.systemInfo') ? true : false,'path' => 'settings.systemInfo','plusIcon' => '','route' => 'settings.systemInfo','icon' => 'fas fa-info']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['linkActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('settings.systemInfo') ? true : false),'path' => 'settings.systemInfo','plus_icon' => '','route' => 'settings.systemInfo','icon' => 'fas fa-info']); ?>
                    <?php echo e(__('systemInfo')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $attributes = $__attributesOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__attributesOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledf1b81ada946ad8641eae7399a23a93)): ?>
<?php $component = $__componentOriginaledf1b81ada946ad8641eae7399a23a93; ?>
<?php unset($__componentOriginaledf1b81ada946ad8641eae7399a23a93); ?>
<?php endif; ?>
                </ul>
            </nav>
            <!-- Sidebar Menu -->
            <nav class="mt-2 nav-footer pt-3 border-top border-secondary">
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview"
                    role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link bg-primary text-light">
                            <i class="nav-icon fas fa-chevron-left"></i>
                            <p><?php echo e(__('go_back')); ?></p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /.sidebar -->
</aside><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/backend/layouts/partials/setting-sidebar.blade.php ENDPATH**/ ?>