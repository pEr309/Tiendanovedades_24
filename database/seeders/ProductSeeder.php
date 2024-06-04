<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Bolsa Gucci',
            'description' => 'Para toda la ocasion',
            'amount' => 1250,
            'image' => 'img',
            'buy_id' => 1,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Cartera Lacoste',
            'description' => 'Para toda la ocasion',
            'amount' => 1500,
            'image' => 'img',
            'buy_id' => 1,
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Reloj Casio',
            'description' => 'Para toda la ocasion',
            'amount' => 1000,
            'image' => 'img',
            'buy_id' => 1,
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Bolsa Lacost',
            'description' => 'Para toda la ocasion',
            'amount' => 1250,
            'image' => 'img',
            'buy_id' => 1,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
