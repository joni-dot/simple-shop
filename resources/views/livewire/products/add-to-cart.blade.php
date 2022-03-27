<div class="mt-5">
    <button wire:click="addToCart" wire:loading.remove class="ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
        <span>
            <x-icon-shopping-cart class="h-4 w-4 text-white inline mr-2" /> Add To Cart
        </span>
    </button>
    <button wire:loading class="ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
        <span>
            <x-icon-spinner-two class="h-4 w-4 text-white inline animation-spin" />
        </span>
    </button>
    <span class="text-xs font-bold inline-block py-2 px-6 rounded text-pink-600 bg-pink-200 uppercase last:mr-0 mr-1 float-right">
        In Cart: {{ session("cart.products.{$this->product->id}") ?? 0 }}
    </span>
</div>
