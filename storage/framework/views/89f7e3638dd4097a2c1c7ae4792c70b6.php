<?php $__env->startSection('description'); ?>
<?php

$data = metaData('home');
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
<section class="hero-section-3">
    <div class="container">
        <div class="tw-flex tw-justify-center tw-items-center tw-relative tw-z-50">
            <div class="tw-max-w-3xl tw-text-white tw-text-center">
                <h1 class="tw-text-white"><?php echo __('no_1_job_portal_home_3'); ?></h1>
                <p><?php echo e(__('job_seekers_stats')); ?></p>
                <form action="<?php echo e(route('website.job')); ?>" method="GET" id="job_search_form" style="margin-top:10%!important">
                    <div class="jobsearchBox d-flex flex-column flex-md-row bg-gray-10 input-transparent rt-mb-24"
                        data-aos="fadeinup" data-aos-duration="400" data-aos-delay="50">
                        <div class="flex-grow-1 fromGroup has-icon">
                            <input id="index_search" name="keyword" type="text"
                                placeholder="<?php echo e(__('job_title_keyword')); ?>" value="<?php echo e(request('keyword')); ?>"
                                autocomplete="off" class="text-gray-900">
                            <div class="icon-badge">
                                <?php if (isset($component)) { $__componentOriginalaff82f5e25571a3aa5db317d7fd41a9a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaff82f5e25571a3aa5db317d7fd41a9a = $attributes; } ?>
<?php $component = App\View\Components\Svg\SearchIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.search-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\SearchIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaff82f5e25571a3aa5db317d7fd41a9a)): ?>
<?php $attributes = $__attributesOriginalaff82f5e25571a3aa5db317d7fd41a9a; ?>
<?php unset($__attributesOriginalaff82f5e25571a3aa5db317d7fd41a9a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaff82f5e25571a3aa5db317d7fd41a9a)): ?>
<?php $component = $__componentOriginalaff82f5e25571a3aa5db317d7fd41a9a; ?>
<?php unset($__componentOriginalaff82f5e25571a3aa5db317d7fd41a9a); ?>
<?php endif; ?>
                            </div>
                            <span id="autocomplete_index_job_results"></span>
                        </div>
                        <input type="hidden" name="lat" id="lat" value="">
                        <input type="hidden" name="long" id="long" value="">
                        <?php
                        $oldLocation = request('location');
                        $map = $setting->default_map;
                        ?>

                        <?php if($map == 'google-map'): ?>
                        <div class="flex-grow-1 fromGroup has-icon banner-select no-border">
                            <input type="text" id="searchInput" placeholder="<?php echo e(__('enter_location')); ?>"
                                name="location" value="<?php echo e($oldLocation); ?>" class="text-gray-900">
                            <div id="google-map" class="d-none"></div>
                            <div class="icon-badge">
                                <?php if (isset($component)) { $__componentOriginal3f359b2694db654dd0bf9b248c38ce64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f359b2694db654dd0bf9b248c38ce64 = $attributes; } ?>
<?php $component = App\View\Components\Svg\LocationIcon::resolve(['stroke' => ''.e($setting->frontend_primary_color).'','width' => '24','height' => '24'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.location-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\LocationIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f359b2694db654dd0bf9b248c38ce64)): ?>
<?php $attributes = $__attributesOriginal3f359b2694db654dd0bf9b248c38ce64; ?>
<?php unset($__attributesOriginal3f359b2694db654dd0bf9b248c38ce64); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f359b2694db654dd0bf9b248c38ce64)): ?>
<?php $component = $__componentOriginal3f359b2694db654dd0bf9b248c38ce64; ?>
<?php unset($__componentOriginal3f359b2694db654dd0bf9b248c38ce64); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="flex-grow-1 fromGroup has-icon banner-select no-border">
                            <input name="long" class="leaf_lon" type="hidden">
                            <input name="lat" class="leaf_lat" type="hidden">
                            <input type="text" id="leaflet_search" placeholder="<?php echo e(__('enter_location')); ?>"
                                name="location" value="<?php echo e($oldLocation); ?>" autocomplete="off"
                                class="text-gray-900">
                            <div class="icon-badge">
                                <?php if (isset($component)) { $__componentOriginal3f359b2694db654dd0bf9b248c38ce64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f359b2694db654dd0bf9b248c38ce64 = $attributes; } ?>
<?php $component = App\View\Components\Svg\LocationIcon::resolve(['stroke' => ''.e($setting->frontend_primary_color).'','width' => '24','height' => '24'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.location-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\LocationIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f359b2694db654dd0bf9b248c38ce64)): ?>
<?php $attributes = $__attributesOriginal3f359b2694db654dd0bf9b248c38ce64; ?>
<?php unset($__attributesOriginal3f359b2694db654dd0bf9b248c38ce64); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f359b2694db654dd0bf9b248c38ce64)): ?>
<?php $component = $__componentOriginal3f359b2694db654dd0bf9b248c38ce64; ?>
<?php unset($__componentOriginal3f359b2694db654dd0bf9b248c38ce64); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="flex-grow-0">
                            <button type="submit"
                                class="btn btn-primary d-block d-md-inline-block "><?php echo e(__('find_job_now')); ?></button>
                        </div>

                    </div>


                </form>
                <!--Statistics-->

                <div class="container text-center">
                    <div class="row" style="margin-top:10%;">
                        <div class="col" style="margin-top:45px!important;">
                            <i class="fas fa-briefcase fa-3x"></i>
                            <p style="margin-top:15px;"><?php echo e(livejob()); ?> <?php echo e(__('emplois_stats')); ?></p>
                        </div>
                        <div class="col" style="margin-top:45px!important;">
                            <i class="fas fa-building fa-3x"></i>
                            <p style="margin-top:15px;"><?php echo e(companies()); ?> <?php echo e(__('entreprises_stats')); ?></p>
                        </div>
                        <div class="col" style="margin-top:45px!important;">
                            <i class="fas fa-user-check fa-3x"></i>
                            <p style="margin-top:15px;"><?php echo e($candidates); ?> <?php echo e(__('candidats_stats')); ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<!-- google adsense area -->
<?php if(advertisement_status('home_page_ad')): ?>
<?php if(advertisementCode('home_page_thin_ad_after_counter_section')): ?>
<div class="container my-4">
    <?php echo advertisementCode('home_page_thin_ad_after_counter_section'); ?>

</div>
<?php endif; ?>
<?php endif; ?>
<!-- google adsense area end -->

<!-- category section -->
<section class="tw-bg-primary-50 cat">
    <div class="container">
        <div class="category-slider">
            <?php $__currentLoopData = $popular_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(isset($category['slug'])): ?>
            <div class="tw-item tw-text-center">
                <a href="<?php echo e(route('website.job.category.slug', $category['slug'])); ?>"
                    class="!tw-transition-all tw-duration-300 hover:-tw-translate-y-[2px] tw-py-2.5 tw-items-center tw-flex tw-flex-col">
                    <div class="tw-flex tw-justify-between tw-items-center tw-w-full">
                        <span class="tw-text-2xl tw-text-left">
                            <i class="<?php echo e($category['icon']); ?>"></i>
                        </span>
                        <!-- <p class="tw-mb-0 tw-text-sm"> 
                            <?php echo e($category['jobs_count']); ?> <?php echo e(__('open_positions')); ?>

                        </p> -->
                    </div>

                    <!-- Titre au centre -->
                    <div class="tw-flex-1 tw-w-full tw-text-left">
                        <h4 class="tw-mb-0 tw-text-lg"><?php echo e($category['name']); ?></h4>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- Old category section -->

<!-- <section class="tw-bg-primary-50 md:tw-py-20 tw-py-12">
    <div class="container">
        <div>
            <h2><?php echo e(__('top_categories')); ?></h2>
        </div>
        <div class="tw-mt-8 tw-relative tw-z-50">
            <div class="tw-grid tw-grid-cols-1  md:tw-grid-cols-2 lg:tw-grid-cols-4 tw-gap-6">
                <?php
                $popular_categories = $popular_categories->toArray();
                ksort($popular_categories);
                ?>
                <?php $__currentLoopData = $popular_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(isset($category['slug'])): ?>
                <a href="<?php echo e(route('website.job.category.slug', $category['slug'])); ?>"
                    class="!tw-bg-white tw-transition-all tw-duration-300 hover:-tw-translate-y-[2px] tw-shadow-md tw-rounded-md tw-px-4 tw-py-2.5 tw-flex tw-gap-4 tw-items-center">
                    <span class="tw-text-2xl">
                        <i class="<?php echo e($category['icon']); ?>"></i>
                    </span>
                    <div class=" tw-flex-1">
                        <h4 class="tw-mb-0 tw-text-lg"><?php echo e($category['name']); ?></h4>
                        <p class="tw-mb-0 tw-text-sm"><?php echo e($category['jobs_count']); ?> <?php echo e(__('open_positions')); ?></p>
                    </div>
                </a>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </div>
</section>  -->
<!-- jobs card -->
<section class="md:tw-py-20 tw-py-12">
    <div class="container">
        <div class="row md:tw-pb-12 tw-pb-8">
            <div class="col-12">
                <div class="tw-flex tw-gap-3 tw-items-center tw-flex-wrap">
                    <div class="flex-grow-1">
                        <h4 class="tw-mb-0">
                            <!-- <?php echo e(__('top')); ?> -->
                            <span class="text-primary-700 has-title-shape tw-text-3xl" st><?php echo e(__('featured_job')); ?>

                                <img src="<?php echo e(asset('frontend')); ?>/assets/images/all-img/title-shape.png"
                                    alt="">
                            </span>
                        </h4>
                    </div>
                    <a href="<?php echo e(route('website.job')); ?>" class="flex-grow-0 rt-pt-md-10">
                        <button class="btn btn-outline-primary !tw-border-primary-500">
                            <span class="button-content-wrapper ">
                                <span class="button-icon align-icon-right">
                                    <i class="ph-arrow-right"></i>
                                </span>
                                <span>
                                    <?php echo e(__('view_all')); ?>

                                </span>
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if($featured_jobs && count($featured_jobs) > 0): ?>
            <?php $__currentLoopData = $featured_jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-3 col-md-4 fade-in-bottom  condition_class rt-mb-24 tw-self-stretch">
                <a href="<?php echo e(route('website.job.details', $job->slug)); ?>"
                    class="tw-h-full card tw-card tw-block jobcardStyle1 tw-border-gray-200 hover:!-tw-translate-y-1 hover:tw-bg-primary-50 tw-bg-gray-50"
                    tabindex="0">
                    <div class="tw-p-6 tw-flex tw-gap-3 tw-flex-col tw-justify-between tw-h-full">
                        <div>
                            <div class="tw-mb-1.5">
                                <span class="tw-text-[#18191C] tw-text-lg tw-font-medium">
                                    <?php echo e($job->title); ?>

                                </span>
                            </div>
                            <div class="tw-flex tw-flex-wrap tw-gap-2 tw-items-center tw-mb-1.5">
                                <span
                                    class="tw-text-[#0BA02C] tw-text-[12px] tw-leading-[12px] tw-font-semibold tw-bg-[#E7F6EA] tw-px-2 tw-py-1 tw-rounded-[3px]">
                                    <?php echo e($job->job_type ? $job->job_type->name : ''); ?>

                                </span>
                            </div>
                            <div>
                                <span class="tw-text-sm tw-text-[#767F8C]">
                                    <?php if($job->salary_mode == 'range'): ?>
                                    <?php echo e(currencyAmountShort($job->min_salary)); ?> -
                                    <?php echo e(currencyAmountShort($job->max_salary)); ?>

                                    <?php echo e(currentCurrencyCode()); ?>

                                    <?php else: ?>
                                    <?php echo e($job->custom_salary); ?>

                                    <?php endif; ?>
                                </span>
                            </div>
                        </div>
                        <div class="tw-flex tw-items-center tw-gap-2">
                            <span>
                                <div class="tw-w-[56px] tw-h-[56px]">
                                    <img class="tw-rounded-lg tw-w-[56px] tw-h-[56px]"
                                        src="<?php echo e($job?->company?->logo_url); ?>" alt=""
                                        draggable="false">

                                </div>
                            </span>
                            <div class="iconbox-content">
                                <div class="tw-mb-1 tw-inline-flex">
                                    <span
                                        class="tw-text-base tw-font-medium tw-text-[#18191C]"><?php echo e($job->company->user->name ?? " "); ?></span>
                                </div>
                                <span class="tw-flex tw-items-center tw-gap-1">
                                    <i class="ph-map-pin"></i>
                                    <span class="tw-location"><?php echo e($job->country); ?></span>
                                </span>
                            </div>
                        </div>
                        <div>
                            <button
                                class="btn hover:tw-text-white hover:tw-bg-primary-700 tw-px-2.5 tw-py-1 tw-text-white tw-bg-primary-500"><?php echo e(__('apply_now')); ?></button>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- create profile -->
<section class="tw-bg-primary-50 md:tw-py-20 tw-py-12 !tw-border-t !tw-border-b !tw-border-primary-100">
    <div class="container">
        <div class="row tw-items-center">
            <div class="col-lg-6">
                <img class="tw-rounded-lg" src="https://jobbox.archielite.com/storage/pages/img-profile.png"
                    alt="jobBox">
            </div>
            <div class="col-lg-6">
                <div class="lg:tw-ps-12 tw-pt-6 lg:tw-pt-0">
                    <h5 class="tw-text-primary-500 tw-mb-4"><?php echo e(__('create_profile')); ?></h5>
                    <h2 class=""><?php echo e(__('create_your_personal_account_profile')); ?></h2>
                    <p class=""><?php echo e(__('work_profile_description')); ?></p>
                    <div class="">
                        <a href="<?php echo e(route('register')); ?>" class="btn btn-primary"><?php echo e(__('create_profile')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- working process section or why wura ? -->
<section class="working-process tw-bg-white">
    <div class="rt-spacer-100 rt-spacer-md-50"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-h4 ft-wt-5">
                <span class="text-primary-700 has-title-shape"><?php echo e(__('why_choose_us')); ?> ?
                    <img src="<?php echo e(asset('frontend')); ?>/assets/images/all-img/title-shape.png" alt="">
                </span>
                <!-- <label for="" ><?php echo e(__('why_choose_us')); ?> ?</label> -->
            </div>
        </div>
        <div class="rt-spacer-50"></div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 rt-mb-24 position-relative">
                <div class="has-arrow first">
                    <img src="<?php echo e(asset('frontend')); ?>/assets/images/all-img/arrow-1.png" alt=""
                        draggable="false">
                </div>
                <div class="rt-single-icon-box hover:!tw-bg-primary-50 working-progress icon-center">
                    <div class="icon-thumb rt-mb-24">
                        <div class="icon-72">
                            <i class="ph-briefcase"></i>
                        </div>
                    </div>
                    <div class="iconbox-content">
                        <div class="body-font-2 rt-mb-12"><?php echo e(__('professionalisme')); ?></div>
                        <div class="body-font-4 text-gray-400">
                            <?php echo e(__('professionalisme_sentence')); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 rt-mb-24 col-sm-6 position-relative">
                <div class="has-arrow middle">
                    <img src="<?php echo e(asset('frontend')); ?>/assets/images/all-img/arrow-2.png" alt=""
                        draggable="false">
                </div>
                <div class="rt-single-icon-box hover:!tw-bg-primary-50 working-progress icon-center">
                    <div class="icon-thumb rt-mb-24">
                        <div class="icon-72">
                            <i class="ph-circle-wavy-check"></i>
                        </div>
                    </div>
                    <div class="iconbox-content">
                        <div class="body-font-2 rt-mb-12"><?php echo e(__('announce')); ?></div>
                        <div class="body-font-4 text-gray-400">
                            <?php echo e(__('announce_sentence')); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 rt-mb-24 col-sm-6 position-relative">
                <div class="has-arrow last">
                    <img src="<?php echo e(asset('frontend')); ?>/assets/images/all-img/arrow-1.png" alt=""
                        draggable="false">
                </div>
                <div class="rt-single-icon-box hover:!tw-bg-primary-50 working-progress icon-center">
                    <div class="icon-thumb rt-mb-24">
                        <div class="icon-72">
                            <i class="ph-handshake"></i>
                        </div>
                    </div>
                    <div class="iconbox-content">
                        <div class="body-font-2 rt-mb-12"><?php echo e(__('community')); ?></div>
                        <div class="body-font-4 text-gray-400">
                            <?php echo e(__('community_sentence')); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 rt-mb-24 col-sm-6">
                <div class="rt-single-icon-box hover:!tw-bg-primary-50 working-progress icon-center">
                    <div class="icon-thumb rt-mb-24">
                        <div class="icon-72">
                            <i class="ph-bell"></i>
                        </div>
                    </div>
                    <div class="iconbox-content">
                        <div class="body-font-2 rt-mb-12"><?php echo e(__('update_notif')); ?></div>
                        <div class="body-font-4 text-gray-400">
                            <?php echo e(__('update_sentence')); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rt-spacer-100 rt-spacer-md-50"></div>
</section>


<!-- google adsense area -->
<?php if(advertisement_status('home_page_ad')): ?>
<?php if(advertisementCode('home_page_fat_ad_after_workingprocess_section')): ?>
<div class="container my-4">
    <?php echo advertisementCode('home_page_fat_ad_after_workingprocess_section'); ?>

</div>
<?php endif; ?>
<?php endif; ?>
<!-- google adsense area end -->

<!-- google adsense area -->
<?php if(advertisement_status('home_page_ad')): ?>
<?php if(advertisementCode('home_page_fat_ad_after_featuredjob_section')): ?>
<div class="container my-4">
    <?php echo advertisementCode('home_page_fat_ad_after_featuredjob_section'); ?>

</div>
<?php endif; ?>
<?php endif; ?>
<!-- google adsense area end -->
<!-- top companaies -->
<?php if($top_companies && count($top_companies) > 0): ?>
<?php if(!auth('user')->check() || (auth('user')->check() && authUser()->role == 'candidate')): ?>
<section class=" tw-bg-primary-50 md:tw-py-20 tw-py-12">
    <div class="container">
        <div class="row md:tw-pb-12 tw-pb-8">
            <div class="col-12">
                <div class="d-flex flex-wrap">
                    <div class="flex-grow-1">
                        <h4>
                            <!-- <?php echo e(__('top')); ?> -->
                            <span
                                class="text-primary-700 tw-text-3xl has-title-shape"><?php echo e(__('companies')); ?>

                                <img src="<?php echo e(asset('frontend')); ?>/assets/images/all-img/title-shape.png"
                                    alt="">
                            </span>
                        </h4>
                    </div>
                    <a href="<?php echo e(route('website.company')); ?>" class="flex-grow-0 rt-pt-md-10">
                        <button class="btn btn-primary">
                            <span class="button-content-wrapper ">
                                <span class="button-icon align-icon-right">
                                    <i class="ph-arrow-right"></i>
                                </span>
                                <span>
                                    <?php echo e(__('view_all')); ?>

                                </span>
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $top_companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-3 col-md-4 fade-in-bottom  condition_class rt-mb-24 tw-self-stretch">
                <a href="<?php echo e(route('website.employe.details', $company->user->username)); ?>"
                    class="card jobcardStyle1 tw-h-full hover:!-tw-translate-y-1">
                    <div class="tw-p-6 tw-flex tw-flex-col tw-gap-1.5">
                        <div class="tw-w-14 tw-h-14">
                            <img class="tw-w-full tw-h-full tw-object-cover"
                                src="<?php echo e($company->logo_url); ?>" alt="" draggable="false">
                        </div>
                        <div>
                            <div class="">
                                <span
                                    class="tw-text-[#191F33] tw-text-base tw-font-medium"><?php echo e($company->user->name); ?></span>
                            </div>
                            <span
                                class="tw-inline-flex tw-text-sm tw-gap-1 tw-items-center text-gray-400 ">
                                <i class="ph-map-pin"></i>
                                <?php echo e($company->country); ?>

                            </span>
                        </div>
                        <div class="tw-flex tw-flex-wrap tw-gap-1.5">
                            <span
                                class="tw-px-2 tw-py-0.5 tw-inline-block tw-text-xs tw-font-medium tw-text-[#474C54] tw-rounded-[52px] tw-bg-primary-50 ll-primary-border">
                                <?php echo e($company?->industry?->name ?? ''); ?>

                            </span>
                            <span
                                class="tw-px-2 tw-py-0.5 tw-inline-block tw-text-xs tw-font-medium tw-text-[#474C54] tw-rounded-[52px] tw-bg-primary-50 ll-primary-border"><?php echo e($company->jobs_count); ?>

                                <?php echo e(__('open_position')); ?></span>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>
<!--Testimonials section-->
<section class="md:tw-py-20 tw-py-12">
    <div class="container">
        <div class="row md:tw-pb-12 tw-pb-8">
            <div class="col-12">
                <div class="d-flex flex-wrap">
                    <div class="flex-grow-1">
                        <h4>
                            <span class="text-primary-700 tw-text-3xl has-title-shape">
                                <?php echo e(__('testimonials')); ?>

                                <img src="<?php echo e(asset('frontend')); ?>/assets/images/all-img/title-shape.png" alt="">
                            </span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row category-slider"> <!-- Ajout de la classe category-slider -->
            <?php $__currentLoopData = $top_companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-3 col-md-4 fade-in-bottom condition_class rt-mb-24 tw-self-stretch">
                <a href="" class="card jobcardStyle1 tw-bg-primary-50 tw-h-full hover:!-tw-translate-y-1">
                    <div class="tw-p-6 tw-flex tw-flex-col tw-items-center">
                        <!-- Étoiles jaunes au-dessus -->
                        <div class="tw-flex tw-gap-1 tw-mb-3">
                            <span class="tw-text-yellow-500">&#9733;</span>
                            <span class="tw-text-yellow-500">&#9733;</span>
                            <span class="tw-text-yellow-500">&#9733;</span>
                            <span class="tw-text-yellow-500">&#9733;</span>
                            <span class="tw-text-yellow-500">&#9733;</span>
                        </div>
                        <p class="tw-text-gray-500 tw-text-center tw-mb-4">
                            "Un service exceptionnel! L'équipe a vraiment pris en charge mes besoins et a dépassé mes attentes."
                        </p>
                        <div class="tw-flex tw-items-center tw-gap-2">
                            <div class="tw-w-10 tw-h-10 tw-rounded-full tw-overflow-hidden">
                                <img class="tw-w-full tw-h-full tw-object-cover"
                                    src="<?php echo e($company->logo_url); ?>" alt="" draggable="false">
                            </div>
                            <span class="tw-text-[#191F33] tw-text-base tw-font-medium">
                                <?php echo e($company->user->name); ?>

                            </span>
                        </div>
                    </div>
                </a>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- google adsense area -->
<?php if(advertisement_status('home_page_ad')): ?>
<?php if(advertisementCode('home_page_fat_ad_after_client_section')): ?>
<div class="container my-4">
    <?php echo advertisementCode('home_page_fat_ad_after_client_section'); ?>

</div>
<?php endif; ?>
<?php endif; ?>
<!-- google adsense area end -->
<!-- newsletter -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/fontawesome-free/css/all.min.css">
<?php if (isset($component)) { $__componentOriginalc55f239e5bf30e5997dd7869a18fb76b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc55f239e5bf30e5997dd7869a18fb76b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.map.leaflet.autocomplete_links','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('map.leaflet.autocomplete_links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc55f239e5bf30e5997dd7869a18fb76b)): ?>
<?php $attributes = $__attributesOriginalc55f239e5bf30e5997dd7869a18fb76b; ?>
<?php unset($__attributesOriginalc55f239e5bf30e5997dd7869a18fb76b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc55f239e5bf30e5997dd7869a18fb76b)): ?>
<?php $component = $__componentOriginalc55f239e5bf30e5997dd7869a18fb76b; ?>
<?php unset($__componentOriginalc55f239e5bf30e5997dd7869a18fb76b); ?>
<?php endif; ?>
<?php echo $__env->make('map::links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    .hero-section-3 {
    padding: 100px 0;
    background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
                url('<?php echo e(asset('frontend/assets/images/working.jpg')); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    height: 90vh;
}



    .hero-section-3::after {
        background-color: black;
        height: 100%;
        left: 0;
        opacity: .5;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 1;
    }

    span.select2-container--default .select2-selection--single {
        border: none !important;
    }

    span.select2-selection.select2-selection--single {
        outline: none;
    }

    .marginleft {
        margin-left: 10px !important;
    }

    .category-slider .slick-slide {
        margin: 0px 8px;
    }

    .category-slider .slick-dots {
        bottom: -32px;
    }

    .category-slider .slick-dots li {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 0px;
    }

    .category-slider .slick-dots li button {
        background: rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        width: 10px;
        height: 10px;
    }

    .category-slider .slick-dots li.slick-active button {
        background: rgba(255, 255, 255, 1);
        width: 12px;
        height: 12px;
    }

    .category-slider .slick-dots li button::before {
        display: none;
    }

    body:has(.hero-section-2) .n-header--bottom {
        box-shadow: none !important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    /** For all categorie slide */
    $(document).ready(function() {
        $('.category-slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600, // Pour les petits écrans
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                    }
                },
                {
                    breakpoint: 480, // Pour les très petits écrans (mobiles)
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false
                    }
                }
            ]
        });

        $('.category-slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600, // Pour les petits écrans
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                    }
                },
                {
                    breakpoint: 480, // Pour les très petits écrans (mobiles)
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false
                    }
                }
            ]
        });
    });
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/frontend/pages/index-3.blade.php ENDPATH**/ ?>