<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Make;
use App\Models\Vehicle;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'model' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'year' => $this->faker->numberBetween(-10000, 10000),
            'fob' => $this->faker->numberBetween(-10000, 10000),
            'make_id' => Make::factory(),
        ];
    }
}
