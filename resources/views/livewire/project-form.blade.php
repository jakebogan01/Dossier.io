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
                <div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div>
                            <div>
                                <h2 class="text-lg leading-6 font-medium text-gray-900">Update</h2>
                            </div>
                            <div class="mt-5">
                                <div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                    <label for="updateTitle" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Title</label>
                                    <input wire:model="updateTitle" type="text" name="updateTitle" id="updateTitle" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                </div>
                                @error('updateTitle') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>

                            <div class="mt-5">
                                <div class="relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Photo</label>
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 sm:hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5">
                                <div class="relative mt-1">
                                    <label for="updateDescription" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Description</label>
                                    <textarea wire:model="updateDescription" id="updateDescription" name="updateDescription" rows="3" class="shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required></textarea>
                                </div>
                                @error('updateDescription') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>

                            <div class="grid grid-cols-4 gap-6 mt-5">
                                <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                    <label for="updateCode" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Project</label>
                                    <div class="relative rounded-md shadow-sm">
                                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                            <span class="text-gray-500 sm:text-sm"> https:// </span>
                                        </div>
                                        <input wire:model="updateCode" type="text" name="updateCode" id="updateCode" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                    </div>
                                    @error('updateCode') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>

                                <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                    <label for="updateGithub" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">GitHub</label>
                                    <div class="relative rounded-md shadow-sm">
                                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                            <span class="text-gray-500 sm:text-sm"> https:// </span>
                                        </div>
                                        <input wire:model="updateGithub" type="text" name="updateGithub" id="updateGithub" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                    </div>
                                    @error('updateGithub') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button @click="edit = false; notify = true" wire:click.prevent="updateData({{ $item }})" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Deactivate</button>
                        <button @click="edit = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-end">
        <button wire:click.prevent="store()" @click="notify = true" type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium text-white bg-indigo-600 sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md transition-colors">
            Publish
        </button>
    </div>

    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 2xl:grid-cols-3 mt-10">
        <div class="col-span-2 bg-white p-2 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
            <section aria-labelledby="profile-information-title">
                <div class="bg-white sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 id="profile-information-title" class="text-lg leading-6 font-medium text-gray-900">Project Information</h2>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal projects with existing preview.</p>
                    </div>
                    <div class="px-4 py-5 sm:px-6">
                        <div class="bg-gray-100 p-4 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                            @if (count($projects) >= 1)
                                @foreach ($projects as $key => $project)
                                    @if ($key >= 10)
                                        @break
                                    @endif
                                        <div class="flex flex-col shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                                            <div class="flex-shrink-0">
                                                <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=320&h=320&q=80" alt="">
                                            </div>
                                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                                <div class="flex flex-col">
                                                    <div class="flex justify-between space-x-3">
                                                        <div class="flex space-x-3">
                                                            <a href="{{ $project->links['code'] }}" target="_blank" class="text-indigo-500 hover:opacity-75 transition-opacity">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"/>
                                                                </svg>
                                                            </a>
                                                            <a href="{{ $project->links['github'] }}" target="_blank" class="text-[#9E61E0] hover:opacity-75 transition-opacity">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" fill="#6466E9" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><path d="M345,291.6c9.6,0,18,4.8,25,14.5c7,9.6,10.6,21.5,10.6,35.6s-3.5,26-10.6,35.6c-7,9.6-15.4,14.5-25,14.5 c-10.4,0-19.1-4.8-26.2-14.5c-7-9.6-10.6-21.5-10.6-35.6s3.5-26,10.6-35.6C325.9,296.4,334.7,291.6,345,291.6 M470.8,161.4 c27.5,29.7,41.2,65.7,41.2,108c0,27.5-3.2,52.1-9.5,74c-6.3,21.9-14.3,39.7-23.9,53.4c-9.6,13.7-21.5,25.8-35.6,36.2 s-27.1,18-39,22.8c-11.9,4.8-25.4,8.5-40.6,11.1c-15.2,2.6-26.7,4.1-34.5,4.5c-7.8,0.4-16.1,0.6-25,0.6c-2.2,0-8.9,0.2-20,0.6 c-11.1,0.4-20.4,0.6-27.8,0.6s-16.7-0.2-27.8-0.6c-11.1-0.4-17.8-0.6-20-0.6c-8.9,0-17.3-0.2-25-0.6c-7.8-0.4-19.3-1.9-34.5-4.5 c-15.2-2.6-28.8-6.3-40.6-11.1C96.1,451,83.1,443.4,69,433s-26-22.4-35.6-36.2c-9.6-13.7-17.6-31.5-23.9-53.4 c-6.3-21.9-9.5-46.6-9.5-74c0-42.3,13.7-78.3,41.2-108c-3-1.5-3.2-16.3-0.6-44.5S49.3,62.7,59,39c34.1,3.7,76.4,23,126.9,57.9 c17.1-4.5,40.4-6.7,70.1-6.7c31.2,0,54.5,2.2,70.1,6.7c23-15.6,45.1-28.2,66.2-37.8s36.5-15.2,46.2-16.7L453,39 c9.6,23.7,15.8,49.7,18.4,77.9C474,145.1,473.8,159.9,470.8,161.4 M257.1,447.4c61.6,0,108.2-7.4,139.7-22.3s47.3-45.3,47.3-91.3 c0-26.7-10-49-30.1-66.8c-10.4-9.6-22.4-15.6-36.2-17.8c-13.7-2.2-34.7-2.2-62.9,0c-28.2,2.2-47.5,3.3-57.9,3.3H256h-1.1 c-11.9,0-27.3-0.7-46.2-2.2s-33.8-2.4-44.5-2.8c-10.8-0.4-22.4,0.9-35.1,3.9c-12.6,3-23,8.2-31.2,15.6   C78.7,284.2,69,306.5,69,333.9c0,46,15.6,76.4,46.7,91.3s77.5,22.3,139.1,22.3H257.1 M168.1,291.6c9.6,0,18,4.8,25,14.5   c7,9.6,10.6,21.5,10.6,35.6s-3.5,26-10.6,35.6c-7,9.6-15.4,14.5-25,14.5c-10.4,0-19.1-4.8-26.2-14.5c-7-9.6-10.6-21.5-10.6-35.6   s3.5-26,10.6-35.6C149,296.4,157.7,291.6,168.1,291.6"/></g></svg>
                                                            </a>
                                                        </div>

                                                        <div class="flex space-x-2">
                                                            <button wire:click.prevent="delete({{ $project->id }})" @click="notify = true" type="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-300 hover:text-red-400 cursor-pointer transition-colors" viewBox="0 0 20 20" fill="currentColor">
                                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                            <button wire:click.prevent="show({{ $project->id }})" @click="edit = true" type="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-300 hover:text-indigo-400 transition-all" viewBox="0 0 20 20" fill="currentColor">
                                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <p class="text-xl font-semibold text-gray-900">{{ $project->title ?: 'Title Needed' }}</p>
                                                        <p class="mt-3 text-base text-gray-500">{{ $project->description ?: 'Description Needed' }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                            @else
                                <div class="flex flex-col shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                                    <div class="flex-shrink-0">
                                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=320&h=320&q=80" alt="">
                                    </div>
                                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                        <div class="flex flex-col">
                                            <div class="flex justify-between space-x-3">
                                                <div class="flex space-x-3">
                                                    <a href="#" target="_blank" class="text-indigo-500 hover:opacity-75 transition-opacity">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"/>
                                                        </svg>
                                                    </a>
                                                    <a href="#" target="_blank" class="text-[#9E61E0] hover:opacity-75 transition-opacity">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" fill="#6466E9" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><path d="M345,291.6c9.6,0,18,4.8,25,14.5c7,9.6,10.6,21.5,10.6,35.6s-3.5,26-10.6,35.6c-7,9.6-15.4,14.5-25,14.5 c-10.4,0-19.1-4.8-26.2-14.5c-7-9.6-10.6-21.5-10.6-35.6s3.5-26,10.6-35.6C325.9,296.4,334.7,291.6,345,291.6 M470.8,161.4 c27.5,29.7,41.2,65.7,41.2,108c0,27.5-3.2,52.1-9.5,74c-6.3,21.9-14.3,39.7-23.9,53.4c-9.6,13.7-21.5,25.8-35.6,36.2 s-27.1,18-39,22.8c-11.9,4.8-25.4,8.5-40.6,11.1c-15.2,2.6-26.7,4.1-34.5,4.5c-7.8,0.4-16.1,0.6-25,0.6c-2.2,0-8.9,0.2-20,0.6 c-11.1,0.4-20.4,0.6-27.8,0.6s-16.7-0.2-27.8-0.6c-11.1-0.4-17.8-0.6-20-0.6c-8.9,0-17.3-0.2-25-0.6c-7.8-0.4-19.3-1.9-34.5-4.5 c-15.2-2.6-28.8-6.3-40.6-11.1C96.1,451,83.1,443.4,69,433s-26-22.4-35.6-36.2c-9.6-13.7-17.6-31.5-23.9-53.4 c-6.3-21.9-9.5-46.6-9.5-74c0-42.3,13.7-78.3,41.2-108c-3-1.5-3.2-16.3-0.6-44.5S49.3,62.7,59,39c34.1,3.7,76.4,23,126.9,57.9 c17.1-4.5,40.4-6.7,70.1-6.7c31.2,0,54.5,2.2,70.1,6.7c23-15.6,45.1-28.2,66.2-37.8s36.5-15.2,46.2-16.7L453,39 c9.6,23.7,15.8,49.7,18.4,77.9C474,145.1,473.8,159.9,470.8,161.4 M257.1,447.4c61.6,0,108.2-7.4,139.7-22.3s47.3-45.3,47.3-91.3 c0-26.7-10-49-30.1-66.8c-10.4-9.6-22.4-15.6-36.2-17.8c-13.7-2.2-34.7-2.2-62.9,0c-28.2,2.2-47.5,3.3-57.9,3.3H256h-1.1 c-11.9,0-27.3-0.7-46.2-2.2s-33.8-2.4-44.5-2.8c-10.8-0.4-22.4,0.9-35.1,3.9c-12.6,3-23,8.2-31.2,15.6   C78.7,284.2,69,306.5,69,333.9c0,46,15.6,76.4,46.7,91.3s77.5,22.3,139.1,22.3H257.1 M168.1,291.6c9.6,0,18,4.8,25,14.5   c7,9.6,10.6,21.5,10.6,35.6s-3.5,26-10.6,35.6c-7,9.6-15.4,14.5-25,14.5c-10.4,0-19.1-4.8-26.2-14.5c-7-9.6-10.6-21.5-10.6-35.6   s3.5-26,10.6-35.6C149,296.4,157.7,291.6,168.1,291.6"/></g></svg>
                                                    </a>
                                                </div>

                                                <div class="flex space-x-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-300 hover:text-red-400 cursor-pointer transition-colors" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-300 hover:text-indigo-400 transition-all" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <p class="text-xl font-semibold text-gray-900">Project 1 title</p>
                                                <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque doloremque est et eum eveniet fugiat fugit ipsam, natus perferendis quas, quidem, reprehenderit soluta vero.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        @unless ($projects->count() >= 6)
                            <div class="sm:col-span-2">
                                <div class="lg:col-span-9">
                                    <div class="pt-24">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <h2 class="text-lg leading-6 font-medium text-gray-900">Your Projects</h2>
                                                <p class="mt-1 text-sm text-gray-500">Upload your projects here.</p>
                                            </div>

                                            <button wire:click.prevent="add({{$i}})" type="button" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent text-white bg-indigo-600 sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" /></svg>
                                            </button>
                                        </div>

                                        <div class="mt-6 flex flex-col lg:flex-row">
                                            <div class="flex-grow space-y-14">
                                                <div>
                                                    <div class="mt-5">
                                                        <div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                            <label for="title" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Title</label>
                                                            <input wire:model="title.0" type="text" name="title" id="title" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                                        </div>
                                                        @error('title.0') <span class="text-danger error">{{ $message }}</span>@enderror
                                                    </div>

                                                    <div class="mt-5">
                                                        <div class="relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                            <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Photo</label>
                                                            <div class="space-y-1 text-center">
                                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                                <div class="flex text-sm text-gray-600">
                                                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 sm:hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                                        <span>Upload a file</span>
                                                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                                    </label>
                                                                    <p class="pl-1">or drag and drop</p>
                                                                </div>
                                                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-5">
                                                        <div class="relative mt-1">
                                                            <label for="description" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Description</label>
                                                            <textarea wire:model="description.0" id="description" name="description" rows="3" class="shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required></textarea>
                                                        </div>
                                                        @error('description.0') <span class="text-danger error">{{ $message }}</span>@enderror
                                                    </div>

                                                    <div class="grid grid-cols-4 gap-6 mt-5">
                                                        <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                            <label for="code" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Project</label>
                                                            <div class="relative rounded-md shadow-sm">
                                                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                                                    <span class="text-gray-500 sm:text-sm"> https:// </span>
                                                                </div>
                                                                <input wire:model="code.0" type="text" name="code" id="code" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                                            </div>
                                                            @error('code.0') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>

                                                        <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                            <label for="github" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">GitHub</label>
                                                            <div class="relative rounded-md shadow-sm">
                                                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                                                    <span class="text-gray-500 sm:text-sm"> https:// </span>
                                                                </div>
                                                                <input wire:model="github.0" type="text" name="github" id="github" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                                            </div>
                                                            @error('github.0') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($inputs as $key => $value)
                                                    <div>
                                                        <div class="flex justify-end">
                                                            <button wire:click.prevent="remove({{$key}})" type="button" class="border border-transparent text-indigo-300 sm:hover:text-indigo-600 focus:outline-none transition-colors">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                                            </button>
                                                        </div>

                                                        <div class="mt-5">
                                                            <div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                                <label for="title" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Title</label>
                                                                <input wire:model="title.{{ $value }}" type="text" name="title" id="title" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                                            </div>
                                                            @error('title.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>

                                                        <div class="mt-5">
                                                            <div class="relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                                <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Photo</label>
                                                                <div class="space-y-1 text-center">
                                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </svg>
                                                                    <div class="flex text-sm text-gray-600">
                                                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 sm:hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                                            <span>Upload a file</span>
                                                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                                        </label>
                                                                        <p class="pl-1">or drag and drop</p>
                                                                    </div>
                                                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-5">
                                                            <div class="relative mt-1">
                                                                <label for="description" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Description</label>
                                                                <textarea wire:model="description.{{ $value }}" id="description" name="description" rows="3" class="shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required></textarea>
                                                            </div>
                                                            @error('description.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>

                                                        <div class="grid grid-cols-4 gap-6 mt-5">
                                                            <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                                <label for="code" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Project</label>
                                                                <div class="relative rounded-md shadow-sm">
                                                                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                                                        <span class="text-gray-500 sm:text-sm"> https:// </span>
                                                                    </div>
                                                                    <input wire:model="code.{{ $value }}" type="text" name="code" id="code" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                                                </div>
                                                                @error('code.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                                                            </div>

                                                            <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                                <label for="github" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">GitHub</label>
                                                                <div class="relative rounded-md shadow-sm">
                                                                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                                                        <span class="text-gray-500 sm:text-sm"> https:// </span>
                                                                    </div>
                                                                    <input wire:model="github.{{ $value }}" type="text" name="github" id="github" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                                                </div>
                                                                @error('github.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endunless
                    </div>
                </div>
            </section>
        </div>
        <div class="col-span-2 2xl:col-span-1">
            <section aria-labelledby="activity-title" class="lg:col-start-3 lg:col-span-1">
                <div class="bg-white px-6 py-7 rounded-lg shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden sm:px-6">
                    <h2 id="activity-title" class="text-lg font-medium text-gray-900">Recent Activity</h2>

                    <!-- Activity Feed -->
                    <div class="mt-6 flow-root">
                        <ul role="list" class="-mb-8">
                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3 sm:hover:bg-gray-100 cursor-pointer">
                                        <div>
                                              <span class="h-8 w-8 rounded-full bg-[#8936d6] flex items-center justify-center ring-8 ring-white">
                                                <!-- Heroicon name: solid/thumb-up -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                                </svg>
                                              </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Updated your <a href="#" class="font-medium text-gray-900">Profile Settings</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500 pr-1">
                                                <time datetime="2020-09-20">Sep 20</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3 sm:hover:bg-gray-100 cursor-pointer">
                                        <div>
                                              <span class="h-8 w-8 rounded-full bg-[#8936d6] flex items-center justify-center ring-8 ring-white">
                                                <!-- Heroicon name: solid/thumb-up -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                                </svg>
                                              </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Updated your <a href="#" class="font-medium text-gray-900">Contact Settings</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500 pr-1">
                                                <time datetime="2020-09-22">Sep 22</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3 sm:hover:bg-gray-100 cursor-pointer">
                                        <div>
                                              <span class="h-8 w-8 rounded-full bg-[#8936d6] flex items-center justify-center ring-8 ring-white">
                                                <!-- Heroicon name: solid/thumb-up -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                                </svg>
                                              </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Updated your <a href="#" class="font-medium text-gray-900">Contact Settings</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500 pr-1">
                                                <time datetime="2020-09-28">Sep 28</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3 sm:hover:bg-gray-100 cursor-pointer">
                                        <div>
                                              <span class="h-8 w-8 rounded-full bg-[#8936d6] flex items-center justify-center ring-8 ring-white">
                                                <!-- Heroicon name: solid/thumb-up -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                                </svg>
                                              </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Updated your <a href="#" class="font-medium text-gray-900">Experience Settings</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500 pr-1">
                                                <time datetime="2020-09-30">Sep 30</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <div class="relative flex space-x-3 sm:hover:bg-gray-100 cursor-pointer">
                                        <div>
                                              <span class="h-8 w-8 rounded-full bg-[#8936d6] flex items-center justify-center ring-8 ring-white">
                                                <!-- Heroicon name: solid/thumb-up -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                                </svg>
                                              </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Updated your <a href="#" class="font-medium text-gray-900">Profile Settings</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500 pr-1">
                                                <time datetime="2020-10-04">Oct 4</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 flex flex-col justify-stretch">
                        <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-md text-white bg-indigo-600 sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">See all</button>
                    </div>
                </div>
            </section>
        </div>
    </div>

</form>


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
</style>
