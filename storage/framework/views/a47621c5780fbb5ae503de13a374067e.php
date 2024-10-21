

<?php $__env->startSection('meta'); ?>
    <?php
        $data = metaData('login');
    ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    <?php echo e($data->description); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <?php echo e(__('login')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('og:image'); ?>
    <?php echo e(asset($data->image)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row mt-0 mt-lg-5">
        <div class="full-height col-12 order-1 order-lg-0">
            <div class="container">
                <div class="row full-height align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-12">
                        <div class="auth-box2">
                            <form action="<?php echo e(route('login')); ?>" method="POST" class="rt-form" id="login_form">
                                <?php echo csrf_field(); ?>
                                <h4 class="rt-mb-20"><?php echo e(__('log_in')); ?></h4>
                                <span class="d-block body-font-3 text-gray-600 rt-mb-32">
                                    <?php echo e(__('dont_have_account')); ?>

                                    <span>
                                        <a href="<?php echo e(route('register')); ?>"><?php echo e(__('create_account')); ?>

                                        </a>
                                    </span>
                                </span>
                                <div class="fromGroup rt-mb-15">
                                    <input type="email" name="email" id="email"
                                        class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('email_address')); ?>">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert"><?php echo e(__($message)); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="rt-mb-15">
                                    <div class="d-flex fromGroup">
                                        <input name="password" id="password" value=""
                                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password"
                                            placeholder="<?php echo e(__('password')); ?>">
                                        <div onclick="passToText('password','eyeIcon')" id="eyeIcon" class="has-badge">
                                            <i class="ph-eye <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> m-3 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></i>
                                        </div>
                                    </div>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" role="alert"><?php echo e(__($message)); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <?php if(config('captcha.active')): ?>
                                    <div class="rt-mb-15">
                                        <div class="g-custom-css">
                                            <?php echo NoCaptcha::display(); ?>

                                        </div>
                                        <?php if($errors->has('g-recaptcha-response')): ?>
                                            <span class="text-danger text-sm">
                                                <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="d-flex flex-wrap rt-mb-30">
                                    <div class="flex-grow-1">
                                        <div class="form-check from-chekbox-custom">
                                            <input name="remember" id="remember" class="form-check-input" type="checkbox"
                                                value="1">
                                            <label class="form-check-label pointer text-gray-700 f-size-14" for="remember">
                                                <?php echo e(__('keep_me_logged')); ?>

                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex-grow-0">
                                        <span class="body-font-4">
                                            <a href="<?php echo e(route('password.request')); ?>" class="text-primary-500">
                                                <?php echo e(__('forget_password')); ?>

                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <button id="submitButton" type="submit" class="btn btn-primary d-block rt-mb-15">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right">
                                            <?php if (isset($component)) { $__componentOriginald1d40b39616fb8ccef1d5f081d8de333 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald1d40b39616fb8ccef1d5f081d8de333 = $attributes; } ?>
<?php $component = App\View\Components\Svg\RightarrowIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.rightarrow-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\RightarrowIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald1d40b39616fb8ccef1d5f081d8de333)): ?>
<?php $attributes = $__attributesOriginald1d40b39616fb8ccef1d5f081d8de333; ?>
<?php unset($__attributesOriginald1d40b39616fb8ccef1d5f081d8de333); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald1d40b39616fb8ccef1d5f081d8de333)): ?>
<?php $component = $__componentOriginald1d40b39616fb8ccef1d5f081d8de333; ?>
<?php unset($__componentOriginald1d40b39616fb8ccef1d5f081d8de333); ?>
<?php endif; ?>
                                        </span>
                                        <span class="button-text">
                                            <?php echo e(__('log_in')); ?>

                                        </span>
                                    </span>
                                </button>
                            </form>
                            <?php
                                $google = config('services.google.active') && config('services.google.client_id') && config('services.google.client_secret');
                                $facebook = config('services.facebook.active') && config('services.facebook.client_id') && config('services.facebook.client_secret');
                                $twitter = config('services.twitter.active') && config('services.twitter.client_id') && config('services.twitter.client_secret');
                                $linkedin = config('services.linkedin-openid.active') && config('services.linkedin-openid.client_id') && config('services.linkedin-openid.client_secret');
                                $github = config('services.github.active') && config('services.github.client_id') && config('services.github.client_secret');
                            ?>
                            <div>
                                <?php if($google || $facebook || $twitter || $linkedin || $github): ?>
                                    <p class="or text-center"><?php echo e(__('or')); ?></p>
                                <?php endif; ?>
                                <div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-3 tw-gap-6">
                                    <?php if($google): ?>
                                        <div>
                                            <a href="<?php echo e(route('social.login', 'google')); ?>"
                                                class="btn btn-outline-plain d-block custom-padding me-3 rt-mb-xs-10 ">
                                                <span class="button-content-wrapper">
                                                    <span class="button-icon align-icon-left">
                                                        <?php if (isset($component)) { $__componentOriginal59d1bfd05139b902a5e11247a4b0ea8d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal59d1bfd05139b902a5e11247a4b0ea8d = $attributes; } ?>
<?php $component = App\View\Components\Svg\GoogleIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.google-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\GoogleIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal59d1bfd05139b902a5e11247a4b0ea8d)): ?>
<?php $attributes = $__attributesOriginal59d1bfd05139b902a5e11247a4b0ea8d; ?>
<?php unset($__attributesOriginal59d1bfd05139b902a5e11247a4b0ea8d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59d1bfd05139b902a5e11247a4b0ea8d)): ?>
<?php $component = $__componentOriginal59d1bfd05139b902a5e11247a4b0ea8d; ?>
<?php unset($__componentOriginal59d1bfd05139b902a5e11247a4b0ea8d); ?>
<?php endif; ?>
                                                    </span>
                                                    <span class="button-text">
                                                        <?php echo e(__('google')); ?>

                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($facebook): ?>
                                        <div>
                                            <a href="<?php echo e(route('social.login', 'facebook')); ?>"
                                                class="btn btn-outline-plain d-block custom-padding me-3 rt-mb-xs-10 ">
                                                <span class="button-content-wrapper ">
                                                    <span class="button-icon align-icon-left">
                                                        <?php if (isset($component)) { $__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.facebook-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.facebook-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba)): ?>
<?php $attributes = $__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba; ?>
<?php unset($__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba)): ?>
<?php $component = $__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba; ?>
<?php unset($__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba); ?>
<?php endif; ?>
                                                    </span>
                                                    <span class="button-text">
                                                        <?php echo e(__('facebook')); ?>

                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($twitter): ?>
                                        <div>
                                            <a href="<?php echo e(route('social.login', 'twitter')); ?>"
                                                class="btn btn-outline-plain d-block custom-padding me-3 rt-mb-xs-10 ">
                                                <span class="button-content-wrapper ">
                                                    <span class="button-icon align-icon-left">
                                                        <?php if (isset($component)) { $__componentOriginal7a593d607f810c5eb722a8da3c669d39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a593d607f810c5eb722a8da3c669d39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.twitter-icon','data' => ['fill' => '#007ad9']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.twitter-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['fill' => '#007ad9']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a593d607f810c5eb722a8da3c669d39)): ?>
<?php $attributes = $__attributesOriginal7a593d607f810c5eb722a8da3c669d39; ?>
<?php unset($__attributesOriginal7a593d607f810c5eb722a8da3c669d39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a593d607f810c5eb722a8da3c669d39)): ?>
<?php $component = $__componentOriginal7a593d607f810c5eb722a8da3c669d39; ?>
<?php unset($__componentOriginal7a593d607f810c5eb722a8da3c669d39); ?>
<?php endif; ?>
                                                    </span>
                                                    <span class="button-text">
                                                        <?php echo e(__('twitter')); ?>

                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($linkedin): ?>
                                        <div>
                                            <a href="<?php echo e(route('social.login', 'linkedin-openid')); ?>"
                                                class="btn btn-outline-plain d-block custom-padding me-3 rt-mb-xs-10 ">
                                                <span class="button-content-wrapper ">
                                                    <span class="button-icon align-icon-left">
                                                        <?php if (isset($component)) { $__componentOriginal49dc423527bab5b91da6a32dce69b923 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49dc423527bab5b91da6a32dce69b923 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.linkedin-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.linkedin-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49dc423527bab5b91da6a32dce69b923)): ?>
<?php $attributes = $__attributesOriginal49dc423527bab5b91da6a32dce69b923; ?>
<?php unset($__attributesOriginal49dc423527bab5b91da6a32dce69b923); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49dc423527bab5b91da6a32dce69b923)): ?>
<?php $component = $__componentOriginal49dc423527bab5b91da6a32dce69b923; ?>
<?php unset($__componentOriginal49dc423527bab5b91da6a32dce69b923); ?>
<?php endif; ?>
                                                    </span>
                                                    <span class="button-text">
                                                        <?php echo e(__('linkedin')); ?>

                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($github): ?>
                                        <div>
                                            <a href="<?php echo e(route('social.login', 'github')); ?>"
                                                class="btn btn-outline-plain d-block custom-padding me-3 rt-mb-xs-10 ">
                                                <span class="button-content-wrapper ">
                                                    <span class="button-icon align-icon-left">
                                                        <?php if (isset($component)) { $__componentOriginald0ae092b991bdc90154f4744d589635f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0ae092b991bdc90154f4744d589635f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.github-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.github-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0ae092b991bdc90154f4744d589635f)): ?>
<?php $attributes = $__attributesOriginald0ae092b991bdc90154f4744d589635f; ?>
<?php unset($__attributesOriginald0ae092b991bdc90154f4744d589635f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0ae092b991bdc90154f4744d589635f)): ?>
<?php $component = $__componentOriginald0ae092b991bdc90154f4744d589635f; ?>
<?php unset($__componentOriginald0ae092b991bdc90154f4744d589635f); ?>
<?php endif; ?>
                                                    </span>
                                                    <span class="button-text">
                                                        <?php echo e(__('github')); ?>

                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="auth-right-sidebar r-z order-1 order-lg-0">
            <div class="sidebar-bg" style="background-image: url(<?php echo e(asset($cms_setting->login_page_image)); ?>)">
                <div class="sidebar-content">
                    <h4 class="text-gray-10 rt-mb-50"><?php echo e(openJobs()); ?> <?php echo e(__('open_jobs_waiting_for_you')); ?></h4>
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
                                    </div>
                                    <div class="iconbox-content">
                                        <div class="f-size-20 ft-wt-5"><span class="counter"><?php echo e(livejob()); ?></span>
                                        </div>
                                        <span class=" f-size-14"><?php echo e(__('live_job')); ?></span>
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
                                            <div class="f-size-20 ft-wt-5"><span class="counter"><?php echo e(companies()); ?></span>
                                            </div>
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
                                            <span class="f-size-14">
                                                <span><?php echo e(__('candidates')); ?></span>
                                                
                                            </span>
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

    <!-- The Modal -->
    <div id="ModalBtn" class="modal">
        <div class="row justify-content-center m-2 mt-5 pt-5">
            <div class="col-sm-12 col-lg-4">
                <div class="rt-rounded-12">
                    <div class="card border border-gray-500">
                        <div class="card-header bg-primary text-white font-size-25">
                            <?php echo e(__('select_one')); ?>

                        </div>
                        <form class="d-inline justify-content-center" method="POST"
                            action="<?php echo e(route('social.register')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php if(session()->has('warning')): ?>
                                <div class="alert alert-warning m-3" role="alert">
                                    <?php echo e(__('we_couldnot_find_any_accounts_please_continue_to_register_as_a_candidate_or_employer')); ?>

                                </div>
                            <?php endif; ?>
                            <div class="card-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"
                                            for="experience"><?php echo e(__('employer_or_candidate')); ?></label>
                                        <select name="user" class="form-controll rounded" id="">
                                            <option value="candidate"><?php echo e(__('candidate')); ?></option>
                                            <option value="company"><?php echo e(__('employer')); ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <a href="<?php echo e(route('login')); ?>" class="close btn btn-danger">
                                    <div class="button-content-wrapper ">
                                        <span class="button-text">
                                            <?php echo e(__('cancel')); ?>

                                        </span>
                                    </div>
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <div class="button-content-wrapper ">
                                        <span class="button-text">
                                            <?php echo e(__('register_now')); ?>

                                        </span>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        $(document).ready(function() {
            Validate();
            $('#email, #password').keyup(Validate);
        });

        function Validate() {
            if (
                $('#email').val().length > 0 &&
                $('#password').val().length > 0) {
                $('#submitButton').prop('disabled', false);
            } else {
                $('#submitButton').prop('disabled', true);
            }
        }

        function passToText(id, icon) {
            var input = $('#' + id);
            var eyeIcon = $('#' + icon);
            if (input.is('input[type="password"]')) {
                eyeIcon.html('<i class="ph-eye-slash <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> m-3 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></i>');
                input.attr('type', 'text');
            } else {
                eyeIcon.html('<i class="ph-eye <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> m-3 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></i>');
                input.attr('type', 'password');
            }
        }

        function loginCredentials(type) {
            if (type == 'candidate') {
                $('#email').val('candidate@mail.com')
                $('#password').val('password')
            } else {
                $('#email').val('company@mail.com')
                $('#password').val('password')
            }

            $('#login_form').submit();
        }

        if (<?php echo e(request('social_register') ?? 0); ?> == 1) {
            LoginService();
        }

        function LoginService() {
            $("#ModalBtn").css("display", "block");
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.auth.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/frontend/auth/login.blade.php ENDPATH**/ ?>