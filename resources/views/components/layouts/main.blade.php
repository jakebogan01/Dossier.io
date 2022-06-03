<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dossier.io</title>

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
    <body class="antialiased bg-[#0F1119] h-full">

{{--    @if (Route::has('login'))--}}
{{--        @auth--}}
{{--            <a href="{{ url('/dashboard') }}">--}}
{{--                <button type="button"--}}
{{--                        class="inline-flex justify-between items-center px-6 py-2 border border-transparent shadow-sm text-base font-bold text-white bg-[#4046FF] sm:hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 tracking-widest transition-colors">--}}
{{--                    DASHBOARD--}}
{{--                </button>--}}
{{--            </a>--}}
{{--        @else--}}
{{--            <a href="{{ route('login') }}">--}}
{{--                <button type="button"--}}
{{--                        class="inline-flex justify-between items-center px-6 py-2 border border-transparent shadow-sm text-base font-bold text-white bg-[#4046FF] sm:hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 tracking-widest transition-colors">--}}
{{--                    LOGIN--}}
{{--                </button>--}}
{{--            </a>--}}

{{--            @if (Route::has('register'))--}}
{{--                <a href="{{ route('register') }}">--}}
{{--                    <button type="button"--}}
{{--                            class="inline-flex justify-between items-center px-6 py-2 ml-6 border border-transparent shadow-sm text-base font-bold text-white bg-[#2429CE] sm:hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 tracking-widest transition-colors">--}}
{{--                        REGISTER--}}
{{--                    </button>--}}
{{--                </a>--}}
{{--            @endif--}}
{{--        @endauth--}}
{{--    @endif--}}

        {{ $slot }}

    </body>
</html>
