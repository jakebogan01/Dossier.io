<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full overflow-x-hidden">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dossier.io help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves.">
        <meta property="og:description" content="Dossier.io help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves.">
        <meta property="og:title" content="Dossier.io Dashboard">
        <title>Dossier.io</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="icon" href="/images/icon/icon.svg" id="icon" type="image/svg+xml">
        <!-- Scripts -->
        <script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","name":"Dossier.io Dashboard","description":"Help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves."}</script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
        <script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.js"></script>
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
        </style>
    </head>
    <body class="antialiased bg-[#0F1119] h-full">
        {{ $slot }}
    </body>
</html>
