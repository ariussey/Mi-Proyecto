<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Angemar Huamán Pachas',
            'email' => 'angemar@autonomadeica.edu.pe',
            'password' => bcrypt('Paraiso09$')
        ])->assignRole('Admin');;

        User::factory(45)->create();
    }
}
