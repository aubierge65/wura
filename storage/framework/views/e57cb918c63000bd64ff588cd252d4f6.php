<?php $__env->startSection('title'); ?>
    <?php echo e(__('orders')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title line-height-36"><?php echo e(__('orders')); ?></h3>
                            <a href="<?php echo e(route('order.create')); ?>" class="btn bg-primary float-right d-flex align-items-center justify-content-center">
                                <i class="fas fa-plus"></i>
                                <?php echo e(__('create')); ?>

                            </a>
                            <?php if(request('company') || request('provider') || request('plan') || request('sort_by')): ?>
                                <div>
                                    <a href="<?php echo e(route('order.index')); ?>" class="btn bg-danger"><i class="fas fa-times"></i>
                                        &nbsp;<?php echo e(__('clear')); ?>

                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <form id="filterForm" action="<?php echo e(route('order.index')); ?>" method="GET">
                        <div class="card-body border-bottom row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <label><?php echo e(__('companies')); ?></label>
                                <select name="company" class="form-control select2bs4">
                                    <option <?php echo e(request('company') ? '' : 'selected'); ?> value="" selected>
                                        <?php echo e(__('all')); ?>

                                    </option>
                                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e(request('company') == $company->id ? 'selected' : ''); ?>

                                            value="<?php echo e($company->id); ?>"><?php echo e($company->user->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <label><?php echo e(__('payment_provider')); ?></label>
                                <select name="provider" id="filter" class="form-control select2bs4">
                                    <option <?php echo e(request('provider') ? '' : 'selected'); ?> value="" selected>
                                        <?php echo e(__('all')); ?>

                                    </option>
                                    <option <?php echo e(request('provider') == 'paypal' ? 'selected' : ''); ?> value="paypal">
                                        <?php echo e(__('paypal')); ?>

                                    </option>
                                    <option <?php echo e(request('provider') == 'stripe' ? 'selected' : ''); ?> value="stripe">
                                        <?php echo e(__('stripe')); ?>

                                    </option>
                                    <option <?php echo e(request('provider') == 'razorpay' ? 'selected' : ''); ?> value="razorpay">
                                        <?php echo e(__('razorpay')); ?>

                                    </option>
                                    <option <?php echo e(request('provider') == 'paystack' ? 'selected' : ''); ?> value="paystack">
                                        <?php echo e(__('paystack')); ?>

                                    </option>
                                    <option <?php echo e(request('provider') == 'sslcommerz' ? 'selected' : ''); ?> value="sslcommerz">
                                        <?php echo e(__('sslcommerz')); ?>

                                    </option>
                                    <option <?php echo e(request('provider') == 'instamojo' ? 'selected' : ''); ?> value="instamojo">
                                        <?php echo e(__('instamojo')); ?>

                                    </option>
                                    <option <?php echo e(request('provider') == 'flutterwave' ? 'selected' : ''); ?>

                                        value="flutterwave">
                                        <?php echo e(__('flutterwave')); ?>

                                    </option>
                                    <option <?php echo e(request('provider') == 'mollie' ? 'selected' : ''); ?> value="mollie">
                                        <?php echo e(__('mollie')); ?>

                                    </option>
                                    <option <?php echo e(request('provider') == 'midtrans' ? 'selected' : ''); ?> value="midtrans">
                                        <?php echo e(__('midtrans')); ?>

                                    </option>
                                    <option <?php echo e(request('provider') == 'offline' ? 'selected' : ''); ?> value="offline">
                                        <?php echo e(__('offline')); ?>

                                    </option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <label><?php echo e(__('plan')); ?></label>
                                <select name="plan" class="form-control select2bs4">
                                    <option <?php echo e(request('plan') ? '' : 'selected'); ?> value="" selected>
                                        <?php echo e(__('all')); ?>

                                    </option>
                                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($plan->frontend_show): ?>
                                            <option <?php echo e(request('plan') == $plan->id ? 'selected' : ''); ?>

                                                value="<?php echo e($plan->id); ?>"><?php echo e($plan->label); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <label><?php echo e(__('sort_by')); ?></label>
                                <select name="sort_by" class="form-control select2bs4">
                                    <option <?php echo e(!request('sort_by') || request('sort_by') == 'latest' ? 'selected' : ''); ?>

                                        value="latest" selected>
                                        <?php echo e(__('latest')); ?>

                                    </option>
                                    <option <?php echo e(request('sort_by') == 'oldest' ? 'selected' : ''); ?> value="oldest">
                                        <?php echo e(__('oldest')); ?>

                                    </option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="card-body text-center table-responsive p-0">
                        <table class="ll-table table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('order_and_transaction')); ?></th>
                                    <th><?php echo e(__('company')); ?></th>
                                    <th><?php echo e(__('plan')); ?></th>
                                    <th><?php echo e(__('amount')); ?></th>
                                    <th><?php echo e(__('payment_method')); ?></th>
                                    <th><?php echo e(__('created_time')); ?></th>
                                    <th><?php echo e(__('payment_status')); ?></th>
                                    <?php if(userCan('order.download')): ?>
                                        <th width="10%"><?php echo e(__('action')); ?></th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php if(isset($order->company->id)): ?>
                                    <tr>
                                        <td>
                                            <p>#<?php echo e($order->order_id); ?></p>
                                            <p><?php echo e(__('transaction')); ?>: <strong><?php echo e($order->transaction_id); ?></strong></p>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('company.show', $order->company->id)); ?>" class="company">
                                                <img src="<?php echo e($order->company->logo_url); ?>" alt="logo">
                                                <div>
                                                    <h4><?php echo e($order->company->user->name); ?></h4>
                                                    <p><?php echo e($order->company->user->email); ?></p>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <?php if($order->payment_type == 'per_job_based'): ?>
                                                <span><?php echo e(ucfirst(Str::replace('_', ' ', $order->payment_type))); ?></span>
                                            <?php else: ?>
                                                <span><?php echo e($order->plan->label); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo e(currencyPosition(
                                                currencyConversion($order->usd_amount, config('templatecookie.currency', 'USD'))
                                                ,false, $current_currency
                                                )); ?>

                                        </td>
                                        <td>
                                            <?php if($order->payment_provider == 'offline'): ?>
                                                <?php echo e(__('offline')); ?>

                                                <?php if(isset($order->manualPayment) && isset($order->manualPayment->name)): ?>
                                                    (<b><?php echo e($order->manualPayment->name); ?></b>)
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php echo e(ucfirst($order->payment_provider)); ?>

                                            <?php endif; ?>
                                        </td>

                                        <td class="text-muted">
                                            <?php echo e(formatTime($order->created_at, 'M d, Y')); ?>

                                        </td>
                                        <td>
                                            <?php if($order->payment_status == 'paid'): ?>
                                                <span class="ll-badge ll-bg-success"><?php echo e(__('paid')); ?></span>
                                            <?php else: ?>
                                                <span class="ll-badge ll-bg-warning"><?php echo e(__('unpaid')); ?></span> <br><br>
                                                <div>
                                                    <a onclick="return confirm('<?php echo e(__('are_you_sure')); ?>')"
                                                        href="<?php echo e(route('manual.payment.mark.paid', $order->id)); ?>">
                                                        <?php echo e(__('mark_as_paid')); ?>

                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </td>
                                        <td class="d-flex align-items-center">
                                            <a href="<?php echo e(route('order.show', $order->id)); ?>" class="btn ll-btn ll-border-none">
                                                <?php echo e(__('view_details')); ?>

                                                <?php if (isset($component)) { $__componentOriginalda561501dff59ec6eab6d19aa5897b8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda561501dff59ec6eab6d19aa5897b8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-btn-arrow','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-btn-arrow'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda561501dff59ec6eab6d19aa5897b8f)): ?>
<?php $attributes = $__attributesOriginalda561501dff59ec6eab6d19aa5897b8f; ?>
<?php unset($__attributesOriginalda561501dff59ec6eab6d19aa5897b8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda561501dff59ec6eab6d19aa5897b8f)): ?>
<?php $component = $__componentOriginalda561501dff59ec6eab6d19aa5897b8f; ?>
<?php unset($__componentOriginalda561501dff59ec6eab6d19aa5897b8f); ?>
<?php endif; ?>
                                            </a>
                                            <?php if(userCan('order.download')): ?>
                                                <form
                                                    action="<?php echo e(route('admin.transaction.invoice.download', $order->id)); ?>"
                                                    method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn ll-btn-info">
                                                        <?php if (isset($component)) { $__componentOriginal85378e378fdb01ba2901d79ef6110ec2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal85378e378fdb01ba2901d79ef6110ec2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-download','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-download'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal85378e378fdb01ba2901d79ef6110ec2)): ?>
<?php $attributes = $__attributesOriginal85378e378fdb01ba2901d79ef6110ec2; ?>
<?php unset($__attributesOriginal85378e378fdb01ba2901d79ef6110ec2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85378e378fdb01ba2901d79ef6110ec2)): ?>
<?php $component = $__componentOriginal85378e378fdb01ba2901d79ef6110ec2; ?>
<?php unset($__componentOriginal85378e378fdb01ba2901d79ef6110ec2); ?>
<?php endif; ?>
                                                    </button>
                                                </form>
                                            <?php endif; ?>
                                            <?php if(userCan('order.download')): ?>
                                                <form action="<?php echo e(route('admin.transaction.invoice.view', $order->id)); ?>"
                                                    method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn ll-btn-info ml-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" fill="#767F8C" viewBox="0 0 256 256">
                                                            <path
                                                                d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="9">
                                            <div class="empty py-5">
                                                <?php if (isset($component)) { $__componentOriginal29785112a59eec7800237cc87bc86e3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29785112a59eec7800237cc87bc86e3e = $attributes; } ?>
<?php $component = App\View\Components\NotFound::resolve(['message' => ''.e(__('no_data_found')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\NotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php if($orders->total() > $orders->count()): ?>
                        <div class="mt-3 d-flex justify-content-center"><?php echo e($orders->links()); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/order/index.blade.php ENDPATH**/ ?>