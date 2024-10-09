<?php $__env->startSection('title'); ?>
    <?php echo e(__('edit_currency')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('currency')); ?> <?php echo e(__('settings')); ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('settings')); ?></li>
                <li class="breadcrumb-item active"><?php echo e(__('edit_currency')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('website-settings'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36"><?php echo e(__('edit')); ?></h3>
                        <a href="<?php echo e(route('module.currency.index')); ?>"
                            class="btn bg-primary float-right d-flex align-items-center   justify-content-center"><i
                                class="fas fa-arrow-left"></i>
                            &nbsp; <?php echo e(__('back')); ?>

                        </a>
                    </div>
                    <div class="row pt-3 pb-4">
                        <div class="col-md-6 offset-md-3">
                            <form class="form-horizontal" action="<?php echo e(route('module.currency.update', $currency->id)); ?>"
                                method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="name">
                                        <?php echo e(__('name')); ?>

                                        <span class="form-label-required text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="<?php echo e($currency->name); ?>" placeholder="E.g - Dollar">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="code">
                                        <?php echo e(__('code')); ?>

                                        <span class="form-label-required text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="code" id="code" class="form-control  "
                                            value="<?php echo e($currency->code); ?>" placeholder="E.g - USD">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="rate">
                                        <?php echo e(__('rate')); ?>

                                        <span class="form-label-required text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="rate" id="rate" class="form-control  "
                                            value="<?php echo e($currency->rate); ?>" placeholder="E.g - Currency current rate againest USD">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="symbol">
                                        <?php echo e(__('symbol')); ?>

                                        <span class="form-label-required text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="symbol" id="symbol" class="form-control  "
                                            value="<?php echo e($currency->symbol); ?>" placeholder="E.g - $">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="position">
                                        <?php echo e(__('position')); ?>

                                        <span class="form-label-required text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <?php if (isset($component)) { $__componentOriginal41435f4b0d1c0a2935fc7e73fa4f12e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal41435f4b0d1c0a2935fc7e73fa4f12e9 = $attributes; } ?>
<?php $component = App\View\Components\Forms\SwitchInput::resolve(['button' => 'buttonOne','oldvalue' => 'oldalue','name' => 'symbol_position','onText' => ''.e(__('left')).'','offText' => ''.e(__('right')).'','value' => 'left','checked' => $currency->symbol_position == 'left'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\SwitchInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal41435f4b0d1c0a2935fc7e73fa4f12e9)): ?>
<?php $attributes = $__attributesOriginal41435f4b0d1c0a2935fc7e73fa4f12e9; ?>
<?php unset($__attributesOriginal41435f4b0d1c0a2935fc7e73fa4f12e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal41435f4b0d1c0a2935fc7e73fa4f12e9)): ?>
<?php $component = $__componentOriginal41435f4b0d1c0a2935fc7e73fa4f12e9; ?>
<?php unset($__componentOriginal41435f4b0d1c0a2935fc7e73fa4f12e9); ?>
<?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-4">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fas fa-sync"></i>
                                            <?php echo e(__('update')); ?>

                                        </button>
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
    <script src="<?php echo e(asset('backend')); ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script>
        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $("input[name=symbol_position]").on('switchChange.bootstrapSwitch', function(event, state) {
            let val = event.currentTarget.checked ? 'left' : 'right';
            $('input[name=symbol_position]').val(val);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/Modules/Currency/Resources/views/edit.blade.php ENDPATH**/ ?>