<form action="#" x-data="{ edit: false, notify: @entangle($toggleWarning) }">
    @csrf

    <div aria-live="assertive" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 transform transition-all" x-cloak x-show="notify" style="z-index: 100;">
        <div class="w-full flex flex-col items-center space-y-4 sm:items-end transform transition-all"
             x-transition:enter="transform ease-out duration-300 transition"
             x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
             x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
             x-transition:leave="transition ease-in duration-100"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
            <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                            <p class="text-sm font-medium text-gray-900">Successfully updated!</p>
                            <p class="mt-1 text-sm text-gray-500">Great</p>
                        </div>
                        <div class="ml-4 flex-shrink-0 flex">
                            <button @click="notify = false" type="button" class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="sr-only">Close</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative" style="z-index: 1000;" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-cloak x-show="edit"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                <div class="relative {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
                    <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div>
                            <div>
                                <h2 class="text-lg leading-6 font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Update</h2>
                            </div>
                            <div class="mt-5">
                                <div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                    <label for="updateTitle" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Title</label>
                                    <input wire:model="updateTitle" type="text" name="updateTitle" id="updateTitle" class="block w-full border-0 p-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                </div>
                                @error('updateTitle') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>

                            <div class="mt-5">
                                <div class="relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} text-xs font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Photo</label>
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-600' }}">
                                            <label for="file-upload" class="relative cursor-pointer {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} rounded-md font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-600' }} sm:hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5">
                                <div class="relative mt-1">
                                    <label for="updateDescription" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Description</label>
                                    <textarea wire:model="updateDescription" id="updateDescription" name="updateDescription" rows="3" class="shadow-sm {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required></textarea>
                                </div>
                                @error('updateDescription') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>

                            <div class="grid grid-cols-4 gap-6 mt-5">
                                <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                    <label for="updateCode" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Project</label>
                                    <div class="relative rounded-md shadow-sm">
                                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                            <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm"> https:// </span>
                                        </div>
                                        <input wire:model="updateCode" type="text" name="updateCode" id="updateCode" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                    </div>
                                    @error('updateCode') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>

                                <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                    <label for="updateGithub" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">GitHub</label>
                                    <div class="relative rounded-md shadow-sm">
                                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                            <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm"> https:// </span>
                                        </div>
                                        <input wire:model="updateGithub" type="text" name="updateGithub" id="updateGithub" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                    </div>
                                    @error('updateGithub') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>

                            <div class="py-4 flex items-center justify-between">
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}" id="privacy-option-1-label">Make project public</p>
                                    <p class="text-sm {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}" id="privacy-option-1-description">Allow this project to be seen by the public.</p>
                                </div>
                                <div class="relative inline-block h-6 w-11 align-middle select-none transition duration-200 ease-in">
                                    <input
                                        wire:model="make_public"
                                        type="checkbox"
                                        name="make_public"
                                        id="make_public"
                                        class="toggle-checkbox absolute block outline-none border border-white bg-white appearance-none cursor-pointer p-0 h-5 w-5 mt-0.5 mx-0.5 rounded-full transition shadow transform ring-0 ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600" />
                                    <label for="make_public" class="{{ (auth()->user()->dark_mode) ? 'toggle-dark-label' : 'toggle-label' }} block overflow-hidden h-6 w-11 rounded-full {{ (auth()->user()->dark_mode) ? 'bg-[#bc74f2]' : 'bg-gray-200' }} cursor-pointer transition"></label>
                                    <label for="make_public" class="text-xs text-gray-700 sr-only">make_public</label>
                                </div>
                            </div>


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
                        </div>
                    </div>
                    <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#310B5C]' : 'bg-gray-50' }} px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button @click="edit = false; notify = true" wire:click.prevent="updateData({{ $item }})" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Deactivate</button>
                        <button @click="edit = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(count($currentUser->projects) >= 1)
        <div class="mx-auto mt-6">
            <div class="flex flex-col mt-2">
                <div class="relative align-middle min-w-full overflow-x-auto overflow-hidden sm:rounded-lg shadow-md sm:hover:shadow-sm sm:transition-all duration-300 ease-linear">
                    <table class="min-w-full divide-y {{ ($currentUser->dark_mode) ? 'divide-[#a95ae6]' : 'divide-gray-300' }}">
                        <thead class="{{ ($currentUser->dark_mode) ? 'bg-[#360760]' : 'bg-gray-50' }}">
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold {{ ($currentUser->dark_mode) ? 'text-white' : 'text-gray-900' }} sm:pl-6">Title</th>
                            @if($currentUser->profile->settings['track_likes'])
                                <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold {{ ($currentUser->dark_mode) ? 'text-white' : 'text-gray-900' }} sm:table-cell">Likes</th>
                            @endif
                            <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold {{ ($currentUser->dark_mode) ? 'text-white' : 'text-gray-900' }} lg:table-cell">Status</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold {{ ($currentUser->dark_mode) ? 'text-white' : 'text-gray-900' }}">Created</th>
                            <th scope="col" class="pl-3 pr-4 sm:pr-6 py-3.5 text-left text-sm font-semibold {{ ($currentUser->dark_mode) ? 'text-white' : 'text-gray-900' }}">Edit</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y {{ ($currentUser->dark_mode) ? 'divide-[#a95ae6]' : 'divide-gray-200' }} {{ ($currentUser->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }}">
                            @foreach($currentUser->projects as $project)
                                <tr class="{{ ($currentUser->dark_mode) ? 'hover:bg-[#a354de]' : 'hover:bg-gray-50' }} transition-colors group">
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6 border-l-2 border-transparent group-hover:border-[#6B158C7F] transition-colors">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 flex-shrink-0">
                                                <img class="h-10 w-10 rounded-full" src="https://nickjanetakis.com/assets/blog/cards/how-to-start-and-finish-any-web-app-project-678900795cfd6d4fa60e3655dd62ae9f61ef5e14b62ca62050e817e43e861f11.jpg" alt="">
                                            </div>
                                            <div class="hidden sm:block ml-4">
                                                <div class="font-medium {{ ($currentUser->dark_mode) ? 'text-white' : 'text-gray-900' }}">{{ $project->title }}</div>
                                                <a href="{{ $project->links['code'] }}" class="{{ ($currentUser->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} hover:text-indigo-500">View Project</a>
                                            </div>
                                        </div>
                                    </td>
                                    @if($currentUser->profile->settings['track_likes'])
                                        <td class="hidden whitespace-nowrap px-3 py-4 text-sm {{ ($currentUser->dark_mode) ? 'text-white' : 'text-gray-900' }} sm:table-cell">
                                            {{ number_format($project->total_likes) ?: 0 }}
                                        </td>
                                    @endif
                                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                        <div class="rounded-full w-2 h-2 border-2 {{ $project->public ? 'bg-green-400 border-green-500' : 'bg-red-400 border-red-500' }}"></div>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm {{ ($currentUser->dark_mode) ? 'text-white' : 'text-gray-500' }}">
                                        {{ $project->created_at->format('F d, Y') }}
                                    </td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <button wire:click.prevent="editProject({{ $project->id }})" @click="edit = true"  type="button" class="flex {{ ($currentUser->dark_mode) ? 'text-white' : 'text-[#6B158C7F]' }} {{ ($currentUser->dark_mode) ? 'sm:hover:text-indigo-600' : 'sm:hover:text-indigo-400' }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                            </svg>
                                            <span class="sr-only">, Lindsay Walton</span>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
</form>
