<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'customerName' => 'John Doe',
                'deliveryAddress' => '123 Main Street, Cityville',
                'fiscalData' => 'ABC-123456',
            ],
            [
                'customerName' => 'Jane Smith',
                'deliveryAddress' => '456 Elm Street, Townsville',
                'fiscalData' => 'DEF-789012',
            ],
            [
                'customerName' => 'Alice Johnson',
                'deliveryAddress' => '789 Oak Avenue, Villageton',
                'fiscalData' => 'GHI-345678',
            ],
            [
                'customerName' => 'Michael Brown',
                'deliveryAddress' => '567 Maple Drive, Suburbia',
                'fiscalData' => 'JKL-901234',
            ],
            [
                'customerName' => 'Emily Williams',
                'deliveryAddress' => '890 Pine Road, Hilltop',
                'fiscalData' => 'MNO-567890',
            ],
            [
                'customerName' => 'David Wilson',
                'deliveryAddress' => '321 Cedar Lane, Riverside',
                'fiscalData' => 'PQR-123789',
            ],
            [
                'customerName' => 'Jessica Martinez',
                'deliveryAddress' => '654 Birch Street, Lakeside',
                'fiscalData' => 'STU-456123',
            ],
            [
                'customerName' => 'Robert Taylor',
                'deliveryAddress' => '987 Walnut Avenue, Mountainside',
                'fiscalData' => 'VWX-890567',
            ],
            [
                'customerName' => 'Samantha Garcia',
                'deliveryAddress' => '234 Oakwood Court, Meadowview',
                'fiscalData' => 'YZA-234567',
            ],
            [
                'customerName' => 'Christopher Lopez',
                'deliveryAddress' => '876 Pinecrest Road, Cliffside',
                'fiscalData' => 'BCD-890123',
            ],
            
        ]);
    }
}
