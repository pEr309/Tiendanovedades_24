<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Category_Preoducts')->insert(
            [
                'category_id' => 1,
                'product_id' => 2,
                'created_at' => Carbon::now(),
                'updated:at' => Carbon::now()
            ]
        );
    }
}
