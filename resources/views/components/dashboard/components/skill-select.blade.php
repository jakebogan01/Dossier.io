@aware(['num', 'skills', 'req'])

<div class="col-span-12 sm:col-span-3 min-w-[300px]">
    <label for="{{ $num }}" class="text-sm font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-700' }}">{{ $slot }}</label>
    <select wire:model="{{ $num }}" id="{{ $num }}" name="{{ $num }}" class="{{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} h-[38px] mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
            {{ $req }}>
        <option disabled selected value></option>
        @foreach($skills as $key => $skill)
            <option value="{{ $key }}">{{ $key }}</option>
        @endforeach
    </select>
</div>
