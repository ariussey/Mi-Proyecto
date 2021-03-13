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
        $portadas = Portada::factory(3)->create();

        foreach($portadas as $portada){
            Image::factory(1)->create([
                'imageable_id' => $portada->id,
                'imageable_type' => Portada::class
            ]);
        }
    }
}
