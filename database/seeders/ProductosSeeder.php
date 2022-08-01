<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                'producto_id' => 1,
                'categoria_id' => 2,
                'nombre' => 'Camiseta River titular',
                'precio' => 1000000,
                'descripcion' => 'Camiseta titular Blanca con la banda roja réplica',
                'imagen'=>'titular.jpg',
                'imagen_descripcion' => 'Camiseta titular de River Plate',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => 2,
                'categoria_id' => 2,
                'nombre' => 'Camiseta alternativa',
                'precio' => 8000000,
                'descripcion' => 'Camiseta suplente tricolor que se usa profesionalmente',
                'imagen'=>'alternativa.jpg',
                'imagen_descripcion' => 'Camiseta alternativa de River Plate ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => 3,
                'categoria_id' => 2,
                'nombre' => 'Camiseta River 2020',
                'precio' => 1000000,
                'descripcion' => 'Camiseta alternativa del año 2020 roja',
                'imagen'=>'2020.jpg',
                'imagen_descripcion' => 'Camiseta alternativa de River Plate del anio 2020',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => 4,
                'categoria_id' => 1,
                'nombre' => 'Campera bordo 2019',
                'precio' => 2000000,
                'descripcion' => 'Campera rompeviento de friza',
                'imagen'=>'Campera_bordo.jpg',
                'imagen_descripcion' => 'Campera de River bordo del año 2019',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => 5,
                'categoria_id' => 1,
                'nombre' => 'Campera negra 2020',
                'precio' => 1500000,
                'descripcion' => 'Campera negra del año 2020 con la banda roja',
                'imagen'=>'campera_negra.jpg',
                'imagen_descripcion' => 'Campera negra del año 2020 con la banda roja',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => 6,
                'categoria_id' => 1,
                'nombre' => 'Campera tricolor 2021',
                'precio' => 1800000,
                'descripcion' => 'Campera de algodón tricolor año 2021',
                'imagen'=>'campera.jpg',
                'imagen_descripcion' => 'Campera de algodón tricolor año 2021',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => 7,
                'categoria_id' => 3,
                'nombre' => 'Pantalon Bordo 2019',
                'precio' => 1500000,
                'descripcion' => 'Pantalón de algodón color bordo año 2019',
                'imagen'=>'pantalon_bordo.jpg',
                'imagen_descripcion' => 'Pantalón de algodón color bordo año 2019',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => 8,
                'categoria_id' => 3,
                'nombre' => 'Pantalón negro 2022',
                'precio' => 1500000,
                'descripcion' => 'Pantalón negro del año 2022 de friza',
                'imagen'=>'pantalon_negro.jpg',
                'imagen_descripcion' => 'Pantalón negro del año 2022 de friza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => 9,
                'categoria_id' => 3,
                'nombre' => 'Pantalón gris 2022',
                'precio' => 1300000,
                'descripcion' => 'Pantalón gris del año 2022',
                'imagen'=>'pantalon_gris.jpg',
                'imagen_descripcion' => 'Pantalón gris del año 2022',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
