<?php

namespace Database\Factories;

use App\Models\Tableclient;
use Illuminate\Database\Eloquent\Factories\Factory;

class TableclientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tableclient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'status' => $this->faker->randomElement(['paid', 'unpaid']),
        ];
    }
}
