<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Merchant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'location' => $this->faker->address,
            'image' => $this->faker->randomElement([
                'assets/images/event-imgs/img-1.jpg',
                'assets/images/event-imgs/img-2.jpg',
                'assets/images/event-imgs/img-3.jpg',
                'assets/images/event-imgs/img-4.jpg',
                'assets/images/event-imgs/img-5.jpg',
                'assets/images/event-imgs/img-6.jpg',
                'assets/images/event-imgs/img-7.jpg',
                'assets/images/event-imgs/img-8.jpg',
            ]),
            'status' => $this->faker->numberBetween(0,1),
            'merchant_id' => Merchant::pluck('id')->random(),
            'category_id' => Category::pluck('id')->random(),
            'start_date' => $this->faker->dateTimeBetween('+6 months', '+1 years'),
            'end_date' => $this->faker->dateTimeBetween('+1 years', '+1 years, +6 months'),
            ];
    }
}
