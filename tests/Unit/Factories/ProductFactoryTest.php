<?php

namespace Tests\Unit\Factories;

use App\Models\Product;
use Tests\TestCase;

class ProductFactoryTest extends TestCase
{
    /** @test */
    public function it_can_create_product()
    {
        $product = Product::factory()->create();

        $this->assertDatabaseHas(Product::tableName(), $product->toArray());
    }
}
