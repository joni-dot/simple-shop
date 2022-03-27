<?php

namespace Tests\Feature\Livewire\Products;

use App\Http\Livewire\Products\SearchProducts;
use Livewire\Livewire;
use Tests\TestCase;

class SearchProductsTest extends TestCase
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
    public function it_can_redirect_with_search_param()
    {
        Livewire::test(SearchProducts::class)
            ->set('inputSearch', 'SearchParam')
            ->call('search')
            ->assertRedirect(route('public.products.index', [
                'search' => 'SearchParam',
            ]));
    }
}
