<form action="#" x-data="{ notify: @entangle($toggleWarning) }">
    @csrf

    <x-dashboard.components.notification :message="$message"></x-dashboard.components.notification>

    <section class="grid grid-cols-1 gap-10 md:grid-cols-2 2xl:grid-cols-3 mt-8" x-data="{ formOne: true, formTwo: false, formThree: false }">
        <div class="col-span-2 space-y-10">
            <div aria-labelledby="skills with live preview" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D]' : 'bg-white' }} shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'introduction' }" id="tab_wrapper">
                    <x-dashboard.components.live-preview-tab :currentUser="$currentUser" tabOne="Introduction" tabTwo="Facts" tabThree="Skills"></x-dashboard.components.live-preview-tab>
                    <div class="bg-[#434c56]">
                        <section x-show="tab === 'introduction'" x-cloak>
                            <dl>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-white' : 'bg-gray-100' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        Introduction
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->introduction ?: 'Introduce your viewers to your skills' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Introduce your viewers to your skills
                                        </dd>
                                    @endif
                                </div>
                            </dl>
                        </section>
                        <section x-show="tab === 'facts'">
                            <dl>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-white' : 'bg-gray-100' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        Fact One
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->facts[1] ?: 'Fun skill fact' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Fun skill fact
                                        </dd>
                                    @endif
                                </div>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        Fact Two
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->facts[2] ?: 'Fun skill fact' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Fun skill fact
                                        </dd>
                                    @endif
                                </div>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-white' : 'bg-gray-100' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        Fact Three
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->facts[3] ?: 'Fun skill fact' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Fun skill fact
                                        </dd>
                                    @endif
                                </div>
                            </dl>
                        </section>
                        <section x-show="tab === 'skills'" x-cloak>
                            <dl>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-white' : 'bg-gray-100' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3 3a1 1 0 100 2h.01a1 1 0 100-2H10zm-4 1a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1zm1-4a1 1 0 100 2h.01a1 1 0 100-2H7zm2 1a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm4-4a1 1 0 100 2h.01a1 1 0 100-2H13zM9 9a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zM7 8a1 1 0 000 2h.01a1 1 0 000-2H7z" clip-rule="evenodd" /></svg>
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->skills[1]['description'] ?: 'Description of your skill' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Description of your skill
                                        </dd>
                                    @endif
                                </div>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3 3a1 1 0 100 2h.01a1 1 0 100-2H10zm-4 1a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1zm1-4a1 1 0 100 2h.01a1 1 0 100-2H7zm2 1a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm4-4a1 1 0 100 2h.01a1 1 0 100-2H13zM9 9a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zM7 8a1 1 0 000 2h.01a1 1 0 000-2H7z" clip-rule="evenodd" /></svg>
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->skills[2]['description'] ?: 'Description of your skill' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Description of your skill
                                        </dd>
                                    @endif
                                </div>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-white' : 'bg-gray-100' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3 3a1 1 0 100 2h.01a1 1 0 100-2H10zm-4 1a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1zm1-4a1 1 0 100 2h.01a1 1 0 100-2H7zm2 1a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm4-4a1 1 0 100 2h.01a1 1 0 100-2H13zM9 9a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zM7 8a1 1 0 000 2h.01a1 1 0 000-2H7z" clip-rule="evenodd" /></svg>
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->skills[3]['description'] ?: 'Description of your skill' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Description of your skill
                                        </dd>
                                    @endif
                                </div>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3 3a1 1 0 100 2h.01a1 1 0 100-2H10zm-4 1a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1zm1-4a1 1 0 100 2h.01a1 1 0 100-2H7zm2 1a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm4-4a1 1 0 100 2h.01a1 1 0 100-2H13zM9 9a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zM7 8a1 1 0 000 2h.01a1 1 0 000-2H7z" clip-rule="evenodd" /></svg>
                                    </dt>
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->skills[4]['description'] ?: 'Description of your skill' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Description of your skill
                                        </dd>
                                    @endif
                                </div>
                            </dl>
                        </section>
                    </div>
                </div>
            </div>
            <div x-show="formOne" x-cloak aria-labelledby="skill form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <div class="flex justify-between items-center">
                    <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                        My Intro
                    </h2>
                    <button wire:click.prevent="register()" @click="notify = true" type="submit" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#407780]' : 'bg-[#993BCE] sm:hover:bg-[#57168C]' }} inline-flex justify-center items-center text-white h-10 px-4 border border-transparent text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md sm:transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
                <div class="flex-grow space-y-6 mt-12">
                    <div class="{{ (auth()->user()->dark_mode) ? 'mt-12' : 'mt-5' }}">
                        <div class="relative mt-1">
                            <label for="introduction" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                Description
                            </label>
                            <textarea wire:model.defer="introduction" id="introduction" name="introduction" rows="5" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent text-white' : 'bg-white border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600 text-gray-900' }} shadow-sm mt-1 block w-full sm:text-sm border rounded-md"></textarea>
                        </div>
                        @error('introduction') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div x-show="formTwo" x-cloak aria-labelledby="skill form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                    My Fun Facts
                </h2>
                <div class="flex-grow space-y-6">
                    <div class="mt-4 flex flex-col lg:flex-row">
                        <div class="flex-grow space-y-6">
                            <div class="mt-8 grid grid-cols-12 gap-6">
                                <div class="col-span-12 sm:col-span-6">
                                    <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                                        <label for="fact_one" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                            One
                                        </label>
                                        <input wire:model.defer="fact_one" type="text" name="fact_one" id="fact_one" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-full placeholder-gray-500 focus:ring-0 sm:text-sm" style="border-radius: 0.375rem !important;" required>
                                    </div>
                                    @error('fact_one') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                                        <label for="fact_two" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                            Two
                                        </label>
                                        <input wire:model.defer="fact_two" type="text" name="fact_two" id="fact_two" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-full placeholder-gray-500 focus:ring-0 sm:text-sm" style="border-radius: 0.375rem !important;" required>
                                    </div>
                                    @error('fact_two') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
                                        <label for="fact_three" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                            Three
                                        </label>
                                        <input wire:model.defer="fact_three" type="text" name="fact_three" id="fact_three" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-full placeholder-gray-500 focus:ring-0 sm:text-sm" style="border-radius: 0.375rem !important;" required>
                                    </div>
                                    @error('fact_three') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div x-show="formThree" x-cloak aria-labelledby="skill form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                    My Skill Sets
                </h2>
                <div class="flex-grow space-y-6">
                    <div class="mt-6 flex flex-col lg:flex-row">
                        <div class="flex-grow space-y-6">
                            <div class="grid grid-cols-12 gap-6">
                                <x-dashboard.components.skill-select num="skill_one" :skills="$skills" req="required">
                                    Skill One
                                </x-dashboard.components.skill-select>
                            </div>
                            <div class="relative">
                                <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }} ">
                                    <label for="description_one" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                        Description
                                    </label>
                                    <textarea wire:model.defer="description_one" id="description_one" name="description_one" rows="5" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent text-white' : 'bg-white border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600 text-gray-900' }} shadow-sm mt-1 block w-full sm:text-sm border rounded-md"></textarea>
                                </div>
                                @error('description_one') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="mt-8 grid grid-cols-12 gap-6">
                                <x-dashboard.components.skill-select num="skill_two" :skills="$skills" req="required">
                                    Skill Two
                                </x-dashboard.components.skill-select>
                            </div>
                            <div class="relative">
                                <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }} ">
                                    <label for="description_two" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                        Description
                                    </label>
                                    <textarea wire:model.defer="description_two" id="description_two" name="description_two" rows="5" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent text-white' : 'bg-white border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600 text-gray-900' }} shadow-sm mt-1 block w-full sm:text-sm border rounded-md"></textarea>
                                </div>
                                @error('description_two') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="mt-8 grid grid-cols-12 gap-6">
                                <x-dashboard.components.skill-select num="skill_three" :skills="$skills">
                                    Skill Three
                                </x-dashboard.components.skill-select>
                            </div>
                            <div class="relative">
                                <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }} ">
                                    <label for="description_three" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                        Description
                                    </label>
                                    <textarea wire:model.defer="description_three" id="description_three" name="description_three" rows="5" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent text-white' : 'bg-white border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600 text-gray-900' }} shadow-sm mt-1 block w-full sm:text-sm border rounded-md"></textarea>
                                </div>
                                @error('description_three') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="mt-8 grid grid-cols-12 gap-6">
                                <x-dashboard.components.skill-select num="skill_four" :skills="$skills">
                                    Skill Four
                                </x-dashboard.components.skill-select>
                            </div>
                            <div class="relative">
                                <div class="{{ (auth()->user()->dark_mode) ? 'mt-8' : 'mt-5' }} ">
                                    <label for="description_four" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
                                        Description
                                    </label>
                                    <textarea wire:model.defer="description_four" id="description_four" name="description_four" rows="5" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent text-white' : 'bg-white border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600 text-gray-900' }} shadow-sm mt-1 block w-full sm:text-sm border rounded-md"></textarea>
                                </div>
                                @error('description_four') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>
    </section>
</form>
