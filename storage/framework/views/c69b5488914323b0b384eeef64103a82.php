<?php $__env->startSection('description'); ?>
<?php
$data = metaData('about');
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
<!-- About banner area  start -->

<div class="tw-w-full tw-bg-primary breadcrumbs-custom breadcrumbs-height">
    <div class="container">
        <div class="row align-items-center breadcrumbs-height">
            <div class="col-12 justify-content-center text-center">
                <div class="breadcrumb-title rt-mb-10"><?php echo e(__('about')); ?></div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('website.home')); ?>"><?php echo e(__('home')); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('about')); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="rt-spacer-100 rt-spacer-md-50"></div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="mx-646">
                <span class="body-font-3 ft-wt-5 text-primary-500 rt-mb-15 d-inline-block"><?php echo e(__('who_we_are')); ?></span>
                <h2 class="lg:tw-mb-10 tw-mb-6 <?php echo e($setting->nav_color ? '' : $setting->nav_color); ?>">
                    <?php echo e(__('we_are_highly_skilled_and_professionals_team')); ?>

                </h2>
                <p class="paragraph body-font-2 text-gray-500 rt-mb-0">
                    <?php echo nl2br(e(__('praesent_non_sem_facilisis_hendrerit_nisi_vitae_volutpat_quam_Aliquam_metus_mauris_semper'))); ?>

                </p>
                <div class="about-counter text-center mt-4">
                    <div class="d-flex flex-column flex-sm-row justify-content-center statistic">
                        <div class="card jobcardStyle1 counterbox2 mx-3 mb-3">
                            <div class="card-body">
                                <div class="rt-single-icon-box d-flex flex-column align-items-center">
                                    <div class="icon-thumb">
                                        <div class="icon-72">
                                            <i class="ph-suitcase-simple"></i>
                                        </div>
                                    </div>
                                    <div class="iconbox-content text-center">
                                        <span class="f-size-24 ft-wt-5 rt-mb-12">
                                            <span class="counter"><?php echo e(livejob()); ?></span>
                                        </span>
                                        <span class="text-gray-900 f-size-16"><?php echo e(__('live_job')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card jobcardStyle1 counterbox2 mx-3 mb-3">
                            <div class="card-body">
                                <div class="rt-single-icon-box d-flex flex-column align-items-center">
                                    <div class="icon-thumb">
                                        <div class="icon-72">
                                            <i class="ph-buildings"></i>
                                        </div>
                                    </div>
                                    <div class="iconbox-content text-center">
                                        <span class="f-size-24 ft-wt-5 rt-mb-12">
                                            <span class="counter"><?php echo e($companies); ?></span>
                                        </span>
                                        <span class="text-gray-900 f-size-16"><?php echo e(__('companies')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card jobcardStyle1 counterbox2 mx-3 mb-3">
                            <div class="card-body">
                                <div class="rt-single-icon-box d-flex flex-column align-items-center">
                                    <div class="icon-thumb">
                                        <div class="icon-72">
                                            <i class="ph-users"></i>
                                        </div>
                                    </div>
                                    <div class="iconbox-content text-center">
                                        <span class="f-size-24 ft-wt-5 rt-mb-12">
                                            <span class="counter"><?php echo e($candidates); ?></span>
                                        </span>
                                        <span class="text-gray-900 f-size-16"><?php echo e(__('candidates')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="image-container">
                <img src="<?php echo e(asset('frontend/assets/images/banner/about-banner-5.png')); ?>" alt="Image à droite" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</div>

<div class="my-5 my-md-3"></div>
<div class="container">
    <div class="col-12 text-center text-h4 font-weight-bold title-container">
        <span><?php echo e(__('why_choose')); ?></span>
        <span class="text-primary-500 has-title-shape"><?php echo e(config('app.name')); ?>

            <img src="<?php echo e(asset('frontend')); ?>/assets/images/all-img/title-shape.png" alt="shape">
        </span>
    </div>

    <div class="my-5 my-md-3"></div>
    <div class="row align-items-center">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card text-center bg-primary-50">
                <div class="card-body">
                    <h5 class="card-title text-primary-500"><?php echo e(__('Avantage1')); ?></h5>
                    <p class="card-text text-gray-400"><?php echo e(__('Av1_Desc')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card text-center bg-primary-50">
                <div class="card-body">
                    <h5 class="card-title text-primary-500"><?php echo e(__('Avantage2')); ?></h5>
                    <p class="card-text text-gray-400"><?php echo e(__('Avantage2_Desc')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card text-center bg-primary-50">
                <div class="card-body">
                    <h5 class="card-title text-primary-500"><?php echo e(__('Avantage3')); ?></h5>
                    <p class="card-text text-gray-400"><?php echo e(__('Avantage3_Desc')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card text-center bg-primary-50">
                <div class="card-body">
                    <h5 class="card-title text-primary-500"><?php echo e(__('Avantage4')); ?></h5>
                    <p class="card-text text-gray-400"><?php echo e(__('Avantage4_Desc')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card text-center bg-primary-50">
                <div class="card-body">
                    <h5 class="card-title text-primary-500"><?php echo e(__('Avantage5')); ?></h5>
                    <p class="card-text text-gray-400"><?php echo e(__('Avantage5_Desc')); ?></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card text-center bg-primary-50">
                <div class="card-body">
                    <h5 class="card-title text-primary-500"><?php echo e(__('Avantage6')); ?></h5>
                    <p class="card-text text-gray-400"><?php echo e(__('Avantage6_Desc')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card text-center bg-primary-50">
                <div class="card-body">
                    <h5 class="card-title text-primary-500"><?php echo e(__('Avantage7')); ?></h5>
                    <p class="card-text text-gray-400"><?php echo e(__('Avantage7_Desc')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card text-center bg-primary-50">
                <div class="card-body">
                    <h5 class="card-title text-primary-500"><?php echo e(__('Avantage8')); ?></h5>
                    <p class="card-text text-gray-400"><?php echo e(__('Avantage8_Desc')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card text-center bg-primary-50">
                <div class="card-body">
                    <h5 class="card-title text-primary-500"><?php echo e(__('Avantage9')); ?></h5>
                    <p class="card-text text-gray-400"><?php echo e(__('Avantage9_Desc')); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-12 text-center text-h4 font-weight-bold partners">
        <span><?php echo e(__('partners')); ?></span>
        <span class="text-primary-500 has-title-shape"><?php echo e(config('app.name')); ?>

            <img src="<?php echo e(asset('frontend')); ?>/assets/images/all-img/title-shape.png" alt="shape">
        </span>
    </div>
    <div class="row align-items-center">
        <div class="col-12">
            <div class="brand-active">
                <?php if($cms_setting->about_brand_logo): ?>
                <div class="single-brand">
                    <a href="#">
                        <img src="<?php echo e(asset($cms_setting->about_brand_logo)); ?>" alt="brand-image" class="brand-img-size">
                    </a>
                </div>
                <?php endif; ?>
                <?php if($cms_setting->about_brand_logo1): ?>
                <div class="single-brand">
                    <a href="#">
                        <img src="<?php echo e(asset($cms_setting->about_brand_logo1)); ?>" alt="brand-image" class="brand-img-size">
                    </a>
                </div>
                <?php endif; ?>
                <?php if($cms_setting->about_brand_logo2): ?>
                <div class="single-brand">
                    <a href="#">
                        <img src="<?php echo e(asset($cms_setting->about_brand_logo2)); ?>" alt="brand-image" class="brand-img-size">
                    </a>
                </div>
                <?php endif; ?>
                <?php if($cms_setting->about_brand_logo3): ?>
                <div class="single-brand">
                    <a href="#">
                        <img src="<?php echo e(asset($cms_setting->about_brand_logo3)); ?>" alt="brand-image" class="brand-img-size">
                    </a>
                </div>
                <?php endif; ?>
                <?php if($cms_setting->about_brand_logo4): ?>
                <div class="single-brand">
                    <a href="#">
                        <img src="<?php echo e(asset($cms_setting->about_brand_logo4)); ?>" alt="brand-image" class="brand-img-size">
                    </a>
                </div>
                <?php endif; ?>
                <?php if($cms_setting->about_brand_logo5): ?>
                <div class="single-brand">
                    <a href="#">
                        <img src="<?php echo e(asset($cms_setting->about_brand_logo5)); ?>" alt="brand-image" class="brand-img-size">
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<!-- Call to action Start -->
<div class="cta-area rt-pt-100 rt-mb-100 rt-mb-md-30 rt-pt-md-50">
    <?php echo $__env->make('frontend.partials.call-to-action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>


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
    .title-container {
        margin: 20px 0;
        padding: 35px;
    }

    .partners{
        margin: 10px 0;
        padding: 15px;  
    }
    .brand-img-size {
        max-width: 100% !important;
        height: auto !important;
        max-width: 250px !important;
    }

    .breadcrumbs-custom {
        padding: 20px;
        background-color: var(--gray-50);
        transition: all 0.24s ease-in-out;
    }

    .paragraph {
        text-align: justify;
    }

    .statistic {
        gap: 5%;
    }
    .card {
    height: 200px; 
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}

.col-lg-4, .col-md-6 {
    margin-bottom: 20px;
}

.card img {
    max-width: 100%;
    height: auto; 
    object-fit: cover; 
}

    @media (max-width: 576px) {
        .icon-72 {
            font-size: 40px;
        }

        .f-size-20 {
            font-size: 18px;
        }

        .f-size-14 {
            font-size: 12px;
        }

        .about-counter {
            flex-wrap: wrap;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .my-5 {
            margin-top: 30px !important;
            margin-bottom: 30px !important;
        }
    }

    @media (min-width: 992px) {
        .my-5 {
            margin-top: 50vh !important;
            margin-bottom: 50vh !important;
        }
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/frontend/pages/about.blade.php ENDPATH**/ ?>