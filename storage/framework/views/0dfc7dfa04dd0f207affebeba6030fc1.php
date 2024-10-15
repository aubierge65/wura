<?php $__env->startSection('title', '404'); ?>

<?php $__env->startSection('main'); ?>
<div id="devs">
    <h2>Salut</h2>
</div>
    <section class="rt-error">
        <div class="container">
            <?php if(session()->has('error')): ?>
                <div class="alert alert-danger m-3" role="alert">
                    <?php echo e(session()->get('error')); ?>

                </div>
            <?php endif; ?>
            <div class="row  align-items-center">
                <div class="rt-spacer-100 rt-spacer-md-50"></div>
                <div class="rt-spacer-50 rt-spacer-md-0"></div>
                <div class="col-xl-6 col-lg-6 order-1 order-lg-0">

                    <div class="rt-error-left">
                        <h4 class="rt-mb-24"><?php echo e(__('opps_page_not_found')); ?></h4>
                        <div class="body-font-2 ft-wt-5 text-gray-500 rt-mb-24 max-width-408">
                            <?php echo e(__('something_went_wrong_its_look_like_the_link_is_broken_or_the_page_is_removed')); ?>

                        </div>
                        <div class="error-button d-flex">
                            <div class="me-3">
                                <a href="<?php echo e(route('website.home')); ?>" class="btn btn-primary">
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
                                            <?php echo e(__('home')); ?>

                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-outline-primary">
                                    <?php echo e(__('go_back')); ?>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 order-0 order-lg-1">
                    <div class="rt-error-right">
                        <img src="<?php echo e(asset($cms_setting?->page404_image)); ?>" class="img-fluid" alt="error-banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="rt-spacer-100 rt-spacer-md-50"></div>
        <div class="rt-spacer-50 rt-spacer-md-0"></div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura/resources/views/errors/404.blade.php ENDPATH**/ ?>