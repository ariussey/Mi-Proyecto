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
        $noticias = Noticia::factory(2)->create();

        foreach($noticias as $noticia){
            Image::factory(1)->create([
                'imageable_id' => $noticia->id,
                'imageable_type' => Noticia::class
            ]);

            $noticia->tags()->attach([
                rand(1,4),
                rand(5,8)
            ]);
        }
    }
}
