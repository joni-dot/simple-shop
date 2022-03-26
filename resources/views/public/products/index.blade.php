<x-guest-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 pt-10 mx-auto">
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 sm:w-1/2 w-1/1">
                    <div class="relative text-gray-700">
                        <input class="w-full h-10 pl-3 pr-8 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Search" />
                        <button class="absolute inset-y-0 right-0 flex items-center px-4 font-bold text-white bg-indigo-500 rounded-r-lg hover:bg-indigo-500 focus:bg-indigo-700">
                            <x-icon-search class="h-4 w-4 text-white inline" />
                        </button>
                    </div>
                </div>
                <div class="p-4 sm:w-1/2 w-1/1">
                    <div>
                        <div class="relative inline-block w-full text-gray-700">
                            <select class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border-gray-500 rounded-lg appearance-none focus:shadow-outline" placeholder="Regular input">
                                <option>Sorting option</option>
                            </select>
                        </div>
                    </div>
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
                            {{ $product->name }}
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
</x-guest-layout>