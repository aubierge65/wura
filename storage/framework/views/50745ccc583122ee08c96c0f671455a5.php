
<?php $__env->startSection('title'); ?>
    <?php echo e(__('faq_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title line-height-36"><?php echo e(__('faq_list')); ?></h3>
            <?php if(userCan('faq.view')): ?>
                <a href="<?php echo e(route('module.faq.category.index')); ?>"
                    class="btn bg-primary float-right d-flex align-items-center justify-content-center ml-2"><i
                        class="fas fa-th pr-2"></i>
                    <?php echo e(__('faq_category')); ?></a>
            <?php endif; ?>
            <?php if(userCan('faq.create')): ?>
                <a href="<?php echo e(route('module.faq.create')); ?>"
                    class="btn bg-primary float-right d-flex align-items-center justify-content-center"><i
                        class="fas fa-plus pr-2"></i>
                    <?php echo e(__('create_faq')); ?></a>
            <?php endif; ?>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills mb-3">
                <li class="nav-item mr-3" role="presentation">
                    <a href="<?php echo e(route('module.faq.index')); ?>" class="nav-link bg-secondary">
                        <?php echo app('translator')->get('all_faqs'); ?>
                        <span class="badge badge-pill badge-warning"><?php echo e($all_faqs_count); ?></span>
                    </a>
                </li>
                <?php $__currentLoopData = $faq_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item mr-3" role="presentation">
                        <a class="nav-link bg-secondary"
                            href="<?php echo e(route('module.faq.index', $category->slug)); ?>">
                            <?php echo e($category->name); ?>

                            <span class="badge badge-pill badge-warning"><?php echo e($category->faqs_count); ?></span>
                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-2">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item border rounded mb-1">
                            <a class="nav-link active" data-toggle="tab" href="#all">
                                <?php echo e(__('all')); ?>

                            </a>
                        </li>
                        <?php $__currentLoopData = $faqs_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item border rounded mb-1">
                                <a class="nav-link" data-toggle="tab" href="#home_<?php echo e($key); ?>">
                                    <?php echo e(getLanguageByCode($key)); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-10">
                    <div class="tab-content no-padding">
                        <div class="tab-pane show active" id="all">
                            <div class="accordion" id="accordionExample">
                                <?php $__empty_1 = true; $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="card mb-0">
                                        <div class="card-header p-0 d-flex align-items-center justify-content-between">
                                            <h4 class="card-title pt-2 w-100 py-3 px-3 pointer" id="heading<?php echo e($faq->id); ?>"
                                                data-toggle="collapse" data-target="#collapse<?php echo e($faq->id); ?>" aria-expanded="true"
                                                aria-controls="collapse<?php echo e($faq->id); ?>">
                                                <?php echo e($loop->iteration); ?>. <?php echo e($faq->question); ?>

                                            </h4>
                                            <div class="d-flex align-items-center py-2 pr-3">
                                                <?php if(userCan('faq.delete')): ?>
                                                    <form action="<?php echo e(route('module.faq.destroy', $faq->id)); ?>" method="POST"
                                                        class="d-inline">
                                                        <?php echo method_field('DELETE'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <button data-toggle="tooltip" data-placement="top" title="<?php echo e(__('delete')); ?>"
                                                            onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                            class="btn bg-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                <?php endif; ?>
                                                <?php if(userCan('faq.update')): ?>
                                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo e(__('edit')); ?>" href="<?php echo e(route('module.faq.edit', $faq->id)); ?>" class="btn bg-info ml-2">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div id="collapse<?php echo e($faq->id); ?>" class="collapse" aria-labelledby="heading<?php echo e($faq->id); ?>"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <?php echo $faq->answer; ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <?php if(userCan('faq.create')): ?>
                                                <?php if (isset($component)) { $__componentOriginal56c81c662798cf576554b4d425b3acba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56c81c662798cf576554b4d425b3acba = $attributes; } ?>
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => 'faq','route' => 'module.faq.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => 'faq','route' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php $__currentLoopData = $faqs_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faqs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tab-pane" id="home_<?php echo e($key); ?>">
                                <div class="accordion" id="accordionExample">
                                    <?php $__empty_1 = true; $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="card mb-0">
                                            <div class="card-header p-0 d-flex align-items-center justify-content-between">
                                                <h4 class="card-title pt-2 w-100 py-3 px-3 pointer" id="heading<?php echo e($faq->id); ?>"
                                                    data-toggle="collapse" data-target="#collapse<?php echo e($faq->id); ?>" aria-expanded="true"
                                                    aria-controls="collapse<?php echo e($faq->id); ?>">
                                                    <?php echo e($loop->iteration); ?>. <?php echo e($faq->question); ?>

                                                </h4>
                                                <div class="d-flex align-items-center py-2 pr-3">
                                                    <?php if(userCan('faq.delete')): ?>
                                                        <form action="<?php echo e(route('module.faq.destroy', $faq->id)); ?>" method="POST"
                                                            class="d-inline">
                                                            <?php echo method_field('DELETE'); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <button data-toggle="tooltip" data-placement="top" title="<?php echo e(__('delete')); ?>"
                                                                onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                                class="btn bg-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    <?php endif; ?>
                                                    <?php if(userCan('faq.update')): ?>
                                                        <a href="<?php echo e(route('module.faq.edit', $faq->id)); ?>" class="btn bg-info ml-2">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div id="collapse<?php echo e($faq->id); ?>" class="collapse" aria-labelledby="heading<?php echo e($faq->id); ?>"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <?php echo $faq->answer; ?>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <?php if(userCan('faq.create')): ?>
                                                    <?php if (isset($component)) { $__componentOriginal56c81c662798cf576554b4d425b3acba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56c81c662798cf576554b4d425b3acba = $attributes; } ?>
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => 'faq','route' => 'module.faq.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => 'faq','route' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\Modules/Faq\Resources/views/index.blade.php ENDPATH**/ ?>