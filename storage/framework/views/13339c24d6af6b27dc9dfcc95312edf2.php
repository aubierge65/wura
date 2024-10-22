<?php $__env->startSection('description'); ?>
<?php
$data = metaData('contact');
?>
<?php echo e($data->description); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('og:image'); ?>
<?php echo e(asset($data->image)); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
<?php echo e($data->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<div class="breadcrumbs-custom breadcrumbs-height">
    <div class="container">
        <div class="breadcrumb-menu">
            <h6 class="f-size-18 m-0"><?php echo e(__('contact')); ?></h6>
            <ul>
                <li><a href="<?php echo e(route('website.home')); ?>"><?php echo e(__('home')); ?></a></li>
                <li>/</li>
                <li><?php echo e(__('contact')); ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="card-container">
    <div class="card bg-primary-50">
        <div class="icon-container">
            <i class="ph-map-pin f-size-30 text-primary-500"></i>
        </div>
        <div class="content">
            <h5 class="">Adresse:<br> <span class="body-font-2 text-gray-500">Cotonou,BENIN Maison XYZ</span></h5>
        </div>
    </div>

    <div class="card bg-primary-50">
        <div class="icon-container">
            <i class="ph-phone f-size-30 text-primary-500"></i>
        </div>
        <div class="content">
            <h5 class="">Téléphone:<br> <span class="body-font-2 text-gray-500"> +22968002667</span></h5>
        </div>
    </div>

    <div class="card bg-primary-50">
        <div class="icon-container">
            <i class="ph-envelope f-size-30 text-primary-500"></i>

        </div>
        <div class="content">
            <h5 class="">Email:<br> <span class="body-font-2 text-gray-500">wura@gmail.com</span></h5>
        </div>
    </div>
</div>

<div class="rt-contact">
    <div class="container">
        <div class="rt-spacer-100 rt-spacer-md-50"></div>
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 rt-mb-lg-30">
                <div class="pl30">
                    <!-- <span class="body-font-3 ft-wt-5 text-primary-500 rt-mb-15 d-inline-block"><?php echo e(__('contact_title')); ?></span> -->
                    <h2 class="lg:tw-mb-8 md:tw-mb-6 tw-mb-4"><?php echo e(__('we_care_about_customer_services')); ?></h2>
                    <p class="body-font-2 text-gray-500 rt-mb-32">
                        <?php echo e(__('want_to_chat_We_love_to_hear_from_you_get_in_touch_with_our_customer_success_team_to_inquire_rates_or_just_say_hello')); ?>

                    </p>
                    <a href="mailto:<?php echo e($setting->email); ?>" target="__blank" class="btn btn-primary btn-lg">
                        <?php echo e(__('email_support')); ?>

                    </a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="contact-auth-box ct-wrap">
                    <form action="<?php echo e(route('module.contact.store')); ?>" class="rt-form" method="POST">
                        <?php echo csrf_field(); ?>
                        <h5 class="rt-mb-32"><?php echo e(__('get_in_touch')); ?></h5>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="fromGroup rt-mb-15">
                                    <input id="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        type="text" placeholder="<?php echo e(__('name')); ?>" name="name"
                                        value="<?php echo e(old('name')); ?>">
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="fromGroup rt-mb-15">
                                    <input id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        type="email" placeholder="<?php echo e(__('email')); ?>" name="email"
                                        value="<?php echo e(old('email')); ?>">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="fromGroup rt-mb-15">
                            <input id="subject" class="form-control <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                type="text" placeholder="<?php echo e(__('subjects')); ?>" name="subject"
                                value="<?php echo e(old('subject')); ?>">
                            <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="rt-mb-15 tarea-dafault">
                            <textarea id="message" class="form-control <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                placeholder="<?php echo e(__('message')); ?>" name="message"><?php echo e(old('message')); ?></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <?php if(config('captcha.active')): ?>
                        <div class="rt-mb-10 tarea-dafault g-custom-css">
                            <?php echo NoCaptcha::display(); ?>

                            <?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <?php endif; ?>
                        <button type="submit" class="btn btn-primary d-block rt-mb-15" id="submitButton">
                            <span class="button-content-wrapper ">
                                <span class="button-icon align-icon-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 2L11 13" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span class="button-text rt-mr-8">
                                    <?php echo e(__('send_message')); ?>

                                </span>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="rt-spacer-100 rt-spacer-md-50"></div>

    </div>
</div>
<div style="width: 100%; height: 450px;">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16148404.437382855!2d2.5650460203073553!3d9.08201047542148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x195d3200f45cbf5d%3A0x71d97bd02456403a!2sB%C3%A9nin!5e0!3m2!1sen!2sus!4v1631234567890!5m2!1sen!2sus"
        width="100%" height="100%" style="border: 0;" allowfullscreen="" loading="lazy">
    </iframe>
</div>

<div class="rt-spacer-100 rt-spacer-md-30"></div>


<!-- <?php if (isset($component)) { $__componentOriginalf832c0f0b551a3ae4f576bd7e1fda30a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf832c0f0b551a3ae4f576bd7e1fda30a = $attributes; } ?>
<?php $component = App\View\Components\Website\SubscribeNewsletter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.subscribe-newsletter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\SubscribeNewsletter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf832c0f0b551a3ae4f576bd7e1fda30a)): ?>
<?php $attributes = $__attributesOriginalf832c0f0b551a3ae4f576bd7e1fda30a; ?>
<?php unset($__attributesOriginalf832c0f0b551a3ae4f576bd7e1fda30a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf832c0f0b551a3ae4f576bd7e1fda30a)): ?>
<?php $component = $__componentOriginalf832c0f0b551a3ae4f576bd7e1fda30a; ?>
<?php unset($__componentOriginalf832c0f0b551a3ae4f576bd7e1fda30a); ?>
<?php endif; ?> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>
    .breadcrumbs-custom {
        padding: 20px;
        background-color: var(--gray-20);
        transition: all 0.24s ease-in-out;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 5%;
    }

    .card {
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: calc(20% - 10px);
        margin-top: 5%;
        position: relative;
        padding: 10px;
    }

    .icon-container {
        position: absolute;
        top: -12px;
        left: 10px;
        background:white;
        color: white;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .content {
        margin-top: 20px;
    }

    .content h4 {
        margin: 5px 0;
    }

    @media (max-width: 768px) {
        .card {
            width: calc(48% - 10px);
        }
    }

    @media (max-width: 480px) {
        .card {
            width: calc(100% - 10px);
        }
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    $(document).ready(function() {
        validate();
        $('#name, #email, #subject, #message').keyup(validate);
    });

    function validate() {
        if (
            $('#name').val().length > 0 &&
            $('#email').val().length > 0 &&
            $('#subject').val().length > 0 &&
            $('#message').val().length > 0
        ) {
            $('#submitButton').attr('disabled', false);
        } else {
            $('#submitButton').attr('disabled', true);
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/frontend/pages/contact.blade.php ENDPATH**/ ?>