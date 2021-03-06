<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Horario;
use App\Models\Infoweb;
use App\Models\Navbar;
use App\Models\Noticia;
use App\Models\Page;
use App\Models\Portada_categoria;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Tag;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('noticias');
        Storage::deleteDirectory('slides');
        Storage::deleteDirectory('portadas');
        Storage::deleteDirectory('nosotros');

        Storage::makeDirectory('noticias');
        Storage::makeDirectory('slides');
        Storage::makeDirectory('portadas');
        Storage::makeDirectory('nosotros');
        
        $this->call(RoleSeeder::class);
        
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        //Category::factory(1)->create();
        $this->call(CategoriaSeeder::class);
        //Tag::factory()->create();
        $this->call(TagSeeder::class);

        //Service::factory(4)->create();
        $this->call(ServiceSeeder::class);
        Infoweb::factory(1)->create();
        Navbar::factory(4)->create();
        Page::factory(4)->create();
        Horario::factory(10)->create();

        $this->call(PortadaCategoriaSeeder::class);
        //Portada_categoria::factory(2)->create();

        $this->call(SlideSeeder::class);

        $this->call(NoticiaSeeder::class);

        $this->call(PortadaSeeder::class);

        $this->call(NosotroSeeder::class);

        $this->call(EntidadeSeeder::class);
        
    }
}
