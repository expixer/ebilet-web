<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchant>
 */
class MerchantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'merchant_name' => $this->faker->company(),
            'admin_id' => \App\Models\User::pluck('id')->random(),
            'country_id' => \App\Models\Country::pluck('id')->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
