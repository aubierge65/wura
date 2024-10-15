<?php $__env->startSection('title'); ?>
    <?php echo e(__('pages')); ?>

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
                <li class="breadcrumb-item active"><?php echo e(__('pages')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36"><?php echo e(__('pages')); ?></h3>
                        <a href="<?php echo e(route('settings.pages.create')); ?>" class="btn bg-primary float-right d-flex align-items-center justify-content-center">
                            <i class="fas fa-plus"></i>
                            <?php echo e(__('create')); ?>

                        </a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-bordered">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('title')); ?></th>
                                    <th><?php echo e(__('page_url')); ?></th>
                                    <th><?php echo e(__('show_on_header')); ?></th>
                                    <th><?php echo e(__('show_on_footer')); ?></th>
                                    <th width="15%"><?php echo e(__('action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($page->title); ?></td>
                                        <td><a href="<?php echo e(route('showCustomPage', $page->slug)); ?>" target="_blank"><?php echo e(route('showCustomPage', $page->slug)); ?></a></td>
                                        <td tabindex="0">
                                            <a href="javascript:void(0)">
                                                <label class="switch ">
                                                    <input data-id="<?php echo e($page->id); ?>" type="checkbox" class="success show_in_header" <?php echo e($page->show_header ? 'checked' : ''); ?>>
                                                    <span class="slider round"></span>
                                                </label>
                                            </a>
                                        </td>
                                        <td tabindex="0">
                                            <a href="javascript:void(0)">
                                                <label class="switch ">
                                                    <input data-userid="<?php echo e($page->id); ?>" type="checkbox" class="success show_in_footer" <?php echo e($page->show_footer ? 'checked' : ''); ?>>
                                                    <span class="slider round"></span>
                                                </label>
                                            </a>
                                        </td>
                                        <td class="d-flex  align-items-center">
                                            <a href="<?php echo e(route('settings.pages.edit', $page->id)); ?>" class="btn btn-info mt-0 mr-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="<?php echo e(route('settings.pages.delete', $page->id)); ?>"
                                                class="d-inline" method="POST">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button data-toggle="tooltip" data-placement="top"
                                                    title="<?php echo e(__('delete')); ?>"
                                                    onclick="return confirm('<?php echo e(__('are_you_sure_want_to_delete_this_item')); ?>');"
                                                    class="btn bg-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="10" class="text-center">
                                            <?php if(userCan('setting.pages.create')): ?>
                                                <?php if (isset($component)) { $__componentOriginal56c81c662798cf576554b4d425b3acba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56c81c662798cf576554b4d425b3acba = $attributes; } ?>
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => ''.e(__('page')).'','route' => 'setting.pages.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => 'page','route' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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


<?php $__env->startSection('style'); ?>
    <link rel="stylesheet"
        href="<?php echo e(asset('backend')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <style>
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

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('backend')); ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script>
        $('.show_in_header').on('change', function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '<?php echo e(route('settings.pages.header.status')); ?>',
                data: {
                    'status': status,
                    'id': id
                },
                success: function(response) {
                    toastr.success(response.message, 'Success');
                }
            });
        });

        $('.show_in_footer').on('change', function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('userid');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '<?php echo e(route('settings.pages.footer.status')); ?>',
                data: {
                    'status': status,
                    'id': id
                },
                success: function(response) {
                    toastr.success(response.message, 'Success');
                }
            });
        });





    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/pages/index.blade.php ENDPATH**/ ?>