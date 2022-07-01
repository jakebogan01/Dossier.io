<div x-data="{ settingMenu: false }" @click.away="settingMenu = false" @close.stop="settingMenu = false" class="flex text-[#39499E] space-x-4 transition-colors">
    <livewire:dark-mode />
    <div class="flex justify-center items-center">
        <div class="relative pt-2">
            <button type="button" class="group rounded-full inline-flex items-center text-white sm:text-[#39499E] focus:outline-none focus:ring-0 focus:ring-offset-2 focus:ring-transparent" style="box-shadow: none;" aria-expanded="false" @click="settingMenu = !settingMenu">
                <svg xmlns="http://www.w3.org/2000/svg" class="{{ (auth()->user()->dark_mode) ? 'hidden' : 'inline' }} h-6 w-6 sm:hover:text-white cursor-pointer transition-colors" :class="{ 'text-white': settingMenu }" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="{{ (auth()->user()->dark_mode) ? 'inline' : 'hidden' }} h-6 w-6 sm:hover:text-white cursor-pointer transition-colors text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
            </button>
            <div class="absolute z-10 left-0 transform -translate-x-[80%] mt-2 px-2 w-screen max-w-[150px] sm:px-0" x-cloak x-show="settingMenu"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 translate-y-1"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 translate-y-1"
                 style="z-index: 1000 !important;">
                <div class="relative rounded-md shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="relative grid gap-2 bg-white">
                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <x-jet-dropdown-link @click.prevent="$root.submit();" href="{{ route('logout') }}">
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
