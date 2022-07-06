@aware(['item', 'content'])

<div aria-labelledby="modal-title" role="dialog" aria-modal="true" x-cloak x-show="edit" class="relative" style="z-index: 1000;"
     x-transition:enter="ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0">
    <div class="fixed inset-0 {{ (auth()->user()->dark_mode) ? 'bg-gray-800' : 'bg-gray-500' }} bg-opacity-75 transition-opacity"></div>
    <div class="fixed z-10 inset-0 overflow-y-auto">
        <div class="sm:flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} relative rounded-lg text-left overflow-hidden shadow-xl transform sm:transition-all sm:my-8 sm:max-w-lg sm:w-full">
                <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div>
                        <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                            Update {{ $content }}
                        </h2>
                        {{ $slot }}
                    </div>
                </div>
                <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#30363d]' : 'bg-gray-100' }} flex justify-between px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <div>
                        <button @click="edit = false" type="button" class="bg-white {{ (auth()->user()->dark_mode) ? 'sm:hover:bg-[#DCDCDC]' : 'sm:hover:bg-gray-50' }} mt-3 w-full inline-flex justify-center rounded-md border-none shadow-sm px-4 py-2 text-base font-medium text-gray-900 focus:outline-none outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm sm:transition-colors">
                            Cancel
                        </button>
                        <button @click="edit = false; notify = true" wire:click.prevent="updateData({{ $item }})" type="button" class="bg-white {{ (auth()->user()->dark_mode) ? 'sm:hover:bg-[#DCDCDC]' : 'sm:hover:bg-gray-50' }} w-full inline-flex justify-center rounded-md border-none shadow-sm px-4 py-2 text-base font-medium text-gray-900 focus:outline-none focus-within:outline-none sm:ml-3 sm:w-auto sm:text-sm sm:transition-colors">
                            Submit
                        </button>
                    </div>
                    <button wire:click.prevent="delete({{ $item }})" @click="edit = false; notify = true;" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border-none shadow-sm px-4 py-2 text-base font-medium text-white bg-red-600 sm:hover:bg-red-500 focus:outline-none outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm sm:transition-colors">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
