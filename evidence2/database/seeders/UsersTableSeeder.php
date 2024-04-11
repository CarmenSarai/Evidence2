<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'userName' => 'JohnDoe',
                'email' => 'johndoe@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password123'),
                'departments_id' => 1,
            ],
            [
                'userName' => 'JaneSmith',
                'email' => 'janesmith@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password456'),
                'departments_id' => 2,
            ],
            [
                'userName' => 'AliceJohnson',
                'email' => 'alicejohnson@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password789'),
                'departments_id' => 3,
            ],
            [
                'userName' => 'BobJones',
                'email' => 'bobjones@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('passwordABC'),
                'departments_id' => 4,
            ],
        ]);
    }
}
