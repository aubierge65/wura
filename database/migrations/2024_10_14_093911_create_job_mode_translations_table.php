<?php

use App\Models\JobMode;
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
        Schema::create('job_mode_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(JobMode::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('locale');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_mode_translations');
    }
};
