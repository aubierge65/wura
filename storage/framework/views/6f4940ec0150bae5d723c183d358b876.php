

<?php $__env->startSection('title'); ?>
    <?php echo e(__('preferences')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('preferences')); ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('settings')); ?></li>
                <li class="breadcrumb-item active"><?php echo e(__('preferences')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('website-settings'); ?>
<div class="card">
    <div class="card-header"><?php echo e(__('contact_info')); ?></div>
    <div class="card-body">
        <form action="<?php echo e(route('settings.preference.update')); ?>" method="post">
            <?php echo method_field('put'); ?>
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label><?php echo e(__('phone_no')); ?>:</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['footer_phone_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-2"
                            name="footer_phone_no" value="<?php echo e($cms_setting?->footer_phone_no); ?>">
                        <?php $__errorArgs = ['footer_phone_no'];
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
                <div class="col-sm-12">
                    <div class="alert alert-warning">
                        <?php echo e(__('leave_the_social_media_input_field_empty_to_remove_the_link_from_website')); ?>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><?php echo e(__('facebook')); ?>:</label>
                        <input type="text"
                            class="form-control <?php $__errorArgs = ['footer_facebook_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-2"
                            name="footer_facebook_link" value="<?php echo e($cms_setting->footer_facebook_link); ?>">
                        <?php $__errorArgs = ['footer_facebook_link'];
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
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><?php echo e(__('instagram')); ?>:</label>
                        <input type="text"
                            class="form-control <?php $__errorArgs = ['footer_instagram_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-2"
                            name="footer_instagram_link" value="<?php echo e($cms_setting->footer_instagram_link); ?>">
                        <?php $__errorArgs = ['footer_instagram_link'];
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
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><?php echo e(__('twitter')); ?>:</label>
                        <input type="text"
                            class="form-control <?php $__errorArgs = ['footer_twitter_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-2"
                            name="footer_twitter_link" value="<?php echo e($cms_setting->footer_twitter_link); ?>">
                        <?php $__errorArgs = ['footer_twitter_link'];
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
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><?php echo e(__('youtube')); ?>:</label>
                        <input type="text"
                            class="form-control <?php $__errorArgs = ['footer_youtube_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-2"
                            name="footer_youtube_link" value="<?php echo e($cms_setting->footer_youtube_link); ?>">
                        <?php $__errorArgs = ['footer_youtube_link'];
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
                <div class="col-sm-12">
                    <?php if(userCan('setting.update')): ?>
                        <div class="form-group row text-center justify-content-center">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-sync"></i>
                                <?php echo e(__('update')); ?>

                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col-md-6">
        <div class="card" id="mode_settings">
            <div class="card-header">
                <h3 class="card-title">
                    <?php echo e(__('application_mode')); ?>

                </h3>
            </div>
            <div class="card-body applied-job-on">
                <form class="form-horizontal" action="<?php echo e(route('settings.system.mode.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div
                    class="d-flex justify-content-between">
                        <div class="col-md-4">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="live-mode" name="app_mode" class="custom-control-input" value="live" <?php echo e(config('app.mode') == 'live' ? 'checked' : ''); ?>>
                                <label class="custom-control-label" for="live-mode">
                                    <?php echo e(__('live_mode')); ?>

                                </label>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="maintenance-mode" name="app_mode" class="custom-control-input" value="maintenance" <?php echo e(config('app.mode') == 'maintenance' ? 'checked' : ''); ?>>
                                <label class="custom-control-label" for="maintenance-mode">
                                    <?php echo e(__('maintenance_mode')); ?>

                                </label>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="comingsoon-mode" name="app_mode" class="custom-control-input" value="comingsoon" <?php echo e(config('app.mode') == 'comingsoon' ? 'checked' : ''); ?>>
                                <label class="custom-control-label" for="comingsoon-mode">
                                    <?php echo e(__('coming_soon_mode')); ?>

                                </label>
                              </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3">
                        <?php if(userCan('setting.update')): ?>
                            <div class="form-group row text-center justify-content-center">
                                <button type="submit" class="btn btn-success" id="setting_button">
                                    <i class="fas fa-sync"></i>
                                    <?php echo e(__('update')); ?>

                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
        <div class="card" id="mode_settings">
            <div class="card-header">
                <h3 class="card-title">
                    <?php echo e(__('job_deadline_max_expiration_days')); ?>

                </h3>
            </div>
            <div class="card-body applied-job-on">
                <form class="form-horizontal" action="<?php echo e(route('settings.system.jobdeadline.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div
                    class="d-flex justify-content-between">
                        <div class="col-md-4">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="job_deadline_30" name="job_deadline_expiration_limit" class="custom-control-input" value="30" <?php echo e($setting->job_deadline_expiration_limit == 30 ? 'checked' : ''); ?>>
                                <label class="custom-control-label" for="job_deadline_30">
                                    30 <?php echo e(__('days')); ?>

                                </label>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="job_deadline_60" name="job_deadline_expiration_limit" class="custom-control-input" value="60" <?php echo e($setting->job_deadline_expiration_limit == 60 ? 'checked' : ''); ?>>
                                <label class="custom-control-label" for="job_deadline_60">
                                    60 <?php echo e(__('days')); ?>

                                </label>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="job_deadline_90" name="job_deadline_expiration_limit" class="custom-control-input" value="90" <?php echo e($setting->job_deadline_expiration_limit == 90 ? 'checked' : ''); ?>>
                                <label class="custom-control-label" for="job_deadline_90">
                                    90 <?php echo e(__('days')); ?>

                                </label>
                              </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3">
                        <?php if(userCan('setting.update')): ?>
                            <div class="form-group row text-center justify-content-center">
                                <button type="submit" class="btn btn-success" id="setting_button">
                                    <i class="fas fa-sync"></i>
                                    <?php echo e(__('update')); ?>

                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card" id="mode_settings">
            <div class="card-header">
                <h3 class="card-title">
                    <?php echo e(__('pay_per_job')); ?> <?php echo e(__('and')); ?> <?php echo e(__('options')); ?>

                </h3>
            </div>
            <div class="card-body applied-job-on">
                <form action="<?php echo e(route('settings.payperjob.update')); ?>" method="post">
                    <?php echo method_field('put'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><?php echo e(__('per_job_price')); ?>:</label>
                                <input type="text"
                                    class="form-control <?php $__errorArgs = ['per_job_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-2"
                                    name="per_job_price" value="<?php echo e($setting->per_job_price); ?>">
                                <?php $__errorArgs = ['per_job_price'];
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><?php echo e(__('status')); ?>:</label> <br>
                                <input <?php echo e($setting->per_job_active == 1 ? 'checked' : ''); ?> type="checkbox"
                                name="status" data-bootstrap-switch value="1" data-on-text="<?php echo e(__('on')); ?>"
                                data-off-color="default" data-on-color="success" data-off-text="<?php echo e(__('off')); ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><?php echo e(__('featured_job_price')); ?>:</label>
                                <input type="text"
                                    class="form-control <?php $__errorArgs = ['featured_job_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-2"
                                    name="featured_job_price" value="<?php echo e($setting->featured_job_price); ?>">
                                <?php $__errorArgs = ['featured_job_price'];
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><?php echo e(__('hightlight_job_price')); ?>:</label>
                                <input type="text"
                                    class="form-control <?php $__errorArgs = ['highlight_job_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-2"
                                    name="highlight_job_price" value="<?php echo e($setting->highlight_job_price); ?>">
                                <?php $__errorArgs = ['highlight_job_price'];
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><?php echo e(__('featured_jobs_duration')); ?>:</label>
                                <input min="0" type="number"
                                    class="form-control <?php $__errorArgs = ['featured_job_days'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-2"
                                    name="featured_job_days" value="<?php echo e($setting->featured_job_days); ?>">
                                <?php $__errorArgs = ['featured_job_days'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <small class="text-danger"><?php echo e(__('job_post_will_not_be_expired_anytime_soon_if_you_put')); ?> 0</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><?php echo e(__('highlight_jobs_duration')); ?>:</label>
                                <input min="0" type="number"
                                    class="form-control <?php $__errorArgs = ['highlight_job_days'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-2"
                                    name="highlight_job_days" value="<?php echo e($setting->highlight_job_days); ?>">
                                <?php $__errorArgs = ['highlight_job_days'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <small class="text-danger"><?php echo e(__('job_post_will_not_be_expired_anytime_soon_if_you_put')); ?> 0</small>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <?php if(userCan('setting.update')): ?>
                                <div class="form-group row text-center justify-content-center">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-sync"></i>
                                        <?php echo e(__('update')); ?>

                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $("#app_debug").bootstrapSwitch();
        $("#google_analytics").bootstrapSwitch();
        $("#language_changing").bootstrapSwitch();
        $("#search_engine_indexing").bootstrapSwitch();
        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })


        $("input[data-bootstrap-switch]").on('switchChange.bootstrapSwitch', function(event, state) {

            let oldData = event.target.attributes.oldvalue.value;
            let newData = event.currentTarget.checked ? 1 : 0;
            let button = event.target.attributes.button.value;

            if (oldData == newData) {
                $('#' + button).prop('disabled', true);
            } else {
                $('#' + button).prop('disabled', false);
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/backend/settings/pages/preference.blade.php ENDPATH**/ ?>