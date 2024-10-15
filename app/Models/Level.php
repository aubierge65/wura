<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Level extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    protected $guarded = [];

    public $translatedAttributes = ['name'];

    protected $with = ['translations'];

    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'job_language_pivots', 'level_id', 'job_id');
    }

    // Relation many-to-many avec les langues via la table pivot
    public function languages()
    {
        return $this->belongsToMany(CandidateLanguage::class, 'job_language_pivots', 'level_id', 'candidate_languages_id');
    }
}
