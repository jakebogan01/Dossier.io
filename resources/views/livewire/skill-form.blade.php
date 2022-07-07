<form action="#" x-data="{ notify: @entangle($toggleWarning) }">
    @csrf

    <x-dashboard.components.notification :message="$message"></x-dashboard.components.notification>

    <section class="grid grid-cols-1 gap-10 md:grid-cols-2 2xl:grid-cols-3 mt-8" x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'introduction' }">
        <div class="col-span-2 space-y-10">
            <div aria-labelledby="skills with live preview" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D]' : 'bg-white' }} shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <ul role="tablist" class="flex items-center">
                    <li @click="formOne = true; formTwo = false; formThree = false">
                        <button type="button"
                            :class="(tab === 'introduction') ? '{{ (auth()->user()->dark_mode) ? 'text-gray-800' : 'text-[#993BCE]' }} bg-white' : '{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-400' }} bg-transparent'"
                            @click.prevent="tab = 'introduction';
                            window.location.hash = 'introduction'"
                            class="inline-flex font-semibold px-5 py-2.5 rounded-t-md"
                            role="tab">
                            Introduction
                        </button>
                    </li>
                    <li @click="formOne = false; formTwo = true; formThree = false">
                        <button type="button"
                            :class="(tab === 'facts') ? '{{ (auth()->user()->dark_mode) ? 'text-gray-800' : 'text-[#993BCE]' }} bg-white' : '{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-400' }} bg-transparent'"
                            @click.prevent="tab = 'facts';
                            window.location.hash = 'facts'"
                            class="inline-flex font-semibold px-5 py-2.5 rounded-t-md"
                            role="tab">
                            Facts
                        </button>
                    </li>
                    <li @click="formOne = false; formTwo = false; formThree = true">
                        <button type="button"
                            :class="(tab === 'skills') ? '{{ (auth()->user()->dark_mode) ? 'text-gray-800' : 'text-[#993BCE]' }} bg-white' : '{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-400' }} bg-transparent'"
                            @click.prevent="tab = 'skills';
                            window.location.hash = 'skills'"
                            class="inline-flex font-semibold px-5 py-2.5 rounded-t-md"
                            role="tab">
                            Skills
                        </button>
                    </li>
                </ul>
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
                    <section x-show="tab === 'facts'" x-cloak>
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
                            @foreach($currentUser->skills as $key => $skill)
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-white' : 'bg-gray-100' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    @if($currentUser->skills[$key]['skill'] !== "")
                                        <dt class="flex items-center text-sm font-medium text-gray-500">
                                            {!! $skills[$currentUser->skills[$key]['skill']] ?: '-' !!}
                                        </dt>
                                    @else
                                        <dt class="flex items-center text-sm font-medium text-gray-500">
                                            -
                                        </dt>
                                    @endif
                                    @if($currentUser)
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $currentUser->skills[$key]['description'] ?: 'Description of your skill' }}
                                        </dd>
                                    @else
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Description of your skill
                                        </dd>
                                    @endif
                                </div>
                            @endforeach
                        </dl>
                    </section>
                </div>
            </div>
            <div x-show="tab === 'introduction'" x-cloak aria-labelledby="skill form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                            My Intro
                        </h2>
                        <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} mt-1 max-w-2xl text-sm">
                            Feel free to introduce yourself to your viewers and impress them with your knowledge.
                        </p>
                    </div>
                    <button wire:click.prevent="register()" @click="notify = true" type="submit" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#407780]' : 'bg-[#993BCE] sm:hover:bg-[#57168C]' }} inline-flex justify-center items-center font-bold text-white h-10 px-4 border border-transparent text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md sm:transition-colors">
                        Update
                    </button>
                </div>
                <div class="flex-grow space-y-6 mt-14">
                    <x-dashboard.components.form-fields.textarea-field model="introduction" title="Brief Introduction" max="180" styles="{{ (auth()->user()->dark_mode) ? 'mt-12' : 'mt-5' }}"></x-dashboard.components.form-fields.textarea-field>
                </div>
            </div>
            <div x-show="tab === 'facts'" x-cloak aria-labelledby="skill form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                            My Fun Facts
                        </h2>
                        <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} mt-1 max-w-2xl text-sm">
                            Display at least one or more impressive fact about yourself.
                        </p>
                    </div>
                    <button @click.prevent="tab = 'introduction'; window.location.hash = 'introduction'" type="button" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#407780]' : 'bg-[#993BCE] sm:hover:bg-[#57168C]' }} inline-flex justify-center items-center font-bold text-white h-10 px-4 border border-transparent text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md sm:transition-colors">
                        Back
                    </button>
                </div>
                <div class="flex-grow">
                    <div class="mt-14 flex flex-col lg:flex-row">
                        <div class="flex-grow">
                            <div class="{{ (auth()->user()->dark_mode) ? 'gap-y-10' : 'gap-y-6' }} grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 sm:col-span-6">
                                    <x-dashboard.components.form-fields.input-field type="text" model="fact_one" title="Fact One" max="70"></x-dashboard.components.form-fields.input-field>
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <x-dashboard.components.form-fields.input-field type="text" model="fact_two" title="Fact Two" max="70"></x-dashboard.components.form-fields.input-field>
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <x-dashboard.components.form-fields.input-field type="text" model="fact_three" title="Fact Three" max="70"></x-dashboard.components.form-fields.input-field>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div x-show="tab === 'skills'" x-cloak aria-labelledby="skill form" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg leading-6 font-medium">
                            My Skill Sets
                        </h2>
                        <p class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} mt-1 max-w-2xl text-sm">
                            Describe at least tow or more of your top skills.
                        </p>
                    </div>
                    <button @click.prevent="tab = 'introduction'; window.location.hash = 'introduction'" type="button" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#407780]' : 'bg-[#993BCE] sm:hover:bg-[#57168C]' }} inline-flex justify-center items-center font-bold text-white h-10 px-4 border border-transparent text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md sm:transition-colors">
                       Back
                    </button>
                </div>
                <div class="flex-grow">
                    <div class="mt-14 flex flex-col lg:flex-row">
                        <div class="{{ (auth()->user()->dark_mode) ? 'space-y-10' : 'space-y-6' }} flex-grow">
                            <div class="grid grid-cols-12 gap-6">
                                <x-dashboard.components.form-fields.skill-select num="skill_one" :skills="$skills">
                                    Skill One
                                </x-dashboard.components.form-fields.skill-select>
                            </div>
                            <x-dashboard.components.form-fields.textarea-field model="description_one" title="Skill Description" max="180"></x-dashboard.components.form-fields.textarea-field>
                            <div class="mt-8 grid grid-cols-12 gap-6">
                                <x-dashboard.components.form-fields.skill-select num="skill_two" :skills="$skills">
                                    Skill Two
                                </x-dashboard.components.form-fields.skill-select>
                            </div>
                            <x-dashboard.components.form-fields.textarea-field model="description_two" title="Skill Description" max="180"></x-dashboard.components.form-fields.textarea-field>
                            <div class="mt-8 grid grid-cols-12 gap-6">
                                <x-dashboard.components.form-fields.skill-select num="skill_three" :skills="$skills">
                                    Skill Three
                                </x-dashboard.components.form-fields.skill-select>
                            </div>
                            <x-dashboard.components.form-fields.textarea-field model="description_three" title="Skill Description" max="180"></x-dashboard.components.form-fields.textarea-field>
                            <div class="mt-8 grid grid-cols-12 gap-6">
                                <x-dashboard.components.form-fields.skill-select num="skill_four" :skills="$skills">
                                    Skill Four
                                </x-dashboard.components.form-fields.skill-select>
                            </div>
                            <x-dashboard.components.form-fields.textarea-field model="description_four" title="SKill Description" max="180"></x-dashboard.components.form-fields.textarea-field>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-dashboard.components.recent-activities :activities="$activities"></x-dashboard.components.recent-activities>
    </section>
</form>
