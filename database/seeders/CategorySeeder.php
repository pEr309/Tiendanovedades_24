<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorys')->insert([
            'name' => 'Dama',
            'cant_Almc' => '10',
            'product_id' => 1, 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('categorys')->insert([
            'name' => 'Caballero',
            'cant_Almc' => '50',
            'product_id' => 2, 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('categorys')->insert([
            'name' => 'Niño',
            'cant_Almc' => '60',
            'product_id' => 3, 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('categorys')->insert([
            'name' => 'Niña',
            'cant_Almc' => '90',
            'product_id' => 4, 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
