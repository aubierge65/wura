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
        Schema::table('posts', function (Blueprint $table) {
              if (!Schema::hasColumn('posts', 'author_type')) {
                $table->string('author_type'); // Ajoute uniquement la colonne author_type
            }
            if (!Schema::hasColumn('posts', 'author_id')) {
                $table->unsignedBigInteger('author_id'); // Si la colonne author_id n'existe pas
            }
            $table->index(['author_id', 'author_type']); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
};
