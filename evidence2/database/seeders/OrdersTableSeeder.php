<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'invoiceNumber' => 1001,
                'orderDate' => Carbon::now(), // Obtiene la fecha y hora actual
                'status' => 'ordered',
                'action' => 'erase',
                'customers_id' => 1,
            ],
            [
                'invoiceNumber' => 1002,
                'orderDate' => Carbon::now(), // Obtiene la fecha y hora actual
                'status' => 'in progress',
                'action' => 'restore',
                'customers_id' => 2,
            ],
            [
                'invoiceNumber' => 1003,
                'orderDate' => Carbon::now(), // Obtiene la fecha y hora actual
                'status' => 'on route',
                'action' => 'erase',
                'customers_id' => 3,
            ],
            [
                'invoiceNumber' => 1004,
                'orderDate' => Carbon::now(), // Obtiene la fecha y hora actual
                'status' => 'delivered',
                'action' => 'restore',
                'customers_id' => 4,
            ],
            [
                'invoiceNumber' => 1005,
                'orderDate' => Carbon::now(), // Obtiene la fecha y hora actual
                'status' => 'ordered',
                'action' => 'erase',
                'customers_id' => 5,
            ],
            [
                'invoiceNumber' => 1006,
                'orderDate' => Carbon::now(), // Obtiene la fecha y hora actual
                'status' => 'in progress',
                'action' => 'restore',
                'customers_id' => 6,
            ],
            [
                'invoiceNumber' => 1007,
                'orderDate' => Carbon::now(), // Obtiene la fecha y hora actual
                'status' => 'on route',
                'action' => 'erase',
                'customers_id' => 7,
            ],
            [
                'invoiceNumber' => 1008,
                'orderDate' => Carbon::now(), // Obtiene la fecha y hora actual
                'status' => 'delivered',
                'action' => 'restore',
                'customers_id' => 8,
            ],
            // Agrega más ejemplos según sea necesario
        ]);
    }
}

