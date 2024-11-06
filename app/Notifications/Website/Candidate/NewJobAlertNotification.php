<?php

namespace App\Notifications\Website\Candidate;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewJobAlertNotification extends Notification
{
    use Queueable;

    public $user;
    public $job;

    /**
     * Crée une nouvelle instance de notification.
     *
     * @param $user
     * @param $job
     */
    public function __construct($user, $job)
    {
        $this->user = $user;
        $this->job = $job;
    }

    /**
     * Détermine les canaux de diffusion de la notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'mail'];
    }

    /**
     * Définit la représentation de la notification par email.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->greeting('Bonjour '.$this->user->name)
        ->subject("Nouvelle offre d'emploi sur Wura")
        ->line("Une nouvelle offre d'emploi correspondant à votre profil a été publiée !")
        ->line("Poste : {$this->job->title}")
        ->line("Entreprise : {$this->job->company->name}")
        ->line("Lieu : {$this->job->location}")
        ->action('POur en savoir plus cliquez ici ', 'https://wura.africa') 
        ->line('Merci d\'utiliser notre plateforme pour trouver les meilleures opportunités !');
     }

    /**
     * Représentation de la notification sous forme de tableau pour stockage en base de données.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'title' => 'Nouvelle offre d\'emploi publiée',
            'message' => "Un nouveau poste de {$this->job->title} chez {$this->job->company->name} vient d'être publié.",
            'url' => route('jobs.show', ['id' => $this->job->id]),
        ];
    }
}
