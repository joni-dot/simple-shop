<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class CreateProduct extends Component
{
    public string $inputName = '';

    public string $inputBarcode = '';

    public string $inputPrice = '';

    public string $inputInfo = '';

    protected array $rules = [
        'inputName' => [
            'required',
            'string',
            'max:200',
        ],
        'inputBarcode' => [
            'required',
            'string',
            'max:200',
        ],
        'inputPrice' => [
            'required',
            'numeric',
            'max:9000000',
        ],
        'inputInfo' => [
            'required',
            'string',
            'max:2500',
        ],
    ];

    protected array $validationAttributes = [
        'inputName' => 'Name',
        'inputBarcode' => 'Barcode',
        'inputPrice' => 'Price',
        'inputInfo' => 'Info',
    ];

    public function render()
    {
        return view('livewire.products.create-product');
    }

    /**
     * Save product to the database.
     *
     * @return  void
     */
    public function save(): void
    {
        $this->validate();

        $product = Product::create([
            'name' =>  $this->inputName,
            'barcode' => $this->inputBarcode,
            'price' => $this->inputPrice,
            'info' => $this->inputInfo,
        ]);

        redirect()->route('public.products.show', $product->id);
    }
}
