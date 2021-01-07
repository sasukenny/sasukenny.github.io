<?php

namespace Database\Factories;

use App\Models\Centro;
use App\Models\Distrito;
use Illuminate\Database\Eloquent\Factories\Factory;

class CentroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Centro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hos_dist' => Distrito::all()->random()->dist_id,
            'hos_add' => $this->faker->address,
            'hos_name' => $this->faker->word(10),
            'hos_cap' => $this->faker->numberBetween(10, 20)
        ];
    }
}
