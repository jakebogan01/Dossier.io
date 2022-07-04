@aware(['data', 'image'])

<li x-data="{ settings: false }" @click.away="settings = false" @close.stop="settings = false" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D]' : 'bg-gray-300' }} col-span-1 shadow-md rounded-md relative flex items-end h-[250px] bg-no-repeat bg-center bg-cover overflow-hidden group" role="option" style="{{ ($image) ? "background-image: url('$image')" : '' }}">
    {{ $slot }}
    <div class="relative flex-1 transform translate-y-6 sm:group-hover:translate-y-0 transition-transform">
        <div class="px-2 sm:px-0"
             x-cloak x-show="settings"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 translate-y-1"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 translate-y-1">
            <div class="relative ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="text-white bg-black bg-opacity-30 flex justify-end space-x-4">
                    <button wire:click.prevent="show({{ $data->id }})" @click="edit = true; settings = false" type="button" class="sm:hover:text-[#4FAE9D] py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" /></svg>
                    </button>
                    <button wire:click.prevent="delete({{ $data->id }})" @click="notify = true; settings = false" type="button" class="sm:hover:text-red-300 pr-4 py-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex bg-white">
            <div class="flex-1 px-4 py-2 text-sm cursor-default">
                <span class="{{ (auth()->user()->dark_mode) ? 'text-gray-800' : 'text-[#993BCE]' }} font-bold">
                    {{ $data->title ?: 'Title Needed' }}
                </span>
                <span class=" block text-gray-500 pt-2 line-clamp-1">
                    {{ $data->description ?: 'Description Needed' }}
                </span>
            </div>
            <div class="relative flex-shrink-0 pr-2">
                <button @click="settings = !settings" type="button" class="border-none outline-none w-8 mt-2 inline-flex items-center justify-center text-gray-400 bg-transparent sm:hover:text-gray-500 focus:outline-none focus:ring-0 focus:ring-offset-2 focus:ring-transparent">
                    <span class="sr-only">
                        Open options
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" /></svg>
                </button>
            </div>
        </div>
    </div>
</li>
