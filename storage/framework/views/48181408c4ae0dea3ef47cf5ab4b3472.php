
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
                        <a href="<?php echo e(route('module.faq.index')); ?>"
                            class="btn bg-primary float-right d-flex align-items-center justify-content-center"><i
                                class="fas fa-arrow-left"></i>&nbsp; <?php echo e(__('back')); ?></a>
                    </div>
                    <div class="row pt-3 pb-4">
                        <div class="col-md-6 offset-md-3">
                            <form class="form-horizontal" action="<?php echo e(route('module.faq.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group row mb-15">
                                    <label class="col-sm-3 form-label"><?php echo e(__('language')); ?>

                                        <small class="text-danger">*</small>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="d-flex">
                                            <?php $__currentLoopData = $app_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="custom-control custom-radio">
                                                    <input class="d-none" type="radio" id="lang_code_<?php echo e($lang->id); ?>"
                                                        name="code" <?php echo e($lang->code == old('code') ? 'checked' : ''); ?>

                                                        value="<?php echo e($lang->code); ?>">
                                                    <label onclick="pushClass('lang_code_button_<?php echo e($lang->id); ?>')"
                                                        for="lang_code_<?php echo e($lang->id); ?>">
                                                        <span type="button" id="lang_code_button_<?php echo e($lang->id); ?>"
                                                            class="c-btn btn btn-sm btn-outline-primary">
                                                            <?php echo e($lang->name); ?>

                                                        </span>
                                                    </label>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="text-danger font-size-13">
                                                <strong><?php echo e($message); ?></strong>
                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-15">
                                    <label class="col-sm-3 form-label"><?php echo e(__('select_one')); ?><small
                                            class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <select name="faq_category_id"
                                            class="form-control <?php $__errorArgs = ['faq_category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> w-100-p">
                                            <?php $__currentLoopData = $faq_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($faq_category->id); ?>"> <?php echo e($faq_category->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['faq_category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><?php echo e(__('question')); ?><small
                                            class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input value="<?php echo e(old('question')); ?>" name="question" type="text"
                                            class="form-control <?php $__errorArgs = ['question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('question')); ?>">
                                        <?php $__errorArgs = ['question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><?php echo e(__('answer')); ?><small
                                            class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <textarea id="image_ckeditor" type="text" class="form-control" name="answer"
                                            placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('answer')); ?>... "><?php echo e(old('answer')); ?></textarea>
                                        <?php $__errorArgs = ['answer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger font-size-13"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-4">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i>&nbsp;
                                            <?php echo e(__('create')); ?></button>
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
    <style>
        .ck-editor__editable_inline {
            min-height: 170px;
        }

        .c-btn {
            padding-left: 22px;
            padding-right: 22px;
            border-radius: 15px;
        }

        .custom-control {
            position: relative;
            z-index: 1;
            display: block;
            min-height: 1.5rem;
            padding-left: 0;
            padding-right: 1.5rem;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function pushClass(arg) {
            $('.c-btn').removeClass('btn-primary text-white');
            $('#' + arg).addClass('btn-primary text-white');
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\Modules/Faq\Resources/views/create.blade.php ENDPATH**/ ?>