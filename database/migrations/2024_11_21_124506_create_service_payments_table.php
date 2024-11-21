<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_payments', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email');
            $table->string('contact');
            $table->string('service_name');
            $table->decimal('amount', 10, 2); // Ajuste la taille en fonction de ton besoin
            $table->string('transaction_id')->unique();
            $table->enum('payment_status', ['pending', 'approved', 'declined', 'canceled', 'refunded', 'failed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_payments');
    }
}
