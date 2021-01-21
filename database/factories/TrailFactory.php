<?php

namespace Database\Factories;

use App\Models\Trail;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->title(),
            'location' => $this->faker->unique()->city(),
            'distance' => $this->faker->unique()->numberBetween($min = 1, $max = 20),
            'iconImage' => $this->faker->unique()->imageUrl(100, 10)
        ];
    }
}
