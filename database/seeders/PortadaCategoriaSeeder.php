<?php

namespace Database\Seeders;

use App\Models\Portada_categoria;
use Illuminate\Database\Seeder;

class PortadaCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portada_categoria::create([
            'name' => 'Inicio',
            'slug' => 'inicio',
            'status' => 2
        ]);

        Portada_categoria::create([
            'name' => 'Noticias',
            'slug' => 'noticias',
            'status' => 2
        ]);

        Portada_categoria::create([
            'name' => 'Nosotros',
            'slug' => 'nosotros',
            'status' => 2
        ]);
    }
}
