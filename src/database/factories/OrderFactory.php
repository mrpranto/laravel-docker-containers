<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customers = Customer::query()
            ->pluck('id')
            ->toArray();

        $customer = array_rand($customers);

        return [
            'customer_id' => $customers[$customer],
            'invoice' => $this->faker->unique()->randomNumber(),
            'payment_method' => $this->faker->randomElement(['paypal', 'stripe', 'cash', 'bank']),
            'status' => $this->faker->randomElement(['pending', 'processing', 'completed', 'cancelled']),
            'total' => $this->faker->randomFloat(2, 1000, 9999),
            'discount' => $this->faker->randomFloat(2, 100, 999),
            'grand_total' => $this->faker->randomFloat(2, 1000, 9999),
        ];
    }
}
