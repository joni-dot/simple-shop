<?php

namespace Tests\Feature\Public\Products;

use App\Models\Product;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class ListProductsTest extends TestCase
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
     * Go to product listing page.
     *
     * @param  array  $parameters
     * @return \Illuminate\Testing\TestResponse
     */
    protected function visitProductList(array $parameters = []): TestResponse
    {
        return $this->get(
            uri: route(
                name: 'public.products.index',
                parameters: $parameters
            ),
        );
    }

    /** @test */
    public function it_can_show_empty_page()
    {
        $this->visitProductList()
            ->assertOk();
    }

    /** @test */
    public function it_can_list_products()
    {
        $products = [
            Product::factory()->create(['name' => 'MyExampleProduct']),
            Product::factory()->create(['name' => 'MySecondExampleProduct']),
        ];

        $this->visitProductList()
            ->assertOk()
            ->assertSee($products[0]->name)
            ->assertSee($products[1]->name);
    }

    /** @test */
    public function it_can_search_products()
    {
        $products = [
            Product::factory()->create(['name' => 'MyExampleProduct']),
            Product::factory()->create(['name' => 'MySecondExampleProduct']),
        ];

        $this->visitProductList([
            'search' => $products[1]->name,
        ])
            ->assertOk()
            ->assertSee($products[1]->name)
            ->assertDontSee($products[0]->name);
    }

    /** @test */
    public function it_can_search_and_sort_products()
    {
        $products = [
            Product::factory()->create(['name' => 'FIND A']),
            Product::factory()->create(['name' => 'SKIP B']),
            Product::factory()->create(['name' => 'FIND C']),
        ];

        $this->visitProductList([
            'search' => 'FIND',
            'sortBy' => 'name',
            'sort' => 'DESC',
        ])
            ->assertOk()
            ->assertDontSee($products[1]->name)
            ->assertSeeInOrder([
                $products[2]->name,
                $products[0]->name,
            ]);
    }

    /** @test */
    public function it_can_sort_by_barcode_asc()
    {
        $products = [
            Product::factory()->create(['barcode' => 'C']),
            Product::factory()->create(['barcode' => 'B']),
            Product::factory()->create(['barcode' => 'A']),
        ];

        $this->visitProductList([
            'sortBy' => 'barcode',
            'sort' => 'A',
        ])
            ->assertOk()
            ->assertSeeInOrder([
                $products[0]->name,
                $products[1]->name,
                $products[2]->name,
            ]);
    }
}
