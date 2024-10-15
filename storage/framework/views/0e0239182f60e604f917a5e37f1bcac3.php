

<?php $__env->startSection('title'); ?>
<?php echo e(__('post_list')); ?>

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
                    <div class="dashboard-right">
                        <div class="dashboard-right-header">
                            <div class="left-text m-0 tw-w-full">
                                <h3 class="f-size-18 lh-1 mb-0 tw-inline-flex">
                                    <?php echo e(__('post_list')); ?>

                                    <span class="text-gray-400">(<?php echo e($blogs->total()); ?>)</span>
                                </h3>
                            </div>
                            <div>
                                <a href="<?php echo e(route('company.blog.create')); ?>" class="btn btn-success my-2 my-sm-0">Créer un article</a>
                            </div>
                        </div>
                    </div>
                    <div class="db-job-card-table">
                        <table>
                            <thead>
                                <tr class="text-center">
                                    <th><?php echo e(__('image')); ?></th>
                                    <th><?php echo e(__('title')); ?></th>
                                    <th><?php echo e(__('category')); ?></th>
                                    <th><?php echo e(__('comments')); ?></th>

                                    <th><?php echo e(__('status')); ?></th>
                                    <th width="12%">
                                        <?php echo e(__('action')); ?>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($blogs->count() > 0): ?>
                                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center">
                                                <img width="50px" height="50px" class="rounded"
                                                    src="<?php echo e(asset($post->image)); ?>"
                                                    alt="Blog: <?php echo e($post->category->name); ?>">
                                            </td>
                                            <td class="text-center">
                                                <a href="<?php echo e(route('website.post', $post->slug)); ?>"><?php echo e($post->title); ?></a>
                                            </td>
                                            <td class="text-center">
                                                <?php echo e($post->category->name); ?>

                                            </td>
                                            <td class="text-center"><?php echo e($post->comments_count); ?></td>
                                            
                                            <td class="text-center">
                                                <span
                                                    class="<?php echo e($post->status == 'draft' ? 'text-danger bg-danger' : 'text-primary bg-primary'); ?> text-capitalize py-1 px-2 rounded">
                                                    <?php echo e($post->status); ?>

                                                </span>
                                            </td>
                                            <td class="text-center">
                                                

                                                <a title="<?php echo e(__('edit')); ?>"
                                                    href="<?php echo e(route('company.blog.edit', $post)); ?>"
                                                    class="f-size-25 cursor-pointer text-primary p-1">
                                                    <i class="ph-pencil-simple"></i>
                                                </a>

                                                <form action="<?php echo e(route('company.blog.destroy', $post)); ?>" method="POST"
                                                    class="d-inline">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button
                                                        title="<?php echo e(__('delete')); ?>"
                                                        onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                        class="border border-0 f-size-25 cursor-pointer text-danger-500 p-1 bg-white">
                                                        <i class="ph-trash-simple"></i>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <?php if (isset($component)) { $__componentOriginaldfe0928edd886f3f2e52f8fdd142276f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldfe0928edd886f3f2e52f8fdd142276f = $attributes; } ?>
<?php $component = App\View\Components\Website\NotFound::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\NotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldfe0928edd886f3f2e52f8fdd142276f)): ?>
<?php $attributes = $__attributesOriginaldfe0928edd886f3f2e52f8fdd142276f; ?>
<?php unset($__attributesOriginaldfe0928edd886f3f2e52f8fdd142276f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldfe0928edd886f3f2e52f8fdd142276f)): ?>
<?php $component = $__componentOriginaldfe0928edd886f3f2e52f8fdd142276f; ?>
<?php unset($__componentOriginaldfe0928edd886f3f2e52f8fdd142276f); ?>
<?php endif; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/frontend/pages/company/blog/index.blade.php ENDPATH**/ ?>