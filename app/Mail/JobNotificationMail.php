<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class JobNotificationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $job;
    public $candidateName;

    public function __construct($job, $candidateName)
    {
        $this->job = $job;
        $this->candidateName = $candidateName;

        Log::info("Création d'un e-mail de notification pour l'emploi : {$this->job->title}");
    }

    public function build()
    {
        $subject = "Nouvelle offre d'emploi : {$this->job->title} chez {$this->job->company_name}";

        // Si vous utilisez des vues normales
        // return $this->subject($subject)
        //             ->view('notif.job')
        //             ->with([
        //                 'job' => $this->job,
        //                 'candidateName' => $this->candidateName,
        //                 'body' => "Nous avons le plaisir de vous informer qu'un nouveau job correspondant à vos préférences est maintenant disponible : {$this->job->title}. Cliquez sur le lien ci-dessous pour plus de détails.",
        //             ]);

        // Si vous utilisez Markdown pour les mails
        return $this->subject($subject)
                    ->markdown('mails.job')
                    ->with([
                        'job' => $this->job,
                        'candidateName' => $this->candidateName,
                        'body' => "Nous avons le plaisir de vous informer qu'un nouveau job correspondant à vos préférences est maintenant disponible : {$this->job->title}. Cliquez sur le lien ci-dessous pour plus de détails.",
                    ]);
    }
}
