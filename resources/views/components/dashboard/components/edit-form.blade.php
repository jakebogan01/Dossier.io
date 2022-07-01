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
        <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#353B42]' : 'bg-white' }} relative rounded-lg text-left overflow-hidden shadow-xl transform sm:transition-all sm:my-8 sm:max-w-lg sm:w-full">
                <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#353B42]' : 'bg-white' }} px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div>
                        <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                            Update {{ $content }}
                        </h2>
                        <div class="mt-5">
                            <div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                <label for="updateTitle" class="{{ (auth()->user()->dark_mode) ? 'bg-[#353B42] text-white' : 'bg-white text-gray-900' }} absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium">
                                    Title
                                </label>
                                <input wire:model="updateTitle" type="text" name="updateTitle" id="updateTitle" class="{{ (auth()->user()->dark_mode) ? 'bg-[#353B42] text-white' : 'bg-white text-gray-900' }} block w-full border-0 p-0 placeholder-gray-500 focus:ring-0 sm:text-sm">
                            </div>
                            @error('updateTitle')<span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="mt-5">
                            <div class="relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <label for="name" class="{{ (auth()->user()->dark_mode) ? 'bg-[#353B42] text-white' : 'bg-white text-gray-900' }} absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium">
                                    Photo
                                </label>
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                    <div class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-600' }} flex text-sm">
                                        <label for="file-upload" class="{{ (auth()->user()->dark_mode) ? 'bg-[#353B42] text-white sm:hover:text-[#4FAE9D]' : 'bg-white text-indigo-600 sm:hover:text-indigo-500' }} relative cursor-pointer rounded-md font-medium focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>
                                                Upload a file
                                            </span>
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">
                                            or drag and drop
                                        </p>
                                    </div>
                                    <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-xs">
                                        PNG, JPG, GIF up to 10MB
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="relative mt-1">
                                <label for="updateDescription" class="{{ (auth()->user()->dark_mode) ? 'bg-[#353B42] text-white' : 'bg-white text-gray-900' }} absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium">
                                    Description
                                </label>
                                <textarea wire:model="updateDescription" id="updateDescription" name="updateDescription" rows="3" class="{{ (auth()->user()->dark_mode) ? 'bg-[#353B42] text-white' : 'bg-white text-gray-900' }} shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                            </div>
                            @error('updateDescription') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="grid grid-cols-4 gap-6 mt-5">
                            <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                <label for="updateCode" class="{{ (auth()->user()->dark_mode) ? 'bg-[#353B42] text-white' : 'bg-white text-gray-900' }} absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium">
                                    Project
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                        <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm">
                                            https://
                                        </span>
                                    </div>
                                    <input wire:model="updateCode" type="text" name="updateCode" id="updateCode" class="{{ (auth()->user()->dark_mode) ? 'bg-[#353B42] text-white' : 'bg-white text-gray-900' }} block w-full border-0 pl-16 sm:pl-[48px] py-0 placeholder-gray-500 focus:ring-0 sm:text-sm">
                                </div>
                                @error('updateCode') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                <label for="updateGithub" class="{{ (auth()->user()->dark_mode) ? 'bg-[#353B42] text-white' : 'bg-white text-gray-900' }} absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium">
                                    GitHub
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                        <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm">
                                            https://
                                        </span>
                                    </div>
                                    <input wire:model="updateGithub" type="text" name="updateGithub" id="updateGithub" class="{{ (auth()->user()->dark_mode) ? 'bg-[#353B42] text-white' : 'bg-white text-gray-900' }} block w-full border-0 pl-16 sm:pl-[48px] py-0 placeholder-gray-500 focus:ring-0 sm:text-sm">
                                </div>
                                @error('updateGithub') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="pb-4 pt-8 flex items-center justify-between">
                            <div class="flex flex-col">
                                <p class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-sm font-medium" id="privacy-option-1-label">
                                    Make project public
                                </p>
                                <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-sm" id="privacy-option-1-description">
                                    Allow this project to be seen by the public.
                                </p>
                            </div>
                            <div class="relative inline-block h-6 w-11 align-middle select-none sm:transition duration-200 ease-in">
                                <input wire:model="make_public" type="checkbox" name="make_public" id="make_public" class="toggle-checkbox absolute block outline-none border border-white bg-white appearance-none cursor-pointer p-0 h-5 w-5 mt-0.5 mx-0.5 rounded-full sm:transition shadow transform ring-0 ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white" />
                                <label for="make_public" class="{{ (auth()->user()->dark_mode) ? 'toggle-dark-label bg-black' : 'toggle-label bg-gray-200' }} block overflow-hidden h-6 w-11 rounded-full cursor-pointer sm:transition"></label>
                                <label for="make_public" class="text-xs text-gray-700 sr-only">
                                    make_public
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#202124]' : 'bg-gray-100' }} px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button @click="edit = false; notify = true" wire:click.prevent="updateData({{ $item }})" type="button" class="w-full inline-flex justify-center rounded-md border-none shadow-sm px-4 py-2 bg-white {{ (auth()->user()->dark_mode) ? 'sm:hover:bg-[#DCDCDC]' : 'sm:hover:bg-gray-50' }} text-base font-medium text-gray-900 focus:outline-none focus-within:outline-none sm:ml-3 sm:w-auto sm:text-sm sm:transition-colors">
                        Submit
                    </button>
                    <button @click="edit = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border-none shadow-sm px-4 py-2 text-base font-medium text-white bg-red-600 sm:hover:bg-red-500 focus:outline-none outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm sm:transition-colors">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
