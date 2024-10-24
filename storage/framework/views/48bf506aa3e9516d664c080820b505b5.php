<?php $__env->startSection('description'); ?>
<?php
$data = metaData('pricing');
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
            <h6 class="f-size-18 m-0" style="display: inline-flex; align-items: center;">
                <i class="ph ph-arrow-right f-size-25" style="margin-right: 8px;"></i>
                <?php echo e(__('pricing')); ?>

            </h6>
            <ul>
                <li><a href="<?php echo e(route('website.home')); ?>"><?php echo e(__('home')); ?></a></li>
                <li>/</li>
                <li><?php echo e(__('pricing')); ?></li>
            </ul>
        </div>
    </div>
</div>


<section class="terms-condition ">
    <div class="container">

        <?php if($plans->count() > 0): ?>
        <div class="row justify-content-center text-center" id="premium_pricing_package">
            <div class="col-12">
                <div class="rt-spacer-100 rt-spacer-md-50"></div>
                <h4 class="rt-mb-18">
                    <?php echo e(__('choose_plan')); ?>

                </h4>
                <div class="body-font-3 text-gray-500 rt-mb-24 max-474 d-inline-block">
                    <?php echo e(__('choose_plan_description')); ?>

                </div>
            </div>
        </div>
        <?php endif; ?>
        <section class="pricing-area mt-5" id="premium_pricing_package">
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if($plan->frontend_show): ?>
                <div class="col-xl-4 col-lg-4 col-md-6 rt-mb-24">
                    <div class="single-price-table mb-4 mb-md-0 <?php echo e($plan->recommended ? 'active' : ''); ?> <?php echo e($plan->recommended ? 'bg-primary-50': 'bg-default'); ?>">
                        <div class="price-header">
                            <h6 class="rt-mb-10"><?php echo e($plan->label); ?></h6>
                            <?php if($plan->recommended): ?>
                            <span class="badge bg-primary-500 text-white"><?php echo e(__('recommanded')); ?></span>
                            <?php endif; ?>
                            <span class="text-gray-500 body-font-3 rt-mb-15 d-block">
                                <?php if(isset($plan->descriptions) && isset($plan->descriptions[0])): ?>
                                <?php echo $plan->descriptions[0]->description; ?>

                                <?php else: ?>
                                <?php
                                $default_description = $plan_descriptions->where('plan_id', $plan->id)->first();
                                ?>

                                <?php if($default_description && $default_description->description): ?>
                                <?php echo $default_description->description; ?>

                                <?php else: ?>
                                <span class="text-danger"><?php echo __('no_description_has_been_added_to_this_language', ['current' => $current_language_code]); ?></span>
                                <?php endif; ?>
                                <?php endif; ?>
                            </span>
                            <div>
                                <span
                                    class="tw-text-[#0A65CC] tw-text-[36px] tw-leading-[44px] tw-font-medium">
                                    <?php echo e(currencyPosition($plan->price, true,$current_currency)); ?>

                                </span>
                            </div>
                        </div>
                        <div class="price-body">
                            <ul class="rt-list">
                                <li>
                                    <span class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF"
                                                stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        <?php echo e(__('post')); ?> <b><?php echo e($plan->job_limit); ?></b>
                                        <?php echo e(__('jobs')); ?>

                                    </span>
                                </li>

                                <li>
                                    <span class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF"
                                                stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span><b><?php echo e($plan->featured_job_limit); ?></b>
                                        <?php echo e(__('featured_job')); ?></span>
                                </li>
                                <li>
                                    <span class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF"
                                                stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span><b><?php echo e($plan->highlight_job_limit); ?></b>
                                        <?php echo e(__('highlights_job')); ?></span>
                                </li>
                                <li>
                                    <span class="tw-inline-flex tw-justify-center tw-items-center tw-w-6 tw-h-6 tw-rounded-full tw-bg-[#eef5fc]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#007BFF"
                                                stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        <b><?php echo e($plan->candidate_cv_view_limitation == 'limited' ? $plan->candidate_cv_view_limit : __('unlimited')); ?></b>
                                        <?php echo e(__('candidate_profile_view')); ?>

                                    </span>
                                </li>
                                <li style="display: flex ;align-items: center ">
                                    <?php if($plan->profile_verify): ?>
                                    <span>
                                        <img src="<?php echo e(asset('frontend')); ?>/assets/images/icon/check.png"
                                            alt="icon">
                                    </span>
                                    <?php else: ?>
                                    <span class="rounded-full text-white ">

                                        <svg width="32" height="32" style="margin-left: -6px"
                                            xmlns="http://www.w3.org/2000/svg" fill="#FF7276"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <?php endif; ?>

                                    <span>
                                        <?php echo e(__('ability_to_profile_verify')); ?>

                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <?php if(auth()->guard('user')->check()): ?>
                            <?php if($plan->price == 0): ?>
                            <form action="<?php echo e(route('purchase.free.plan')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" class="d-none tw-hidden" name="plan"
                                    value="<?php echo e($plan->id); ?>" readonly>
                                <button class="btn btn-primary-50 d-block">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right">
                                            <i class="ph-arrow-right"></i>
                                        </span>
                                        <span class="button-text">
                                            <?php echo e(__('get_started')); ?>

                                        </span>
                                    </span>
                                </button>
                            </form>
                            <?php else: ?>
                            <a href="<?php echo e(route('website.plan.details', $plan->label)); ?>"
                                class="btn btn-primary-50 d-block">
                                <span class="button-content-wrapper ">
                                    <span class="button-icon align-icon-right">
                                        <i class="ph-arrow-right"></i>
                                    </span>
                                    <span class="button-text">
                                        <?php echo e(__('get_started')); ?>

                                    </span>
                                </span>
                            </a>
                            <?php endif; ?>
                            <?php else: ?>
                            <button type="button" class="btn btn-primary-50 d-block login_required">
                                <span class="button-content-wrapper ">
                                    <span class="button-icon align-icon-right">
                                        <i class="ph-arrow-right"></i>
                                    </span>
                                    <span class="button-text">
                                        <?php echo e(__('get_started')); ?>

                                    </span>
                                </span>
                            </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-md-12">
                    <div class="card text-center">
                        <?php if (isset($component)) { $__componentOriginal29785112a59eec7800237cc87bc86e3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29785112a59eec7800237cc87bc86e3e = $attributes; } ?>
<?php $component = App\View\Components\NotFound::resolve(['message' => ''.e(__('no_price_plan_found_contact_website_owner')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\NotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $attributes = $__attributesOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__attributesOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $component = $__componentOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__componentOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <div class="pricing-options tw-justify-between justify-content-center align-items-center">

            <?php if($setting->per_job_active): ?>
            <div class="pay-per-job">
                <h2 class=""><?php echo e(__('Or_pay_per_job_post')); ?></h2>
                <p><?php echo e(__('pay_only_for_a_single_job_creation_and_you_can_also_highlight_or_featured_them')); ?></p>
                <?php if(auth()->guard('user')->check()): ?>
                <a href="<?php echo e(route('company.job.payPerJobCreate')); ?>"
                    class="btn btn-primary"><?php echo e(__('pay_per_job')); ?></a>
                <?php else: ?>
                <a href="<?php echo e(route('company.job.payPerJobCreate')); ?>"
                    class="btn btn-primary login_required"><?php echo e(__('pay_per_job')); ?></a>
                <?php endif; ?>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php if($faqs->count()): ?>
<section class="tw-py-16">
    <div class="container">
        <h5 class="tw-text-primary-500 tw-text-3xl tw-font-bold"><?php echo e(__('faq')); ?> </h5>
        <div class="accordion pricing-faq" id="accordionExample">
            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?php echo e($i); ?>">
                    <button class="accordion-button <?php if($i != 0): ?> collapsed <?php endif; ?>"
                        type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse<?php echo e($i); ?>" aria-expanded="true"
                        aria-controls="collapse<?php echo e($i); ?>">
                        <?php echo e($faq->question ?? ''); ?>

                    </button>
                </h2>
                <div id="collapse<?php echo e($i); ?>"
                    class="accordion-collapse collapse <?php if($i == 0): ?> show <?php endif; ?>"
                    aria-labelledby="heading<?php echo e($i); ?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php echo $faq->answer; ?>

                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section>
<?php endif; ?>

<section class="tw-py-10">
    <div class="container">
        <div class="tw-flex md:tw-flex-row tw-flex-col tw-gap-5 tw-items-center">
            <div
                class="tw-w-full tw-rounded-lg tw-flex tw-flex-col tw-gap-3 tw-p-4 tw-shadow-[0px_0px_32px_0px_rgba(0,0,0,0.12)] tw-bg-white">
                <h4 class="tw-text-xl"><?php echo e(__('connect_with_us')); ?></h4>
                <div class="tw-flex tw-flex-wrap tw-h-auto tw-gap-4 tw-items-center tw-min-h-[38px]">
                    <a href="tel:<?php echo e($cms_setting?->footer_phone_no); ?>"
                        class="tw-inline-flex tw-text-base tw-font-medium tw-text-primary-500 hover:tw-text-primary-700 tw-gap-1.5 tw-items-center">
                        <span
                            class="tw-text-base tw-inline-flex tw-justify-center tw-items-center tw-bg-[#D7E9E9] tw-p-2 tw-rounded-full"><i
                                class="ph-phone"></i></span>
                        <span><?php echo e($cms_setting?->footer_phone_no ?? ''); ?> </span>
                    </a>
                    <a href=""
                        class="tw-inline-flex tw-text-base tw-font-medium tw-text-primary-500 hover:tw-text-primary-700 tw-gap-1.5 tw-items-center">
                        <span
                            class="tw-text-base tw-inline-flex tw-justify-center tw-items-center tw-bg-[#D7E9E9] tw-p-2 tw-rounded-full"><i
                                class="ph-envelope"></i></span>
                        <span><?php echo e($setting->email ?? ''); ?></span>
                    </a>
                </div>
            </div>
            <div
                class="tw-w-full tw-rounded-lg tw-flex tw-flex-col tw-gap-3 tw-p-4 tw-shadow-[0px_0px_32px_0px_rgba(0,0,0,0.12)] tw-bg-white">
                <h4 class="tw-text-xl"><?php echo e(__('are_you_interested_with_us')); ?></h4>
                <a href="<?php echo e(route('register')); ?>"
                    class="btn tw-bg-primary-500 hover:tw-bg-transparent tw-border tw-border-transparent hover:tw-border-primary-500 hover:tw-text-primary-500 tw-text-white tw-py-2 tw-text-sm"><?php echo e(__('register_now')); ?></a>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>
    .breadcrumbs-custom {
        padding: 20px;
        background-color: var(--gray-50);
        transition: all 0.24s ease-in-out;
        height: 12vh;
    }

    .bg-blue {
        background-color: blue;
        color: white;
    }
    .pricing-options {
        display: flex;
        align-items: center;
        gap: 24px;
        margin-top: 48px;
    }

    @media (max-width: 991px) {
        .pricing-options {
            flex-direction: column;
        }
    }

    .pricing-options .choose-pricing h2 {
        font-weight: 500;
        font-size: 24px;
        line-height: 32px;
        color: #18191C;
        margin-bottom: 16px;
    }

    .pricing-options .choose-pricing p {
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;
        color: #5E6670;
        margin-bottom: 16px;
    }

    .pricing-options .choose-pricing a {
        font-weight: 600;
        font-size: 16px;
        line-height: 24px;
        text-align: justify;
        text-transform: capitalize;
        color: #0A65CC;
    }

    .pricing-options .pay-per-job {
        background: rgba(241, 242, 244, 0.6);
        border: 1px solid #E4E5E8;
        border-radius: 6px;
        padding: 24px;
    }

    .pricing-options .pay-per-job h2 {
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
        text-transform: uppercase;
        color: #18191C;
        margin-bottom: 12px;
    }

    .pricing-options .pay-per-job p {
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
        color: #474C54;
        margin-bottom: 16px;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/frontend/pages/pricing.blade.php ENDPATH**/ ?>