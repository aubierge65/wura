<?php $__env->startSection('title'); ?>
    <?php echo e(__('testimonial_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <?php if(userCan('testimonial.create')): ?>
            <div class="text-right mb-3">
                <a href="<?php echo e(route('module.testimonial.create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>
                    <?php echo e(__('create')); ?></a>
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item border rounded mb-1">
                                <a class="nav-link active" data-toggle="tab" href="#home">
                                    <?php echo e(__('all')); ?>

                                </a>
                            </li>
                            <?php $__currentLoopData = $group_testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                            <div class="tab-pane show active" id="home">
                                <div class="row">
                                    <?php $__empty_1 = true; $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="col-md-3">
                                            <div class="card text-center">
                                                <?php if($testimonial->image): ?>
                                                    <img src="<?php echo e(asset($testimonial->image)); ?>" class="card-img-top" alt="user image">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('backend/image/default.png')); ?>" class="card-img-top" alt="user image">
                                                <?php endif; ?>
                                                <div class="card-body">
                                                    <h4><?php echo e($testimonial->name); ?></h4>
                                                    <h6 class="badge badge-primary"><?php echo e($testimonial->position); ?></h6> <br>
                                                    <div class="mx-auto justify-content-center align-items-center">
                                                        <?php for($i = 0; $i < $testimonial->stars; $i++): ?>
                                                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <?php endfor; ?>
                                                    </div>
                                                    <p class="card-text"><?php echo Str::limit($testimonial->description, 100, '...'); ?></p>
                                                    <?php if(userCan('testimonial.update') || userCan('testimonial.delete')): ?>
                                                        <div class="mx-auto justify-content-center align-items-center">
                                                            <?php if(userCan('testimonial.update')): ?>
                                                                <a title="<?php echo e(__('edit')); ?>"
                                                                    href="<?php echo e(route('module.testimonial.edit', $testimonial->id)); ?>"
                                                                    class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                                            <?php endif; ?>
                                                            <?php if(userCan('testimonial.delete')): ?>
                                                                <form action="<?php echo e(route('module.testimonial.destroy', $testimonial->id)); ?>"
                                                                    method="POST" class="d-inline">
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <?php echo csrf_field(); ?>
                                                                    <button title="<?php echo e(__('delete')); ?>"
                                                                        onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                                        class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                                </form>
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="col-md-12">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <?php if(userCan('testimonial.create')): ?>
                                                        <?php if (isset($component)) { $__componentOriginal56c81c662798cf576554b4d425b3acba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56c81c662798cf576554b4d425b3acba = $attributes; } ?>
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => 'testimonial','route' => 'module.testimonial.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => 'testimonial','route' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php $__currentLoopData = $group_testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang_testimonials): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane" id="home_<?php echo e($key); ?>">
                                    <div class="row">
                                        <?php $__empty_1 = true; $__currentLoopData = $lang_testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <div class="col-md-3">
                                                <div class="card text-center">
                                                    <?php if($testimonial->image): ?>
                                                        <img src="<?php echo e(asset($testimonial->image)); ?>" class="card-img-top" alt="user image">
                                                    <?php else: ?>
                                                        <img src="<?php echo e(asset('backend/image/default.png')); ?>" class="card-img-top" alt="user image">
                                                    <?php endif; ?>
                                                    <div class="card-body">
                                                        <h4><?php echo e($testimonial->name); ?></h4>
                                                        <h6 class="badge badge-primary"><?php echo e($testimonial->position); ?></h6> <br>
                                                        <div class="mx-auto justify-content-center align-items-center">
                                                            <?php for($i = 0; $i < $testimonial->stars; $i++): ?>
                                                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                            <?php endfor; ?>
                                                        </div>
                                                        <p class="card-text"><?php echo Str::limit($testimonial->description, 100, '...'); ?></p>
                                                        <?php if(userCan('testimonial.update') || userCan('testimonial.delete')): ?>
                                                            <div class="mx-auto justify-content-center align-items-center">
                                                                <?php if(userCan('testimonial.update')): ?>
                                                                    <a title="<?php echo e(__('edit')); ?>"
                                                                        href="<?php echo e(route('module.testimonial.edit', $testimonial->id)); ?>"
                                                                        class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                                                <?php endif; ?>
                                                                <?php if(userCan('testimonial.delete')): ?>
                                                                    <form action="<?php echo e(route('module.testimonial.destroy', $testimonial->id)); ?>"
                                                                        method="POST" class="d-inline">
                                                                        <?php echo method_field('DELETE'); ?>
                                                                        <?php echo csrf_field(); ?>
                                                                        <button title="<?php echo e(__('delete')); ?>"
                                                                            onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                                            class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                                    </form>
                                                                <?php endif; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <div class="col-md-12">
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <?php if(userCan('testimonial.create')): ?>
                                                            <?php if (isset($component)) { $__componentOriginal56c81c662798cf576554b4d425b3acba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56c81c662798cf576554b4d425b3acba = $attributes; } ?>
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => 'testimonial','route' => 'module.testimonial.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => 'testimonial','route' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <style>
        .card {
            border-radius: 10px;
        }

        .card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 20px auto 0;

        }

        .btn-success {
            margin-top: 0;
        }

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('backend')); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/Modules/Testimonial/Resources/views/index.blade.php ENDPATH**/ ?>