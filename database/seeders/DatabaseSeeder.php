<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Country;
use App\Models\Event;
use App\Models\Merchant;
use App\Models\Product;
use App\Models\ProductInventory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Country::factory(5)->create();
        User::factory(10)->create();
        Category::factory(10)->create();
        Merchant::factory(5)->create();
        Event::factory(10)->create();
        Product::factory(100)->create();
        ProductInventory::factory(100)->create();
/*        $this->call([
            CountrySeeder::class,
        ]);*/
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
