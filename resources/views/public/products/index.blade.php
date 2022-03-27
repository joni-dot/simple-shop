<x-guest-layout>
    @auth 
        <section class="text-gray-600 body-font">
            <div class="container px-5 pt-8 mx-auto text-right">
                <a class="bg-teal-500 text-white active:bg-teal-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                    <x-icon-add class="h-4 w-4 text-white inline mr-2" /> Add New Product
                </a>
            </div>
        </section>
    @endauth
    <section class="text-gray-600 body-font">
        <div class="container px-5 pt-8 mx-auto">
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 sm:w-1/2 w-1/1">
                    @livewire('products.search-products')
                </div>
                <div class="p-4 sm:w-1/2 w-1/1">
                    @livewire('products.sort-products')
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-10 mx-auto">
            <div class="flex flex-wrap -m-4">
                @forelse($products as $product)
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">
                            {{ $product->barcode }}
                        </h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">
                            <a href="{{ route('public.products.show', $product->id) }}">{{ $product->name }}</a>
                        </h2>
                        <p class="mt-1">
                            {{ $product->price }} €
                        </p>
                    </div>
                </div>
                @empty
                <section class="text-gray-600 body-font w-full">
                    <div class="container mx-auto px-5 py-24 items-center justify-center">
                        <div class="text-center w-full">
                            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">No Products</h1>
                            <p class="mb-8 leading-relaxed">Didn't find any products.</p>
                        </div>
                    </div>
                </section>
                @endforelse
            </div>
        </div>
    </section>
    <div class="container px-5 py-10 mx-auto">
        {{ $products->withQueryString()->links() }}
    </div>
</x-guest-layout>