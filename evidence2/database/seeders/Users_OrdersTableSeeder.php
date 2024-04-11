<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Users_OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users_orders')->insert([
            [
                'users_id' => 1,
                'orders_id' => 1,
            ],
            [
                'users_id' => 2,
                'orders_id' => 1,
            ],
            [
                'users_id' => 3,
                'orders_id' => 3,
            ],
            [
                'users_id' => 4,
                'orders_id' => 4,
            ],
        ]);
    }
}
