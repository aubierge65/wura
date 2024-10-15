<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(__('maintenance')); ?> - <?php echo e(config('app.name')); ?></title>

    <?php echo $__env->make('frontend.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body class="">
    <header class="site-header rt-fixed-top auth-header">
        <div class="main-header">
            <div class="navbar">
                <div class="container">
                    <a href="javascript:void(0)" class="brand-logo"><img src="<?php echo e($setting->dark_logo_url); ?>"
                            alt="logo"></a>
                </div><!-- /.container -->
            </div><!-- /.navbar -->
        </div><!-- /.main-header -->
    </header>

    <section class="comming-soon comming-soon-height position-parent">
        <div class="container">
            <div class="row comming-soon-height align-items-center">
                <div class="col-lg-5 rt-mb-24 order-1 order-lg-0">
                    <h2 class="rt-mb-24"><?php echo e(__('our_website_is_under_construction')); ?></h2>
                    <div class="body-font-2 text-gray-500">
                        <p><?php echo e(__('we_are_working_hard_to_make_our_website_ready_for_you_we_will_be_back_soon')); ?></p>
                    </div>
                </div>
                <div class="col-lg-7 rt-mb-24  text-end order-0 order-lg-1">
                    <img src="<?php echo e(asset($cms_setting->maintenance_image)); ?>" alt="image">
                </div>
            </div>
        </div>
        <div class="fixed-footer-comming-soon fixed-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 ">
                        <span class="body-font-3 text-gray-900 rt-mb-15 d-block"><?php echo e(__('follow_us')); ?></span>
                        <ul class="rt-list social-icons">
                            <li>
                                <a href="#">
                                    <?php if (isset($component)) { $__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.facebook-icon','data' => ['width' => '18px','height' => '18px','fill' => '#0066FF']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.facebook-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '18px','height' => '18px','fill' => '#0066FF']); ?>
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
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <?php if (isset($component)) { $__componentOriginal7a593d607f810c5eb722a8da3c669d39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a593d607f810c5eb722a8da3c669d39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.twitter-icon','data' => ['width' => '18px','height' => '18px','fill' => '#0066FF']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.twitter-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '18px','height' => '18px','fill' => '#0066FF']); ?>
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
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <?php if (isset($component)) { $__componentOriginal74094094587da6ae844b2fd2947257c7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74094094587da6ae844b2fd2947257c7 = $attributes; } ?>
<?php $component = App\View\Components\Svg\Instagram2Icon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.instagram2-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\Instagram2Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74094094587da6ae844b2fd2947257c7)): ?>
<?php $attributes = $__attributesOriginal74094094587da6ae844b2fd2947257c7; ?>
<?php unset($__attributesOriginal74094094587da6ae844b2fd2947257c7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74094094587da6ae844b2fd2947257c7)): ?>
<?php $component = $__componentOriginal74094094587da6ae844b2fd2947257c7; ?>
<?php unset($__componentOriginal74094094587da6ae844b2fd2947257c7); ?>
<?php endif; ?>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <?php if (isset($component)) { $__componentOriginala657cafb66a7d3428f3dcb613ab32d78 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala657cafb66a7d3428f3dcb613ab32d78 = $attributes; } ?>
<?php $component = App\View\Components\Svg\Youtube2Icon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.youtube2-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\Youtube2Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala657cafb66a7d3428f3dcb613ab32d78)): ?>
<?php $attributes = $__attributesOriginala657cafb66a7d3428f3dcb613ab32d78; ?>
<?php unset($__attributesOriginala657cafb66a7d3428f3dcb613ab32d78); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala657cafb66a7d3428f3dcb613ab32d78)): ?>
<?php $component = $__componentOriginala657cafb66a7d3428f3dcb613ab32d78; ?>
<?php unset($__componentOriginala657cafb66a7d3428f3dcb613ab32d78); ?>
<?php endif; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 rt-pt-lg-20 text-md-end body-font-4 text-gray-500 align-self-end">
                        <?php if (isset($component)) { $__componentOriginal3d3a2a154c37220f944698284f758b7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d3a2a154c37220f944698284f758b7a = $attributes; } ?>
<?php $component = App\View\Components\Website\FooterCopyright::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.footer-copyright'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\FooterCopyright::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3d3a2a154c37220f944698284f758b7a)): ?>
<?php $attributes = $__attributesOriginal3d3a2a154c37220f944698284f758b7a; ?>
<?php unset($__attributesOriginal3d3a2a154c37220f944698284f758b7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d3a2a154c37220f944698284f758b7a)): ?>
<?php $component = $__componentOriginal3d3a2a154c37220f944698284f758b7a; ?>
<?php unset($__componentOriginal3d3a2a154c37220f944698284f758b7a); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="rt-mobile-menu-overlay"></div><!-- /.rt-mobile-menu-overlay -->

    <!-- scripts -->
    <?php echo $__env->make('frontend.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/errors/maintenance.blade.php ENDPATH**/ ?>