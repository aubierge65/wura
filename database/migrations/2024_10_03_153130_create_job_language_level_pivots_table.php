<?php

use App\Models\CandidateLanguage;
use App\Models\Job;
use App\Models\JobLanguageLevel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_language_level_pivots', function (Blueprint $table) {
            $table->id();
			 $table->foreignIdFor(Job::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(CandidateLanguage::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(JobLanguageLevel::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_language_level_pivots');
    }
};
