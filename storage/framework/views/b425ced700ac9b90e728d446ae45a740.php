
<?php $__env->startSection('title'); ?>
    <?php echo e(__('edit')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36"><?php echo e(__('edit')); ?></h3>
                        <a href="<?php echo e(route('role.index')); ?>" class="btn bg-primary float-right d-flex align-items-center justify-content-center">
                            <i class="fas fa-arrow-left mr-1"></i> 
                            <?php echo e(__('back')); ?>

                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form role="form" action="<?php echo e(route('role.update', $role->id)); ?>" method="POST">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'name','for' => 'role_name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                        <input value="<?php echo e($role->name); ?>" name="name" type="text"
                                            class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="role_name"
                                            placeholder="<?php echo e(__('name')); ?>">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback"
                                                role="alert"><strong><?php echo e($message); ?></strong></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'permission'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                        <div class="custom-control custom-checkbox">
                                            <input
                                                <?php echo e(App\Models\Admin::roleHasPermission($role, $permissions) ? 'checked' : ''); ?>

                                                class="custom-control-input" type="checkbox" id="permission_all" value="1">
                                            <label for="permission_all" class="custom-control-label">
                                                <?php echo e(__('all')); ?>

                                            </label>
                                        </div>
                                        <hr>
                                        <?php $i=1; ?>
                                        <?php $__currentLoopData = $permission_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                            <?php  
                                                $permissionsInGroup = App\Models\Admin::getpermissionsByGroupName($group->name);
                                             
                                                $j = 1;
                                            ?>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input
                                                            <?php echo e(App\Models\Admin::roleHasPermission($role, $permissionsInGroup) ? 'checked' : ''); ?>

                                                            class="custom-control-input group-checkbox" type="checkbox"
                                                            id="<?php echo e($i); ?>management"
                                                            onclick="CheckPermissionByGroup('role-<?php echo e($i); ?>-management-checkbox',this)"
                                                            value="2">
                                                        <label for="<?php echo e($i); ?>management"
                                                            class="custom-control-label text-capitalize"><?php echo e($group->name); ?></label>
                                                    </div>
                                                </div>
                                                <div class="col-9 role-<?php echo e($i); ?>-management-checkbox">
                                                    <?php $__currentLoopData = $permissionsInGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="custom-control custom-checkbox">
                                                            <input
                                                                onclick="checksinglepermission('role-<?php echo e($i); ?>-management-checkbox','<?php echo e($i); ?>management',<?php echo e(count($permissionsInGroup)); ?>)"
                                                                <?php echo e($role->hasPermissionTo($permission->name) ? 'checked' : ''); ?>

                                                                name="permissions[]" class="custom-control-input"
                                                                type="checkbox"
                                                                id="permission_checkbox_<?php echo e($permission->id); ?>"
                                                                value="<?php echo e($permission->name); ?>">
                                                            <label for="permission_checkbox_<?php echo e($permission->id); ?>"
                                                                class="custom-control-label"><?php echo e($permission->name); ?></label>
                                                        </div>
                                                        <?php $j++; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <?php $i++; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-sync mr-1"></i>
                                            <?php echo e(__('save')); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $('#permission_all').click(function() {
            if ($(this).is(':checked')) {
                // check all the checkbox
                $('input[type=checkbox]').prop('checked', true);
            } else {
                // uncheck all the checkbox
                $('input[type=checkbox]').prop('checked', false);
            }
        });

        // check permission by group
        function CheckPermissionByGroup(classname, checkthis) {
            const classCheckBoxes = $('.' + classname + ' input[type=checkbox]');
            classCheckBoxes.prop('checked', checkthis.checked);
            implementallcheck();
        }

        function checksinglepermission(groupClassname, groupId, countTotalPermission) {
            const classCheckbox = $('.' + groupClassname + ' input[type=checkbox]');
            const groupIDCheckBox = $('#' + groupId);

            groupIDCheckBox.prop('checked', classCheckbox.length === countTotalPermission && classCheckbox.filter(':checked').length === countTotalPermission);
            implementallcheck();
        }

        function implementallcheck() {
            const allCheckboxes = $('input[type="checkbox"]');
            const allGroupCheckboxes = $('.group-checkbox');

            const totalCount = allCheckboxes.length - allGroupCheckboxes.length;
            const checkedCount = allCheckboxes.filter(':checked').length;

            $('#permission_all').prop('checked', totalCount === checkedCount);

            // If all groups are checked and then a group is unchecked,
            // upon rechecking any group, permission_all should be checked
            if (allGroupCheckboxes.length === $('.group-checkbox:checked').length) {
                $('#permission_all').prop('checked', true);
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/backend/roles/edit.blade.php ENDPATH**/ ?>