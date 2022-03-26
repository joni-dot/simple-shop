<?php

namespace Tests\Unit\Models;

use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /** @test */
    public function id_is_guarded()
    {
        Product::create($this->validProductParams([
            'id' => '123456789',
        ]));

        $this->assertDatabaseMissing(Product::tableName(), [
            'id' => 123456789,
        ]);
    }

    /** @test */
    public function name_is_fillable()
    {
        $product = Product::create($this->validProductParams([
            'name' => 'TestName',
        ]));

        $this->assertDatabaseHas(Product::tableName(), [
            'id' => $product->id,
            'name' => 'TestName',
        ]);
    }

    /** @test */
    public function barcode_is_fillable()
    {
        $product = Product::create($this->validProductParams([
            'barcode' => '123456',
        ]));

        $this->assertDatabaseHas(Product::tableName(), [
            'id' => $product->id,
            'barcode' => '123456',
        ]);
    }

    /** @test */
    public function info_is_fillable()
    {
        $product = Product::create($this->validProductParams([
            'info' => 'Some example info.',
        ]));

        $this->assertDatabaseHas(Product::tableName(), [
            'id' => $product->id,
            'info' => 'Some example info.',
        ]);
    }

    /**
     * Generate valid product params for creation etc.
     *
     * @param  array  $overrider
     * @return array
     */
    protected function validProductParams(array $overrides): array
    {
        return array_merge(Product::factory()->make()->toArray(), $overrides);
    }
}
