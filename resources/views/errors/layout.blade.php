<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dossier.io help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves.">
        <meta property="og:description" content="Dossier.io help those who wish to create a personal portfolio without the hassle of doing any of the design work themselves.">
        <meta property="og:title" content="Dossier.io Dashboard">
        <title>@yield('title')</title>
        <!-- Styles -->
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
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 36px;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    @yield('message')
                </div>
            </div>
        </div>
    </body>
</html>
