<form action="#" x-data="{ edit: false, notify: @entangle($toggleWarning) }">
    @csrf

    <x-dashboard.components.notification :message="$message"></x-dashboard.components.notification>

    <x-dashboard.components.edit-form :item="$item" content="Project"></x-dashboard.components.edit-form>

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
