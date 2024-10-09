<?php $__env->startSection('title'); ?>
    <?php echo e(__('create_category')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36"><?php echo e(__('create_category')); ?></h3>
                        <a href="<?php echo e(route('module.category.index')); ?>"
                            class="btn bg-primary float-right d-flex align-items-center justify-content-center"><i
                                class="fas fa-arrow-left"></i>&nbsp;<?php echo e(__('back')); ?></a>
                    </div>
                    <div class="row pt-3 pb-4 justify-content-center">
                        <div class="col-md-8">
                            <form class="form-horizontal" action="<?php echo e(route('module.category.store')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="author_id" value="<?php echo e(auth()->id()); ?>">
                                <div class="row justify-content-center pt-3 pb-4">
                                    <div class="col-md-9 px-5">

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><?php echo e(__('name')); ?><small
                                                    class="text-danger">*</small></label>
                                            <div class="col-sm-10">
                                                <input value="<?php echo e(old('name')); ?>" name="name" type="text"
                                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('name')); ?>">
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
                                            <label class="col-sm-2 col-form-label"><?php echo e(__('image')); ?></label>
                                            <div class="col-sm-10">
                                                <input name="image" type="file"
                                                    class="form-control-file <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                <?php $__errorArgs = ['image'];
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
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success"><i
                                                        class="fas fa-plus"></i>&nbsp;<?php echo e(__('create')); ?></button>
                                            </div>
                                        </div>
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
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
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

        .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice__remove {
            color: #fff;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('backend')); ?>/plugins/select2/js/select2.full.min.js"></script>
    <script>
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        ClassicEditor
            .create(document.querySelector('#editor2'))
            .catch(error => {
                console.error(error);
            });

        $('#customFile').on('change', function(event) {
            $('#defaulthide').addClass('d-block')
            $('#defaulthide').removeClass('d-none')
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/Modules/Blog/Resources/views/postcategory/create.blade.php ENDPATH**/ ?>