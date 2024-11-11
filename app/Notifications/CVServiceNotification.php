<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CVServiceNotification extends Notification
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
                    ->subject('Nouvelle commande client')
                    ->greeting('Bonjour Admin,')
                    ->line('Vous avez reçu une nouvelle commande.')
                    ->line('Détails de la commande:')
                    ->line('Niveau: ' . $this->formData['level'])
                    ->line('Délai: ' . $this->formData['deliveryTime'])
                    ->line('Option de prix: ' . $this->formData['priceOption'])
                    ->line('Email de contact: ' . $this->formData['contactEmail'])
                    ->line('Téléphone de contact: ' . $this->formData['contactPhone'])
                    ->line('Montant total: ' . $this->formData['totalAmount'])
                    ->line('Merci de consulter les détails pour prendre les mesures nécessaires.');
    }
}
