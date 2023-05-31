<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersClassSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 1000; $i++) {
            DB::table('Customers')->insert([
                'name' => 'Phan Thanh Vương ' . ($i + 1),
                'address' => 'Bình Định ' . ($i + 1),
                'phone' => '0372140168 ' . ($i + 1),
                'role_id' => $i % 5 + 1,
                'email' => 'vuong.phan' . ($i + 1) . '@gmail.com',
                'password' => bcrypt('1234556' . ($i + 1)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
