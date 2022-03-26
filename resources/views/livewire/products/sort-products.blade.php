<div>
    <div class="relative inline-block w-full text-gray-700">
        <select 
            wire:model.defer="selectedOption"
            wire:change="sort"
            class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border-gray-500 rounded-lg appearance-none focus:shadow-outline" 
            placeholder="Regular input"
        >
            <option value="">No Sorting</option>
            @foreach($options as $key => $option)
                <option value="{{ $key }}">{{ $option['option'] }}</option>
            @endforeach
        </select>
    </div>
</div>