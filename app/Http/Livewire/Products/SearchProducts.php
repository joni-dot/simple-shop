<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class SearchProducts extends Component
{
    /** @var string */
    public string $inputSearch = '';

    /**
     * Mount component.
     *
     * @return void
     */
    public function mount(): void
    {
        $this->inputSearch = request(
            key: 'search',
            default: ''
        );
    }

    /**
     * Render component view.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
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
