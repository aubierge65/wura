
<?php $__env->startSection('title'); ?>
    <?php echo e(__('edit')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(userCan('plan.update')): ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title line-height-36"><?php echo e(__('edit')); ?> <?php echo e(__('plan')); ?></h3>
                            <a href="<?php echo e(route('module.plan.index')); ?>"
                                class="btn bg-primary float-right d-flex align-items-center justify-content-center">
                                <i class="fas fa-arrow-left"></i>&nbsp; <?php echo e(__('back')); ?>

                            </a>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <form action="<?php echo e(route('module.plan.update', $plan->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="label"><?php echo e(__('label')); ?> <small
                                                            class="text-danger">*</small></label>
                                                    <input type="text" id="label" name="label" value="<?php echo e($plan->label); ?>"
                                                        class="form-control <?php $__errorArgs = ['label'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        placeholder="<?php echo e(__('basic_standard_premium')); ?>">
                                                    <?php $__errorArgs = ['label'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert"><?php echo e(__($message)); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="price"><?php echo e(__('price')); ?>

                                                        <?php echo e(defaultCurrencySymbol()); ?><small
                                                            class="text-danger">*</small></label>
                                                    <input type="number" id="price" name="price" value="<?php echo e($plan->price); ?>"
                                                        class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert"><?php echo e(__($message)); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="job_limit"><?php echo e(__('job_limit')); ?> <small
                                                            class="text-danger">*</small></label>
                                                    <input type="number" id="job_limit" name="job_limit"
                                                        value="<?php echo e($plan->job_limit); ?>"
                                                        class="form-control <?php $__errorArgs = ['job_limit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('job_limit')); ?>">
                                                    <?php $__errorArgs = ['job_limit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert"><?php echo e(__($message)); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="featured_job_limit"><?php echo e(__('featured_job_limit')); ?> <small
                                                            class="text-danger">*</small></label>
                                                    <input type="number" id="featured_job_limit" name="featured_job_limit"
                                                        value="<?php echo e($plan->featured_job_limit ?? old('featured_job_limit')); ?>"
                                                        class="form-control <?php $__errorArgs = ['featured_job_limit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('featured_job_limit')); ?>">
                                                    <?php $__errorArgs = ['featured_job_limit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert"><?php echo e(__($message)); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="highlight_job_limit"><?php echo e(__('highlight_job_limit')); ?> <small
                                                            class="text-danger">*</small></label>
                                                    <input type="number" id="highlight_job_limit" name="highlight_job_limit"
                                                        value="<?php echo e($plan->highlight_job_limit ?? old('highlight_job_limit')); ?>"
                                                        class="form-control <?php $__errorArgs = ['highlight_job_limit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('highlight_job_limit')); ?>">
                                                    <?php $__errorArgs = ['highlight_job_limit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert"><?php echo e(__($message)); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="highlight_job_limit">
                                                        <?php echo e(__('candidate_profile_view_limitation')); ?> <small class="text-danger">*</small>
                                                    </label> <br>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input <?php echo e(old('candidate_cv_view_limitation',$plan->candidate_cv_view_limitation) == 'limited' ? 'checked':''); ?> type="radio" id="limited_profile_view" name="candidate_cv_view_limitation" class="candidate_profile_view custom-control-input" value="limited">
                                                        <label class="custom-control-label" for="limited_profile_view"><?php echo e(__('limited')); ?></label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input <?php echo e(old('candidate_cv_view_limitation',$plan->candidate_cv_view_limitation) == 'unlimited' ? 'checked':''); ?> type="radio" id="unlimited_profile_view" name="candidate_cv_view_limitation" class="candidate_profile_view custom-control-input" value="unlimited">
                                                        <label class="custom-control-label" for="unlimited_profile_view">
                                                            <?php echo e(__('unlimited')); ?>

                                                        </label>
                                                    </div>
                                                    <?php $__errorArgs = ['candidate_cv_view_limitation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert"><?php echo e(__($message)); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6" id="candidate_profile_view_count_field">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="candidate_cv_preview_limit"><?php echo e(__('candidate_cv_preview_limit')); ?>

                                                        <small class="text-danger">*</small></label>
                                                    <input type="number" id="candidate_cv_preview_limit" name="candidate_cv_view_limit" value="<?php echo e(old('candidate_cv_view_limit', $plan->candidate_cv_view_limit)); ?>" class="form-control <?php $__errorArgs = ['candidate_cv_view_limit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('candidate_cv_preview_limit')); ?>" min="0">
                                                    <?php $__errorArgs = ['candidate_cv_view_limit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert"><?php echo e(__($message)); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="frontend_show">
                                                        <?php echo e(__('show_frontend')); ?> <small class="text-danger">*</small>
                                                    </label> <br>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="show_frontend_yes" name="frontend_show" class="plan_type_selection custom-control-input" value="1" <?php echo e($plan->frontend_show ? 'checked':''); ?>>
                                                        <label class="custom-control-label" for="show_frontend_yes"><?php echo e(__('yes')); ?></label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="show_frontend_no" name="frontend_show" class="plan_type_selection custom-control-input" value="0" <?php echo e(!$plan->frontend_show ? 'checked':''); ?>>
                                                        <label class="custom-control-label" for="show_frontend_no">
                                                            <?php echo e(__('no')); ?>

                                                        </label>
                                                    </div>
                                                    <?php $__errorArgs = ['frontend_show'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert"><?php echo e(__($message)); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="frontend_show">
                                                        <?php echo e(__('mark_profile_verify')); ?> <small class="text-danger">*</small>
                                                    </label> <br>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="profile_verify_yes" name="profile_verify" class="plan_type_selection custom-control-input" value="1" <?php echo e($plan->profile_verify ? 'checked':''); ?>>
                                                        <label class="custom-control-label" for="profile_verify_yes"><?php echo e(__('yes')); ?></label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="profile_verify_no" name="profile_verify" class="plan_type_selection custom-control-input" value="0"  <?php echo e(!$plan->profile_verify ? 'checked':''); ?> >
                                                        <label class="custom-control-label" for="profile_verify_no">
                                                            <?php echo e(__('no')); ?>

                                                        </label>
                                                    </div>
                                                    <?php $__errorArgs = ['profile_verify'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert"><?php echo e(__($message)); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>


                                        <?php $__currentLoopData = $app_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app_language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $name = "description_{$app_language->code}";
                                                    $plan_description = $plan->descriptions->where('locale', $app_language->code)->first() ?? '';
                                                ?>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="description"><?php echo e(__('description')); ?> <?php echo e($app_language->name); ?>

                                                            <small class="text-danger">*</small></label>
                                                        <textarea name="description_<?php echo e($app_language->code); ?>" placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('description')); ?>" value="<?php echo e(old('description')); ?>"
                                                            class="form-control <?php if($errors->has($name)): ?> is-invalid <?php endif; ?>"
                                                            id="description" cols="1" rows="4"><?php echo e(old('description', $plan_description ? $plan_description->description:'')); ?></textarea>
                                                        <?php if($errors->has($name)): ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($errors->first($name)); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <div class="row justify-content-center">
                                            <button class="btn btn-success" type="submit">
                                                <i class="fas fa-sync"></i>&nbsp; <?php echo e(__('update')); ?>

                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <script>
        checkSubscriptionType('<?php echo e(old("subscription_type", $plan->subscription_type)); ?>');

        $('.plan_type_selection').on('click', function(value){
            var value = $("[name='subscription_type']:checked").val();
            checkSubscriptionType(this.value);
        });

        function checkSubscriptionType(type){
            if (type == 'recurring') {
                $('#plan_interval').removeClass('d-none');
            }else{
                $('#plan_interval').addClass('d-none');
            }
        }

        profileViewLimitation('<?php echo e(old("candidate_cv_view_limitation", $plan->candidate_cv_view_limitation)); ?>');

        function profileViewLimitation(status){
            if (status == 'unlimited') {
                $('#candidate_profile_view_count_field').addClass('d-none');
            }else{
                $('#candidate_profile_view_count_field').removeClass('d-none');
            }
        }

        $('.candidate_profile_view').on('click', function(value){
            var value = $("[name='candidate_cv_view_limitation']:checked").val();
            profileViewLimitation(this.value);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\Modules/Plan\Resources/views/edit.blade.php ENDPATH**/ ?>