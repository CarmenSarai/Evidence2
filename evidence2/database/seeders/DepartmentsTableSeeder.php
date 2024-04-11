<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            [
                'departmentName' => 'salesPerson',
                'permissions_id' => 1,
            ],
            [
                'departmentName' => 'routePerson',
                'permissions_id' => 2,
            ],
            [
                'departmentName' => 'purchasingPerson',
                'permissions_id' => 3,
            ],
            [
                'departmentName' => 'wharehouseperson',
                'permissions_id' => 4,
            ],
        ]);
    }
}

