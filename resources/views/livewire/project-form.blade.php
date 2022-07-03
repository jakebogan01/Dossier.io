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
            <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent' : 'bg-transparent border-gray-300' }} relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <label for="newProjectPicture" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                    Photo
                </label>
                <div class="space-y-1 text-center">
                    <div class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-600' }} flex text-sm">
                        <label for="newProjectPicture" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white sm:hover:text-[#4FAE9D]' : 'bg-white text-indigo-600 sm:hover:text-indigo-500' }} relative cursor-pointer rounded-md font-medium focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                            <span>
                                Upload a file
                            </span>
                            <input wire:model="newProjectPicture" id="newProjectPicture" name="newProjectPicture" type="file" class="sr-only">
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
                <label for="updateCode" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                    Project
                </label>
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                        <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm">
                            https://
                        </span>
                    </div>
                    <input wire:model="updateCode" type="text" name="updateCode" id="updateCode" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-transparent text-gray-900' }} block w-full border-0 pl-16 sm:pl-[48px] px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm">
                </div>
                @error('updateCode') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} pl-3 relative col-span-4 sm:col-span-2 border rounded-md shadow-sm focus-within:ring-1">
                <label for="updateGithub" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                    GitHub
                </label>
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                        <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm">
                            https://
                        </span>
                    </div>
                    <input wire:model="updateGithub" type="text" name="updateGithub" id="updateGithub" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-transparent text-gray-900' }} block w-full border-0 pl-16 sm:pl-[48px] px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm">
                </div>
                @error('updateGithub') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="pb-4 pt-8 flex items-center justify-between">
            <x-dashboard.components.toggle-switch>
                <p class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-sm font-medium" id="privacy-option-1-label">
                    Make project public
                </p>
                <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-sm" id="privacy-option-1-description">
                    Allow this project to be seen by the public.
                </p>
            </x-dashboard.components.toggle-switch>
        </div>
    </x-dashboard.components.edit-form>

    <section class="grid grid-cols-1 gap-10 md:grid-cols-2 2xl:grid-cols-3 mt-8">
        <div class="col-span-2 {{ (!count($projects) >= 1) ?: 'space-y-10' }}">
            <div aria-labelledby="profile with live preview" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                @if (count($projects) >= 1)
                    <ul role="list" class="grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3 p-4">
                        @foreach ($projects as $key => $project)
                            @if ($key >= 6)
                                @break
                            @endif
                            <li x-data="{ settings: false }" @click.away="settings = false" @close.stop="settings = false" class="col-span-1 shadow-md rounded-md relative flex items-end bg-no-repeat bg-center bg-cover h-[250px] overflow-hidden group" role="option" style="background-image: url('{{ $project->profile_photo_path }}')">
                                <div class="relative flex-1 transform translate-y-6 group-hover:translate-y-0 transition-transform">
                                    <div class="px-2 sm:px-0"
                                         x-cloak x-show="settings"
                                         x-transition:enter="transition ease-out duration-200"
                                         x-transition:enter-start="opacity-0 translate-y-1"
                                         x-transition:enter-end="opacity-100 translate-y-0"
                                         x-transition:leave="transition ease-in duration-150"
                                         x-transition:leave-start="opacity-100 translate-y-0"
                                         x-transition:leave-end="opacity-0 translate-y-1">
                                        <div class="relative ring-1 ring-black ring-opacity-5 overflow-hidden">
                                            <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#333333] text-white' : 'bg-white' }} flex space-x-4">
                                                <button wire:click.prevent="show({{ $project->id }})" @click="edit = true; settings = false" type="button" class="sm:hover:text-[#4FAE9D] pl-4 py-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" /></svg>
                                                </button>
                                                <button wire:click.prevent="delete({{ $project->id }})" @click="notify = true; settings = false" type="button" class="sm:hover:text-red-300 py-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex bg-white">
                                        <div class="flex-1 px-4 py-2 text-sm cursor-default">
                                            <span class="text-gray-800 font-bold sm:hover:text-gray-600">
                                                {{ $project->title ?: 'Title Needed' }}
                                            </span>
                                            <span class=" block text-gray-500 pt-2 line-clamp-1">
                                                {{ $project->description ?: 'Description Needed' }}
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
                        @endforeach
                    </ul>
                    <div>
                        {!! $projects->links('custom-pagination-links-view') !!}
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
                    <div class="mt-10">
                        <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                            <label for="title" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                Title
                            </label>
                            <input wire:model="title" type="text" name="title" id="title" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                        </div>
                        @error('title') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>
                    <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }}">
                        <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent' : 'bg-transparent border-gray-300' }} relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <label for="project_picture" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                Photo
                            </label>
                            <div class="space-y-1 text-center">
                                <div class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-600' }} flex text-sm">
                                    <label for="project_picture" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white sm:hover:text-[#4FAE9D]' : 'bg-white text-indigo-600 sm:hover:text-indigo-500' }} relative cursor-pointer rounded-md font-medium focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                        <span>
                                            Upload a file
                                        </span>
                                        <input wire:model="project_picture" id="project_picture" name="project_picture" type="file" class="sr-only">
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
                            <label for="code" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                Project
                            </label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                    <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm">
                                        https://
                                    </span>
                                </div>
                                <input wire:model="code" type="text" name="code" id="code" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-transparent text-gray-900' }} block w-full border-0 pl-16 sm:pl-[48px] px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm">
                            </div>
                            @error('code') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} pl-3 relative col-span-4 sm:col-span-2 border rounded-md shadow-sm focus-within:ring-1">
                            <label for="github" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                GitHub
                            </label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                    <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm">
                                        https://
                                    </span>
                                </div>
                                <input wire:model="github" type="text" name="github" id="github" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-transparent text-gray-900' }} block w-full border-0 pl-16 sm:pl-[48px] px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm">
                            </div>
                            @error('github') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>
    </section>

{{--    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 2xl:grid-cols-3 mt-8">--}}
{{--        <div class="col-span-2 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} p-2 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">--}}
{{--            <section aria-labelledby="profile-information-title">--}}
{{--                <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} sm:rounded-lg">--}}
{{--                    <div class="px-4 py-5 sm:px-6">--}}
{{--                        <div>--}}
{{--                            <h2 id="profile-information-title" class="text-lg leading-6 font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Project Information</h2>--}}
{{--                            <p class="mt-1 max-w-2xl text-sm {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}">Personal projects with existing preview.</p>--}}
{{--                       </div>--}}
{{--                    </div>--}}
{{--                    <div class="px-4 py-5 sm:px-6">--}}
{{--                        <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#310B5C]' : 'bg-gray-100' }} p-4 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">--}}
{{--                            @if (count($projects) >= 1)--}}
{{--                                @foreach ($projects as $key => $project)--}}
{{--                                    @if ($key >= 10)--}}
{{--                                        @break--}}
{{--                                    @endif--}}
{{--                                        <div class="flex flex-col shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">--}}
{{--                                            <div class="flex-shrink-0">--}}
{{--                                                @if(!is_null($project->profile_photo_path))--}}
{{--                                                    <img class="h-48 w-full object-cover" src="{{ $project->profile_photo_path }}" alt="">--}}
{{--                                                @endif--}}
{{--                                            </div>--}}
{{--                                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">--}}
{{--                                                <div class="flex flex-col">--}}
{{--                                                    <div class="flex justify-between space-x-3">--}}
{{--                                                        <div class="flex space-x-3">--}}
{{--                                                            <a href="{{ $project->links['code'] }}" target="_blank" class="text-indigo-500 hover:opacity-75 transition-opacity">--}}
{{--                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"/>--}}
{{--                                                                </svg>--}}
{{--                                                            </a>--}}
{{--                                                            <a href="{{ $project->links['github'] }}" target="_blank" class="text-[#9E61E0] hover:opacity-75 transition-opacity">--}}
{{--                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" fill="#6466E9" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><path d="M345,291.6c9.6,0,18,4.8,25,14.5c7,9.6,10.6,21.5,10.6,35.6s-3.5,26-10.6,35.6c-7,9.6-15.4,14.5-25,14.5 c-10.4,0-19.1-4.8-26.2-14.5c-7-9.6-10.6-21.5-10.6-35.6s3.5-26,10.6-35.6C325.9,296.4,334.7,291.6,345,291.6 M470.8,161.4 c27.5,29.7,41.2,65.7,41.2,108c0,27.5-3.2,52.1-9.5,74c-6.3,21.9-14.3,39.7-23.9,53.4c-9.6,13.7-21.5,25.8-35.6,36.2 s-27.1,18-39,22.8c-11.9,4.8-25.4,8.5-40.6,11.1c-15.2,2.6-26.7,4.1-34.5,4.5c-7.8,0.4-16.1,0.6-25,0.6c-2.2,0-8.9,0.2-20,0.6 c-11.1,0.4-20.4,0.6-27.8,0.6s-16.7-0.2-27.8-0.6c-11.1-0.4-17.8-0.6-20-0.6c-8.9,0-17.3-0.2-25-0.6c-7.8-0.4-19.3-1.9-34.5-4.5 c-15.2-2.6-28.8-6.3-40.6-11.1C96.1,451,83.1,443.4,69,433s-26-22.4-35.6-36.2c-9.6-13.7-17.6-31.5-23.9-53.4 c-6.3-21.9-9.5-46.6-9.5-74c0-42.3,13.7-78.3,41.2-108c-3-1.5-3.2-16.3-0.6-44.5S49.3,62.7,59,39c34.1,3.7,76.4,23,126.9,57.9 c17.1-4.5,40.4-6.7,70.1-6.7c31.2,0,54.5,2.2,70.1,6.7c23-15.6,45.1-28.2,66.2-37.8s36.5-15.2,46.2-16.7L453,39 c9.6,23.7,15.8,49.7,18.4,77.9C474,145.1,473.8,159.9,470.8,161.4 M257.1,447.4c61.6,0,108.2-7.4,139.7-22.3s47.3-45.3,47.3-91.3 c0-26.7-10-49-30.1-66.8c-10.4-9.6-22.4-15.6-36.2-17.8c-13.7-2.2-34.7-2.2-62.9,0c-28.2,2.2-47.5,3.3-57.9,3.3H256h-1.1 c-11.9,0-27.3-0.7-46.2-2.2s-33.8-2.4-44.5-2.8c-10.8-0.4-22.4,0.9-35.1,3.9c-12.6,3-23,8.2-31.2,15.6   C78.7,284.2,69,306.5,69,333.9c0,46,15.6,76.4,46.7,91.3s77.5,22.3,139.1,22.3H257.1 M168.1,291.6c9.6,0,18,4.8,25,14.5   c7,9.6,10.6,21.5,10.6,35.6s-3.5,26-10.6,35.6c-7,9.6-15.4,14.5-25,14.5c-10.4,0-19.1-4.8-26.2-14.5c-7-9.6-10.6-21.5-10.6-35.6   s3.5-26,10.6-35.6C149,296.4,157.7,291.6,168.1,291.6"/></g></svg>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="flex space-x-2">--}}
{{--                                                            <button wire:click.prevent="delete({{ $project->id }})" @click="notify = true" type="button">--}}
{{--                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-300 hover:text-red-400 cursor-pointer transition-colors" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />--}}
{{--                                                                </svg>--}}
{{--                                                            </button>--}}
{{--                                                            <button wire:click.prevent="show({{ $project->id }})" @click="edit = true" type="button">--}}
{{--                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-300 hover:text-indigo-400 transition-all" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />--}}
{{--                                                                </svg>--}}
{{--                                                            </button>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="mt-2">--}}
{{--                                                        <p class="text-xl font-semibold text-gray-900">{{ $project->title ?: 'Title Needed' }}</p>--}}
{{--                                                        <p class="mt-3 text-base text-gray-500">{{ $project->description ?: 'Description Needed' }}</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                @endforeach--}}
{{--                            @else--}}
{{--                                <div class="flex flex-col shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=320&h=320&q=80" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">--}}
{{--                                        <div class="flex flex-col">--}}
{{--                                            <div class="flex justify-between space-x-3">--}}
{{--                                                <div class="flex space-x-3">--}}
{{--                                                    <a href="#" target="_blank" class="text-indigo-500 hover:opacity-75 transition-opacity">--}}
{{--                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"/>--}}
{{--                                                        </svg>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="#" target="_blank" class="text-[#9E61E0] hover:opacity-75 transition-opacity">--}}
{{--                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" fill="#6466E9" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><path d="M345,291.6c9.6,0,18,4.8,25,14.5c7,9.6,10.6,21.5,10.6,35.6s-3.5,26-10.6,35.6c-7,9.6-15.4,14.5-25,14.5 c-10.4,0-19.1-4.8-26.2-14.5c-7-9.6-10.6-21.5-10.6-35.6s3.5-26,10.6-35.6C325.9,296.4,334.7,291.6,345,291.6 M470.8,161.4 c27.5,29.7,41.2,65.7,41.2,108c0,27.5-3.2,52.1-9.5,74c-6.3,21.9-14.3,39.7-23.9,53.4c-9.6,13.7-21.5,25.8-35.6,36.2 s-27.1,18-39,22.8c-11.9,4.8-25.4,8.5-40.6,11.1c-15.2,2.6-26.7,4.1-34.5,4.5c-7.8,0.4-16.1,0.6-25,0.6c-2.2,0-8.9,0.2-20,0.6 c-11.1,0.4-20.4,0.6-27.8,0.6s-16.7-0.2-27.8-0.6c-11.1-0.4-17.8-0.6-20-0.6c-8.9,0-17.3-0.2-25-0.6c-7.8-0.4-19.3-1.9-34.5-4.5 c-15.2-2.6-28.8-6.3-40.6-11.1C96.1,451,83.1,443.4,69,433s-26-22.4-35.6-36.2c-9.6-13.7-17.6-31.5-23.9-53.4 c-6.3-21.9-9.5-46.6-9.5-74c0-42.3,13.7-78.3,41.2-108c-3-1.5-3.2-16.3-0.6-44.5S49.3,62.7,59,39c34.1,3.7,76.4,23,126.9,57.9 c17.1-4.5,40.4-6.7,70.1-6.7c31.2,0,54.5,2.2,70.1,6.7c23-15.6,45.1-28.2,66.2-37.8s36.5-15.2,46.2-16.7L453,39 c9.6,23.7,15.8,49.7,18.4,77.9C474,145.1,473.8,159.9,470.8,161.4 M257.1,447.4c61.6,0,108.2-7.4,139.7-22.3s47.3-45.3,47.3-91.3 c0-26.7-10-49-30.1-66.8c-10.4-9.6-22.4-15.6-36.2-17.8c-13.7-2.2-34.7-2.2-62.9,0c-28.2,2.2-47.5,3.3-57.9,3.3H256h-1.1 c-11.9,0-27.3-0.7-46.2-2.2s-33.8-2.4-44.5-2.8c-10.8-0.4-22.4,0.9-35.1,3.9c-12.6,3-23,8.2-31.2,15.6   C78.7,284.2,69,306.5,69,333.9c0,46,15.6,76.4,46.7,91.3s77.5,22.3,139.1,22.3H257.1 M168.1,291.6c9.6,0,18,4.8,25,14.5   c7,9.6,10.6,21.5,10.6,35.6s-3.5,26-10.6,35.6c-7,9.6-15.4,14.5-25,14.5c-10.4,0-19.1-4.8-26.2-14.5c-7-9.6-10.6-21.5-10.6-35.6   s3.5-26,10.6-35.6C149,296.4,157.7,291.6,168.1,291.6"/></g></svg>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="mt-2">--}}
{{--                                                <p class="text-xl font-semibold text-gray-900">Project 1 title</p>--}}
{{--                                                <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque doloremque est et eum eveniet fugiat fugit ipsam, natus perferendis quas, quidem, reprehenderit soluta vero.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        @unless ($projects->count() >= 6)--}}
{{--                            <div class="sm:col-span-2">--}}
{{--                                <div class="lg:col-span-9">--}}
{{--                                    <div class="pt-24">--}}
{{--                                        <div class="flex justify-between items-center">--}}
{{--                                            <div>--}}
{{--                                                <h2 class="text-lg leading-6 font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Your Projects</h2>--}}
{{--                                                <p class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}">Upload your projects here.</p>--}}
{{--                                            </div>--}}

{{--                                            <button wire:click.prevent="store()" @click="notify = true" aria-label="Create Project" type="submit" class="inline-flex justify-center items-center h-10 px-4 border border-transparent text-sm font-medium text-white {{ (auth()->user()->dark_mode) ? 'bg-indigo-500' : 'bg-indigo-600' }} sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md transition-colors">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" /></svg>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}

{{--                                        <div class="mt-6 flex flex-col lg:flex-row">--}}
{{--                                            <div class="flex-grow space-y-14">--}}
{{--                                                <div>--}}
{{--                                                    <div class="mt-5">--}}
{{--                                                        <div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">--}}
{{--                                                            <label for="title" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Title</label>--}}
{{--                                                            <input wire:model="title" type="text" name="title" id="title" class="block w-full border-0 p-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>--}}
{{--                                                        </div>--}}
{{--                                                        @error('title') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                                                    </div>--}}

{{--                                                    <div class="mt-5">--}}
{{--                                                        <div class="relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">--}}
{{--                                                            <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} text-xs font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Photo</label>--}}
{{--                                                            <div class="space-y-1 text-center">--}}
{{--                                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">--}}
{{--                                                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                                                </svg>--}}
{{--                                                                <div class="flex text-sm {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-600' }}">--}}
{{--                                                                    <label for="project_picture" class="relative cursor-pointer {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} rounded-md font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-600' }} sm:hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">--}}
{{--                                                                        <span>Upload a file</span>--}}
{{--                                                                        <input wire:model="project_picture" id="project_picture" name="project_picture" type="file" class="sr-only">--}}
{{--                                                                    </label>--}}
{{--                                                                    <p class="pl-1">or drag and drop</p>--}}
{{--                                                                </div>--}}
{{--                                                                <p class="text-xs {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}">PNG, JPG, GIF up to 10MB</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="mt-5">--}}
{{--                                                        <div class="relative mt-1">--}}
{{--                                                            <label for="description" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Description</label>--}}
{{--                                                            <textarea wire:model="description" id="description" name="description" rows="3" class="shadow-sm {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required></textarea>--}}
{{--                                                        </div>--}}
{{--                                                        @error('description') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                                                    </div>--}}

{{--                                                    <div class="grid grid-cols-4 gap-6 mt-5">--}}
{{--                                                        <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">--}}
{{--                                                            <label for="code" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Project</label>--}}
{{--                                                            <div class="relative rounded-md shadow-sm">--}}
{{--                                                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">--}}
{{--                                                                    <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm"> https:// </span>--}}
{{--                                                                </div>--}}
{{--                                                                <input wire:model="code" type="text" name="code" id="code" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>--}}
{{--                                                            </div>--}}
{{--                                                            @error('code') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                                                        </div>--}}

{{--                                                        <div class="relative col-span-4 sm:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">--}}
{{--                                                            <label for="github" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">GitHub</label>--}}
{{--                                                            <div class="relative rounded-md shadow-sm">--}}
{{--                                                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">--}}
{{--                                                                    <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} sm:text-sm"> https:// </span>--}}
{{--                                                                </div>--}}
{{--                                                                <input wire:model="github" type="text" name="github" id="github" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" required>--}}
{{--                                                            </div>--}}
{{--                                                            @error('github') <span class="text-danger error">{{ $message }}</span>@enderror--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endunless--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>--}}
{{--    </div>--}}

</form>

