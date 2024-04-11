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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->enum('departmentName', ['salesPerson', 'routePerson', 'purchasingPerson', 'wharehouseperson']);; // Cambiado a string ya que parece ser el nombre del departamento
            $table->unsignedBigInteger('permissions_id'); // Cambiado el nombre de la columna y corregido el nombre en la restricción de clave foránea
            $table->foreign('permissions_id')->references('id')->on('permissions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};
