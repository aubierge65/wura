<?php

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
        Schema::table('jobs', function (Blueprint $table) {
            if (!Schema::hasColumn('jobs', 'job_mode_id')){
                $table->dropColumn('job_mode_id');
                $table->foreignId('job_mode_id')->constrained('job_modes')->cascadeOnDelete();
            }
           
            if (!Schema::hasColumn('jobs', 'job_contracts_id')){
                $table->dropColumn('job_contracts_id');
                $table->foreignId('job_contracts_id')->constrained('job_contracts')->cascadeOnDelete(); 
            }
            if (!Schema::hasColumn('jobs', 'job_language_pivots_id')){
                $table->dropColumn('job_language_pivots_id');
                     $table->foreignId('job_language_pivots_id')->constrained('job_language_pivots')->cascadeOnDelete();
        
            }
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            //
        });
    }
};
