<?php

namespace Database\Factories;

use App\Models\Navbar;
use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class PageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Page::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->word(3);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'subtitle' => $this->faker->word(5),
            'description' => $this->faker->text(200),
            'body' => $this->faker->text(1000),
            'navbar_id' => Navbar::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}
