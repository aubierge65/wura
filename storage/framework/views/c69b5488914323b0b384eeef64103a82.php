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

<div class="rt-about">
    <div class="container">
        <div class="breadcrumbs-custom breadcrumbs-height">
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

        <div class="row">
            <!-- Colonne gauche (texte) -->
            <div class="col-lg-6 col-md-6">
                <div class="mx-646">
                    <span class="body-font-3 ft-wt-5 text-primary-500 rt-mb-15 d-inline-block"><?php echo e(__('who_we_are')); ?></span>
                    <h2 class="lg:tw-mb-10 tw-mb-6 <?php echo e($setting->nav_color ? '' : $setting->nav_color); ?>">
                        <?php echo e(__('we_are_highly_skilled_and_professionals_team')); ?>

                    </h2>
                    <p class="paragraph body-font-2 text-gray-500 rt-mb-0">
                        <?php echo nl2br(e(__('praesent_non_sem_facilisis_hendrerit_nisi_vitae_volutpat_quam_Aliquam_metus_mauris_semper'))); ?>

                    </p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="image-container">
                    <img src="<?php echo e(asset('frontend/assets/images/job-bg1.jpg')); ?>" alt="Image à droite" class="img-fluid" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>

        <div class="rt-spacer-100 rt-spacer-md-50"></div>
    </div>
</div>
<div class="col-lg-12 col-md-12 rt-pt-md-30">
    <div class="about-counter text-center">
        <h3 class="rt-mb-40"><?php echo e(__('job_Statistics')); ?></h3>
        <div class="d-flex justify-content-center flex-wrap statistic">
            <div class="card jobcardStyle1 counterbox2 mx-3 align-items-center justify-content-center">
                <div class="card-body ">
                    <div class="rt-single-icon-box d-flex flex-column ">
                        <div class="icon-thumb">
                            <div class="icon-72">
                                <i class="ph-suitcase-simple"></i>
                            </div>
                        </div>
                        <div class="iconbox-content text-left text-center ">
                            <span class="f-size-24 ft-wt-5 rt-mb-12">
                                <span class="counter"> <?php echo e(livejob()); ?></span>
                            </span>
                            <span class="text-gray-900 f-size-16"><?php echo e(__('live_job')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card jobcardStyle1 counterbox2 mx-3">
                <div class="card-body">
                    <div class="rt-single-icon-box d-flex flex-column align-items-center">
                        <div class="icon-thumb">
                            <div class="icon-72">
                                <i class="ph-buildings"></i>
                            </div>
                        </div>
                        <div class="iconbox-content text-left text-center">
                            <span class="f-size-24 ft-wt-5 rt-mb-12">
                                <span class="counter"><?php echo e($companies); ?></span>
                            </span>
                            <span class="text-gray-900 f-size-16"><?php echo e(__('companies')); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card jobcardStyle1 counterbox2 mx-3">
                <div class="card-body">
                    <div class="rt-single-icon-box d-flex flex-column align-items-center">
                        <div class="icon-thumb">
                            <div class="icon-72">
                                <i class="ph-users"></i>
                            </div>
                        </div>
                        <div class="iconbox-content text-left text-center">
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
<div class="rt-spacer-100 rt-spacer-md-10"></div>

<!-- Brands area  start -->
<div class="brands-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center text-h4 ft-wt-5">
                <span><?php echo e(__('why_choose')); ?></span>
                <span class="text-primary-500 has-title-shape"><?php echo e(config('app.name')); ?>

                    <img src="<?php echo e(asset('frontend')); ?>/assets/images/all-img/title-shape.png" alt="shape">
                </span>
            </div>
            <div class="rt-spacer-100 rt-spacer-md-10"></div>

            <!-- Première ligne -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="ph-icon-name-1"></i> <!-- Remplacez ph-icon-name-1 par l'icône désirée -->
                        </div>
                        <h5 class="card-title"><?php echo e(__('Avantage 1')); ?></h5>
                        <p class="card-text"><?php echo e(__('Description de l\'avantage 1.')); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="ph-icon-name-2"></i> <!-- Remplacez ph-icon-name-2 par l'icône désirée -->
                        </div>
                        <h5 class="card-title"><?php echo e(__('Avantage 2')); ?></h5>
                        <p class="card-text"><?php echo e(__('Description de l\'avantage 2.')); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="ph-icon-name-3"></i> <!-- Remplacez ph-icon-name-3 par l'icône désirée -->
                        </div>
                        <h5 class="card-title"><?php echo e(__('Avantage 3')); ?></h5>
                        <p class="card-text"><?php echo e(__('Description de l\'avantage 3.')); ?></p>
                    </div>
                </div>
            </div>

            <!-- Deuxième ligne -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="ph-icon-name-4"></i> <!-- Remplacez ph-icon-name-4 par l'icône désirée -->
                        </div>
                        <h5 class="card-title"><?php echo e(__('Avantage 4')); ?></h5>
                        <p class="card-text"><?php echo e(__('Description de l\'avantage 4.')); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="ph-icon-name-5"></i> <!-- Remplacez ph-icon-name-5 par l'icône désirée -->
                        </div>
                        <h5 class="card-title"><?php echo e(__('Avantage 5')); ?></h5>
                        <p class="card-text"><?php echo e(__('Description de l\'avantage 5.')); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="ph-icon-name-6"></i> <!-- Remplacez ph-icon-name-6 par l'icône désirée -->
                        </div>
                        <h5 class="card-title"><?php echo e(__('Avantage 6')); ?></h5>
                        <p class="card-text"><?php echo e(__('Description de l\'avantage 6.')); ?></p>
                    </div>
                </div>
            </div>

            <!-- Troisième ligne -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="ph-icon-name-7"></i> <!-- Remplacez ph-icon-name-7 par l'icône désirée -->
                        </div>
                        <h5 class="card-title"><?php echo e(__('Avantage 7')); ?></h5>
                        <p class="card-text"><?php echo e(__('Description de l\'avantage 7.')); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="ph-icon-name-8"></i> <!-- Remplacez ph-icon-name-8 par l'icône désirée -->
                        </div>
                        <h5 class="card-title"><?php echo e(__('Avantage 8')); ?></h5>
                        <p class="card-text"><?php echo e(__('Description de l\'avantage 8.')); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="ph-icon-name-9"></i> <!-- Remplacez ph-icon-name-9 par l'icône désirée -->
                        </div>
                        <h5 class="card-title"><?php echo e(__('Avantage 9')); ?></h5>
                        <p class="card-text"><?php echo e(__('Description de l\'avantage 9.')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="rt-spacer-75 rt-spacer-md-30"></div>
    <!-- About feature image area  start -->
    <div class="about-feature-img">
        <div class="container">
            <div class="row grid">
                <div class="col-lg-4 col-sm-6 grid-item">
                    <div class="about-bg-img height-636 bgprefix-cover w-100 rt-rounded-8 rt-mb-24"
                        style="background-image: url(<?php echo e(asset($cms_setting->about_banner_img)); ?>)"></div>
                </div>
                <div class="col-lg-4 col-sm-6 grid-item">
                    <div class="img-middle">
                        <div class="about-bg-img height-312 bgprefix-cover w-100 rt-rounded-8 rt-mb-24"
                            style="background-image: url(<?php echo e(asset($cms_setting->about_banner_img1)); ?>);"></div>
                        <div class="about-bg-img height-312 bgprefix-cover w-100 rt-rounded-8 rt-mb-24"
                            style="background-image: url(<?php echo e(asset($cms_setting->about_banner_img2)); ?>);"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 grid-item">
                    <div class="about-bg-img height-636 bgprefix-cover w-100 rt-rounded-8 rt-mb-24"
                        style="background-image: url(<?php echo e(asset($cms_setting->about_banner_img3)); ?>)"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="rt-spacer-100 rt-spacer-md-10"></div>

    <!-- Why choose us -->
    <div class="working-process tw-bg-[#F1F2F4]">
        <div class="rt-spacer-100 rt-spacer-md-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-h4 ft-wt-5">
                    <span><?php echo e(__('why_choose')); ?></span>
                    <span class="text-primary-500 has-title-shape"><?php echo e(config('app.name')); ?>

                        <img src="<?php echo e(asset('frontend')); ?>/assets/images/all-img/title-shape.png" alt="shape">
                    </span>
                </div>
            </div>
            <div class="rt-spacer-50"></div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 rt-mb-24 position-relative">
                    <div class="rt-single-icon-box working-progress icon-center">
                        <div class="icon-thumb rt-mb-24">
                            <div class="icon-72">
                                <i class="ph-user-plus"></i>
                            </div>
                        </div>
                        <div class="iconbox-content">
                            <div class="body-font-2 rt-mb-12"><?php echo e(__('cost_effective')); ?></div>
                            <div class="body-font-4 text-gray-400">
                                <?php echo e(__('whether_you_choose_to_post_your_jobs_directly_or_have_them_indexed_automatically_our_pricing_model_is_highly_competitive_and_cost_effective')); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 rt-mb-24 position-relative">
                    <div class="rt-single-icon-box working-progress icon-center">
                        <div class="icon-thumb rt-mb-24">
                            <div class="icon-72">
                                <i class="ph-user-plus"></i>
                            </div>
                        </div>
                        <div class="iconbox-content">
                            <div class="body-font-2 rt-mb-12"><?php echo e(__('easy_to_use')); ?></div>
                            <div class="body-font-4 text-gray-400">
                                <?php echo e(__('we_have_created_a_streamlined_user_interface_so_you_can_easily_manage_your_jobs_and_candidates')); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 rt-mb-24 position-relative">
                    <div class="rt-single-icon-box working-progress icon-center">
                        <div class="icon-thumb rt-mb-24">
                            <div class="icon-72">
                                <i class="ph-user-plus"></i>
                            </div>
                        </div>
                        <div class="iconbox-content">
                            <div class="body-font-2 rt-mb-12"><?php echo e(__('quality_candidate')); ?></div>
                            <div class="body-font-4 text-gray-400">
                                <?php echo e(__('irrespective_of_your_organizations_size_we_have_a_large_pool_of_candidates_with_diverse_skill_sets_and_experience_levels')); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 rt-mb-24 tw-text-center">
                    <p class="body-font-3"><?php echo e(__('have_a_question')); ?></p>
                    <a href="<?php echo e(route('website.contact')); ?>"><?php echo e(__('contact_us')); ?></a>
                </div>
            </div>
        </div>
        <div class="rt-spacer-100 rt-spacer-md-50"></div>
    </div>

    <!-- Misson  area  start -->

    <div class="rt-spacer-100 rt-spacer-md-50"></div>
    <section class="mission">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <span
                        class="body-font-3 ft-wt-5 text-primary-500 rt-mb-15 d-inline-block"><?php echo e(__('our_mission')); ?></span>
                    <h3 class="lg:tw-mb-8 tw-mb-4"><?php echo e(__('our_mission_headline')); ?></h3>
                    <p class="body-font-2 text-gray-500 lg:tw-mb-0 tw-mb-4">
                        <?php echo nl2br(e(__('our_mission_description'))); ?>

                    </p>
                </div>
                <div class="col-md-6">
                    <div>
                        <img src="<?php echo e($cms_setting->mission_image); ?>" alt="image" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="rt-spacer-100 rt-spacer-md-50"></div>

    <!-- Testimonail Start -->
    <?php if($testimonials->count()): ?>
    <section class="testimoinals-area tw-bg-[#F1F2F4]">
        <div class="rt-spacer-100 rt-spacer-md-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4><?php echo e(__('clients_testimonial')); ?></h4>
                </div>
            </div>
            <div class="rt-spacer-40 rt-spacer-md-20"></div>
            <div class="row">
                <div class="col-12 position-parent">
                    <div class="slick-btn-gorup">
                        <button class="btn btn-light slickprev2 p-12">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5" stroke="var(--primary-500)" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 5L5 12L12 19" stroke="var(--primary-500)" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="btn btn-light slicknext2 p-12">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19" stroke="var(--primary-500)" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 5L19 12L12 19" stroke="var(--primary-500)" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="testimonail_active slick-bullet deafult_style_dot">
                        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-item">
                            <div class="testimonals-box">
                                <div class="rt-mb-12">
                                    <?php for($i = 0; $i < $testimonial->stars; $i++): ?>
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.9241 4.51321C13.3643 3.62141 14.636 3.62141 15.0762 4.51321L17.3262 9.07149C17.5009 9.42531 17.8383 9.67066 18.2287 9.72773L23.2623 10.4635C24.2462 10.6073 24.6383 11.8167 23.926 12.5105L20.2856 16.0562C20.0026 16.3319 19.8734 16.7292 19.9402 17.1187L20.7991 22.1264C20.9672 23.1068 19.9382 23.8543 19.0578 23.3913L14.5587 21.0253C14.209 20.8414 13.7913 20.8414 13.4416 21.0253L8.94252 23.3913C8.06217 23.8543 7.03311 23.1068 7.20125 22.1264L8.06013 17.1187C8.12693 16.7292 7.99773 16.3319 7.71468 16.0562L4.07431 12.5105C3.362 11.8167 3.75414 10.6073 4.73804 10.4635L9.7716 9.72773C10.162 9.67066 10.4995 9.42531 10.6741 9.07149L12.9241 4.51321Z"
                                                fill="#FFAA00" />
                                        </svg>
                                        <?php endfor; ?>
                                </div>
                                <div class="text-gray-600 body-font-3">
                                    <?php echo e(Str::words($testimonial->description, 25, '...')); ?>

                                </div>

                                <div class="rt-single-icon-box">
                                    <div class="icon-thumb rt-mr-12">
                                        <div class="userimage">
                                            <img src="<?php echo e(asset($testimonial->image)); ?>" alt="Person"
                                                draggable="false">
                                        </div>
                                    </div>
                                    <div class="iconbox-content">
                                        <div class="body-font-3"><?php echo e($testimonial->name); ?></div>
                                        <div class="body-font-4 text-gray-400"><?php echo e($testimonial->position); ?>

                                        </div>
                                    </div>
                                    <div class="iconbox-extra">
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16 28C16 30.1217 15.1571 32.1566 13.6569 33.6569C12.1566 35.1571 10.1217 36 8 36C5.87827 36 3.84344 35.1571 2.34315 33.6569C0.842854 32.1566 0 30.1217 0 28C0 23.58 8 0 8 0H12L8 20C10.1217 20 12.1566 20.8429 13.6569 22.3431C15.1571 23.8434 16 25.8783 16 28ZM36 28C36 30.1217 35.1571 32.1566 33.6569 33.6569C32.1566 35.1571 30.1217 36 28 36C25.8783 36 23.8434 35.1571 22.3431 33.6569C20.8429 32.1566 20 30.1217 20 28C20 23.58 28 0 28 0H32L28 20C30.1217 20 32.1566 20.8429 33.6569 22.3431C35.1571 23.8434 36 25.8783 36 28Z"
                                                fill="#DADDE6" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="rt-spacer-100 rt-spacer-md-50"></div>
    </section>
    <?php endif; ?>

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
        .brand-img-size {
            max-width: 100% !important;
            height: auto !important;
            max-width: 250px !important;
        }

        .breadcrumbs-custom {
            padding: 20px;
            background-color: var(--gray-20);
            transition: all 0.24s ease-in-out;
        }

        .paragraph {
            text-align: justify;
        }

        .statistic {
            gap: 5%;
        }
    </style>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/frontend/pages/about.blade.php ENDPATH**/ ?>