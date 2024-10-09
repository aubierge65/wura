<?php $__env->startSection('title'); ?>
    <?php echo e(__('users_list')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
        $userr = auth()->user();
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="card-title line-height-36"><?php echo e(__('users_list')); ?></h3>
                            <div class="d-flex align-items center">
                                <a href="<?php echo e(route('role.index')); ?>" class="btn btn-outline-info mr-2">
                                    <i class="fas fa-lock mr-1"></i>
                                    <?php echo e(__('all_roles')); ?>

                                </a>
                                <a href="<?php echo e(route('user.create')); ?>" class="btn bg-primary">
                                    <i class="fas fa-plus mr-1"></i> &nbsp;
                                    <?php echo e(__('create')); ?>

                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th><?php echo e(__('name')); ?></th>
                                    <th><?php echo e(__('email')); ?></th>
                                    <th><?php echo e(__('roles')); ?></th>
                                    <?php if($userr->can('admin.edit') || $userr->can('admin.delete')): ?>
                                        <th width="10%"><?php echo e(__('action')); ?></th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($loop->index + 1); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td>
                                            <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span class="badge badge-primary"><?php echo e($role->name); ?></span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('user.edit', $user->id)); ?>" class="btn bg-info"><i
                                                    class="fas fa-edit"></i></a>
                                            <form action="<?php echo e(route('user.destroy', $user->id)); ?>" method="POST"
                                                class="d-inline">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button
                                                    onclick="return confirm(__('are_you_sure_want_to_delete_this_item'));"
                                                    class="btn bg-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="10" class="text-center">
                                            <?php if (isset($component)) { $__componentOriginal56c81c662798cf576554b4d425b3acba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56c81c662798cf576554b4d425b3acba = $attributes; } ?>
<?php $component = App\View\Components\Admin\NotFound::resolve(['route' => 'user.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <?php echo e($users->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/users/index.blade.php ENDPATH**/ ?>