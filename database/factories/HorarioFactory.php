<?php

namespace Database\Factories;

use App\Models\Horario;
use Illuminate\Database\Eloquent\Factories\Factory;

class HorarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Horario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dia' => $this->faker->randomElement([1,2,3,4,5,6,7]),
            'hora_inicio' => $this->faker->randomElement(['08:30','12:30','13:30','15:00']),
            'hora_fin' =>  $this->faker->randomElement(['08:30','12:30','13:30','15:00']),
            'enlace' => $this->faker->sentence(),
            'id_moodle' => $this->faker->numberBetween(1,25)
        ];
    }
}
