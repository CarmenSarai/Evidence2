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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('invoiceNumber');
            $table->dateTime('orderDate');
            $table->enum('status', ['ordered', 'in progress', 'on route', 'delivered']);
            $table->enum('action', ['erase', 'restore']);
            $table->binary('photo')->nullable();

            $table->unsignedBigInteger('customers_id'); // Cambiar de 'customer_id' a 'customers_id'
            $table->foreign('customers_id')->references('id')->on('customers'); // Cambiar de 'customer_id' a 'customers_id'

        

           



          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
