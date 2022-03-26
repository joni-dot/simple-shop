<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class SortProducts extends Component
{
    public string $selectedOption = '';

    public array $options = [
        'nameASC' => [
            'option' => 'Name (A > Z)',
            'sortBy' => 'name',
            'sort' => 'ASC',
        ],
        'nameDESC' => [
            'option' => 'Name (Z > A)',
            'sortBy' => 'name',
            'sort' => 'DESC',
        ],
        'barcodeASC' => [
            'option' => 'Barcode (A > Z)',
            'sortBy' => 'barcode',
            'sort' => 'ASC',
        ],
        'barcodeDESC' => [
            'option' => 'Barcode (Z > A)',
            'sortBy' => 'barcode',
            'sort' => 'DESC',
        ],
    ];

    public function mount()
    {
        $this->selectedOption = request('sortBy').request('sort');
    }

    public function render()
    {
        return view('livewire.products.sort-products', [
            'options' => $this->options,
        ]);
    }

    /**
     * Do sorting and redirect to listing.
     *
     * @return  mixed
     */
    public function sort()
    {
        if (! array_key_exists(key: $this->selectedOption, array: $this->options)) {
            return redirect()->route('public.products.index');
        }

        return redirect()->route('public.products.index', [
            'sortBy' => $this->options[$this->selectedOption]['sortBy'],
            'sort' => $this->options[$this->selectedOption]['sort'],
        ]);
    }
}
