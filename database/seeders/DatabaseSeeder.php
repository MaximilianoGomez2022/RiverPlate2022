<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategoriasSeeder::class);
        $this->call(TallesSeeder::class);
        $this->call( ProductosSeeder::class );
        $this->call( NoticiasSeeder::class );
        $this->call( UsersSeeder::class );
        $this->call( ProductosTienenTallesSeeder::class );
    }
}
