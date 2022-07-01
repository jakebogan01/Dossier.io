<form action="#" wire:submit.prevent="register" x-data="{ notify: @entangle($toggleWarning) }">
    @csrf

    <x-dashboard.components.notification :message="$message"></x-dashboard.components.notification>

    <section class="grid grid-cols-1 gap-10 md:grid-cols-2 2xl:grid-cols-3 mt-8">
        <div class="col-span-2 space-y-10">
            <div aria-labelledby="skills with live preview"  class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D]' : 'bg-white' }} shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <div x-data="{
                        selectedId: null,
                        init() {
                            this.$nextTick(() => this.select(this.$id('tab', 1)))
                        },
                        select(id) {
                            this.selectedId = id
                        },
                        isSelected(id) {
                            return this.selectedId === id
                        },
                        whichChild(el, parent) {
                            return Array.from(parent.children).indexOf(el) + 1
                        }
                    }"
                    x-id="['tab']">
                    <ul x-ref="tablist" role="tablist" class="flex items-stretch"
                        @keydown.right.prevent.stop="$focus.wrap().next()"
                        @keydown.home.prevent.stop="$focus.first()"
                        @keydown.page-up.prevent.stop="$focus.first()"
                        @keydown.left.prevent.stop="$focus.wrap().prev()"
                        @keydown.end.prevent.stop="$focus.last()"
                        @keydown.page-down.prevent.stop="$focus.last()">
                        <li>
                            <button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
                                @click="select($el.id)"
                                @mousedown.prevent
                                @focus="select($el.id)"
                                type="button"
                                :tabindex="isSelected($el.id) ? 0 : -1"
                                :aria-selected="isSelected($el.id)"
                                :class="isSelected($el.id) ? 'bg-white text-gray-900' : 'bg-transparent text-white'"
                                class="inline-flex font-semibold px-5 py-2.5 rounded-t-md"
                                role="tab">
                                Introduction
                            </button>
                        </li>

                        <li>
                            <button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
                                @click="select($el.id)"
                                @mousedown.prevent
                                @focus="select($el.id)"
                                type="button"
                                :tabindex="isSelected($el.id) ? 0 : -1"
                                :aria-selected="isSelected($el.id)"
                                    :class="isSelected($el.id) ? 'bg-white text-gray-900' : 'bg-transparent text-white'"
                                class="inline-flex font-semibold px-5 py-2.5 rounded-t-md"
                                role="tab">
                                Facts
                            </button>
                        </li>

                        <li>
                            <button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
                                    @click="select($el.id)"
                                    @mousedown.prevent
                                    @focus="select($el.id)"
                                    type="button"
                                    :tabindex="isSelected($el.id) ? 0 : -1"
                                    :aria-selected="isSelected($el.id)"
                                    :class="isSelected($el.id) ? 'bg-white text-gray-900' : 'bg-transparent text-white'"
                                    class="inline-flex font-semibold px-5 py-2.5 rounded-t-md"
                                    role="tab">
                                Skills
                            </button>
                        </li>
                    </ul>

                    <!-- Panels -->
                    <div role="tabpanels" class="bg-[#434c56]">
                        <!-- Panel -->
                        <section x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
                            :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
                            role="tabpanel">
                            <dl>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        Introduction
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $currentUser->introduction ?: 'Introduce your viewers to your skills' }}
                                    </dd>
                                </div>
                            </dl>
                        </section>

                        <section x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
                             :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
                             role="tabpanel">
                            <dl>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        Fact One
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $currentUser->facts[1] ?: 'Fun skill fact' }}
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        Fact Two
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $currentUser->facts[2] ?: 'Fun skill fact' }}
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        Fact Three
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $currentUser->facts[3] ?: 'Fun skill fact' }}
                                    </dd>
                                </div>
                            </dl>
                        </section>

                        <section x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
                             :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
                             role="tabpanel">
                            <dl>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3 3a1 1 0 100 2h.01a1 1 0 100-2H10zm-4 1a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1zm1-4a1 1 0 100 2h.01a1 1 0 100-2H7zm2 1a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm4-4a1 1 0 100 2h.01a1 1 0 100-2H13zM9 9a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zM7 8a1 1 0 000 2h.01a1 1 0 000-2H7z" clip-rule="evenodd" /></svg>
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $currentUser->skills[1]['description'] ?: 'Description of your skill' }}
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3 3a1 1 0 100 2h.01a1 1 0 100-2H10zm-4 1a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1zm1-4a1 1 0 100 2h.01a1 1 0 100-2H7zm2 1a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm4-4a1 1 0 100 2h.01a1 1 0 100-2H13zM9 9a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zM7 8a1 1 0 000 2h.01a1 1 0 000-2H7z" clip-rule="evenodd" /></svg>
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $currentUser->skills[2]['description'] ?: 'Description of your skill' }}
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3 3a1 1 0 100 2h.01a1 1 0 100-2H10zm-4 1a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1zm1-4a1 1 0 100 2h.01a1 1 0 100-2H7zm2 1a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm4-4a1 1 0 100 2h.01a1 1 0 100-2H13zM9 9a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zM7 8a1 1 0 000 2h.01a1 1 0 000-2H7z" clip-rule="evenodd" /></svg>
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $currentUser->skills[3]['description'] ?: 'Description of your skill' }}
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3 3a1 1 0 100 2h.01a1 1 0 100-2H10zm-4 1a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1zm1-4a1 1 0 100 2h.01a1 1 0 100-2H7zm2 1a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm4-4a1 1 0 100 2h.01a1 1 0 100-2H13zM9 9a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zM7 8a1 1 0 000 2h.01a1 1 0 000-2H7z" clip-rule="evenodd" /></svg>
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $currentUser->skills[4]['description'] ?: 'Description of your skill' }}
                                    </dd>
                                </div>
                            </dl>
                        </section>
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
                                <label for="portfolio_name" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-4 left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                    Name
                                </label>
                                <input wire:model="portfolio_name" type="text" name="portfolio_name" id="portfolio_name" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-full placeholder-gray-500 focus:ring-0 sm:text-sm" style="border-radius: 0.375rem !important;" required>
                            </div>
                            @error('portfolio_name') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                                <label for="portfolio_email" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-4 left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                    Email
                                </label>
                                <input wire:model="portfolio_email" type="email" name="portfolio_email" id="portfolio_email" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-full placeholder-gray-500 focus:ring-0 sm:text-sm" style="border-radius: 0.375rem !important;" required>
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
{{--                    <x-dashboard.components.settings-switch setting="make_public">--}}
                        <p class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-sm font-medium" id="privacy-option-1-label">
                            Make portfolio public
                        </p>
                        <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-sm" id="privacy-option-1-description">
                            Allow your portfolio to be seen by the public.
                        </p>
{{--                    </x-dashboard.components.settings-switch>--}}
{{--                    <x-dashboard.components.settings-switch setting="dark_mode">--}}
                        <p class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-sm font-medium" id="privacy-option-2-label">
                            Enable dark mode
                        </p>
                        <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-sm" id="privacy-option-2-description">
                            Switch between light and dark mode.
                        </p>
{{--                    </x-dashboard.components.settings-switch>--}}
{{--                    <x-dashboard.components.settings-switch setting="track_views">--}}
                        <p class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-sm font-medium" id="privacy-option-3-label">
                            Allow tracking of views
                        </p>
                        <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-sm" id="privacy-option-3-description">
                            This will track the number of viewers that visit your portfolio.
                        </p>
{{--                    </x-dashboard.components.settings-switch>--}}
{{--                    <x-dashboard.components.settings-switch setting="track_likes">--}}
                        <p class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-sm font-medium" id="privacy-option-4-label">
                            Allow tracking of likes
                        </p>
                        <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-sm" id="privacy-option-4-description">
                            This will track the number of likes for each project.
                        </p>
{{--                    </x-dashboard.components.settings-switch>--}}
                </ul>
            </div>
        </div>
        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>
    </section>












    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 2xl:grid-cols-3 mt-8">
        <div class="col-span-2 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} p-2 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
            <section aria-labelledby="profile-information-title">
                <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <div>
                            <h2 id="profile-information-title" class="text-lg leading-6 font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Skills Information</h2>
                            <p class="mt-1 max-w-2xl text-sm {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}">Personal skills with existing preview.</p>
                        </div>
                    </div>
                    <div class="px-4 py-5 sm:px-6">

                            <dl class="sm:divide-y {{ (auth()->user()->dark_mode) ? 'sm:divide-[#a95ae6]' : 'sm:divide-gray-200' }} {{ (auth()->user()->dark_mode) ? 'bg-[#2D0E58]' : 'bg-gray-100' }} mt-8 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                                    <dt class="text-sm font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-300' }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3 3a1 1 0 100 2h.01a1 1 0 100-2H10zm-4 1a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1zm1-4a1 1 0 100 2h.01a1 1 0 100-2H7zm2 1a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm4-4a1 1 0 100 2h.01a1 1 0 100-2H13zM9 9a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zM7 8a1 1 0 000 2h.01a1 1 0 000-2H7z" clip-rule="evenodd" />
                                        </svg>
                                    </dt>
                                    <dd class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} sm:mt-0 sm:col-span-2">{{ $currentUser->skills[1]['description'] ?: 'Description of your skill' }}</dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                                    <dt class="text-sm font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-300' }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z" clip-rule="evenodd" />
                                        </svg>
                                    </dt>
                                    <dd class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} sm:mt-0 sm:col-span-2">{{ $currentUser->skills[2]['description'] ?: 'Description of your skill' }}</dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                                    <dt class="text-sm font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-300' }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13 7H7v6h6V7z" />
                                            <path fill-rule="evenodd" d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z" clip-rule="evenodd" />
                                        </svg>
                                    </dt>
                                    <dd class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} sm:mt-0 sm:col-span-2">{{ $currentUser->skills[3]['description'] ?: 'Description of your skill' }}</dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                                    <dt class="text-sm font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-300' }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                        </svg>
                                    </dt>
                                    <dd class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} sm:mt-0 sm:col-span-2">{{ $currentUser->skills[4]['description'] ?: 'Description of your skill' }}</dd>
                                </div>
                            </dl>
                        <div class="sm:col-span-2">
                            <div class="lg:col-span-9">
                                <!-- Profile section -->
                                <div class="pt-24">
                                    <div class="flex justify-between items-center">
                                        <h2 class="text-lg leading-6 font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Skill Introductory</h2>
                                        <button @click="notify = true" type="submit" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#407780]' : 'bg-indigo-600 sm:hover:bg-indigo-700' }} inline-flex justify-center items-center text-white h-10 px-4 border border-transparent text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md sm:transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" /></svg>
                                        </button>
                                    </div>
                                    <div class="mt-6 flex flex-col lg:flex-row">
                                        <div class="flex-grow space-y-6">
                                            <div>
                                                <div class="relative mt-1">
                                                    <label for="introduction" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Skills Intro</label>
                                                    <textarea wire:model="introduction" id="introduction" name="introduction" rows="3" class="shadow-sm focus:ring-sky-500 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="pt-24">
                                    <div>
                                        <h2 class="text-lg leading-6 font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Skill Facts</h2>
                                        <p class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}">Short but important skill facts that should be listed.</p>
                                    </div>

                                    <div class="mt-6 flex flex-col lg:flex-row">
                                        <div class="flex-grow space-y-6">

                                            <div class="mt-8 grid grid-cols-12 gap-6">
                                                <div class="col-span-12 sm:col-span-6">
                                                    <div>
                                                        <div class="relative border border-gray-300 rounded-md shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                            <label for="fact_one" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Fact One</label>
                                                            <input wire:model="fact_one" type="text" name="fact_one" id="fact_one" autocomplete="fact_one" class="block w-full border-0 px-3 py-2 rounded-md {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" maxlength="60" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-6">
                                                    <div>
                                                        <div class="relative border border-gray-300 rounded-md shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                            <label for="fact_two" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Fact Two</label>
                                                            <input wire:model="fact_two" type="text" name="fact_two" id="fact_two" autocomplete="fact_two" class="block w-full border-0 px-3 py-2 rounded-md {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" maxlength="60">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-6">
                                                    <div>
                                                        <div class="relative border border-gray-300 rounded-md shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                            <label for="fact_three" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Fact Three</label>
                                                            <input wire:model="fact_three" type="text" name="fact_three" id="fact_three" autocomplete="fact_three" class="block w-full border-0 px-3 py-2 rounded-md {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} placeholder-gray-500 focus:ring-0 sm:text-sm" maxlength="60">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="pt-24">
                                    <div>
                                        <h2 class="text-lg leading-6 font-medium {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-900' }}">Top Four Skills</h2>
                                        <p class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}">Describe a brief description of each of your top four skills.</p>
                                    </div>

                                    <div class="mt-6 flex flex-col lg:flex-row">
                                        <div class="flex-grow space-y-6">

                                            <div class="grid grid-cols-12 gap-6">
                                                <x-dashboard.components.skill-select num="skill_one" :skills="$skills" req="required">
                                                    First Skill
                                                </x-dashboard.components.skill-select>
                                            </div>

                                            <div>
                                                <div class="relative mt-1">
                                                    <label for="description_one" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Description</label>
                                                    <textarea wire:model="description_one" id="description_one" name="description_one" rows="3" class="shadow-sm {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required></textarea>
                                                </div>
                                            </div>

                                            <div class="mt-8 grid grid-cols-12 gap-6">
                                                <x-dashboard.components.skill-select num="skill_two" :skills="$skills" req="required">
                                                    Second Skill
                                                </x-dashboard.components.skill-select>
                                            </div>

                                            <div>
                                                <div class="relative mt-1">
                                                    <label for="description_two" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Description</label>
                                                    <textarea wire:model="description_two" id="description_two" name="description_two" rows="3" class="shadow-sm {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required></textarea>
                                                </div>
                                            </div>

                                            <div class="mt-8 grid grid-cols-12 gap-6">
                                                <x-dashboard.components.skill-select num="skill_three" :skills="$skills">
                                                    Third Skill
                                                </x-dashboard.components.skill-select>
                                            </div>

                                            <div>
                                                <div class="relative mt-1">
                                                    <label for="description_three" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Description</label>
                                                    <textarea wire:model="description_three" id="description_three" name="description_three" rows="3" class="shadow-sm {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                                </div>
                                            </div>

                                            <div class="mt-8 grid grid-cols-12 gap-6">
                                                <x-dashboard.components.skill-select num="skill_four" :skills="$skills">
                                                    Fourth Skill
                                                </x-dashboard.components.skill-select>
                                            </div>

                                            <div>
                                                <div class="relative mt-1">
                                                    <label for="description_four" class="absolute -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Description</label>
                                                    <textarea wire:model="description_four" id="description_four" name="description_four" rows="3" class="shadow-sm {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>
    </div>

</form>
