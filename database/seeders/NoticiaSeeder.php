<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Noticia;
use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $noticias = Noticia::factory(2)->create();

        // foreach($noticias as $noticia){
        //     Image::factory(1)->create([
        //         'imageable_id' => $noticia->id,
        //         'imageable_type' => Noticia::class
        //     ]);

        //     $noticia->tags()->attach([
        //         rand(1,2),
        //         rand(3,4)
        //     ]);
        // }
            Noticia::create([
                'title' => 'Inauguramos Pagina Web y Aula Virtual',
                'slug' => 'inauguramos-pagina-web-y-aula-virtual',
                'subtitle' => 'Ahora contamos con Herramientas y Recursos Tecnológicos',
                'description' => '<p>Porque sabemos lo importante que es contar con recursos tecnológicos, el Instituto de Educación Superior Tecnológico Esar apuesta por ofrecer una educación de calidad, con una Pagina Web, Aula Virtual y Correo Institucional.</p>',
                'body' => '<h4><i><strong>ESAR BRINDA A TODA LA COMUNIDAD EDUCATIVA RECURSOS Y HERRAMIENTAS TECNOLÓGICAS</strong></i></h4><p>&nbsp;</p><p>Porque sabemos lo importante que es contar con recursos tecnológicos, el Instituto de Educación Superior Tecnológico Esar apuesta por ofrecer una educación de calidad, con una Pagina Web, Aula Virtual y Correo Institucional para toda la Comunidad Educativa Esar.</p><p>&nbsp;</p><p>Ahora contamos con los siguientes recursos:</p><p>&nbsp;</p><ul><li><strong>Pagina Web:</strong> Para mantenerte informado de todas las actividades Académicas e Institucionales<br>&nbsp;</li><li><strong>Aula Virtual</strong>: Para optimizar el proceso de enseñanza-aprendizaje, teniendo en cuenta la situación actual del país, bajo esta coyuntura en la cual contar con este valioso recurso es imprescindible.<br>&nbsp;</li><li><strong>Correo Institucional:</strong> Para mantenernos comunicados con nuestra comunidad educativa y aprovechar los beneficios de este valioso recurso.</li></ul>',
                'status' => 2,
                'user_id' => 1,
                'category_id' => 1
            ]);

            Image::factory(1)->create([
                'imageable_id' => 1,
                'imageable_type' => Noticia::class
            ]);
    }
}
