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
            if (Schema::hasColumn('jobs', 'disponibilite')) {
                $table->dropColumn('disponibilite');
            }
            if (Schema::hasColumn('jobs', 'job_type_work_id')) {
                $table->dropColumn('job_type_work_id');
            }
            if (Schema::hasColumn('jobs', 'langue_id')) {
                $table->dropColumn('langue_id');
            }
            if (Schema::hasColumn('jobs', 'contrat_id')) {
                $table->dropColumn('contrat_id');
            }
            if (Schema::hasColumn('jobs', 'mode_id')) {
                $table->dropColumn('mode_id');
            }
            if (Schema::hasColumn('jobs', 'jobs_mode_id_foreign')) {
                $table->dropColumn('jobs_mode_id_foreign');
            }
            if (Schema::hasColumn('jobs', 'job_language_pivots_id')) {
                $table->dropColumn('job_language_pivots_id');
            }
            if (Schema::hasColumn('jobs', 'job_modes_id')) {
                $table->dropColumn('job_modes_id');
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
