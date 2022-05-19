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

        <style>
            body {
                font-family: 'Lato', sans-serif;
            }


            @media only screen and (max-width: 1000px) {

            }
        </style>

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

            <div class="flex border border-blue-500 py-[3.125rem] px-[1.5625rem]">
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
                                    <button type="button" class="inline-flex items-center px-6 py-3 border border-transparent shadow-sm text-[0.8125rem] font-black text-white bg-[#4046FF] hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 max-w-[11.25rem] w-full">
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

                    <div class="flex justify-between relative bg-[#1C1F2D] px-[5.3125rem] pt-20 mx-[1.5625rem] overflow-hidden bg-no-repeat bg-right-top bg-auto">
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
                </div>
                <div class="flex-1">
                    <div class="bg-blue-500 h-32 m-[1.5625rem]"></div>
                    <div class="bg-blue-500 h-24 m-[1.5625rem]"></div>
                </div>
            </div>

        </main>

    </body>
</html>
