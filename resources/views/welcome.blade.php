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

            <div class="flex border border-blue-500 p-[1.5625rem]">
                <div class="flex-1">
                    <div class="flex relative bg-[#1C1F2D] px-[5.3125rem] pt-[2.1875rem] pb-[6.25rem] m-[1.5625rem] overflow-hidden bg-no-repeat bg-right-top bg-auto" style="background-image: url('/images/svg/background-pattern.svg')">
                        <div class="flex-1">
                            <div class="border border-red-900 text-[3.375rem] font-black text-[#DEE3FF]">
                                <h1 class="leading-[1.1]">HELLO, I’M<br>
                                    FOO<br>
                                    THIS…<br>
                                    IS MY LEGACY
                                </h1>
                            </div>
                            <div class="flex border border-blue-800 font-black my-[3.125rem]">
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
                            <div class="border border-pink-300">
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
                        <div class="flex-1 pt-10">
                            <div class="flex items-center justify-center w-[30.0625rem] h-[30.0625rem] rounded-full" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
                                <div class="w-[25.125rem] h-[25.125rem] bg-[#1C1F2D] rounded-full bg-no-repeat bg-center bg-cover" style="background-image: url('http://i1.adis.ws/i/canon/pro-ivan-weiss-headshot-tips-1_e91f93fb483647c68ccf8bb8c699b716?$media-collection-full-dt-jpg$')"></div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-red-500 h-64 m-[1.5625rem]"></div>
                </div>
                <div class="flex-1">
                    <div class="bg-blue-500 h-32 m-[1.5625rem]"></div>
                    <div class="bg-blue-500 h-24 m-[1.5625rem]"></div>
                </div>
            </div>

        </main>

    </body>
</html>
