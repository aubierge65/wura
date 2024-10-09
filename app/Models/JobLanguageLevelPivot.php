<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobLanguageLevelPivot extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'job_language_level_id',
        'candidate_language_id'
    ];

    public function job() {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function langue() {
        return $this->belongsTo(CandidateLanguage::class, 'candidate_language_id');
    }

    public function level(){
        return $this->belongsTo(JobLanguageLevel::class, 'job_language_level_id');
    }


}
