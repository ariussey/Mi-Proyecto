<?php

namespace Database\Factories;

use App\Models\Navbar;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class NavbarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Navbar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(1);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'status' => $this->faker->randomElement([1,2]),
            'user_id' => User::all()->random()->id
        ];
    }
}
