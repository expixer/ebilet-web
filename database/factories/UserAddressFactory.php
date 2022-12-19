<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserAdress;
use Laravel\Jetstream\Features;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAddress>
 */
class UserAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'address_line1' => $this->faker->address(),
            'address_line2' => $this->faker->secondaryAddress(),
            'user_id' => random_int(0,100),
            'city' => $this->faker->city(),
            'postal_code' => random_int(0,100),
            'country_id' => '123124',
            'mobile' => $this->faker->phoneNumber(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
