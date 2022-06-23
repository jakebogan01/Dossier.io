const mix = require('laravel-mix');
// const domain = 'dossier.test';
// const homedir = require('os').homedir();

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .sass('resources/sass/app.sass', 'public/css')
    // .browserSync({
    //     proxy: 'https://' + domain,
    //     notify: {
    //         styles: {
    //             top: 'auto',
    //             bottom: '-20rem'
    //         }
    //     },
    //     host: domain,
    //     open: 'external',
    //     https: {
    //         key: homedir + "/.config/valet/Certificates/" + domain + ".key",
    //         cert: homedir + "/.config/valet/Certificates/" + domain + ".crt"
    //     },
    // });

mix.copy('resources/images', 'public/images');

if (mix.inProduction()) {
    mix.version();
}
