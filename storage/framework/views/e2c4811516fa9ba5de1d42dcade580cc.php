<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title><?php echo e(__('reset_password')); ?> - <?php echo e(config('app.name')); ?></title>

    
    <?php echo $__env->make('frontend.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="" dir="<?php echo e(langDirection()); ?>">

    <header class="site-header rt-fixed-top auth-header">
        <div class="main-header">
            <div class="navbar">
                <div class="container container-full-xxl">
                    <a href="/" class="brand-logo"><img src="<?php echo e($setting->dark_logo_url); ?>" alt="logo"></a>
                </div><!-- /.container -->
            </div><!-- /.navbar -->
        </div><!-- /.main-header -->
    </header>

    <div class="row">
        <div class="full-height col-12 order-1 order-lg-0">
            <div class="container">
                <div class="row full-height align-items-center">
                    <div class="col-xl-5 col-lg-8 col-md-9">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="auth-box2">
                            <form method="POST" action="<?php echo e(route('password.email')); ?>" class="rt-form">
                                <?php echo csrf_field(); ?>
                                <h4 class="rt-mb-20"><?php echo e(__('reset_password')); ?></h4>
                                <span class="d-block body-font-3 text-gray-600 rt-mb-32 mb-2">
                                    <?php echo e(__('go_back_to')); ?>

                                    <span><a href="<?php echo e(route('login')); ?>"><?php echo e(__('log_in')); ?></a></span>
                                </span>
                                <span class="d-block body-font-3 text-gray-600 rt-mb-32">
                                    <?php echo e(__('dont_have_account')); ?>

                                    <span><a href="<?php echo e(route('register')); ?>">
                                            <?php echo e(__('create_account')); ?></a></span>
                                </span>
                                <div class="fromGroup rt-mb-15">
                                    <input id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="email" value="<?php echo e(old('email')); ?>" type="email"
                                        placeholder="<?php echo e(__('email_address')); ?>">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <button id="submitButton" type="submit" class="btn btn-primary d-block rt-mb-15">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="white" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 5L19 12L12 19" stroke="white" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        <span class="button-text">
                                            <?php echo e(__('send_password_reset_link')); ?>

                                        </span>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="auth-right-sidebar col-12 order-0 order-lg-1 rt-mb-lg-30">
            <div class="auth-right-sidebar order-lg-1 order-0">
                <div class="sidebar-bg" style="background-image: url(<?php echo e(asset($cms_setting->login_page_image)); ?>)">
                    <div class="sidebar-content">
                        <h4 class="text-gray-10 rt-mb-50"><?php echo e(openJobs()); ?> <?php echo e(__('open_jobs_waiting_for_you')); ?>

                        </h4>
                        <div class="d-flex">
                            <div class="flex-grow-1 rt-mb-24">
                                <div class="card jobcardStyle1 counterbox4">
                                    <div class="card-body">
                                        <div class="rt-single-icon-box icon-center2">
                                            <div class="icon-thumb">
                                                <div class="icon-64">
                                                    <?php if (isset($component)) { $__componentOriginal3b8e63ced8cb6bcafe86f889d0c82e9f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3b8e63ced8cb6bcafe86f889d0c82e9f = $attributes; } ?>
<?php $component = App\View\Components\Svg\LivejobIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.livejob-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\LivejobIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3b8e63ced8cb6bcafe86f889d0c82e9f)): ?>
<?php $attributes = $__attributesOriginal3b8e63ced8cb6bcafe86f889d0c82e9f; ?>
<?php unset($__attributesOriginal3b8e63ced8cb6bcafe86f889d0c82e9f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3b8e63ced8cb6bcafe86f889d0c82e9f)): ?>
<?php $component = $__componentOriginal3b8e63ced8cb6bcafe86f889d0c82e9f; ?>
<?php unset($__componentOriginal3b8e63ced8cb6bcafe86f889d0c82e9f); ?>
<?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="iconbox-content">
                                                <div class="f-size-20 ft-wt-5"><span
                                                        class="counter"><?php echo e(livejob()); ?></span></div>
                                                <span class=" f-size-14"><?php echo e(__('live_job')); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1  rt-mb-24">
                                <div class="card jobcardStyle1 counterbox4">
                                    <div class="card-body">
                                        <div class="rt-single-icon-box icon-center2">
                                            <div class="icon-thumb">
                                                <div class="icon-64">
                                                    <?php if (isset($component)) { $__componentOriginalbe9d127b42e3cad900e29ffc510d5052 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe9d127b42e3cad900e29ffc510d5052 = $attributes; } ?>
<?php $component = App\View\Components\Svg\ThumbIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.thumb-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\ThumbIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe9d127b42e3cad900e29ffc510d5052)): ?>
<?php $attributes = $__attributesOriginalbe9d127b42e3cad900e29ffc510d5052; ?>
<?php unset($__attributesOriginalbe9d127b42e3cad900e29ffc510d5052); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe9d127b42e3cad900e29ffc510d5052)): ?>
<?php $component = $__componentOriginalbe9d127b42e3cad900e29ffc510d5052; ?>
<?php unset($__componentOriginalbe9d127b42e3cad900e29ffc510d5052); ?>
<?php endif; ?>

                                                </div>
                                            </div>
                                            <div class="iconbox-content">
                                                <div class="f-size-20 ft-wt-5"><span
                                                        class="counter"><?php echo e(companies()); ?></span></div>
                                                <span class=" f-size-14"><?php echo e(__('companies')); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 rt-mb-24">
                                <div class="card jobcardStyle1 counterbox4">
                                    <div class="card-body">
                                        <div class="rt-single-icon-box icon-center2">
                                            <div class="icon-thumb">
                                                <div class="icon-64">
                                                    <?php if (isset($component)) { $__componentOriginalcfdfa82a4c632f30bcaf3872b8ee40d9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcfdfa82a4c632f30bcaf3872b8ee40d9 = $attributes; } ?>
<?php $component = App\View\Components\Svg\NewjobsIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.newjobs-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\NewjobsIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcfdfa82a4c632f30bcaf3872b8ee40d9)): ?>
<?php $attributes = $__attributesOriginalcfdfa82a4c632f30bcaf3872b8ee40d9; ?>
<?php unset($__attributesOriginalcfdfa82a4c632f30bcaf3872b8ee40d9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcfdfa82a4c632f30bcaf3872b8ee40d9)): ?>
<?php $component = $__componentOriginalcfdfa82a4c632f30bcaf3872b8ee40d9; ?>
<?php unset($__componentOriginalcfdfa82a4c632f30bcaf3872b8ee40d9); ?>
<?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="iconbox-content">
                                                <div class="f-size-20 ft-wt-5"><span
                                                        class="counter"><?php echo e($candidates); ?></span>
                                                </div>
                                                <span class=" f-size-14"><?php echo e(__('candidates')); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PWA Button Start -->
    <button class="pwa-install-btn bg-white position-fixed d-none" id="installApp">
        <img src="<?php echo e(asset('pwa-btn.png')); ?>" alt="Install App">
    </button>
    <!-- PWA Button End -->

    <!-- scripts -->
    <?php echo $__env->make('frontend.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        Validate();
        $('#email').keyup(Validate);

        function Validate() {
            if (
                $('#email').val().length > 0) {
                $('#submitButton').prop("disabled", false);
            } else {
                $('#submitButton').prop("disabled", true);
            }
        }
    </script>

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
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/frontend/auth/passwords/email.blade.php ENDPATH**/ ?>