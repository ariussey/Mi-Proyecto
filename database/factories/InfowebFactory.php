<?php

namespace Database\Factories;

use App\Models\Infoweb;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InfowebFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Infoweb::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->word(2);
        return [
            'title' => $title,
            'icono' => $this->faker->word(3),
            'user_id' => User::all()->random()->id
        ];
    }
}
