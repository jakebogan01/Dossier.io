<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full overflow-x-hidden">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="MyDossier help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves.">
        <meta property="og:description" content="MyDossier help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves.">
        <meta property="og:title" content="MyDossier Dashboard">
        <title>MyDossier</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
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
        <script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","name":"MyDossier Dashboard","description":"Help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves."}</script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
        <script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.js"></script>
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
            .project-carousel {
                -ms-overflow-style: none; /* Edge, Internet Explorer */
                scrollbar-width: none; /* Firefox */
                overflow-y: scroll;
            }
            .project-carousel::-webkit-scrollbar {
                display: none; /* Chrome, Safari, Opera */
            }
        </style>
    </head>
    <body class="antialiased bg-[#0F1119] h-full" x-data="{ showWarning: true }">
        <div x-cloak x-show="showWarning" class="relative bg-indigo-600">
            <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                <div class="pr-16 sm:text-center sm:px-16">
                    <p class="font-medium text-white">
                        <span> Warning: This site is currently in Beta! </span>
                    </p>
                </div>
                <div @click="showWarning = false" class="absolute inset-y-0 right-0 pt-1 pr-1 flex items-start sm:pt-1 sm:pr-2 sm:items-start">
                    <button type="button" class="flex p-2 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-white">
                        <span class="sr-only">Dismiss</span>
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>
            </div>
        </div>
        {{ $slot }}
        @livewireScripts
    </body>
</html>
