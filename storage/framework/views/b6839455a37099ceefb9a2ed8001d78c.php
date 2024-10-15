<?php $__env->startSection('title'); ?>
    <?php echo e(__('create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36"><?php echo e(__('create')); ?></h3>
                        <a href="<?php echo e(route('module.testimonial.index')); ?>"
                            class="btn bg-primary float-right d-flex align-items-center justify-content-center"><i
                                class="fas fa-arrow-left"></i>&nbsp; <?php echo e(__('back')); ?></a>
                    </div>
                    <div class="row pt-3 pb-3">
                        <div class="col-6 offset-md-3 text-center">
                            <img class="rounded m-auto p-3 border" width="150px" height="150px" id="image" src="<?php echo e(asset('backend/image/default.png')); ?>" alt="User profile picture">
                        </div>
                    </div>
                    <div class="row pt-3 pb-4">
                        <div class="col-md-6 offset-md-3">
                            <form class="form-horizontal" action="<?php echo e(route('module.testimonial.store')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><?php echo e(__('name')); ?><small
                                            class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input value="<?php echo e(old('name')); ?>" name="name" type="text"
                                            class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            placeholder="<?php echo e(__('name')); ?>">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback"
                                                role="alert"><strong><?php echo e($message); ?></strong></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><?php echo e(__('position')); ?><small
                                            class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input value="<?php echo e(old('position')); ?>" name="position" type="text"
                                            class="form-control <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            placeholder="<?php echo e(__('position')); ?>">
                                        <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback"
                                                role="alert"><strong><?php echo e($message); ?></strong></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><?php echo e(__('image')); ?></label>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input name="image" autocomplete="image"
                                                onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                                type="file" class="custom-file-input <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="customFile">
                                            <label class="custom-file-label"
                                                for="customFile"><?php echo e(__('choose_file')); ?></label>
                                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger invalid-feedback"
                                                    role="alert"><strong><?php echo e($message); ?></strong></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><?php echo e(__('stars')); ?><small
                                            class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <div id="rateYo"></div>

                                        <input type="hidden" name="stars" id="rating"
                                            class="form-control <?php $__errorArgs = ['stars'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <?php $__errorArgs = ['stars'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback"
                                                role="alert"><strong><?php echo e($message); ?></strong></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><?php echo e(__('language')); ?><small
                                            class="text-danger">*</small></label>
                                    <div class="col-sm-9 d-flex">
                                        <?php $__currentLoopData = $app_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="custom-control custom-radio mr-3">
                                                <input class="custom-control-input" type="radio" id="lang_code_<?php echo e($lang->id); ?>" name="code" <?php echo e($lang->code == old('code') ? 'checked':''); ?> value="<?php echo e($lang->code); ?>">
                                                <label for="lang_code_<?php echo e($lang->id); ?>" class="custom-control-label"><?php echo e($lang->name); ?></label>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger font-size-13 d-block"><strong><?php echo e($message); ?></strong></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><?php echo e(__('description')); ?><small
                                            class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <textarea rows="8" type="text" class="form-control" name="description"
                                            placeholder="<?php echo e(__('description')); ?>"><?php echo e(old('description')); ?></textarea>
                                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger font-size-13"><strong><?php echo e($message); ?></strong></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i>
                                            <?php echo e(__('create')); ?>

                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend/css/jquery.rateyo.min.css')); ?>">
    <style>
        .ck-editor__editable_inline {
            min-height: 170px;
        }

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('backend/js/jquery.rateyo.min.js')); ?>"></script>
    <script>
        $("#rateYo").rateYo({
            starWidth: '30px',
            fullStar: true,
            mormalFill: 'yellow',
            ratedFill: '#ffc107',
            onSet: function(rating, rateYoInstance) {
                $('#rating').val(rating);
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/Modules/Testimonial/Resources/views/create.blade.php ENDPATH**/ ?>