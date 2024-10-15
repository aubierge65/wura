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
        Schema::dropIfExists('job_type_works');
        Schema::dropIfExists('job_type_work_translations');
        Schema::dropIfExists('job_language_levels');
        Schema::dropIfExists('job_language_level_translations');
        Schema::dropIfExists('job_language_level_pivots');
      
        Schema::table('job_type_works', function (Blueprint $table) {
            if (!Schema::hasColumn('jobs', 'job_type_work_id')){
                $table->dropColumn('job_type_work_id');
            }
            if (!Schema::hasColumn('jobs', 'disponibilite')){
				$table->dropColumn('disponibilite');
			}
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_type_works', function (Blueprint $table) {
          
           
        });
        
    }
};
