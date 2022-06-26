<div class="flex text-[#39499E] space-x-4 transition-colors" x-data="{ showSmallMenu: false, switchToDarkMode: false }" @click.away="showSmallMenu = false" @close.stop="showSmallMenu = false">
    <div class="flex justify-center items-center">
        <button type="button" class="group rounded-full inline-flex items-center text-white sm:text-[#39499E] focus:outline-none focus:ring-0 focus:ring-offset-2 focus:ring-transparent" style="box-shadow: none;" aria-expanded="false" @click="switchToDarkMode = !switchToDarkMode">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:hover:text-white cursor-pointer transition-colors" viewBox="0 0 20 20" fill="currentColor" x-show.transition="!switchToDarkMode" x-cloak="!switchToDarkMode"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" /></svg>

            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:hover:text-white cursor-pointer transition-colors" viewBox="0 0 20 20" fill="currentColor" x-show.transition="switchToDarkMode" x-cloak="switchToDarkMode"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" /></svg>
        </button>
    </div>
    <div class="flex justify-center items-center">
        <div class="relative pt-2">
            <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
            <button type="button" class="group rounded-full inline-flex items-center text-white sm:text-[#39499E] focus:outline-none focus:ring-0 focus:ring-offset-2 focus:ring-transparent" style="box-shadow: none;" aria-expanded="false" @click="showSmallMenu = !showSmallMenu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:hover:text-white cursor-pointer transition-colors" :class="{ 'text-white':showSmallMenu }" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
            </button>
            <div class="absolute z-10 left-0 transform -translate-x-[80%] mt-2 px-2 w-screen max-w-[150px] sm:px-0"
                 x-show="showSmallMenu"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 translate-y-1"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 translate-y-1"
                 x-cloak>
                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="relative grid gap-2 bg-white">
                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                 @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:view-portfolio />
</div>
