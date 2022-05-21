<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.js"></script>

    </head>
    <body class="antialiased bg-[#0F1119]">

{{--        @if (Route::has('login'))--}}
{{--            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                @auth--}}
{{--                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
{{--                @else--}}
{{--                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                    @if (Route::has('register'))--}}
{{--                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                    @endif--}}
{{--                @endauth--}}
{{--            </div>--}}
{{--        @endif--}}

        <main class="main_container max-w-2560 mx-auto">

            <div class="flex py-[3.125rem] px-[1.5625rem] font-lato" x-data="{ test: false }">

                <nav class="mt-10 space-y-12 transition-all duration-300 delay-500 overflow-hidden" :class="{ 'w-[58px]': test, 'w-0': !test }" x-cloak="test">
                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-700': test, 'translate-y-10 opacity-0 delay-250': !test }" width="54.617" height="54.617" viewBox="0 0 54.617 54.617"><path d="M27.309,0A27.309,27.309,0,1,0,54.617,27.309,27.309,27.309,0,0,0,27.309,0Zm0,12.585L40.643,22.948V42.032H31.469V30.513h-8.32V42.034H13.974V22.948Z" fill="#fff"/></svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-800': test, 'translate-y-10 opacity-0 delay-200': !test }" width="54.617" height="54.617" viewBox="0 0 54.617 54.617"><path d="M33.039,22.116H27.578V16.654h5.462m0,27.309H27.578V27.578h5.462M30.309,3A27.309,27.309,0,1,0,57.617,30.309,27.309,27.309,0,0,0,30.309,3Z" transform="translate(-3 -3)" fill="#fff"/></svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-900': test, 'translate-y-10 opacity-0 delay-150': !test }" width="54.617" height="54.617" viewBox="0 0 54.617 54.617"><path d="M22.96,42.1a17.569,17.569,0,0,1-12.385-5.067L22.96,24.8V7.5a17.3,17.3,0,1,1,0,34.6Z" transform="translate(4.305 2.508)" fill="#fff"/><path d="M56.117,28.809A27.309,27.309,0,1,1,28.809,1.5,27.308,27.308,0,0,1,56.117,28.809Zm-4.965,0A22.343,22.343,0,1,1,28.809,6.465,22.343,22.343,0,0,1,51.152,28.809Z" transform="translate(-1.5 -1.5)" fill="#fff" fill-rule="evenodd"/></svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1000': test, 'translate-y-10 opacity-0 delay-100': !test }" width="54.617" height="54.617" viewBox="0 0 54.617 54.617"><path d="M27.309,0A27.309,27.309,0,1,0,54.617,27.309,27.309,27.309,0,0,0,27.309,0ZM36.5,8.531a3.067,3.067,0,0,1,2.165.889l4.544,4.542a3.357,3.357,0,0,1-.188,4.735,3.356,3.356,0,0,1-4.735.19L33.74,14.345a3.357,3.357,0,0,1,.19-4.735,3.6,3.6,0,0,1,2.565-1.079Zm-7.489,6L38.1,23.619,23.328,38.384,14.24,29.3,29.008,14.533ZM11.882,31.016,21.468,40.6,9.482,43l2.4-11.985Z" fill="#fff"/></svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1100': test, 'translate-y-10 opacity-0 delay-50': !test }" width="54.617" height="54.617" viewBox="0 0 54.617 54.617"><path d="M27.309,0A27.309,27.309,0,1,0,54.617,27.309,27.309,27.309,0,0,0,27.309,0ZM25.218,12.855l1.173,5.4c-3.438.762-6.6,1.751-6.343,5.591h4.04V38.231H11.917V24.789c0-10.682,7.847-11.552,13.3-11.934Zm16.3,0,1.177,5.4c-3.438.762-6.6,1.751-6.343,5.591H40.4V38.231H28.225V24.789c0-10.682,7.844-11.552,13.3-11.934Z" fill="#fff"/></svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1200': test, 'translate-y-10 opacity-0': !test }" width="54.617" height="54.617" viewBox="0 0 54.617 54.617"><path d="M30.684,3.375A27.309,27.309,0,1,0,57.992,30.684,27.388,27.388,0,0,0,30.684,3.375Zm0,8.194a8.194,8.194,0,1,1-8.194,8.194,8.221,8.221,0,0,1,8.194-8.194Zm0,39.44A19.891,19.891,0,0,1,14.3,42.264C14.429,36.8,25.222,33.8,30.684,33.8S46.938,36.8,47.069,42.264A19.929,19.929,0,0,1,30.684,51.009Z" transform="translate(-3.375 -3.375)" fill="#fff"/></svg>
                </nav>

                <div class="flex-1 space-y-[3.125rem]">
                    <div class="flex relative bg-[#1C1F2D] px-[5.3125rem] pt-[2.1875rem] pb-[7.375rem] mx-[1.5625rem] overflow-hidden bg-no-repeat bg-right-top bg-auto" style="background-image: url('/images/svg/background-pattern.svg')">
                        <div class="flex-1">
                            <div class="mb-[4.375rem]">
{{-- menu --}}
                                <div class="w-[2.8125rem] space-y-1.5 cursor-pointer" @click="test = !test">
                                    <div class="bg-white h-[0.1875rem]"></div>
                                    <div class="bg-white h-[0.1875rem] w-9 transition-transform duration-300" :class="{ 'translate-x-[9px] delay-200': test, 'delay-800': !test }"></div>
                                    <div class="bg-white h-[0.1875rem] w-[1.6875rem] transition-transform  duration-300" :class="{ 'translate-x-[18px] delay-100': test, 'delay-700': !test }"></div>
                                    <div class="bg-white h-[0.1875rem] w-4 transition-transform duration-300" :class="{ 'translate-x-[29px]': test, 'delay-600': !test }"></div>
                                </div>
                            </div>
                            <div class="text-[3.375rem] font-black text-white">
                                <h1 class="leading-[1.1] tracking-wider">HELLO, I’M<br>
                                    FOO<br>
                                    THIS…<br>
                                    IS MY LEGACY
                                </h1>
                            </div>
                            <div class="flex font-black my-[3.125rem]">
                                <div class="flex-1">
                                    <span class="block text-[#FFCF7B] text-[2.125rem] tracking-widest">24</span>
                                    <span class="block text-[#B1B7D6] text-[0.8125rem]">CLIENTS</span>
                                </div>
                                <div class="flex-1">
                                    <span class="block text-[#FFCF7B] text-[2.125rem] tracking-widest">32</span>
                                    <span class="block text-[#B1B7D6] text-[0.8125rem]">PROJECTS</span>
                                </div>
                                <div class="flex-1">
                                    <span class="block text-[#FFCF7B] text-[2.125rem] tracking-widest">06</span>
                                    <span class="block text-[#B1B7D6] text-[0.8125rem]">TOOLS</span>
                                </div>
                            </div>
                            <div>
                                <a href="">
                                    <button type="button" class="inline-flex justify-between items-center px-6 py-3 border border-transparent shadow-sm text-[0.8125rem] font-black text-white bg-[#4046FF] hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 max-w-[11.25rem] w-full tracking-widest">
                                        LETS TALK
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </a>
                            </div>
                        </div>

{{-- users profile picture --}}
                        <div class="flex-1 pt-10 pl-[165px]">
                            <div class="flex items-center justify-center w-[30.0625rem] h-[30.0625rem] rounded-full" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659); box-shadow: 0 0 4.125rem #FFE26B;">
                                <div class="w-[25.125rem] h-[25.125rem] bg-[#1C1F2D] rounded-full bg-no-repeat bg-center bg-cover" style="background-image: url('https://avatars.githubusercontent.com/u/66225768?v=4')"></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between relative bg-[#1C1F2D] px-[5.3125rem] pt-20 mx-[1.5625rem] overflow-hidden">
                        <div class="flex-1 pr-12 text-[#B1B7D6] font-bold text-base leading-loose">
                            <h2 class="mb-12 text-white text-[2.8rem] font-black leading-none -mt-2">
                                I AM
                            </h2>
                            <p class="leading-loose mb-10">
                                A junior web developer with a background in UI & UX.
                                I have a passion for learning new skills while expanding
                                my existing skill set. I have over 3 years of professional
                                experience.
                            </p>
                            <ul class="space-y-7">
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[1.3125rem] h-[1.3125rem] mr-5" viewBox="0 0 21 21">
                                        <circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b" />
                                        <circle cx="4.5" cy="4.5" r="4.5" fill="#1c1f2d" transform="translate(6 6)" />
                                    </svg>
                                    learn to design myself. I always create my best.
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[1.3125rem] h-[1.3125rem] mr-5" viewBox="0 0 21 21">
                                        <circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b" />
                                        <circle cx="4.5" cy="4.5" r="4.5" fill="#1c1f2d" transform="translate(6 6)" />
                                    </svg>
                                    Experimenting with new ideas and design trends is my daily habit.
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[1.3125rem] h-[1.3125rem] mr-5" viewBox="0 0 21 21">
                                        <circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b" />
                                        <circle cx="4.5" cy="4.5" r="4.5" fill="#1c1f2d" transform="translate(6 6)" />
                                    </svg>
                                    Interaction and illustrations are areas more focused now.
                                </li>
                            </ul>
                        </div>

                        <div class="flex">
                            <div class="mr-12 space-y-12">
                                <div class="relative w-[15.625rem] bg-[#4046FF] px-7 pb-[1.875rem] pt-3 text-base font-bold leading-loose text-white space-y-7">
                                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center w-[3.375rem] h-[3.375rem] rounded-full" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="#4046FF">
                                            <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl">
                                        UI & UX
                                    </h3>
                                    <p class="leading-loose">
                                        Expertise in UI & UX design. more focused on visual designs aspects.
                                    </p>
                                    <a href="#" class="flex items-center">
                                        View more
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>

                                <div class="relative w-[15.625rem] bg-[#555C7E] px-7 pb-[1.875rem] pt-3 text-base font-bold leading-loose text-white space-y-7">
                                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center w-[3.375rem] h-[3.375rem] rounded-full" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="#4046FF">
                                            <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl">
                                        UI & UX
                                    </h3>
                                    <p class="leading-loose">
                                        Expertise in UI & UX design. more focused on visual designs aspects.
                                    </p>
                                    <a href="#" class="flex items-center font-bold">
                                        View more
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="space-y-12">
                                <h2 class="text-xl text-white tracking-widest leading-none -mt-1 font-bold pb-3">
                                    TOP SKILLS
                                </h2>

                                <div class="relative w-[15.625rem] bg-[#555C7E] px-7 pb-[1.875rem] pt-3 text-base font-bold leading-loose text-white space-y-7">
                                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center w-[3.375rem] h-[3.375rem] rounded-full" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="#4046FF">
                                            <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl">
                                        UI & UX
                                    </h3>
                                    <p class="leading-loose">
                                        Expertise in UI & UX design. more focused on visual designs aspects.
                                    </p>
                                    <a href="#" class="flex items-center font-bold">
                                        View more
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>

                                <div class="relative w-[15.625rem] bg-[#555C7E] px-7 pb-[1.875rem] pt-3 text-base font-bold leading-loose text-white space-y-7">
                                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center w-[3.375rem] h-[3.375rem] rounded-full" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="#4046FF">
                                            <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl">
                                        UI & UX
                                    </h3>
                                    <p class="leading-loose">
                                        Expertise in UI & UX design. more focused on visual designs aspects.
                                    </p>
                                    <a href="#" class="flex items-center font-bold">
                                        View more
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative bg-[#1C1F2D] px-[5.3125rem] py-20 mx-[1.5625rem] text-[#B1B7D6] text-base leading-loose overflow-hidden bg-no-repeat bg-right-bottom bg-auto" style="background-image: url('/images/svg/background-pattern-2.svg')">

                        <h2 class="mb-8 text-white text-[2.8rem] font-black leading-none mb-16">
                            EXPERIENCES
                        </h2>

                        <div class="absolute left-[49.85%] border-2 border-[#363A4D] h-full mt-12"></div>

                        <!-- left timeline -->
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="z-20 flex items-center order-1 shadow-xl w-8 h-8 rounded-full">
                                <div class="mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[1.3125rem] h-[1.3125rem]" viewBox="0 0 21 21">
                                        <circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b" />
                                        <circle cx="4.5" cy="4.5" r="4.5" fill="#1c1f2d" transform="translate(6 6)" />
                                    </svg>
                                </div>
                            </div>
                            <div class="order-1 w-5/12">
                                <div class="flex">
                                    <div class="flex-1">
                                        <h4 class="mt-2 text-2xl text-white font-bold text-right">
                                            A designer born
                                        </h4>
                                    </div>
                                    <div class="min-w-[152px]"></div>
                                </div>
                                <div class="flex">
                                    <div class="flex-1 pt-4">
                                        <p class="text-[#B1B7D6] font-bold text-right">
                                            Yes, I was born as a 90’s kid.
                                            Started observing the world.
                                        </p>
                                    </div>
                                    <div class="flex">
                                        <div class="pl-[3.125rem] -mt-1.5 text-right">
                                            <span class="block font-black text-[2.75rem] text-[#FFCF7B] leading-none">1990</span>
                                            <span class="block text-sm font-bold text-[0.9375rem]">JUNE</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- right timeline -->
                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="z-20 flex items-center order-1 shadow-xl w-8 h-8 rounded-full">
                                <div class="mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[1.3125rem] h-[1.3125rem]" viewBox="0 0 21 21">
                                        <circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b" />
                                        <circle cx="4.5" cy="4.5" r="4.5" fill="#1c1f2d" transform="translate(6 6)" />
                                    </svg>
                                </div>
                            </div>
                            <div class="order-1 w-5/12">
                                <div class="flex flex-row-reverse">
                                    <div class="flex-1">
                                        <h4 class="mt-2 text-2xl text-white font-bold text-left">
                                            A designer born
                                        </h4>
                                    </div>
                                    <div class="min-w-[152px]"></div>
                                </div>
                                <div class="flex flex-row-reverse">
                                    <div class="flex-1 pt-4">
                                        <p class="text-[#B1B7D6] font-bold text-left">
                                            Yes, I was born as a 90’s kid.
                                            Started observing the world.
                                        </p>
                                    </div>
                                    <div class="flex">
                                        <div class="pr-[3.125rem] -mt-1.5 text-left">
                                            <span class="block font-black text-[2.75rem] text-[#FFCF7B] leading-none">1990</span>
                                            <span class="block text-sm font-bold text-[0.9375rem]">JUNE</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- left timeline -->
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="z-20 flex items-center order-1 shadow-xl w-8 h-8 rounded-full">
                                <div class="mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[1.3125rem] h-[1.3125rem]" viewBox="0 0 21 21">
                                        <circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b" />
                                        <circle cx="4.5" cy="4.5" r="4.5" fill="#1c1f2d" transform="translate(6 6)" />
                                    </svg>
                                </div>
                            </div>
                            <div class="order-1 w-5/12">
                                <div class="flex">
                                    <div class="flex-1">
                                        <h4 class="mt-2 text-2xl text-white font-bold text-right">
                                            A designer born
                                        </h4>
                                    </div>
                                    <div class="min-w-[152px]"></div>
                                </div>
                                <div class="flex">
                                    <div class="flex-1 pt-4">
                                        <p class="text-[#B1B7D6] font-bold text-right">
                                            Yes, I was born as a 90’s kid.
                                            Started observing the world.
                                        </p>
                                    </div>
                                    <div class="flex">
                                        <div class="pl-[3.125rem] -mt-1.5 text-right">
                                            <span class="block font-black text-[2.75rem] text-[#FFCF7B] leading-none">1990</span>
                                            <span class="block text-sm font-bold text-[0.9375rem]">JUNE</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- right timeline -->
                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="z-20 flex items-center order-1 shadow-xl w-8 h-8 rounded-full">
                                <div class="mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[1.3125rem] h-[1.3125rem]" viewBox="0 0 21 21">
                                        <circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b" />
                                        <circle cx="4.5" cy="4.5" r="4.5" fill="#1c1f2d" transform="translate(6 6)" />
                                    </svg>
                                </div>
                            </div>
                            <div class="order-1 w-5/12">
                                <div class="flex flex-row-reverse">
                                    <div class="flex-1">
                                        <h4 class="mt-2 text-2xl text-white font-bold text-left">
                                            A designer born
                                        </h4>
                                    </div>
                                    <div class="min-w-[152px]"></div>
                                </div>
                                <div class="flex flex-row-reverse">
                                    <div class="flex-1 pt-4">
                                        <p class="text-[#B1B7D6] font-bold text-left">
                                            Yes, I was born as a 90’s kid.
                                            Started observing the world.
                                        </p>
                                    </div>
                                    <div class="flex">
                                        <div class="pr-[3.125rem] -mt-1.5 text-left">
                                            <span class="block font-black text-[2.75rem] text-[#FFCF7B] leading-none">1990</span>
                                            <span class="block text-sm font-bold text-[0.9375rem]">JUNE</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- left timeline -->
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="z-20 flex items-center order-1 shadow-xl w-8 h-8 rounded-full">
                                <div class="mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[1.3125rem] h-[1.3125rem]" viewBox="0 0 21 21">
                                        <circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b" />
                                        <circle cx="4.5" cy="4.5" r="4.5" fill="#1c1f2d" transform="translate(6 6)" />
                                    </svg>
                                </div>
                            </div>
                            <div class="order-1 w-5/12">
                                <div class="flex">
                                    <div class="flex-1">
                                        <h4 class="mt-2 text-2xl text-white font-bold text-right">
                                            A designer born
                                        </h4>
                                    </div>
                                    <div class="min-w-[152px]"></div>
                                </div>
                                <div class="flex">
                                    <div class="flex-1 pt-4">
                                        <p class="text-[#B1B7D6] font-bold text-right">
                                            Yes, I was born as a 90’s kid.
                                            Started observing the world.
                                        </p>
                                    </div>
                                    <div class="flex">
                                        <div class="pl-[3.125rem] -mt-1.5 text-right">
                                            <span class="block font-black text-[2.75rem] text-[#FFCF7B] leading-none">1990</span>
                                            <span class="block text-sm font-bold text-[0.9375rem]">JUNE</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- right timeline -->
                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="z-20 flex items-center order-1 shadow-xl w-8 h-8 rounded-full">
                                <div class="mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[1.3125rem] h-[1.3125rem]" viewBox="0 0 21 21">
                                        <circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b" />
                                        <circle cx="4.5" cy="4.5" r="4.5" fill="#1c1f2d" transform="translate(6 6)" />
                                    </svg>
                                </div>
                            </div>
                            <div class="order-1 w-5/12">
                                <div class="flex flex-row-reverse">
                                    <div class="flex-1">
                                        <h4 class="mt-2 text-2xl text-white font-bold text-left">
                                            A designer born
                                        </h4>
                                    </div>
                                    <div class="min-w-[152px]"></div>
                                </div>
                                <div class="flex flex-row-reverse">
                                    <div class="flex-1 pt-4">
                                        <p class="text-[#B1B7D6] font-bold text-left">
                                            Yes, I was born as a 90’s kid.
                                            Started observing the world.
                                        </p>
                                    </div>
                                    <div class="flex">
                                        <div class="pr-[3.125rem] -mt-1.5 text-left">
                                            <span class="block font-black text-[2.75rem] text-[#FFCF7B] leading-none">1990</span>
                                            <span class="block text-sm font-bold text-[0.9375rem]">JUNE</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- left timeline -->
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="z-20 flex items-center order-1 shadow-xl w-8 h-8 rounded-full">
                                <div class="mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[1.3125rem] h-[1.3125rem]" viewBox="0 0 21 21">
                                        <circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b" />
                                        <circle cx="4.5" cy="4.5" r="4.5" fill="#1c1f2d" transform="translate(6 6)" />
                                    </svg>
                                </div>
                            </div>
                            <div class="order-1 w-5/12">
                                <div class="flex">
                                    <div class="flex-1">
                                        <h4 class="mt-2 text-2xl text-white font-bold text-right">
                                            A designer born
                                        </h4>
                                    </div>
                                    <div class="min-w-[152px]"></div>
                                </div>
                                <div class="flex">
                                    <div class="flex-1 pt-4">
                                        <p class="text-[#B1B7D6] font-bold text-right">
                                            Yes, I was born as a 90’s kid.
                                            Started observing the world.
                                        </p>
                                    </div>
                                    <div class="flex">
                                        <div class="pl-[3.125rem] -mt-1.5 text-right">
                                            <span class="block font-black text-[2.75rem] text-[#FFCF7B] leading-none">1990</span>
                                            <span class="block text-sm font-bold text-[0.9375rem]">JUNE</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex-1 space-y-[3.125rem]">

                    <div class="flex relative bg-[#1C1F2D] mx-[1.5625rem] overflow-hidden">
                        <div
                            x-data="{
                                skip: 1,
                                atBeginning: false,
                                atEnd: false,
                                next() {
                                    this.to((current, offset) => current + (offset * this.skip))
                                },
                                prev() {
                                    this.to((current, offset) => current - (offset * this.skip))
                                },
                                to(strategy) {
                                    let slider = this.$refs.slider
                                    let current = slider.scrollLeft
                                    let offset = slider.firstElementChild.getBoundingClientRect().width
                                    slider.scrollTo({ left: strategy(current, offset), behavior: 'smooth' })
                                },
                                focusableWhenVisible: {
                                    'x-intersect:enter'() {
                                        this.$el.removeAttribute('tabindex')
                                    },
                                    'x-intersect:leave'() {
                                        this.$el.setAttribute('tabindex', '-1')
                                    },
                                },
                                disableNextAndPreviousButtons: {
                                    'x-intersect:enter.threshold.05'() {
                                        let slideEls = this.$el.parentElement.children

                                        // If this is the first slide.
                                        if (slideEls[0] === this.$el) {
                                            this.atBeginning = true
                                        // If this is the last slide.
                                        } else if (slideEls[slideEls.length-1] === this.$el) {
                                            this.atEnd = true
                                        }
                                    },
                                    'x-intersect:leave.threshold.05'() {
                                        let slideEls = this.$el.parentElement.children

                                        // If this is the first slide.
                                        if (slideEls[0] === this.$el) {
                                            this.atBeginning = false
                                        // If this is the last slide.
                                        } else if (slideEls[slideEls.length-1] === this.$el) {
                                            this.atEnd = false
                                        }
                                    },
                                },
                            }"
                            class="flex flex-col w-full">
                            <div
                                x-on:keydown.right="next"
                                x-on:keydown.left="prev"
                                tabindex="0"
                                role="region"
                                aria-labelledby="carousel-label"
                                class="relative">

                                <h2 id="carousel-label" class="sr-only" hidden>Carousel</h2>

                                <span id="carousel-content-label" class="sr-only" hidden>My Projects</span>

                                <h2 class="absolute pl-16 mb-8 mt-12 text-white text-[2.8rem] font-black tracking-wider z-20">
                                    MY WORK
                                </h2>

                                <ul
                                    x-ref="slider"
                                    tabindex="0"
                                    role="listbox"
                                    aria-labelledby="carousel-content-label"
                                    class="flex w-full overflow-hidden hover:overflow-x-auto snap-x snap-mandatory max-h-[550px] min-h-[550px] h-full">

                                    <li x-bind="disableNextAndPreviousButtons" class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center g-no-repeat bg-center bg-cover" role="option" style="background-image: url('https://avatars.githubusercontent.com/u/66225768?v=4')">
                                        <div class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 pl-16" style="background-color: rgba(0,0,0,0.5)">
                                            <h3 class="flex items-center font-bold text-[23px] mb-6 opacity-60">
                                                Art app
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 opacity-70 hover:opacity-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                                      <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                    </svg>
                                                </span>
                                            </h3>
                                            <p class="font-bold text-base max-w-[300px] leading-loose mb-6">
                                                App designed for people’s wellness.
                                                There are many functionalities
                                                Implemented for better engagement. Food,
                                                chat, events and leader boards are the
                                                major functionalities.
                                            </p>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white">
                                                    VIEW PROJECT
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white">
                                                    VIEW CODE
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </div>
                                    </li>

                                    <li x-bind="disableNextAndPreviousButtons" class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center g-no-repeat bg-center bg-cover" role="option" style="background-image: url('https://www.liveabout.com/thmb/FeWbkEye5kn7wmE96gVodlbFsig=/2121x1193/smart/filters:no_upscale()/GettyImages-638316888-58bd8bc93df78c353c5b8631.jpg')">
                                        <div class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 pl-16" style="background-color: rgba(0,0,0,0.5)">
                                            <h3 class="flex items-center font-bold text-[23px] mb-6">
                                                Art app
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 opacity-50 hover:opacity-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                                      <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                    </svg>
                                                </span>
                                            </h3>
                                            <p class="font-bold text-base max-w-[300px] leading-loose mb-6">
                                                App designed for people’s wellness.
                                                There are many functionalities
                                                Implemented for better engagement. Food,
                                                chat, events and leader boards are the
                                                major functionalities.
                                            </p>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white">
                                                    VIEW PROJECT
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white">
                                                    VIEW CODE
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </div>
                                    </li>

                                    <li x-bind="disableNextAndPreviousButtons" class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center g-no-repeat bg-center bg-cover" role="option" style="background-image: url('https://www.liveabout.com/thmb/FeWbkEye5kn7wmE96gVodlbFsig=/2121x1193/smart/filters:no_upscale()/GettyImages-638316888-58bd8bc93df78c353c5b8631.jpg')">
                                        <div class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 pl-16" style="background-color: rgba(0,0,0,0.5)">
                                            <h3 class="flex items-center font-bold text-[23px] mb-6">
                                                Art app
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 opacity-50 hover:opacity-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                                      <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                    </svg>
                                                </span>
                                            </h3>
                                            <p class="font-bold text-base max-w-[300px] leading-loose mb-6">
                                                App designed for people’s wellness.
                                                There are many functionalities
                                                Implemented for better engagement. Food,
                                                chat, events and leader boards are the
                                                major functionalities.
                                            </p>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white">
                                                    VIEW PROJECT
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white">
                                                    VIEW CODE
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </div>
                                    </li>

                                    <li x-bind="disableNextAndPreviousButtons" class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center g-no-repeat bg-center bg-cover" role="option" style="background-image: url('https://www.liveabout.com/thmb/FeWbkEye5kn7wmE96gVodlbFsig=/2121x1193/smart/filters:no_upscale()/GettyImages-638316888-58bd8bc93df78c353c5b8631.jpg')">
                                        <div class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 pl-16" style="background-color: rgba(0,0,0,0.5)">
                                            <h3 class="flex items-center font-bold text-[23px] mb-6">
                                                Art app
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 opacity-50 hover:opacity-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                                      <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                    </svg>
                                                </span>
                                            </h3>
                                            <p class="font-bold text-base max-w-[300px] leading-loose mb-6">
                                                App designed for people’s wellness.
                                                There are many functionalities
                                                Implemented for better engagement. Food,
                                                chat, events and leader boards are the
                                                major functionalities.
                                            </p>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white">
                                                    VIEW PROJECT
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white">
                                                    VIEW CODE
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </div>
                                    </li>

                                    <li x-bind="disableNextAndPreviousButtons" class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center g-no-repeat bg-center bg-cover" role="option" style="background-image: url('https://www.liveabout.com/thmb/FeWbkEye5kn7wmE96gVodlbFsig=/2121x1193/smart/filters:no_upscale()/GettyImages-638316888-58bd8bc93df78c353c5b8631.jpg')">
                                        <div class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 pl-16" style="background-color: rgba(0,0,0,0.5)">
                                            <h3 class="flex items-center font-bold text-[23px] mb-6">
                                                Art app
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 opacity-50 hover:opacity-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                                      <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                    </svg>
                                                </span>
                                            </h3>
                                            <p class="font-bold text-base max-w-[300px] leading-loose mb-6">
                                                App designed for people’s wellness.
                                                There are many functionalities
                                                Implemented for better engagement. Food,
                                                chat, events and leader boards are the
                                                major functionalities.
                                            </p>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white">
                                                    VIEW PROJECT
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white">
                                                    VIEW CODE
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </div>
                                    </li>

                                    <li x-bind="disableNextAndPreviousButtons" class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center g-no-repeat bg-center bg-cover" role="option" style="background-image: url('https://www.liveabout.com/thmb/FeWbkEye5kn7wmE96gVodlbFsig=/2121x1193/smart/filters:no_upscale()/GettyImages-638316888-58bd8bc93df78c353c5b8631.jpg')">
                                        <div class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 pl-16" style="background-color: rgba(0,0,0,0.5)">
                                            <h3 class="flex items-center font-bold text-[23px] mb-6">
                                                Art app
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 opacity-50 hover:opacity-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                                      <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                    </svg>
                                                </span>
                                            </h3>
                                            <p class="font-bold text-base max-w-[300px] leading-loose mb-6">
                                                App designed for people’s wellness.
                                                There are many functionalities
                                                Implemented for better engagement. Food,
                                                chat, events and leader boards are the
                                                major functionalities.
                                            </p>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white">
                                                    VIEW PROJECT
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white">
                                                    VIEW CODE
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </div>
                                    </li>
                                </ul>

                                <div class="flex justify-between">
                                    <div
                                        x-on:click="prev"
                                        :aria-disabled="atBeginning"
                                        :tabindex="atEnd ? -1 : 0"
                                        :class="{ 'opacity-50 cursor-not-allowed': atBeginning }"
                                        class="flex-1 flex items-center bg-[#2B3046] py-[35px] pl-[82px] group cursor-pointer">
                                    <!-- Prev Button -->
                                        <button class="flex justify-center items-center bg-[#4046FF] w-[48px] h-[48px] group-hover:bg-[#575cff]" type="button">
                                            <span aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                                                </svg>
                                            </span>
                                            <span class="sr-only">Skip to previous slide page</span>
                                        </button>

                                        <span class="ml-16 text-[#656A84] text-[15px] font-black group-hover:text-[#B1B7D6]">
                                            PREVIOUS
                                        </span>
                                    </div>

                                    <div
                                        x-on:click="next"
                                        :aria-disabled="atEnd"
                                        :tabindex="atEnd ? -1 : 0"
                                        :class="{ 'opacity-50 cursor-not-allowed': atEnd }"
                                        class="flex-1 flex justify-end items-center bg-[#272C41] py-[35px] pr-[82px] group cursor-pointer">
                                    <!-- Next Button -->
                                        <span class="mr-16 text-[#656A84] text-[15px] font-black group-hover:text-[#B1B7D6]">
                                            NEXT
                                        </span>
                                        <button class="flex justify-center items-center bg-[#4046FF] w-[48px] h-[48px] group-hover:bg-[#575cff]" type="button">
                                            <span aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                                                </svg>
                                            </span>
                                            <span class="sr-only">Skip to next slide page</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex relative bg-[#1C1F2D] mx-[1.5625rem] overflow-hidden bg-no-repeat bg-right-bottom bg-auto" style="background-image: url('/images/svg/background-pattern-2.svg')">

                        <div
                            x-data="{
                                skip: 1,
                                atBeginning: false,
                                atEnd: false,
                                next() {
                                    this.to((current, offset) => current + (offset * this.skip))
                                },
                                prev() {
                                    this.to((current, offset) => current - (offset * this.skip))
                                },
                                to(strategy) {
                                    let slider = this.$refs.slider
                                    let current = slider.scrollLeft
                                    let offset = slider.firstElementChild.getBoundingClientRect().width
                                    slider.scrollTo({ left: strategy(current, offset), behavior: 'smooth' })
                                },
                                focusableWhenVisible: {
                                    'x-intersect:enter'() {
                                        this.$el.removeAttribute('tabindex')
                                    },
                                    'x-intersect:leave'() {
                                        this.$el.setAttribute('tabindex', '-1')
                                    },
                                },
                                disableNextAndPreviousButtons: {
                                    'x-intersect:enter.threshold.05'() {
                                        let slideEls = this.$el.parentElement.children

                                        // If this is the first slide.
                                        if (slideEls[0] === this.$el) {
                                            this.atBeginning = true
                                        // If this is the last slide.
                                        } else if (slideEls[slideEls.length-1] === this.$el) {
                                            this.atEnd = true
                                        }
                                    },
                                    'x-intersect:leave.threshold.05'() {
                                        let slideEls = this.$el.parentElement.children

                                        // If this is the first slide.
                                        if (slideEls[0] === this.$el) {
                                            this.atBeginning = false
                                        // If this is the last slide.
                                        } else if (slideEls[slideEls.length-1] === this.$el) {
                                            this.atEnd = false
                                        }
                                    },
                                },
                            }"
                            class="flex flex-col w-full">

                            <div
                                x-on:keydown.right="next"
                                x-on:keydown.left="prev"
                                tabindex="0"
                                role="region"
                                aria-labelledby="carousel-label"
                                class="flex space-x-6">

                                <h2 id="carousel-label" class="sr-only" hidden>Carousel</h2>

                                <div class="flex items-center pl-[82px]">
                                    <button
                                        x-on:click="prev"
                                        class="flex justify-center items-center bg-[#4046FF] w-[48px] h-[48px] hover:bg-[#575cff]"
                                        type="button"
                                        :aria-disabled="atBeginning"
                                        :tabindex="atEnd ? -1 : 0"
                                        :class="{ 'opacity-50 cursor-not-allowed': atBeginning }">
                                                <span aria-hidden="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                                                    </svg>
                                                </span>
                                        <span class="sr-only">Skip to previous slide page</span>
                                    </button>
                                </div>

                                <span id="carousel-content-label" class="sr-only" hidden>Carousel</span>

                                <ul
                                    x-ref="slider"
                                    tabindex="0"
                                    role="listbox"
                                    aria-labelledby="carousel-content-label"
                                    class="flex w-full overflow-hidden hover:overflow-x-auto snap-x snap-mandatory">

                                    <li x-bind="disableNextAndPreviousButtons" class="flex snap-start w-full shrink-0 flex flex-col items-center justify-center" role="option">
                                        <div class="flex">
                                            <div class="relative flex justify-center items-center">
                                                <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                                                <img class="object-cover max-w-[341px] w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
                                            </div>
                                            <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                                                <div class="mx-auto max-w-md px-4 sm:px-6 lg:px-0 lg:py-20 leading-loose">
                                                    <blockquote>
                                                        <div>
                                                            <svg class="h-10 w-10 text-[#71758D] opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                                            </svg>
                                                            <p class="mt-6 text-sm font-bold text-[#B1B7D6] leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.</p>
                                                        </div>
                                                        <footer class="mt-6">
                                                            <p class="text-[22px] font-bold text-white">Judith Black</p>
                                                            <p class="text-[17px] font-bold text-[#B1B7D6]">CEO at PureInsights</p>
                                                        </footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li x-bind="disableNextAndPreviousButtons" class="flex snap-start w-full shrink-0 flex flex-col items-center justify-center" role="option">
                                        <div class="flex">
                                            <div class="relative flex justify-center items-center">
                                                <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                                                <img class="object-cover max-w-[341px] w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
                                            </div>
                                            <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                                                <div class="mx-auto max-w-md px-4 sm:px-6 lg:px-0 lg:py-20 leading-loose">
                                                    <blockquote>
                                                        <div>
                                                            <svg class="h-10 w-10 text-[#71758D] opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                                            </svg>
                                                            <p class="mt-6 text-sm font-bold text-[#B1B7D6] leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.</p>
                                                        </div>
                                                        <footer class="mt-6">
                                                            <p class="text-[22px] font-bold text-white">Judith Black</p>
                                                            <p class="text-[17px] font-bold text-[#B1B7D6]">CEO at PureInsights</p>
                                                        </footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li x-bind="disableNextAndPreviousButtons" class="flex snap-start w-full shrink-0 flex flex-col items-center justify-center" role="option">
                                        <div class="flex">
                                            <div class="relative flex justify-center items-center">
                                                <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                                                <img class="object-cover max-w-[341px] w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
                                            </div>
                                            <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                                                <div class="mx-auto max-w-md px-4 sm:px-6 lg:px-0 lg:py-20 leading-loose">
                                                    <blockquote>
                                                        <div>
                                                            <svg class="h-10 w-10 text-[#71758D] opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                                            </svg>
                                                            <p class="mt-6 text-sm font-bold text-[#B1B7D6] leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.</p>
                                                        </div>
                                                        <footer class="mt-6">
                                                            <p class="text-[22px] font-bold text-white">Judith Black</p>
                                                            <p class="text-[17px] font-bold text-[#B1B7D6]">CEO at PureInsights</p>
                                                        </footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li x-bind="disableNextAndPreviousButtons" class="flex snap-start w-full shrink-0 flex flex-col items-center justify-center" role="option">
                                        <div class="flex">
                                            <div class="relative flex justify-center items-center">
                                                <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                                                <img class="object-cover max-w-[341px] w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
                                            </div>
                                            <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                                                <div class="mx-auto max-w-md px-4 sm:px-6 lg:px-0 lg:py-20 leading-loose">
                                                    <blockquote>
                                                        <div>
                                                            <svg class="h-10 w-10 text-[#71758D] opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                                            </svg>
                                                            <p class="mt-6 text-sm font-bold text-[#B1B7D6] leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.</p>
                                                        </div>
                                                        <footer class="mt-6">
                                                            <p class="text-[22px] font-bold text-white">Judith Black</p>
                                                            <p class="text-[17px] font-bold text-[#B1B7D6]">CEO at PureInsights</p>
                                                        </footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li x-bind="disableNextAndPreviousButtons" class="flex snap-start w-full shrink-0 flex flex-col items-center justify-center" role="option">
                                        <div class="flex">
                                            <div class="relative flex justify-center items-center">
                                                <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                                                <img class="object-cover max-w-[341px] w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
                                            </div>
                                            <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                                                <div class="mx-auto max-w-md px-4 sm:px-6 lg:px-0 lg:py-20 leading-loose">
                                                    <blockquote>
                                                        <div>
                                                            <svg class="h-10 w-10 text-[#71758D] opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                                            </svg>
                                                            <p class="mt-6 text-sm font-bold text-[#B1B7D6] leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.</p>
                                                        </div>
                                                        <footer class="mt-6">
                                                            <p class="text-[22px] font-bold text-white">Judith Black</p>
                                                            <p class="text-[17px] font-bold text-[#B1B7D6]">CEO at PureInsights</p>
                                                        </footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li x-bind="disableNextAndPreviousButtons" class="flex snap-start w-full shrink-0 flex flex-col items-center justify-center" role="option">
                                        <div class="flex">
                                            <div class="relative flex justify-center items-center">
                                                <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                                                <img class="object-cover max-w-[341px] w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
                                            </div>
                                            <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                                                <div class="mx-auto max-w-md px-4 sm:px-6 lg:px-0 lg:py-20 leading-loose">
                                                    <blockquote>
                                                        <div>
                                                            <svg class="h-10 w-10 text-[#71758D] opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                                            </svg>
                                                            <p class="mt-6 text-sm font-bold text-[#B1B7D6] leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.</p>
                                                        </div>
                                                        <footer class="mt-6">
                                                            <p class="text-[22px] font-bold text-white">Judith Black</p>
                                                            <p class="text-[17px] font-bold text-[#B1B7D6]">CEO at PureInsights</p>
                                                        </footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="flex items-center pr-[82px]">
                                    <button
                                        x-on:click="next"
                                        class="flex justify-center items-center bg-[#4046FF] w-[48px] h-[48px] hover:bg-[#575cff]"
                                        type="button"
                                        :aria-disabled="atEnd"
                                        :tabindex="atEnd ? -1 : 0"
                                        :class="{ 'opacity-50 cursor-not-allowed': atEnd }">
                                        <span aria-hidden="true">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="h-8 w-8 text-white"
                                                 fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor"
                                                 stroke-width="2">
                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </span>
                                        <span class="sr-only">Skip to next slide page</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex relative bg-[#1C1F2D] px-[5.3125rem] mx-[1.5625rem] overflow-hidden bg-no-repeat bg-left-bottom bg-auto" style="background-image: url('/images/svg/background-pattern-2.svg')">
                        <div class="relative">
                            <div class="absolute inset-0">
                                <div class="absolute inset-y-0 left-0 w-1/2"></div>
                            </div>
                            <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
                                <div class="py-16 pr-4 sm:pr-6 lg:col-span-2 lg:pr-8 lg:py-24 xl:pr-12">
                                    <div class="max-w-lg mx-auto">
                                        <h2 class="text-[2.8rem] font-black text-white leading-none mb-8">
                                            LET'S TALK
                                        </h2>
                                        <p class="mt-3 text-[15px] font-bold leading-loose text-[#B1B7D6]">
                                            Reach to me for any UI & UX, branding, campaigns, advertising and any creative works. Let’s discuss and make an awesome experience together.
                                        </p>
                                        <dl class="mt-16">
                                            <div class="mt-6">
                                                <dt class="sr-only">Phone number</dt>
                                                <dd class="flex text-[18px] font-bold text-[#6F7490]">
                                                    Ring me: +1 (555) 123-4567
                                                </dd>
                                            </div>
                                            <div class="mt-3">
                                                <dt class="sr-only">Email</dt>
                                                <dd class="flex text-[18px] font-bold text-[#6F7490]">
                                                    Email me: support@example.com
                                                </dd>
                                            </div>
                                        </dl>
                                        <div class="flex mt-10 space-x-8">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="38" viewBox="0 0 36 38"><g transform="translate(-1443 -1982)"><circle cx="18" cy="18" r="18" transform="translate(1443 1983)" fill="#e2e7ff"/><text transform="translate(1456 2013)" fill="#1c1f2d" font-size="31" font-family="Lato-Black, Lato" font-weight="800"><tspan x="0" y="0">f</tspan></text></g></svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><g transform="translate(-1496 -1983)"><circle cx="18" cy="18" r="18" transform="translate(1496 1983)" fill="#e2e7ff"/><text transform="translate(1504 2011)" fill="#1c1f2d" font-size="25" font-family="Lato-Black, Lato" font-weight="800"><tspan x="0" y="0">in</tspan></text></g></svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><g transform="translate(-1543 -1984)"><circle cx="18" cy="18" r="18" transform="translate(1543 1984)" fill="#e2e7ff"/><path d="M9.537,18.294c-4.669,1.4-4.669-2.335-6.537-2.8m13.074,5.6V17.482a3.147,3.147,0,0,0-.878-2.437c2.932-.327,6.014-1.438,6.014-6.537a5.08,5.08,0,0,0-1.4-3.5,4.735,4.735,0,0,0-.085-3.521s-1.1-.327-3.651,1.382a12.5,12.5,0,0,0-6.537,0C6.988,1.158,5.886,1.485,5.886,1.485A4.735,4.735,0,0,0,5.8,5.005a5.08,5.08,0,0,0-1.4,3.53c0,5.061,3.082,6.173,6.014,6.537a3.147,3.147,0,0,0-.878,2.409V21.1" transform="translate(1548.895 1990.722)" fill="none" stroke="#1d202e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><g transform="translate(-1590 -1990)"><circle cx="18" cy="18" r="18" transform="translate(1590 1990)" fill="#e2e7ff"/><path d="M12.35.563A11.787,11.787,0,1,0,24.137,12.35,11.8,11.8,0,0,0,12.35.563ZM20.143,6a10.02,10.02,0,0,1,2.274,6.272,23.528,23.528,0,0,0-7.011-.324c-.273-.667-.531-1.254-.885-1.978A13.411,13.411,0,0,0,20.143,6ZM19.024,4.834a11.368,11.368,0,0,1-5.277,3.637A53.741,53.741,0,0,0,9.99,2.577a10.042,10.042,0,0,1,9.033,2.257ZM8.069,3.254A64.241,64.241,0,0,1,11.8,9.076,37.554,37.554,0,0,1,2.494,10.3,10.1,10.1,0,0,1,8.069,3.254ZM2.282,12.365c0-.1,0-.205.005-.308a37.139,37.139,0,0,0,10.347-1.433c.288.564.564,1.137.816,1.709A15.6,15.6,0,0,0,4.87,19.1,10.028,10.028,0,0,1,2.282,12.365ZM6.17,20.308c1.052-2.15,3.906-4.925,7.965-6.31a41.85,41.85,0,0,1,2.148,7.635A10.048,10.048,0,0,1,6.17,20.308Zm11.805.4a43.455,43.455,0,0,0-1.956-7.178,14.778,14.778,0,0,1,6.271.43,10.086,10.086,0,0,1-4.315,6.748Z" transform="translate(1595.65 1995.65)" fill="#1d1f2d"/></g></svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><g transform="translate(-1664 -1990)"><circle cx="18" cy="18" r="18" transform="translate(1664 1990)" fill="#e2e7ff"/><path d="M11.239,7.714A5.763,5.763,0,1,0,17,13.477,5.754,5.754,0,0,0,11.239,7.714Zm0,9.51a3.747,3.747,0,1,1,3.747-3.747,3.754,3.754,0,0,1-3.747,3.747Zm7.343-9.746a1.344,1.344,0,1,1-1.344-1.344A1.341,1.341,0,0,1,18.582,7.478ZM22.4,8.842a6.652,6.652,0,0,0-1.816-4.71,6.7,6.7,0,0,0-4.71-1.816c-1.856-.105-7.418-.105-9.274,0a6.686,6.686,0,0,0-4.71,1.811A6.674,6.674,0,0,0,.074,8.837c-.105,1.856-.105,7.418,0,9.274a6.652,6.652,0,0,0,1.816,4.71A6.7,6.7,0,0,0,6.6,24.637c1.856.105,7.418.105,9.274,0a6.652,6.652,0,0,0,4.71-1.816,6.7,6.7,0,0,0,1.816-4.71c.105-1.856.105-7.413,0-9.269ZM20,20.1a3.793,3.793,0,0,1-2.137,2.137c-1.48.587-4.991.451-6.626.451s-5.151.13-6.626-.451A3.793,3.793,0,0,1,2.476,20.1c-.587-1.48-.451-4.991-.451-6.626s-.13-5.151.451-6.626A3.793,3.793,0,0,1,4.613,4.714c1.48-.587,4.991-.451,6.626-.451s5.151-.13,6.626.451A3.793,3.793,0,0,1,20,6.851c.587,1.48.451,4.991.451,6.626S20.588,18.628,20,20.1Z" transform="translate(1670.764 1994.523)" fill="#1c1f2d"/></g></svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="py-16 pl-4 sm:pl-6 lg:col-span-3 lg:py-24 lg:pl-8 xl:pl-12 ml-[70px]">
                                    <div class="max-w-lg mx-auto lg:max-w-none">
                                        <form class="mt-12 space-y-5" action="" method="POST">
                                            @csrf
                                            <div>
                                                <div class="relative">
                                                    <input id="email" name="email" type="email" class="peer h-10 w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none" placeholder="john@doe.com" aria-invalid="true" aria-describedby="email-error" style="box-shadow: none;" required />
                                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                    <label for="email" class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                        </svg>
                                                    </label>
                                                </div>
{{--                                                <p class="mt-2 text-sm text-red-600" id="email-error">Your password must be less than 4 characters.</p>--}}
                                            </div>

                                            <div>
                                                <div class="relative">
                                                    <input id="phone" name="phone" type="tel" class="peer h-10 w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none" placeholder="8008881234" aria-invalid="true" aria-describedby="email-error" style="box-shadow: none;" />
                                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                        <!-- Heroicon name: solid/exclamation-circle -->
                                                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                    <label for="phone" class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                        </svg>
                                                    </label>
                                                </div>
{{--                                                <p class="mt-2 text-sm text-red-600" id="email-error">Your password must be less than 4 characters.</p>--}}
                                            </div>

                                            <div>
                                                <div class="relative">
                                                    <textarea rows="1" name="message" id="message" class="pt-3 peer w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none " placeholder="Message" aria-invalid="true" aria-describedby="message-error" style="box-shadow: none;"></textarea>
                                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                        <!-- Heroicon name: solid/exclamation-circle -->
                                                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                    <label for="message" class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                                                        </svg>
                                                    </label>
                                                </div>
{{--                                                <p class="mt-2 text-sm text-red-600" id="email-error">Your password must be less than 4 characters.</p>--}}
                                            </div>
                                            <div class="flex justify-end pt-12">
                                                <button type="submit" class="inline-flex justify-between items-center px-6 py-3 border border-transparent shadow-sm text-[0.8125rem] font-black text-white bg-[#4046FF] hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 max-w-[11.25rem] w-full tracking-widest">
                                                    LETS TALK
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </main>

    </body>
</html>
