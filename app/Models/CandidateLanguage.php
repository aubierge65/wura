<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CandidateLanguage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'job_language_pivots', 'candidate_languages_id', 'job_id')
                    ->withPivot('level_id'); // Inclure le niveau dans la relation
    }

    // Si tu veux aussi accéder au niveau de compétence directement depuis la langue
    public function levels()
    {
        return $this->belongsToMany(Level::class, 'job_language_pivots', 'candidate_languages_id', 'level_id');
    }
    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }
}
