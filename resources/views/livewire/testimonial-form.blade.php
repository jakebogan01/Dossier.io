{{--<form action="#" enctype="multipart/form-data" x-data="{ edit: false, notify: @entangle($toggleWarning) }">--}}
{{--    @csrf--}}

{{--    <div aria-live="assertive" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 transform transition-all" x-cloak x-show="notify" style="z-index: 100;">--}}
{{--        <div class="w-full flex flex-col items-center space-y-4 sm:items-end transform transition-all"--}}
{{--             x-transition:enter="transform ease-out duration-300 transition"--}}
{{--             x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"--}}
{{--             x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"--}}
{{--             x-transition:leave="transition ease-in duration-100"--}}
{{--             x-transition:leave-start="opacity-100"--}}
{{--             x-transition:leave-end="opacity-0">--}}
{{--            <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">--}}
{{--                <div class="p-4">--}}
{{--                    <div class="flex items-start">--}}
{{--                        <div class="flex-shrink-0">--}}
{{--                            <svg class="h-6 w-6 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                        <div class="ml-3 w-0 flex-1 pt-0.5">--}}
{{--                            <p class="text-sm font-medium text-gray-900">Successfully updated!</p>--}}
{{--                            <p class="mt-1 text-sm text-gray-500">Great</p>--}}
{{--                        </div>--}}
{{--                        <div class="ml-4 flex-shrink-0 flex">--}}
{{--                            <button @click="notify = false" type="button" class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                                <span class="sr-only">Close</span>--}}
{{--                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--                                </svg>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="relative" style="z-index: 1000;" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-cloak x-show="edit"--}}
{{--         x-transition:enter="ease-out duration-300"--}}
{{--         x-transition:enter-start="opacity-0"--}}
{{--         x-transition:enter-end="opacity-100"--}}
{{--         x-transition:leave="ease-in duration-200"--}}
{{--         x-transition:leave-start="opacity-100"--}}
{{--         x-transition:leave-end="opacity-0">--}}
{{--        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>--}}

{{--        <div class="fixed z-10 inset-0 overflow-y-auto">--}}
{{--            <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0"--}}
{{--                 x-transition:enter="ease-out duration-300"--}}
{{--                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"--}}
{{--                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"--}}
{{--                 x-transition:leave="ease-in duration-200"--}}
{{--                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"--}}
{{--                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">--}}
{{--                <div class="relative {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">--}}
{{--                    <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} px-4 pt-5 pb-4 sm:p-6 sm:pb-4">--}}
{{--                        <div>--}}
{{--                            <div>--}}
{{--                                <h2 class="text-lg leading-6 font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Update</h2>--}}
{{--                            </div>--}}
{{--                            <div class="grid grid-cols-1 gap-6 mt-5">--}}
{{--                                <div>--}}
{{--                                    <div class="relative col-span-1  border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">--}}
{{--                                        <label for="updateTitle" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Title</label>--}}
{{--                                        <input wire:model="updateTitle" type="text" name="updateTitle" id="updateTitle" class="block w-full border-0 p-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>--}}
{{--                                    </div>--}}
{{--                                    @error('updateTitle') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                                </div>--}}

{{--                                <div>--}}
{{--                                    <div class="relative col-span-1  border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">--}}
{{--                                        <label for="updateJobPosition" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Position</label>--}}
{{--                                        <input wire:model="updateJobPosition" type="text" name="updateJobPosition" id="updateJobPosition" class="block w-full border-0 p-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>--}}
{{--                                    </div>--}}
{{--                                    @error('updateJobPosition') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="mt-5">--}}
{{--                                <div class="relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">--}}
{{--                                    <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} text-xs font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Photo</label>--}}
{{--                                    <div class="space-y-1 text-center">--}}
{{--                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">--}}
{{--                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="flex text-sm {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-600' }}">--}}
{{--                                            <label for="updateTestimonialPicture" class="relative cursor-pointer {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} rounded-md font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-600' }} sm:hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">--}}
{{--                                                <span>Upload a file</span>--}}
{{--                                                <input wire:model="updateTestimonialPicture" id="updateTestimonialPicture" name="updateTestimonialPicture" type="file" class="sr-only">--}}
{{--                                            </label>--}}
{{--                                            <p class="pl-1">or drag and drop</p>--}}
{{--                                        </div>--}}
{{--                                        <p class="text-xs {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}">PNG, JPG, GIF up to 10MB</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="mt-5">--}}
{{--                                <div class="relative mt-1">--}}
{{--                                    <label for="updateDescription" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Description</label>--}}
{{--                                    <textarea wire:model="updateDescription" id="updateDescription" name="updateDescription" rows="3" class="shadow-sm {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required></textarea>--}}
{{--                                </div>--}}
{{--                                @error('updateDescription') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                            </div>--}}

{{--                            <div class="grid grid-cols-4 gap-6 mt-5">--}}
{{--                                <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">--}}
{{--                                    <label for="updateFacebook" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Project</label>--}}
{{--                                    <div class="relative rounded-md shadow-sm">--}}
{{--                                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">--}}
{{--                                            <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm"> https:// </span>--}}
{{--                                        </div>--}}
{{--                                        <input wire:model="updateFacebook" type="text" name="updateFacebook" id="updateFacebook" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>--}}
{{--                                    </div>--}}
{{--                                    @error('updateFacebook') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                                </div>--}}

{{--                                <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">--}}
{{--                                    <label for="updateLinkedin" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">GitHub</label>--}}
{{--                                    <div class="relative rounded-md shadow-sm">--}}
{{--                                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">--}}
{{--                                            <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm"> https:// </span>--}}
{{--                                        </div>--}}
{{--                                        <input wire:model="updateLinkedin" type="text" name="updateLinkedin" id="updateLinkedin" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>--}}
{{--                                    </div>--}}
{{--                                    @error('updateLinkedin') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#310B5C]' : 'bg-gray-50' }} px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">--}}
{{--                        <button @click="edit = false; notify = true" wire:click.prevent="updateData({{ $item }})" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Deactivate</button>--}}
{{--                        <button @click="edit = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 2xl:grid-cols-3 mt-8">--}}
{{--        <div class="col-span-2 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} p-2 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">--}}
{{--            <section aria-labelledby="profile-information-title">--}}
{{--                <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} sm:rounded-lg">--}}
{{--                    <div class="px-4 py-5 sm:px-6">--}}
{{--                        <div>--}}
{{--                            <h2 id="profile-information-title" class="text-lg leading-6 font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Testimonials Information</h2>--}}
{{--                            <p class="mt-1 max-w-2xl text-sm {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}">Professional testimonials with existing preview.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="px-4 py-5 sm:px-6">--}}
{{--                        <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#310B5C]' : 'bg-gray-100' }} p-4 max-w-lg mx-auto grid gap-5 lg:grid-cols-2 lg:max-w-none shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">--}}
{{--                            @if (count($testimonials) >= 1)--}}
{{--                                @foreach ($testimonials as $key => $testimonial)--}}
{{--                                    @if ($key >= 10)--}}
{{--                                        @break--}}
{{--                                    @endif--}}
{{--                                    <div class="flex flex-col shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">--}}
{{--                                        <div class="flex-shrink-0">--}}
{{--                                            @if(!is_null($testimonial->profile_photo_path))--}}
{{--                                                <img class="h-48 w-full object-cover" src="{{ $testimonial->profile_photo_path }}" alt="">--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">--}}
{{--                                            <div class="flex flex-col">--}}
{{--                                                <div class="flex justify-between space-x-3">--}}
{{--                                                    <div class="flex space-x-3">--}}
{{--                                                        <a href="{{ $testimonial->links['facebook'] }}" target="_blank" class="text-indigo-500 hover:opacity-75 transition-opacity">--}}
{{--                                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path></svg>--}}
{{--                                                        </a>--}}
{{--                                                        <a href="{{ $testimonial->links['linkedin'] }}" target="_blank" class="text-indigo-500 hover:opacity-75 transition-opacity">--}}
{{--                                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path></svg>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="flex space-x-2">--}}
{{--                                                        <button wire:click.prevent="delete({{ $testimonial->id }})" @click="notify = true" type="button">--}}
{{--                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-300 hover:text-red-400 cursor-pointer transition-colors" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />--}}
{{--                                                            </svg>--}}
{{--                                                        </button>--}}
{{--                                                        <button wire:click.prevent="show({{ $testimonial->id }})" @click="edit = true" type="button">--}}
{{--                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-300 hover:text-indigo-400 transition-all" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />--}}
{{--                                                            </svg>--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="mt-2">--}}
{{--                                                    <p class="text-xl font-semibold text-gray-900">{{ $testimonial->title ?: 'Title Needed' }}</p>--}}
{{--                                                    <p class="text-sm font-semibold text-gray-900 mt-1">{{ $testimonial->job_position ?: 'Job Position Needed' }}</p>--}}
{{--                                                    <p class="mt-3 text-base text-gray-500">{{ $testimonial->description ?: 'Description Needed' }}</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            @else--}}
{{--                                <div class="flex flex-col shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <img class="h-48 w-full object-cover" src="https://www.smartheadshots.com/blog/photos/actor-headshots-1283.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">--}}
{{--                                        <div class="flex flex-col">--}}
{{--                                            <div class="space-x-3">--}}
{{--                                                <div class="flex space-x-3">--}}
{{--                                                    <a href="#" target="_blank" class="text-indigo-500 hover:opacity-75 transition-opacity">--}}
{{--                                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path></svg>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="#" target="_blank" class="text-indigo-500 hover:opacity-75 transition-opacity">--}}
{{--                                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path></svg>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="mt-2">--}}
{{--                                                <p class="text-xl font-semibold text-gray-900">Jamie Jackson</p>--}}
{{--                                                <p class="text-sm font-semibold text-gray-900 mt-1">CEO of Walmart</p>--}}
{{--                                                <p class="mt-3 text-base text-gray-500">Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        @unless ($testimonials->count() >= 4)--}}
{{--                        <div class="sm:col-span-2">--}}
{{--                            <div class="lg:col-span-9">--}}
{{--                                <div class="pt-24">--}}
{{--                                    <div class="flex justify-between items-center">--}}
{{--                                        <div>--}}
{{--                                            <h2 class="text-lg leading-6 font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Testimonials</h2>--}}
{{--                                            <p class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}">Provide any professional testimonies to your portfolio.</p>--}}
{{--                                        </div>--}}

{{--                                        <button wire:click.prevent="store()" @click="notify = true" aria-label="Create Project" type="submit" class="inline-flex justify-center items-center h-10 px-4 border border-transparent text-sm font-medium text-white {{ (auth()->user()->dark_mode) ? 'bg-indigo-500' : 'bg-indigo-600' }} sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md transition-colors">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" /></svg>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}

{{--                                    <div class="mt-6 flex flex-col lg:flex-row">--}}
{{--                                        <div class="flex-grow space-y-28">--}}
{{--                                            <div>--}}
{{--                                                <div class="grid grid-cols-4 gap-6 mt-5">--}}
{{--                                                    <div>--}}
{{--                                                        <div class="relative col-span-4 sm:col-span-2  border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">--}}
{{--                                                            <label for="title" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Title</label>--}}
{{--                                                            <input wire:model="title" type="text" name="title" id="title" class="block w-full border-0 p-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>--}}
{{--                                                        </div>--}}
{{--                                                        @error('title') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                                                    </div>--}}

{{--                                                    <div>--}}
{{--                                                        <div class="relative col-span-4 sm:col-span-2  border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">--}}
{{--                                                            <label for="job_position" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Position</label>--}}
{{--                                                            <input wire:model="job_position" type="text" name="job_position" id="job_position" class="block w-full border-0 p-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>--}}
{{--                                                        </div>--}}
{{--                                                        @error('job_position') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="mt-5">--}}
{{--                                                    <div class="relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">--}}
{{--                                                        <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} text-xs font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Photo</label>--}}
{{--                                                        <div class="space-y-1 text-center">--}}
{{--                                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">--}}
{{--                                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                                            </svg>--}}
{{--                                                            <div class="flex text-sm {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-600' }}">--}}
{{--                                                                <label for="testimonial_picture" class="relative cursor-pointer {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} rounded-md font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-600' }} sm:hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">--}}
{{--                                                                    <span>Upload a file</span>--}}
{{--                                                                    <input wire:model="testimonial_picture" id="testimonial_picture" name="testimonial_picture" type="file" class="sr-only">--}}
{{--                                                                </label>--}}
{{--                                                                <p class="pl-1">or drag and drop</p>--}}
{{--                                                            </div>--}}
{{--                                                            <p class="text-xs {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}">PNG, JPG, GIF up to 10MB</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="mt-5">--}}
{{--                                                    <div class="relative mt-1">--}}
{{--                                                        <label for="description" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Description</label>--}}
{{--                                                        <textarea wire:model="description" id="description" name="description" rows="3" class="shadow-sm {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required></textarea>--}}
{{--                                                    </div>--}}
{{--                                                    @error('description') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                                                </div>--}}

{{--                                                <div class="grid grid-cols-4 gap-6 mt-5">--}}
{{--                                                    <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">--}}
{{--                                                        <label for="facebook" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Project</label>--}}
{{--                                                        <div class="relative rounded-md shadow-sm">--}}
{{--                                                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">--}}
{{--                                                                <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm"> https:// </span>--}}
{{--                                                            </div>--}}
{{--                                                            <input wire:model="facebook" type="text" name="facebook" id="facebook" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>--}}
{{--                                                        </div>--}}
{{--                                                        @error('facebook') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                                                    </div>--}}

{{--                                                    <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">--}}
{{--                                                        <label for="linkedin" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">GitHub</label>--}}
{{--                                                        <div class="relative rounded-md shadow-sm">--}}
{{--                                                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">--}}
{{--                                                                <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm"> https:// </span>--}}
{{--                                                            </div>--}}
{{--                                                            <input wire:model="linkedin" type="text" name="linkedin" id="linkedin" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>--}}
{{--                                                        </div>--}}
{{--                                                        @error('linkedin') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endunless--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>--}}
{{--    </div>--}}

{{--</form>--}}

























<form action="#" enctype="multipart/form-data" x-data="{ edit: false, notify: @entangle($toggleWarning) }">
    @csrf

    <x-dashboard.components.notification :message="$message"></x-dashboard.components.notification>

    <x-dashboard.components.edit-form :item="$item" content="Project">
        <div class="mt-10">
            <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                <label for="updateTitle" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                    Title
                </label>
                <input wire:model="updateTitle" type="text" name="updateTitle" id="updateTitle" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm" required>
            </div>
            @error('updateTitle') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }}">
            <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                <label for="updateJobPosition" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                    Position
                </label>
                <input wire:model="updateJobPosition" type="text" name="updateJobPosition" id="updateJobPosition" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm" required>
            </div>
            @error('updateJobPosition') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }}">
            <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent' : 'bg-transparent border-gray-300' }} relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <label for="updateTestimonialPicture" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                    Photo
                </label>
                <div class="space-y-1 text-center">
                    <div class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-600' }} flex text-sm">
                        <label for="updateTestimonialPicture" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white sm:hover:text-[#4FAE9D]' : 'bg-white text-indigo-600 sm:hover:text-indigo-500' }} relative cursor-pointer rounded-md font-medium focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                            <span>
                                Upload a file
                            </span>
                            <input wire:model="updateTestimonialPicture" id="updateTestimonialPicture" name="updateTestimonialPicture" type="file" class="sr-only">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }}">
            <div class="relative mt-1">
                <label for="updateDescription" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                    Description
                </label>
                <textarea wire:model="updateDescription" id="updateDescription" name="updateDescription" rows="5" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent text-white' : 'bg-white border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600 text-gray-900' }} shadow-sm mt-1 block w-full sm:text-sm border rounded-md"></textarea>
            </div>
            @error('updateDescription') <span class="text-danger error">{{ $message }}</span>@enderror
        </div>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }} grid grid-cols-4 gap-6">
            <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} pl-3 relative col-span-4 sm:col-span-2 border rounded-md shadow-sm focus-within:ring-1">
                <label for="updateFacebook" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                    Facebook
                </label>
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                        <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm">
                            https://
                        </span>
                    </div>
                    <input wire:model="updateFacebook" type="text" name="updateFacebook" id="updateFacebook" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-transparent text-gray-900' }} block w-full border-0 pl-16 sm:pl-[48px] px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm">
                </div>
                @error('updateFacebook') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} pl-3 relative col-span-4 sm:col-span-2 border rounded-md shadow-sm focus-within:ring-1">
                <label for="updateLinkedin" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                    Linkedin
                </label>
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                        <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm">
                            https://
                        </span>
                    </div>
                    <input wire:model="updateLinkedin" type="text" name="updateLinkedin" id="updateLinkedin" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-transparent text-gray-900' }} block w-full border-0 pl-16 sm:pl-[48px] px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm">
                </div>
                @error('updateLinkedin') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
    </x-dashboard.components.edit-form>

    <section class="grid grid-cols-1 gap-10 md:grid-cols-2 2xl:grid-cols-3 mt-8">
        <div class="col-span-2 {{ (!count($testimonials) >= 1) ?: 'space-y-10' }}">
            <div aria-labelledby="profile with live preview" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                @if (count($testimonials) >= 1)
                    <ul role="list" class="grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-2 p-4">
                        @foreach ($testimonials as $key => $testimonial)
                            @if ($key >= 4)
                                @break
                            @endif
                                <li x-data="{ settings: false }" @click.away="settings = false" @close.stop="settings = false" class="pb-4 pt-2 px-6 bg-[#4FAE9D] text-center rounded-lg xl:text-left">
                                    <div class="flex justify-end h-[36px]">
                                        <div class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-300' }} flex justify-end space-x-6"
                                             x-cloak x-show="settings"
                                             x-transition:enter="transition ease-out duration-200"
                                             x-transition:enter-start="opacity-0 translate-y-1"
                                             x-transition:enter-end="opacity-100 translate-y-0"
                                             x-transition:leave="transition ease-in duration-150"
                                             x-transition:leave-start="opacity-100 translate-y-0"
                                             x-transition:leave-end="opacity-0 translate-y-1">
                                            <button wire:click.prevent="show({{ $testimonial->id }})" @click="edit = true; settings = false" type="button" class="sm:hover:text-[#407780] py-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" /></svg>
                                            </button>
                                            <button wire:click.prevent="delete({{ $testimonial->id }})" @click="notify = true; settings = false" type="button" class="sm:hover:text-red-300 pr-4 py-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                                            </button>
                                        </div>
                                        <button @click="settings = !settings" type="button" class="border-none outline-none w-8 inline-flex items-center justify-center text-white bg-transparent sm:hover:text-[#407780] focus:outline-none focus:ring-0 focus:ring-transparent border-transparent focus-within:ring-transparent focus-within:border-transparent">
                                            <span class="sr-only">
                                                Open options
                                            </span>
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" /></svg>
                                        </button>
                                    </div>
                                    <div class="space-y-4">
                                        <img class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56" src="{{ $testimonial->profile_photo_path }}" alt="">
                                        <div class="space-y-2 xl:flex xl:items-center xl:justify-between">
                                            <div class="text-lg leading-6 space-y-1 cursor-default">
                                                <h3 class="text-white font-bold">
                                                    {{ $testimonial->title ?: 'Title Needed' }}
                                                </h3>
                                                <p class="text-gray-300">
                                                    {{ $testimonial->job_position ?: 'Position Needed' }}
                                                </p>
                                            </div>
                                            <ul role="list" class="flex justify-center space-x-5">
                                                <li>
                                                    <a href="{{ $testimonial->links['facebook'] }}" class="text-white sm:hover:text-[#407780]">
                                                        <span class="sr-only">Facebook</span>
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" /></svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ $testimonial->links['linkedin'] }}" class="text-white sm:hover:text-[#407780]">
                                                        <span class="sr-only">LinkedIn</span>
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" /></svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                        @endforeach
                    </ul>
                    <div>
                        {!! $testimonials->links('custom-pagination-links-view') !!}
                    </div>
                @endif
            </div>
            <div aria-labelledby="profile form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <div class="flex justify-between items-center">
                    <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                        My Experience
                    </h2>
                    <button wire:click.prevent="store()" @click="notify = true" type="submit" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#407780]' : 'bg-[#57168C] sm:hover:bg-[#993BCE]' }} inline-flex justify-center items-center text-white h-10 px-4 border border-transparent text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md sm:transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
                <div class="flex-grow space-y-6">
                    <div class="grid grid-cols-2 gap-6 mt-10">
                        <div>
                            <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                                <label for="title" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                    Title
                                </label>
                                <input wire:model="title" type="text" name="title" id="title" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                            </div>
                            @error('title') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                                <label for="job_position" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                    Position
                                </label>
                                <input wire:model="job_position" type="text" name="job_position" id="job_position" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                            </div>
                            @error('job_position') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }}">
                        <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent' : 'bg-transparent border-gray-300' }} relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <label for="testimonial_picture" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                Photo
                            </label>
                            <div class="space-y-1 text-center">
                                <div class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-600' }} flex text-sm">
                                    <label for="testimonial_picture" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white sm:hover:text-[#4FAE9D]' : 'bg-white text-indigo-600 sm:hover:text-indigo-500' }} relative cursor-pointer rounded-md font-medium focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                        <span>
                                            Upload a file
                                        </span>
                                        <input wire:model="testimonial_picture" id="testimonial_picture" name="testimonial_picture" type="file" class="sr-only">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }}">
                        <div class="relative mt-1">
                            <label for="description" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                Description
                            </label>
                            <textarea wire:model="description" id="description" name="description" rows="5" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent text-white' : 'bg-white border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600 text-gray-900' }} shadow-sm mt-1 block w-full sm:text-sm border rounded-md"></textarea>
                        </div>
                        @error('description') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }} grid grid-cols-4 gap-6">
                        <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} pl-3 relative col-span-4 sm:col-span-2 border rounded-md shadow-sm focus-within:ring-1">
                            <label for="facebook" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                Facebook
                            </label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                    <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm">
                                        https://
                                    </span>
                                </div>
                                <input wire:model="facebook" type="text" name="facebook" id="facebook" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-transparent text-gray-900' }} block w-full border-0 pl-16 sm:pl-[48px] px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm">
                            </div>
                            @error('facebook') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} pl-3 relative col-span-4 sm:col-span-2 border rounded-md shadow-sm focus-within:ring-1">
                            <label for="linkedin" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                Linkedin
                            </label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                    <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm">
                                        https://
                                    </span>
                                </div>
                                <input wire:model="linkedin" type="text" name="linkedin" id="linkedin" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-transparent text-gray-900' }} block w-full border-0 pl-16 sm:pl-[48px] px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm">
                            </div>
                            @error('linkedin') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>
    </section>
</form>
