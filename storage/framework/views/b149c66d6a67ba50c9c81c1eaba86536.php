<?php $__env->startSection('title', __('bookmark_category')); ?>

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
                <div class="col-lg-9">
                    <div class="dashboard-right tw-ps-0 lg:tw-ps-5">
                        <div class="row d-flex tw-gap-3 justify-content-between p-2">
                            <div class="col-sm-12 col-md-6 justify-content-start">
                                <h3 class="f-size-18 lh-1 mb-2">
                                    <?php echo e(__('bookmark_category')); ?>

                                    <span class="text-gray-400">(<?php echo e($dataCount); ?>)</span>
                                </h3>
                            </div>
                            <div class="col-sm-12 col-md-6 d-flex tw-flex-wrap tw-gap-3 justify-content-end">
                                <a href="<?php echo e(route('company.bookmark')); ?>">
                                    <button type="button"
                                        class="btn btn-outline-primary text-center d-flex justify-content-center items-center">
                                        <i class="ph-arrow-left f-size-20 text-primary-500 mr-1 mt-1"></i>
                                        <?php echo e(__('back')); ?>

                                    </button>
                                </a>
                                <div class="sidebar-open-nav !tw-mt-0 ml-3">
                                    <i class="ph-list"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="">
                                        <div class="db-job-card-table text-center">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="text-start"><?php echo e(__('name')); ?></th>
                                                        <th class="text-end"><?php echo e(strtoupper(__('action'))); ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <?php if($categories->count() > 0): ?>
                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="text-start">
                                                                        <span class="ml-2 text-gray-900 f-size-16  ft-wt-4">
                                                                            <?php echo e($cat->name); ?>

                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-end mr-2">
                                                                        <a href="<?php echo e(route('company.bookmark.category.edit', $cat->id)); ?>"
                                                                            class="f-size-25 text-primary-500 p-1 cursor-pointer">
                                                                            <i class="ph-pencil-simple"></i>
                                                                        </a>
                                                                        <a onclick="DataDelete('data-delete-form<?php echo e($cat->id); ?>')"
                                                                            href="#"
                                                                            class="f-size-25 cursor-pointer text-danger-500 p-1">
                                                                            <i class="ph-trash-simple"></i>
                                                                        </a>
                                                                        <form class="d-none"
                                                                            id="data-delete-form<?php echo e($cat->id); ?>"
                                                                            action="<?php echo e(route('company.bookmark.category.destroy', $cat->id)); ?>"
                                                                            method="POST">
                                                                            <?php echo csrf_field(); ?>
                                                                            <?php echo method_field('DELETE'); ?>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php else: ?>
                                                        <tr>
                                                            <td colspan="2" class="text-center">
                                                                <?php if (isset($component)) { $__componentOriginal8bf6266e7f80e2665df15c5faf71b89a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a = $attributes; } ?>
<?php $component = App\View\Components\Svg\NotFoundIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.not-found-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\NotFoundIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a)): ?>
<?php $attributes = $__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a; ?>
<?php unset($__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8bf6266e7f80e2665df15c5faf71b89a)): ?>
<?php $component = $__componentOriginal8bf6266e7f80e2665df15c5faf71b89a; ?>
<?php unset($__componentOriginal8bf6266e7f80e2665df15c5faf71b89a); ?>
<?php endif; ?>
                                                                <p class="mt-4"><?php echo e(__('no_data_found')); ?></p>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>

                                                    <?php if($categories->count()): ?>
                                                        <tr>
                                                            <td colspan="2" class="text-center p-0">
                                                                <?php echo e($categories->links('vendor.pagination.simple-bootstrap-4')); ?>

                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="post-job-item rt-mb-15">
                                            <form
                                                action="<?php echo e(request()->routeIs('company.bookmark.category.index')
                                                    ? route('company.bookmark.category.store')
                                                    : route('company.bookmark.category.update', $category->id)); ?>"
                                                method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php if(request()->routeIs('company.bookmark.category.index')): ?>
                                                <?php else: ?>
                                                    <?php echo method_field('PUT'); ?>
                                                <?php endif; ?>
                                                <div class="rt-mb-20">
                                                    <label for="m" class=" body-font-4 d-block text-gray-900 rt-mb-8">
                                                        <?php if(request()->routeIs('company.bookmark.category.index')): ?>
                                                            <?php echo e(__('create')); ?>

                                                        <?php else: ?>
                                                            <?php echo e(__('update')); ?>

                                                        <?php endif; ?>
                                                    </label>
                                                    <input name="name"
                                                        <?php if(request()->routeIs('company.bookmark.category.index')): ?> <?php else: ?> value="<?php echo e($category->name); ?>" <?php endif; ?>
                                                        class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                        placeholder="<?php echo e(__('name')); ?>..">
                                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <?php if(request()->routeIs('company.bookmark.category.index')): ?>
                                                    <button type="submit" class="text-center btn btn-primary rt-mr-10">
                                                        <span class="button-content-wrapper ">
                                                            <span class="button-icon align-icon-right">
                                                                <i class="ph-plus-circle"></i>
                                                            </span>
                                                            <span class="button-text">
                                                                <?php echo e(__('add')); ?>

                                                            </span>
                                                        </span>
                                                    </button>
                                                <?php else: ?>
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <button type="submit"
                                                                class="text-center btn btn-primary rt-mr-10">
                                                                <span class="button-content-wrapper ">
                                                                    <span class="button-icon align-icon-right">
                                                                        <i class="ph-pencil-simple"></i>
                                                                    </span>
                                                                    <span class="button-text">
                                                                        <?php echo e(__('update')); ?>

                                                                    </span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <a href="<?php echo e(route('company.bookmark.category.index')); ?>"
                                                                class="text-center btn btn-warning rt-mr-10">
                                                                <span class="button-content-wrapper ">
                                                                    <span class="button-icon align-icon-right">
                                                                        <i class="ph-arrow-left"></i>
                                                                    </span>
                                                                    <span class="button-text">
                                                                        <?php echo e(__('back')); ?>

                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-footer text-center body-font-4 text-gray-500">
            <?php if (isset($component)) { $__componentOriginal3d3a2a154c37220f944698284f758b7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d3a2a154c37220f944698284f758b7a = $attributes; } ?>
<?php $component = App\View\Components\Website\FooterCopyright::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.footer-copyright'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\FooterCopyright::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3d3a2a154c37220f944698284f758b7a)): ?>
<?php $attributes = $__attributesOriginal3d3a2a154c37220f944698284f758b7a; ?>
<?php unset($__attributesOriginal3d3a2a154c37220f944698284f758b7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d3a2a154c37220f944698284f758b7a)): ?>
<?php $component = $__componentOriginal3d3a2a154c37220f944698284f758b7a; ?>
<?php unset($__componentOriginal3d3a2a154c37220f944698284f758b7a); ?>
<?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function DataDelete(id) {
            if (confirm("<?php echo e(__('are_you_sure')); ?>") == true) {
                $('#' + id).submit();
            } else {
                return false;
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/frontend/pages/company/bookmark-category.blade.php ENDPATH**/ ?>