<?php

namespace App\Http\Controllers\Payment;

use FedaPay\FedaPay;
use FedaPay\Transaction;
use Illuminate\Http\Request;
use App\Models\ServicePayment;
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
        // Validation des données de la requête
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|string|max:15',
            'service_name' => 'required|string',
            'amount' => 'required|numeric',

        ]);

        // Initialisation de l'API FedaPay
        FedaPay::setApiKey(config('templatecookie.fedapay_api_secret'));
        FedaPay::setEnvironment(config('templatecookie.fedapay_live_mode'));

        try {
            // Création de la transaction
            $transaction = Transaction::create([
                'description' => $validated['service_name'],
                'amount' => $validated['amount'],
                'currency' => 'XOF',
                'callback_url' => route('payment.callback'),
                'customer' => [
                    'firstname' => $validated['name'],
                    'email' => $validated['email'],
                    'phone_number' => $validated['contact'],
                ],
            ]);

            // Enregistrement des détails de la transaction dans la session (pour l'utiliser après la confirmation)
            session(['transaction_details' => $validated]);

            return response()->json([
                'success' => true,
                'payment_url' => $transaction->generateToken()->url
            ]);
        } catch (\Exception $e) {
            // Capture les erreurs et renvoie un message détaillé
            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue pendant l\'initiation du paiement : ' . $e->getMessage()
            ], 500);
        }
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
                    // Enregistrer dans la base de données
                    $payment = ServicePayment::create([
                        'username' => $paymentDetails['name'],
                        'email' => $paymentDetails['email'],
                        'contact' => $paymentDetails['contact'],
                        'amount' => $paymentDetails['amount'],
                        'service_name' => $paymentDetails['service_name'],
                        'transaction_id' => $transaction_id,
                        'payment_status' => 'success',
                    ]);

                    // Envoi de la notification
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
            // Gestion des erreurs
            return response()->json(['error' => __('Une erreur est survenue : ') . $e->getMessage()], 500);
        }
    }
}
