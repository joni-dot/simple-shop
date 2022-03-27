<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class AddToCart extends Component
{
    /** @var \App\Models\Product */
    public Product $product;

    /**
     * Mount component.
     *
     * @param  \App\Models\Product $product
     * @return void
     */
    public function mount(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Render component view.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function render()
    {
        return view('livewire.products.add-to-cart', [
            'product' => $this->product,
        ]);
    }

    /**
     * Add product to the cart.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function addToCart()
    {
        if (! session()->exists("cart.products.{$this->product->id}")) {
            session(["cart.products.{$this->product->id}" => 1]);
        } else {
            session(["cart.products.{$this->product->id}" => session("cart.products.{$this->product->id}") + 1]);
        }
    }
}
