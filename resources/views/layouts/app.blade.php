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

        <div class="flex h-full">
            <div class="nav_container min-w-[256px] max-w-[256px] flex flex-col pt-5 pb-4 overflow-y-auto">
                <div class="flex items-center flex-shrink-0 pl-10">
                    <div class="text-white font-bold tracking-wider text-lg cursor-pointer">
                        <a href="#" class="flex items-center">
                            <div class="w-[2.8125rem] transform scale-75">
                                <div
                                    class="bg-white h-[0.1875rem]"
                                    data-aos="fade-right"></div>
                                <div
                                    class="bg-white h-[0.1875rem] mt-1.5 w-9 transition-transform duration-300"
                                    data-aos="fade-right"
                                    data-aos-delay="50"></div>
                                <div
                                    class="bg-white h-[0.1875rem] mt-1.5 w-[1.6875rem] transition-transform duration-300"
                                    data-aos="fade-right"
                                    data-aos-delay="100"></div>
                                <div
                                    class="bg-white h-[0.1875rem] mt-1.5 w-4 transition-transform duration-300"
                                    data-aos="fade-right"
                                    data-aos-delay="150"></div>
                            </div>
                            <span
                                class="leading-none"
                                data-aos="fade-right">
                                DOSSIER.IO
                            </span>
                        </a>
                    </div>
                </div>
                <nav class="mt-5 pt-8 flex-1" aria-label="Sidebar">
                    <a href="#" class="text-white hover:text-white group flex items-center pb-4 pl-10 text-sm font-bold transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" /></svg>
                        <span class="flex-1">
                            Dashboard
                        </span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white group flex items-center py-4 pl-10 text-sm font-bold transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                        <span class="flex-1">
                            Profile
                        </span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white group flex items-center py-4 pl-10 text-sm font-bold transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" /></svg>
                        <span class="flex-1">
                            Skills
                        </span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white group flex items-center py-4 pl-10 text-sm font-bold transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" /></svg>
                        <span class="flex-1">
                            Experience
                        </span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white group flex items-center py-4 pl-10 text-sm font-bold transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" /></svg>
                        <span class="flex-1">
                            Projects
                        </span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white group flex items-center py-4 pl-10 text-sm font-bold transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" /></svg>
                        <span class="flex-1">
                            Testimonials
                        </span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white group flex items-center py-4 pl-10 text-sm font-bold transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd" /></svg>
                        <span class="flex-1">
                            Contact
                        </span>
                    </a>
                </nav>
            </div>
            <div class="flex flex-col flex-1 h-full">
                <div class="flex justify-end min-h-[71px] pr-10">
                    <div class="flex text-gray-400 space-x-4">
                        <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-white cursor-pointer" viewBox="0 0 20 20" fill="currentColor"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" /></svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-white cursor-pointer" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                        </div>
                        <div class="flex justify-center items-center">
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex-1 rounded-tl-3xl overflow-hidden bg-[#F3F4F6] shadow-[inset_0_0_0.3125rem_rgb(0,0,0)]">
                    <main class="h-full overflow-x-hidden overflow-y-auto">

                        <div class="mt-8">
                            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                                <h2 class="text-lg leading-6 font-medium text-gray-900">Overview</h2>
                                <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                                    <!-- Card -->

                                    <div class="bg-white overflow-hidden shadow-md hover:shadow-sm  rounded-lg transition-all duration-300 ease-linear">
                                        <div class="p-5">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0">
                                                    <!-- Heroicon name: outline/scale -->
                                                    <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                                    </svg>
                                                </div>
                                                <div class="ml-5 w-0 flex-1">
                                                    <dl>
                                                        <dt class="text-sm font-medium text-gray-500 truncate">Account balance</dt>
                                                        <dd>
                                                            <div class="text-lg font-medium text-gray-900">$30,659.45</div>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gray-50 px-5 py-3">
                                            <div class="text-sm">
                                                <a href="#" class="font-medium text-cyan-700 hover:text-cyan-900"> View all </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- More items... -->
                                </div>
                            </div>

                            <h2 class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8">Recent activity</h2>

                            <!-- Activity list (smallest breakpoint only) -->
                            <div class="sm:hidden">
                                <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
                                    <li>
                                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                                            <span class="flex items-center space-x-4">
                                              <span class="flex-1 flex space-x-2 truncate">
                                                <!-- Heroicon name: solid/cash -->
                                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                  <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                                </svg>
                                                <span class="flex flex-col text-gray-500 text-sm truncate">
                                                  <span class="truncate">Payment to Molly Sanders</span>
                                                  <span><span class="text-gray-900 font-medium">$20,000</span> USD</span>
                                                  <time datetime="2020-07-11">July 11, 2020</time>
                                                </span>
                                              </span>
                                                <!-- Heroicon name: solid/chevron-right -->
                                              <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                              </svg>
                                            </span>
                                        </a>
                                    </li>

                                    <!-- More transactions... -->
                                </ul>

                                <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200" aria-label="Pagination">
                                    <div class="flex-1 flex justify-between">
                                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500"> Previous </a>
                                        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500"> Next </a>
                                    </div>
                                </nav>
                            </div>

                            <!-- Activity table (small breakpoint and up) -->
                            <div class="hidden sm:block">
                                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                                    <div class="flex flex-col mt-2">
                                        <div class="align-middle min-w-full overflow-x-auto overflow-hidden sm:rounded-lg shadow-md hover:shadow-sm transition-all duration-300 ease-linear">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                                                    <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Title</th>
                                                    <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Email</th>
                                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                        <span class="sr-only">Edit</span>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white">
                                                <tr>
                                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Lindsay Walton</td>
                                                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 sm:table-cell">Front-end Developer</td>
                                                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">lindsay.walton@example.com</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                                                    <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                                                    </td>
                                                </tr>

                                                <!-- More people... -->
                                                </tbody>
                                            </table>
                                            <!-- Pagination -->
                                            <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6" aria-label="Pagination">
                                                <div class="hidden sm:block">
                                                    <p class="text-sm text-gray-700">
                                                        Showing
                                                        <span class="font-medium">1</span>
                                                        to
                                                        <span class="font-medium">10</span>
                                                        of
                                                        <span class="font-medium">20</span>
                                                        results
                                                    </p>
                                                </div>
                                                <div class="flex-1 flex justify-between sm:justify-end">
                                                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Previous </a>
                                                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Next </a>
                                                </div>
                                            </nav>
                                        </div>
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
