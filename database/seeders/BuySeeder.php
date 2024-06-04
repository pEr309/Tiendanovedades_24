<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buys')->insert([
            'name' => 'Bolsa',
            'total' => 1500,
            'image' => 'image',
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('buys')->insert([
            'name' => 'Billetera',
            'total' => 1500,
            'image' => 'image',
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('buys')->insert([
            'name' => 'Reloj',
            'total' => 1500,
            'image' => 'image',
            'user_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('buys')->insert([
            'name' => 'Billetera',
            'total' => 1500,
            'image' => 'image',
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
