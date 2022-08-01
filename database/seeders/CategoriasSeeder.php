<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('categorias')->insert([
        [
        'categoria_id' => 1,
        'nombre' => 'Camperas',
        'created_at' =>now(),
        'updated_at' =>now(),
        ],
        [
        'categoria_id' => 2,
        'nombre' => 'Camisetas',
        'created_at' =>now(),
        'updated_at' =>now(),
        ],
        [
        'categoria_id' => 3,
        'nombre' => 'Pantalones',
        'created_at' =>now(),
        'updated_at' =>now(),
        ],

    ]);
    }
}
