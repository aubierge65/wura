<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['socials']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['socials']); ?>
<?php foreach (array_filter((['socials']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form action="<?php echo e(route('company.profile.complete', auth()->user()->id)); ?>" method="post">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    <input type="hidden" name="field" value="social">
    <fieldset>
        <div class="form-card mb-4">
            <div class="dashboard-account-setting-item">
                <div class="row">
                    <?php $__empty_1 = true; $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-12 custom-select-padding">
                        <div class="d-flex">
                            <div class="d-flex mborder">
                                <div class="position-relative">
                                    <select
                                        class="border-0 rt-selectactive form-control" name="social_media[]">
                                        <option value="" class="d-none" disabled><?php echo e(__('select_one')); ?></option>
                                        <option <?php echo e($social->social_media == 'facebook' ? 'selected':''); ?> value="facebook"><?php echo e(__('facebook')); ?></option>
                                        <option <?php echo e($social->social_media == 'twitter' ? 'selected':''); ?> value="twitter"><?php echo e(__('twitter')); ?></option>
                                        <option <?php echo e($social->social_media == 'instagram' ? 'selected':''); ?> value="instagram"><?php echo e(__('instagram')); ?></option>
                                        <option <?php echo e($social->social_media == 'youtube' ? 'selected':''); ?> value="youtube"><?php echo e(__('youtube')); ?></option>
                                        <option <?php echo e($social->social_media == 'linkedin' ? 'selected':''); ?> value="linkedin"><?php echo e(__('linkedin')); ?></option>
                                        <option <?php echo e($social->social_media == 'pinterest' ? 'selected':''); ?> value="pinterest"><?php echo e(__('pinterest')); ?></option>
                                        <option <?php echo e($social->social_media == 'reddit' ? 'selected':''); ?> value="reddit"><?php echo e(__('reddit')); ?></option>
                                        <option <?php echo e($social->social_media == 'github' ? 'selected':''); ?> value="github"><?php echo e(__('github')); ?></option>
                                        <option <?php echo e($social->social_media == 'other' ? 'selected':''); ?> value="other"><?php echo e(__('other')); ?></option>
                                    </select>
                                </div>
                                <div class="w-100">
                                    <input class="border-0" type="text" name="url[]" id="" placeholder="<?php echo e(__('profile_link_url')); ?>..." value="<?php echo e($social->url); ?>">
                                </div>
                            </div>
                            <div class="tw-ms-2">
                                <button class="btn btn-primary2-50 cross-btn" type="button" id="remove_item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#18191C" stroke-width="1.5" stroke-miterlimit="10"/>
                                        <path d="M15 9L9 15" stroke="#18191C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15 15L9 9" stroke="#18191C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-12 custom-select-padding">
                        <div class="d-flex">
                            <div class="d-flex mborder">
                                <div class="position-relative">
                                    <select
                                        class="border-0 rt-selectactive form-control" name="social_media[]">
                                        <option value="" class="d-none" disabled selected><?php echo e(__('select_one')); ?></option>
                                        <option value="facebook"><?php echo e(__('facebook')); ?></option>
                                        <option value="twitter"><?php echo e(__('twitter')); ?></option>
                                        <option value="instagram"><?php echo e(__('instagram')); ?></option>
                                        <option value="youtube"><?php echo e(__('youtube')); ?></option>
                                        <option value="linkedin"><?php echo e(__('linkedin')); ?></option>
                                        <option value="pinterest"><?php echo e(__('pinterest')); ?></option>
                                        <option value="reddit"><?php echo e(__('reddit')); ?></option>
                                        <option value="github"><?php echo e(__('github')); ?></option>
                                        <option value="other"><?php echo e(__('other')); ?></option>
                                    </select>
                                </div>
                                <div class="w-100">
                                    <input class="border-0" type="text" name="url[]" id="" placeholder="<?php echo e(__('profile_link_url')); ?>...">
                                </div>
                            </div>
                            <div class="tw-ms-2">
                                <button class="btn btn-primary2-50 cross-btn" type="button" id="remove_item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#18191C" stroke-width="1.5" stroke-miterlimit="10"/>
                                        <path d="M15 9L9 15" stroke="#18191C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15 15L9 9" stroke="#18191C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div id="multiple_feature_part">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary2-50 tw-text-gray-900 hover:!tw-text-white w-100 mt-4 add-new-social" onclick="add_features_field()" type="button">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"/>
                                <path d="M6.875 10H13.125" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 6.875V13.125" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            <span><?php echo e(__('add_new_social_link')); ?></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo e(url('company/account-progress?profile')); ?>">
            <button type="button" class="btn previous bg-gray-50 rt-mr-8">
                Previous
            </button>
        </a>
        <button type="submit" class="btn next btn-primary">
            <span class="button-content-wrapper ">
                <span class="button-icon align-icon-right">
                    <i class="ph-arrow-right"></i>
                </span>
                <span class="button-text">
                    <?php echo e(__('save_next')); ?>

                </span>
            </span>
        </button>
    </fieldset>
</form>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/website/company/account-progress/social.blade.php ENDPATH**/ ?>