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
                    ->subject('Nouvelle demande de service de curriculum vitae')
                    ->greeting('Bonjour Administrateur de WURA,')
                    ->line('Vous avez reçu une nouvelle commande de  cv.')
                    ->line('Voici les détails de la commande:')
                    ->line('Nom et Prénom(s) du demandeur: ' . $this->formData['contactName'])
                    ->line('Email du demandeur: ' . $this->formData['contactEmail'])
                    ->line('Contact du demandeur: ' . $this->formData['contactPhone'])
                    ->line('Niveau d\'expérience: ' . $this->formData['level'])
                    ->line('Délai de livraison souhaité: ' . $this->formData['deliveryTime'])
                    ->line('Option de prix: ' . $this->formData['priceOption'])
                    ->line('Montant total de la prestation: ' . $this->formData['totalAmount'])
                    ->line('Merci de consulter les détails pour prendre les mesures nécessaires.');
    }
}
