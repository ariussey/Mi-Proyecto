<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'Capacitación Docente',
            'slug' => 'capacitacion-docente',
            'color' => 'blue'
        ]);

        Tag::create([
            'name' => 'Capacitación Estudiante',
            'slug' => 'capacitacion-estudiante',
            'color' => 'purple'
        ]);

        Tag::create([
            'name' => 'Institucional',
            'slug' => 'institucional',
            'color' => 'green'
        ]);
    }
}
