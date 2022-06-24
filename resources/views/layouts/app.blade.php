<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="overflow-x-hidden h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Dossier.io help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves.">
        <meta property="og:description" content="Dossier.io help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves.">
        <meta property="og:title" content="Dossier.io Dashboard">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="shortcut icon" type="image/x-icon" href="/images/icons/light-icon.svg" id="faviconTag">
        @livewireStyles
        <!-- Scripts -->
        <script>
            const faviconTag = document.getElementById("faviconTag");
            const isDark = window.matchMedia("(prefers-color-scheme: dark)");
            const changeFavicon = () => {
                if (isDark.matches) faviconTag.href = "/images/icons/dark-icon.svg";
                else faviconTag.href = "/images/icons/light-icon.svg";
            };
            isDark.addEventListener('change', (e) => changeFavicon());
            isDark.addListener((e) => changeFavicon());
            changeFavicon();
        </script>
        <!-- Source -->
        <script>
            document.addEventListener('alpine:init', () => {
                // Magic: $tooltip
                Alpine.magic('tooltip', el => message => {
                    let instance = tippy(el, {
                        content: message,
                        trigger: 'manual',
                        placement: 'right',
                        arrow: true,
                        animation: 'fade',
                    })

                    instance.show()

                    setTimeout(() => {
                        instance.hide()

                        setTimeout(() => instance.destroy(), 150)
                    }, 1000)
                })
            })
        </script>
        <script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","name":"Dossier.io Dashboard","description":"Help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves."}</script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ @asset('vendor/larapex-charts/apexcharts.js') }}" defer></script>
        <script src="https://unpkg.com/@popperjs/core@2" defer></script>
        <script src="https://unpkg.com/tippy.js@6" defer></script>
        <style>
            *, *::before, *::after{
                scrollbar-width: none;
                scrollbar-width: 0;
                scrollbar-color: #000000 #252238;
            }
            ::-webkit-scrollbar{
                width: 0;
                background-color: #252238;
            }
            ::-webkit-scrollbar-thumb{
                background: #000000;
            }
            .nav_container {
                -ms-overflow-style: none; /* Edge, Internet Explorer */
                scrollbar-width: none; /* Firefox */
                overflow-y: scroll;
            }
            .nav_container::-webkit-scrollbar {
               display: none; /* Chrome, Safari, Opera */
           }
        </style>
    </head>
    <body class="bg-gradient-to-r from-[#600F93] to-[#120185] antialiased h-full">
        <div
            class="flex h-full"
            x-data="{ showMenu: false }">
            <div
                class="relative z-50"
                aria-labelledby="slide-over-title"
                role="dialog"
                aria-modal="true"
                x-show="showMenu"
                x-transition:enter="transition ease-in-out duration-500"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in-out duration-500"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                x-cloak="!showMenu">
                <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity"></div>
                <div class="fixed inset-0 overflow-hidden">
                    <div class="absolute inset-0 overflow-hidden">
                        <div
                            class="pointer-events-none fixed inset-y-0 right-0 flex max-w-[256px] pl-10"
                            x-show="showMenu"
                            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:enter-start="translate-x-full"
                            x-transition:enter-end="translate-x-0"
                            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:leave-start="translate-x-0"
                            x-transition:leave-end="translate-x-full">
                            <div
                                class="pointer-events-auto relative w-screen max-w-md"
                                 x-show="showMenu"
                                 x-transition:enter="ease-in-out duration-500"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="ease-in-out duration-500"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0">
                                <div class="absolute top-0 left-0 -ml-8 flex pt-4 pr-2 sm:-ml-10 sm:pr-4">
                                    <button
                                        type="button"
                                        class="rounded-md text-gray-300 sm:hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                                        @click="showMenu = !showMenu">
                                        <span class="sr-only">
                                            Close panel
                                        </span>
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                    </button>
                                </div>
                                <div class="nav_container bg-[#48128A] w-full max-w-[256px] h-full flex flex-col py-6 overflow-y-auto shadow-xl transform transition-all duration-300 ease-linear">
                                    <a
                                        href="/"
                                        class="text-center">
                                        <span class="sr-only">
                                            Open panel
                                        </span>
                                        <span class="leading-none -ml-1 -mt-1 text-white font-bold tracking-wider text-xl">
                                            DOSSIER.IO
                                        </span>
                                    </a>
                                    <nav
                                        class="mt-5 pt-8 flex-1"
                                        aria-label="Sidebar">
                                        <a
                                            href="{{ route('dashboard') }}"
                                            class="sm:hover:text-white group flex pb-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('dashboard')) ? 'text-white' : 'text-white sm:text-[#9650d9]' }}">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('dashboard')) ? 'border-white' : 'border-transparent' }}"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" /></svg>
                                                <span class="flex-1">
                                                    Dashboard
                                                </span>
                                            </span>
                                        </a>
                                        <a
                                            href="{{ route('profile') }}"
                                            class="sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('profile')) ? 'text-white' : 'text-white sm:text-[#9650d9]' }}">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('profile')) ? 'border-white' : 'border-transparent' }}"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                                                <span class="flex-1">
                                                    Profile
                                                </span>
                                            </span>
                                        </a>
                                        <a
                                            href="{{ route('skills') }}"
                                            class="sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('skills')) ? 'text-white' : 'text-white sm:text-[#9650d9]' }}">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('skills')) ? 'border-white' : 'border-transparent' }}"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                                                <span class="flex-1">
                                                    Skills
                                                </span>
                                            </span>
                                        </a>
                                        <a
                                            href="{{ route('experiences') }}"
                                            class="sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('experiences')) ? 'text-white' : 'text-white sm:text-[#9650d9]' }}">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('experiences')) ? 'border-white' : 'border-transparent' }}"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                                                <span class="flex-1">
                                                    Experience
                                                </span>
                                            </span>
                                        </a>
                                        <a
                                            href="{{ route('projects') }}"
                                            class="sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('projects')) ? 'text-white' : 'text-white sm:text-[#9650d9]' }}">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('projects')) ? 'border-white' : 'border-transparent' }}"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                                                <span class="flex-1">
                                                    Projects
                                                </span>
                                            </span>
                                        </a>
                                        <a
                                            href="{{ route('testimonials') }}"
                                            class="sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('testimonials')) ? 'text-white' : 'text-white sm:text-[#9650d9]' }}">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('testimonials')) ? 'border-white' : 'border-transparent' }}"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                                                <span class="flex-1">
                                                    Testimonials
                                                </span>
                                            </span>
                                        </a>
                                        <a
                                            href="{{ route('contact') }}"
                                            class="sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('contact')) ? 'text-white' : 'text-white sm:text-[#9650d9]' }}">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('contact')) ? 'border-white' : 'border-transparent' }}"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                                                <span class="flex-1">
                                                    Contact
                                                </span>
                                            </span>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="invisible lg:visible opacity-0 lg:opacity-100 absolute left-0 top-5 flex items-center flex-shrink-0 pl-8 z-10">
                <div class="cursor-pointer">
                    <a
                        href="/"
                        class="flex items-center">
                        <span class="sr-only">
                            Open panel
                        </span>
                        <div class="w-[2.8125rem] transform scale-50">
                            <div class="bg-white h-[0.1875rem]"></div>
                            <div
                                class="bg-white h-[0.1875rem] mt-1.5 w-full lg:w-[80%]"
                                style="transition: width 0.3s linear;"></div>
                            <div
                                class="bg-white h-[0.1875rem] mt-1.5 w-full lg:w-[60%]"
                                style="transition: width 0.3s linear;"></div>
                            <div
                                class="bg-white h-[0.1875rem] mt-1.5 w-full lg:w-[35%]"
                                style="transition: width 0.3s linear;"></div>
                        </div>
                        <span class="opacity-0 lg:opacity-100 leading-none -ml-1 -mt-1 text-white font-bold tracking-wider text-xl transition-opacity delay-200">
                            DOSSIER.IO
                        </span>
                    </a>
                </div>
            </div>
            <div class="visible lg:invisible opacity-100 lg:opacity-0 absolute left-0 top-5 flex items-center flex-shrink-0 pl-8 z-10">
                <div class="cursor-pointer">
                    <button
                        type="button"
                        class="flex items-center"
                        @click="showMenu = !showMenu">
                        <span class="sr-only">
                            Open panel
                        </span>
                        <div class="w-[2.8125rem] transform scale-50">
                            <div class="bg-white h-[0.1875rem]"></div>
                            <div
                                class="bg-white h-[0.1875rem] mt-1.5 w-full lg:w-[80%]"
                                style="transition: width 0.3s linear;"></div>
                            <div
                                class="bg-white h-[0.1875rem] mt-1.5 w-full lg:w-[60%]"
                                style="transition: width 0.3s linear;"></div>
                            <div
                                class="bg-white h-[0.1875rem] mt-1.5 w-full lg:w-[35%]"
                                style="transition: width 0.3s linear;"></div>
                        </div>
                        <span class="opacity-0 lg:opacity-100 leading-none -ml-1 -mt-1 text-white font-bold tracking-wider text-xl transition-opacity delay-200">
                            DOSSIER.IO
                        </span>
                    </button>
                </div>
            </div>
            <div class="nav_container w-[0%] lg:w-full max-w-[256px] invisible lg:visible flex flex-col pt-5 pb-4 overflow-y-auto transform transition-all duration-500 ease-linear">
                <nav
                    class="mt-5 pt-[62px] flex-1"
                    aria-label="Sidebar">
                    <a
                        href="{{ route('dashboard') }}"
                        class="sm:hover:text-white group flex pb-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('dashboard')) ? 'text-white' : 'text-[#9650d9]' }}">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('dashboard')) ? 'border-white' : 'border-transparent' }}"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" /></svg>
                            <span class="flex-1">
                                Dashboard
                            </span>
                        </span>
                    </a>
                    <a
                        href="{{ route('profile') }}"
                        class="sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('profile')) ? 'text-white' : 'text-[#9650d9]' }}">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('profile')) ? 'border-white' : 'border-transparent' }}"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                            <span class="flex-1">
                                Profile
                            </span>
                        </span>
                    </a>
                    <a
                        href="{{ route('skills') }}"
                        class="sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('skills')) ? 'text-white' : 'text-[#9650d9]' }}">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('skills')) ? 'border-white' : 'border-transparent' }}"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                            <span class="flex-1">
                                Skills
                            </span>
                        </span>
                    </a>
                    <a
                        href="{{ route('experiences') }}"
                        class="sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('experiences')) ? 'text-white' : 'text-[#9650d9]' }}">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('experiences')) ? 'border-white' : 'border-transparent' }}"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                            <span class="flex-1">
                                Experience
                            </span>
                        </span>
                    </a>
                    <a
                        href="{{ route('projects') }}"
                        class="sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('projects')) ? 'text-white' : 'text-[#9650d9]' }}">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('projects')) ? 'border-white' : 'border-transparent' }}"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                            <span class="flex-1">
                                Projects
                            </span>
                        </span>
                    </a>
                    <a
                        href="{{ route('testimonials') }}"
                        class="sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('testimonials')) ? 'text-white' : 'text-[#9650d9]' }}">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('testimonials')) ? 'border-white' : 'border-transparent' }}"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                            <span class="flex-1">
                                Testimonials
                            </span>
                        </span>
                    </a>
                    <a
                        href="{{ route('contact') }}"
                        class="sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors {{ (request()->routeIs('contact')) ? 'text-white' : 'text-[#9650d9]' }}">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border h-full block round rounded-fulled-full {{ (request()->routeIs('contact')) ? 'border-white' : 'border-transparent' }}"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                            <span class="flex-1">
                                Contact
                            </span>
                        </span>
                    </a>
                </nav>
            </div>
            <div class="flex flex-col flex-1 h-full">
                <div class="flex justify-end min-h-[71px] pr-10">
                    @livewire('navigation-menu')
                </div>
                <div class="flex-1 rounded-tl-3xl overflow-hidden bg-[#EEEEEE] shadow-[inset_0_0_0.3125rem_rgb(0,0,0)]">
                    <main class="h-full overflow-x-hidden overflow-y-auto">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
        @stack('modals')
        @livewireScripts
    </body>
</html>
