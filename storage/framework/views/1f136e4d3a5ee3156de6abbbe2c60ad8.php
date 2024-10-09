<?php $__env->startSection('title'); ?>
    <?php echo e(__('create_post')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form class="row mt-4" action="<?php echo e(route('module.blog.store')); ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="author_id" value="<?php echo e(auth()->id()); ?>">
    <?php echo csrf_field(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-wrap justify-content-between">
                            <h3 class="card-title line-height-36"><?php echo e(__('create')); ?> <?php echo e(__('post')); ?></h3>
                            <div>
                                <a href="<?php echo e(route('module.blog.index')); ?>"
                                class="btn bg-primary my-2 my-sm-0 float-right d-flex align-items-center justify-content-center ml-1"><i
                                    class="fas fa-arrow-left"></i>&nbsp;<?php echo e(__('back')); ?>

                                </a>
                                <button type="submit" value="draft" name="status" class="btn btn-secondary my-2 my-sm-0">
                                    <i class="fas fa-archive"></i>&nbsp;<?php echo e(__('save_as_draft')); ?>

                                </button>
                                <button type="submit" class="btn btn-success my-2 my-sm-0">
                                    <i class="fas fa-plus"></i>&nbsp;<?php echo e(__('published')); ?>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5><?php echo e(__('title')); ?>/<?php echo e(__('language')); ?></h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-lebel">
                                        <?php echo e(__('title')); ?>

                                        <small class="text-danger">*</small>
                                    </label>
                                    <input value="<?php echo e(old('title')); ?>" name="title" type="text"
                                        class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('title')); ?>">
                                    <?php $__errorArgs = ['title'];
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
                                <div class="form-group">
                                    <label class="form-lebel">
                                        <?php echo e(__('language')); ?>

                                        <small class="text-danger">*</small>
                                    </label>
                                    <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="custom-control custom-radio mr-3">
                                            <input class="custom-control-input" type="radio" id="lang_code_<?php echo e($lang->id); ?>" name="locale" <?php echo e($lang->code == old('locale', currentLangCode()) ? 'checked':''); ?> value="<?php echo e($lang->code); ?>">
                                            <label for="lang_code_<?php echo e($lang->id); ?>" class="custom-control-label"><?php echo e($lang->name); ?></label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__errorArgs = ['locale'];
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
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5><?php echo e(__('category')); ?>/<?php echo e(__('thumbnail_image')); ?></h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-lebel">
                                        <?php echo e(__('category')); ?>

                                        <small class="text-danger">*</small>
                                    </label>
                                    <select name="category_id"
                                        class="select2bs4 <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> ">
                                        <option value=""><?php echo e(__('select_one')); ?></option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e(old('category_id') == $category->id ? 'selected' : ''); ?>

                                                value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['category_id'];
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

                                <div class="form-group">
                                    <label class="form-lebel">
                                        <?php echo e(__('thumbnail_image')); ?>

                                        <small class="text-danger">*</small>
                                    </label>
                                    <div class="upload-btn-wrapper">
                                        <input type="file" class="form-control dropify" data-default-file=""
                                            name="image" accept="image/png, image/jpg, image/jpeg, image/gif"
                                            data-allowed-file-extensions='["jpg", "jpeg","png", "gif"]'
                                            data-max-file-size="3M">
                                            <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 800x500</p>
                                    </div>
                                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback d-block"
                                            role="alert"><strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5><?php echo e(__('description')); ?></h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-lebel">
                                        <?php echo e(__('short_description')); ?>

                                        <small class="text-danger">*</small>
                                    </label>
                                    <textarea rows="5" type="text" class="form-control height-124px" name="short_description"
                                        placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('short_description')); ?>"><?php echo e(old('short_description')); ?></textarea>
                                    <?php $__errorArgs = ['short_description'];
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
                                <div class="form-group">
                                    <label class="form-lebel">
                                        <?php echo e(__('description')); ?>

                                        <small class="text-danger">*</small>
                                    </label>
                                    <textarea id="image_ckeditor" type="text" class="form-control" name="description"
                                        placeholder="<?php echo e(__('enter')); ?>  <?php echo e(__('description')); ?>"><?php echo e(old('description')); ?></textarea>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <style>
        .ck-editor__editable_inline {
            min-height: 160px;
        }

        .select2-results__option[aria-selected=true] {
            display: none;
        }

        .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice {
            color: #fff;
            border: 1px solid #fff;
            background: #007bff;
            border-radius: 30px;
        }

        .height-124px {
            height: 124px !important
        }

        .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice__remove {
            color: #fff;
        }

        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('backend')); ?>/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?php echo e(asset('backend/plugins/dropify/js/dropify.min.js')); ?>"></script>
    <script>
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        // dropify
        $('.dropify').dropify();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/Modules/Blog/Resources/views/create.blade.php ENDPATH**/ ?>