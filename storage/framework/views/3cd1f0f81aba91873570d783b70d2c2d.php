
<?php $__env->startSection('title'); ?>
    <?php echo e(__('candidate_language_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-12">
        <div class="alert alert-warning">
            This will show on the candidate's settings page. If the candidate wants, he can save from list on which language he knows.
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title line-height-36"><?php echo e(__('candidate_language_list')); ?></h3>
                    </div>
                </div>

                
                <form id="formSubmit" action="<?php echo e(route('admin.candidate.language.index')); ?>" method="GET">
                    <div class="card-body border-bottom row">
                        <div class="col-4">
                            <input name="keyword" type="text" placeholder="<?php echo e(__('name')); ?>" class="form-control"
                                value="<?php echo e(request('keyword')); ?>">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn bg-success px-4">
                                <?php echo e(__('search')); ?>

                            </button>
                        </div>
                    </div>
                </form>

                <!-- Table  -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap table-bordered">
                        <thead>
                            <tr class="text-left">
                                <th><?php echo e(__('name')); ?></th>
                                <?php if(userCan('candidate-language.update') || userCan('candidate-language.delete')): ?>
                                    <th width="20%" class="text-center"><?php echo e(__('action')); ?></th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($candidate_languages->count() > 0): ?>
                                <?php $__currentLoopData = $candidate_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-left" tabindex="0">
                                            <?php echo e($candidate_item->name); ?>

                                        </td>
                                        <td class="text-center">
                                            <?php if(userCan('candidate-language.update')): ?>
                                                <a href="<?php echo e(route('admin.candidate.language.edit', $candidate_item->id)); ?>"
                                                    class="btn bg-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if(userCan('candidate-language.delete')): ?>
                                                <form
                                                    action="<?php echo e(route('admin.candidate.language.destroy', $candidate_item->id)); ?>"
                                                    method="POST" class="d-inline">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button
                                                        onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                        class="btn bg-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <td class="text-center" colspan="8">
                                        <?php echo e(__('no_data_found')); ?>

                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <?php if($candidate_languages->count()): ?>
                        <div class="mt-3 overflow-auto d-flex justify-content-center">
                            <?php echo e($candidate_languages->onEachSide(1)->links()); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <?php if(request()->routeIs('admin.candidate.language.edit')): ?>
                            <h3 class="card-title line-height-36"><?php echo e(__('update')); ?></h3>
                        <?php else: ?>
                            <h3 class="card-title line-height-36"><?php echo e(__('create')); ?></h3>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Table  -->
                <div class="card-body table-responsive p-0">

                    <?php if(request()->routeIs('admin.candidate.language.edit')): ?>
                        <?php if(userCan('candidate-language.update')): ?>
                            <form action="<?php echo e(route('admin.candidate.language.update', $item->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'name','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                <input type="text" id="name" name="name"
                                                    value="<?php echo e($item->name); ?>"
                                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    placeholder="<?php echo e(__('name')); ?>">
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert"><?php echo e(__($message)); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn bg-success px-4">
                                                    <?php echo e(__('update')); ?>

                                                </button>
                                                <a href="<?php echo e(route('admin.candidate.language.index')); ?>"
                                                    class="btn bg-danger px-4">
                                                    <?php echo e(__('cancel')); ?>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if(userCan('candidate-language.create')): ?>
                            <form action="<?php echo e(route('admin.candidate.language.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'name','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                <input type="text" id="name" name="name"
                                                    value="<?php echo e(old('name')); ?>"
                                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    placeholder="<?php echo e(__('name')); ?>">
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert"><?php echo e(__($message)); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn bg-success px-4">
                                                    <?php echo e(__('create')); ?>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/backend/candidate/language/index.blade.php ENDPATH**/ ?>