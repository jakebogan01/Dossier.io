@aware(['num', 'skills', 'req'])

<div class="col-span-12 sm:col-span-3 min-w-[300px]">
    <label for="{{ $num }}" class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-700' }} px-1 text-xs font-medium">
        {{ $slot }}
    </label>
    <select wire:model.defer="{{ $num }}" id="{{ $num }}" name="{{ $num }}" class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent bg-[#262c33]' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600 bg-white' }} h-[38px] mt-0.5 block w-full pl-3 pr-10 py-2 text-base focus:outline-none sm:text-sm rounded-md"
            {{ $req }}>
        <option disabled selected value></option>
        @foreach($skills as $key => $skill)
            <option value="{{ $key }}">{{ $key }}</option>
        @endforeach
    </select>
</div>
