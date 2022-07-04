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
                            <img class="{{ (auth()->user()->dark_mode) ? 'bg-gray-100' : 'bg-[#993BCE]' }} w-28 h-28 p-1 rounded-full" src="{{ $profileImage }}" alt="Avatar"/>
                            <div class="title mt-11 ml-3 font-bold flex flex-col">
                                <div class="{{ (auth()->user()->dark_mode) ?: 'text-[#993BCE]' }} break-words">
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
                        <button @click="notify = true" type="submit" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#407780]' : 'bg-[#993BCE] sm:hover:bg-[#57168C]' }} inline-flex justify-center items-center text-white h-10 px-4 border border-transparent text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md sm:transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" /></svg>
                        </button>
                    </div>
                    <div class="flex-grow space-y-6">
                        <div class="mt-8 grid grid-cols-12 gap-6 mt-12">
                            <div class="col-span-12 sm:col-span-6">
                                <x-dashboard.components.form-fields.input-field type="text" model="portfolio_name" title="Name"></x-dashboard.components.form-fields.input-field>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <x-dashboard.components.form-fields.input-field type="email" model="portfolio_email" title="Email"></x-dashboard.components.form-fields.input-field>
                            </div>
                        </div>
                        <x-dashboard.components.form-fields.image-field model="profile_picture"></x-dashboard.components.form-fields.image-field>
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
