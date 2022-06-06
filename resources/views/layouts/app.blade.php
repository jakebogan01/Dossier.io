<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="overflow-x-hidden h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <style>
            *, *::before, *::after{
                scrollbar-width: thin;
                scrollbar-color: #000000 #252238;
            }
            ::-webkit-scrollbar{
                width: 0.3125rem;
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
                class="relative z-20"
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
                x-cloak>
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
                                            href="#"
                                            class="text-white sm:hover:text-white group flex pb-4 text-sm font-bold transition-colors">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border border-white h-full block round rounded-fulled-full"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" /></svg>
                                                <span class="flex-1">
                                                    Dashboard
                                                </span>
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="text-[#9650d9] sm:hover:text-white group flex py-4 text-sm font-bold transition-colors">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border border-transparent h-full block rounded-full"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                                                <span class="flex-1">
                                                    Profile
                                                </span>
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="text-[#9650d9] sm:hover:text-white group flex py-4 text-sm font-bold transition-colors">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border border-transparent h-full block rounded-full"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" /></svg>
                                                <span class="flex-1">
                                                    Skills
                                                </span>
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="text-[#9650d9] sm:hover:text-white group flex py-4 text-sm font-bold transition-colors">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border border-transparent h-full block rounded-full"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" /></svg>
                                                <span class="flex-1">
                                                    Experience
                                                </span>
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="text-[#9650d9] sm:hover:text-white group flex py-4 text-sm font-bold transition-colors">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border border-transparent h-full block rounded-full"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" /></svg>
                                                <span class="flex-1">
                                                    Projects
                                                </span>
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="text-[#9650d9] sm:hover:text-white group flex py-4 text-sm font-bold transition-colors">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border border-transparent h-full block rounded-full"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" /></svg>
                                                <span class="flex-1">
                                                    Testimonials
                                                </span>
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="text-[#9650d9] sm:hover:text-white group flex py-4 text-sm font-bold transition-colors">
                                            <span class="relative flex items-center pl-10 grow">
                                                <span class="absolute left-0 border border-transparent h-full block rounded-full"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd" /></svg>
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
                        <span class="opacity-0 lg:opacity-100 leading-none -ml-1 -mt-1 text-white font-bold tracking-wider text-xl transition-opacity duration-300 ease-linear delay-200">
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
                        <span class="opacity-0 lg:opacity-100 leading-none -ml-1 -mt-1 text-white font-bold tracking-wider text-xl transition-opacity duration-300 ease-linear delay-200">
                            DOSSIER.IO
                        </span>
                    </button>
                </div>
            </div>
            <div class="nav_container w-[0%] lg:w-full max-w-[256px] invisible lg:visible flex flex-col pt-5 pb-4 overflow-y-auto transform transition-all duration-300 ease-linear">
                <nav
                    class="mt-5 pt-[62px] flex-1"
                    aria-label="Sidebar">
                    <a
                        href="#"
                        class="text-white sm:hover:text-white group flex pb-4 text-sm font-bold transition-colors">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border border-white h-full block round rounded-fulled-full"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" /></svg>
                            <span class="flex-1">
                                Dashboard
                            </span>
                        </span>
                    </a>
                    <a
                        href="#"
                        class="text-[#9650d9] sm:hover:text-white group flex py-4 text-sm font-bold transition-colors">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border border-transparent h-full block rounded-full"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                            <span class="flex-1">
                                Profile
                            </span>
                        </span>
                    </a>
                    <a
                        href="#"
                        class="text-[#9650d9] sm:hover:text-white group flex py-4 text-sm font-bold transition-colors">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border border-transparent h-full block rounded-full"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" /></svg>
                            <span class="flex-1">
                                Skills
                            </span>
                        </span>
                    </a>
                    <a
                        href="#"
                        class="text-[#9650d9] sm:hover:text-white group flex py-4 text-sm font-bold transition-colors">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border border-transparent h-full block rounded-full"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" /></svg>
                            <span class="flex-1">
                                Experience
                            </span>
                        </span>
                    </a>
                    <a
                        href="#"
                        class="text-[#9650d9] sm:hover:text-white group flex py-4 text-sm font-bold transition-colors">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border border-transparent h-full block rounded-full"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" /></svg>
                            <span class="flex-1">
                                Projects
                            </span>
                        </span>
                    </a>
                    <a
                        href="#"
                        class="text-[#9650d9] sm:hover:text-white group flex py-4 text-sm font-bold transition-colors">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border border-transparent h-full block rounded-full"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" /></svg>
                            <span class="flex-1">
                                Testimonials
                            </span>
                        </span>
                    </a>
                    <a
                        href="#"
                        class="text-[#9650d9] sm:hover:text-white group flex py-4 text-sm font-bold transition-colors">
                        <span class="relative flex items-center pl-10 grow">
                            <span class="absolute left-0 border border-transparent h-full block rounded-full"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd" /></svg>
                            <span class="flex-1">
                                Contact
                            </span>
                        </span>
                    </a>
                </nav>
            </div>
            <div class="flex flex-col flex-1 h-full">
                <div class="flex justify-end min-h-[71px] pr-10">
                    <div class="flex text-[#39499E] space-x-4 transition-colors">
                        <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:hover:text-white cursor-pointer transition-colors" viewBox="0 0 20 20" fill="currentColor"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" /></svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:hover:text-white cursor-pointer transition-colors" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <img
                                class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="flex-1 lg:rounded-tl-3xl overflow-hidden bg-[#F3F4F6] shadow-[inset_0_0_0.3125rem_rgb(0,0,0)] transform transition-border duration-300 delay-400 ease-linear">
                    <main class="h-full overflow-x-hidden overflow-y-auto">
                        <div class="my-8">
                            <div class="mx-auto px-4 sm:px-6 lg:px-8 mt-8">
                                <h2 class="text-lg pb-3 leading-6 font-medium text-gray-900">
                                    Recent Analytics
                                </h2>
                                <div class="mt-2 grid grid-cols-1 gap-5 md:grid-cols-2 2xl:grid-cols-3">
                                    <div class="bg-[#e9edf5] rounded-lg p-2 space-y-4 shadow-md sm:hover:shadow-sm rounded-lg transition-all duration-300 ease-linear">
                                        <div class="flex px-4 py-5 bg-white overflow-hidden sm:p-6 shadow-md sm:hover:shadow-sm rounded-lg transition-all duration-300 ease-linear">
                                            <div class="flex items-center bg-[#57178D] rounded-md p-4 mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" /></svg>
                                            </div>
                                            <div>
                                                <dt class="text-sm font-medium text-gray-500 truncate">
                                                    Total Views
                                                </dt>
                                                <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                                    71,897
                                                </dd>
                                            </div>
                                        </div>

                                        <div class="flex px-4 py-5 bg-white overflow-hidden sm:p-6 shadow-md sm:hover:shadow-sm rounded-lg transition-all duration-300 ease-linear">
                                            <div class="flex items-center bg-[#57178D] rounded-md p-4 mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" /></svg>
                                            </div>
                                            <div>
                                                <dt class="text-sm font-medium text-gray-500 truncate">
                                                    Total Likes
                                                </dt>
                                                <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                                    71,897
                                                </dd>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-data="{
                                        values: [45, 55, 75, 25, 45],
                                        labels: ['Project 1', 'Project 2', 'Project 3', 'Project 4', 'Project 5'],
                                        init() {
                                            let chart = new ApexCharts(this.$refs.chart, this.options)

                                            chart.render()

                                            this.$watch('values', () => {
                                                chart.updateOptions(this.options)
                                            })
                                        },
                                        get options() {
                                            return {
                                                fill: {
                                                  colors: ['#4C148B']
                                                },
                                                chart: { type: 'bar', toolbar: false },
                                                tooltip: {
                                                    marker: false,
                                                    y: {
                                                        formatter(number) {
                                                            return number
                                                        }
                                                    }
                                                },
                                                xaxis: { categories: this.labels },
                                                series: [{
                                                    name: 'LIKES',
                                                    data: this.values,
                                                }],
                                            }
                                        }
                                    }">
                                        <div x-ref="chart" class="bg-white rounded-lg p-2 shadow-md sm:hover:shadow-sm rounded-lg transition-all duration-300 ease-linear"></div>
                                    </div>

                                    <div x-data="{
                                        values: [45, 55, 75, 25, 45, 110],
                                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
                                        init() {
                                            let chart = new ApexCharts(this.$refs.chart, this.options)

                                            chart.render()

                                            this.$watch('values', () => {
                                                chart.updateOptions(this.options)
                                            })
                                        },
                                        get options() {
                                            return {
                                                colors: ['#4C148B'],
                                                dataLabels: {
                                                    style: {
                                                        colors: ['#F44336', '#E91E63', '#9C27B0']
                                                    }
                                                },
                                                markers: {
                                                   colors: ['#150380']
                                                },
                                                chart: { type: 'line', toolbar: false },
                                                tooltip: {
                                                    marker: false,
                                                    y: {
                                                        formatter(number) {
                                                            return number
                                                        }
                                                    }
                                                },
                                                xaxis: { categories: this.labels },
                                                series: [{
                                                    name: 'Views',
                                                    data: this.values,
                                                }],
                                            }
                                        }
                                    }">
                                        <div x-ref="chart" class="bg-white rounded-lg p-2 shadow-md sm:hover:shadow-sm rounded-lg transition-all duration-300 ease-linear"></div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="mx-auto mt-8 pb-3 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8">
                                All Projects
                            </h2>
                            <div class="mx-auto px-4 sm:px-6 lg:px-8">
                                <div class="flex flex-col mt-2">
                                    <div class="relative align-middle min-w-full overflow-x-auto overflow-hidden sm:rounded-lg shadow-md sm:hover:shadow-sm transition-all duration-300 ease-linear">
{{--                                        <div class="absolute top-0 left-12 flex h-12 items-center space-x-3 bg-gray-50 sm:left-16">--}}
{{--                                            <button type="button" class="inline-flex items-center rounded border border-gray-300 bg-white px-2.5 py-1.5 text-xs font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">Bulk edit</button>--}}
{{--                                            <button type="button" class="inline-flex items-center rounded border border-gray-300 bg-white px-2.5 py-1.5 text-xs font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">Delete all</button>--}}
{{--                                        </div>--}}
                                        <table class="min-w-full divide-y divide-gray-300">
                                            <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="relative w-12 px-6 sm:w-16 sm:px-8">
                                                    <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                                                </th>
                                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Title</th>
                                                <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Likes</th>
                                                <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Status</th>
                                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Created</th>
                                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">
                                            <tr>
                                                <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                                                    <!-- Selected row marker, only show when row is selected. -->
                                                    <div class="absolute inset-y-0 left-0 w-0.5 bg-[#501C88]"></div>

                                                    <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                                                </td>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                                    <div class="flex items-center">
                                                        <div class="h-10 w-10 flex-shrink-0">
                                                            <img class="h-10 w-10 rounded-full" src="https://nickjanetakis.com/assets/blog/cards/how-to-start-and-finish-any-web-app-project-678900795cfd6d4fa60e3655dd62ae9f61ef5e14b62ca62050e817e43e861f11.jpg" alt="">
                                                        </div>
                                                        <div class="hidden sm:block ml-4">
                                                            <div class="font-medium text-gray-900">Drawing App</div>
                                                            <div class="text-gray-500">View Code</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell">
                                                    56
                                                </td>
                                                <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                    <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Active</span>
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    July 4, 2022
                                                </td>
                                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                    <a href="#" class="text-[#603997] hover:text-indigo-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="sr-only">, Lindsay Walton</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                                                    <!-- Selected row marker, only show when row is selected. -->
                                                    <div class="absolute inset-y-0 left-0 w-0.5 bg-[#501C88]"></div>

                                                    <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                                                </td>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                                    <div class="flex items-center">
                                                        <div class="h-10 w-10 flex-shrink-0">
                                                            <img class="h-10 w-10 rounded-full" src="https://nickjanetakis.com/assets/blog/cards/how-to-start-and-finish-any-web-app-project-678900795cfd6d4fa60e3655dd62ae9f61ef5e14b62ca62050e817e43e861f11.jpg" alt="">
                                                        </div>
                                                        <div class="hidden sm:block ml-4">
                                                            <div class="font-medium text-gray-900">Drawing App</div>
                                                            <div class="text-gray-500">View Code</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell">
                                                    56
                                                </td>
                                                <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                    <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Active</span>
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    July 4, 2022
                                                </td>
                                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                    <a href="#" class="text-[#603997] hover:text-indigo-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="sr-only">, Lindsay Walton</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                                                    <!-- Selected row marker, only show when row is selected. -->
                                                    <div class="absolute inset-y-0 left-0 w-0.5 bg-[#501C88]"></div>

                                                    <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                                                </td>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                                    <div class="flex items-center">
                                                        <div class="h-10 w-10 flex-shrink-0">
                                                            <img class="h-10 w-10 rounded-full" src="https://nickjanetakis.com/assets/blog/cards/how-to-start-and-finish-any-web-app-project-678900795cfd6d4fa60e3655dd62ae9f61ef5e14b62ca62050e817e43e861f11.jpg" alt="">
                                                        </div>
                                                        <div class="hidden sm:block ml-4">
                                                            <div class="font-medium text-gray-900">Drawing App</div>
                                                            <div class="text-gray-500">View Code</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell">
                                                    56
                                                </td>
                                                <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                    <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Active</span>
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    July 4, 2022
                                                </td>
                                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                    <a href="#" class="text-[#603997] hover:text-indigo-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="sr-only">, Lindsay Walton</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                                                    <!-- Selected row marker, only show when row is selected. -->
                                                    <div class="absolute inset-y-0 left-0 w-0.5 bg-[#501C88]"></div>

                                                    <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                                                </td>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                                    <div class="flex items-center">
                                                        <div class="h-10 w-10 flex-shrink-0">
                                                            <img class="h-10 w-10 rounded-full" src="https://nickjanetakis.com/assets/blog/cards/how-to-start-and-finish-any-web-app-project-678900795cfd6d4fa60e3655dd62ae9f61ef5e14b62ca62050e817e43e861f11.jpg" alt="">
                                                        </div>
                                                        <div class="hidden sm:block ml-4">
                                                            <div class="font-medium text-gray-900">Drawing App</div>
                                                            <div class="text-gray-500">View Code</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell">
                                                    56
                                                </td>
                                                <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                    <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Active</span>
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    July 4, 2022
                                                </td>
                                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                    <a href="#" class="text-[#603997] hover:text-indigo-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="sr-only">, Lindsay Walton</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                                                    <!-- Selected row marker, only show when row is selected. -->
                                                    <div class="absolute inset-y-0 left-0 w-0.5 bg-[#501C88]"></div>

                                                    <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                                                </td>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                                    <div class="flex items-center">
                                                        <div class="h-10 w-10 flex-shrink-0">
                                                            <img class="h-10 w-10 rounded-full" src="https://nickjanetakis.com/assets/blog/cards/how-to-start-and-finish-any-web-app-project-678900795cfd6d4fa60e3655dd62ae9f61ef5e14b62ca62050e817e43e861f11.jpg" alt="">
                                                        </div>
                                                        <div class="hidden sm:block ml-4">
                                                            <div class="font-medium text-gray-900">Drawing App</div>
                                                            <div class="text-gray-500">View Code</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell">
                                                    56
                                                </td>
                                                <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                    <span class="inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800">Not Active</span>
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    July 4, 2022
                                                </td>
                                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                    <a href="#" class="text-[#603997] hover:text-indigo-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="sr-only">, Lindsay Walton</span>
                                                    </a>
                                                </td>
                                            </tr>

                                            <!-- More people... -->
                                            </tbody>
                                        </table>
                                        <nav
                                            class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6"
                                            aria-label="Pagination">
                                            <div class="hidden sm:block">
                                                <p class="text-sm text-gray-700">
                                                    Showing
                                                    <span class="font-medium">
                                                        1
                                                    </span>
                                                    to
                                                    <span class="font-medium">
                                                        10
                                                    </span>
                                                    of
                                                    <span class="font-medium">
                                                        20
                                                    </span>
                                                    results
                                                </p>
                                            </div>
                                            <div class="flex-1 flex justify-between sm:justify-end">
                                                <a
                                                    href="#"
                                                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white sm:hover:bg-gray-50">
                                                    Previous
                                                </a>
                                                <a
                                                    href="#"
                                                    class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white sm:hover:bg-gray-50">
                                                    Next
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

{{--                        <x-jet-banner />--}}
{{--                        <div class="min-h-screen">--}}
{{--                            @livewire('navigation-menu')--}}
{{--                            @if (isset($header))--}}
{{--                                <header class=" shadow">--}}
{{--                                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                                        {{ $header }}--}}
{{--                                    </div>--}}
{{--                                </header>--}}
{{--                            @endif--}}
{{--                            <div>--}}
{{--                                {{ $slot }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </main>
                </div>
            </div>
        </div>
        @stack('modals')
        @livewireScripts
    </body>
</html>
