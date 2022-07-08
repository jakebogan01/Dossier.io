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
        <script src="https://unpkg.com/@popperjs/core@2" defer></script>
        <script src="https://unpkg.com/tippy.js@6" defer></script>
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
        <style>
            [x-cloak] {
                display: none !important;
            }
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
            /* CHECKBOX TOGGLE SWITCH */
            .toggle-checkbox:checked{
                @apply: right-0;
                right: 0;
                border-color: #ffffff;
            }
            .toggle-checkbox:after{
                content: "";
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                width: 21px;
                border-radius: 100%;
                height: 21px;
                background-color: #ffffff;
                position: absolute;
            }
            .toggle-checkbox:checked + .toggle-label {
                @apply: bg-purple-300;
                background-color: #993BCE;
            }
            .toggle-checkbox:checked + .toggle-dark-label {
                @apply: bg-cyan-400;
                background-color: #4FAE9D;
            }
        </style>
    </head>
    <body class="{{ (auth()->user()->dark_mode) ? 'bg-[#202124]' : 'bg-gradient-to-r from-[#600F93] to-[#120185]' }} antialiased h-full">
        <livewire:welcome-hint />
        <div x-data="{ showMenu: false }" class="flex h-full">
            <div role="dialog" aria-modal="true" aria-labelledby="slide-over-title" class="relative z-50" x-cloak x-show="showMenu"
                x-transition:enter="transition ease-in-out duration-500"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in-out duration-500"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0">
                <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity"></div>
                <div class="fixed inset-0 overflow-hidden">
                    <div class="absolute inset-0 overflow-hidden">
                        <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-[256px] pl-10" x-show="showMenu"
                            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:enter-start="translate-x-full"
                            x-transition:enter-end="translate-x-0"
                            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:leave-start="translate-x-0"
                            x-transition:leave-end="translate-x-full">
                            <div class="pointer-events-auto relative w-screen max-w-md" x-show="showMenu"
                                 x-transition:enter="ease-in-out duration-500"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="ease-in-out duration-500"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0">
                                <div class="absolute top-0 left-0 -ml-8 flex pt-4 pr-2 sm:-ml-10 sm:pr-4">
                                    <button @click="showMenu = !showMenu" type="button" class="rounded-md text-gray-300 sm:hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                        <span class="sr-only">
                                            Close panel
                                        </span>
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                    </button>
                                </div>
                                <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#202124]' : 'bg-[#48128A]' }} nav_container w-full max-w-[256px] h-full flex flex-col py-6 overflow-y-auto shadow-xl">
                                    <a href="{{ route('home') }}" class="text-center">
                                        <span class="sr-only">
                                            Open panel
                                        </span>
                                        <span class="leading-none -ml-1 -mt-1 text-white font-bold tracking-wider text-xl">
                                            DOSSIER.IO
                                        </span>
                                    </a>
                                    <x-dashboard.components.nav class="pt-8"></x-dashboard.components.nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="invisible lg:visible opacity-0 lg:opacity-100 absolute left-0 top-5 flex items-center flex-shrink-0 pl-8 z-10">
                <div class="cursor-pointer">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <x-dashboard.components.nav-logo></x-dashboard.components.nav-logo>
                    </a>
                </div>
            </div>
            <div class="visible lg:invisible opacity-100 lg:opacity-0 absolute left-0 top-5 flex items-center flex-shrink-0 pl-8 z-10">
                <div class="cursor-pointer">
                    <button @click="showMenu = !showMenu" type="button" class="flex items-center">
                        <x-dashboard.components.nav-logo></x-dashboard.components.nav-logo>
                    </button>
                </div>
            </div>
            <div class="nav_container w-[0%] lg:w-full max-w-[256px] invisible lg:visible flex flex-col pt-5 pb-4 overflow-y-auto transform transition-all duration-500 ease-linear">
                <x-dashboard.components.nav class="pt-[62px]"></x-dashboard.components.nav>
            </div>
            <div class="flex flex-col flex-1 h-full">
                <div class="flex justify-end min-h-[71px] pr-10">
                    @livewire('navigation-menu')
                </div>
                <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#343B43]' : 'bg-[#EEEEEE]' }} flex-1 rounded-tl-3xl overflow-hidden shadow-[inset_0_0_0.3125rem_rgb(0,0,0)]">
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
