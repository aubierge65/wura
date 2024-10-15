<?php $__env->startSection('title'); ?>
    <?php echo e(__('industry_types_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-warning">
                    This list will be displayed on the company settings page as well as the profile setup page. The company
                    can select which industry his company was in from a list.
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-wrap justify-content-between">
                            <h3 class="card-title line-height-36"><?php echo e(__('industry_types_list')); ?>

                                (<?php echo e($industrytypes ? count($industrytypes) : '0'); ?>)</h3>
                            <button data-toggle="modal" data-target="#bulk_import_modal" class="btn bg-info"><i
                                    class="fas fa-plus mr-1"></i>
                                <?php echo e(__('bulk_import')); ?>

                            </button>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('name')); ?></th>
                                    <?php if(userCan('industry_types.update') || userCan('industry_types.delete')): ?>
                                        <th width="10%"><?php echo e(__('action')); ?></th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $industrytypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $industrytype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <h5><?php echo e($industrytype->name); ?></h5>
                                            <div>
                                                <?php $__currentLoopData = $industrytype->translations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $translation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                        <td>
                                            <?php if(userCan('industry_types.update')): ?>
                                                <a href="<?php echo e(route('industryType.edit', $industrytype->id)); ?>"
                                                    class="btn bg-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if(userCan('industry_types.delete')): ?>
                                                <form action="<?php echo e(route('industryType.destroy', $industrytype->id)); ?>"
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
            </div>
            <div class="col-md-4">
                <?php if(!empty($industryType) && userCan('industry_types.update')): ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title line-height-36"><?php echo e(__('edit')); ?> <?php echo e(__('industry_type')); ?></h3>
                            <a href="<?php echo e(route('industryType.index')); ?>"
                                class="btn bg-primary float-right d-flex align-items-center justify-content-center"><i
                                    class="fas fa-plus mr-1"></i><?php echo e(__('create')); ?>

                            </a>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="<?php echo e(route('industryType.update', $industryType->id)); ?>"
                                method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <?php $__currentLoopData = $app_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $label = __('name') . ' ' . getLanguageByCode($language->code);
                                        $name = "name_{$language->code}";
                                        $code = $industryType->translations[$key]['locale'] ?? '';
                                        $data = $industryType->translations->where('locale', $language->code)->first();
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
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-plus mr-1"></i>
                                        <?php echo e(__('save')); ?>

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(empty($industryType) && userCan('industry_types.create')): ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title line-height-36"><?php echo e(__('create')); ?> <?php echo e(__('industry_type')); ?></h3>
                        </div>
                        <div class="card-body">
                            <?php if(userCan('industry_types.create')): ?>
                                <form class="form-horizontal" action="<?php echo e(route('industryType.store')); ?>" method="POST">
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
                                    <div class="form-group">
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
                    <div class="modal-header ">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('bulk_import')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo e(route('admin.industry.type.bulk.import')); ?>" method="post"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body">
                            <div class="alert alert-warning" role="alert">
                                Before importing, please download the example file and match the fields structure. If any
                                field data is missing, the system will generate it
                            </div>
                            <div class="form-group">
                                <label for="experience"><?php echo e(__('example_file')); ?></label> <br>
                                <a href="/backend/dummy/industry_example.xlsx" target="_blank"
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/industryType/index.blade.php ENDPATH**/ ?>