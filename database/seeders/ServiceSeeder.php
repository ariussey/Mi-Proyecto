<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'name' => 'Correo Institucional',
            'slug' => 'correo-institucional',
            'url' => 'https://outlook.office365.com',
            'description' => 'Aprovecha al máximo todos los beneficios de tu correo institucional.',
            'icono' => 'fas fa-envelope-open-text',
            'color' => 'blue',
            'status' => 2
        ]);

        Service::create([
            'name' => 'Aula Virtual',
            'slug' => 'aula-virtual',
            'url' => 'https://aulavirtual.esar.edu.pe',
            'description' => 'Ahora contamos con una plataforma virtual para optimizar el aprendizaje.',
            'icono' => 'fas fa-chalkboard-teacher',
            'color' => 'red',
            'status' => 2
        ]);

        Service::create([
            'name' => 'Modalidad Virtual',
            'slug' => 'modalidad-virtual',
            'url' => 'https://teams.microsoft.com',
            'description' => 'Ingresa a las clases virtuales gracias a Microsoft Team.',
            'icono' => 'fas fa-video',
            'color' => 'purple',
            'status' => 2
        ]);

        Service::create([
            'name' => 'Contáctanos',
            'slug' => 'contactanos',
            'url' => 'https://esar.edu.pe/contactanos',
            'description' => 'Comunícate con nosotros y resuelve tus dudas.',
            'icono' => 'fas fa-headset',
            'color' => 'yellow',
            'status' => 2
        ]);
    }
}
