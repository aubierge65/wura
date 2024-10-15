<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $__env->yieldContent('meta'); ?>
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('og:image'); ?>">
    
    <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?></title>
    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            z-index: 1;
            /* Sit on top */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            -webkit-animation-name: fadeIn;
            /* Fade in the background */
            -webkit-animation-duration: 0.4s;
            animation-name: fadeIn;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }
    </style>
    
    
    <?php echo $__env->make('frontend.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="" dir="<?php echo e(langDirection()); ?>">
    <header class="site-header rt-fixed-top auth-header r-z">
        <div class="main-header">
            <div class="navbar">
                <div class="container container-full-xxl">
                    <a href="/" class="brand-logo"><img src="<?php echo e($setting->light_logo_url); ?>" alt="logo"></a>
                </div><!-- /.container -->
            </div><!-- /.navbar -->
        </div><!-- /.main-header -->
    </header>
    <?php echo $__env->yieldContent('content'); ?>

    <!-- PWA Button Start -->
    <button class="pwa-install-btn bg-white position-fixed d-none" id="installApp">
        <img src="<?php echo e(asset('pwa-btn.png')); ?>" alt="Install App">
    </button>
    <!-- PWA Button End -->

    <!-- scripts -->
    <?php echo $__env->make('frontend.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>

    <!-- PWA Script Start -->
    <?php if($setting->pwa_enable): ?>
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
    <!-- PWA Script End -->

</body>

</html>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura/resources/views/frontend/auth/layouts/auth.blade.php ENDPATH**/ ?>