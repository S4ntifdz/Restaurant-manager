<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'menu_id' => Menu::factory(), // Usar Menu::factory() para relacionar el ítem con un menú
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}

