<?php

namespace Tests\Feature\Public\Products;

use App\Models\Product;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class ShowProductTest extends TestCase
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

    /**
     * Go to product show page.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Testing\TestResponse
     */
    protected function visitProductShow(Product $product): TestResponse
    {
        return $this->get(
            route('public.products.show', $product->id)
        );
    }

    /** @test */
    public function it_can_show_product()
    {
        $product = Product::factory()->create([
            'name' => 'ExampleName',
            'barcode' => '123456789',
            'info' => 'Some more information about product.',
        ]);

        $this->visitProductShow($product)
            ->assertOk()
            ->assertSee($product->name)
            ->assertSee($product->barcode)
            ->assertSee($product->info);
    }
}
