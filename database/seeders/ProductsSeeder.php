<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Seed products to the database.
     *
     * @return void
     */
    public function run(): void
    {
        Product::factory()
            ->count(100)
            ->create();
    }
}
