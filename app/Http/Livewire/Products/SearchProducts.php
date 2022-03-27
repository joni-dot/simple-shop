<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class SearchProducts extends Component
{
    public string $inputSearch = '';

    public function mount()
    {
        $this->inputSearch = request(
            key: 'search',
            default: ''
        );
    }

    public function render()
    {
        return view('livewire.products.search-products');
    }

    /**
     * Do search and redirect to listing.
     *
     * @return  void
     */
    public function search(): void
    {
        redirect()->route('public.products.index', [
            'search' => $this->inputSearch,
        ]);
    }
}