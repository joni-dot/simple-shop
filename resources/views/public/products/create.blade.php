<x-guest-layout>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-10 mx-auto">
            <div class="lg:w-4/5 mx-auto">
                <h6 class="text-xl font-bold leading-normal mt-0 mb-4 text-indigo-800">
                    New Product
                </h6>

                <label class="block uppercase text-indigo-800 text-xs font-bold mb-2" for="name">Name</label>
                <div class="mb-4 pt-0">
                    <input id="name" type="text" placeholder="Example name" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-whiterounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                    @error('name')
                        <span class="block text-pink-700 text-xs font-bold mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <label class="block uppercase text-indigo-800 text-xs font-bold mb-2" for="barcode">Barcode</label>
                <div class="mb-4 pt-0">
                    <input id="barcode" type="text" placeholder="Example barcode" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                    @error('barcode')
                        <span class="block text-pink-700 text-xs font-bold mt-2">{{ $message }}</span>
                    @enderror
                </div>
                
                <label class="block uppercase text-indigo-800 text-xs font-bold mb-2" for="price">Price</label>
                <div class="mb-4 pt-0">
                    <input id="price" type="text" placeholder="Example price" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                    @error('price')
                        <span class="block text-pink-700 text-xs font-bold mt-2">{{ $price }}</span>
                    @enderror
                </div>

                <label class="block uppercase text-indigo-800 text-xs font-bold mb-2" for="info">Info</label>
                <div class="mb-4 pt-0">
                    <textarea id="info" type="text" rows="5" placeholder="Example info" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-whiterounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full"></textarea>
                    @error('info')
                        <span class="block text-pink-700 text-xs font-bold mt-2">{{ $info }}</span>
                    @enderror
                </div>
                <button type="button" class="bg-teal-500 text-white active:bg-teal-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                    <x-icon-add class="h-4 w-4 text-white inline mr-2" /> Save
                </button>
            </div>
        </div>
    </section>
</x-guest-layout>