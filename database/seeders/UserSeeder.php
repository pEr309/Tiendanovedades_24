<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'jasibeth figueroa',
            'email' => 'jasi@gmail.com',
            'password'=> Hash::make('34567'),
            'rol_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Miguel Mateos',
            'email' => 'Mmateos@gmail.com',
            'password'=> Hash::make('34567'),
            'rol_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Yams Fabian',
            'email' => 'YamsF@gmail.com',
            'password'=> Hash::make('34567'),
            'rol_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Alfredo Mateos',
            'email' => 'AlfredM@gmail.com',
            'password'=> Hash::make('347'),
            'rol_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
