<form action="#" wire:submit.prevent="register" x-data="{ notify: @entangle($toggleWarning) }">
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

{{--    <div class="flex justify-end">--}}
{{--        <button @click="notify = true" type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium text-white bg-indigo-600 sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md transition-colors">--}}
{{--            Publish--}}
{{--        </button>--}}
{{--    </div>--}}

    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 2xl:grid-cols-3 mt-8">
        <div class="col-span-2 {{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} p-2 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
            <section aria-labelledby="profile-information-title">
                <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#742fa8]' : 'bg-white' }} sm:rounded-lg">
                    <div class="flex justify-between px-4 py-5 sm:px-6">
                        <div>
                            <h2 id="profile-information-title" class="text-lg leading-6 font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Skills Information</h2>
                            <p class="mt-1 max-w-2xl text-sm {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}">Personal skills with existing preview.</p>
                        </div>

                        <button @click="notify = true" type="submit" class="inline-flex justify-center items-center h-10 px-4 border border-transparent text-sm font-medium text-white {{ (auth()->user()->dark_mode) ? 'bg-indigo-500' : 'bg-indigo-600' }} sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md transition-colors">
                            Publish
                        </button>
                    </div>
                    <div class="px-4 py-5 sm:px-6">
                        @if (!$currentUser)
                            <dl class="sm:divide-y {{ (auth()->user()->dark_mode) ? 'sm:divide-[#a95ae6]' : 'sm:divide-gray-200' }} {{ (auth()->user()->dark_mode) ? 'bg-[#2D0E58]' : 'bg-gray-100' }} shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-400' }} font-bold">-</dt>
                                    <dd class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} sm:mt-0 sm:col-span-2 font-semibold">No current skills listed</dd>
                                </div>
                            </dl>
                        @else
                            <dl class="sm:divide-y {{ (auth()->user()->dark_mode) ? 'sm:divide-[#a95ae6]' : 'sm:divide-gray-200' }} {{ (auth()->user()->dark_mode) ? 'bg-[#2D0E58]' : 'bg-gray-100' }} shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-400' }}">Introduction</dt>
                                    <dd class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-900' }} sm:mt-0 sm:col-span-2">{{ $currentUser->introduction ?: 'Introduce your viewers to your skills' }}</dd>
                                </div>
                            </dl>
                            <dl class="sm:divide-y {{ (auth()->user()->dark_mode) ? 'sm:divide-[#a95ae6]' : 'sm:divide-gray-200' }} {{ (auth()->user()->dark_mode) ? 'bg-[#2D0E58]' : 'bg-gray-100' }} mt-8 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-400' }}">First fact</dt>
                                    <dd class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} sm:mt-0 sm:col-span-2">{{ $currentUser->facts[1] ?: 'Fun skill fact' }}</dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-400' }}">Second fact</dt>
                                    <dd class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} sm:mt-0 sm:col-span-2">{{ $currentUser->facts[2] ?: 'Fun skill fact' }}</dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-indigo-400' }}">Third fact</dt>
                                    <dd class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} sm:mt-0 sm:col-span-2">{{ $currentUser->facts[3] ?: 'Fun skill fact' }}</dd>
                                </div>
                            </dl>
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
                        @endif
                        <div class="sm:col-span-2">
                            <div class="lg:col-span-9">
                                <!-- Profile section -->
                                <div class="pt-24">
                                    <div>
                                        <h2 class="text-lg leading-6 font-medium {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }}">Skill Introductory</h2>
                                        <p class="mt-1 text-sm {{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }}">A brief introductory of your skill history or experience.</p>
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
