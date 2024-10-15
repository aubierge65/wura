<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('og:image'); ?>">
    
    <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?></title>

    <?php echo $__env->yieldContent('ld-data'); ?>

    
    <?php echo $__env->make('frontend.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->yieldContent('css'); ?>

    
    <?php echo $setting->header_css; ?>

    <?php echo $setting->header_script; ?>

</head>

<body dir="<?php echo e(langDirection()); ?>">
    <input type="hidden" value="<?php echo e(current_country_code()); ?>" id="current_country_code">
    <input type="hidden" id="auth_user" value="<?php echo e(auth()->check() ? 1 : 0); ?>">
    <input type="hidden" id="auth_user_id" value="<?php echo e(auth()->check() ? auth()->id() : 0); ?>">

    <?php if (isset($component)) { $__componentOriginalf217ec4fe23c3b2b6c3d5f263b35cadd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf217ec4fe23c3b2b6c3d5f263b35cadd = $attributes; } ?>
<?php $component = App\View\Components\Admin\AppModeAlert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.app-mode-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\AppModeAlert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf217ec4fe23c3b2b6c3d5f263b35cadd)): ?>
<?php $attributes = $__attributesOriginalf217ec4fe23c3b2b6c3d5f263b35cadd; ?>
<?php unset($__attributesOriginalf217ec4fe23c3b2b6c3d5f263b35cadd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf217ec4fe23c3b2b6c3d5f263b35cadd)): ?>
<?php $component = $__componentOriginalf217ec4fe23c3b2b6c3d5f263b35cadd; ?>
<?php unset($__componentOriginalf217ec4fe23c3b2b6c3d5f263b35cadd); ?>
<?php endif; ?>
    
    <?php echo $__env->make('frontend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->yieldContent('main'); ?>

    
    <?php if(!Route::is('candidate.*') && !Route::is('company.*')): ?>
        <?php echo $__env->make('frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <!-- scripts -->
    <?php echo $__env->make('frontend.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Custom js -->
    <?php echo $setting->body_script; ?>


    <?php if (isset($component)) { $__componentOriginal58a74e3162bb9509337724b216d26b11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal58a74e3162bb9509337724b216d26b11 = $attributes; } ?>
<?php $component = App\View\Components\Frontend\CookiesAllowance::resolve(['cookies' => $cookies] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.cookies-allowance'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Frontend\CookiesAllowance::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal58a74e3162bb9509337724b216d26b11)): ?>
<?php $attributes = $__attributesOriginal58a74e3162bb9509337724b216d26b11; ?>
<?php unset($__attributesOriginal58a74e3162bb9509337724b216d26b11); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal58a74e3162bb9509337724b216d26b11)): ?>
<?php $component = $__componentOriginal58a74e3162bb9509337724b216d26b11; ?>
<?php unset($__componentOriginal58a74e3162bb9509337724b216d26b11); ?>
<?php endif; ?>

    <script>
        // Hide the preloader when loaded
        var el = document.querySelector(".preloader");
        el && window.addEventListener("load", () => el.style.display = "none");
    </script>

    <?php echo $__env->make('frontend.partials.analytics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- PWA Script -->
    <?php if($setting->pwa_enable): ?>
        <button class="pwa-install-btn bg-white position-fixed d-none" id="installApp">
            <img src="<?php echo e(asset('pwa-btn.png')); ?>" alt="Install App" loading="lazy">
        </button>
        <script src="<?php echo e(asset('/sw.js')); ?>"></script>
        <script>
            if (!navigator.serviceWorker) {
                navigator.serviceWorker.register("/sw.js").then(function(reg) {
                    console.log("Service worker has been registered for scope: " + reg);
                });
            }

            let deferredPrompt;
            window.addEventListener('beforeinstallprompt', (e) => {
                $('#installApp').removeClass('d-none');
                deferredPrompt = e;
            });

            const installApp = document.getElementById('installApp');
            installApp.addEventListener('click', async () => {
                if (deferredPrompt !== null) {
                    deferredPrompt.prompt();
                    const {
                        outcome
                    } = await deferredPrompt.userChoice;
                    if (outcome === 'accepted') {
                        deferredPrompt = null;
                    }
                }
            });
        </script>
    <?php endif; ?>
</body>

</html>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura/resources/views/frontend/layouts/app.blade.php ENDPATH**/ ?>