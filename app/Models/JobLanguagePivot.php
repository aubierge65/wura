<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobLanguagePivot extends Model
{
    use HasFactory;

     // Si tu as besoin d'accéder à la relation job
     public function job()
     {
         return $this->belongsTo(Job::class, 'job_id');
     }
 
     // Si tu as besoin d'accéder à la relation langue
     public function language()
     {
         return $this->belongsTo(CandidateLanguage::class, 'candidate_languages_id');
     }
 
     // Si tu as besoin d'accéder à la relation niveau
     public function level()
     {
         return $this->belongsTo(Level::class, 'level_id');
     }
}
