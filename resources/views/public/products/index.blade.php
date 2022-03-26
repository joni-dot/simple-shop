<x-guest-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 pt-10 mx-auto">
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 sm:w-1/2 w-1/1">
                    @livewire('products.search-product')
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
                @foreach($products as $product)
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EXAMPLE CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">
                            <a href="{{ route('public.products.show', $product->id) }}">{{ $product->name }}</a>
                        </h2>
                        <p class="mt-1">
                            {{ $product->price }} €
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="container px-5 py-10 mx-auto">
        {{ $products->withQueryString()->links() }}
    </div>
</x-guest-layout>