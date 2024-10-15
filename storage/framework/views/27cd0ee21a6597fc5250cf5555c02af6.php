
<?php $__env->startSection('title'); ?>
    <?php echo e(__('roles')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="card-title line-height-36"><?php echo e(__('roles_list')); ?></h3>
                            <div class="d-flex align-items center">
                                <a href="<?php echo e(route('user.index')); ?>" class="btn btn-outline-dark mr-2">
                                    <i class="fas fa-users mr-1"></i>
                                    <?php echo e(__('all_users')); ?>

                                </a>
                                <?php if(auth()->user()->can('role.create')): ?>
                                    <a href="<?php echo e(route('role.create')); ?>"
                                        class="btn bg-primary float-right d-flex align-items-center justify-content-center">
                                        <i class="fas fa-plus mr-1"></i>
                                        <?php echo e(__('create')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="20%"><?php echo e(__('name')); ?></th>
                                    <th><?php echo e(__('permission')); ?></th>
                                    <?php if(auth()->user()->can('role.edit') ||
                                        auth()->user()->can('role.delete')): ?>
                                        <th width="10%"><?php echo e(__('action')); ?></th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($loop->index + 1); ?></td>
                                        <td><?php echo e(ucwords($role->name)); ?></td>
                                        <td>
                                            <a href="#" id="ShowPer<?php echo e($loop->index + 1); ?>"
                                                onclick="ShowPermission('ShowPer<?php echo e($loop->index + 1); ?>', 'allPermission<?php echo e($loop->index + 1); ?>' )">
                                                <svg width="22px" height="22px" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <span class="row d-none" id="allPermission<?php echo e($loop->index + 1); ?>">
                                                <a href="#" id="ShowPer<?php echo e($loop->index + 1); ?>"
                                                    onclick="HidePermission('allPermission<?php echo e($loop->index + 1); ?>' , 'ShowPer<?php echo e($loop->index + 1); ?>' )"
                                                    class="col-md-1">
                                                    <svg width="22px" height="22px" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <span class="col-md-11">
                                                    <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <span
                                                            class="badge badge-primary permission"><?php echo e($item->name); ?></span>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </span>
                                            </span>
                                        </td>
                                        <?php if(auth()->user()->can('role.edit') ||
                                            auth()->user()->can('role.delete')): ?>
                                            <td>
                                                <?php if(auth()->user()->can('role.edit')): ?>
                                                    <a href="<?php echo e(route('role.edit', $role->id)); ?>"
                                                        class="btn bg-info"><i class="fas fa-edit"></i></a>
                                                <?php endif; ?>
                                                <?php if(auth()->user()->can('role.delete')): ?>
                                                    <form action="<?php echo e(route('role.destroy', $role->id)); ?>" method="POST"
                                                        class="d-inline">
                                                        <?php echo method_field('DELETE'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <button
                                                            onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                            class="btn bg-danger"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                <?php endif; ?>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="10" class="text-center">
                                            <?php if (isset($component)) { $__componentOriginal56c81c662798cf576554b4d425b3acba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56c81c662798cf576554b4d425b3acba = $attributes; } ?>
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => 'roles','route' => 'role.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <?php echo e($roles->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function ShowPermission(id1, id2) {
            // remove Icon
            $('#' + id1).addClass('d-none');
            // Show Permission
            $('#' + id2).removeClass('d-none');
        };

        function HidePermission(id1, id2) {
            // d-none class add in permission span
            $('#' + id1).addClass('d-none');
            // show eye icon
            $('#' + id2).removeClass('d-none');
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/backend/roles/index.blade.php ENDPATH**/ ?>