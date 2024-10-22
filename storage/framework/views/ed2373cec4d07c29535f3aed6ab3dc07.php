<?php $__env->startSection('title'); ?>
    <?php echo e(__('language_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('settings')); ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('settings')); ?></li>
                <li class="breadcrumb-item active"><?php echo e(__('language_list')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('website-settings'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-4 mb-3">
                <?php
                    $current_language = currentLanguage() ? currentLanguage() : loadDefaultLanguage();
                ?>
                <form action="<?php echo e(route('setDefaultLanguage')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'set_default_language','for' => 'inlineFormCustomSelect','class' => 'mr-sm-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <div class="d-flex">
                        <select name="code" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option value="" hidden><?php echo e(__('language')); ?></option>
                            <?php $__currentLoopData = $languagesList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e($current_language->code === $language->code ? 'selected' : ''); ?>

                                    value="<?php echo e($language->code); ?>">
                                    <?php echo e($language->name); ?>(<?php echo e($language->code); ?>)
                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <button type="submit" class="btn btn-primary ml-2"><?php echo e(__('update')); ?></button>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36"><?php echo e(__('language_list')); ?></h3>
                        <a href="<?php echo e(route('languages.create')); ?>"
                            class="btn bg-primary float-right d-flex align-items-center justify-content-center">
                            <i class="fas fa-plus"></i>
                            <?php echo e(__('create')); ?>

                        </a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th><?php echo e(__('name')); ?></th>
                                    <th><?php echo e(__('code')); ?></th>
                                    <th><?php echo e(__('direction')); ?></th>
                                    <th><?php echo e(__('flag')); ?></th>
                                    <th width="15%"><?php echo e(__('action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $languagesList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td>
                                            <?php echo e($language->name); ?>

                                            <?php if(config('templatecookie.default_language') == $language->code): ?>
                                                <span class="badge badge-pill badge-primary"><?php echo e(__('default')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($language->code); ?></td>
                                        <td><?php echo e(__($language->direction)); ?></td>
                                        <td><i class="flag-icon <?php echo e($language->icon); ?>"></i></td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a href="<?php echo e(route('languages.view', $language->code)); ?>"
                                                class="btn btn-secondary mr-2">
                                                <i class="fas fa-cog"></i>
                                            </a>
                                            <?php if($language->code == 'en'): ?>
                                                <a data-toggle="tooltip" data-placement="top"
                                                    title="<?php echo e(__('translate_language')); ?>" href="javascript:void(0)"
                                                    class="btn btn-warning mt-0 mr-2" data-toggle="tooltip"
                                                    title="You can't delete or edit this language">
                                                    <i class="fas fa-lock"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if($language->code != 'en'): ?>
                                                <a data-toggle="tooltip" data-placement="top"
                                                    title="<?php echo e(__('sync_language_contents')); ?>"
                                                    onclick="return confirm('<?php echo e(__('are_you_sure')); ?>');"
                                                    href="<?php echo e(route('language.syncLanguage', $language->id)); ?>"
                                                    class="btn btn-primary mt-0 mr-2">
                                                    <i class="fas fa-sync"></i>
                                                </a>
                                                <a data-toggle="tooltip" data-placement="top"
                                                    title="<?php echo e(__('edit_language')); ?>"
                                                    href="<?php echo e(route('languages.edit', $language->id)); ?>"
                                                    class="btn btn-info mt-0 mr-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <?php if($language->code !== 'en'): ?>
                                                    <form action="<?php echo e(route('languages.destroy', $language->id)); ?>"
                                                        class="d-inline" method="POST">
                                                        <?php echo method_field('DELETE'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <button data-toggle="tooltip" data-placement="top"
                                                            title="<?php echo e(__('delete_language')); ?>"
                                                            onclick="return confirm('<?php echo e(__('are_you_sure_want_to_delete_this_item')); ?>');"
                                                            class="btn bg-danger"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="10" class="text-center">
                                            <?php if(userCan('setting.update')): ?>
                                                <?php if (isset($component)) { $__componentOriginal56c81c662798cf576554b4d425b3acba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56c81c662798cf576554b4d425b3acba = $attributes; } ?>
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => ''.e(__('language')).'','route' => 'languages.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\NotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal56c81c662798cf576554b4d425b3acba)): ?>
<?php $attributes = $__attributesOriginal56c81c662798cf576554b4d425b3acba; ?>
<?php unset($__attributesOriginal56c81c662798cf576554b4d425b3acba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal56c81c662798cf576554b4d425b3acba)): ?>
<?php $component = $__componentOriginal56c81c662798cf576554b4d425b3acba; ?>
<?php unset($__componentOriginal56c81c662798cf576554b4d425b3acba); ?>
<?php endif; ?>
                                            <?php else: ?>
                                                <?php if (isset($component)) { $__componentOriginal56c81c662798cf576554b4d425b3acba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56c81c662798cf576554b4d425b3acba = $attributes; } ?>
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => 'language','route' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\NotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal56c81c662798cf576554b4d425b3acba)): ?>
<?php $attributes = $__attributesOriginal56c81c662798cf576554b4d425b3acba; ?>
<?php unset($__attributesOriginal56c81c662798cf576554b4d425b3acba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal56c81c662798cf576554b4d425b3acba)): ?>
<?php $component = $__componentOriginal56c81c662798cf576554b4d425b3acba; ?>
<?php unset($__componentOriginal56c81c662798cf576554b4d425b3acba); ?>
<?php endif; ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\Modules/Language\Resources/views/index.blade.php ENDPATH**/ ?>