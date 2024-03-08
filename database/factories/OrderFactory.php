<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Order;
use App\Models\Tableclient;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tableclient_id' => Tableclient::factory(),
            'status' => $this->faker->randomElement(['pending', 'processing', 'completed']),
        ];
    }

    /**
     * Indica que se deben adjuntar ítems a la orden.
     *
     * @param  int  $count
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function withItems($count = 1)
    {
        return $this->hasItems($count);
    }

    /**
     * Indica que se deben adjuntar ítems a la orden.
     *
     * @param  int  $count
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function hasItems($count = 1)
    {
        return $this->afterCreating(function (Order $order) use ($count) {
            $order->items()->attach(
                Item::factory($count)->create()->pluck('id')->toArray(),
                ['quantity' => $this->faker->numberBetween(1, 5)]
            );
        });
    }
}
