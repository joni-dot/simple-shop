<?php

namespace Tests\Feature\Public\Products;

use App\Models\Product;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class CreateProductTest extends TestCase
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
     * Go to product creation page.
     *
     * @return \Illuminate\Testing\TestResponse
     */
    protected function visitProductCreate(): TestResponse
    {
        return $this->get(
            route('public.products.create')
        );
    }

    /** @test */
    public function guest_cannot_see_product_creation_form()
    {
        $this->visitProductCreate()->assertRedirect('/login');
    }

    /** @test */
    public function it_can_show_product_creation_form()
    {
        $this->signIn();

        $this->visitProductCreate()
            ->assertOk()
            ->assertSee('name')
            ->assertSee('barcode')
            ->assertSee('price')
            ->assertSee('info');
    }
}
