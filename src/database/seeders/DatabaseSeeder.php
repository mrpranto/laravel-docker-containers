<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Customer::factory()->count(5000)->create();

        $this->command->info('Customers table seeded!');

        Order::factory()->count(10000)->create();

        $this->command->info('Orders table seeded!');

        OrderProduct::factory()->count(30000)->create();

        $this->command->info('OrderProducts table seeded!');
    }
}
