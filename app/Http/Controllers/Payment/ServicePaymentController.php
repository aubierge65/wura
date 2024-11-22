<?php

namespace App\Http\Controllers\Payment;

use FedaPay\FedaPay;
use FedaPay\Transaction;
use Illuminate\Http\Request;
use App\Models\ServicePayment;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EntrevueServiceNotification;

class ServicePaymentController extends Controller
{
    /**
     * Fonction pour initier le paiement
     */
    public function initiatePayment(Request $request)
    {
        //die;
                // $validated = $request->validate([
        //     'username' => 'required|string|max:255',
        //     'email' => 'required|email',
        //     'contact' => 'required|string|max:15',
        //     'service_name' => 'required|string',
        //     'amount' => 'required|string|max:255'
        // ]);            'callback_url' => route('payment.callback'),


        FedaPay::setApiKey('sk_live_UpJDxwcPFyS9AMkbzRx8aK7_');
        FedaPay::setEnvironment('live');
        $transaction = Transaction::create(array(
            "description" => "Transaction for john.doe@example.com",
            "amount" => 2000,
            "currency" => ["iso" => "XOF"],
            "callback_url" => route('payment.callback'),
            "customer" => [
                "firstname" => "John",
                "lastname" => "Doe",
                "email" => "john.doe@example.com",
                "phone_number" => [
                    "number" => "+22997808080",
                    "country" => "bj"
                ]
            ]
          ));
        // Loggue la réponse brute de l'API
        Log::debug('FedaPay Response: ', (array)$transaction);
    
        $paymentUrl = $transaction->generateToken()->url;
    
        return $paymentUrl;
        
        
    }

    /**
     * Fonction de retour après le paiement (callback)
     */
    public function proccessTransactionCallback(Request $request)
    {
        $transaction_id = $request->query('id');
        $status = $request->query('status');

        if (!$transaction_id) {
            return response()->json(['error' => __('ID de transaction manquant.')], 400);
        }

        $paymentDetails = $request->only(['name', 'email', 'contact', 'amount', 'service_name']);

        if (empty($paymentDetails['name']) || empty($paymentDetails['email']) || empty($paymentDetails['amount']) || empty($paymentDetails['service_name'])) {
            return response()->json(['error' => __('Détails incomplets pour traiter la transaction.')], 400);
        }

        try {
            switch ($status) {
                case 'approved':
                    $payment = ServicePayment::create([
                        'username' => $paymentDetails['name'],
                        'email' => $paymentDetails['email'],
                        'contact' => $paymentDetails['contact'],
                        'amount' => $paymentDetails['amount'],
                        'service_name' => $paymentDetails['service_name'],
                        'transaction_id' => $transaction_id,
                        'payment_status' => 'success',
                    ]);
                    Notification::route('mail', config('app.admin_email'))
                        ->notify(new EntrevueServiceNotification($paymentDetails));

                    return response()->json(['success' => __('Paiement effectué avec succès.')], 200);

                case 'pending':
                    return response()->json(['error' => __('Le paiement est en attente.')], 400);

                case 'declined':
                    return response()->json(['error' => __('Le paiement a été refusé.')], 400);

                case 'canceled':
                    return response()->json(['error' => __('Le paiement a été annulé.')], 400);

                case 'refunded':
                    return response()->json(['error' => __('Le paiement a été remboursé.')], 400);

                default:
                    return response()->json(['error' => __('Le paiement a échoué.')], 400);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => __('Une erreur est survenue : ') . $e->getMessage()], 500);
        }
    }
}
