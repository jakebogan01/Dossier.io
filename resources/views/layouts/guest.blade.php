<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full overflow-x-hidden">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Dossier.io help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves.">
        <meta property="og:description" content="Dossier.io help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves.">
        <meta property="og:title" content="Dossier.io Dashboard">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="shortcut icon" type="image/x-icon" href="/images/icons/light-icon.svg" id="faviconTag">
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
        <script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","name":"Dossier.io Dashboard","description":"Help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves."}</script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
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
        </style>
    </head>
    <body class="h-full">
        {{ $slot }}
    </body>
</html>
