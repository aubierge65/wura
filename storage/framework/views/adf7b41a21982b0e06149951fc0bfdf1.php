<?php $__env->startSection('title'); ?>
    <?php echo e(__('edit')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title line-height-36"><?php echo e(__('edit')); ?></h3>
                                <a href="<?php echo e(route('module.country.index')); ?>"
                                    class="btn bg-primary float-right d-flex align-items-center justify-content-center">
                                    <i class="fas fa-arrow-left"></i>&nbsp; <?php echo e(__('back')); ?>

                                </a>
                            </div>
                            <div class="row pt-3 pb-4">
                                <div class="col-md-6 offset-md-3">
                                    <form class="form-horizontal"
                                        action="<?php echo e(route('module.country.update', $country->id)); ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">
                                                <?php echo e(__('name')); ?>

                                                <small class="text-danger">*</small>
                                            </label>
                                            <div class="col-sm-9">
                                                <select name="name"
                                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> select2bs4 w-100-p">
                                                    <option value=""><?php echo e(__('select_one')); ?></option>
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option <?php echo e($countr->id == $country->id ? 'selected' : ''); ?>

                                                            value="<?php echo e($countr->name); ?>">
                                                            <?php echo e($countr->name); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><?php echo e(__('image')); ?></label>
                                            <div class="col-sm-9">
                                                <div class="">
                                                    <input name="image" type="file" data-show-errors="true"
                                                        data-width="100%" data-default-file="<?php echo e(asset($country->image)); ?>"
                                                        class="form-control dropify form-control-file <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> border-0">
                                                    <div class="dropify-preview">
                                                        <span class="dropify-render"></span>
                                                        <div class="dropify-infos">
                                                            <div class="dropify-infos-inner">
                                                                <p class="dropify-filename">
                                                                    <span class="file-icon">
                                                                    </span>
                                                                    <span class="dropify-filename-inner"></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">
                                                <?php echo e(__('icon')); ?>

                                            </label>
                                            <div class="col-sm-9">
                                                <input type="hidden" name="icon" id="icon"
                                                    value="<?php echo e(old('icon', $country->icon)); ?>" class="form-control" />
                                                <div class="" data-icon="fab fa-twitter" id="target"></div>
                                                <?php $__errorArgs = ['country_icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-4">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fas fa-plus"></i>
                                                    &nbsp; <?php echo e(__('update')); ?>

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
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <!-- Custom Link -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
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
    
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/flagicon/dist/css/flag-icon.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/flagicon/dist/css/bootstrap-iconpicker.min.css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('backend/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <script type="text/javascript"
        src="<?php echo e(asset('backend')); ?>/plugins/flagicon/dist/js/bootstrap-iconpicker.bundle.min.js"></script>
    <!-- Custom Script -->

    <script>
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    </script>


    
    <script src="<?php echo e(asset('backend')); ?>/plugins/dropify/js/dropify.min.js"></script>
    <script>
        $('.dropify').dropify();

        $('#target').iconpicker({
            align: 'left', // Only in div tag
            arrowClass: 'btn-danger',
            arrowPrevIconClass: 'fas fa-angle-left',
            arrowNextIconClass: 'fas fa-angle-right',
            cols: 16,
            footer: true,
            header: true,
            icon: '<?php echo e($country->icon); ?>',
            iconset: 'flagicon',
            labelHeader: '{0} of {1} pages',
            labelFooter: '{0} - {1} of {2} icons',
            placement: 'bottom', // Only in button tag
            rows: 4,
            search: true,
            searchText: 'Search',
            selectedClass: 'btn-success',
            unselectedClass: ''
        });
        $('#target').on('change', function(e) {
            $('#icon').val(e.icon)
        });
        // dropify
        var drEvent = $('.dropify').dropify();
        drEvent.on('dropify.error.fileSize', function(event, element) {
            alert('Filesize error message!');
        });
        drEvent.on('dropify.error.imageFormat', function(event, element) {
            alert('Image format error message!');
        });
        $('.search-control').val('<?php echo e($country->icon); ?>');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/Modules/Location/Resources/views/country/edit.blade.php ENDPATH**/ ?>