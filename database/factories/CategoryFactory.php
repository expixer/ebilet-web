<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
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
            'cat_name' => $this->faker->word(),
            'category_id' => $c->count() > 0 ? $c->random() : null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
