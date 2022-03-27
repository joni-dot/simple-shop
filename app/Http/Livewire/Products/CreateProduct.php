<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class CreateProduct extends Component
{
    /** @var string */
    public string $inputName = '';

    /** @var string */
    public string $inputBarcode = '';

    /** @var string */
    public string $inputPrice = '';

    /** @var string */
    public string $inputInfo = '';

    /** @var array */
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

    /** @var array */
    protected array $validationAttributes = [
        'inputName' => 'Name',
        'inputBarcode' => 'Barcode',
        'inputPrice' => 'Price',
        'inputInfo' => 'Info',
    ];

    /**
     * Render component view.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
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
