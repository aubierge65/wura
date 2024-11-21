@extends('frontend.layouts.app')

@section('title')
{{ __('plan') }} ({{ $plan->label }})
@endsection

@section('main')
<!-- breedcrumb section end  -->
<section class="section benefits bgcolor--gray-10 mt-5 pt-5">
    <div class="container">
        <div class="row mt-5 pt-5">
            <h4 class="text-info">{{ __('total_amount_to_pay') }}: {{ currencyPosition($plan->price, true) }}</h4>
        </div>
        < class="row py-5">
            <h5>{{ __('online_payment_gatewats') }}</h5>
            @if (config('paypal.active') ||
            config('templatecookie.stripe_active') ||
            config('templatecookie.razorpay_active') ||
            config('templatecookie.paystack_active') ||
            config('templatecookie.ssl_active') ||
            config('templatecookie.flw_active') ||
            config('templatecookie.im_active') ||
            config('templatecookie.midtrans_active') ||
            config('templatecookie.mollie_active'))


            @if (config('templatecookie.fedapay_active') && config('templatecookie.fedapay_api_secret'))
            <div class="col-4 my-2">
                <div class="card jobcardStyle1">
                    <div class="card-body">
                        <div class="rt-single-icon-box">
                            <div class="iconbox-content">
                                <div class="body-font-1 rt-mb-12">
                                    {{ __('fedapay') }}
                                </div>
                            </div>
                        </div>
                        <div class="post-info d-flex">
                            <form action="{{ route('fedapay.post') }}" method="POST" class="">
                                @csrf

                                <div class="flex-grow-1">
                                    <button type="submit" class="btn btn-primary2-50 d-block"><i
                                            class="fas fa-sync"></i>
                                        {{ __('pay_now') }}</button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            @endif

    </div>
</section>
@endsection

@section('script')
@if (config('templatecookie.midtrans_active') &&
config('templatecookie.midtrans_merchat_id') &&
config('templatecookie.midtrans_client_key') &&
config('templatecookie.midtrans_server_key'))

@if (config('templatecookie.midtrans_live_mode'))
<script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('templatecookie.midtrans_client_key') }}">
</script>
@else
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('templatecookie.midtrans_client_key') }}">
</script>
@endif
@endif
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

    //iyzipay
    $('#iyzipay_btn').on('click', function(e) {
        e.preventDefault();
        $('#iyzipay-form').submit();
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
        '{{ config('
        templatecookie.midtrans_active ') && config('
        templatecookie.midtrans_merchat_id ') && config('
        templatecookie.midtrans_client_key ') && config('
        templatecookie.midtrans_server_key ') }}'
    ) {

        const payButton = document.querySelector('#midtrans_btn');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();

            snap.pay('{{ $mid_token }}', {
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
                url: "{{ route('midtrans.success') }}",
                data: {
                    '_token': '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log(response)
                    window.location.href = response.redirect_url;
                }
            });
        }
    }
</script>
@endsection