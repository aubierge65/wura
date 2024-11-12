<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EntrevueServiceNotification extends Notification
{
    use Queueable;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData; 
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
                    ->line('<strong>Nom et prénom du client:</strong>  ' . $this->formData['name'])
                    ->line('Email du client: ' . $this->formData['email'])
                    ->line('Contact du client: ' . $this->formData['contact'])
                    ->line('Plan de choix: ' . $this->formData['plan'])
                    ->line('Montant total de la prestation: ' . $this->formData['amount'])
                    ->line('Merci de consulter les détails pour prendre les mesures nécessaires.');
    }
}
