<?php $__env->startSection('title'); ?>
    <?php echo e(__('post_job')); ?> - <?php echo e(currencyPosition($job_total_amount)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <!-- breedcrumb section end  -->
    <section class="section benefits bgcolor--gray-10 mt-5 pt-5">
        <div class="container">
            <div class="row mt-5 pt-5">
                <h4 class="text-info"><?php echo e(__('total_amount_to_pay')); ?> : <?php echo e(currencyPosition($job_total_amount)); ?></h4>
            </div>
            <div class="row py-5">
                <h5><?php echo e(__('online_payment_gatewats')); ?></h5>
                <?php if(config('paypal.active') ||
                    config('templatecookie.stripe_active') ||
                    config('templatecookie.razorpay_active') ||
                    config('templatecookie.paystack_active') ||
                    config('templatecookie.ssl_active') ||
                    config('templatecookie.flw_active') ||
                    config('templatecookie.im_active') ||
                    config('templatecookie.midtrans_active') ||
                    config('templatecookie.mollie_active')): ?>

                    
                    <?php if(config('paypal.mode') == 'sandbox'): ?>
                        <?php if(config('paypal.active') && config('paypal.sandbox.client_id') && config('paypal.sandbox.client_secret')): ?>
                            <div class="col-4 my-2">
                                <div class="card jobcardStyle1">
                                    <div class="card-body">
                                        <div class="rt-single-icon-box">
                                            <div class="iconbox-content">
                                                <div class="body-font-1 rt-mb-12">
                                                    <?php echo e(__('paypal')); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-info d-flex">
                                            <div class="flex-grow-1">
                                                <button id="paypal_btn" type="button" class="btn btn-primary2-50 d-block">
                                                    <?php echo e(__('pay_now')); ?>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if(config('paypal.active') && config('paypal.live.client_id') && config('paypal.live.client_secret')): ?>
                            <div class="col-4 my-2">
                                <div class="card jobcardStyle1">
                                    <div class="card-body">
                                        <div class="rt-single-icon-box">
                                            <div class="iconbox-content">
                                                <div class="body-font-1 rt-mb-12">
                                                    <?php echo e(__('paypal')); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-info d-flex">
                                            <div class="flex-grow-1">
                                                <button id="paypal_btn" type="button" class="btn btn-primary2-50 d-block">
                                                    <?php echo e(__('pay_now')); ?>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if(config('templatecookie.fedapay_active') && config('templatecookie.fedapay_api_secret')): ?>
                    <div class="col-4 my-2">
                        <div class="card jobcardStyle1">
                            <div class="card-body">
                                <div class="rt-single-icon-box">
                                    <div class="iconbox-content">
                                        <div class="body-font-1 rt-mb-12">
                                            <?php echo e(__('fedapay')); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="post-info d-flex">
                                    <form action="<?php echo e(route('fedapay.post')); ?>" method="POST" class="">
                                        <?php echo csrf_field(); ?>
                                        
                                        <div class="flex-grow-1">
                                            <button type="submit" class="btn btn-primary2-50 d-block"><i
                                                class="fas fa-sync"></i>
                                            <?php echo e(__('pay_now')); ?></button>
                                            
                                        </div>
                                    </form>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

           
                    
                    <?php if(config('templatecookie.stripe_active') && config('templatecookie.stripe_key') && config('templatecookie.stripe_secret')): ?>
                        <div class="col-4 my-2">
                            <div class="card jobcardStyle1">
                                <div class="card-body">
                                    <div class="rt-single-icon-box">
                                        <div class="iconbox-content">
                                            <div class="body-font-1 rt-mb-12">
                                                <?php echo e(__('stripe')); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-info d-flex">
                                        <div class="flex-grow-1">
                                            <button id="stripe_btn" type="button" class="btn btn-primary2-50 d-block">
                                                <?php echo e(__('pay_now')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    
                    <?php if(config('templatecookie.razorpay_active') &&
                        config('templatecookie.razorpay_key') &&
                        config('templatecookie.razorpay_secret')): ?>
                        <div class="col-4 my-2">
                            <div class="card jobcardStyle1">
                                <div class="card-body">
                                    <div class="rt-single-icon-box">
                                        <div class="iconbox-content">
                                            <div class="body-font-1 rt-mb-12">
                                                <?php echo e(__('razorpay')); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-info d-flex">
                                        <div class="flex-grow-1">
                                            <button id="razorpay_btn" type="button" class="btn btn-primary2-50 d-block">
                                                <?php echo e(__('pay_now')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    
                    <?php if(config('templatecookie.paystack_active') &&
                        config('templatecookie.paystack_key') &&
                        config('templatecookie.paystack_secret')): ?>
                        <div class="col-4 my-2">
                            <div class="card jobcardStyle1">
                                <div class="card-body">
                                    <div class="rt-single-icon-box">
                                        <div class="iconbox-content">
                                            <div class="body-font-1 rt-mb-12">
                                                <?php echo e(__('paystack')); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-info d-flex">
                                        <div class="flex-grow-1">
                                            <button id="paystack_btn" type="button" class="btn btn-primary2-50 d-block">
                                                <?php echo e(__('pay_now')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    
                    <?php if(config('templatecookie.flw_public_key') &&
                        config('templatecookie.flw_secret') &&
                        config('templatecookie.flw_secret_hash') &&
                        config('templatecookie.flw_active')): ?>
                        <div class="col-4 my-2">
                            <div class="card jobcardStyle1">
                                <div class="card-body">
                                    <div class="rt-single-icon-box">
                                        <div class="iconbox-content">
                                            <div class="body-font-1 rt-mb-12">
                                                <?php echo e(__('flutterwave')); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-info d-flex">
                                        <div class="flex-grow-1">
                                            <button id="flutter_btn" type="button" class="btn btn-primary2-50 d-block">
                                                <?php echo e(__('pay_now')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    
                    <?php if(config('templatecookie.mollie_key') && config('templatecookie.mollie_active')): ?>
                        <div class="col-4 my-2">
                            <div class="card jobcardStyle1">
                                <div class="card-body">
                                    <div class="rt-single-icon-box">
                                        <div class="iconbox-content">
                                            <div class="body-font-1 rt-mb-12">
                                                <?php echo e(__('mollie')); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-info d-flex">
                                        <div class="flex-grow-1">
                                            <button id="mollie_btn" type="button" class="btn btn-primary2-50 d-block">
                                                <?php echo e(__('pay_now')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    
                    <?php if(config('templatecookie.im_key') &&
                        config('templatecookie.im_secret') &&
                        config('templatecookie.im_url') &&
                        config('templatecookie.im_active')): ?>
                        <div class="col-4 my-2">
                            <div class="card jobcardStyle1">
                                <div class="card-body">
                                    <div class="rt-single-icon-box">
                                        <div class="iconbox-content">
                                            <div class="body-font-1 rt-mb-12">
                                                <?php echo e(__('instamojo')); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-info d-flex">
                                        <div class="flex-grow-1">
                                            <button id="instamojo_btn" type="button" class="btn btn-primary2-50 d-block">
                                                <?php echo e(__('pay_now')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    
                    <?php if(config('templatecookie.midtrans_active') &&
                        config('templatecookie.midtrans_merchat_id') &&
                        config('templatecookie.midtrans_client_key') &&
                        config('templatecookie.midtrans_server_key')): ?>
                        <div class="col-4 my-2">
                            <div class="card jobcardStyle1">
                                <div class="card-body">
                                    <div class="rt-single-icon-box">
                                        <div class="iconbox-content">
                                            <div class="body-font-1 rt-mb-12">
                                                <?php echo e(__('midtrans')); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-info d-flex">
                                        <div class="flex-grow-1">
                                            <button id="midtrans_btn" type="button" class="btn btn-primary2-50 d-block">
                                                <?php echo e(__('pay_now')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    
                    <?php if(config('sslcommerz.active') &&
                        config('sslcommerz.store.id') &&
                        config('sslcommerz.store.password')): ?>
                        <div class="col-4 my-2">
                            <div class="card jobcardStyle1">
                                <div class="card-body">
                                    <div class="rt-single-icon-box">
                                        <div class="iconbox-content">
                                            <div class="body-font-1 rt-mb-12">
                                                <?php echo e(__('sslcommerz')); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-info d-flex">
                                        <div class="flex-grow-1">
                                            <button id="ssl_btn" type="button" class="btn btn-primary2-50 d-block">
                                                <?php echo e(__('pay_now')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="text-center">
                        <?php if (isset($component)) { $__componentOriginal8bf6266e7f80e2665df15c5faf71b89a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a = $attributes; } ?>
<?php $component = App\View\Components\Svg\NotFoundIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.not-found-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\NotFoundIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a)): ?>
<?php $attributes = $__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a; ?>
<?php unset($__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8bf6266e7f80e2665df15c5faf71b89a)): ?>
<?php $component = $__componentOriginal8bf6266e7f80e2665df15c5faf71b89a; ?>
<?php unset($__componentOriginal8bf6266e7f80e2665df15c5faf71b89a); ?>
<?php endif; ?>
                        <h4 class="mt-4"><?php echo e(__('no_payment_method_available_here')); ?></h4>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row ">
                <h5><?php echo e(__('manual_payment_gateways')); ?></h5>
                <?php $__currentLoopData = $manual_payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-6 my-2">
                        <form action="<?php echo e(route('manual.payment')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="payment_id" value="<?php echo e($payment->id); ?>">
                            <div class="card jobcardStyle1">
                                <div class="card-body">
                                    <div class="rt-single-icon-box">
                                        <div class="iconbox-content">
                                            <div class="body-font-1 rt-mb-12">
                                                <?php echo e($payment->name); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <p><?php echo $payment->description; ?></p>
                                    <div class="post-info d-flex">
                                        <div class="flex-grow-1">
                                            <button type="submit" class="btn btn-primary2-50 d-block">
                                                <?php echo e(__('pay_now')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>

         
         <form action="<?php echo e(route('paypal.post')); ?>" method="POST" class="d-none" id="paypal-form">
            <?php echo csrf_field(); ?>
        </form>

        
        <form action="<?php echo e(route('stripe.post')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
            <script id="stripe_script" src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="<?php echo e(config('templatecookie.stripe_key')); ?>" data-amount="<?php echo e(session('stripe_amount')); ?>"
                data-name="<?php echo e(config('app.name')); ?>" data-description="Money pay with stripe"
                data-locale="<?php echo e(app()->getLocale() == 'default' ? 'en' : app()->getLocale()); ?>" data-currency="USD"></script>
        </form>

        
        <form action="<?php echo e(route('razorpay.post')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
            <script id="razor_script" src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="<?php echo e(config('templatecookie.razorpay_key')); ?>" data-amount="<?php echo e(session('razor_amount')); ?>"
                data-buttontext="Pay with Razorpay" data-name="<?php echo e(config('app.name')); ?>" data-description="Money pay with razorpay"
                data-prefill.name="<?php echo e(authUser()->name); ?>" data-prefill.email="<?php echo e(authUser()->email); ?>"
                data-theme.color="#2980b9" data-currency="INR"></script>
        </form>

        
        <form action="<?php echo e(route('paystack.post')); ?>" method="POST" class="d-none" id="paystack-form">
            <?php echo csrf_field(); ?>
        </form>

        
        <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay" id="flutter-form">
            <input type="hidden" name="public_key" value="<?php echo e(config('templatecookie.flw_public_key')); ?>" />
            <input type="hidden" name="customer[email]" value="<?php echo e(authUser()->email); ?>" />
            <input type="hidden" name="customer[name]" value="<?php echo e(authUser()->name); ?>" />
            <input type="hidden" name="tx_ref" value="<?php echo e(generateReference()); ?>" />
            <input type="hidden" name="amount" value="<?php echo e($flutterwave_amount); ?>" />
            <input type="hidden" name="currency" value="NGN" />
            <input type="hidden" name="meta[token]" value="54" />
            <input type="hidden" name="redirect_url" value="<?php echo e(route('flutterwave.success')); ?>" />
        </form>

        
        <form action="<?php echo e(route('mollie.payment')); ?>" method="POST" class="d-none" id="mollie-form">
            <?php echo csrf_field(); ?>
        </form>

        
        <form action="<?php echo e(route('instamojo.pay')); ?>" method="POST" class="d-none" id="instamojo-form">
            <?php echo csrf_field(); ?>
        </form>

        
        <form method="post" action="<?php echo e(route('sslc.payment')); ?>" id="sslc-form">
            <?php echo csrf_field(); ?>
            
            
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php if(config('templatecookie.midtrans_active') &&
        config('templatecookie.midtrans_merchat_id') &&
        config('templatecookie.midtrans_client_key') &&
        config('templatecookie.midtrans_server_key')): ?>
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?php echo e(config('templatecookie.midtrans_client_key')); ?>">
        </script>
    <?php endif; ?>
    <script>
        // Paypal
        $('#paypal_btn').on('click', function(e) {
            e.preventDefault();
            $('#paypal-form').submit();
        });

        // Stripe
        $('#stripe_btn').on('click', function(e) {
            e.preventDefault();
            $('.stripe-button-el').click();
        });

        // Razorpay
        $('#razorpay_btn').on('click', function(e) {
            e.preventDefault();
            $('.razorpay-payment-button').click();
        });

        // Paystack
        $('#paystack_btn').on('click', function(e) {
            e.preventDefault();
            $('#paystack-form').submit();
        });

        // Flutterwave
        $('#flutter_btn').on('click', function(e) {
            e.preventDefault();
            $('#flutter-form').submit();
        });

        // Mollie
        $('#mollie_btn').on('click', function(e) {
            e.preventDefault();
            $('#mollie-form').submit();
        });

        // Instamojo
        $('#instamojo_btn').on('click', function(e) {
            e.preventDefault();
            $('#instamojo-form').submit();
        });

        // ssl commerz
        $('#ssl_btn').on('click', function(e) {
            e.preventDefault();
            $('#sslc-form').submit();
        });

        // Midtrans
        if (
            '<?php echo e(config('templatecookie.midtrans_active') && config('templatecookie.midtrans_merchat_id') && config('templatecookie.midtrans_client_key') && config('templatecookie.midtrans_server_key')); ?>'
        ) {

            const payButton = document.querySelector('#midtrans_btn');
            payButton.addEventListener('click', function(e) {
                e.preventDefault();

                snap.pay('<?php echo e($mid_token); ?>', {
                    onSuccess: function(result) {
                        successMidtransPayment();
                    },
                    onPending: function(result) {
                        alert('Transaction is in pending state');
                    },
                    onError: function(result) {
                        alert('Transaction is failed. Try again.');
                    }
                });
            });

            function successMidtransPayment() {
                $.ajax({
                    type: "post",
                    url: "<?php echo e(route('midtrans.success')); ?>",
                    data: {
                        '_token': '<?php echo e(csrf_token()); ?>'
                    },
                    success: function(response) {
                        console.log(response)
                        window.location.href = response.redirect_url;
                    }
                });
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/frontend/pages/company/payperjob_pricing.blade.php ENDPATH**/ ?>