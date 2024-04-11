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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
           
            $table->set('permissionsName', ['purchaseMaterials', 'createOrder', 'editStatus', 'uploadPhotos', 'erase/restoreOrder']);

            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      
    }
};