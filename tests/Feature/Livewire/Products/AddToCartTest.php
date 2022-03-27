<?php

namespace Tests\Feature\Livewire\Products;

use App\Http\Livewire\Products\AddToCart;
use App\Models\Product;
use Livewire\Livewire;
use Tests\TestCase;

class AddToCartTest extends TestCase
{
    /**
     * Setup test.
     *
     * @return  void
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function it_can_add_to_cart()
    {
        Livewire::test(AddToCart::class, [$product = Product::factory()->create()])
            ->call('addToCart')
            ->call('addToCart')
            ->call('addToCart');

        $this->assertEquals(3, session("cart.products.{$product->id}"));
    }
}
