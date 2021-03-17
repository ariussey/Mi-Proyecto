<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Portada;
use Illuminate\Database\Seeder;

class PortadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $portadas = Portada::factory(3)->create();

        // foreach($portadas as $portada){
        //     Image::factory(1)->create([
        //         'imageable_id' => $portada->id,
        //         'imageable_type' => Portada::class
        //     ]);
        // }

        Portada::create([
            'title' => 'Iniciamos el semestre 2021-1',
            'slug' => 'iniciamos-el-semestre-2021-1',
            'description' => '<p><strong>Para brindar una educación de calidad es necesario contar con herramientas y recursos tecnológicos, es por ello que ahora contamos con una Plataforma Virtual para optimizar el proceso de enseñanza-aprendizaje.</strong></p>',
            'status' => 2,
            'color' => 'rgba(8,13,11,0.57)',
            'user_id' => 1,
            'portada_categoria_id' => 1
        ]);

        Portada::create([
            'title' => 'NOTICIAS Y ACTIVIDADES',
            'slug' => 'noticias-y-actividades',
            'description' => '<p><strong>Para brindar una educación de calidad es necesario contar con herramientas y recursos tecnológicos, es por ello que ahora contamos con una Plataforma Virtual para optimizar el proceso de enseñanza-aprendizaje.</strong></p>',
            'status' => 2,
            'color' => 'rgba(67,161,195,0.69)',
            'user_id' => 1,
            'portada_categoria_id' => 2
        ]);

        Portada::create([
            'title' => 'Conoce Nuestra Historia',
            'slug' => 'conoce-nuestra-historia',
            'description' => '<p>Entidad Educativa creada y promovida por la Asociación de Promoción Agraria ASPA</p>',
            'status' => 2,
            'color' => 'rgba(16,185,129,0.62)',
            'user_id' => 1,
            'portada_categoria_id' => 3
        ]);

        Image::factory(1)->create([
            'imageable_id' => 1,
            'imageable_type' => Portada::class
        ]);

        Image::factory(1)->create([
            'imageable_id' => 2,
            'imageable_type' => Portada::class
        ]);

        Image::factory(1)->create([
            'imageable_id' => 3,
            'imageable_type' => Portada::class
        ]);
    }
}
