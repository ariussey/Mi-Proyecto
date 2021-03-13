<?php

namespace Database\Factories;

use App\Models\Portada;
use App\Models\Portada_categoria;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class PortadaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portada::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->word(20);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->sentence(),
            'status' => $this->faker->randomElement([1,2]),
            'color' => $this->faker->randomElement(['#10b981ad', '#ffffff']),
            'user_id' => User::all()->random()->id,
            'portada_categoria_id' => Portada_categoria::all()->random()->id
        ];
    }
}
