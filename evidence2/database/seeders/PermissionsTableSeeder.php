<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                
                'permissionsName' => 'purchaseMaterials,createOrder',
            ],
            [
                
                'permissionsName' => 'createOrder,editStatus',
            ],
            [
                
                'permissionsName' => 'editStatus,uploadPhotos',
            ],
            [
                
                'permissionsName' => 'uploadPhotos,erase/restoreOrder',
            ],
        ]);
    }
}


