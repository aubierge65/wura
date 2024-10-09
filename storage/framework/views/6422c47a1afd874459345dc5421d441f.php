<?php $__env->startSection('title'); ?>
    <?php echo e(__('team_size_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-warning">
                    This list will be displayed on the company job page. The company can choose his team size from a
                    list.
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title line-height-36"><?php echo e(__('team_size_list')); ?>

                                (<?php echo e(count($team_sizes)); ?>)</h3>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('name')); ?></th>
                                    <?php if(userCan('team_sizes.update') || userCan('team_sizes.delete')): ?>
                                        <th width="10%"><?php echo e(__('action')); ?></th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $team_sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <h5><?php echo e($team->name); ?></h5>
                                            <div>
                                                <?php $__currentLoopData = $team->translations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $translation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                            <?php if(userCan('team_sizes.update')): ?>
                                                <a href="<?php echo e(route('teamSize.edit', $team->id)); ?>" class="btn bg-info"><i
                                                        class="fas fa-edit"></i></a>
                                            <?php endif; ?>
                                            <?php if(userCan('team_sizes.delete')): ?>
                                                <form action="<?php echo e(route('teamSize.destroy', $team->id)); ?>" method="POST"
                                                    class="d-inline">
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
                <?php if(!empty($team_size) && userCan('team_sizes.update')): ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title line-height-36"><?php echo e(__('edit')); ?> <?php echo e(__('team_size')); ?></h3>
                            <a href="<?php echo e(route('teamSize.index')); ?>"
                                class="btn bg-primary float-right d-flex align-items-center justify-content-center"><i
                                    class="fas fa-plus mr-1"></i><?php echo e(__('create')); ?>

                            </a>
                        </div>
                        <div class="card-body">
                            <div class="pt-3 pb-4">
                                <form class="form-horizontal" action="<?php echo e(route('teamSize.update', $team_size->id)); ?>"
                                    method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <?php $__currentLoopData = $app_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $label = __('name') . ' ' . getLanguageByCode($language->code);
                                            $name = "name_{$language->code}";
                                            $code = $team_size->translations[$key]['locale'] ?? '';
                                            $data = $team_size->translations->where('locale', $language->code)->first();
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
                    </div>
                <?php endif; ?>
                <?php if(empty($team_size) && userCan('team_sizes.create')): ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title line-height-36"><?php echo e(__('create')); ?> <?php echo e(__('team_size')); ?></h3>
                        </div>
                        <div class="card-body">
                            <?php if(userCan('job_role.create')): ?>
                                <form class="form-horizontal" action="<?php echo e(route('teamSize.store')); ?>" method="POST">
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

            <div class="mt-3 d-flex overflow-auto justify-content-center">
                <?php echo e($team_sizes->links()); ?>

            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/team_size/index.blade.php ENDPATH**/ ?>