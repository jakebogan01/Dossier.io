<form action="#" x-data="{ edit: false, notify: @entangle($toggleWarning) }">
    @csrf

    <x-dashboard.components.notification :message="$message"></x-dashboard.components.notification>

    <x-dashboard.components.edit-form :item="$item" content="Experience">
        <div class="grid grid-cols-12 gap-6 mt-12">
            <div class="flex items-center col-span-12 sm:col-span-3 min-w-[146px]">
                <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                    <label for="updateDate" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                        Date
                    </label>
                    <input wire:model="updateDate" type="date" name="updateDate" id="updateDate" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 rounded-md px-3 py-2 placeholder-gray-500 focus:ring-0 sm:text-sm">
                </div>
                @error('updateDate') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }}">
            <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                <label for="updateTitle" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                    Title
                </label>
                <input wire:model="updateTitle" type="text" name="updateTitle" id="updateTitle" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm">
            </div>
            @error('updateTitle') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }}">
            <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                <label for="updateDescription" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                    Description
                </label>
                <input wire:model="updateDescription" type="text" name="updateDescription" id="updateDescription" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 rounded-md px-3 py-2 placeholder-gray-500 focus:ring-0 sm:text-sm">
            </div>
            @error('updateDescription') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>
    </x-dashboard.components.edit-form>

    <section class="grid grid-cols-1 gap-10 md:grid-cols-2 2xl:grid-cols-3 mt-8">
        <div class="col-span-2 {{ (!count($experiences) >= 1) ?: 'space-y-10' }}">
            <div aria-labelledby="profile with live preview" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                @if (count($experiences) >= 1)
                    <ul role="list" class="grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3 p-4">
                        @foreach ($experiences as $key => $experience)
                            @if ($key >= 10)
                                @break
                            @endif
                            <li class="col-span-1 flex shadow-sm rounded-md" x-data="{ settings: false }" @click.away="settings = false" @close.stop="settings = false">
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D]' : 'bg-[#57168C]' }} flex-shrink-0 flex items-center justify-center w-16 text-white text-sm font-medium rounded-l-md cursor-default">
                                    {{ $experience->date->format('Y') ?: 'Year' }}
                                </div>
                                <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md ">
                                    <div class="flex-1 px-4 py-2 text-sm cursor-default">
                                        <span class="text-gray-800 font-bold sm:hover:text-gray-600">
                                            {{ $experience->title ?: 'Title' }}
                                        </span>
                                        <span class="block text-gray-500 line-clamp-2">
                                            {{ $experience->description ?: 'Description Needed' }}
                                        </span>
                                    </div>
                                    <div class="relative flex-shrink-0 pr-2">
                                        <button @click="settings = !settings" type="button" class="border-none outline-none w-8 mt-2 inline-flex items-center justify-center text-gray-400 bg-transparent sm:hover:text-gray-500 focus:outline-none focus:ring-0 focus:ring-offset-2 focus:ring-transparent">
                                            <span class="sr-only">
                                                Open options
                                            </span>
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" /></svg>
                                        </button>
                                        <div class="absolute z-10 left-0 transform -translate-x-[50%] mt-2 px-2 sm:px-0" x-cloak x-show="settings"
                                             x-transition:enter="transition ease-out duration-200"
                                             x-transition:enter-start="opacity-0 translate-y-1"
                                             x-transition:enter-end="opacity-100 translate-y-0"
                                             x-transition:leave="transition ease-in duration-150"
                                             x-transition:leave-start="opacity-100 translate-y-0"
                                             x-transition:leave-end="opacity-0 translate-y-1">
                                            <div class="relative rounded-md shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#333333] text-white' : 'bg-white' }} relative grid gap-2">
                                                    <button wire:click.prevent="show({{ $experience->id }})" @click="edit = true; settings = false" type="button" class="{{ (auth()->user()->dark_mode) ? 'sm:hover:bg-[#525050]' : 'sm:hover:bg-gray-200' }} text-left pl-2 pr-6 py-1">
                                                        Edit
                                                    </button>
                                                    <button wire:click.prevent="delete({{ $experience->id }})" @click="notify = true; settings = false" type="button" class="{{ (auth()->user()->dark_mode) ? 'sm:sm:hover:bg-[#525050]' : 'sm:sm:hover:bg-gray-200' }} text-left pl-2 pr-6 py-1">
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div>
                        {!! $experiences->links('custom-pagination-links-view') !!}
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
                    <div class="grid grid-cols-12 gap-6 mt-12">
                        <div class="flex items-center col-span-12 sm:col-span-3 min-w-[146px]">
                            <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                                <label for="date" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                    Date
                                </label>
                                <input wire:model="date" type="date" name="date" id="date" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 rounded-md px-3 py-2 placeholder-gray-500 focus:ring-0 sm:text-sm">
                            </div>
                            @error('date') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="mt-10">
                        <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                            <label for="title" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                Title
                            </label>
                            <input wire:model="title" type="text" name="title" id="title" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm">
                        </div>
                        @error('title') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>
                    <div class="mt-5">
                        <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                            <label for="description" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                Description
                            </label>
                            <input wire:model="description" type="text" name="description" id="description" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 rounded-md px-3 py-2 placeholder-gray-500 focus:ring-0 sm:text-sm">
                        </div>
                        @error('description') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
        </div>
        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>
    </section>
</form>
