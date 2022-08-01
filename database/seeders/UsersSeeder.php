<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'usuario',
                'email' => 'usuario@gmail.com',
                'password' => \Hash::make('asdasdasd'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ]);
    }
}
