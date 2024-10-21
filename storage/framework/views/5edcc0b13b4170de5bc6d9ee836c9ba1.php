<?php $__env->startSection('title'); ?>
    <?php echo e(__('menu_settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h1 class="m-0">
                <?php echo e(__('menu_settings')); ?>

            </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="<?php echo e(route('admin.dashboard')); ?>">
                        <?php echo e(__('home')); ?>

                    </a>
                </li>
                <li class="breadcrumb-item">
                    <?php echo e(__('settings')); ?>

                </li>
                <li class="breadcrumb-item active">
                    <?php echo e(__('menu_settings')); ?>

                </li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('website-settings'); ?>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-warning mb-3">
                <?php echo e(__('for_internal_links_use_your_link_as_the_starting_point')); ?>. <br>
                <?php echo e(__('for_external_links_begin_with_httpswwwyour_linkcom')); ?>.
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-md-flex justify-content-between">
                        <div class="row">
                            <h3 class="col-12 col-md-8 card-title line-height-36">
                                <?php echo e(__('menu_settings')); ?>

                            </h3>
                            <div class="d-flex align-items-center col-md-4">
                                <a href="<?php echo e(route('menu-settings.index', ['for' => 'public'])); ?>" class="a-color">
                                    <div class="filtertags close-tag pointer mr-2">
                                        <div
                                            class="single-tag <?php echo e(request('for') == 'public' || !request('for') ? 'single-tag-active' : ''); ?>">
                                            <?php echo e(__('everyone')); ?>

                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo e(route('menu-settings.index', ['for' => 'employee'])); ?>" class="a-color">
                                    <div class="filtertags close-tag pointer mr-2">
                                        <div
                                            class="single-tag <?php echo e(request('for') == 'employee' ? 'single-tag-active' : ''); ?>">
                                            <?php echo e(__('employer')); ?>

                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo e(route('menu-settings.index', ['for' => 'candidate'])); ?>" class="a-color">
                                    <div class="filtertags close-tag pointer mr-2">
                                        <div
                                            class="single-tag <?php echo e(request('for') == 'candidate' ? 'single-tag-active' : ''); ?>">
                                            <?php echo e(__('candidate')); ?>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mt-2 mt-md-0">
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table text-nowrap table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <?php echo e(__('title')); ?>

                                </th>
                                <th>
                                    <?php echo e(__('url')); ?>

                                </th>
                                <th width="10%">
                                    <?php echo e(__('menu_show_frontend')); ?>

                                </th>
                                <th width="15%">
                                    <?php echo e(__('action')); ?>

                                </th>
                            </tr>
                        </thead>
                        <tbody id="sortable">
                            <?php $__empty_1 = true; $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr data-id="<?php echo e($menu->id); ?>">
                                    <td class="vertical-middle">
                                        <h5>
                                            <?php echo e($menu->title); ?>

                                        </h5>
                                        <div>
                                            <?php $__currentLoopData = $menu->translations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $translation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(app()->getLocale() == $translation->locale): ?>
                                                <?php else: ?>
                                                    <span class="d-block">
                                                        <b>
                                                            <?php echo e(getLanguageByCodeInLookUp($translation->locale,$app_languages)); ?>

                                                        </b>:
                                                        <?php echo e($translation->title); ?>

                                                    </span>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </td>
                                    <td class="vertical-middle">
                                        <a href="<?php echo e($menu->url); ?>" target="_blank">
                                            <?php echo e(ucfirst(Str::replace('_', ' ', $menu->url))); ?>

                                        </a>
                                    </td>
                                    <td class="vertical-middle" tabindex="0">
                                        <?php if(userCan('menu-setting.update')): ?>
                                            <form id="statusChangeForm<?php echo e($menu->id); ?>"
                                                action="<?php echo e(route('menu-setting.status.change', $menu->id)); ?>"
                                                method="POST">
                                                <?php echo csrf_field(); ?>
                                                <label class="switch">
                                                    <input name="status" value="1" data-id="<?php echo e($menu->id); ?>"
                                                        type="checkbox" class="success status-switch"
                                                        <?php echo e($menu->status == 1 ? 'checked' : ''); ?>>
                                                    <span class="slider round"></span>
                                                </label>
                                            </form>
                                        <?php endif; ?>
                                    </td>
                                    <td class="vertical-middle">
                                        <?php if(userCan('menu-setting.update')): ?>
                                            <div class="btn btn-success mt-0">
                                                <i class="fas fa-hand-rock"></i>
                                            </div>
                                        <?php endif; ?>
                                        <?php if(userCan('menu-setting.update')): ?>
                                            <a href="<?php echo e(route('menu-settings.edit', $menu->id)); ?>"
                                                class="btn btn-info mt-0 mr-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if(userCan('menu-setting.delete')): ?>
                                            <?php if(!$menu->default): ?>
                                                <form action="<?php echo e(route('menu-settings.destroy', $menu->id)); ?>"
                                                    class="d-inline" method="POST">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button data-toggle="tooltip" data-placement="top"
                                                        title="<?php echo e(__('delete')); ?>"
                                                        onclick="return confirm('<?php echo e(__('are_you_sure_want_to_delete_this_item')); ?>');"
                                                        class="btn bg-danger"><i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4" class="text-center">
                                        <?php if (isset($component)) { $__componentOriginal56c81c662798cf576554b4d425b3acba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56c81c662798cf576554b4d425b3acba = $attributes; } ?>
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => 'menu','route' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center align-items-center <?php echo e($menus->total() > 20 ? 'mt-3' : ''); ?>">
                    <?php echo e($menus->links()); ?>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <?php if(!empty($menu_setting)): ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36">
                            <?php echo e(__('edit')); ?>

                        </h3>
                        <a href="<?php echo e(route('menu-settings.index')); ?>"
                            class="btn bg-primary float-right d-flex align-items-center justify-content-center">
                            <i class="fas fa-arrow-left mr-1"></i>
                            <?php echo e(__('back')); ?>

                        </a>
                    </div>
                    <div class="card-body">
                        <?php if(userCan('menu-setting.update')): ?>
                            <form class="form-horizontal" action="<?php echo e(route('menu-settings.update', $menu_setting->id)); ?>"
                                method="POST">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <?php $__currentLoopData = $app_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $label = __('title') . ' ' . getLanguageByCodeInLookUp($language->code,$app_languages);
                                        $title = "title_{$language->code}";
                                        $data = $menu_setting->translations->where('locale', $language->code)->first();
                                        $value = $data ? $data->title : '';
                                    ?>
                                    <div class="form-group">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => $label,'for' => 'title','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                        <input id="title" type="text" name="<?php echo e($title); ?>"
                                            placeholder="<?php echo e(__('title')); ?>" value="<?php echo e($value); ?>"
                                            class="form-control <?php if($errors->has($title)): ?> is-invalid <?php endif; ?>">
                                        <?php if($errors->has($title)): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first($title)); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'url','for' => 'url','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input id="url" <?php echo e($menu_setting->default ? 'disabled' : ''); ?> type="text"
                                        name="url" placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('url')); ?>"
                                        value="<?php echo e($menu_setting->url); ?>"
                                        class="form-control <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <?php
                                        $value = $menu_setting->for;
                                        $arrayValue = json_decode($value, true);
                                    ?>
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'visibility_this_menu','for' => 'eligibility','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div>
                                        <!-- Checkboxes for "everyone", "employer", and "candidate" -->
                                        <label>
                                            <input type="checkbox" name="eligibility[]" value="public"
                                                class="hidden-checkbox" multiple>
                                            <span
                                                class="select-button edit <?php echo e(in_array('public', $arrayValue) ? 'selected' : ''); ?>"
                                                data-value="public"><?php echo e(__('everyone')); ?></span>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="eligibility[]" value="employee"
                                                class="hidden-checkbox" multiple>
                                            <span
                                                class="select-button edit <?php echo e(in_array('employee', $arrayValue) ? 'selected' : ''); ?>"
                                                data-value="employee"><?php echo e(__('employer')); ?></span>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="eligibility[]" value="candidate"
                                                class="hidden-checkbox" multiple>
                                            <span
                                                class="select-button edit <?php echo e(in_array('candidate', $arrayValue) ? 'selected' : ''); ?>"
                                                data-value="candidate"><?php echo e(__('candidate')); ?></span>
                                        </label>
                                    </div>
                                    <?php $__errorArgs = ['eligibility'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'show_in_the_menu','for' => 'status','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div>
                                        <label class="switch">
                                            <input value="1" <?php if($menu_setting->status): echo 'checked'; endif; ?> name="status"
                                                type="checkbox" class="success status-switch">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group m-auto">
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
            <?php if(empty($menu_setting)): ?>
                <?php
                    $arrayValue = [''];
                ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36">
                            <?php echo e(__('create')); ?>

                        </h3>
                    </div>
                    <div class="card-body">
                        <?php if(userCan('menu-setting.create')): ?>
                            <form class="form-horizontal" action="<?php echo e(route('menu-settings.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php $__currentLoopData = $app_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $label = __('title') . ' ' . getLanguageByCodeInLookUp($language->code,$app_languages);
                                        $title = "title_{$language->code}";
                                    ?>
                                    <div class="form-group">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => $label,'for' => 'title','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                        <input id="title" type="text" name="<?php echo e($title); ?>"
                                            placeholder="<?php echo e(__('title')); ?>" value="<?php echo e(old($title)); ?>"
                                            class="form-control <?php if($errors->has($title)): ?> is-invalid <?php endif; ?>">
                                        <?php if($errors->has($title)): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first($title)); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'url','for' => 'url','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input id="url" type="text" name="url"
                                        placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('url')); ?>"
                                        value="<?php echo e(old('url')); ?>"
                                        class="form-control <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'visibility_this_menu','for' => 'eligibility','required' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div>
                                        <!-- Checkboxes for "everyone", "employer", and "candidate" -->
                                        <label>
                                            <input type="checkbox" name="eligibility[]" value="public"
                                                class="hidden-checkbox" multiple>
                                            <span
                                                class="select-button <?php echo e(in_array('public', request('eligibility', [])) ? 'selected' : ''); ?>"
                                                data-value="public"><?php echo e(__('everyone')); ?></span>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="eligibility[]" value="employee"
                                                class="hidden-checkbox" multiple>
                                            <span
                                                class="select-button <?php echo e(in_array('employee', request('eligibility', [])) ? 'selected' : ''); ?>"
                                                data-value="employee"><?php echo e(__('employer')); ?></span>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="eligibility[]" value="candidate"
                                                class="hidden-checkbox" multiple>
                                            <span
                                                class="select-button <?php echo e(in_array('candidate', request('eligibility', [])) ? 'selected' : ''); ?>"
                                                data-value="candidate"><?php echo e(__('candidate')); ?></span>
                                        </label>
                                    </div>
                                    <?php $__errorArgs = ['eligibility'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <!-- Display selected options -->
                                <div class="form-group">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'show_in_the_menu','for' => 'status','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <div>
                                        <label class="switch">
                                            <input value="1" name="status" type="checkbox"
                                                class="success status-switch">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group m-auto">
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            // Function to handle the button click to get selected options (Edit Page)
            $('#get-selected-options-edit').click(function() {
                const selectedOptions = [];
                $('input[name="eligibility[]"]:checked').each(function() {
                    selectedOptions.push($(this).val());
                });
            });

            // Function to update the display of selected options when the page loads (Edit Page)
            function updateSelectedOptionsEdit() {
                const selectedOptions = [];
                $('input[name="eligibility[]"]:checked').each(function() {
                    selectedOptions.push($(this).val());
                });
            }

            // Check which checkboxes are selected when the page loads (Edit Page)

            $('input[name="eligibility[]"]').each(function() {
                const value = $(this).val();
                if ($.inArray(value, `<?php echo json_encode($arrayValue); ?>`) !== -1) {
                    $(this).prop('checked', true);
                }
            });


            // Update the display of selected options when the page loads (Edit Page)
            updateSelectedOptionsEdit();

            // Handle checkbox clicks to update the display of selected options (Edit Page)
            $('input[name="eligibility[]"]').change(function() {
                updateSelectedOptionsEdit();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Function to handle the button click to get selected options
            $('#get-selected-options').click(function() {
                const selectedOptions = [];
                $('input[name="eligibility[]"]:checked').each(function() {
                    selectedOptions.push($(this).val());
                });


            });

            // Function to update the display of selected options when the page loads
            function updateSelectedOptions() {
                const selectedOptions = [];
                $('input[name="eligibility[]"]:checked').each(function() {
                    selectedOptions.push($(this).val());
                });

                // Remove the "selected" class from all buttons first
                $('.select-button').removeClass('selected');

                // Add the "selected" class to the appropriate buttons
                selectedOptions.forEach(function(option) {
                    $(`.select-button[data-value="${option}"]`).addClass('selected');
                });

            }

            // Check which checkboxes are selected when the page loads
            updateSelectedOptions();

            // Handle checkbox clicks to update the display of selected options
            $('input[name="eligibility[]"]').change(function() {
                updateSelectedOptions();
            });
        });
    </script>
    <script>
        $('.status-switch').on('change', function() {
            var id = $(this).data('id');
            $('#statusChangeForm' + id).submit();
        });
    </script>
    <script>
        $(function() {
            $("#sortable").sortable({
                items: 'tr',
                cursor: 'move',
                opacity: 0.4,
                scroll: false,
                dropOnEmpty: false,
                update: function() {
                    sendTaskOrderToServer('#sortable tr');
                },
                classes: {
                    "ui-sortable": "highlight"
                },
            });
            $("#sortable").disableSelection();

            function sendTaskOrderToServer(selector) {
                var order = [];
                $(selector).each(function(index, element) {
                    order.push({
                        id: $(this).attr('data-id'),
                        position: index + 1
                    });
                });

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "<?php echo e(route('menu-setting.sort-able')); ?>",
                    data: {
                        order: order,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    success: function(response) {
                        toastr.success(response.message, 'Success');
                    }
                });
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>
        /* Hide the default checkbox styles */
        .hidden-checkbox {
            position: absolute;
            opacity: 0;
            pointer-events: none;
            margin: 0;
            width: 1px;
            height: 1px;
            overflow: hidden;
        }

        /* Style the select buttons */
        .select-button {
            padding: 6px 16px 6px 16px;
            margin: 5px;
            display: inline-block;
            font-size: 13px;
            font-weight: 400;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            cursor: pointer;
            border-radius: 30px;
            /* Adjust the value to control the border's roundness */
        }

        /* Style the select buttons */
        .select-buttons {
            padding: 6px 16px 6px 16px;
            margin: 5px;
            display: inline-block;
            font-size: 13px;
            font-weight: 400;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            cursor: pointer;
            border-radius: 30px;
            /* Adjust the value to control the border's roundness */
        }

        /* Style for the selected button */
        .select-button.selected {
            background-color: #0a65cc;
            color: #fff;
        }

        .select-buttons.selected {
            background-color: #0a65cc;
            color: #fff;
        }

        .vertical-middle {
            vertical-align: middle !important;
        }

        .vertical-middle a {
            text-transform: lowercase;
        }

        .-mt-6px {
            margin-top: -6px !important;
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

        .switch {
            position: relative;
            display: inline-block;
            width: 35px;
            height: 19px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            display: none;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 15px;
            width: 15px;
            left: 3px;
            bottom: 2px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input.success:checked+.slider {
            background-color: #28a745;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(15px);
            -ms-transform: translateX(15px);
            transform: translateX(15px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/backend/settings/pages/menu_settings.blade.php ENDPATH**/ ?>