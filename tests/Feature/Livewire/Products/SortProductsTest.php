<?php

namespace Tests\Feature\Livewire\Products;

use App\Http\Livewire\Products\SortProducts;
use Livewire\Livewire;
use Tests\TestCase;

class SortProductsTest extends TestCase
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
    public function it_can_redirect_with_sort_params()
    {
        Livewire::test(SortProducts::class)
            ->set('selectedOption', 'barcodeASC')
            ->call('sort')
            ->assertRedirect(route('public.products.index', [
                'sortBy' => 'barcode',
                'sort' => 'ASC',
            ]));
    }

    /** @test */
    public function it_can_redirect_with_sort_params_and_search()
    {
        Livewire::test(SortProducts::class)
            ->set('selectedOption', 'barcodeASC')
            ->set('search', 'MySearch')
            ->call('sort')
            ->assertRedirect(route('public.products.index', [
                'sortBy' => 'barcode',
                'sort' => 'ASC',
                'search' => 'MySearch',
            ]));
    }
}
