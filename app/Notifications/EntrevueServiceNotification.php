<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EntrevueServiceNotification extends Notification
{
    use Queueable;

    public $payment;

    public function __construct($payment)
{
    $this->payment = $payment; 
}
    public function via($notifiable)
    {
        return ['mail']; 
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Nouvelle demande de coaching d\'entrevue')
                    ->greeting('Bonjour Administrateur de WURA,')
                    ->line('Vous avez reçu une nouvelle demande de coaching.')
                    ->line('Voici les détails de la demande:')
                    ->line('<strong>Nom et prénom du client:</strong> ' . $this->payment->username)
                    ->line('Email du client: ' . $this->payment->email)
                    ->line('Contact du client: ' . $this->payment->contact)
                    ->line('Service choisi: ' . $this->payment->service_name)
                    ->line('Montant total: ' . $this->payment->amount)
                    ->line('Merci de consulter les détails pour prendre les mesures nécessaires.');
    }
}

