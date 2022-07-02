<div>
    <form action="#" enctype="multipart/form-data" wire:submit.prevent="register" x-data="{ notify: @entangle($toggleWarning) }">
        @csrf

        <x-dashboard.components.notification :message="$message"></x-dashboard.components.notification>

        <section class="grid grid-cols-1 gap-10 md:grid-cols-2 2xl:grid-cols-3 mt-8">
            <div class="col-span-2 space-y-10">
                <div aria-labelledby="profile with live preview" class="bg-white shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                    <div class="relative flex flex-col">
                        <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D]' : 'bg-transparent' }} max-h-20 h-full w-full opacity-80 absolute top-0 left-0"></div>
                        <div class="relative w-full flex m-3 ml-4 text-white cursor-default z-10">
                            <img class="{{ (auth()->user()->dark_mode) ? 'bg-gray-100' : 'bg-[#73148B]' }} w-28 h-28 p-1 rounded-md" src="{{ $profileImage }}" alt="Avatar"/>
                            <div class="title mt-11 ml-3 font-bold flex flex-col">
                                <div class="{{ (auth()->user()->dark_mode) ?: 'text-[#73148B]' }} break-words">
                                    {{ $currentUser->portfolio_name ?: 'Name' }}
                                </div>
                                <div class="{{ (auth()->user()->dark_mode) ? 'text-gray-600' : 'text-[#4E148B]' }} font-semibold text-sm italic dark">
                                    Web Developer
                                </div>
                            </div>
                        </div>
                        <div class="flex absolute bottom-0 font-bold right-0 text-xs space-x-0 my-3.5 mr-3 z-10">
                            <div class="{{ (auth()->user()->dark_mode) ? 'border-gray-300 text-gray-600' : 'border-transparent text-gray-800' }} flex items-center space-x-2 border rounded-l-2xl rounded-r-sm p-1 px-4 cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" /></svg>
                                <span>{{ $currentUser->total_clients ?: 0 }}</span>
                            </div>
                            <div class="{{ (auth()->user()->dark_mode) ? 'border-gray-300 text-gray-600' : 'border-transparent text-gray-800' }} flex items-center space-x-2 border rounded-r-2xl rounded-l-sm p-1 px-4 cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" /><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" /></svg>
                                <span>{{ $currentUser->total_tools ?: 0 }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-labelledby="profile form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                    <div class="flex justify-between items-center">
                        <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                            My Profile
                        </h2>
                        <button @click="notify = true" type="submit" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#407780]' : 'bg-indigo-600 sm:hover:bg-indigo-700' }} inline-flex justify-center items-center text-white h-10 px-4 border border-transparent text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md sm:transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" /></svg>
                        </button>
                    </div>
                    <div class="flex-grow space-y-6">
                        <div class="mt-8 grid grid-cols-12 gap-6">
                            <div class="col-span-12 sm:col-span-6">
                                <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                                    <label for="portfolio_name" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                        Name
                                    </label>
                                    <input wire:model="portfolio_name" type="text" name="portfolio_name" id="portfolio_name" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                </div>
                                @error('portfolio_name') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                                    <label for="portfolio_email" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                        Email
                                    </label>
                                    <input wire:model="portfolio_email" type="email" name="portfolio_email" id="portfolio_email" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                </div>
                                @error('portfolio_email') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div>
                            <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent' : 'bg-transparent border-gray-300' }} relative mt-1 flex justify-center px-6 {{ (auth()->user()->dark_mode) ? 'pt-8' : 'pt-5' }} pb-6 border-2 border-gray-300 border-dashed rounded-md">
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
                                            <input wire:model="profile_picture" id="profile_picture" name="profile_picture" type="file" class="sr-only">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 lg:col-span-3">
                                <div x-data="{ total: 0 }" class="w-full">
                                    <label for="total_clients" class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-700' }} block text-sm font-medium" x-text="`Number of Clients: ${total}`"></label>
                                    <input wire:model="total_clients" type="range" min="0" max="100" id="total_clients" name="total_clients" x-model="total" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33]' : 'bg-gray-200' }} w-full h-2 appearance-none rounded" step="1"/>
                                </div>
                            </div>

                            <div class="col-span-6 lg:col-span-3">
                                <div x-data="{ total: 0 }" class="w-full">
                                    <label for="total_tools" class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-700' }} block text-sm font-medium" x-text="`Number of Tools: ${total}`"></label>
                                    <input wire:model="total_tools" type="range" min="0" max="100" id="total_tools" name="total_tools" x-model="total" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33]' : 'bg-gray-200' }} w-full h-2 appearance-none rounded" step="1"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-labelledby="profile settings" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                    <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 mb-4 font-medium">
                        My Settings
                    </h2>
                    <ul role="list">
                        <x-dashboard.components.settings-switch setting="make_public">
                            <p class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-sm font-medium" id="privacy-option-1-label">
                                Make portfolio public
                            </p>
                            <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-sm" id="privacy-option-1-description">
                                Allow your portfolio to be seen by the public.
                            </p>
                        </x-dashboard.components.settings-switch>
                        <x-dashboard.components.settings-switch setting="dark_mode">
                            <p class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-sm font-medium" id="privacy-option-2-label">
                                Enable dark mode
                            </p>
                            <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-sm" id="privacy-option-2-description">
                                Switch between light and dark mode.
                            </p>
                        </x-dashboard.components.settings-switch>
                        <x-dashboard.components.settings-switch setting="track_views">
                            <p class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-sm font-medium" id="privacy-option-3-label">
                                Allow tracking of views
                            </p>
                            <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-sm" id="privacy-option-3-description">
                                This will track the number of viewers that visit your portfolio.
                            </p>
                        </x-dashboard.components.settings-switch>
                        <x-dashboard.components.settings-switch setting="track_likes">
                            <p class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-sm font-medium" id="privacy-option-4-label">
                                Allow tracking of likes
                            </p>
                            <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-sm" id="privacy-option-4-description">
                                This will track the number of likes for each project.
                            </p>
                        </x-dashboard.components.settings-switch>
                    </ul>
                </div>
            </div>
            <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>
        </section>
    </form>
</div>
