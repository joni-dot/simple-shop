<div>
    <div class="lg:w-4/5 mx-auto">
        <h6 class="text-xl font-bold leading-normal mt-0 mb-4 text-indigo-800">
            New Product
        </h6>

        <label class="block uppercase text-indigo-800 text-xs font-bold mb-2" for="name">Name</label>
        <div class="mb-4 pt-0">
            <input id="name" wire:model.defer="inputName" type="text" placeholder="Example name" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-whiterounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
            @error('inputName')
                <span class="block text-pink-700 text-xs font-bold mt-2">{{ $message }}</span>
            @enderror
        </div>

        <label class="block uppercase text-indigo-800 text-xs font-bold mb-2" for="barcode">Barcode</label>
        <div class="mb-4 pt-0">
            <input id="barcode" wire:model.defer="inputBarcode" type="text" placeholder="Example barcode" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
            @error('inputBarcode')
                <span class="block text-pink-700 text-xs font-bold mt-2">{{ $message }}</span>
            @enderror
        </div>

        <label class="block uppercase text-indigo-800 text-xs font-bold mb-2" for="price">Price</label>
        <div class="mb-4 pt-0">
            <input id="price" wire:model.defer="inputPrice" type="text" placeholder="Example price" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
            @error('inputPrice')
                <span class="block text-pink-700 text-xs font-bold mt-2">{{ $message }}</span>
            @enderror
        </div>

        <label class="block uppercase text-indigo-800 text-xs font-bold mb-2" for="info">Info</label>
        <div class="mb-4 pt-0">
            <textarea id="info" wire:model.defer="inputInfo" type="text" rows="5" placeholder="Example info" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-whiterounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full"></textarea>
            @error('inputInfo')
                <span class="block text-pink-700 text-xs font-bold mt-2">{{ $message }}</span>
            @enderror
        </div>
        <button type="button" wire:click="save" class="bg-teal-500 text-white active:bg-teal-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
            <x-icon-add class="h-4 w-4 text-white inline mr-2" /> Save
        </button>
    </div>
</div>