<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $c = Category::pluck('id');
        return [
            'name' => $this->faker->domainWord(),
            'price' => random_int(0,10000),
            'description' => $this->faker->paragraph(),
            'category_id' =>  $c->count() > 0 ? $c->random() : Category::factory()->create()->id,
            'event_id' =>  Event::pluck('id')->random(),
            'status'=> $this->faker->numberBetween(0,1),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
