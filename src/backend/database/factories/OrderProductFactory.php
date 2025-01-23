<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderProduct>
 */
class OrderProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $orders = Order::query()->pluck('id')->toArray();
        $order = array_rand($orders);

        $quantity = $this->faker->numberBetween(1, 100);
        $price = $this->faker->numberBetween(100, 1000);

        return [
            'order_id' => $orders[$order],
            'product' => $this->faker->safeColorName(),
            'quantity' => $quantity,
            'price' => $price,
            'total' => round($price * $quantity),
        ];
    }
}
