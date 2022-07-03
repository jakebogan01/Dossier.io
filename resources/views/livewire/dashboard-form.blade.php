<form action="#" x-data="{ edit: false, notify: @entangle($toggleWarning) }">
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
                <label for="profile_picture" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                    Photo
                </label>
                <div class="space-y-1 text-center">
                    <div class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-600' }} flex text-sm">
                        <label for="profile_picture" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white sm:hover:text-[#4FAE9D]' : 'bg-white text-indigo-600 sm:hover:text-indigo-500' }} relative cursor-pointer rounded-md font-medium focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                            <span>
                                Upload a file
                            </span>
                            <input id="profile_picture" name="profile_picture" type="file" class="sr-only">
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

    @if(count($currentUser->projects) >= 1)
        <div class="mt-10 space-y-2">
            @foreach($currentUser->projects as $project)
                <div aria-roledescription="list of all projects" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56] sm:hover:bg-[#2a2f36]' : 'bg-white' }} group shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <p class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-600' }} text-lg font-bold truncate cursor-default">
                                {{ $project->title }}
                            </p>
                            <div class="ml-2 flex-shrink-0 flex items-center">
                                <p class="{{ $project->public ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }} px-2 mr-2 inline-flex text-xs leading-5 font-semibold rounded-full cursor-default">
                                    {{ $project->public ? 'Public' : 'Not Public' }}
                                </p>
                                <button wire:click.prevent="editProject({{ $project->id }})" @click="edit = true"  type="button" class="{{ (auth()->user()->dark_mode) ? 'text-white sm:hover:text-[#4FAE9D]' : 'text-[#733d91] sm:hover:text-indigo-400' }} flex font-semibold opacity-50 sm:group-hover:opacity-100 sm:transition-opacity">
                                    Edit
                                </button>
                            </div>
                        </div>
                        <div class="mt-2 sm:flex sm:justify-between">
                            <div class="sm:flex">
                                <a href="{{ $project->links['github'] }}" target="_blank" class="{{ (auth()->user()->dark_mode) ? 'text-white sm:hover:text-[#4FAE9D]' : 'text-indigo-700 sm:text-gray-500 sm:hover:text-indigo-400' }} opacity-50 sm:group-hover:opacity-100 flex items-center text-sm sm:transition-opacity">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1 h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                                    Project
                                </a>
                                <a href="{{ $project->links['code'] }}" target="_blank" class="{{ (auth()->user()->dark_mode) ? 'text-white sm:hover:text-[#4FAE9D]' : 'text-indigo-700 sm:text-gray-500 sm:hover:text-indigo-400' }} opacity-50 sm:group-hover:opacity-100 mt-2 flex items-center text-sm sm:mt-0 sm:ml-6 sm:transition-opacity">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1 h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd" /></svg>
                                    Code
                                </a>
                            </div>
                            <div class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900 sm:text-gray-500' }} mt-2 flex items-center text-sm opacity-50 sm:group-hover:opacity-100 sm:mt-0 cursor-default sm:transition-opacity">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-400' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" /></svg>
                                <p>
                                    Created on
                                    <time>
                                        {{ $project->created_at->format('F d, Y') }}
                                    </time>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</form>
