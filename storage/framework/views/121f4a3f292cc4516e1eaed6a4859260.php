

<?php $__env->startSection('title'); ?>
    <?php echo e(__('post_job')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="row">
                <?php if (isset($component)) { $__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c = $attributes; } ?>
<?php $component = App\View\Components\Website\Company\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\Company\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c)): ?>
<?php $attributes = $__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c; ?>
<?php unset($__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c)): ?>
<?php $component = $__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c; ?>
<?php unset($__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c); ?>
<?php endif; ?>
                <div class="col-md-9">
                    <div class="dashboard-right tw-ps-0 lg:tw-ps-5">
                        <div class="dashboard-right-header">
                            <span class="sidebar-open-nav">
                                <i class="ph-list"></i>
                            </span>
                        </div>
                        <h2 class="tw-text-2xl tw-font-medium tw-text-[#18191C] tw-mb-8">
                            <?php echo e(__('create')); ?> <?php echo e(strtolower(__('post'))); ?>

                        </h2>
                        <form class="row mt-4" action="<?php echo e(route('company.blog.store')); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="author_id" value="<?php echo e(auth()->id()); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-8">
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
                                </div>
                                <div class="col-md-4">
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
                                </div>
                            </div>
                            <div class='mt-3'>
                                <div class="form-group">
                                    <label class="form-lebel">
                                        <?php echo e(__('language')); ?>

                                        <small class="text-danger">*</small>
                                    </label>
                                    <div class="row">
                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-2">
                                                <input class="custom-control-input" type="radio"
                                                    id="lang_code_<?php echo e($lang->id); ?>" name="locale"
                                                    <?php echo e($lang->code == old('locale', currentLangCode()) ? 'checked' : ''); ?>

                                                    value="<?php echo e($lang->code); ?>"> &nbsp;
                                                <label for="lang_code_<?php echo e($lang->id); ?>"
                                                    class="custom-control-label"><?php echo e($lang->name); ?></label>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
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
                            <div class="mt-3">
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
                                <div class="form-group mt-3">
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
                                <div class="form-group" style="position: relative;">
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
                            <div>
                                <button type="submit" value="draft" name="status" class="btn btn-secondary my-2 my-sm-0">
                                    <i class="fas fa-archive"></i>&nbsp;<?php echo e(__('save_as_draft')); ?>

                                </button>
                                <button type="submit" class="btn btn-success my-2 my-sm-0">
                                    <i class="fas fa-plus"></i>&nbsp;<?php echo e(__('published')); ?>

                                </button>
                            </div>
                        </form>
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
        input[type=file] {

        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('backend')); ?>/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?php echo e(asset('backend/plugins/dropify/js/dropify.min.js')); ?>"></script>
    <script>
        //Initialize Select2 Elements
        $('.select2bs4').select2({

        })

        // dropify
        $('.dropify').dropify();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/frontend/pages/company/blog/create.blade.php ENDPATH**/ ?>