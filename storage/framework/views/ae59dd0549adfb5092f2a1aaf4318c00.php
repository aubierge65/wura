<?php $__env->startSection('title'); ?>
    <?php echo e(__('currency_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('currency')); ?> <?php echo e(__('settings')); ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('home')); ?></a></li>
                <li class="breadcrumb-item "><?php echo e(__('settings')); ?></li>
                <li class="breadcrumb-item active"><?php echo e(__('currency_list')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('website-settings'); ?>
    <div class="container-fluid">
        <form class="row" action="<?php echo e(route('module.currency.default')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="col-md-3 mb-4">
                <div class="">
                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => ''.e(__('set_default_currency')).'','class' => '','for' => 'inlineFormCustomSelect'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <div class="d-flex align-items-center">
                        <select name="currency" class="form-control" id="inlineFormCustomSelect">
                            <option value="" disabled selected><?php echo e(__('Currency')); ?></option>
                            <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e(config('templatecookie.currency') == $currency->code ? 'selected' : ''); ?>

                                    value="<?php echo e($currency->id); ?>">
                                    <?php echo e($currency->name); ?> ( <?php echo e($currency->code); ?> )
                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <button type="submit" class="btn btn-primary ml-2"><?php echo e(__('save')); ?></button>
                    </div>
                </div>
            </div>
        </form>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title line-height-36"><?php echo e(__('currency_list')); ?></h3>
                <a href="<?php echo e(route('module.currency.create')); ?>" class="btn bg-primary float-right d-flex align-items-center justify-content-center">
                    <i class="fas fa-plus"></i>
                    <?php echo e(__('create')); ?>

                </a>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th width="5%">#</th>
                            <th><?php echo e(__('name')); ?></th>
                            <th><?php echo e(__('code')); ?></th>
                            <th><?php echo e(__('symbol')); ?></th>
                            <th><?php echo e(__('rate')); ?></th>
                            <th><?php echo e(__('position')); ?></th>
                            <th width="15%"><?php echo e(__('action')); ?></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $__empty_1 = true; $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($key + 1); ?></td>
                                <td>
                                    <?php echo e($currency->name); ?>

                                    <?php if(config('templatecookie.currency') == $currency->code): ?>
                                        <span class="badge badge-pill badge-primary">
                                            <?php echo e(__('default')); ?>

                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($currency->code); ?></td>
                                <td><?php echo e($currency->symbol); ?></td>
                                <td><?php echo e($currency->rate); ?></td>
                                <td><?php echo e(ucfirst($currency->symbol_position)); ?></td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <?php if($currency->code == 'USD'): ?>
                                        <a href="javascript:void(0)" class="btn btn-warning mt-0 mr-2"
                                            data-toggle="tooltip" title="You can't delete or edit this currency">
                                            <i class="fas fa-lock"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if($currency->code != 'USD'): ?>
                                        <a data-toggle="tooltip" data-placement="top"
                                        title="<?php echo e(__('edit')); ?>" href="<?php echo e(route('module.currency.edit', $currency->id)); ?>"
                                            class="btn btn-info mt-0 mr-2"><i class="fas fa-edit"></i></a>
                                        <form action="<?php echo e(route('module.currency.delete', $currency->id)); ?>"
                                            class="d-inline" method="POST">
                                            <?php echo method_field('DELETE'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button data-toggle="tooltip" data-placement="top"
                                                title="<?php echo e(__('delete')); ?>"
                                                onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                class="btn bg-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="10" class="text-center">
                                    <?php if (isset($component)) { $__componentOriginal29785112a59eec7800237cc87bc86e3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29785112a59eec7800237cc87bc86e3e = $attributes; } ?>
<?php $component = App\View\Components\NotFound::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\NotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['word' => 'currency','route' => 'module.currency.create']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $attributes = $__attributesOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__attributesOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $component = $__componentOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__componentOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <?php if($currencies->total() > $currencies->count()): ?>
                <div class="card-footer ">
                    <div class="d-flex justify-content-center">
                        <?php echo e($currencies->links()); ?>

                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('backend')); ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script>
        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

        $('input[name="default"]').on('switchChange.bootstrapSwitch', function(event, state) {
            $('#' + event.currentTarget.id).submit();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/Modules/Currency/Resources/views/index.blade.php ENDPATH**/ ?>