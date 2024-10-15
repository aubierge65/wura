<?php $__env->startSection('title'); ?>
    <?php echo e(__('job_category_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-wrap justify-content-between">
                            <h3 class="card-title line-height-36"><?php echo e(__('job_category_list')); ?> (<?php echo e(count($jobCategories)); ?>)
                            </h3>

                            <button data-toggle="modal" data-target="#bulk_import_modal" class="btn bg-info"><i
                                    class="fas fa-plus mr-1"></i>
                                <?php echo e(__('bulk_import')); ?>

                            </button>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('image')); ?></th>
                                    <th><?php echo e(__('icon')); ?></th>
                                    <th><?php echo e(__('name')); ?></th>
                                    <?php if(userCan('job_category.update') || userCan('job_category.delete')): ?>
                                        <th width="10%"><?php echo e(__('action')); ?></th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $jobCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td class="vertical-middle"><img src="<?php echo e($category->image_url); ?>" alt="category"
                                                height="50px" width="50px"></td>
                                        <td class="vertical-middle">
                                            <i class="<?php echo e($category->icon); ?>"></i>
                                        </td>
                                        <td class="vertical-middle">
                                            <h5><?php echo e($category->name); ?></h5>
                                            <div>
                                                <?php $__currentLoopData = $category->translations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $translation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(app()->getLocale() == $translation->locale): ?>
                                                    <?php else: ?>
                                                        <span
                                                            class="d-block"><b><?php echo e(getLanguageByCodeInLookUp($translation->locale,$app_language)); ?></b>:
                                                            <?php echo e($translation->name); ?>

                                                        </span>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </td>
                                        <td class="vertical-middle">
                                            <?php if(userCan('job_category.update')): ?>
                                                <a href="<?php echo e(route('jobCategory.edit', $category->id)); ?>"
                                                    class="btn bg-info"><i class="fas fa-edit"></i></a>
                                            <?php endif; ?>
                                            <?php if(userCan('job_category.delete')): ?>
                                                <form action="<?php echo e(route('jobCategory.destroy', $category->id)); ?>"
                                                    method="POST" class="d-inline">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button
                                                        onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                        class="btn bg-danger"><i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="10" class="text-center">
                                            <?php echo e(__('no_data_found')); ?>

                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <?php echo e($jobCategories->links()); ?>

                </div>
            </div>
            <div class="col-md-4">
                <?php if(!empty($jobCategory) && userCan('job_category.update')): ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title line-height-36"><?php echo e(__('edit')); ?> <?php echo e('category'); ?></h3>
                            <a href="<?php echo e(route('jobCategory.index')); ?>"
                                class="btn bg-primary float-right d-flex align-items-center justify-content-center"><i
                                    class="fas fa-plus mr-1"></i><?php echo e(__('create')); ?>

                            </a>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="<?php echo e(route('jobCategory.update', $jobCategory->id)); ?>"
                                method="POST" enctype="multipart/form-data">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <?php $__currentLoopData = $app_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $label = __('name') . ' ' . getLanguageByCode($language->code);
                                        $name = "name_{$language->code}";
                                        $code = $jobCategory->translations[$key]['locale'] ?? '';
                                        $data = $jobCategory->translations->where('locale', $language->code)->first();
                                        $value = $data ? $data->name : '';
                                    ?>
                                    <div class="form-group">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => $label,'for' => 'name','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                        <input id="name" type="text" name="<?php echo e($name); ?>"
                                            placeholder="<?php echo e(__('name')); ?>" value="<?php echo e($value); ?>"
                                            class="form-control <?php if($errors->has($name)): ?> is-invalid <?php endif; ?>">
                                        <?php if($errors->has($name)): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first($name)); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-group row">
                                    <label><?php echo e(__('image')); ?></label>
                                    <input name="image" class="form-control-file" autocomplete="image" type="file"
                                        id="image">
                                </div>
                                <div class="form-group row">
                                    <div>
                                        <label><?php echo e(__('icon')); ?></label>
                                    </div>
                                    <div class="col-sm-12" style="overflow-x: auto;">
                                        <input type="hidden" name="icon" id="icon"
                                            value="<?php echo e($jobCategory->icon); ?>" />
                                        <div id="target"></div>
                                        <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback d-block"
                                                role="alert"><strong><?php echo e($message); ?></strong></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group row m-auto">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-sync mr-1"></i>
                                        <?php echo e(__('save')); ?>

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(empty($jobCategory) && userCan('job_category.create')): ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title line-height-36"><?php echo e(__('create')); ?> <?php echo e('category'); ?></h3>
                        </div>
                        <div class="card-body">
                            <?php if(userCan('job_category.create')): ?>
                                <form class="form-horizontal" action="<?php echo e(route('jobCategory.store')); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    
                                    <?php $__currentLoopData = $app_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $label = __('name') . ' ' . getLanguageByCode($language->code);
                                            $name = "name_{$language->code}";
                                        ?>
                                        <div class="form-group">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => $label,'for' => 'name','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                            <input id="name" type="text" name="<?php echo e($name); ?>"
                                                placeholder="<?php echo e(__('name')); ?>" value="<?php echo e(old('name')); ?>"
                                                class="form-control <?php if($errors->has($name)): ?> is-invalid <?php endif; ?>">
                                            <?php if($errors->has($name)): ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first($name)); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-group row">
                                        <label><?php echo e(__('image')); ?></label>
                                        <input name="image" class="form-control-file" autocomplete="image" type="file"
                                            id="image">
                                    </div>
                                    <div class="form-group row">
                                        <div>
                                            <label><?php echo e(__('icon')); ?>

                                                <?php if (isset($component)) { $__componentOriginal2c5729992783a21c6ac1f548a7f68506 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2c5729992783a21c6ac1f548a7f68506 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.required','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.required'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2c5729992783a21c6ac1f548a7f68506)): ?>
<?php $attributes = $__attributesOriginal2c5729992783a21c6ac1f548a7f68506; ?>
<?php unset($__attributesOriginal2c5729992783a21c6ac1f548a7f68506); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2c5729992783a21c6ac1f548a7f68506)): ?>
<?php $component = $__componentOriginal2c5729992783a21c6ac1f548a7f68506; ?>
<?php unset($__componentOriginal2c5729992783a21c6ac1f548a7f68506); ?>
<?php endif; ?>
                                            </label>
                                        </div>
                                        <div style="overflow-x: auto;">
                                            <input type="hidden" name="icon" id="icon"
                                                value="<?php echo e(old('icon')); ?>" />
                                            <div id="target"></div>
                                            <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback d-block"
                                                    role="alert"><strong><?php echo e($message); ?></strong></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row m-auto">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fas fa-plus mr-1"></i>
                                            <?php echo e(__('save')); ?>

                                        </button>
                                    </div>
                                </form>
                            <?php else: ?>
                                <p><?php echo e(__('dont_have_permission')); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="modal fade" id="bulk_import_modal" tabindex="-1" role="dialog"
            aria-labelledby="bulk_import_modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('bulk_import')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo e(route('admin.job.category.bulk.import')); ?>" method="post"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body">
                            <div class="alert alert-warning" role="alert">
                                Before importing, please download the example file and match the fields structure. If any
                                field data is missing, the system will generate it
                            </div>
                            <div class="form-group">
                                <label for="experience"><?php echo e(__('example_file')); ?></label> <br>
                                <a href="/backend/dummy/job_category_example.xlsx" target="_blank"
                                    class="btn btn-primary btn-block">
                                    <i class="fas fa-download"></i>
                                    <?php echo e(__('download')); ?> <?php echo e(__('example_file')); ?>

                                </a>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="experience"><?php echo e(__('choose_file')); ?></label> <br>
                                <input type="file" class="form-control dropify" name="import_file"
                                    data-allowed-file-extensions='["csv", "xlsx","xls"]' accept=".csv,.xlsx,.xls"
                                    data-max-file-size="3M">
                                <?php $__errorArgs = ['import_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback d-block" role="alert"><?php echo e(__($message)); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal"><?php echo e(__('close')); ?></button>
                            <button type="submit" class="btn btn-primary"><?php echo e(__('submit')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <!-- Bootstrap-Iconpicker -->
    <link rel="stylesheet"  href="<?php echo e(asset('backend')); ?>/plugins/bootstrap-iconpicker/dist/css/bootstrap-iconpicker.min.css" />
    <style>
        .vertical-middle {
            vertical-align: middle !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- Bootstrap-Iconpicker Bundle -->
    <script type="text/javascript"
        src="<?php echo e(asset('backend')); ?>/plugins/bootstrap-iconpicker/dist/js/bootstrap-iconpicker.bundle.min.js"></script>
    <script type="text/javascript"
        src="<?php echo e(asset('backend')); ?>/plugins/bootstrap-iconpicker/dist/js/bootstrap-iconpicker.min.js"></script>

    <script>
        // iconpicker call
        $('#target').iconpicker({
            align: 'center', // Only in div tag
            arrowClass: 'btn-danger',
            arrowPrevIconClass: 'fas fa-angle-left',
            arrowNextIconClass: 'fas fa-angle-right',
            cols: 12,
            footer: true,
            header: true,
            icon: '<?php echo e($jobCategory->icon ?? 'fas fa-bomb'); ?>',
            iconset: 'fontawesome5',
            labelHeader: '{0} of {1} pages',
            labelFooter: '{0} - {1} of {2} icons',
            placement: 'bottom', // Only in button tag
            rows: 4,
            search: true,
            searchText: 'Search',
            selectedClass: 'btn-success',
            unselectedClass: '',
        });

        $('#target').on('change', function(e) {
            $('#icon').val(e.icon)
        });

        $('#target').on('change', function(e) {
            $('#icon').val(e.icon)
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/JobCategory/index.blade.php ENDPATH**/ ?>