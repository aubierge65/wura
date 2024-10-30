<?php $__env->startSection('description'); ?>
<?php echo e(strip_tags($job->description)); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('og:image'); ?>
<?php if($job->company): ?>
<?php echo e($job->company->logo_url); ?>

<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
<?php echo e($job->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ld-data'); ?>
<?php
$employment_type = App\Services\Jobs\GoogleJobPostingFormatter::formatJobType(optional($job->job_type)->slug ?? '');
$salary_type = App\Services\Jobs\GoogleJobPostingFormatter::formatSalaryType($job->salary_type->slug);
$currency = currentCurrencyCode();

$min_salary = $job->max_salary ? currencyConversion($job->max_salary, $currency) : 0;
$max_salary = $job->max_salary ? currencyConversion($job->max_salary, $currency) : 0;
?>


<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "JobPosting",
        "title": "<?php echo e($job->title); ?>",
        "url": "<?php echo e(route('website.job.details', $job->slug)); ?>",
        "description": "<?php echo $job->description; ?>",
        "identifier": {
            "@type": "PropertyValue",
            "name": "<?php echo e(optional(optional($job->company)->user)->name); ?>",
            "value": "<?php echo e(optional(optional($job->company)->user)->id); ?>"
        },
        "datePosted": "<?php echo e($job->created_at); ?>",
        <?php if(!empty($job -> deadline)): ?>
        "validThrough": "<?php echo e($job->deadline); ?>",
        <?php endif; ?>
        <?php if($job -> is_remote): ?>
        "jobLocationType": "TELECOMMUTE"
        <?php endif; ?>
        <?php if(!empty($employment_type)): ?>
        "employmentType": "<?php echo e($employment_type); ?>",
        <?php endif; ?> "hiringOrganization": {
            "@type": "Organization",
            "name": "<?php echo e($job->company ? $job->company->user->name : 'JobPilot'); ?>",
            "sameAs": "https://www.google.com",
            "logo": "<?php echo e($job->company ? $job->company->logo_url : ''); ?>"
        },
        "jobLocation": {
            "@type": "Place",
            "address": {
                "@type": "PostalAddress",
                <?php if(!empty($job->locality)): ?>
                "addressLocality": "<?php echo e($job->locality); ?>",
                <?php endif; ?>
                <?php if(!empty($job->region)): ?>
                "addressRegion": "<?php echo e($job->region); ?>",
                <?php endif; ?>
                <?php if(!empty($job->postcode)): ?>
                "postalCode": "<?php echo e($job->postcode); ?>",
                <?php endif; ?>
                <?php if(!empty($job->country)): ?>
                "addressCountry": "<?php echo e($job->country); ?>",
                <?php endif; ?>
            }
        },
        "baseSalary": {
            "@type": "MonetaryAmount",
            "currency": "USD",
            "value": {
                "@type": "QuantitativeValue",
                "minValue": {
                    {
                        $min_salary ?? 0
                    }
                },
                "maxValue": {
                    {
                        $max_salary ?? 0
                    }
                },
                <?php if(!empty($salary_type)): ?>
                "unitText": "<?php echo e($salary_type); ?>"
                <?php endif; ?>
            }
        }
    }
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<?php
$lat = $job->lat;
$long = $job->long;
?>
<!-- <div class="breadcrumbs breadcrumbs-height">
        <div class="container">
            <div class="breadcrumb-menu">
                <h6 class="f-size-18 m-0">
                    <?php echo e(__('job_details')); ?>

                </h6>
                <ul>
                    <li><a href="<?php echo e(route('website.home')); ?>"><?php echo e(__('home')); ?></a></li>
                    <li>/</li>
                    <li><?php echo e(__('job_details')); ?></li>
                </ul>
            </div>
        </div>
    </div> -->
<!--Single job content Area-->
<div class="single-job-content h-auto pb-5">
    <div class="breadcrumbs-height job-details-title-box rt-pt-50 bg-white"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('<?php echo e(asset('frontend/assets/images/job-bg1.jpg')); ?>'); background-size: cover; background-position: center; height: 45vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="job-details-title-box-card jobcardStyle1 tw-pb-9">
                        <?php if($job->status == 'pending'): ?>
                        <?php if($job->waiting_for_edit_approval): ?>
                        <div class="alert bg-warning" role="alert">
                            <strong><?php echo e(__('your_corrections_are_pending_please_wait_for_admin_approved_to_modify_your_changes')); ?></strong>
                        </div>
                        <?php else: ?>
                        <div class="alert bg-warning" role="alert">
                            <strong><?php echo e(__('this_job_is_now_pending_please_wait_for_admin_approval')); ?></strong>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>

                        <div class="tw-flex tw-items-center tw-justify-between tw-gap-4 tw-flex-col md:tw-flex-row"
                            style="margin-top:5%;">
                            <div class="tw-flex tw-items-center tw-gap-4 tw-flex-grow">
                                <?php if($job->company): ?>
                                <a href="<?php echo e(route('website.employe.details', $job->company->user->username)); ?>"
                                    class="!tw-flex-shrink-0">
                                    <img src="<?php echo e($job->company->getLogoUrl()); ?>" alt="logo" draggable="false"
                                        style="width: 20vh;" class="tw-rounded-md object-cover">
                                </a>
                                <?php else: ?>
                                <svg style="width: 150px; height: 150px; color: black"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                                </svg>
                                <?php endif; ?>

                                <div class="tw-flex-grow">
                                    <div class="post-info2">
                                        <div class="post-main-title2 tw-text-primary-700">
                                            <h1 style="font-size: 35px;">
                                                <?php echo e($job->title); ?>

                                            </h1>
                                        </div>
                                        <div class="tw-flex tw-flex-wrap tw-items-center tw-gap-2">

                                            <!-- <span class="tw-text-gray-600 tw-text-sm tw-flex tw-items-center">
                                                <i class="ph-map-pin f-size-30 text-primary-500"></i>
                                                <?php echo e($job->country); ?>

                                            </span> -->
                                            <!-- Type d'emploi -->
                                            <span class="tw-text-gray-600 tw-text-sm tw-flex tw-items-center">
                                                <i class="ph-suitcase-simple f-size-30 text-primary-500"></i>
                                                <?php echo e($job->job_type ? $job->job_type->name : ''); ?>

                                            </span>

                                            <!-- Depuis quand il a été publié -->
                                            <span class="tw-text-gray-600 tw-text-sm tw-flex tw-items-center">
                                                <i class="ph-calendar-blank f-size-30 text-primary-500"></i>
                                                Publié <?php echo e($job->created_at->diffForHumans()); ?>

                                            </span>

                                            <!-- Salaire -->
                                            <!-- <span class="tw-text-gray-300 tw-text-sm tw-flex tw-items-center">
                                                <i class="ph-currency-dollar f-size-30 text-primary-500 tw-mr-2"></i>
                                                <?php echo e($job->min_salary); ?> - <?php echo e($job->max_salary); ?>

                                            </span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tw-flex !tw-items-start !tw-gap-2.5">
                                <div>
                                    <?php if(auth()->guard()->check()): ?>
                                    <?php if(auth()->user()->role == 'candidate'): ?>
                                    <a href="<?php echo e(route('website.job.bookmark', $job->slug)); ?>"
                                        class="bg-gray-10 text-primary-500 plain-button icon-56 hoverbg-primary-50">
                                        <?php if($job->bookmarked): ?>
                                        <?php if (isset($component)) { $__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.bookmark-icon','data' => ['width' => '24','height' => '24','fill' => '#0A65CC','stroke' => '#0A65CC']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.bookmark-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '24','height' => '24','fill' => '#0A65CC','stroke' => '#0A65CC']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff)): ?>
<?php $attributes = $__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff; ?>
<?php unset($__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff)): ?>
<?php $component = $__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff; ?>
<?php unset($__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff); ?>
<?php endif; ?>
                                        <?php else: ?>
                                        <?php if (isset($component)) { $__componentOriginal7a72b9226684e9407985bc93a886d857 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a72b9226684e9407985bc93a886d857 = $attributes; } ?>
<?php $component = App\View\Components\Svg\UnmarkIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.unmark-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\UnmarkIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a72b9226684e9407985bc93a886d857)): ?>
<?php $attributes = $__attributesOriginal7a72b9226684e9407985bc93a886d857; ?>
<?php unset($__attributesOriginal7a72b9226684e9407985bc93a886d857); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a72b9226684e9407985bc93a886d857)): ?>
<?php $component = $__componentOriginal7a72b9226684e9407985bc93a886d857; ?>
<?php unset($__componentOriginal7a72b9226684e9407985bc93a886d857); ?>
<?php endif; ?>
                                        <?php endif; ?>
                                    </a>
                                    <?php else: ?>
                                    <button type="button"
                                        class=" bg-gray-10 text-primary-500 plain-button icon-56 hoverbg-primary-50 no_permission">
                                        <?php if (isset($component)) { $__componentOriginal7a72b9226684e9407985bc93a886d857 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a72b9226684e9407985bc93a886d857 = $attributes; } ?>
<?php $component = App\View\Components\Svg\UnmarkIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.unmark-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\UnmarkIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a72b9226684e9407985bc93a886d857)): ?>
<?php $attributes = $__attributesOriginal7a72b9226684e9407985bc93a886d857; ?>
<?php unset($__attributesOriginal7a72b9226684e9407985bc93a886d857); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a72b9226684e9407985bc93a886d857)): ?>
<?php $component = $__componentOriginal7a72b9226684e9407985bc93a886d857; ?>
<?php unset($__componentOriginal7a72b9226684e9407985bc93a886d857); ?>
<?php endif; ?>
                                    </button>
                                    <?php endif; ?>
                                    <?php else: ?>
                                    <button type="button"
                                        class="bg-gray-10 text-primary-500 plain-button icon-56 hoverbg-primary-50 login_required">
                                        <?php if (isset($component)) { $__componentOriginal7a72b9226684e9407985bc93a886d857 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a72b9226684e9407985bc93a886d857 = $attributes; } ?>
<?php $component = App\View\Components\Svg\UnmarkIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.unmark-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\UnmarkIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a72b9226684e9407985bc93a886d857)): ?>
<?php $attributes = $__attributesOriginal7a72b9226684e9407985bc93a886d857; ?>
<?php unset($__attributesOriginal7a72b9226684e9407985bc93a886d857); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a72b9226684e9407985bc93a886d857)): ?>
<?php $component = $__componentOriginal7a72b9226684e9407985bc93a886d857; ?>
<?php unset($__componentOriginal7a72b9226684e9407985bc93a886d857); ?>
<?php endif; ?>
                                    </button>
                                    <?php endif; ?>
                                </div>
                                <?php if($job->status == 'expired'): ?>
                                <button type="button" class="btn btn-danger btn-lg d-block">
                                    <span class="button-content-wrapper ">
                                        <span class="button-text">
                                            <?php echo e(__('expired')); ?>

                                        </span>
                                    </span>
                                </button>
                                <?php else: ?>
                                <?php if($job->can_apply): ?>
                                <div class="max-311">
                                    <?php if($job->deadline_active): ?>
                                    <?php if(auth()->guard('user')->check()): ?>
                                    <?php if(auth()->user()->role == 'candidate'): ?>
                                    <?php if(!$job->applied): ?>
                                    <button onclick="applyJobb(<?php echo e($job->id); ?>, '<?php echo e(addslashes($job->title)); ?>')"
                                        class="btn btn-primary apply">
                                        <span class="button-content-wrapper">
                                            <span class="button-icon align-icon-right">
                                                <i class="ph-arrow-right"></i>
                                            </span>
                                            <span class="button-text"><?php echo e(__('apply_now')); ?></span>
                                        </span>
                                    </button>


                                    <?php else: ?>
                                    <button type="button" class="d-block btn btn-success apply">
                                        <span class="button-content-wrapper ">
                                            <span class="button-text">
                                                <?php echo e(__('already_applied')); ?>

                                            </span>
                                        </span>
                                    </button>
                                    <?php endif; ?>
                                    <?php else: ?>
                                    <button type="button" class="btn btn-primary btn-lg d-block no_permission">
                                        <span class="button-content-wrapper ">
                                            <span class="button-icon align-icon-right"><i
                                                    class="ph-arrow-right"></i></span>
                                            <span class="button-text"><?php echo e(__('apply_now')); ?></span>
                                        </span>
                                    </button>
                                    <?php endif; ?>
                                    <?php else: ?>
                                    <button type="button" class=" d-block btn btn-primary login_required">
                                        <span class="button-content-wrapper ">
                                            <span class="button-icon align-icon-right"><i
                                                    class="ph-arrow-right"></i></span>
                                            <span class="button-text"><?php echo e(__('apply_now')); ?></span>
                                        </span>
                                    </button>
                                    <?php endif; ?>
                                    <span class="d-block rt-pt-10 text-lg-end text-start f-size-14 text-gray-700 ">
                                        <?php echo e(__('job_expire')); ?>

                                        <span class="text-danger-500">
                                            <?php echo e($job->days_remaining); ?>

                                        </span>
                                    </span>
                                    <?php else: ?>
                                    <button type="button" class="btn btn-danger btn-lg d-block">
                                        <span class="button-content-wrapper ">
                                            <span class="button-text">
                                                <?php echo e(__('expired')); ?>

                                            </span>
                                        </span>
                                    </button>
                                    <?php endif; ?>
                                </div>
                                <?php else: ?>
                                <?php if($job->apply_on == 'custom_url'): ?>
                                <a href="<?php echo e($job->apply_url); ?>" target="_blank" class="btn btn-primary btn-lg d-block">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                        <span class="button-text"><?php echo e(__('apply_now')); ?></span>
                                    </span>
                                </a>
                                <?php else: ?>
                                <a href="mailto:<?php echo e($job->apply_email); ?>" class="btn btn-primary btn-lg d-block">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                        <span class="button-text"><?php echo e(__('apply_now')); ?></span>
                                    </span>
                                </a>
                                <?php endif; ?>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- google adsense area -->
    <?php if(advertisement_status('job_detailpage_ad')): ?>
    <?php if(advertisementCode('job_detailpage_fat_ad_header_section')): ?>
    <div class="container my-4">
        <?php echo advertisementCode('job_detailpage_fat_ad_header_section'); ?>

    </div>
    <?php endif; ?>
    <?php endif; ?>
    <!-- google adsense area end -->
    <div class="container tw-pt-8">
        <div class="row">
            <div class="col-lg-7 rt-mb-lg-30">
                <div class="body-font-1 ft-wt-5 rt-mb-20 tw-text-2xl">
                    <?php echo e(__('job_description')); ?>

                </div>
                <div class="job-desc">
                    <?php echo $job->description; ?>

                </div>
                <!-- Ajouter Emplacement sur la Carte (Statique) -->
                <div class="body-font-1 ft-wt-5 rt-mb-20 tw-text-2xl">
                    <?php echo e(__('location')); ?>

                </div>
                <div class="job-desc">
                    <iframe
                        src="https://www.openstreetmap.org/export/embed.html?bbox=-180%2C-90%2C180%2C90&amp;layer=mapnik&amp;marker=0%2C0"
                        width="100%"
                        height="500"
                        style="border: 1px solid black">
                    </iframe>
                </div>
            </div>
            <div class="col-lg-5">
                <!--  <div class="p-32 border border-2 border-primary-50 rt-rounded-12 rt-mb-24 lg:max-536">
                     <div class="row">
                        <?php if(advertisement_status('job_detailpage_ad')): ?>
                        <?php if(advertisement_status('job_detailpage_right_ad')): ?>
                        <?php if(advertisementCode('job_detailpage_fat_ad_before_salary_section')): ?>
                        <div class="container my-4">
                            <?php echo advertisementCode('job_detailpage_fat_ad_before_salary_section'); ?>

                        </div>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endif; ?> -->
                <!-- google adsense area end -->

                <!-- <div class="col-sm-6 salery tw-salery-border">
                            <h4><?php echo e(__('salary')); ?></h4>

                            <?php if($job->salary_mode == 'range'): ?>
                            <h2>
                                <?php echo e($job->min_salary); ?> - <?php echo e($job->max_salary); ?> <?php echo e(currentCurrencyCode()); ?>

                            </h2>
                          <?php else: ?>
                            <h6 class="tw-text-center"><?php echo e($job->custom_salary); ?></h6>
                            <?php endif; ?>
                            <p><?php echo e($job->salary_type->name); ?> <?php echo e(__('based')); ?></p>
                        </div> -->
                <!-- <?php if($job->is_remote): ?>
                        <div class="col-sm-6 job-type">
                            <div class="remote">
                                <div class="text-center tw-mb-2">
                                    <?php if (isset($component)) { $__componentOriginal26003a576b3015564abe9e5fa0875595 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26003a576b3015564abe9e5fa0875595 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.briefcase-lg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.briefcase-lg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal26003a576b3015564abe9e5fa0875595)): ?>
<?php $attributes = $__attributesOriginal26003a576b3015564abe9e5fa0875595; ?>
<?php unset($__attributesOriginal26003a576b3015564abe9e5fa0875595); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26003a576b3015564abe9e5fa0875595)): ?>
<?php $component = $__componentOriginal26003a576b3015564abe9e5fa0875595; ?>
<?php unset($__componentOriginal26003a576b3015564abe9e5fa0875595); ?>
<?php endif; ?>
                                </div>
                                <h4 class="tw-mb-[2px]"><?php echo e(__('remote_job')); ?></h4>
                                <p class="tw-mb-0"><?php echo e(__('worldwide')); ?></p>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="col-sm-6 job-type">
                            <div class="remote">
                                <div class="text-center tw-mb-2">
                                    <?php if (isset($component)) { $__componentOriginala49b0b5c4a322b13f3ee6a69079c0110 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala49b0b5c4a322b13f3ee6a69079c0110 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.map-tripod-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.map-tripod-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala49b0b5c4a322b13f3ee6a69079c0110)): ?>
<?php $attributes = $__attributesOriginala49b0b5c4a322b13f3ee6a69079c0110; ?>
<?php unset($__attributesOriginala49b0b5c4a322b13f3ee6a69079c0110); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala49b0b5c4a322b13f3ee6a69079c0110)): ?>
<?php $component = $__componentOriginala49b0b5c4a322b13f3ee6a69079c0110; ?>
<?php unset($__componentOriginala49b0b5c4a322b13f3ee6a69079c0110); ?>
<?php endif; ?>
                                </div>
                                <h4 class="tw-mb-[2px]"><?php echo e(__('location')); ?></h4>
                                <p class="tw-mb-0">
                                    <?php echo e($job->exact_location ? $job->exact_location : $job->full_address); ?>

                                </p>
                            </div>
                        </div>
                        <?php endif; ?> 
                    </div>
                </div>-->
                <?php if($job->benefits && count($job->benefits)): ?>
                <div class="p-32 border border-2 border-primary-50 rt-rounded-12 rt-mb-24 lg:max-536">
                    <div class="body-font-1 ft-wt-5 rt-mb-32 "><?php echo e(__('job_benefits')); ?></div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tw-flex tw-flex-wrap tw-gap-2">
                                <?php $__currentLoopData = $job->benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span
                                    class="text-capitalize tw-rounded-md tw-bg-green-50 tw-px-2 tw-py-1 tw-text-sm tw-font-medium tw-text-green-700 tw-ring-1 tw-ring-inset tw-ring-green-600/20">
                                    <?php echo e($benefit->name); ?>

                                </span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <!-- google adsense area -->
                <?php if(advertisement_status('job_detailpage_ad')): ?>
                <?php if(advertisement_status('job_detailpage_right_ad')): ?>
                <?php if(advertisementCode('job_detailpage_fat_ad_after_jobbenefits_section')): ?>
                <div class="container my-4">
                    <?php echo advertisementCode('job_detailpage_fat_ad_after_jobbenefits_section'); ?>

                </div>
                <?php endif; ?>
                <?php endif; ?>
                <?php endif; ?>
                <!-- google adsense area end -->
                <div class="border border-2 border-primary-50 rt-rounded-12 rt-mb-24 lg:max-536">
                    <div class="tw-px-8 tw-pb-6 tw-pt-8">
                        <div class="body-font-1 ft-wt-5 rt-mb-32 f-size-20"><?php echo e(__('job_overview')); ?></div>

                        <div class="row">
                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                            <i class="ph-calendar-blank f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            <?php echo e(__('job_posted')); ?>:
                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            <?php echo e(Carbon\Carbon::parse($job->created_at)->diffForHumans()); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>

                            <?php if($job->deadline_active): ?>
                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                        <i class="ph-timer f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            <?php echo e(__('job_expire')); ?>:
                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            <?php echo e($job->days_remaining); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                        <i class="ph-suitcase-simple f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            <?php echo e(__('job_type')); ?>

                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            <?php echo e($job->job_type ? $job->job_type->name : ''); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                        <i class="ph-user f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            <?php echo e(__('job_role')); ?>

                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            <?php echo e($job?->role?->name ?? ''); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>

                            <?php if($job->education): ?>
                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                        <i class="ph-graduation-cap f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            <?php echo e(__('education')); ?>

                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            <?php echo e($job->education ? $job->education->name : ''); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($job->experience): ?>
                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                        <i class="ph-clipboard-text f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            <?php echo e(__('experience')); ?>

                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            <?php echo e($job->experience ? $job->experience->name : ''); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($job->vacancies): ?>
                            <div class="col-12">
                                <div class="single-jSidebarWidget d-flex align-items-center mb-4">
                                    <div class="icon-thumb me-3">
                                        <i class="ph-users f-size-30 text-primary-500"></i>
                                    </div>
                                    <div class="iconbox-content d-flex justify-content-between w-100">
                                        <div class="f-size-16 text-gray-500 uppercase rt-mb-1">
                                            <?php echo e(__('vacancies')); ?>

                                        </div>
                                        <span class="d-block f-size-14 ft-wt-5 text-gray-900">
                                            <?php echo e($job->vacancies); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="tw-share-area tw-px-8 tw-pt-6 tw-pb-8">
                        <?php if($job->skills && count($job->skills)): ?>
                        <h2 class="tw-text-[#18191C] tw-text-lg tw-font-medium tw-mb-2"><?php echo e(__('skills')); ?>:</h2>
                        <div class="tw-flex tw-gap-2 tw-flex-wrap tw-items-center">
                            <?php $__currentLoopData = $job->skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="javascript:void(0)"
                                class="text-capitalize tw-rounded-md tw-bg-green-50 tw-px-2 tw-py-1 tw-text-sm tw-font-medium tw-text-green-700 tw-ring-1 tw-ring-inset tw-ring-green-600/20">
                                <?php echo e($skill->name); ?>

                            </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="tw-share-area tw-px-8 tw-pt-6 tw-pb-8">
                        <?php if($job->tags && count($job->tags)): ?>
                        <h2 class="tw-text-[#18191C] tw-text-lg tw-font-medium tw-mb-2"><?php echo e(__('advantages')); ?>:</h2>
                        <div class="tw-flex tw-gap-2 tw-flex-wrap tw-items-center">
                            <?php $__currentLoopData = $job->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="javascript:void(0)"
                                class="text-capitalize tw-rounded-md tw-bg-green-50 tw-px-2 tw-py-1 tw-text-sm tw-font-medium tw-text-green-700 tw-ring-1 tw-ring-inset tw-ring-green-600/20">
                                <?php echo e($tag->name); ?>

                            </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="tw-share-area tw-px-8 tw-pt-6 tw-pb-8">
                        <?php if($job->tags && count($job->tags)): ?>
                        <h2 class="tw-text-[#18191C] tw-text-lg tw-font-medium tw-mb-2"><?php echo e(__('job_tags')); ?>:</h2>
                        <div class="tw-flex tw-gap-2 tw-flex-wrap tw-items-center">
                            <?php $__currentLoopData = $job->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="javascript:void(0)"
                                class="text-capitalize tw-rounded-md tw-bg-green-50 tw-px-2 tw-py-1 tw-text-sm tw-font-medium tw-text-green-700 tw-ring-1 tw-ring-inset tw-ring-green-600/20">
                                <?php echo e($tag->name); ?>

                            </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="tw-share-area tw-px-8 tw-pt-6 tw-pb-8">
                        <h2 class="tw-text-[#18191C] tw-text-lg tw-font-medium tw-mb-2"><?php echo e(__('share_this_job')); ?>:
                        </h2>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="<?php echo e(url()->current()); ?>"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span
                                class="tw-text-primary-500 hover:tw-bg-primary-500 tw-cursor-pointer hover:tw-text-white tw-flex tw-gap-1.5 tw-items-center tw-text-base tw-font-medium tw-bg-[#E7F0FA] tw-px-4 tw-py-2 tw-rounded-[4px]"
                                onclick="copyUrl('<?php echo e(url()->current()); ?>')" id="basic-addon2">
                                <?php if (isset($component)) { $__componentOriginalfbfec00c917bef93a2c89d9179a06df5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbfec00c917bef93a2c89d9179a06df5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.link-sample-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.link-sample-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbfec00c917bef93a2c89d9179a06df5)): ?>
<?php $attributes = $__attributesOriginalfbfec00c917bef93a2c89d9179a06df5; ?>
<?php unset($__attributesOriginalfbfec00c917bef93a2c89d9179a06df5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbfec00c917bef93a2c89d9179a06df5)): ?>
<?php $component = $__componentOriginalfbfec00c917bef93a2c89d9179a06df5; ?>
<?php unset($__componentOriginalfbfec00c917bef93a2c89d9179a06df5); ?>
<?php endif; ?>
                            </span>
                        </div>
                        <ul class="tw-list-none tw-flex tw-flex-wrap tw-items-center tw-gap-2 tw-p-0 tw-m-0 tw-mb-6">
                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('<?php echo e(socialMediaShareLinks(url()->current(), 'facebook')); ?>')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-[#0A65CC] hover:tw-bg-[#0A65CC] hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <?php if (isset($component)) { $__componentOriginal8f88b92fb9cdfcc3266118717caffb61 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8f88b92fb9cdfcc3266118717caffb61 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.new-facebook-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.new-facebook-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8f88b92fb9cdfcc3266118717caffb61)): ?>
<?php $attributes = $__attributesOriginal8f88b92fb9cdfcc3266118717caffb61; ?>
<?php unset($__attributesOriginal8f88b92fb9cdfcc3266118717caffb61); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8f88b92fb9cdfcc3266118717caffb61)): ?>
<?php $component = $__componentOriginal8f88b92fb9cdfcc3266118717caffb61; ?>
<?php unset($__componentOriginal8f88b92fb9cdfcc3266118717caffb61); ?>
<?php endif; ?>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('<?php echo e(socialMediaShareLinks(url()->current(), 'pinterest')); ?>')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-[#0A65CC] hover:tw-bg-[#0A65CC] hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <?php if (isset($component)) { $__componentOriginal2fe53bef5eff6674c05910535397c0e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2fe53bef5eff6674c05910535397c0e3 = $attributes; } ?>
<?php $component = App\View\Components\Svg\PinterestIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.pinterest-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\PinterestIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2fe53bef5eff6674c05910535397c0e3)): ?>
<?php $attributes = $__attributesOriginal2fe53bef5eff6674c05910535397c0e3; ?>
<?php unset($__attributesOriginal2fe53bef5eff6674c05910535397c0e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2fe53bef5eff6674c05910535397c0e3)): ?>
<?php $component = $__componentOriginal2fe53bef5eff6674c05910535397c0e3; ?>
<?php unset($__componentOriginal2fe53bef5eff6674c05910535397c0e3); ?>
<?php endif; ?>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('<?php echo e(socialMediaShareLinks(url()->current(), 'twitter')); ?>')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-primary-500 hover:tw-bg-primary-500 hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <?php if (isset($component)) { $__componentOriginalceb10757c371be92d54d23fb6aa0e339 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalceb10757c371be92d54d23fb6aa0e339 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.new-twitter-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.new-twitter-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalceb10757c371be92d54d23fb6aa0e339)): ?>
<?php $attributes = $__attributesOriginalceb10757c371be92d54d23fb6aa0e339; ?>
<?php unset($__attributesOriginalceb10757c371be92d54d23fb6aa0e339); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalceb10757c371be92d54d23fb6aa0e339)): ?>
<?php $component = $__componentOriginalceb10757c371be92d54d23fb6aa0e339; ?>
<?php unset($__componentOriginalceb10757c371be92d54d23fb6aa0e339); ?>
<?php endif; ?>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('<?php echo e(socialMediaShareLinks(url()->current(), 'whatsapp')); ?>')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-primary-500 hover:tw-bg-primary-500 hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <?php if (isset($component)) { $__componentOriginalc1a50ae9d99329e7d16af928a58af8ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1a50ae9d99329e7d16af928a58af8ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.whatsapp-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.whatsapp-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1a50ae9d99329e7d16af928a58af8ea)): ?>
<?php $attributes = $__attributesOriginalc1a50ae9d99329e7d16af928a58af8ea; ?>
<?php unset($__attributesOriginalc1a50ae9d99329e7d16af928a58af8ea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1a50ae9d99329e7d16af928a58af8ea)): ?>
<?php $component = $__componentOriginalc1a50ae9d99329e7d16af928a58af8ea; ?>
<?php unset($__componentOriginalc1a50ae9d99329e7d16af928a58af8ea); ?>
<?php endif; ?>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('<?php echo e(socialMediaShareLinks(url()->current(), 'linkedin')); ?>')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-primary-500 hover:tw-bg-primary-500 hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
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
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('<?php echo e(socialMediaShareLinks(url()->current(), 'mail')); ?>')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-primary-500 hover:tw-bg-primary-500 hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <?php if (isset($component)) { $__componentOriginalc487f870e534fbbd52268a737feaaf71 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc487f870e534fbbd52268a737feaaf71 = $attributes; } ?>
<?php $component = App\View\Components\Svg\MailIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.mail-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\MailIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc487f870e534fbbd52268a737feaaf71)): ?>
<?php $attributes = $__attributesOriginalc487f870e534fbbd52268a737feaaf71; ?>
<?php unset($__attributesOriginalc487f870e534fbbd52268a737feaaf71); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc487f870e534fbbd52268a737feaaf71)): ?>
<?php $component = $__componentOriginalc487f870e534fbbd52268a737feaaf71; ?>
<?php unset($__componentOriginalc487f870e534fbbd52268a737feaaf71); ?>
<?php endif; ?>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('<?php echo e(socialMediaShareLinks(url()->current(), 'telegram')); ?>')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-primary-500 hover:tw-bg-primary-500 hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <?php if (isset($component)) { $__componentOriginal463509b2fcf781f29ae2db7f21948bf7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal463509b2fcf781f29ae2db7f21948bf7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.telegram-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.telegram-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal463509b2fcf781f29ae2db7f21948bf7)): ?>
<?php $attributes = $__attributesOriginal463509b2fcf781f29ae2db7f21948bf7; ?>
<?php unset($__attributesOriginal463509b2fcf781f29ae2db7f21948bf7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal463509b2fcf781f29ae2db7f21948bf7)): ?>
<?php $component = $__componentOriginal463509b2fcf781f29ae2db7f21948bf7; ?>
<?php unset($__componentOriginal463509b2fcf781f29ae2db7f21948bf7); ?>
<?php endif; ?>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);"
                                    onclick="openPopUp('<?php echo e(socialMediaShareLinks(url()->current(), 'skype')); ?>')"
                                    class="tw-inline-flex tw-bg-[#E7F0FA] tw-text-primary-500 hover:tw-bg-primary-500 hover:tw-text-white tw-rounded-[4px] tw-p-2.5">
                                    <?php if (isset($component)) { $__componentOriginal3b5a42ba91b61a17c5190c1e3633a710 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3b5a42ba91b61a17c5190c1e3633a710 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.skype-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.skype-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3b5a42ba91b61a17c5190c1e3633a710)): ?>
<?php $attributes = $__attributesOriginal3b5a42ba91b61a17c5190c1e3633a710; ?>
<?php unset($__attributesOriginal3b5a42ba91b61a17c5190c1e3633a710); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3b5a42ba91b61a17c5190c1e3633a710)): ?>
<?php $component = $__componentOriginal3b5a42ba91b61a17c5190c1e3633a710; ?>
<?php unset($__componentOriginal3b5a42ba91b61a17c5190c1e3633a710); ?>
<?php endif; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- google adsense area -->
                <?php if(advertisement_status('job_detailpage_ad')): ?>
                <?php if(advertisement_status('job_detailpage_right_ad')): ?>
                <?php if(advertisementCode('job_detailpage_fat_ad_after_share_section')): ?>
                <div class="container my-4">
                    <?php echo advertisementCode('job_detailpage_fat_ad_after_share_section'); ?>

                </div>
                <?php endif; ?>
                <?php endif; ?>
                <?php endif; ?>
                <!-- google adsense area end -->
                <div class="border border-2 border-primary-50 rt-rounded-12 rt-mb-24 lg:max-536">
                    <div class="body-font-1 ft-wt-5 custom-p">
                        <?php echo e(__('location')); ?> <br>
                        <p class="body-font-3"><?php echo e($job->exact_location ? $job->exact_location : $job->full_address); ?>

                        </p>
                    </div>
                    <div>
                        <?php
                        $map = $setting->default_map;
                        ?>

                        <?php if($map == 'google-map'): ?>
                        <div class="map mymap" id="google-map"></div>
                        <?php else: ?>
                        <div id="leaflet-map"></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if(count($related_jobs)): ?>
<div class="rt-spacer-100 rt-spacer-md-50"></div>
<!--Related jobs Area-->
<hr class="hr-0">
<section class="related-jobs-area rt-pt-100 rt-pt-md-50 mb-5">
    <div class="container">
        <h4><?php echo e(__('related_jobs')); ?></h4>
        <div class="rt-spacer-40 rt-spacer-md-20"></div>
        <div class="related-jobs pb-5">
            <div class="row">
                <?php $__currentLoopData = $related_jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-md-6 col-xl-4 mb-3">
                    <?php if (isset($component)) { $__componentOriginalf097da45b5d9888f27135d369e0b9a19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf097da45b5d9888f27135d369e0b9a19 = $attributes; } ?>
<?php $component = App\View\Components\Website\Job\JobCard::resolve(['job' => $job] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.job.job-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\Job\JobCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf097da45b5d9888f27135d369e0b9a19)): ?>
<?php $attributes = $__attributesOriginalf097da45b5d9888f27135d369e0b9a19; ?>
<?php unset($__attributesOriginalf097da45b5d9888f27135d369e0b9a19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf097da45b5d9888f27135d369e0b9a19)): ?>
<?php $component = $__componentOriginalf097da45b5d9888f27135d369e0b9a19; ?>
<?php unset($__componentOriginalf097da45b5d9888f27135d369e0b9a19); ?>
<?php endif; ?>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Apply Job Modal -->
<div class="modal fade" id="cvModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-transparent">
                <h5 class="modal-title" id="cvModalLabel"><?php echo e(__('job')); ?>: <span id="apply_job_title">Job
                        Title</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo e(route('website.job.apply', $job->slug)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-body mt-3">
                    <input type="hidden" id="apply_job_id" name="id">
                    <div class="from-group">
                        <div class="tw-flex tw-justify-between tw-items-center">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'choose_resume','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                            <div class="tw-m-2">
                                <button onclick="resumeAddModal()" type="button"
                                    class=" tw-bg-white tw-tracking-wide tw-text-gray-800 tw-font-bold tw-rounded tw-border-b-2 tw-border-blue-500 hover:tw-border-blue-600 hover:tw-bg-blue-500 hover:tw-text-white tw-shadow-md tw-py-1.5 tw-px-6 tw-inline-flex tw-items-center">
                                    <span class="tw-mx-auto">Add Resume</span>
                                </button>
                            </div>
                        </div>
                        <select id="resume_id" class="rt-selectactive form-control w-100-p" name="resume_id">
                            <option value=""><?php echo e(__('select_one')); ?></option>
                            <?php $__currentLoopData = $resumes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resume): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php echo e(old('resume_id') == $resume->id ? 'selected' : ''); ?> value="<?php echo e($resume->id); ?>">
                                <?php echo e($resume->name); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'cover_letter','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                        <textarea id="default" class="form-control <?php $__errorArgs = ['cover_letter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            name="cover_letter" rows="7"><?php echo e(old('cover_letter')); ?></textarea>
                        <?php $__errorArgs = ['cover_letter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="error invalid-feedback"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <?php
                    $job->load('questions');

                    ?>
                    <?php if($questions->count() > 0): ?>
                    <h5 class="modal-title mt-4" id="cvModalLabel">Client wants to know</h5>
                    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-group mt-2 mb-2">
                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => $question->title,'required' => $question->required] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                        <input type="text" class="form-control" name="question_<?php echo e($question->id); ?>"
                            value="<?php echo e(old('question_' . $question->id)); ?>">

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                </div>
                <div class="modal-footer border-transparent mt-4">
                    <button type="button" class="bg-priamry-50 btn btn-outline-primary" data-bs-dismiss="modal"
                        aria-label="Close"><?php echo e(__('cancel')); ?></button>
                    <button type="submit" class="btn btn-primary btn-lg">
                        <span class="button-content-wrapper ">
                            <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                            <span class="button-text">
                                <?php echo e(__('apply_now')); ?>

                            </span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Add resume modal -->
    <?php if (isset($component)) { $__componentOriginal80e68af8a47d2fb115a943142c547971 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal80e68af8a47d2fb115a943142c547971 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.add-resume-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.add-resume-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal80e68af8a47d2fb115a943142c547971)): ?>
<?php $attributes = $__attributesOriginal80e68af8a47d2fb115a943142c547971; ?>
<?php unset($__attributesOriginal80e68af8a47d2fb115a943142c547971); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal80e68af8a47d2fb115a943142c547971)): ?>
<?php $component = $__componentOriginal80e68af8a47d2fb115a943142c547971; ?>
<?php unset($__componentOriginal80e68af8a47d2fb115a943142c547971); ?>
<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- >=>Leaflet Map<=< -->
<?php if (isset($component)) { $__componentOriginal3e300f156325fa92f96d8a516b8d8659 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3e300f156325fa92f96d8a516b8d8659 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.map.leaflet.map_links','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('map.leaflet.map_links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3e300f156325fa92f96d8a516b8d8659)): ?>
<?php $attributes = $__attributesOriginal3e300f156325fa92f96d8a516b8d8659; ?>
<?php unset($__attributesOriginal3e300f156325fa92f96d8a516b8d8659); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3e300f156325fa92f96d8a516b8d8659)): ?>
<?php $component = $__componentOriginal3e300f156325fa92f96d8a516b8d8659; ?>
<?php unset($__componentOriginal3e300f156325fa92f96d8a516b8d8659); ?>
<?php endif; ?>
<?php echo $__env->make('map::links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
    .post-main-title2 h1 {
        font-size: 22px;
    }

    .max-311 {
        min-width: 70% !important;
    }

    .mymap {
        border-radius: 0 0 12px 12px;
    }

    .custom-p {
        padding-top: 24px;
        padding-bottom: 16px;
        padding-left: 24px
    }

    /* Sticky Job Details Title Heading Start */
    .job-details-title-box-card {
        border-bottom: 1px solid #f3f3f3;
    }

    .job-details-title-box {
        position: sticky;
        top: 0;
        z-index: 998 !important;
        margin-bottom: 0 !important;
    }

    .leaflet-container {
        position: relative;
        z-index: 900 !important;
    }

    /* Sticky Job Details Title Heading End */
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    function applyJobb(id, name) {
        $('#cvModal').modal('show');
        $('#apply_job_id').val(id);
        $('#apply_job_title').text(name);
    }

    function copyToClipboard(text) {
        var sampleTextarea = document.createElement("textarea");
        document.body.appendChild(sampleTextarea);
        sampleTextarea.value = text; //save main text in it
        sampleTextarea.select(); //select textarea contenrs
        document.execCommand("copy");
        document.body.removeChild(sampleTextarea);
    }

    function copyUrl(value) {
        copyToClipboard(value);
        alert('Copyied to clipboard')
    }
</script>

<?php if (isset($component)) { $__componentOriginale8c9e08de211331e5ea62140e4549a3b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale8c9e08de211331e5ea62140e4549a3b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.map.leaflet.map_scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('map.leaflet.map_scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale8c9e08de211331e5ea62140e4549a3b)): ?>
<?php $attributes = $__attributesOriginale8c9e08de211331e5ea62140e4549a3b; ?>
<?php unset($__attributesOriginale8c9e08de211331e5ea62140e4549a3b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8c9e08de211331e5ea62140e4549a3b)): ?>
<?php $component = $__componentOriginale8c9e08de211331e5ea62140e4549a3b; ?>
<?php unset($__componentOriginale8c9e08de211331e5ea62140e4549a3b); ?>
<?php endif; ?>
<script>
    var oldlat = {
        !!$lat ? $lat : $setting - > default_lat!!
    };
    var oldlng = {
        !!$long ? $long : $setting - > default_long!!
    };

    // Map preview
    var element = document.getElementById('leaflet-map');

    // Height has to be set. You can do this in CSS too.
    element.style = 'height:300px;';

    // Create Leaflet map on map element.
    var leaflet_map = L.map(element);

    // Add OSM tile layer to the Leaflet map.
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(leaflet_map);

    // Target's GPS coordinates.
    var target = L.latLng(oldlat, oldlng);

    // Set map's center to target with zoom 14.
    const zoom = 7;
    leaflet_map.setView(target, zoom);

    // Place a marker on the same location.
    L.marker(target).addTo(leaflet_map);
</script>

<!-- ================ google map ============== -->
<?php if($map == 'google-map'): ?>
<script>
    function initMap() {
        var token = "<?php echo e($setting->google_map_key); ?>";

        const map = new google.maps.Map(document.getElementById("google-map"), {
            zoom: 7,
            center: {
                lat: oldlat,
                lng: oldlng
            },
        });

        const image =
            "https://gisgeography.com/wp-content/uploads/2018/01/map-marker-3-116x200.png";
        const beachMarker = new google.maps.Marker({

            draggable: false,
            position: {
                lat: oldlat,
                lng: oldlng
            },
            map,
            // icon: image
        });
    }
    window.initMap = initMap;
</script>

<?php
$link1 = 'https://maps.googleapis.com/maps/api/js?key=';
$link2 = $setting->google_map_key;
$link3 = '&callback=initMap&libraries=places,geometry';
$scr = $link1 . $link2 . $link3;
?>

<script src="<?php echo e($scr); ?>" async defer></script>
<?php endif; ?>
<!-- ================ google map ============== -->

<!-- for resume modal -->
<?php if (isset($component)) { $__componentOriginaleef48d4803328796549419f5f769129d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleef48d4803328796549419f5f769129d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.add-resume-modal-script','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.add-resume-modal-script'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleef48d4803328796549419f5f769129d)): ?>
<?php $attributes = $__attributesOriginaleef48d4803328796549419f5f769129d; ?>
<?php unset($__attributesOriginaleef48d4803328796549419f5f769129d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleef48d4803328796549419f5f769129d)): ?>
<?php $component = $__componentOriginaleef48d4803328796549419f5f769129d; ?>
<?php unset($__componentOriginaleef48d4803328796549419f5f769129d); ?>
<?php endif; ?>
<?php echo $__env->yieldContent('child_js'); ?>
<?php $__env->stopSection(); ?>

<script>
    function openPopUp(link) {
        var popupWidth = 600;
        var popupHeight = 400;

        var left = (window.innerWidth - popupWidth) / 2 + window.screenX;
        var top = (window.innerHeight - popupHeight) / 2 + window.screenY;

        window.open(link, 'popup', 'width=' + popupWidth + ',height=' + popupHeight + ',left=' + left + ',top=' + top);

    }
</script>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/frontend/pages/job-details.blade.php ENDPATH**/ ?>