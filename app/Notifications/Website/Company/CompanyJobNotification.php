<?php

namespace App\Notifications\Website\Company;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CompanyJobNotification extends Notification
{
    use Queueable;

    public $candidate;
    public $company;
    public $job;

    public function __construct($candidate, $company, $job)
    {
        $this->candidate = $candidate;
        $this->company = $company;
        $this->job = $job;
    }

    public function via($notifiable)
    {
        return ['database', 'mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Bonjour ' . $this->company->name)
            ->subject("Nouvelle candidature pour le poste de {$this->job->title}")
            ->line("Le candidat {$this->candidate->name} , a postulé pour le poste de {$this->job->title} chez {$this->company->name}.")
        //    ->line("Candidat : {$this->candidate->name}")
            ->line("Pour plus de détails, veuillez consulter votre tableau de bord.");
    }

    public function toArray($notifiable)
    {
        return [
            'title' => ucfirst($this->candidate->name) . ' a postulé à votre offre d\'emploi',
            'url' => route('company.myjob'),
            'message' => 'Vous avez reçu une nouvelle candidature pour le poste : ' . $this->job->title,
            'url2' => route('company.myjob'),
        ];
    }
}
