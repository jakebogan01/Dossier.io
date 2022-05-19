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

        <main class="main_container max-w-2560 border border-red-600 mx-auto">

            <div class="flex border border-blue-500 py-[3.125rem] px-[1.5625rem] font-lato">
                <div class="flex-1 space-y-[3.125rem]">
                    <div class="flex relative bg-[#1C1F2D] px-[5.3125rem] pt-[2.1875rem] pb-[7.375rem] mx-[1.5625rem] overflow-hidden bg-no-repeat bg-right-top bg-auto" style="background-image: url('/images/svg/background-pattern.svg')">
                        <div class="flex-1">
                            <div class="mb-[4.375rem]">
{{-- menu --}}
                                <div class="w-[2.8125rem] space-y-1.5">
                                    <div class="bg-white h-[0.1875rem]"></div>
                                    <div class="bg-white h-[0.1875rem] w-9"></div>
                                    <div class="bg-white h-[0.1875rem] w-[1.6875rem]"></div>
                                    <div class="bg-white h-[0.1875rem] w-4"></div>
                                </div>
                            </div>
                            <div class="text-[3.375rem] font-black text-white">
                                <h1 class="leading-[1.1]">HELLO, I’M<br>
                                    FOO<br>
                                    THIS…<br>
                                    IS MY LEGACY
                                </h1>
                            </div>
                            <div class="flex font-black my-[3.125rem]">
                                <div class="flex-1">
                                    <span class="block text-[#FFCF7B] text-[2.125rem]">24</span>
                                    <span class="block text-[#B1B7D6] text-[0.8125rem]">CLIENTS</span>
                                </div>
                                <div class="flex-1">
                                    <span class="block text-[#FFCF7B] text-[2.125rem]">32</span>
                                    <span class="block text-[#B1B7D6] text-[0.8125rem]">PROJECTS</span>
                                </div>
                                <div class="flex-1">
                                    <span class="block text-[#FFCF7B] text-[2.125rem]">06</span>
                                    <span class="block text-[#B1B7D6] text-[0.8125rem]">TOOLS</span>
                                </div>
                            </div>
                            <div>
                                <a href="">
                                    <button type="button" class="inline-flex justify-between items-center px-6 py-3 border border-transparent shadow-sm text-[0.8125rem] font-black text-white bg-[#4046FF] hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 max-w-[11.25rem] w-full">
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
                                <div class="w-[25.125rem] h-[25.125rem] bg-[#1C1F2D] rounded-full bg-no-repeat bg-center bg-cover" style="background-image: url('https://www.liveabout.com/thmb/FeWbkEye5kn7wmE96gVodlbFsig=/2121x1193/smart/filters:no_upscale()/GettyImages-638316888-58bd8bc93df78c353c5b8631.jpg')"></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between relative bg-[#1C1F2D] px-[5.3125rem] pt-20 mx-[1.5625rem] overflow-hidden">
                        <div class="flex-1 pr-12 text-[#B1B7D6] leading-loose">
                            <h2 class="mb-4 text-white text-[2.75rem] font-black">
                                I AM
                            </h2>
                            <p class="text-[0.9375rem] mb-10">
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
                                <div class="relative w-[15.625rem] bg-[#4046FF] px-7 pb-[1.875rem] pt-3 font-bold leading-loose text-white space-y-7">
                                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center w-[3.375rem] h-[3.375rem] rounded-full" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="#4046FF">
                                            <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <h3 class="text-[1.3125rem]">
                                        UI & UX
                                    </h3>
                                    <p class="text-sm leading-loose">
                                        Expertise in UI & UX design. more focused on visual designs aspects.
                                    </p>
                                    <a href="#" class="flex items-center text-base">
                                        View more
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>

                                <div class="relative w-[15.625rem] bg-[#555C7E] px-7 pb-[1.875rem] pt-3 font-bold leading-loose text-white space-y-7">
                                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center w-[3.375rem] h-[3.375rem] rounded-full" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="#4046FF">
                                            <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <h3 class="text-[1.3125rem]">
                                        UI & UX
                                    </h3>
                                    <p class="text-sm leading-loose">
                                        Expertise in UI & UX design. more focused on visual designs aspects.
                                    </p>
                                    <a href="#" class="flex items-center text-base">
                                        View more
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="space-y-12">
                                <h2 class="text-xl text-white font-bold pb-3">
                                    MOST SKILL IN
                                </h2>

                                <div class="relative w-[15.625rem] bg-[#555C7E] px-7 pb-[1.875rem] pt-3 font-bold leading-loose text-white space-y-7">
                                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center w-[3.375rem] h-[3.375rem] rounded-full" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="#4046FF">
                                            <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <h3 class="text-[1.3125rem]">
                                        UI & UX
                                    </h3>
                                    <p class="text-sm leading-loose">
                                        Expertise in UI & UX design. more focused on visual designs aspects.
                                    </p>
                                    <a href="#" class="flex items-center text-base">
                                        View more
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>

                                <div class="relative w-[15.625rem] bg-[#555C7E] px-7 pb-[1.875rem] pt-3 font-bold leading-loose text-white space-y-7">
                                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center w-[3.375rem] h-[3.375rem] rounded-full" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="#4046FF">
                                            <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <h3 class="text-[1.3125rem]">
                                        UI & UX
                                    </h3>
                                    <p class="text-sm leading-loose">
                                        Expertise in UI & UX design. more focused on visual designs aspects.
                                    </p>
                                    <a href="#" class="flex items-center text-base">
                                        View more
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative bg-[#1C1F2D] px-[5.3125rem] py-20 mx-[1.5625rem] text-[#B1B7D6] leading-loose overflow-hidden bg-no-repeat bg-right-bottom bg-auto" style="background-image: url('/images/svg/background-pattern-2.svg')">

                        <h2 class="mb-8 text-white text-[2.75rem] font-black">
                            EXPERIENCED
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
                                        <p class="text-[0.9375rem] text-[#B1B7D6] font-bold text-right">
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
                                        <p class="text-[0.9375rem] text-[#B1B7D6] font-bold text-left">
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
                                        <p class="text-[0.9375rem] text-[#B1B7D6] font-bold text-right">
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
                                        <p class="text-[0.9375rem] text-[#B1B7D6] font-bold text-left">
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
                                        <p class="text-[0.9375rem] text-[#B1B7D6] font-bold text-right">
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
                                        <p class="text-[0.9375rem] text-[#B1B7D6] font-bold text-left">
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
                                        <p class="text-[0.9375rem] text-[#B1B7D6] font-bold text-right">
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
                </div
                >
                <div class="flex-1">

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

                                <h2 class="absolute pl-16 mb-8 mt-12 text-white text-[46px] font-black tracking-wider z-20">
                                    PROJECTS
                                </h2>

                                <ul
                                    x-ref="slider"
                                    tabindex="0"
                                    role="listbox"
                                    aria-labelledby="carousel-content-label"
                                    class="flex w-full overflow-hidden snap-x snap-mandatory max-h-[550px] min-h-[550px] h-full">

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
                                            <p class="font-bold text-sm max-w-[300px] leading-loose mb-6">
                                                App designed for people’s wellness.
                                                There are many functionalities
                                                Implemented for better engagement. Food,
                                                chat, events and leader boards are the
                                                major functionalities.
                                            </p>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-[17px] font-bold text-white">
                                                    VIEW PROJECT
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-[17px] font-bold text-white">
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
                                            <p class="font-bold text-sm max-w-[300px] leading-loose mb-6">
                                                App designed for people’s wellness.
                                                There are many functionalities
                                                Implemented for better engagement. Food,
                                                chat, events and leader boards are the
                                                major functionalities.
                                            </p>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-[17px] font-bold text-white">
                                                    VIEW PROJECT
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-[17px] font-bold text-white">
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
                                            <p class="font-bold text-sm max-w-[300px] leading-loose mb-6">
                                                App designed for people’s wellness.
                                                There are many functionalities
                                                Implemented for better engagement. Food,
                                                chat, events and leader boards are the
                                                major functionalities.
                                            </p>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-[17px] font-bold text-white">
                                                    VIEW PROJECT
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-[17px] font-bold text-white">
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
                                            <p class="font-bold text-sm max-w-[300px] leading-loose mb-6">
                                                App designed for people’s wellness.
                                                There are many functionalities
                                                Implemented for better engagement. Food,
                                                chat, events and leader boards are the
                                                major functionalities.
                                            </p>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-[17px] font-bold text-white">
                                                    VIEW PROJECT
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-[17px] font-bold text-white">
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
                                            <p class="font-bold text-sm max-w-[300px] leading-loose mb-6">
                                                App designed for people’s wellness.
                                                There are many functionalities
                                                Implemented for better engagement. Food,
                                                chat, events and leader boards are the
                                                major functionalities.
                                            </p>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-[17px] font-bold text-white">
                                                    VIEW PROJECT
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-[17px] font-bold text-white">
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
                                            <p class="font-bold text-sm max-w-[300px] leading-loose mb-6">
                                                App designed for people’s wellness.
                                                There are many functionalities
                                                Implemented for better engagement. Food,
                                                chat, events and leader boards are the
                                                major functionalities.
                                            </p>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-[17px] font-bold text-white">
                                                    VIEW PROJECT
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href="" class="block">
                                                <button type="button" class="inline-flex justify-between items-center text-[17px] font-bold text-white">
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

                                        <span class="ml-5 text-[#656A84] text-[15px] font-black group-hover:text-[#B1B7D6]">
                                            PREVIOUS PROJECT
                                        </span>
                                    </div>

                                    <div
                                        x-on:click="next"
                                        :aria-disabled="atEnd"
                                        :tabindex="atEnd ? -1 : 0"
                                        :class="{ 'opacity-50 cursor-not-allowed': atEnd }"
                                        class="flex-1 flex justify-end items-center bg-[#272C41] py-[35px] pr-[82px] group cursor-pointer">
                                    <!-- Next Button -->
                                        <span class="mr-5 text-[#656A84] text-[15px] font-black group-hover:text-[#B1B7D6]">
                                            NEXT PROJECT
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

{{--                    <div class="bg-blue-500 h-24 m-[1.5625rem]"></div>--}}
                </div>
            </div>

        </main>

    </body>
</html>
