<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Http\Traits\PaymentTrait;
use FedaPay\FedaPay;
use FedaPay\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FedapayController extends Controller
{
    use PaymentTrait;

    public function proccessTransaction()
    {
        // Getting payment info from session
        $job_payment_type = session('job_payment_type') ?? 'package_job';

        if ($job_payment_type == 'per_job') {
            $price = session('job_total_amount') ?? '100';
        } else {
            $plan = session('plan');
            $price = $plan->price ?? '100';
        }

        // Amount conversion
        $converted_amount = currencyConversion($price);

        // Storing payment info in session
        session(['order_payment' => [
            'payment_provider' => 'fedapay',
            'amount' => $converted_amount,
            'currency_symbol' => 'xof',
            'usd_amount' => $converted_amount,
        ]]);
        $user = Auth::user();
        //     $price = (int)$price;
        //    dd($converted_amount);
        FedaPay::setApiKey(config('templatecookie.fedapay_api_secret'));
        FedaPay::setEnvironment(config('templatecookie.fedapay_live_mode'));

        $transaction = Transaction::create([
            "description" => "Transaction",
            "amount" => $converted_amount,
            "currency" => ["iso" => "XOF"],
            "callback_url" => route('fedapay.callback'),
            "customer" => [
                "firstname" => $user->name,
                "lastname" => $user->name,
                "email" => $user->email,
                "phone_number" => [
                    "number" => "+22997808080",
                    // "country" => "bj"
                ]
            ]
        ]);

        $token = $transaction->generateToken();

        return redirect()->away($token->url);




        if (isset($customer) && $customer != null) {

            session()->flash('error', 'Unable to find the approval link. Please try again later.');

            return back();
        } else {
            session()->flash('error', 'Failed to initiate the PayPal transaction. Please try again.');

            return back();
        }
    }
    public function proccessTransactionCallback()
    {
        $transaction_id = $_GET['id'];
        $status = $_GET['status'];
        if ($status == 'approved') {
            session(['transaction_id' => $transaction_id ?? null]);
            $this->orderPlacing();
        } elseif ($status == 'pending') {
            session()->flash('error', __('payment_pending'));

            return back();
        } elseif ($status == 'declined') {
            session()->flash('error', __('payment_declined'));

            return back();
        } elseif ($status == 'canceled') {
            session()->flash('error', __('payment_canceled'));

            return back();
        } elseif ($status == 'refunded') {
            session()->flash('error', __('payment_refunded'));

            return back();
        } else {
            session()->flash('error', __('payment_was_failed'));

            return back();
        }
    }
}
