<?php

namespace Database\Factories;

use App\Models\Merchant;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductInventory>
 */
class ProductInventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => Product::pluck('id')->random(),
            'merchant_id' => Merchant::pluck('id')->random(),
            'quantity' => random_int(0,10),
            'status' => $this->faker->numberBetween(0,1),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
