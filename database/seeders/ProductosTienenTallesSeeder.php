<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosTienenTallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('productos_tienen_talles')->insert([
        [
            'producto_id' => 1,
            'talle_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'producto_id' => 1,
            'talle_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'producto_id' => 1,
            'talle_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'producto_id' => 2,
            'talle_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'producto_id' => 3,
            'talle_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'producto_id' => 3,
            'talle_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'producto_id' => 4,
            'talle_id' => 1,
            'created_at' => now(),
            'udpated_at' => now()
        ],
        [
            'producto_id' => 5,
            'talle_id' => 3,
            'created_at' => now(),
            'udpated_at' => now()
        ],
        [
            'producto_id' => 5,
            'talle_id' => 4,
            'created_at' => now(),
            'udpated_at' => now()
        ],
        [
            'producto_id' => 6,
            'talle_id' => 1,
            'created_at' => now(),
            'udpated_at' => now()
        ],
        [
            'producto_id' => 6,
            'talle_id' => 2,
            'created_at' => now(),
            'udpated_at' => now()
        ],
        [
            'producto_id' => 7,
            'talle_id' => 3,
            'created_at' => now(),
            'udpated_at' => now()
        ],
        [
            'producto_id' => 7,
            'talle_id' => 4,
            'created_at' => now(),
            'udpated_at' => now()
        ],
        [
            'producto_id' => 8,
            'talle_id' => 3,
            'created_at' => now(),
            'udpated_at' => now()
        ],
        [
            'producto_id' => 8,
            'talle_id' => 4,
            'created_at' => now(),
            'udpated_at' => now()
        ],
        [
            'producto_id' => 8,
            'talle_id' => 5,
            'created_at' => now(),
            'udpated_at' => now()
        ],
        [
            'producto_id' => 8,
            'talle_id' => 6,
            'created_at' => now(),
            'udpated_at' => now()
        ],
        [
            'producto_id' => 9,
            'talle_id' => 2,
            'created_at' => now(),
            'udpated_at' => now()
        ],
        ]);
    }
}
