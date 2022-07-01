@aware(['setting'])

<li class="py-4 flex items-center justify-between">
    <div class="flex flex-col">
        {{ $slot }}
    </div>
    <div class="relative inline-block h-6 w-11 align-middle select-none sm:transition duration-200 ease-in">
        <input wire:model="{{ $setting }}" type="checkbox" name="{{ $setting }}" id="{{ $setting }}" class="{{ (auth()->user()->dark_mode) ? 'focus:ring-white' : 'focus:ring-indigo-700' }} toggle-checkbox absolute block outline-none border border-white bg-white appearance-none cursor-pointer p-0 h-5 w-5 mt-0.5 mx-0.5 rounded-full sm:transition shadow transform ring-0 ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2" />
        <label for="{{ $setting }}" class="{{ (auth()->user()->dark_mode) ? 'toggle-dark-label bg-black' : 'toggle-label bg-gray-200' }} block overflow-hidden h-6 w-11 rounded-full cursor-pointer sm:transition"></label>
        <label for="{{ $setting }}" class="text-xs text-gray-700 sr-only">
            {{ $setting }}
        </label>
    </div>
</li>
