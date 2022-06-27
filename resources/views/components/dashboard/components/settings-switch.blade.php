@aware(['setting'])

<li class="py-4 flex items-center justify-between">
    <div class="flex flex-col">
        {{ $slot }}
    </div>
    <div class="relative inline-block h-6 w-11 align-middle select-none transition duration-200 ease-in">
        <input
            wire:model="{{ $setting }}"
            type="checkbox"
            name="{{ $setting }}"
            id="{{ $setting }}"
            class="toggle-checkbox absolute block outline-none border border-white bg-white appearance-none cursor-pointer p-0 h-5 w-5 mt-0.5 mx-0.5 rounded-full transition shadow transform ring-0 ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600" />
        <label for="{{ $setting }}" class="{{ (auth()->user()->dark_mode) ? 'toggle-dark-label' : 'toggle-label' }} block overflow-hidden h-6 w-11 rounded-full {{ (auth()->user()->dark_mode) ? 'bg-[#bc74f2]' : 'bg-gray-200' }} cursor-pointer transition"></label>
        <label for="{{ $setting }}" class="text-xs text-gray-700 sr-only">{{ $setting }}</label>
    </div>
</li>


<style>
    /* CHECKBOX TOGGLE SWITCH */
    /* @apply rules for documentation, these do not work as inline style */
    .toggle-checkbox:checked{
        @apply: right-0;
        right: 0;
        border-color: #ffffff;
    }
    .toggle-checkbox:after{
        content: "";
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 21px;
        border-radius: 100%;
        height: 21px;
        background-color: #ffffff;
        position: absolute;

    }
    .toggle-checkbox:checked + .toggle-label {
        @apply: bg-indigo-600;
        background-color: #4E46DD;
    }
    .toggle-checkbox:checked + .toggle-dark-label {
        @apply: bg-blue-800;
        background-color: #0C042E;
    }
</style>
