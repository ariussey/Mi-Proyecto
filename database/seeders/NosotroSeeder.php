<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Nosotro;
use App\Models\User;
use Illuminate\Database\Seeder;

class NosotroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        Nosotro::create([
            'name' => 'Reseña Histórica',
            'slug' => 'resena-historica',
            'description' => 'descripcion de reseña',
            'body' => 'Cuerpo de reseña',
            'url' => 'youtube.com/resena',
            'status' => 1,
            'user_id' => User::all()->random()->id
        ]);

        Nosotro::create([
            'name' => 'Objetivos',
            'slug' => 'objetivos',
            'description' => 'descripcion de objetivos',
            'body' => 'Cuerpo de objetivos',
            'url' => 'youtube.com/objetivos',
            'status' => 1,
            'user_id' => User::all()->random()->id
        ]);

        Nosotro::create([
            'name' => 'Organigrama',
            'slug' => 'organigrama',
            'description' => 'descripcion de organigrama',
            'body' => 'Cuerpo de organigrama',
            'url' => 'youtube.com/organigrama',
            'status' => 1,
            'user_id' => User::all()->random()->id
        ]);


        Image::factory(1)->create([
            'imageable_id' => 4,
            'imageable_type' => Nosotro::class
        ]);
        Image::factory(1)->create([
            'imageable_id' => 5,
            'imageable_type' => Nosotro::class
        ]);
        Image::factory(1)->create([
            'imageable_id' => 6,
            'imageable_type' => Nosotro::class
        ]);

    }
}
