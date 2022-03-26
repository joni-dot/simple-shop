<div>
    <div class="relative text-gray-700">
        <input 
            wire:model.defer="inputSearch" 
            wire:keydown.enter="search"
            class="w-full h-10 pl-3 pr-8 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" 
            type="text" 
        />
        <button wire:click="search" class="absolute inset-y-0 right-0 flex items-center px-4 font-bold text-white bg-indigo-500 rounded-r-lg hover:bg-indigo-500 focus:bg-indigo-700">
            <span wire:loading>
                <x-icon-spinner-two class="h-4 w-4 text-white inline animation-spin" />
            </span>
            <span wire:loading.remove>
                <x-icon-search class="h-4 w-4 text-white inline" />
            </span>
        </button>
    </div>
</div>