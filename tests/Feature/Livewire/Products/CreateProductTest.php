<?php

namespace Tests\Feature\Livewire\Products;

use App\Http\Livewire\Products\CreateProduct;
use App\Models\Product;
use Livewire\Livewire;
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

    /** @test */
    public function it_validates_inputs()
    {
        Livewire::test(CreateProduct::class)
            ->set('inputName', '')
            ->set('inputBarcode', '')
            ->set('inputPrice', '')
            ->set('inputInfo', '')
            ->call('save')
            ->assertHasErrors([
                'inputName' => 'required',
                'inputBarcode' => 'required',
                'inputPrice' => 'required',
                'inputInfo' => 'required',
            ]);

        $this->assertEquals(0, Product::count());
    }

    /** @test */
    public function it_creates_product()
    {
        Livewire::test(CreateProduct::class)
            ->set('inputName', 'ExampleName')
            ->set('inputBarcode', 'ExampleBarcode')
            ->set('inputPrice', '10.10')
            ->set('inputInfo', 'ExampleInfo')
            ->call('save')
            ->assertHasNoErrors();

        $this->assertEquals(1, Product::count());

        $this->assertDatabaseHas(Product::tableName(), [
            'name' => 'ExampleName',
            'barcode' => 'ExampleBarcode',
            'price' => 10.10,
            'info' => 'ExampleInfo',
        ]);
    }
}
