<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\JobNotificationMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendJobNotifications implements ShouldQueue
{
    use Dispatchable, Queueable, SerializesModels;

    protected $email;
    protected $job;
    protected $candidateName; 

    public function __construct($email, $job, $candidateName)
    {
        $this->email = $email;
        $this->job = $job;
        $this->candidateName = $candidateName; 
    }

    public function handle()
    {
        try {
            Log::info("Envoi de l'e-mail à {$this->email} pour l'lerte d emploi ");
            Mail::to($this->email)->send(new JobNotificationMail($this->job, $this->candidateName));
        } catch (\Exception $e) {
            Log::error("Échec de l'envoi de la notification de l'emploi à {$this->email}: " . $e->getMessage());
        }
    }
    
}
