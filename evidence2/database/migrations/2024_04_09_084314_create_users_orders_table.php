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
        Schema::create('users_orders', function (Blueprint $table) {
            $table->id();
            


            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('orders_id');

            // Definición de las claves foráneas
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('orders_id')->references('id')->on('orders');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
