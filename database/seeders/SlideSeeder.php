<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Slide;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slides = Slide::factory(5)->create();

        foreach($slides as $slide){
            Image::factory(1)->create([
                'imageable_id' => $slide->id,
                'imageable_type' => Slide::class
            ]);
        }
    }
}
