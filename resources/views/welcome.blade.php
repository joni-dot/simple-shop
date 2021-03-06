<x-guest-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">
                    Welcome to WebShop demo
                </h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">
                    This is just simple demo WebShop with some basic features.
                </p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                </div>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                        <x-icon-list class="h-8 w-8 text-indigo-600 inline" />
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">
                            Browse products
                        </h2>
                        <p class="leading-relaxed text-base">
                            It's possible to browse, search and sort products in public view. More features are coming when we develop public site more.
                        </p>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                        <x-icon-edit-markup class="h-8 w-8 text-indigo-600 inline" />
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">
                            Manage products
                        </h2>
                        <p class="leading-relaxed text-base">
                            Add new products to WebShop any time so you can expand your product catalog. In future we add more management features.
                        </p>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                        <x-icon-heart class="h-8 w-8 text-indigo-600 inline" />
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">And more</h2>
                        <p class="leading-relaxed text-base">
                            We are developing this WebShop all the time, so also new features are added regularly to make this WebShop even better! 
                        </p>
                    </div>
                </div>
            </div>
            <button onclick="location.href='{{ route('public.products.index') }}';" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                Browse Products
            </button>
        </div>
    </section>
</x-guest-layout>